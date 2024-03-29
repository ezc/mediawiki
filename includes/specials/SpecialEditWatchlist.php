<?php

/**
 * Provides the UI through which users can perform editing
 * operations on their watchlist
 *
 * @ingroup Watchlist
 * @author Rob Church <robchur@gmail.com>
 */
class SpecialEditWatchlist extends UnlistedSpecialPage {

	/**
	 * Editing modes
	 */
	const EDIT_CLEAR = 1;
	const EDIT_RAW = 2;
	const EDIT_NORMAL = 3;

	protected $successMessage;

	protected $toc;

	public function __construct(){
		parent::__construct( 'EditWatchlist' );
	}

	/**
	 * Main execution point
	 *
	 * @param $mode int
	 */
	public function execute( $mode ) {
		$this->setHeaders();

		$out = $this->getOutput();

		# Anons don't get a watchlist
		if( $this->getUser()->isAnon() ) {
			$out->setPageTitle( $this->msg( 'watchnologin' ) );
			$llink = Linker::linkKnown(
				SpecialPage::getTitleFor( 'Userlogin' ),
				$this->msg( 'loginreqlink' )->escaped(),
				array(),
				array( 'returnto' => $this->getTitle()->getPrefixedText() )
			);
			$out->addHTML( $this->msg( 'watchlistanontext' )->rawParams( $llink )->parse() );
			return;
		}

		$this->checkPermissions();

		$this->outputHeader();

		$out->addSubtitle( $this->msg( 'watchlistfor2', $this->getUser()->getName()
			)->rawParams( SpecialEditWatchlist::buildTools( null ) ) );

		# B/C: $mode used to be waaay down the parameter list, and the first parameter
		# was $wgUser
		if( $mode instanceof User ){
			$args = func_get_args();
			if( count( $args >= 4 ) ){
				$mode = $args[3];
			}
		}
		$mode = self::getMode( $this->getRequest(), $mode );

		switch( $mode ) {
			case self::EDIT_CLEAR:
				// The "Clear" link scared people too much.
				// Pass on to the raw editor, from which it's very easy to clear.

			case self::EDIT_RAW:
				$out->setPageTitle( $this->msg( 'watchlistedit-raw-title' ) );
				$form = $this->getRawForm();
				if( $form->show() ){
					$out->addHTML( $this->successMessage );
					$out->returnToMain();
				}
				break;

			case self::EDIT_NORMAL:
			default:
				$out->setPageTitle( $this->msg( 'watchlistedit-normal-title' ) );
				$form = $this->getNormalForm();
				if( $form->show() ){
					$out->addHTML( $this->successMessage );
					$out->returnToMain();
				} elseif ( $this->toc !== false ) {
					$out->prependHTML( $this->toc );
				}
				break;
		}
	}

	/**
	 * Extract a list of titles from a blob of text, returning
	 * (prefixed) strings; unwatchable titles are ignored
	 *
	 * @param $list String
	 * @return array
	 */
	private function extractTitles( $list ) {
		$titles = array();
		$list = explode( "\n", trim( $list ) );
		if( !is_array( $list ) ) {
			return array();
		}
		foreach( $list as $text ) {
			$text = trim( $text );
			if( strlen( $text ) > 0 ) {
				$title = Title::newFromText( $text );
				if( $title instanceof Title && $title->isWatchable() ) {
					$titles[] = $title->getPrefixedText();
				}
			}
		}
		return array_unique( $titles );
	}

	public function submitRaw( $data ){
		$wanted = $this->extractTitles( $data['Titles'] );
		$current = $this->getWatchlist();

		if( count( $wanted ) > 0 ) {
			$toWatch = array_diff( $wanted, $current );
			$toUnwatch = array_diff( $current, $wanted );
			$this->watchTitles( $toWatch );
			$this->unwatchTitles( $toUnwatch );
			$this->getUser()->invalidateCache();

			if( count( $toWatch ) > 0 || count( $toUnwatch ) > 0 ){
				$this->successMessage = $this->msg( 'watchlistedit-raw-done' )->parse();
			} else {
				return false;
			}

			if( count( $toWatch ) > 0 ) {
				$this->successMessage .= ' ' . $this->msg( 'watchlistedit-raw-added'
					)->numParams( count( $toWatch ) )->parse();
				$this->showTitles( $toWatch, $this->successMessage );
			}

			if( count( $toUnwatch ) > 0 ) {
				$this->successMessage .= ' ' . $this->msg( 'watchlistedit-raw-removed'
					)->numParams( count( $toUnwatch ) )->parse();
				$this->showTitles( $toUnwatch, $this->successMessage );
			}
		} else {
			$this->clearWatchlist();
			$this->getUser()->invalidateCache();

			if( count( $current ) > 0 ){
				$this->successMessage = $this->msg( 'watchlistedit-raw-done' )->parse();
			} else {
				return false;
			}

			$this->successMessage .= ' ' . $this->msg( 'watchlistedit-raw-removed'
				)->numParams( count( $current ) )->parse();
			$this->showTitles( $current, $this->successMessage );
		}
		return true;
	}

