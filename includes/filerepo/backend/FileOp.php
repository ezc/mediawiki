<?php
/**
 * @file
 * @ingroup FileBackend
 * @author Aaron Schulz
 */

/**
 * Helper class for representing operations with transaction support.
 * FileBackend::doOperations() will require these classes for supported operations.
 * Do not use this class from places outside FileBackend.
 * 
 * Use of large fields should be avoided as we want to support
 * potentially many FileOp classes in large arrays in memory.
 * 
 * @ingroup FileBackend
 * @since 1.19
 */
abstract class FileOp {
	/** @var Array */
	protected $params = array();
	/** @var FileBackendBase */
	protected $backend;

	protected $state = self::STATE_NEW; // integer
	protected $failed = false; // boolean
	protected $useLatest = true; // boolean

	protected $sourceSha1; // string
	protected $destSameAsSource; // boolean

	/* Object life-cycle */
	const STATE_NEW = 1;
	const STATE_CHECKED = 2;
	const STATE_ATTEMPTED = 3;

	/**
	 * Build a new file operation transaction
	 *
	 * @params $backend FileBackend
	 * @params $params Array
	 */
	final public function __construct( FileBackendBase $backend, array $params ) {
		$this->backend = $backend;
		foreach ( $this->allowedParams() as $name ) {
			if ( isset( $params[$name] ) ) {
				$this->params[$name] = $params[$name];
			}
		}
		$this->params = $params;
	}

	/**
	 * Allow stale data for file reads and existence checks.
	 *
	 * @return void
	 */
	final protected function allowStaleReads() {
		$this->useLatest = false;
	}

	/**
	 * Attempt a series of file operations.
	 * Callers are responsible for handling file locking.
	 * 
	 * $opts is an array of options, including:
	 * 'force'               : Errors that would normally cause a rollback do not.
	 *                         The remaining operations are still attempted if any fail.
	 * 'allowStale'          : Don't require the latest available data.
	 *                         This can increase performance for non-critical writes.
	 *                         This has no effect unless the 'force' flag is set.
	 * 
	 * @param $performOps Array List of FileOp operations
	 * @param $opts Array Batch operation options
	 * @return Status 
	 */
	final public static function attemptBatch( array $performOps, array $opts ) {
		$status = Status::newGood();

		$allowStale = !empty( $opts['allowStale'] );
		$ignoreErrors = !empty( $opts['force'] );

		$predicates = FileOp::newPredicates(); // account for previous op in prechecks
		// Do pre-checks for each operation; abort on failure...
		foreach ( $performOps as $index => $fileOp ) {
			if ( $allowStale ) {
				$fileOp->allowStaleReads(); // allow potentially stale reads
			}
			$subStatus = $fileOp->precheck( $predicates );
			$status->merge( $subStatus );
			if ( !$subStatus->isOK() ) { // operation failed?
				$status->success[$index] = false;
				++$status->failCount;
				if ( !$ignoreErrors ) {
					return $status; // abort
				}
			}
		}

		// Attempt each operation...
		foreach ( $performOps as $index => $fileOp ) {
			if ( $fileOp->failed() ) {
				continue; // nothing to do
			}
			$subStatus = $fileOp->attempt();
			$status->merge( $subStatus );
			if ( $subStatus->isOK() ) {
				$status->success[$index] = true;
				++$status->successCount;
			} else {
				$status->success[$index] = false;
				++$status->failCount;
				if ( !$ignoreErrors ) {
					// Log remaining ops as failed for recovery...
					for ( $i = ($index + 1); $i < count( $performOps ); $i++ ) {
						$performOps[$i]->logFailure( 'attempt_aborted' );
					}
					return $status; // bail out
				}
			}
		}

		return $status;
	}

	/**
	 * Get the value of the parameter with the given name
	 * 
	 * @param $name string
	 * @return mixed Returns null if the parameter is not set
	 */
	final public function getParam( $name ) {
		return isset( $this->params[$name] ) ? $this->params[$name] : null;
	}

	/**
	 * Check if this operation failed precheck() or attempt()
	 * 
	 * @return type 
	 */
	final public function failed() {
		return $this->failed;
	}

	/**
	 * Get a new empty predicates array for precheck()
	 *
	 * @return Array 
	 */
	final public static function newPredicates() {
		return array( 'exists' => array(), 'sha1' => array() );
	}

