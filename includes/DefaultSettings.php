<?
# DO NOT EDIT THIS FILE!
# To customize your installation, edit "LocalSettings.php".

$wgServer           = "http://" . getenv( "SERVER_NAME" );
$wgScriptPath	    = "/wiki";
$wgScript           = "{$wgScriptPath}/wiki.phtml";
$wgRedirectScript   = "{$wgScriptPath}/redirect.phtml";
$wgStyleSheetPath   = "{$wgScriptPath}/style";
$wgStyleSheetDirectory = "{$IP}/style";
$wgArticlePath      = "{$wgScript}?title=$1";
$wgUploadPath       = "{$wgScriptPath}/upload";
$wgUploadDirectory	= "{$IP}/upload";
$wgLogo				= "{$wgUploadPath}/wiki.png";
$wgMathPath         = "{$wgUploadPath}/math";
$wgMathDirectory    = "{$wgUploadDirectory}/math";
$wgTmpDirectory     = "{$wgUploadDirectory}/tmp";
$wgEmergencyContact = "wikiadmin@" . getenv( "SERVER_NAME" );

# MySQL settings
#
$wgDBserver         = "localhost";
$wgDBname           = "wikidb";
$wgDBintlname       = "intl";
$wgDBconnection     = "";
$wgDBuser           = "wikiuser";
$wgDBpassword       = "userpass";
$wgDBsqluser		= "sqluser";
$wgDBsqlpassword	= "sqlpass";
$wgDBminWordLen     = 4;
$wgDBtransactions	= false; # Set to true if using InnoDB tables

# Language settings
#
$wgLanguageCode     = "en";
$wgInterwikiMagic	= true; # Treat language links as magic connectors, not inline links
$wgUseNewInterlanguage = false;
$wgInputEncoding	= "ISO-8859-1";
$wgOutputEncoding	= "ISO-8859-1";
$wgEditEncoding		= "";
$wgDocType          = "-//W3C//DTD HTML 4.01 Transitional//EN";
$wgAmericanDates = false; 	# Enable for English module to print dates
$wgLocalInterwiki   = "w";

# Miscellaneous configuration settings
#
$wgReadOnlyFile		= "{$wgUploadDirectory}/lock_yBgMBwiR";
$wgDebugLogFile     = "{$wgUploadDirectory}/log_dlJbnMZb";
$wgDebugComments	= false;
$wgReadOnly			= false;

$wgCachePages		= true;	# Allow client-side caching of pages
$wgCookieExpiration = 2592000;

$wgAllowExternalImages = true;
$wgMiserMode = false; # Disable database-intensive features
$wgUseTeX = false;
$wgProfiling = false; # Enable for more detailed by-function times in debug log

# Which namespaces should support subpages?
# See Language.php for a list of namespaces.
#
$wgNamespacesWithSubpages = array( -1 => 0, 0 => 0, 1 => 1,
  2 => 1, 3 => 1, 4 => 0, 5 => 1, 6 => 0, 7 => 1 );

?>
