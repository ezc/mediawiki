<?php
#apd_set_pprof_trace();
# Main wiki script; see design.doc
#
$wgRequestTime = microtime();

unset( $IP );
@ini_set( 'allow_url_fopen', 0 ); # For security...
if( !file_exists( 'LocalSettings.php' ) ) {
	if ( file_exists( 'config/LocalSettings.php' ) ) {
		die( "To complete the installation, move <tt>config/LocalSettings.php</tt> to the parent directory.\n" );
	} else {
		die( "You'll have to <a href='config/index.php'>set the wiki up</a> first!" );
	}
}

# Valid web server entry point, enable includes.
# Please don't move this line to includes/Defines.php. This line essentially defines
# a valid entry point. If you put it in includes/Defines.php, then any script that includes
# it becomes an entry point, thereby defeating its purpose.
define( "MEDIAWIKI", true );

require_once( "./includes/Defines.php" );
require_once( "./LocalSettings.php" );
require_once( "includes/Setup.php" );

wfProfileIn( "main-misc-setup" );
OutputPage::setEncodings(); # Not really used yet

# Query string fields
$action = $wgRequest->getVal( "action", "view" );
$title = $wgRequest->getVal( "title" );

$action = strtolower( trim( $action ) );
if ($wgRequest->getVal( "printable" ) == "yes") {
	$wgOut->setPrintable();
}

if ( "" == $title && "delete" != $action ) {
	$wgTitle = Title::newFromText( wfMsgForContent( "mainpage" ) );
} elseif ( $curid = $wgRequest->getInt( 'curid' ) ) {
	# URLs like this are generated by RC, because rc_title isn't always accurate
	$wgTitle = Title::newFromID( $curid );
} else {
	$wgTitle = Title::newFromURL( $title );
}
wfProfileOut( "main-misc-setup" );

# Debug statement for user levels
// print_r($wgUser);

# If the user is not logged in, the Namespace:title of the article must be in
# the Read array in order for the user to see it. (We have to check here to
# catch special pages etc. We check again in Article::view())
if ( !is_null( $wgTitle ) && !$wgTitle->userCanRead() ) {
	$wgOut->loginToUse();
	$wgOut->output();
	exit;
}

wfProfileIn( "main-action" );

