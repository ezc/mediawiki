<?php
/**
 * Handler for DjVu images
 *
 * @file
 * @ingroup Media
 */

/**
 * Handler for DjVu images
 *
 * @ingroup Media
 */
class DjVuHandler extends ImageHandler {

	/**
	 * @return bool
	 */
	function isEnabled() {
		global $wgDjvuRenderer, $wgDjvuDump, $wgDjvuToXML;
		if ( !$wgDjvuRenderer || ( !$wgDjvuDump && !$wgDjvuToXML ) ) {
			wfDebug( "DjVu is disabled, please set \$wgDjvuRenderer and \$wgDjvuDump\n" );
			return false;
		} else {
			return true;
		}
	}

	/**
	 * @param $file
	 * @return bool
	 */
	function mustRender( $file ) {
		return true;
	}

	/**
	 * @param $file
	 * @return bool
	 */
	function isMultiPage( $file ) {
		return true;
	}

	/**
	 * @return array
	 */
	function getParamMap() {
		return array(
			'img_width' => 'width',
			'img_page' => 'page',
		);
	}

	/**
	 * @param $name
	 * @param $value
	 * @return bool
	 */
	function validateParam( $name, $value ) {
		if ( in_array( $name, array( 'width', 'height', 'page' ) ) ) {
			if ( $value <= 0 ) {
				return false;
			} else {
				return true;
			}
		} else {
			return false;
		}
	}

	/**
	 * @param $params
	 * @return bool|string
	 */
	function makeParamString( $params ) {
		$page = isset( $params['page'] ) ? $params['page'] : 1;
		if ( !isset( $params['width'] ) ) {
			return false;
		}
		return "page{$page}-{$params['width']}px";
	}

	/**
	 * @param $str
	 * @return array|bool
	 */
	function parseParamString( $str ) {
		$m = false;
		if ( preg_match( '/^page(\d+)-(\d+)px$/', $str, $m ) ) {
			return array( 'width' => $m[2], 'page' => $m[1] );
		} else {
			return false;
		}
	}

	/**
	 * @param $params
	 * @return array
	 */
	function getScriptParams( $params ) {
		return array(
			'width' => $params['width'],
			'page' => $params['page'],
		);
	}

	/**
	 * @param $image File
	 * @param  $dstPath
	 * @param  $dstUrl
	 * @param  $params
	 * @param int $flags
	 * @return MediaTransformError|ThumbnailImage|TransformParameterError
	 */
	function doTransform( $image, $dstPath, $dstUrl, $params, $flags = 0 ) {
		global $wgDjvuRenderer, $wgDjvuPostProcessor;

		// Fetch XML and check it, to give a more informative error message than the one which
		// normaliseParams will inevitably give.
		$xml = $image->getMetadata();
		if ( !$xml ) {
			$width = isset( $params['width'] ) ? $params['width'] : 0;
			$height = isset( $params['height'] ) ? $params['height'] : 0;
			return new MediaTransformError( 'thumbnail_error', $width, $height,
				wfMsg( 'djvu_no_xml' ) );
		}

		if ( !$this->normaliseParams( $image, $params ) ) {
			return new TransformParameterError( $params );
		}
		$width = $params['width'];
		$height = $params['height'];
		$srcPath = $image->getLocalRefPath();
		$page = $params['page'];
		if ( $page > $this->pageCount( $image ) ) {
			return new MediaTransformError( 'thumbnail_error', $width, $height, wfMsg( 'djvu_page_error' ) );
		}

		if ( $flags & self::TRANSFORM_LATER ) {
			return new ThumbnailImage( $image, $dstUrl, $width, $height, $dstPath, $page );
		}

		if ( !wfMkdirParents( dirname( $dstPath ), null, __METHOD__ ) ) {
			return new MediaTransformError( 'thumbnail_error', $width, $height, wfMsg( 'thumbnail_dest_directory' ) );
		}

		# Use a subshell (brackets) to aggregate stderr from both pipeline commands
		# before redirecting it to the overall stdout. This works in both Linux and Windows XP.
		$cmd = '(' . wfEscapeShellArg( $wgDjvuRenderer ) . " -format=ppm -page={$page}" .
			" -size={$params['physicalWidth']}x{$params['physicalHeight']} " .
			wfEscapeShellArg( $srcPath );
		if ( $wgDjvuPostProcessor ) {
			$cmd .= " | {$wgDjvuPostProcessor}";
		}
		$cmd .= ' > ' . wfEscapeShellArg($dstPath) . ') 2>&1';
		wfProfileIn( 'ddjvu' );
		wfDebug( __METHOD__.": $cmd\n" );
		$retval = '';
		$err = wfShellExec( $cmd, $retval );
		wfProfileOut( 'ddjvu' );

		$removed = $this->removeBadFile( $dstPath, $retval );
		if ( $retval != 0 || $removed ) {
			wfDebugLog( 'thumbnail',
				sprintf( 'thumbnail failed on %s: error %d "%s" from "%s"',
					wfHostname(), $retval, trim($err), $cmd ) );
			return new MediaTransformError( 'thumbnail_error', $width, $height, $err );
		} else {
			return new ThumbnailImage( $image, $dstUrl, $width, $height, $dstPath, $page );
		}
	}