	/**
	 * Check preconditions of the operation without writing anything
	 *
	 * @param $predicates Array
	 * @return Status
	 */
	final public function precheck( array &$predicates ) {
		if ( $this->state !== self::STATE_NEW ) {
			return Status::newFatal( 'fileop-fail-state', self::STATE_NEW, $this->state );
		}
		$this->state = self::STATE_CHECKED;
		$status = $this->doPrecheck( $predicates );
		if ( !$status->isOK() ) {
			$this->failed = true;
		}
		return $status;
	}

	/**
	 * Attempt the operation, backing up files as needed; this must be reversible
	 *
	 * @return Status
	 */
	final public function attempt() {
		if ( $this->state !== self::STATE_CHECKED ) {
			return Status::newFatal( 'fileop-fail-state', self::STATE_CHECKED, $this->state );
		} elseif ( $this->failed ) { // failed precheck
			return Status::newFatal( 'fileop-fail-attempt-precheck' );
		}
		$this->state = self::STATE_ATTEMPTED;
		$status = $this->doAttempt();
		if ( !$status->isOK() ) {
			$this->failed = true;
			$this->logFailure( 'attempt' );
		}
		return $status;
	}

	/**
	 * Get a list of storage paths read from for this operation
	 *
	 * @return Array
	 */
	public function storagePathsRead() {
		return array();
	}

	/**
	 * Get a list of storage paths written to for this operation
	 *
	 * @return Array
	 */
	public function storagePathsChanged() {
		return array();
	}

	/**
	 * @return Array List of allowed parameters
	 */
	protected function allowedParams() {
		return array();
	}

	/**
	 * @return Status
	 */
	protected function doPrecheck( array &$predicates ) {
		return Status::newGood();
	}

	/**
	 * @return Status
	 */
	abstract protected function doAttempt();

	/**
	 * Check for errors with regards to the destination file already existing.
	 * This also updates the destSameAsSource and sourceSha1 member variables.
	 * A bad status will be returned if there is no chance it can be overwritten.
	 * 
	 * @param $predicates Array
	 * @return Status
	 */
	protected function precheckDestExistence( array $predicates ) {
		$status = Status::newGood();
		// Get hash of source file/string and the destination file
		$this->sourceSha1 = $this->getSourceSha1Base36(); // FS file or data string
		if ( $this->sourceSha1 === null ) { // file in storage?
			$this->sourceSha1 = $this->fileSha1( $this->params['src'], $predicates );
		}
		$this->destSameAsSource = false;
		if ( $this->fileExists( $this->params['dst'], $predicates ) ) {
			if ( $this->getParam( 'overwriteDest' ) ) {
				return $status; // OK
			} elseif ( $this->getParam( 'overwriteSame' ) ) {
				$dhash = $this->fileSha1( $this->params['dst'], $predicates );
				// Check if hashes are valid and match each other...
				if ( !strlen( $this->sourceSha1 ) || !strlen( $dhash ) ) {
					$status->fatal( 'backend-fail-hashes' );
				} elseif ( $this->sourceSha1 !== $dhash ) {
					// Give an error if the files are not identical
					$status->fatal( 'backend-fail-notsame', $this->params['dst'] );
				} else {
					$this->destSameAsSource = true; // OK
				}
				return $status; // do nothing; either OK or bad status
			} else {
				$status->fatal( 'backend-fail-alreadyexists', $this->params['dst'] );
				return $status;
			}
		}
		return $status;
	}

	/**
	 * precheckDestExistence() helper function to get the source file SHA-1.
	 * Subclasses should overwride this iff the source is not in storage.
	 *
	 * @return string|false Returns false on failure
	 */
	protected function getSourceSha1Base36() {
		return null; // N/A
	}

	/**
	 * Check if a file will exist in storage when this operation is attempted
	 * 
	 * @param $source string Storage path
	 * @param $predicates Array
	 * @return bool 
	 */
	final protected function fileExists( $source, array $predicates ) {
		if ( isset( $predicates['exists'][$source] ) ) {
			return $predicates['exists'][$source]; // previous op assures this
		} else {
			$params = array( 'src' => $source, 'latest' => $this->useLatest );
			return $this->backend->fileExists( $params );
		}
	}

	/**
	 * Get the SHA-1 of a file in storage when this operation is attempted
	 * 
	 * @param $source string Storage path
	 * @param $predicates Array
	 * @return string|false 
	 */
	final protected function fileSha1( $source, array $predicates ) {
		if ( isset( $predicates['sha1'][$source] ) ) {
			return $predicates['sha1'][$source]; // previous op assures this
		} else {
			$params = array( 'src' => $source, 'latest' => $this->useLatest );
			return $this->backend->getFileSha1Base36( $params );
		}
	}