	/**
	 * Print out a list of linked titles
	 *
	 * $titles can be an array of strings or Title objects; the former
	 * is preferred, since Titles are very memory-heavy
	 *
	 * @param $titles array of strings, or Title objects
	 * @param $output String
	 */
	private function showTitles( $titles, &$output ) {
		$talk = $this->msg( 'talkpagelinktext' )->escaped();
		// Do a batch existence check
		$batch = new LinkBatch();
		foreach( $titles as $title ) {
			if( !$title instanceof Title ) {
				$title = Title::newFromText( $title );
			}
			if( $title instanceof Title ) {
				$batch->addObj( $title );
				$batch->addObj( $title->getTalkPage() );
			}
		}
		$batch->execute();
		// Print out the list
		$output .= "<ul>\n";
		foreach( $titles as $title ) {
			if( !$title instanceof Title ) {
				$title = Title::newFromText( $title );
			}
			if( $title instanceof Title ) {
				$output .= "<li>"
					. Linker::link( $title )
					. ' (' . Linker::link( $title->getTalkPage(), $talk )
					. ")</li>\n";
			}
		}
		$output .= "</ul>\n";
	}

	/**
	 * Prepare a list of titles on a user's watchlist (excluding talk pages)
	 * and return an array of (prefixed) strings
	 *
	 * @return array
	 */
	private function getWatchlist() {
		$list = array();
		$dbr = wfGetDB( DB_MASTER );
		$res = $dbr->select(
			'watchlist',
			'*',
			array(
				'wl_user' => $this->getUser()->getId(),
			),
			__METHOD__
		);
		if( $res->numRows() > 0 ) {
			foreach ( $res as $row ) {
				$title = Title::makeTitleSafe( $row->wl_namespace, $row->wl_title );
				if( $title instanceof Title && !$title->isTalkPage() )
					$list[] = $title->getPrefixedText();
			}
			$res->free();
		}
		return $list;
	}

	/**
	 * Get a list of titles on a user's watchlist, excluding talk pages,
	 * and return as a two-dimensional array with namespace and title.
	 *
	 * @return array
	 */
	private function getWatchlistInfo() {
		$titles = array();
		$dbr = wfGetDB( DB_MASTER );

		$res = $dbr->select(
			array( 'watchlist' ),
			array( 'wl_namespace',  'wl_title' ),
			array( 'wl_user' => $this->getUser()->getId() ),
			__METHOD__,
			array( 'ORDER BY' => 'wl_namespace, wl_title' )
		);

		$lb = new LinkBatch();
		foreach ( $res as $row ) {
			$lb->add( $row->wl_namespace, $row->wl_title );
			if ( !MWNamespace::isTalk( $row->wl_namespace ) ) {
				$titles[$row->wl_namespace][$row->wl_title] = 1;
			}
		}

		$lb->execute();
		return $titles;
	}

	/**
	 * Remove all titles from a user's watchlist
	 */
	private function clearWatchlist() {
		$dbw = wfGetDB( DB_MASTER );
		$dbw->delete(
			'watchlist',
			array( 'wl_user' => $this->getUser()->getId() ),
			__METHOD__
		);
	}

	/**
	 * Add a list of titles to a user's watchlist
	 *
	 * $titles can be an array of strings or Title objects; the former
	 * is preferred, since Titles are very memory-heavy
	 *
	 * @param $titles Array of strings, or Title objects
	 */
	private function watchTitles( $titles ) {
		$dbw = wfGetDB( DB_MASTER );
		$rows = array();
		foreach( $titles as $title ) {
			if( !$title instanceof Title ) {
				$title = Title::newFromText( $title );
			}
			if( $title instanceof Title ) {
				$rows[] = array(
					'wl_user' => $this->getUser()->getId(),
					'wl_namespace' => ( $title->getNamespace() & ~1 ),
					'wl_title' => $title->getDBkey(),
					'wl_notificationtimestamp' => null,
				);
				$rows[] = array(
					'wl_user' => $this->getUser()->getId(),
					'wl_namespace' => ( $title->getNamespace() | 1 ),
					'wl_title' => $title->getDBkey(),
					'wl_notificationtimestamp' => null,
				);
			}
		}
		$dbw->insert( 'watchlist', $rows, __METHOD__, 'IGNORE' );
	}