	/**
	 * Cache an instance of DjVuImage in an Image object, return that instance
	 *
	 * @return DjVuImage
	 */
	function getDjVuImage( $image, $path ) {
		if ( !$image ) {
			$deja = new DjVuImage( $path );
		} elseif ( !isset( $image->dejaImage ) ) {
			$deja = $image->dejaImage = new DjVuImage( $path );
		} else {
			$deja = $image->dejaImage;
		}
		return $deja;
	}

	/**
	 * Cache a document tree for the DjVu XML metadata
	 * @param $image File
	 */
	function getMetaTree( $image , $gettext = false ) {
		if ( isset( $image->dejaMetaTree ) ) {
			return $image->dejaMetaTree;
		}

		$metadata = $image->getMetadata();
		if ( !$this->isMetadataValid( $image, $metadata ) ) {
			wfDebug( "DjVu XML metadata is invalid or missing, should have been fixed in upgradeRow\n" );
			return false;
		}
		wfProfileIn( __METHOD__ );

		wfSuppressWarnings();
		try {
			// Set to false rather than null to avoid further attempts
			$image->dejaMetaTree = false;
			$image->djvuTextTree = false;
			$tree = new SimpleXMLElement( $metadata );
			if( $tree->getName() == 'mw-djvu' ) {
				foreach($tree->children() as $b){
					if( $b->getName() == 'DjVuTxt' ) {
						$image->djvuTextTree = $b;
					}
					elseif ( $b->getName() == 'DjVuXML' ) {
						$image->dejaMetaTree = $b;
					}
				}
			} else {
				$image->dejaMetaTree = $tree;
			}
		} catch( Exception $e ) {
			wfDebug( "Bogus multipage XML metadata on '{$image->getName()}'\n" );
		}
		wfRestoreWarnings();
		wfProfileOut( __METHOD__ );
		if( $gettext ) {
			return $image->djvuTextTree;
		} else {
			return $image->dejaMetaTree;
		}
	}

	function getImageSize( $image, $path ) {
		return $this->getDjVuImage( $image, $path )->getImageSize();
	}

	function getThumbType( $ext, $mime, $params = null ) {
		global $wgDjvuOutputExtension;
		static $mime;
		if ( !isset( $mime ) ) {
			$magic = MimeMagic::singleton();
			$mime = $magic->guessTypesForExtension( $wgDjvuOutputExtension );
		}
		return array( $wgDjvuOutputExtension, $mime );
	}

	function getMetadata( $image, $path ) {
		wfDebug( "Getting DjVu metadata for $path\n" );
		return $this->getDjVuImage( $image, $path )->retrieveMetaData();
	}

	function getMetadataType( $image ) {
		return 'djvuxml';
	}

	function isMetadataValid( $image, $metadata ) {
		return !empty( $metadata ) && $metadata != serialize(array());
	}

	function pageCount( $image ) {
		$tree = $this->getMetaTree( $image );
		if ( !$tree ) {
			return false;
		}
		return count( $tree->xpath( '//OBJECT' ) );
	}

	function getPageDimensions( $image, $page ) {
		$tree = $this->getMetaTree( $image );
		if ( !$tree ) {
			return false;
		}

		$o = $tree->BODY[0]->OBJECT[$page-1];
		if ( $o ) {
			return array(
				'width' => intval( $o['width'] ),
				'height' => intval( $o['height'] )
			);
		} else {
			return false;
		}
	}

	function getPageText( $image, $page ){
		$tree = $this->getMetaTree( $image, true );
		if ( !$tree ) {
			return false;
		}

		$o = $tree->BODY[0]->PAGE[$page-1];
		if ( $o ) {
			$txt = $o['value'];
			return $txt;
		} else {
			return false;
		}

	}

}