	/**
	 * Log a file operation failure and preserve any temp files
	 * 
	 * @param $action string
	 * @return void
	 */
	final protected function logFailure( $action ) {
		$params = $this->params;
		$params['failedAction'] = $action;
		try {
			wfDebugLog( 'FileOperation',
				get_class( $this ) . ' failed:' . serialize( $params ) );
		} catch ( Exception $e ) {
			// bad config? debug log error?
		}
	}
}

/**
 * Store a file into the backend from a file on the file system.
 * Parameters similar to FileBackend::storeInternal(), which include:
 *     src           : source path on file system
 *     dst           : destination storage path
 *     overwriteDest : do nothing and pass if an identical file exists at destination
 *     overwriteSame : override any existing file at destination
 */
class StoreFileOp extends FileOp {
	protected function allowedParams() {
		return array( 'src', 'dst', 'overwriteDest', 'overwriteSame' );
	}

	protected function doPrecheck( array &$predicates ) {
		$status = Status::newGood();
		// Check if the source file exists on the file system
		if ( !is_file( $this->params['src'] ) ) {
			$status->fatal( 'backend-fail-notexists', $this->params['src'] );
			return $status;
		}
		// Check if destination file exists
		$status->merge( $this->precheckDestExistence( $predicates ) );
		if ( !$status->isOK() ) {
			return $status;
		}
		// Update file existence predicates
		$predicates['exists'][$this->params['dst']] = true;
		$predicates['sha1'][$this->params['dst']] = $this->sourceSha1;
		return $status; // safe to call attempt()
	}

	protected function doAttempt() {
		$status = Status::newGood();
		// Store the file at the destination
		if ( !$this->destSameAsSource ) {
			$status->merge( $this->backend->storeInternal( $this->params ) );
		}
		return $status;
	}

	protected function getSourceSha1Base36() {
		wfSuppressWarnings();
		$hash = sha1_file( $this->params['src'] );
		wfRestoreWarnings();
		if ( $hash !== false ) {
			$hash = wfBaseConvert( $hash, 16, 36, 31 );
		}
		return $hash;
	}

	public function storagePathsChanged() {
		return array( $this->params['dst'] );
	}
}

/**
 * Create a file in the backend with the given content.
 * Parameters similar to FileBackend::createInternal(), which include:
 *     content       : a string of raw file contents
 *     dst           : destination storage path
 *     overwriteDest : do nothing and pass if an identical file exists at destination
 *     overwriteSame : override any existing file at destination
 */
class CreateFileOp extends FileOp {
	protected function allowedParams() {
		return array( 'content', 'dst', 'overwriteDest', 'overwriteSame' );
	}

	protected function doPrecheck( array &$predicates ) {
		$status = Status::newGood();
		// Check if destination file exists
		$status->merge( $this->precheckDestExistence( $predicates ) );
		if ( !$status->isOK() ) {
			return $status;
		}
		// Update file existence predicates
		$predicates['exists'][$this->params['dst']] = true;
		$predicates['sha1'][$this->params['dst']] = $this->sourceSha1;
		return $status; // safe to call attempt()
	}

	protected function doAttempt() {
		$status = Status::newGood();
		// Create the file at the destination
		if ( !$this->destSameAsSource ) {
			$status->merge( $this->backend->createInternal( $this->params ) );
		}
		return $status;
	}

	protected function getSourceSha1Base36() {
		return wfBaseConvert( sha1( $this->params['content'] ), 16, 36, 31 );
	}

	public function storagePathsChanged() {
		return array( $this->params['dst'] );
	}
}

/**
 * Copy a file from one storage path to another in the backend.
 * Parameters similar to FileBackend::copyInternal(), which include:
 *     src           : source storage path
 *     dst           : destination storage path
 *     overwriteDest : do nothing and pass if an identical file exists at destination
 *     overwriteSame : override any existing file at destination
 */
class CopyFileOp extends FileOp {
	protected function allowedParams() {
		return array( 'src', 'dst', 'overwriteDest', 'overwriteSame' );
	}