	/**
	 * Remove a list of titles from a user's watchlist
	 *
	 * $titles can be an array of strings or Title objects; the former
	 * is preferred, since Titles are very memory-heavy
	 *
	 * @param $titles Array of strings, or Title objects
	 */
	private function unwatchTitles( $titles ) {
		$dbw = wfGetDB( DB_MASTER );
		foreach( $titles as $title ) {
			if( !$title instanceof Title ) {
				$title = Title::newFromText( $title );
			}
			if( $title instanceof Title ) {
				$dbw->delete(
					'watchlist',
					array(
						'wl_user' => $this->getUser()->getId(),
						'wl_namespace' => ( $title->getNamespace() & ~1 ),
						'wl_title' => $title->getDBkey(),
					),
					__METHOD__
				);
				$dbw->delete(
					'watchlist',
					array(
						'wl_user' => $this->getUser()->getId(),
						'wl_namespace' => ( $title->getNamespace() | 1 ),
						'wl_title' => $title->getDBkey(),
					),
					__METHOD__
				);
				$page = WikiPage::factory( $title );
				wfRunHooks( 'UnwatchArticleComplete', array( $this->getUser(), &$page ) );
			}
		}
	}

	public function submitNormal( $data ) {
		$removed = array();

		foreach( $data as $titles ) {
			$this->unwatchTitles( $titles );
			$removed += $titles;
		}

		if( count( $removed ) > 0 ) {
			$this->successMessage = $this->msg( 'watchlistedit-normal-done'
				)->numParams( count( $removed ) )->parse();
			$this->showTitles( $removed, $this->successMessage );
			return true;
		} else {
			return false;
		}
	}

	/**
	 * Get the standard watchlist editing form
	 *
	 * @return HTMLForm
	 */
	protected function getNormalForm(){
		global $wgContLang;

		$fields = array();
		$count = 0;

		$haveInvalidNamespaces = false;
		foreach( $this->getWatchlistInfo() as $namespace => $pages ){
			if ( $namespace < 0 ) {
				$haveInvalidNamespaces = true;
				continue;
			}

			$fields['TitlesNs'.$namespace] = array(
				'class' => 'EditWatchlistCheckboxSeriesField',
				'options' => array(),
				'section' => "ns$namespace",
			);

			foreach( array_keys( $pages ) as $dbkey ){
				$title = Title::makeTitleSafe( $namespace, $dbkey );
				$text = $this->buildRemoveLine( $title );
				$fields['TitlesNs'.$namespace]['options'][$text] = $title->getEscapedText();
				$count++;
			}
		}
		if ( $haveInvalidNamespaces ) {
			wfDebug( "User {$this->getContext()->getUser()->getId()} has invalid watchlist entries, cleaning up...\n" );
			$this->getContext()->getUser()->cleanupWatchlist();
		}

		if ( count( $fields ) > 1 && $count > 30 ) {
			$this->toc = Linker::tocIndent();
			$tocLength = 0;
			foreach( $fields as $key => $data ) {

				# strip out the 'ns' prefix from the section name:
				$ns = substr( $data['section'], 2 );

				$nsText = ($ns == NS_MAIN)
					? $this->msg( 'blanknamespace' )->escaped()
					: htmlspecialchars( $wgContLang->getFormattedNsText( $ns ) );
				$this->toc .= Linker::tocLine( "editwatchlist-{$data['section']}", $nsText,
					$this->getLanguage()->formatNum( ++$tocLength ), 1 ) . Linker::tocLineEnd();
			}
			$this->toc = Linker::tocList( $this->toc );
		} else {
			$this->toc = false;
		}

		$form = new EditWatchlistNormalHTMLForm( $fields, $this->getContext() );
		$form->setTitle( $this->getTitle() );
		$form->setSubmitTextMsg( 'watchlistedit-normal-submit' );
		# Used message keys: 'accesskey-watchlistedit-normal-submit', 'tooltip-watchlistedit-normal-submit'
		$form->setSubmitTooltip('watchlistedit-normal-submit');
		$form->setWrapperLegendMsg( 'watchlistedit-normal-legend' );
		$form->addHeaderText( $this->msg( 'watchlistedit-normal-explain' )->parse() );
		$form->setSubmitCallback( array( $this, 'submitNormal' ) );
		return $form;
	}