$search = $wgRequest->getText( 'search' );
if( !$wgDisableInternalSearch && !is_null( $search ) && $search !== '' ) {
	require_once( 'includes/SpecialSearch.php' );
	$wgTitle = Title::makeTitle( NS_SPECIAL, "Search" );
	wfSpecialSearch();
} else if( !$wgTitle or $wgTitle->getDBkey() == "" ) {
	$wgTitle = Title::newFromText( wfMsgForContent( "badtitle" ) );
	$wgOut->errorpage( "badtitle", "badtitletext" );
} else if ( $wgTitle->getInterwiki() != "" ) {
	$url = $wgTitle->getFullURL();
	# Check for a redirect loop
	if ( !preg_match( "/^" . preg_quote( $wgServer, "/" ) . "/", $url ) && $wgTitle->isLocal() ) {
		$wgOut->redirect( $url );
	} else {
		$wgTitle = Title::newFromText( wfMsgForContent( "badtitle" ) );
		$wgOut->errorpage( "badtitle", "badtitletext" );
	}
} else if ( ( $action == "view" ) &&
	(!isset( $_GET['title'] ) || $wgTitle->getPrefixedDBKey() != $_GET['title'] ) &&
	!count( array_diff( array_keys( $_GET ), array( 'action', 'title' ) ) ) )
{
	/* redirect to canonical url, make it a 301 to allow caching */
	$wgOut->setSquidMaxage( 1200 );
	$wgOut->redirect( $wgTitle->getFullURL(), '301');
} else if ( Namespace::getSpecial() == $wgTitle->getNamespace() ) {
	# actions that need to be made when we have a special pages
	require_once( 'includes/SpecialPage.php' );
	if ( !$wgAllowSysopQueries ) {SpecialPage::removePage( 'Asksql' ); }
	SpecialPage::executePath( $wgTitle );
} else {
	if ( Namespace::getMedia() == $wgTitle->getNamespace() ) {
		$wgTitle = Title::makeTitle( NS_IMAGE, $wgTitle->getDBkey() );
	}

	switch( $wgTitle->getNamespace() ) {
	case NS_IMAGE:
		require_once( "includes/ImagePage.php" );
		$wgArticle = new ImagePage( $wgTitle );
		break;
	case NS_CATEGORY:
		if ( $wgUseCategoryMagic ) {
			require_once( "includes/CategoryPage.php" );
			$wgArticle = new CategoryPage( $wgTitle );
			break;
		}
		# NO break if wgUseCategoryMagic is false, drop through to next (default).
		# Don't insert other cases between NS_CATEGORY and default.
	default:
		$wgArticle = new Article( $wgTitle );
	}

	switch( $action ) {
		case "view":
			$wgOut->setSquidMaxage( $wgSquidMaxage );
			$wgArticle->view();
			break;
		case "watch":
		case "unwatch":
		case "delete":
		case "revert":
		case "rollback":
		case "protect":
		case "unprotect":
		case "validate":
		case "info":
		case "markpatrolled":
			$wgArticle->$action();
			break;
		case "print":
			$wgArticle->view();
			break;
		case "dublincore":
			if( !$wgEnableDublinCoreRdf ) {
				wfHttpError( 403, "Forbidden", wfMsg( "nodublincore" ) );
			} else {
				require_once( "includes/Metadata.php" );
				wfDublinCoreRdf( $wgArticle );
			}
			break;
		case "creativecommons":
			if( !$wgEnableCreativeCommonsRdf ) {
				wfHttpError( 403, "Forbidden", wfMsg("nocreativecommons") );
			} else {
				require_once( "includes/Metadata.php" );
				wfCreativeCommonsRdf( $wgArticle );
			}
			break;
		case "credits":
			require_once( "includes/Credits.php" );
			showCreditsPage( $wgArticle );
			break;
		case "edit":
		case "submit":
			if( !$wgCommandLineMode && !$wgRequest->checkSessionCookie() ) {
				User::SetupSession();
			}
			require_once( "includes/EditPage.php" );
			$editor = new EditPage( $wgArticle );
			$editor->submit();
			break;
		case "history":
			if ($_SERVER["REQUEST_URI"] == $wgTitle->getInternalURL('action=history')) {
				$wgOut->setSquidMaxage( $wgSquidMaxage );
			}
			require_once( "includes/PageHistory.php" );
			$history = new PageHistory( $wgArticle );
			$history->history();
			break;
		case "raw":
			require_once( "includes/RawPage.php" );
			$raw = new RawPage( $wgArticle );
			$raw->view();
			break;
		case "purge":
			wfPurgeSquidServers(array($wgTitle->getInternalURL()));
			$wgOut->setSquidMaxage( $wgSquidMaxage );
			$wgTitle->invalidateCache();
			$wgArticle->view();
			break;
		default:
		    if (wfRunHooks('UnknownAction', $action, $wgArticle)) {
				$wgOut->errorpage( "nosuchaction", "nosuchactiontext" );
			}
	}
}
wfProfileOut( "main-action" );

# Deferred updates aren't really deferred anymore. It's important to report errors to the
# user, and that means doing this before OutputPage::output(). Note that for page saves,
# the client will wait until the script exits anyway before following the redirect.
wfProfileIn( "main-updates" );
foreach ( $wgDeferredUpdateList as $up ) {
	$up->doUpdate();
}
wfProfileOut( "main-updates" );

wfProfileIn( "main-cleanup" );
$wgLoadBalancer->saveMasterPos();

# Now commit any transactions, so that unreported errors after output() don't roll back the whole thing
$wgLoadBalancer->commitAll();

$wgOut->output();
wfProfileOut( "main-cleanup" );

logProfilingData();
$wgLoadBalancer->closeAll();
wfDebug( "Request ended normally\n" );
?>