	protected function doPrecheck( array &$predicates ) {
		$status = Status::newGood();
		// Check if the source file exists
		if ( !$this->fileExists( $this->params['src'], $predicates ) ) {
			$status->fatal( 'backend-fail-notexists', $this->params['src'] );
			return $status;
		}
		// Check if destination file exists
		$status->merge( $this->precheckDestExistence( $predicates ) );
		if ( !$status->isOK() ) {
			return $status;
		}
		// Update file existence predicates
		$predicates['exists'][$this->params['dst']] = true;
		$predicates['sha1'][$this->params['dst']] = $this->sourceSha1;
		return $status; // safe to call attempt()
	}

	protected function doAttempt() {
		$status = Status::newGood();
		// Do nothing if the src/dst paths are the same
		if ( $this->params['src'] !== $this->params['dst'] ) {
			// Copy the file into the destination
			if ( !$this->destSameAsSource ) {
				$status->merge( $this->backend->copyInternal( $this->params ) );
			}
		}
		return $status;
	}

	public function storagePathsRead() {
		return array( $this->params['src'] );
	}

	public function storagePathsChanged() {
		return array( $this->params['dst'] );
	}
}

/**
 * Move a file from one storage path to another in the backend.
 * Parameters similar to FileBackend::moveInternal(), which include:
 *     src           : source storage path
 *     dst           : destination storage path
 *     overwriteDest : do nothing and pass if an identical file exists at destination
 *     overwriteSame : override any existing file at destination
 */
class MoveFileOp extends FileOp {
	protected function allowedParams() {
		return array( 'src', 'dst', 'overwriteDest', 'overwriteSame' );
	}

	protected function doPrecheck( array &$predicates ) {
		$status = Status::newGood();
		// Check if the source file exists
		if ( !$this->fileExists( $this->params['src'], $predicates ) ) {
			$status->fatal( 'backend-fail-notexists', $this->params['src'] );
			return $status;
		}
		// Check if destination file exists
		$status->merge( $this->precheckDestExistence( $predicates ) );
		if ( !$status->isOK() ) {
			return $status;
		}
		// Update file existence predicates
		$predicates['exists'][$this->params['src']] = false;
		$predicates['sha1'][$this->params['src']] = false;
		$predicates['exists'][$this->params['dst']] = true;
		$predicates['sha1'][$this->params['dst']] = $this->sourceSha1;
		return $status; // safe to call attempt()
	}

	protected function doAttempt() {
		$status = Status::newGood();
		// Do nothing if the src/dst paths are the same
		if ( $this->params['src'] !== $this->params['dst'] ) {
			if ( !$this->destSameAsSource ) {
				// Move the file into the destination
				$status->merge( $this->backend->moveInternal( $this->params ) );
			} else {
				// Just delete source as the destination needs no changes
				$params = array( 'src' => $this->params['src'] );
				$status->merge( $this->backend->deleteInternal( $params ) );
				if ( !$status->isOK() ) {
					return $status;
				}
			}
		}
		return $status;
	}

	public function storagePathsRead() {
		return array( $this->params['src'] );
	}

	public function storagePathsChanged() {
		return array( $this->params['dst'] );
	}
}

/**
 * Delete a file at the storage path.
 * Parameters similar to FileBackend::deleteInternal(), which include:
 *     src                 : source storage path
 *     ignoreMissingSource : don't return an error if the file does not exist
 */
class DeleteFileOp extends FileOp {
	protected $needsDelete = true;

	protected function allowedParams() {
		return array( 'src', 'ignoreMissingSource' );
	}

	protected function doPrecheck( array &$predicates ) {
		$status = Status::newGood();
		// Check if the source file exists
		if ( !$this->fileExists( $this->params['src'], $predicates ) ) {
			if ( !$this->getParam( 'ignoreMissingSource' ) ) {
				$status->fatal( 'backend-fail-notexists', $this->params['src'] );
				return $status;
			}
			$this->needsDelete = false;
		}
		// Update file existence predicates
		$predicates['exists'][$this->params['src']] = false;
		$predicates['sha1'][$this->params['src']] = false;
		return $status; // safe to call attempt()
	}

	protected function doAttempt() {
		$status = Status::newGood();
		if ( $this->needsDelete ) {
			// Delete the source file
			$status->merge( $this->backend->deleteInternal( $this->params ) );
			if ( !$status->isOK() ) {
				return $status;
			}
		}
		return $status;
	}

	public function storagePathsChanged() {
		return array( $this->params['src'] );
	}
}

/**
 * Placeholder operation that has no params and does nothing
 */
class NullFileOp extends FileOp {
	protected function doAttempt() {
		return Status::newGood();
	}
}