	/**
	 * Build the label for a checkbox, with a link to the title, and various additional bits
	 *
	 * @param $title Title
	 * @return string
	 */
	private function buildRemoveLine( $title ) {
		$link = Linker::link( $title );
		if( $title->isRedirect() ) {
			// Linker already makes class mw-redirect, so this is redundant
			$link = '<span class="watchlistredir">' . $link . '</span>';
		}
		$tools[] = Linker::link( $title->getTalkPage(), $this->msg( 'talkpagelinktext' )->escaped() );
		if( $title->exists() ) {
			$tools[] = Linker::linkKnown(
				$title,
				$this->msg( 'history_short' )->escaped(),
				array(),
				array( 'action' => 'history' )
			);
		}
		if( $title->getNamespace() == NS_USER && !$title->isSubpage() ) {
			$tools[] = Linker::linkKnown(
				SpecialPage::getTitleFor( 'Contributions', $title->getText() ),
				$this->msg( 'contributions' )->escaped()
			);
		}

		wfRunHooks( 'WatchlistEditorBuildRemoveLine', array( &$tools, $title, $title->isRedirect(), $this->getSkin() ) );

		return $link . " (" . $this->getLanguage()->pipeList( $tools ) . ")";
	}

	/**
	 * Get a form for editing the watchlist in "raw" mode
	 *
	 * @return HTMLForm
	 */
	protected function getRawForm(){
		$titles = implode( $this->getWatchlist(), "\n" );
		$fields = array(
			'Titles' => array(
				'type' => 'textarea',
				'label-message' => 'watchlistedit-raw-titles',
				'default' => $titles,
			),
		);
		$form = new HTMLForm( $fields, $this->getContext() );
		$form->setTitle( $this->getTitle( 'raw' ) );
		$form->setSubmitTextMsg( 'watchlistedit-raw-submit' );
		# Used message keys: 'accesskey-watchlistedit-raw-submit', 'tooltip-watchlistedit-raw-submit'
		$form->setSubmitTooltip('watchlistedit-raw-submit');
		$form->setWrapperLegendMsg( 'watchlistedit-raw-legend' );
		$form->addHeaderText( $this->msg( 'watchlistedit-raw-explain' )->parse() );
		$form->setSubmitCallback( array( $this, 'submitRaw' ) );
		return $form;
	}

	/**
	 * Determine whether we are editing the watchlist, and if so, what
	 * kind of editing operation
	 *
	 * @param $request WebRequest
	 * @param $par mixed
	 * @return int
	 */
	public static function getMode( $request, $par ) {
		$mode = strtolower( $request->getVal( 'action', $par ) );
		switch( $mode ) {
			case 'clear':
			case self::EDIT_CLEAR:
				return self::EDIT_CLEAR;

			case 'raw':
			case self::EDIT_RAW:
				return self::EDIT_RAW;

			case 'edit':
			case self::EDIT_NORMAL:
				return self::EDIT_NORMAL;

			default:
				return false;
		}
	}

	/**
	 * Build a set of links for convenient navigation
	 * between watchlist viewing and editing modes
	 *
	 * @param $unused Unused
	 * @return string
	 */
	public static function buildTools( $unused ) {
		global $wgLang;

		$tools = array();
		$modes = array(
			'view' => array( 'Watchlist', false ),
			'edit' => array( 'EditWatchlist', false ),
			'raw' => array( 'EditWatchlist', 'raw' ),
		);
		foreach( $modes as $mode => $arr ) {
			// can use messages 'watchlisttools-view', 'watchlisttools-edit', 'watchlisttools-raw'
			$tools[] = Linker::linkKnown(
				SpecialPage::getTitleFor( $arr[0], $arr[1] ),
				wfMsgHtml( "watchlisttools-{$mode}" )
			);
		}
		return Html::rawElement( 'span',
					array( 'class' => 'mw-watchlist-toollinks' ),
					wfMsg( 'parentheses', $wgLang->pipeList( $tools ) ) );
	}
}

# B/C since 1.18
class WatchlistEditor extends SpecialEditWatchlist {}

/**
 * Extend HTMLForm purely so we can have a more sane way of getting the section headers
 */
class EditWatchlistNormalHTMLForm extends HTMLForm {
	public function getLegend( $namespace ){
		$namespace = substr( $namespace, 2 );
		return $namespace == NS_MAIN
			? $this->msg( 'blanknamespace' )->escaped()
			: htmlspecialchars( $this->getContext()->getLanguage()->getFormattedNsText( $namespace ) );
	}
	public function getBody() {
		return $this->displaySection( $this->mFieldTree, '', 'editwatchlist-' );
	}
}

class EditWatchlistCheckboxSeriesField extends HTMLMultiSelectField {
	/**
	 * HTMLMultiSelectField throws validation errors if we get input data
	 * that doesn't match the data set in the form setup. This causes
	 * problems if something gets removed from the watchlist while the
	 * form is open (bug 32126), but we know that invalid items will
	 * be harmless so we can override it here.
	 *
	 * @param $value String the value the field was submitted with
	 * @param $alldata Array the data collected from the form
	 * @return Mixed Bool true on success, or String error to display.
	 */
	function validate( $value, $alldata ) {
		// Need to call into grandparent to be a good citizen. :)
		return HTMLFormField::validate( $value, $alldata );
	}
}
