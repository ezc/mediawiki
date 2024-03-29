<?php
/** Friulian (Furlan)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Helix84
 * @author Klenje
 * @author MF-Warburg
 * @author Urhixidur
 * @author לערי ריינהארט
 */

$fallback = 'it';


$namespaceNames = array(
	NS_MEDIA            => 'Media',
	NS_SPECIAL          => 'Speciâl',
	NS_TALK             => 'Discussion',
	NS_USER             => 'Utent',
	NS_USER_TALK        => 'Discussion_utent',
	NS_PROJECT_TALK     => 'Discussion_$1',
	NS_FILE             => 'Figure',
	NS_FILE_TALK        => 'Discussion_figure',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Discussion_MediaWiki',
	NS_TEMPLATE         => 'Model',
	NS_TEMPLATE_TALK    => 'Discussion_model',
	NS_HELP             => 'Jutori',
	NS_HELP_TALK        => 'Discussion_jutori',
	NS_CATEGORY         => 'Categorie',
	NS_CATEGORY_TALK    => 'Discussion_categorie',
);

$specialPageAliases = array(
	'Allmessages'               => array( 'Messaçs' ),
	'Allpages'                  => array( 'DutisLisPagjinis' ),
	'Ancientpages'              => array( 'PagjinisPluiVieris' ),
	'Block'                     => array( 'BlocheIP' ),
	'Booksources'               => array( 'RicercjeISBN' ),
	'BrokenRedirects'           => array( 'ReIndreçamentsSbaliâts' ),
	'Categories'                => array( 'Categoriis' ),
	'ChangePassword'            => array( 'ReimpuestePerauleClâf' ),
	'Confirmemail'              => array( 'ConfermePuesteEletroniche' ),
	'Contributions'             => array( 'Contribûts', 'ContribûtsUtent' ),
	'CreateAccount'             => array( 'CreeIdentitât' ),
	'Deadendpages'              => array( 'PagjinisCenceJessude' ),
	'Disambiguations'           => array( 'Omonimiis' ),
	'DoubleRedirects'           => array( 'ReIndreçamentsDoplis' ),
	'Emailuser'                 => array( 'MandeEmail' ),
	'Export'                    => array( 'Espuarte' ),
	'Import'                    => array( 'Impuarte' ),
	'BlockList'                 => array( 'IPBlocâts' ),
	'Listadmins'                => array( 'ListeAministradôrs' ),
	'Listbots'                  => array( 'ListeBots' ),
	'Listfiles'                 => array( 'Figuris' ),
	'Listredirects'             => array( 'ListeReIndreçaments' ),
	'Listusers'                 => array( 'Utents', 'ListeUtents' ),
	'Lockdb'                    => array( 'BlocheDB' ),
	'Log'                       => array( 'Regjistri', 'Regjistris' ),
	'Lonelypages'               => array( 'PagjinisSolitariis' ),
	'Longpages'                 => array( 'PagjinisPluiLungjis' ),
	'MIMEsearch'                => array( 'RicercjeMIME' ),
	'Movepage'                  => array( 'Môf', 'CambieNon' ),
	'Mycontributions'           => array( 'MieiContribûts' ),
	'Mypage'                    => array( 'MêPagjineUtent' ),
	'Mytalk'                    => array( 'MêsDiscussions' ),
	'Newimages'                 => array( 'GnovisFiguris' ),
	'Newpages'                  => array( 'GnovisPagjinis' ),
	'Popularpages'              => array( 'PagjinisPopolârs' ),
	'Preferences'               => array( 'Preferencis' ),
	'Prefixindex'               => array( 'Prefìs' ),
	'Protectedpages'            => array( 'PagjinisProtezudis' ),
	'Protectedtitles'           => array( 'TituiProtezûts' ),
	'Randompage'                => array( 'PagjineCasuâl' ),
	'Randomredirect'            => array( 'ReIndreçamentCasuâl' ),
	'Recentchanges'             => array( 'UltinsCambiaments' ),
	'Recentchangeslinked'       => array( 'CambiamentsLeâts' ),
	'Revisiondelete'            => array( 'ScanceleRevision' ),
	'Search'                    => array( 'Ricercje', 'Cîr' ),
	'Shortpages'                => array( 'PagjinisPluiCurtis' ),
	'Specialpages'              => array( 'PagjinisSpeciâls' ),
	'Statistics'                => array( 'Statistichis' ),
	'Uncategorizedcategories'   => array( 'CategoriisCenceCategorie' ),
	'Uncategorizedimages'       => array( 'FigurisCenceCategorie' ),
	'Uncategorizedpages'        => array( 'PagjinisCenceCategorie' ),
	'Uncategorizedtemplates'    => array( 'ModeiCenceCategorie' ),
	'Undelete'                  => array( 'Ripristine' ),
	'Unlockdb'                  => array( 'SblocheDB' ),
	'Unusedcategories'          => array( 'CategoriisNoDopradis' ),
	'Unusedimages'              => array( 'FigurisNoDopradis' ),
	'Unusedtemplates'           => array( 'ModeiNoDoprâts' ),
	'Unwatchedpages'            => array( 'PagjinisNoTignudisDiVoli' ),
	'Upload'                    => array( 'Cjame' ),
	'Userlogin'                 => array( 'Jentre', 'Login' ),
	'Userlogout'                => array( 'Jes', 'Logout' ),
	'Userrights'                => array( 'PermèsUtents' ),
	'Wantedcategories'          => array( 'CategoriisDesideradis' ),
	'Watchlist'                 => array( 'TignudisDiVoli' ),
	'Whatlinkshere'             => array( 'Leams' ),
	'Withoutinterwiki'          => array( 'CenceInterwiki' ),
);

$datePreferences = false;
$defaultDateFormat = 'dmy';
$dateFormats = array(
	'dmy time' => 'H:i',
	'dmy date' => 'j "di" M Y',
	'dmy both' => 'j "di" M Y "a lis" H:i',
);

$separatorTransformTable = array( ',' => "\xc2\xa0", '.' => ',' );

$messages = array(
# User preference toggles
'tog-underline'               => 'Sotlinee leams',
'tog-highlightbroken'         => 'Mostre leams sbaliâts <a href="" class="new">cussì</a> (invezit di cussì<a href="" class="internal">?</a>).',
'tog-justify'                 => 'Justifiche paragraf',
'tog-hideminor'               => 'Plate lis piçulis modifichis tai ultins cambiaments',
'tog-usenewrc'                => 'Dopre i ultins cambiaments avanzâts (covente JavaScript)',
'tog-numberheadings'          => 'Numerazion automatiche dai titui',
'tog-showtoolbar'             => 'Mostre sbare dai imprescj pe modifiche (JavaScript)',
'tog-editondblclick'          => 'Cambie lis pagjinis fracant dôs voltis (JavaScript)',
'tog-editsection'             => 'Inserìs un leam [cambie] pe editazion veloç di une sezion',
'tog-editsectiononrightclick' => 'Modifiche une sezion fracant cul tast diestri<br /> sui titui des sezions (JavaScript)',
'tog-showtoc'                 => 'Mostre la tabele dai contignûts pes pagjinis cun plui di 3 sezions',
'tog-rememberpassword'        => 'Visiti di me su chest sgarfadôr (par un massim di $1 {{PLURAL:$1|zornade|zornadis}})',
'tog-watchdefault'            => 'Zonte in automatic lis pagjinis che o cambii inte liste di chês tignudis di voli',
'tog-minordefault'            => 'Imposte come opzion predeterminade ducj i cambiaments come piçui',
'tog-previewontop'            => 'Mostre anteprime parsore dal spazi pe modifiche',
'tog-previewonfirst'          => 'Mostre anteprime te prime modifiche',
'tog-nocache'                 => 'Disative la memorie cache des pagjinis dal sgarfadôr',
'tog-enotifwatchlistpages'    => 'Mandimi une email se la pagjine e gambie',
'tog-enotifusertalkpages'     => 'Mandimi une email cuant che la mê pagjine di discussion e gambie',
'tog-enotifminoredits'        => 'Mandimi une email ancje pai piçui cambiaments ae pagjine',
'tog-enotifrevealaddr'        => 'Distapone fûr il gno recapit email tai messaçs di notifiche',
'tog-shownumberswatching'     => 'Mostre il numar di utents che a stan tignint di voli',
'tog-fancysig'                => 'Interprete lis firmis come test wiki (cence un leam automatic)',
'tog-externaleditor'          => 'Dopre un editôr esterni come opzion predeterminade (dome par utents esperts, a coventin impuestazions specifichis, [//www.mediawiki.org/wiki/Manual:External_editors cjale culì par altris informazions.])',
'tog-externaldiff'            => 'Dopre editôr difarencis esterni come opzion predeterminade',
'tog-watchlisthideown'        => 'Plate i miei cambiaments inte liste des pagjinis tignudis di voli',
'tog-ccmeonemails'            => 'Mandimi une copie dai messaçs che o mandi ai altris utents',
'tog-showhiddencats'          => 'Mostre categoriis platadis',

'underline-always'  => 'Simpri',
'underline-never'   => 'Mai',
'underline-default' => 'Predeterminât dal sgarfadôr',

# Font style option in Special:Preferences
'editfont-default' => 'Predeterminât dal sgarfadôr',

# Dates
'sunday'        => 'Domenie',
'monday'        => 'Lunis',
'tuesday'       => 'Martars',
'wednesday'     => 'Miercus',
'thursday'      => 'Joibe',
'friday'        => 'Vinars',
'saturday'      => 'Sabide',
'sun'           => 'dom',
'mon'           => 'lun',
'tue'           => 'mar',
'wed'           => 'mie',
'thu'           => 'joi',
'fri'           => 'vin',
'sat'           => 'sab',
'january'       => 'Zenâr',
'february'      => 'Fevrâr',
'march'         => 'Març',
'april'         => 'Avrîl',
'may_long'      => 'Mai',
'june'          => 'Jugn',
'july'          => 'Lui',
'august'        => 'Avost',
'september'     => 'Setembar',
'october'       => 'Otubar',
'november'      => 'Novembar',
'december'      => 'Dicembar',
'january-gen'   => 'Zenâr',
'february-gen'  => 'Fevrâr',
'march-gen'     => 'Març',
'april-gen'     => 'Avrîl',
'may-gen'       => 'Mai',
'june-gen'      => 'Jugn',
'july-gen'      => 'Lui',
'august-gen'    => 'Avost',
'september-gen' => 'Setembar',
'october-gen'   => 'Otubar',
'november-gen'  => 'Novembar',
'december-gen'  => 'Dicembar',
'jan'           => 'Zen',
'feb'           => 'Fev',
'mar'           => 'Mar',
'apr'           => 'Avr',
'may'           => 'Mai',
'jun'           => 'Jug',
'jul'           => 'Lui',
'aug'           => 'Avo',
'sep'           => 'Set',
'oct'           => 'Otu',
'nov'           => 'Nov',
'dec'           => 'Dic',

# Categories related messages
'pagecategories'                 => '{{PLURAL:$1|Categorie|Categoriis}}',
'category_header'                => 'Vôs inte categorie "$1"',
'subcategories'                  => 'Sot categoriis',
'category-media-header'          => 'Files inte categorie "$1"',
'category-empty'                 => "''Par cumò la categorie no conten ni pagjinis ni files multimediâi.''",
'hidden-categories'              => '{{PLURAL:$1|Categorie platade|Categoriis platadis}}',
'hidden-category-category'       => 'Categoriis platadis',
'category-subcat-count'          => '{{PLURAL:$2|Cheste categorie e conten une sot categorie, mostrade ca sot.|Cheste categorie e conten {{PLURAL:$1|la sot categorie|lis $1 sot categoriis}} ca sot suntun totâl di $2.}}',
'category-subcat-count-limited'  => 'Cheste categorie e conten {{PLURAL:$1|une sot categorie, mostrade|$1 sot categoriis, mostradis}} sot.',
'category-article-count'         => '{{PLURAL:$2|Cheste categorie e conten dome une pagjine mostrade ca sot.|Cheste categorie e conten {{PLURAL:$1|la pagjine indicade|lis $1 pagjinis indicadis}} di seguit, suntun totâl di $2.}}',
'category-article-count-limited' => 'Cheste categorie e conten {{PLURAL:$1|la pagjine|lis $1 pagjinis}} ca sot.',
'category-file-count'            => '{{PLURAL:$2|Cheste categorie e conten dome un file, mostrât ca sot.|Cheste categorie e conten {{PLURAL:$1|un file, mostrât|$1 files, mostrâts}} ca sot, suntun totâl di $2.}}',
'category-file-count-limited'    => 'Cheste categorie e conten {{PLURAL:$1|il file mostrât|i $1 files mostrâts}} ca sot.',
'listingcontinuesabbrev'         => 'cont.',
'noindex-category'               => 'Pagjinis no indicizadis',

'about'         => 'Informazions',
'article'       => 'Vôs',
'newwindow'     => '(al vierç un gnûf barcon)',
'cancel'        => 'Scancele',
'moredotdotdot' => 'Plui...',
'mypage'        => 'Mê pagjine',
'mytalk'        => 'Mês discussions',
'anontalk'      => 'Discussion par chest IP',
'navigation'    => 'somari',
'and'           => '&#32;e',

# Cologne Blue skin
'qbfind'         => 'Cjate',
'qbbrowse'       => 'Sgarfe',
'qbedit'         => 'Cambie',
'qbpageoptions'  => 'Cheste pagjine',
'qbpageinfo'     => 'Contest',
'qbmyoptions'    => 'Mês pagjinis',
'qbspecialpages' => 'Pagjinis speciâls',
'faq'            => 'Domandis plui frecuentis',

# Vector skin
'vector-action-addsection' => 'Gnove sezion',
'vector-action-delete'     => 'Elimine',
'vector-action-move'       => 'Môf',
'vector-action-protect'    => 'Protêç',
'vector-action-undelete'   => 'Recupere',
'vector-action-unprotect'  => 'No stâ protezi',
'vector-view-create'       => 'Cree',
'vector-view-edit'         => 'Cambie',
'vector-view-history'      => 'Cjale il storic',
'vector-view-view'         => 'Lei',
'vector-view-viewsource'   => 'Cjale risultive',
'actions'                  => 'Azions',
'namespaces'               => 'Spazis dai nons',
'variants'                 => 'Variants',

'errorpagetitle'    => 'Erôr',
'returnto'          => 'Torne a $1.',
'tagline'           => 'Di {{SITENAME}}',
'help'              => 'Jutori',
'search'            => 'Cîr',
'searchbutton'      => 'Cîr',
'go'                => 'Va',
'searcharticle'     => 'Va',
'history'           => 'Storic de pagjine',
'history_short'     => 'Storic',
'updatedmarker'     => 'inzornât de mê ultime visite',
'printableversion'  => 'Version stampabil',
'permalink'         => 'Leam permanent',
'print'             => 'Stampe',
'view'              => 'Viodi',
'edit'              => 'Cambie',
'create'            => 'Cree',
'editthispage'      => 'Cambie cheste pagjine',
'create-this-page'  => 'Cree cheste pagjine',
'delete'            => 'Elimine',
'deletethispage'    => 'Elimine cheste pagjine',
'undelete_short'    => 'Recupere {{PLURAL:$1|modifiche eliminade|$1 modifichis eliminadis}}',
'viewdeleted_short' => 'Viôt {{PLURAL:$1|une modifiche eliminade|$1 modifichis eliminadis}}',
'protect'           => 'Protêç',
'protect_change'    => 'cambie',
'protectthispage'   => 'Protêç cheste pagjine',
'unprotect'         => 'No stâ protezi',
'unprotectthispage' => 'No stâ plui protezi cheste pagjine',
'newpage'           => 'Gnove pagjine',
'talkpage'          => 'Fevelin di cheste pagjine',
'talkpagelinktext'  => 'discussion',
'specialpage'       => 'Pagjine speciâl',
'personaltools'     => 'Imprescj personâi',
'postcomment'       => 'Gnove sezion',
'articlepage'       => 'Cjale la vôs',
'talk'              => 'Discussion',
'views'             => 'Visitis',
'toolbox'           => 'imprescj',
'userpage'          => 'Cjale pagjine dal utent',
'projectpage'       => 'Cjale pagjine dal progjet',
'imagepage'         => 'Cjale pagjine dal file',
'mediawikipage'     => 'Cjale la pagjine dal messaç',
'templatepage'      => 'Cjale il model',
'viewhelppage'      => 'Cjale la pagjine di jutori',
'categorypage'      => 'Cjale la categorie',
'viewtalkpage'      => 'Cjale la pagjine di discussion',
'otherlanguages'    => 'Altris lenghis',
'redirectedfrom'    => '(Inviât ca di $1)',
'redirectpagesub'   => 'Pagjine di redirezion',
'lastmodifiedat'    => "Cambiât par l'ultime volte ai $2, $1",
'viewcount'         => 'Cheste pagjine e je stade lete {{PLURAL:$1|une volte|$1 voltis}}.',
'protectedpage'     => 'Pagjine protezude',
'jumpto'            => 'Va a:',
'jumptonavigation'  => 'navigazion',
'jumptosearch'      => 'ricercje',
'pool-errorunknown' => 'Erôr no cognossût',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'            => 'Informazions su {{SITENAME}}',
'aboutpage'            => 'Project:Informazions',
'copyright'            => 'Il contignût al è disponibil sot de $1',
'copyrightpage'        => '{{ns:project}}:Copyrights',
'currentevents'        => 'Lis gnovis',
'currentevents-url'    => 'Project:Lis gnovis',
'disclaimers'          => 'Avîs legâi',
'disclaimerpage'       => 'Project:Avîs gjenerâi',
'edithelp'             => 'Jutori pai cambiaments',
'edithelppage'         => 'Help:Cambiaments',
'helppage'             => 'Help:Contignûts',
'mainpage'             => 'Pagjine principâl',
'mainpage-description' => 'Pagjine principâl',
'portal'               => 'Ostarie',
'portal-url'           => 'Project:Ostarie',
'privacy'              => 'Politiche pe privacy',
'privacypage'          => 'Project:Politiche_pe_privacy',

'badaccess' => 'Permès no suficients',

'versionrequired' => 'E covente la version $1 di MediaWiki',

'ok'                      => 'Va ben',
'retrievedfrom'           => 'Cjapât fûr di $1',
'youhavenewmessages'      => 'Tu âs $1 ($2).',
'newmessageslink'         => 'gnûfs messaçs',
'newmessagesdifflink'     => 'difarencis cu la penultime revision',
'youhavenewmessagesmulti' => 'Tu âs gnûfs messaçs su $1',
'editsection'             => 'cambie',
'editold'                 => 'cambie',
'viewsourceold'           => 'cjale risultive',
'editlink'                => 'cambie',
'viewsourcelink'          => 'cjale risultive',
'editsectionhint'         => 'cambie la sezion $1',
'toc'                     => 'Tabele dai contignûts',
'showtoc'                 => 'mostre',
'hidetoc'                 => 'plate',
'collapsible-collapse'    => 'Strenç',
'collapsible-expand'      => 'Slargje',
'thisisdeleted'           => 'Vuelistu cjalâ o ripristinâ $1?',
'viewdeleted'             => 'Vuelistu viodi $1?',
'restorelink'             => '{{PLURAL:$1|une modifiche eliminade|$1 modifichis eliminadis}}',
'feedlinks'               => 'Canâl (feed):',
'site-rss-feed'           => 'Canâl RSS di $1',
'site-atom-feed'          => 'Canâl Atom di $1',
'page-rss-feed'           => 'Canâl RSS par "$1"',
'page-atom-feed'          => 'Canâl Atom par "$1"',
'red-link-title'          => '$1 (la pagjine no esist)',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main'      => 'Vôs',
'nstab-user'      => 'Pagjine dal utent',
'nstab-media'     => 'Media',
'nstab-special'   => 'Pagjine speciâl',
'nstab-project'   => 'Informazions',
'nstab-image'     => 'Figure',
'nstab-mediawiki' => 'Messaç',
'nstab-template'  => 'Model',
'nstab-help'      => 'Jutori',
'nstab-category'  => 'Categorie',

# Main script and global functions
'nospecialpagetext' => '<strong>Tu âs cirût une pagjine speciâl no valide.</strong>

Une liste des pagjinis speciâls validis a si pues cjatâ su [[Special:SpecialPages|{{int:specialpages}}]].',

# General errors
'error'              => 'Erôr',
'databaseerror'      => 'Erôr de base di dâts',
'laggedslavemode'    => 'Atenzion: La pagjine podarès no segnalâ inzornaments recents.',
'readonly'           => 'Base di dâts blocade',
'readonlytext'       => "La base di dâts pal moment e je blocade e no si puedin zontâ vôs e fâ modifichis, probabilmentri pe normâl manutenzion de base di dâts, daspò de cuâl dut al tornarà normâl.

L'aministradôr ch'al à metût il bloc al à scrit cheste motivazion: $1",
'missing-article'    => 'La base di dâts no à cjatât il test di une pagjine che e varès di vê vût cjatât, di non "$1" $2.

Chest in gjenar al è causât dal jessi lâts daûr dal leam a une pagjine che e je stade eliminade, partint dal confront di dôs versions o di un leam tal storic.

Se la cause no samee jessi cheste, tu podaressis vê cjatât un problem tal software.
Segnalilu par plasê a un [[Special:ListUsers/sysop|administrator]], notant la URL.',
'missingarticle-rev' => '(numar de revision: $1)',
'filedeleteerror'    => 'No si pues eliminâ il file "$1".',
'filenotfound'       => 'No si pues cjatâ il file "$1".',
'badtitle'           => 'Titul sbaliât',
'badtitletext'       => 'Il titul de pagjine che tu âs inserît nol è valit, al è vuelit, o al veve un erôr tal colegament tra wiki diviersis o tra versions in altris lenghis.
Al podarès vê dentri caratars che no podin jessi doprâts tai titui.',
'viewsource'         => 'Cjale risultive',
'viewsourcetext'     => 'Tu puedis viodi e copiâ la risultive di cheste pagjine:',

# Login and logout pages
'logouttext'              => "'''Tu sâs cumò lât fûr.'''

Tu puedis continuâ a doprâ {{SITENAME}} come anonim, o tu puedis [[Special:UserLogin|jentrâ di gnûf]] cul stes o cuntun altri non utent.
Considere che cualchi pagjine e pues mostrâti ancjemò come jentrât tal sît fin cuant che no tu netis la memorie cache dal sgarfadôr.",
'welcomecreation'         => '== Mandi e benvignût $1! ==
La tô identitât e je stade creade. 
No stâ dismenteâti di gambiâ lis [[Special:Preferences|preferencis di {{SITENAME}}]].',
'yourname'                => 'Non utent',
'yourpassword'            => 'Peraule clâf',
'yourpasswordagain'       => 'Torne a scrivile',
'remembermypassword'      => 'Visiti di me di une session a chê altre (fin a $1 {{PLURAL:$1|zornade|zornadis}})',
'yourdomainname'          => 'Il to domini',
'login'                   => 'Jentre',
'nav-login-createaccount' => 'Regjistriti o jentre',
'loginprompt'             => 'Tu âs di vê abilitâts i cookies par jentrâ in {{SITENAME}}.',
'userlogin'               => 'Regjistriti o jentre',
'userloginnocreate'       => 'Jentre',
'logout'                  => 'Jes',
'userlogout'              => 'Jes',
'notloggedin'             => 'No tu sês jentrât',
'nologin'                 => "No âstu ancjemò une identitât par jentrâ? '''$1'''.",
'nologinlink'             => 'Creile cumò',
'createaccount'           => 'Cree une gnove identitât',
'gotaccount'              => "Âstu za une identitât? '''$1'''.",
'gotaccountlink'          => 'Jentre',
'userlogin-resetlink'     => 'Dismenteât i detais par jentrâ?',
'createaccountmail'       => 'par pueste eletroniche',
'createaccountreason'     => 'Reson:',
'badretype'               => 'Lis peraulis clâfs inseridis no son compagnis.',
'userexists'              => 'Il non utent inserît al è za doprât. Sielç par plasê un non diferent.',
'loginerror'              => 'Erôr te jentrade',
'createaccounterror'      => "No si à podût creâ l'identitât: $1",
'nocookiesnew'            => "L'identitât utent e je stade creade, ma no tu sês jentrât. {{SITENAME}} al dopre i cookies par visâsi dai utents, e tu tu ju âs disabilitâts. Par plasê abilitiju, dopo jentre cul to gnûf non utent e password.",
'nocookieslogin'          => '{{SITENAME}} e dopre i cookies par visâsi dai utents, e tu tu ju âs disabilitâts. Par plasê abilitiju e torne a provâ.',
'noname'                  => 'No tu âs inserît un non utent valit.',
'loginsuccesstitle'       => 'Jentrât cun sucès',
'loginsuccess'            => 'Cumò tu sês jentrât te {{SITENAME}} sicu "$1".',
'nosuchuser'              => 'Nissun utent regjistrât cul non "$1". Controle il non inserît o [[Special:UserLogin/signup|cree tu une gnove identitât]].',
'nosuchusershort'         => 'Nol esist nissun utent cul non "$1". Controle di no vê sbaliât di scrivi.',
'nouserspecified'         => 'Tu scugnis specificâ un non utent.',
'wrongpassword'           => 'La peraule clâf zontade no je juste. Torne par plasê a provâ.',
'wrongpasswordempty'      => 'La peraule clâf inseride e je vueide. Torne a provâ.',
'passwordtooshort'        => 'La peraule clâf e à di jessi di almancul {{PLURAL:$1|1 caratar|$1 caratars}}.',
'password-name-match'     => 'La peraule clâf e à di jessi divierse dal to non utent.',
'mailmypassword'          => 'Mande une gnove peraule clâf ae me direzion di pueste eletroniche',
'passwordremindertitle'   => 'Gnove peraule clâf temporanie par {{SITENAME}}',
'passwordremindertext'    => 'Cualchidun (probabilmentri tu, de direzion IP $1) al à domandât une gnove peraule clâf par jentrâ in {{SITENAME}} ($4).
Une peraule clâf temporanie par l\'utent "$2" e je stade creade e impuestade a "$3". Se cheste e jere la tô intenzion, tu varâs di jentrâ e sielzi une gnove peraule clâf cumò. La to peraule clâf temporanie e scjadarà daspò {{PLURAL:$5|une zornade|$5 zornadis}}.

Se no tu âs domandât tu chest o se tu âs cjatât la peraule clâf e no tu vuelis plui cambiâle, tu puedis ignorâ chest messaç e continuâ a doprâ la vecje peraule clâf.',
'noemail'                 => 'Nissune direzion email regjistrade par l\'utent "$1".',
'passwordsent'            => 'Une gnove peraule clâf e je stade mandade ae direzion di pueste eletroniche regjistrade par l\'utent "$1".
Par plasê torne a fâ la jentrade pene che tu la âs ricevude.',
'eauthentsent'            => 'Un messaç di pueste eletroniche di conferme al è stât mandât ae direzion specificade.
Prime di ricevi cualsisei altri messaç di pueste, tu scugnis seguî lis istruzions scritis dal messaç, par confermâ che la identitât e je propi la tô.',
'emailauthenticated'      => 'La tô direzion email e je stade autenticade ai $2 aes $3.',
'emailnotauthenticated'   => 'La tô direzion email no je ancjemò autenticade. No vignaran mandâts messaçs pes funzions ca sot.',
'noemailprefs'            => 'Specifiche une direzion email par fâ lâ cheste funzion.',
'emailconfirmlink'        => 'Conferme la tô direzion email',
'invalidemailaddress'     => 'La direzion email no pues jessi acetade parcè che no samee intun formât valit. Inserìs par plasê une direzion ben formatade o disvuede chest cjamp.',
'accountcreated'          => 'Identitât creade',
'accountcreatedtext'      => 'La identitât utent par $1 e je stade creade.',
'createaccount-title'     => 'Creazion di une identitât par {{SITENAME}}',
'loginlanguagelabel'      => 'Lenghe: $1',

# Change password dialog
'resetpass'               => 'Gambie peraule clâf',
'resetpass_header'        => 'Cambie peraule clâf de identitât',
'oldpassword'             => 'Vecje peraule clâf',
'newpassword'             => 'Gnove peraule clâf',
'retypenew'               => 'Torne a scrivi chê gnove',
'resetpass-submit-cancel' => 'Scancele',

# Special:PasswordReset
'passwordreset-username' => 'Non utent:',

# Edit page toolbar
'bold_sample'     => 'Test in gruessut',
'bold_tip'        => 'Test in gruessut',
'italic_sample'   => 'Test in corsîf',
'italic_tip'      => 'Test in corsîf',
'link_sample'     => 'Titul dal leam',
'link_tip'        => 'Leams internis',
'extlink_sample'  => 'http://www.example.com titul leam',
'extlink_tip'     => 'Leam esterni (visiti dal prefìs http://)',
'headline_sample' => 'Test dal titul',
'headline_tip'    => 'Titul di nivel 2',
'nowiki_sample'   => 'Inserìs test no formatât culì',
'nowiki_tip'      => 'Ignore la formatazion wiki',
'image_sample'    => 'Esempli.jpg',
'image_tip'       => 'Figure includude',
'media_sample'    => 'Esempli.ogg',
'media_tip'       => 'Leam a un file multimediâl',
'sig_tip'         => 'La tô firme cun ore e date',
'hr_tip'          => 'Rie orizontâl (no stâ doprâle masse spes)',

# Edit pages
'summary'                          => 'Somari:',
'subject'                          => 'Argoment (intestazion):',
'minoredit'                        => 'Chest al è un piçul cambiament',
'watchthis'                        => 'Ten di voli cheste pagjine',
'savearticle'                      => 'Salve la pagjine',
'preview'                          => 'Anteprime',
'showpreview'                      => 'Mostre anteprime',
'showlivepreview'                  => "Anteprime ''live''",
'showdiff'                         => 'Mostre cambiaments',
'anoneditwarning'                  => 'No tu sês jentrât cuntun non utent. La to direzion IP e vignarà regjistrade tal storic di cheste pagjine.',
'missingsummary'                   => "'''Atenzion:''' no tu âs specificât un ogjet par chest cambiament. Se tu tornis a fracâ su \"Salve la pagjine\", il cambiament al vignarà salvât cuntun ogjet vueit.",
'missingcommenttext'               => 'Inserìs un coment ca sot.',
'missingcommentheader'             => "'''Atenzion:''' no tu âs specificât un ogjet/intestazion par chest coment. Se tu tornis a fracâ su \"Salve la pagjine\", il to cambiament al vignarà salvât cuntune intestazion vueide.",
'summary-preview'                  => 'Anteprime dal somari:',
'subject-preview'                  => 'Anteprime ogjet/intestazion:',
'blockedtitle'                     => 'Utent blocât',
'blockedtext'                      => "'''Chest non utent o direzion IP a son stâts blocâts.'''

Il bloc al è stât metût di $1. La reson furnide e je: ''$2''

* Inizi dal bloc: $8
* Scjadencje dal blocco: $6
* Interval di bloc: $7

Se tu vuelis tu puedis contatâ $1 o un altri [[{{MediaWiki:Grouppage-sysop}}|aministradôr]] par fevelâ dal bloc.

Visiti che no tu puedis doprâ la funzion 'Messaç di pueste a chest utent' se no tu âs specificât une direzion di pueste eletroniche valide tes [[Special:Preferences|preferencis]] e se no tu sês stât blocât al ûs di cheste funzion.

Par plasê inclût la to direzion IP atuâl ($3) o il numar dal bloc (ID #$5) in ogni richieste di sclariments.",
'whitelistedittext'                => 'Tu scugnis $1 par cambiâ lis pagjinis.',
'confirmedittext'                  => 'Prime di cambiâ lis pagjinis tu scugnis confermâ la to direzion di pueste eletroniche. Par impuestâ e confermâ la direzion, dopre lis [[Special:Preferences|preferencis]].',
'loginreqtitle'                    => 'Si scugne jentrâ',
'loginreqlink'                     => 'jentrâ',
'loginreqpagetext'                 => 'Tu scugnis $1 par viodi lis altris pagjinis.',
'accmailtitle'                     => 'Password mandade.',
'accmailtext'                      => "Une password gjenerade a câs par [[User talk:$1|$1]] e je stade mandade a $2.

La password par cheste identitât e pues jessi cambiade su la pagjine ''[[Special:ChangePassword|cambie password]]'' daspò de jentrade.",
'newarticle'                       => '(Gnûf)',
'newarticletext'                   => "Tu âs seguît un leam a une pagjine che no esist ancjemò. Par creâ une pagjine, scomence a scrivi tal spazi ca sot (cjale il [[{{MediaWiki:Helppage}}|jutori]] par altris informazions). Se tu sês ca par erôr, frache semplicementri il boton '''Indaûr''' dal to sgarfadôr.",
'anontalkpagetext'                 => "----''Cheste e je la pagjine di discussion di un utent anonim, che nol à ancjemò creât une identitât, o che no la vûl doprâ. Par identificâlu/e a doprin alore la so direzion IP. Lis direzions IP a podin però jessi condividudis di plui utents. Se tu sês un utent anonim e tu crodis che ti vedin fat coments che no si riferissin a ti, par plasê [[Special:UserLogin|cree une gnove identitâ o jentre]] cun chê che tu âs za cussì tu evitarâs in futûr di jessi confondût un altris utents anonims.''",
'noarticletext'                    => 'Par cumò nol è nuie in cheste pagjine.
Tu puedis [[Special:Search/{{PAGENAME}}|cirî chest titul]] in altris pagjinis o <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} cirî i regjistris leâts],
o ben [{{fullurl:{{FULLPAGENAME}}|action=edit}} cambiâ cheste pagjine]</span>.',
'noarticletext-nopermission'       => 'Par cumò nol è nuie in cheste pagjine.
Tu puedis [[Special:Search/{{PAGENAME}}|cirî chest titul]] in altris pagjinis o <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} cirî i regjistris leâts].',
'userpage-userdoesnotexist'        => 'La identitât "<nowiki>$1</nowiki>" no je di un utent regjistrât. Controle che tu vuelis pardabon creâ o modificâ cheste pagjine.',
'clearyourcache'                   => "'''Ocjo: dopo vê salvât, tu podaressis scugnî netâ la cache dal to sgarfadôr par viodi i cambiaments.''' Par '''Mozilla / Firefox / Safari''': frache ''Torne a cjamâ'' tignint jù ancje il tast des maiusculis, o se no frache ''Ctrl-F5'' o ''Ctrl-R'' (''Command-R'' su Mac); par '''Konqueror''': frache ''Reload'' o il tast ''F5''; par '''Opera''' al pues jessi necessari disvuedâ dal dut la cache doprant il menù ''Tools → Preferencis''; par '''Internet Explorer:''' ten fracât il tast ''Ctrl'' cuant che tu cjalcjis su ''Aggiorna'' o frache ''Ctrl-F5''.",
'updated'                          => '(Inzornât)',
'note'                             => "'''Note:'''",
'previewnote'                      => "'''Visiti che cheste e je dome une anteprime, e no je stade ancjemò salvade!'''",
'editing'                          => 'Cambiament di $1',
'editingsection'                   => 'Cambiament di $1 (sezion)',
'editingcomment'                   => 'Cambiament di $1 (gnove sezion)',
'editconflict'                     => 'Conflit inte modifiche: $1',
'explainconflict'                  => "Cualchidun altri al à cambiât cheste pagjine di cuant che tu âs començât a modificâle.
La aree di test disore e conten il test de pagjine che esist cumò, i tiei cambiaments a son mostrâts inte aree disot.
Tu varâs di inserî di gnûf i tiei cambiaments tal test esistint.
'''Dome''' il test in alt al vignarà salvât cuant che tu frachis su \"{{int:savearticle}}\".",
'editingold'                       => "'''ATENZION: tu stâs cambiant une version vecje e no inzornade di cheste pagjine. Se tu la salvis, ducj i cambiaments fats di chê volte in ca a laran pierdûts.'''",
'yourdiff'                         => 'Difarencis',
'copyrightwarning'                 => "Note: ducj i contribûts a {{SITENAME}} a si considerin come dâts fûr sot de licence $2 (cjale $1 pai detais). Se no tu vuelis che i tiei tescj a podedin jessi modificâts e tornâts a dâ fûr di ognidun cence limits, no stâ mandâju a {{SITENAME}}.<br />
Cun di plui, inviant il test tu declaris che tu âs scrit tu chest o tu lu âs copiât di une sorzint tal domini public o di une sorzint libare.
'''NO STÂ MANDÂ MATERIÂL CUVIERT DAL DIRIT DI AUTÔR CENCE AUTORIZAZION!'''",
'readonlywarning'                  => "'''ATENZION: La base di dâts e je blocade par vie de manutenzion, par cui no si podin salvâ lis modifichis par cumò. Par no pierdilis, tu puedis copiâ e tacâ il test inserît fin cumò e salvâlu intun file di test.'''

L'aministradôr che al à blocât la base di dâts al à ufiert chest spiegazion: $1",
'templatesused'                    => '{{PLURAL:$1|Model doprât|Modei doprâts}} par cheste pagjine:',
'templatesusedpreview'             => '{{PLURAL:$1|Model doprât|Modei doprâts}} in cheste anteprime:',
'templatesusedsection'             => '{{PLURAL:$1|Model doprât|Modei doprâts}} in cheste sezion:',
'template-protected'               => '(protezût)',
'template-semiprotected'           => '(semi-protezût)',
'hiddencategories'                 => 'Cheste pagjine e je {{PLURAL:$1|intune categorie platade|in $1 categoriis platadis}}:',
'nocreatetitle'                    => 'Creazion des pagjinis limitade',
'nocreatetext'                     => '{{SITENAME}} al à limitât la pussibilitât di creâ gnovis pagjinis ai utents regjistrâts. Tu puedis tornâ indaûr e cambiâ une pagjine che e esist o se no [[Special:UserLogin|jentrâ o creâ une gnove identitât]].',
'nocreate-loggedin'                => 'No tu âs i permès che a coventin par creâ gnovis pagjinis.',
'permissionserrors'                => 'Erôr tai permès',
'permissionserrorstext-withaction' => 'No tu âs i permès che a coventin par $2, {{PLURAL:$1|par il motîf|pai motîfs}} ca sot:',
'recreate-moveddeleted-warn'       => "'''Atenzion: tu stâs par tornâ a creâ une pagjine che e je stade eliminade timp fa.'''

Siguriti che sedi pardabon oportun lâ indevant cul cambiament di cheste pagjine.
Ve ca par comoditât la liste des eliminazions e dai moviments par cheste pagjine:",
'moveddeleted-notice'              => 'Cheste pagjine e je stade eliminade.
Il regjistri di eliminazion e di spostament pe pagjine a son mostrâts ca sot par informazion.',
'log-fulllog'                      => 'Viôt dut il regjistri',
'edit-no-change'                   => 'Il cambiament al è stât ignorât parcè che no tu âs cambiât nuie tal test.',

# Parser/template warnings
'post-expand-template-inclusion-warning'  => "'''Atenzion:''' La dimension dai modei includûts e je masse grande.
Cualchi model nol vignarà includût.",
'post-expand-template-inclusion-category' => 'Pagjinis dulà che la dimension pe inclusion dai modei e je stade superade',
'post-expand-template-argument-warning'   => "'''Avîs:''' Cheste pagjine e conten almancul un argoment di model che al à une dimension di espansion masse grande. Chescj argoments no saran includûts.",
'post-expand-template-argument-category'  => 'Pagjinis che a contegnin argoments di modei che a mancjin',

# History pages
'viewpagelogs'           => 'Cjale i regjistris relatîfs a cheste pagjine.',
'nohistory'              => 'Nol è presint un storic dai cambiaments par cheste pagjine.',
'currentrev'             => 'Version atuâl',
'currentrev-asof'        => 'Revision atuâl dai $1',
'revisionasof'           => 'Version dai $1',
'revision-info'          => 'Version dal $1, autôr: $2',
'previousrevision'       => '← Version plui vecje',
'nextrevision'           => 'Version plui gnove →',
'currentrevisionlink'    => 'Version atuâl',
'cur'                    => 'cor',
'next'                   => 'prossim',
'last'                   => 'ultime',
'page_first'             => 'prime',
'page_last'              => 'ultime',
'histlegend'             => "Confront tra lis versions: sielç lis caselis des versions che ti interessin e frache Invio o il boton in bas.

Leiende: (cur) = difarencis cun la version atuâl, (prec) = difarencis cun la version precedente, '''p''' = piçul cambiament",
'history-fieldset-title' => 'Sgarfe tal storic',
'history-show-deleted'   => 'Dome chei eliminâts',
'histfirst'              => 'Prime',
'histlast'               => 'Ultime',
'historysize'            => '({{PLURAL:$1|1 byte|$1 bytes}})',
'historyempty'           => '(vueide)',

# Revision feed
'history-feed-title'          => 'Storic des revisions',
'history-feed-description'    => 'Storic des revisions de pagjine su cheste wiki',
'history-feed-item-nocomment' => '$1 ai $2',

# Revision deletion
'rev-delundel'               => 'mostre/plate',
'rev-showdeleted'            => 'mostre',
'revdelete-show-file-submit' => 'Sì',
'revdelete-radio-same'       => '(no stâ cambiâ)',
'revdelete-radio-set'        => 'Sì',
'revdelete-radio-unset'      => 'No',
'revdel-restore'             => 'cambie visibilitât',
'revdel-restore-deleted'     => 'revisions eliminadis',
'revdel-restore-visible'     => 'revisions visibilis',
'pagehist'                   => 'Storic de pagjine',
'revdelete-reasonotherlist'  => 'Altri motîf',

# Merge log
'revertmerge' => 'Anule unions',

# Diffs
'history-title'           => 'Storic dai cambiaments di "$1"',
'difference'              => '(Difarence jenfri des revisions)',
'lineno'                  => 'Rie $1:',
'compareselectedversions' => 'Confronte versions selezionadis',
'editundo'                => 'anule',
'diff-multi'              => '({{PLURAL:$1|Une revision intermedie|$1 revisions intermediis}} di {{PLURAL:$2|un utent no mostrade|$2 utents no mostradis}})',

# Search results
'searchresults'                    => 'Risultâts de ricercje',
'searchresults-title'              => 'Risultâts de ricercje di "$1"',
'searchresulttext'                 => 'Par plui informazions su lis ricercjis in {{SITENAME}}, cjale [[{{MediaWiki:Helppage}}|{{int:help}}]].',
'searchsubtitle'                   => 'Ricercje di \'\'\'[[:$1]]\'\'\' ([[Special:Prefixindex/$1|dutis lis pagjinis che a scomencin par "$1"]]{{int:pipe-separator}}[[Special:WhatLinksHere/$1|dutis lis pagjinis che a pontin a "$1"]])',
'searchsubtitleinvalid'            => 'Pal test "$1"',
'toomanymatches'                   => 'Masse risultâts, prove par plasê une ricercje divierse.',
'titlematches'                     => 'Corispondencis tai titui des pagjinis',
'notitlematches'                   => 'Nissune corispondence tai titui des pagjinis',
'textmatches'                      => 'Corispondencis tal test des pagjinis',
'notextmatches'                    => 'Nissune corispondence tal test des pagjinis',
'prevn'                            => 'precedents {{PLURAL:$1|$1}}',
'nextn'                            => 'prossims {{PLURAL:$1|$1}}',
'prevn-title'                      => '$1 {{PLURAL:$1|risultât precedent|risultâts precedents}}',
'nextn-title'                      => '$1 {{PLURAL:$1|risultât sucessîf|risultâts sucessîfs}}',
'shown-title'                      => 'Mostre $1 {{PLURAL:$1|risultât|risultâts}} par pagjine',
'viewprevnext'                     => 'Cjale ($1 {{int:pipe-separator}} $2) ($3).',
'searchmenu-legend'                => 'Opzions de ricercje',
'searchmenu-exists'                => "'''E je une pagjine di non \"[[:\$1]]\" su cheste wiki'''",
'searchmenu-new'                   => "'''Cree la pagjine \"[[:\$1]]\" su cheste wiki!'''",
'searchhelp-url'                   => 'Help:Contignûts',
'searchprofile-articles'           => 'Pagjinis di contignûts',
'searchprofile-project'            => 'Pagjinis di jutori e sul progjet',
'searchprofile-images'             => 'Multimedia',
'searchprofile-everything'         => 'Dut',
'searchprofile-advanced'           => 'Avançade',
'searchprofile-articles-tooltip'   => 'Cîr in $1',
'searchprofile-project-tooltip'    => 'Cîr in $1',
'searchprofile-images-tooltip'     => 'Cîr files',
'searchprofile-everything-tooltip' => 'Cîr ducj i gjenars di contignûts (ancje lis pagjinis di discussion)',
'searchprofile-advanced-tooltip'   => 'Cîr tai spazis dai nons personalizâts',
'search-result-size'               => '$1 ({{PLURAL:$2|une peraule|$2 peraulis}})',
'search-result-category-size'      => '{{PLURAL:$1|1 membri|$1 membris}} ({{PLURAL:$2|1 sotcategorie|$2 sotcategoriis}}, {{PLURAL:$3|1 file|$3 files}})',
'search-result-score'              => 'Rilevance: $1%',
'search-redirect'                  => '(re-indreçament $1)',
'search-section'                   => '(sezion $1)',
'search-suggest'                   => 'Forsit tu cirivis: $1',
'search-interwiki-caption'         => 'Progjets fradis',
'search-interwiki-default'         => 'Risultâts di $1:',
'search-interwiki-more'            => '(altri)',
'search-mwsuggest-enabled'         => 'cui sugjeriments',
'search-mwsuggest-disabled'        => 'cence i sugjeriments',
'mwsuggest-disable'                => 'Disative i sugjeriments AJAX',
'searchrelated'                    => 'leâts',
'searchall'                        => 'ducj',
'showingresults'                   => "Ca sot {{PLURAL:$1|al è fin a '''1''' risultât|a son fin a '''$1''' risultâts}} scomençant dal numar '''$2'''.",
'showingresultsnum'                => "Ca sot {{PLURAL:$3|al è '''1''' risultât|a son '''$3''' risultâts}} scomençant dal numar '''$2'''.",
'showingresultsheader'             => "{{PLURAL:$5|Risultât '''$1''' su '''$3'''|Risultâts '''$1 - $2''' su '''$3'''}} par '''$4'''",
'nonefound'                        => "'''Note''': la ricercje e ven fate normalmentri dome in cualchi spazi dai nons. Prove a scrivi ''all:'' prime dal test di cjatâ par cirî in ducj i nons dai spazis (includint lis pagjinis di discussion, i modei e v.i.) o se no dopre il non dal spazi desiderât come prefìs.",
'search-nonefound'                 => 'Nissun risultât par cheste ricercje.',
'powersearch'                      => 'Cîr',
'powersearch-legend'               => 'Ricercje avanzade',
'powersearch-ns'                   => 'Cîr tai spazis dai nons:',
'powersearch-redir'                => 'Elenc re-indreçaments',
'powersearch-field'                => 'Cîr',
'search-external'                  => 'Ricercje esterne',
'searchdisabled'                   => 'La ricercje in {{SITENAME}} no je ative. Tu puedis doprâ Google intant. Sta atent che lis lôr tabelis sul contignût di {{SITENAME}} a puedin jessi pôc inzornadis.',

# Quickbar
'qbsettings'               => 'Sbare svelte',
'qbsettings-none'          => 'Nissune',
'qbsettings-fixedleft'     => 'Fis a Çampe',
'qbsettings-fixedright'    => 'Fis a Drete',
'qbsettings-floatingleft'  => 'Flutuant a çampe',
'qbsettings-floatingright' => 'Flutuant a diestre',

# Preferences page
'preferences'                 => 'Preferencis',
'mypreferences'               => 'mês preferencis',
'prefs-edits'                 => 'Numar di cambiaments fats:',
'prefsnologin'                => 'No tu sês jentrât',
'changepassword'              => 'Gambie peraule clâf',
'prefs-skin'                  => 'Mascare',
'skin-preview'                => 'Anteprime',
'datedefault'                 => 'Nissune preference',
'prefs-datetime'              => 'Date e ore',
'prefs-personal'              => 'Dâts utents',
'prefs-rc'                    => 'Ultins cambiaments & stubs',
'prefs-watchlist'             => 'Tignudis di voli',
'prefs-watchlist-days'        => 'Numar di zornadis di mostrâ inte liste des pagjinis tignudis di voli:',
'prefs-watchlist-days-max'    => 'Massim $1 {{PLURAL:$1|zornade|zornadis}}',
'prefs-watchlist-edits'       => 'Numar di modifichis di mostrâ inte liste slargjade:',
'prefs-watchlist-edits-max'   => 'Numar massim: 1000',
'prefs-misc'                  => 'Variis',
'prefs-resetpass'             => 'Cambie la peraule clâf',
'saveprefs'                   => 'Salve lis preferencis',
'resetprefs'                  => 'Predeterminât',
'restoreprefs'                => 'Torne a lis impostazions predeterminadis',
'prefs-editing'               => 'Cambiament',
'prefs-edit-boxsize'          => 'Dimensions dal barcon pai cambiaments.',
'rows'                        => 'Riis',
'searchresultshead'           => 'Ricercje',
'resultsperpage'              => 'Risultâts par pagjine',
'stub-threshold'              => 'Valôr minim pe formatazion dai <a href="#" class="stub">leams aboç</a> (bytes):',
'recentchangesdays'           => 'Numar di zornadis di mostrâ tai ultins cambiaments:',
'recentchangesdays-max'       => '(massim $1 {{PLURAL:$1|zornade|zornadis}})',
'recentchangescount'          => 'Numar di cambiaments di mostrâ normalmentri:',
'savedprefs'                  => 'Lis preferencis a son stadis salvadis',
'timezonelegend'              => 'Fûs orari:',
'localtime'                   => 'Ore locâl:',
'timezoneuseserverdefault'    => 'Dopre la ore dal servidôr ($1)',
'timezoneuseoffset'           => 'Altri (inserìs la difarence)',
'timezoneoffset'              => 'Difarence¹:',
'servertime'                  => 'Ore dal servidôr:',
'guesstimezone'               => 'Cjape impostazions dal sgarfadôr',
'timezoneregion-africa'       => 'Afriche',
'timezoneregion-antarctica'   => 'Antartic',
'timezoneregion-arctic'       => 'Artic',
'timezoneregion-asia'         => 'Asie',
'timezoneregion-atlantic'     => 'Ocean Atlantic',
'timezoneregion-australia'    => 'Australie',
'timezoneregion-europe'       => 'Europe',
'timezoneregion-indian'       => 'Ocean Indian',
'timezoneregion-pacific'      => 'Ocean Pacific',
'allowemail'                  => 'Ative la ricezion di messaçs email di bande di altris utents¹',
'prefs-searchoptions'         => 'Opzions de ricercje',
'prefs-namespaces'            => 'Spazis dai nons',
'defaultns'                   => 'Se no, cîr in chescj spazis dai nons:',
'default'                     => 'predeterminât',
'prefs-files'                 => 'Files',
'prefs-custom-css'            => 'CSS personalizât',
'prefs-custom-js'             => 'JS personalizât',
'prefs-emailconfirm-label'    => 'Conferme de pueste eletroniche:',
'youremail'                   => 'Email *',
'username'                    => 'Non utent:',
'uid'                         => 'ID utent:',
'prefs-memberingroups'        => 'Al fâs part {{PLURAL:$1|dal grup|dai grups}}:',
'prefs-registration'          => 'Date di regjistrazion:',
'yourrealname'                => 'Non vêr *',
'yourlanguage'                => 'Lenghe di mostrâ',
'yourvariant'                 => 'Varietât',
'yournick'                    => 'Stranon (nick):',
'badsig'                      => 'Firme crude invalide; controle i tags HTML.',
'yourgender'                  => 'Ses:',
'gender-unknown'              => 'No specificât',
'gender-male'                 => 'Masculin',
'gender-female'               => 'Feminin',
'prefs-help-gender'           => 'Opzionâl: doprât intal software par indreçâsi ai utents cul gjenar just. Cheste informazion e sarà publiche.',
'email'                       => 'Pueste eletroniche',
'prefs-help-realname'         => '* Non vêr (opzionâl): se tu sielzis di inserîlu al vignarà doprât par dâti un ricognossiment dal tô lavôr.',
'prefs-help-email'            => 'La direzion di pueste eletroniche e je opzionâl, ma nus permet di mandâti une gnove peraule clâf se tu ti la dismenteis.',
'prefs-help-email-others'     => 'Tu puedis ancje permeti a chei altris di contatâti par pueste eletroniche par mieç di un leam te tô pagjine utent o di discussion.
La tô direzion di pueste no ven mostrade cuant che i utents ti contatin.',
'prefs-help-email-required'   => 'E covente une direzion di pueste eletroniche.',
'prefs-info'                  => 'Informazions di base',
'prefs-signature'             => 'Firme',
'prefs-dateformat'            => 'Formât de date',
'prefs-advancedediting'       => 'Opzions avanzadis',
'prefs-advancedrc'            => 'Opzions avanzadis',
'prefs-advancedrendering'     => 'Opzions avanzadis',
'prefs-advancedsearchoptions' => 'Opzions avanzadis',
'prefs-advancedwatchlist'     => 'Opzions avanzadis',

# User rights
'editinguser'             => "Cambiament dai dirits par l'utent '''[[User:$1|$1]]''' ([[User talk:$1|{{int:talkpagelinktext}}]]{{int:pipe-separator}}[[Special:Contributions/$1|{{int:contribslink}}]])",
'userrights-groupsmember' => 'Al fâs part di:',

# Groups
'group'               => 'Grup:',
'group-user'          => 'Utents regjistrâts',
'group-autoconfirmed' => 'Utents auto confermâts',
'group-sysop'         => 'Aministradôrs',
'group-all'           => 'Utents',

'group-user-member' => 'Utent',

'grouppage-sysop' => '{{ns:project}}:Aministradôrs',

# User rights log
'rightslog' => 'Regjistri dai dirits dai utents',

# Associated actions - in the sentence "You do not have permission to X"
'action-edit' => 'cambiâ cheste pagjine',

# Recent changes
'nchanges'                          => '$1 {{PLURAL:$1|cambiament|cambiaments}}',
'recentchanges'                     => 'Ultins cambiaments',
'recentchanges-legend'              => 'Opzions dai ultins cambiaments',
'recentchangestext'                 => 'Cheste pagjine e mostre i plui recents cambiaments inte {{SITENAME}}.',
'recentchanges-feed-description'    => 'Chest canâl al ripuarte i cambiaments plui recents ai contignûts di cheste wiki.',
'recentchanges-label-newpage'       => 'Chest cambiament al à creât une gnove pagjine',
'recentchanges-label-minor'         => 'Chest al è un piçul cambiament',
'recentchanges-label-bot'           => 'Chest cambiament al è stât eseguît di un bot',
'recentchanges-label-unpatrolled'   => 'Chest cambiament nol è stât ancjemò verificât',
'rcnote'                            => "Ca sot tu cjatis {{PLURAL:$1|l'ultin cambiament|i ultins '''$1''' cambiaments}} al sît {{PLURAL:$2|intes ultimis 24 oris|tes ultimis '''$2''' zornadis}}; i dâts a son inzornâts ai $4 a lis $5.",
'rcnotefrom'                        => "Ca sot i cambiaments dal '''$2''' (fintremai al '''$1''').",
'rclistfrom'                        => 'Mostre i ultins cambiaments dal $1',
'rcshowhideminor'                   => '$1 i piçui cambiaments',
'rcshowhidebots'                    => '$1 i bots',
'rcshowhideliu'                     => '$1 utents jentrâts',
'rcshowhideanons'                   => '$1 utents anonims',
'rcshowhidepatr'                    => '$1 cambiaments verificâts',
'rcshowhidemine'                    => '$1 miei cambiaments',
'rclinks'                           => 'Mostre i ultins $1 cambiaments tes ultimis $2 zornadis<br />$3',
'diff'                              => 'difarencis',
'hist'                              => 'stor',
'hide'                              => 'plate',
'show'                              => 'mostre',
'minoreditletter'                   => 'p',
'newpageletter'                     => 'G',
'boteditletter'                     => 'b',
'number_of_watching_users_pageview' => '[tignude di voli di {{PLURAL:$1|un utent|$1 utents}}]',
'rc_categories'                     => 'Limite aes categoriis (dividilis cun "|")',
'rc_categories_any'                 => 'Cualsisei',
'newsectionsummary'                 => '/* $1 */ gnove sezion',
'rc-enhanced-expand'                => 'Mostre detais (al covente JavaScript)',
'rc-enhanced-hide'                  => 'Plate detais',

# Recent changes linked
'recentchangeslinked'          => 'Cambiaments leâts',
'recentchangeslinked-feed'     => 'Cambiaments leâts',
'recentchangeslinked-toolbox'  => 'Cambiaments leâts',
'recentchangeslinked-title'    => 'Cambiaments leâts a "$1"',
'recentchangeslinked-noresult' => 'Nissun cambiament aes pagjinis leadis tal periodi specificât.',
'recentchangeslinked-summary'  => "Cheste pagjine speciâl e mostre i cambiaments plui recents aes pagjinis leadis a chê specificade (o leadis ai elements intune categorie specificade). Lis [[Special:Watchlist|pagjinis tignudis di voli]] a son mostradis in '''gruessut'''.",
'recentchangeslinked-page'     => 'Non de pagjine:',
'recentchangeslinked-to'       => 'Mostre dome i cambiaments aes pagjinis leadis a chê specificade',

# Upload
'upload'                => 'Cjame sù un file',
'uploadbtn'             => 'Cjame sù un file',
'uploadnologin'         => 'No jentrât',
'uploadnologintext'     => 'Tu scugnis [[Special:UserLogin|jentrâ]] cul to non utent par cjamâ sù files.',
'uploaderror'           => 'Erôr cjamant sù',
'uploadtext'            => "Dopre la form ca sot par cjamâ sù un file, par cjalâ o cirî i files cjamâts sù in precedence va te [[Special:FileList|liste dai files cjamâts sù]], lis cjamadis e lis eliminazions a son ancje regjistrâts tal [[Special:Log/upload|regjistri des cjamadis]].

Par includi une figure intune pagjine, dopre un leam inte form
'''<nowiki>[[</nowiki>{{ns:file}}<nowiki>:file.jpg]]</nowiki>''',
'''<nowiki>[[</nowiki>{{ns:file}}<nowiki>:file.png|alt text]]</nowiki>''' or
'''<nowiki>[[</nowiki>{{ns:media}}<nowiki>:file.ogg]]</nowiki>''' par un leam diret al file.",
'uploadlog'             => 'regjistri cjamâts sù',
'uploadlogpage'         => 'Regjistri dai files cjamâts sù',
'uploadlogpagetext'     => 'Ca sot e je une liste dai file cjamâts su di recent.',
'filename'              => 'Non dal file',
'filedesc'              => 'Descrizion',
'fileuploadsummary'     => 'Somari:',
'filestatus'            => 'Stât dal copyright:',
'filesource'            => 'Sorzint:',
'uploadedfiles'         => 'Files cjamâts sù',
'ignorewarning'         => 'Ignore avîs e salve instès il file.',
'ignorewarnings'        => 'Ignore i avîs',
'minlength1'            => 'I nons dai files a àn di jessi a mancul di une letare.',
'badfilename'           => 'File non gambiât in "$1".',
'filetype-missing'      => 'Il file nol à une estension (par esempli ".jpg").',
'file-exists-duplicate' => 'Chest file al è un duplicât {{PLURAL:$1|dal file |dai files ca sot:}}',
'savefile'              => 'Salve file',
'uploadedimage'         => 'cjamât sù "$1"',
'overwroteimage'        => 'al à cjamât une gnove version di «[[$1]]»',
'uploaddisabled'        => 'Nus displâs, par cumò no si pues cjamâ sù robe.',
'uploaddisabledtext'    => 'Lis cjamadis di files a son disativadis.',
'sourcefilename'        => 'Non dal file origjinâl:',
'destfilename'          => 'Non dal file di destinazion:',
'upload-description'    => 'Descrizion dal file',
'watchthisupload'       => 'Ten di voli chest file',
'upload-success-subj'   => 'Cjamât sù cun sucès',

'upload-unknown-size' => 'Dimension no cognossude',

'license'           => 'Licence pal ûs:',
'license-header'    => 'Licence pal ûs',
'nolicense'         => 'Nissune licence sielte',
'license-nopreview' => '(Anteprime no disponibil)',

# Special:ListFiles
'imgfile'               => 'file',
'listfiles'             => 'Liste des figuris',
'listfiles_date'        => 'Date',
'listfiles_name'        => 'Non',
'listfiles_user'        => 'Utent',
'listfiles_size'        => 'Dimension in bytes',
'listfiles_description' => 'Descrizion',
'listfiles_count'       => 'Versions',

# File description page
'file-anchor-link'          => 'Figure',
'filehist'                  => 'Storic dal file',
'filehist-help'             => 'Frache suntune date/ore par viodi il file cemût che al jere in chel moment.',
'filehist-revert'           => 'ripristine',
'filehist-current'          => 'atuâl',
'filehist-datetime'         => 'Date/Ore',
'filehist-thumb'            => 'Miniature',
'filehist-thumbtext'        => 'Miniature de version dai $1',
'filehist-user'             => 'Utent',
'filehist-dimensions'       => 'Dimensions',
'filehist-filesize'         => 'Dimension dal file',
'filehist-comment'          => 'Coment',
'imagelinks'                => 'Leams ae figure',
'linkstoimage'              => '{{PLURAL:$1|La pagjine ca sot e je leade|Lis $1 pagjinis ca sot a son leadis}} a cheste figure:',
'nolinkstoimage'            => 'No son pagjinis leadis a chest file.',
'sharedupload'              => 'Chest file al è ven di $1 e al pues jessi doprât di altris progjets.',
'sharedupload-desc-here'    => 'Chest file al ven di $1 e al pues jessi doprât di altris progjets.
La descrizion su la sô [$2 pagjine di descrizion] e je mostrade ca sot.',
'uploadnewversion-linktext' => 'Cjame sù une gnove version di chest file',
'shared-repo-from'          => 'di $1',

# File reversion
'filerevert-comment' => 'Reson:',

# File deletion
'filedelete'                  => 'Elimine $1',
'filedelete-legend'           => 'Elimine il file',
'filedelete-submit'           => 'Elimine',
'filedelete-reason-otherlist' => 'Altri motîf',

# MIME search
'mimesearch' => 'Ricercje MIME',
'mimetype'   => 'Gjenar MIME:',
'download'   => 'discjame',

# List redirects
'listredirects' => 'Liste des redirezions',

# Unused templates
'unusedtemplates'    => 'Modei no doprâts',
'unusedtemplateswlh' => 'altris leams',

# Random page
'randompage' => 'Une pagjine a câs',

# Random redirect
'randomredirect' => 'Un re-indreçament casuâl',

# Statistics
'statistics'                   => 'Statistichis',
'statistics-header-pages'      => 'Statistichis su lis pagjinis',
'statistics-header-edits'      => 'Statistichis sui cambiaments',
'statistics-header-views'      => 'Statistichis su lis viodudis',
'statistics-header-users'      => 'Statistichis dai utents',
'statistics-header-hooks'      => 'Altris statistichis',
'statistics-articles'          => 'Pagjinis di contignûts',
'statistics-pages'             => 'Pagjinis',
'statistics-pages-desc'        => 'Dutis lis pagjinis de wiki, includint lis pagjinis di discussion, i re-indreçaments e v.i.',
'statistics-files'             => 'Files cjamâts sù',
'statistics-edits'             => 'Cambiaments scomençant de instalazion di {{SITENAME}}',
'statistics-edits-average'     => 'Medie dai cambiaments par ogni pagjine',
'statistics-views-total'       => 'Viodudis totâls',
'statistics-views-peredit'     => 'Viodudis par cambiament',
'statistics-users'             => '[[Special:ListUsers|Utents]] regjistrâts',
'statistics-users-active'      => 'Utents atîfs',
'statistics-users-active-desc' => 'Utents che a àn fat une azion {{PLURAL:$1|intal ultin dì|intai ultins $1 dîs}}',
'statistics-mostpopular'       => 'Pagjinis plui visitadis',

'disambiguations'     => 'Pagjinis di disambiguazion',
'disambiguationspage' => 'Template:disambig',

'doubleredirects' => 'Re-indreçaments doplis',

'brokenredirects'        => 'Re-indreçaments che no funzionin',
'brokenredirectstext'    => 'I re-indreçaments ca sot a mandin a pagjinis che no esistin:',
'brokenredirects-edit'   => 'cambie',
'brokenredirects-delete' => 'elimine',

'withoutinterwiki'        => 'Pagjinis cence leams interwiki',
'withoutinterwiki-legend' => 'Prefìs',
'withoutinterwiki-submit' => 'Mostre',

'fewestrevisions' => 'Vôs con mancul revisions',

# Miscellaneous special pages
'nbytes'                  => '$1 {{PLURAL:$1|byte|bytes}}',
'ncategories'             => '$1 {{PLURAL:$1|categorie|categoriis}}',
'nlinks'                  => '$1 {{PLURAL:$1|leam|leams}}',
'nmembers'                => '$1 {{PLURAL:$1|element|elements}}',
'nrevisions'              => '$1 {{PLURAL:$1|revision|revisions}}',
'nviews'                  => '$1 {{PLURAL:$1|viodude|viodudis}}',
'nimagelinks'             => 'Doprât $1 {{PLURAL:$1|intune pagjine|in $1 pagjinis}}',
'lonelypages'             => 'Pagjinis solitaris',
'lonelypagestext'         => 'Lis pagjinis ca sot no àn leams di altris pagjinis di {{SITENAME}} e no son includudis in altris pagjinis.',
'uncategorizedpages'      => 'Pagjinis cence categorie',
'uncategorizedcategories' => 'Categoriis cence categorie',
'uncategorizedimages'     => 'Files cence une categorie',
'uncategorizedtemplates'  => 'Modei cence une categorie',
'unusedcategories'        => 'Categoriis no dopradis',
'unusedimages'            => 'Files no doprâts',
'popularpages'            => 'Pagjinis popolârs',
'wantedcategories'        => 'Categoriis desideradis',
'wantedpages'             => 'Pagjinis desideradis',
'wantedfiles'             => 'Files desiderâts',
'wantedtemplates'         => 'Modei desiderâts',
'mostlinked'              => 'Pagjinis a cui pontin il maiôr numar di leams',
'mostlinkedcategories'    => 'Categoriis a cui pontin il maiôr numar di leams',
'mostlinkedtemplates'     => 'Modei plui doprâts',
'mostcategories'          => 'Vôs cul maiôr numar di categoriis',
'mostimages'              => 'Figuris a cui pontin il maiôr numar di leams',
'mostrevisions'           => 'Vôs cul maiôr numar di revisions',
'prefixindex'             => 'Tabele des vôs par letare iniziâl',
'shortpages'              => 'Pagjinis curtis',
'longpages'               => 'Pagjinis lungjis',
'deadendpages'            => 'Pagjinis cence usite',
'protectedpages'          => 'Pagjinis protezudis',
'protectedtitles'         => 'Titui protezûts',
'listusers'               => 'Liste dai utents',
'usereditcount'           => '$1 {{PLURAL:$1|contribût|contribûts}}',
'usercreated'             => 'Creât ai $1 a lis $2',
'newpages'                => 'Gnovis pagjinis',
'newpages-username'       => 'Non utent:',
'ancientpages'            => 'Pagjinis plui vecjis',
'move'                    => 'Môf',
'movethispage'            => 'Môf cheste pagjine',
'pager-newer-n'           => '{{PLURAL:$1|1 plui gnûf|$1 plui gnûfs}}',
'pager-older-n'           => '{{PLURAL:$1|1 plui vieri|$1 plui vieris}}',

# Book sources
'booksources'               => 'Fonts librariis',
'booksources-search-legend' => 'Ricercje di fonts libraris',
'booksources-go'            => 'Va',

# Special:Log
'specialloguserlabel'  => 'Utent:',
'speciallogtitlelabel' => 'Titul:',
'log'                  => 'Regjistris',
'all-logs-page'        => 'Ducj i regjistris publics',
'alllogstext'          => 'Viodude combinade di ducj i regjistris disponibii di {{SITENAME}}.
Tu puedis strenzi la viodude sielzint un gjenar di regjistri, un non utent e/o la vôs che ti interesse (ducj e doi i cjamps a son sensibii al maiuscul/minuscul).',
'logempty'             => 'Nissun element corispondint tal regjistri.',

# Special:AllPages
'allpages'          => 'Dutis lis pagjinis',
'alphaindexline'    => 'di $1 a $2',
'nextpage'          => 'Prossime pagjine ($1)',
'prevpage'          => 'Pagjinis precedentis ($1)',
'allpagesfrom'      => 'Mostre pagjinis scomençant di:',
'allpagesto'        => 'Mostre lis pagjinis fin a:',
'allarticles'       => 'Dutis lis vôs',
'allinnamespace'    => 'Dutis lis pagjinis (non dal spazi $1)',
'allnotinnamespace' => 'Dutis lis pagjinis (no tal non dal spazi $1)',
'allpagesprev'      => 'Precedent',
'allpagesnext'      => 'Prossim',
'allpagessubmit'    => 'Va',
'allpagesprefix'    => 'Mostre lis pagjinis che a scomencin cun:',

# Special:Categories
'categories'                    => 'Categoriis',
'categoriespagetext'            => 'Lis categoriis ca sot a àn dentri pagjinis o elements multimediâi.
Lis [[Special:UnusedCategories|categoriis no dopradis]] no son mostradis culì.
Cjale ancje lis [[Special:WantedCategories|categoriis desideradis]].',
'categoriesfrom'                => 'Mostre lis categoriis scomençant di:',
'special-categories-sort-count' => 'met in ordin par numar',
'special-categories-sort-abc'   => 'met in ordin alfabetichementri',

# Special:DeletedContributions
'deletedcontributions'             => 'Contribûts dal utent eliminâts',
'deletedcontributions-title'       => 'Contribûts dal utent eliminâts',
'sp-deletedcontributions-contribs' => 'contribûts',

# Special:LinkSearch
'linksearch'      => 'Leams esternis',
'linksearch-ns'   => 'Spazi dai nons:',
'linksearch-ok'   => 'Cîr',
'linksearch-line' => '$1 al à un leam di $2',

# Special:ListUsers
'listusersfrom'      => 'Mostre i utents scomençant di:',
'listusers-submit'   => 'Mostre',
'listusers-noresult' => 'Nissun utent cjatât.',
'listusers-blocked'  => '({{GENDER:$1|blocât|blocade}})',

# Special:ActiveUsers
'activeusers'            => 'Liste dai utents atîfs',
'activeusers-intro'      => 'Cheste e je une liste dai utents che a àn vût cualchi gjenar di ativitât {{PLURAL:$1|te ultime dì|tai ultins $1 diis}}.',
'activeusers-count'      => '$1 {{PLURAL:$1|cambiament|cambiaments}} {{PLURAL:$3|te ultime dì|tai ultins $3 diis}}',
'activeusers-from'       => 'Mostre i utents scomençant di:',
'activeusers-hidebots'   => 'Plate i bots',
'activeusers-hidesysops' => 'Plate i aministradôrs',
'activeusers-noresult'   => 'Nissun utent cjatât.',

# Special:Log/newusers
'newuserlogpage'     => 'Regjistri dai gnûfs utents',
'newuserlogpagetext' => 'Ca sot tu cjatis un regjistri dai gnûfs utents creâts.',

# Special:ListGroupRights
'listgrouprights'         => 'Dirits dai grups di utents',
'listgrouprights-group'   => 'Grup',
'listgrouprights-rights'  => 'Dirits',
'listgrouprights-members' => '(liste dai membris)',

# E-mail user
'emailuser'       => 'Messaç di pueste a chest utent',
'emailpage'       => 'Mande un messaç di pueste eletroniche al utent',
'defemailsubject' => 'Messaç di {{SITENAME}}',
'noemailtitle'    => 'Nissune direzion email',
'noemailtext'     => 'Chest utent nol à specificât une direzion di pueste valide.',
'email-legend'    => 'Mande un messaç di pueste eletroniche a un altri utent di {{SITENAME}}',
'emailfrom'       => 'Di:',
'emailto'         => 'A:',
'emailsubject'    => 'Ogjet:',
'emailmessage'    => 'Messaç:',
'emailsend'       => 'Mande',
'emailccme'       => 'Mandimi une copie.',
'emailsent'       => 'Messaç mandât',
'emailsenttext'   => 'Il messaç di pueste eletroniche al è stât mandât.',

# Watchlist
'watchlist'            => 'Tignûts di voli',
'mywatchlist'          => 'Tignûts di voli',
'watchlistfor2'        => 'Par $1 $2',
'nowatchlist'          => 'Nissun element al è tignût di voli.',
'watchnologin'         => 'No tu sês jentrât',
'watchnologintext'     => "Tu 'nd âs di [[Special:UserLogin|jentrâ]] par modificâ la liste des pagjinis tignudis di voli.",
'addedwatchtext'       => "La pagjine \"<nowiki>\$1</nowiki>\" e je stade zontade ae [[Special:Watchlist|liste di chês tignudis di voli]].
Tal futûr i cambiaments a cheste pagjine e ae pagjine di discussion relative a saran segnalâts ca,
e la pagjine e sarà '''gruessute''' te [[Special:RecentChanges|liste dai ultins cambiaments]] cussì che tu puedis notâle daurman.

<p>Se tu vuelis gjavâle de liste pi indevant, frache su \"No stâ tignî di voli\" te sbare in alt.",
'removedwatchtext'     => 'La pagjine "[[:$1]]" e je stade gjavade de [[Special:Watchlist|liste di chês tignudis di voli]].',
'watch'                => 'Ten di voli',
'watchthispage'        => 'Ten di voli cheste pagjine',
'unwatch'              => 'No stâ tignî di voli',
'unwatchthispage'      => 'No stâ tignî di voli plui',
'notanarticle'         => 'Cheste pagjine no je une vôs',
'watchnochange'        => 'Nissun element di chei tignûts di voli al è stât cambiât tal periodi mostrât.',
'watchlist-details'    => '{{PLURAL:$1|E je $1 pagjine tignude|A son $1 pagjinis tignudis}} di voli, cence contâ lis pagjinis di discussion.',
'wlheader-enotif'      => '* Notifiche par pueste eletroniche ativade.',
'wlheader-showupdated' => "* Lis pagjinis gambiadis de ultime volte che tu lis âs cjaladis a son mostradis in '''gruessut'''",
'watchlistcontains'    => 'Tu stâs tignint di voli $1 {{PLURAL:$1|pagjine|pagjinis}}.',
'wlnote'               => "Ca sot {{PLURAL:$1|al è il cambiament plui recent|a son i '''$1''' cambiaments plui recents}} {{PLURAL:$2|inte ultime ore|intes '''$2''' oris passadis}}.",
'wlshowlast'           => 'Mostre ultimis $1 oris $2 zornadis $3',
'watchlist-options'    => 'Opzions pe liste dai tignûts di voli',

# Displayed when you click the "watch" button and it is in the process of watching
'watching'   => 'Daûr a zontâ aes pagjinis tignudis di voli...',
'unwatching' => 'Daûr a gjavâ des pagjinis tignudis di voli...',

'enotif_mailer'                => 'Sisteme di notifiche par pueste eletroniche di {{SITENAME}}',
'enotif_reset'                 => 'Segne dutis lis pagjinis come visitadis',
'enotif_impersonal_salutation' => 'Utent di {{SITENAME}}',
'changed'                      => 'cambiade',
'created'                      => 'creade',
'enotif_anon_editor'           => 'utent anonim $1',

# Delete
'deletepage'            => 'Elimine pagjine',
'confirm'               => 'Conferme',
'excontent'             => "il contignût al jere: '$1'",
'excontentauthor'       => "il contignût al jere: '$1' (e al veve contribuît dome '$2')",
'exbeforeblank'         => "il contignût prime di disvuedâ al jere: '$1'",
'exblank'               => 'pagjine vueide',
'delete-confirm'        => 'Elimine "$1"',
'delete-legend'         => 'Elimine',
'historywarning'        => "'''Atenzion:''' La pagjine che tu stâs eliminant e à un storic cun plui o mancul $1 {{PLURAL:$1|revision|revisions}}:",
'confirmdeletetext'     => 'Tu stâs par eliminâ par simpri une pagjine insieme cun dut il so storic.
Par plasê, da la conferme che tu vuelis fâlu, che tu capissis lis conseguencis e che tu lu stâs fasint tal rispiet de [[{{MediaWiki:Policy-url}}|politiche dal progjet]].',
'actioncomplete'        => 'Azion completade',
'actionfailed'          => 'Azion falide',
'deletedtext'           => '"$1" al è stât eliminât.
Cjale $2 par une liste des ultimis eliminazions.',
'dellogpage'            => 'Regjistri des eliminazions',
'deletionlog'           => 'regjistri eliminazions',
'reverted'              => 'Tornât ae version precedente',
'deletecomment'         => 'Reson:',
'deleteotherreason'     => 'Altri motîf o motîf in plui:',
'deletereasonotherlist' => 'Altri motîf',

# Rollback
'rollbacklink' => 'revoche',

# Protect
'protectlogpage'              => 'Regjistri des protezions',
'protectedarticle'            => '$1 protezût',
'modifiedarticleprotection'   => 'cambiât il nivel di protezion par "[[$1]]"',
'protect-title'               => 'Protezint "$1"',
'prot_1movedto2'              => '$1 movût in $2',
'protect-legend'              => 'Conferme protezion',
'protectcomment'              => 'Reson:',
'protectexpiry'               => 'Scjadence:',
'protect_expiry_invalid'      => 'Scjadence no valide.',
'protect_expiry_old'          => 'La scjadence e je za passade.',
'protect-text'                => "Ca tu puedis viodi e cambiâ il nivel di protezion pe pagjine '''$1'''.",
'protect-locked-access'       => "No tu âs i permès che a coventis par cambiâ i nivei di protezion de pagjine.
Lis impuestazions atuâls pe pagjine a son '''$1''':",
'protect-cascadeon'           => 'Cheste pagjine e je blocade par cumò parcè che e je includude {{PLURAL:$1|inte pagjine|intes pagjinis}} culì sot, dulà che e je ative la protezion ricorsive.
Tu puedis cambiâ il nivel di protezion di cheste pagjine, ma chest nol varà efiets su la protezion ricorsive.',
'protect-default'             => '(Autorize ducj i utents)',
'protect-fallback'            => 'Al covente il permès "$1"',
'protect-level-autoconfirmed' => 'Bloche i utents gnûfs e no regjistrâts',
'protect-level-sysop'         => 'Dome aministradôrs',
'protect-summary-cascade'     => 'a discjadude',
'protect-expiring'            => 'e scjât: $1 (UTC)',
'protect-expiry-indefinite'   => 'indefinît',
'protect-cascade'             => 'Protezion ricorsive (estendude a dutis lis pagjinis includudis in cheste).',
'protect-cantedit'            => 'No tu puedis cambiâ i nivei di protezion par cheste pagjine, parcè che no tu âs i permès par modificâle.',
'protect-expiry-options'      => '1 ore:1 hour,1 zornade:1 day,1 setemane:1 week,2 setemanis:2 weeks,1 mês:1 month,3 mês:3 months,6 mês:6 months,1 an:1 year,infinît:infinite',
'restriction-type'            => 'Permès:',
'restriction-level'           => 'Nivel di restrizion:',
'pagesize'                    => '(bytes)',

# Restrictions (nouns)
'restriction-edit'   => 'Cambie',
'restriction-move'   => 'Spostament',
'restriction-create' => 'Creazion',

# Undelete
'viewdeletedpage'           => 'Viôt lis pagjinis eliminadis',
'undeletebtn'               => 'Ripristine',
'undeletelink'              => 'viôt/ripristine',
'undeleteviewlink'          => 'viôt',
'undeleteinvert'            => 'Invertìs selezion',
'undeletecomment'           => 'Reson:',
'undelete-search-prefix'    => 'Mostre lis pagjinis che a scomencin cun:',
'undelete-search-submit'    => 'Cîr',
'undelete-show-file-submit' => 'Sì',

# Namespace form on various pages
'namespace'      => 'Non dal spazi:',
'invert'         => 'Invertìs selezion',
'blanknamespace' => '(Principâl)',

# Contributions
'contributions'       => 'Contribûts dal utent',
'contributions-title' => 'Contribûts di $1',
'mycontris'           => 'Miei contribûts',
'contribsub2'         => 'Par $1 ($2)',
'nocontribs'          => 'Nissun cambiament che al rispiete chescj criteris cjatât.',
'uctop'               => ' (su)',
'month'               => 'Scomençant dal mês (e prime):',
'year'                => 'Scomençant dal an (e prime):',

'sp-contributions-newbies'     => 'Mostre dome i contribûts dai gnûfs utents',
'sp-contributions-newbies-sub' => 'Pai gnûfs utents',
'sp-contributions-blocklog'    => 'Regjistri dai blocs',
'sp-contributions-deleted'     => 'contribûts dal utent eliminâts',
'sp-contributions-uploads'     => 'cjamadis',
'sp-contributions-logs'        => 'regjistris',
'sp-contributions-talk'        => 'discussion',
'sp-contributions-search'      => 'Cîr contribûts',
'sp-contributions-username'    => 'Direzion IP o non utent:',
'sp-contributions-toponly'     => 'Mostre dome i cambiaments che a son lis ultimis revisions pe pagjine',
'sp-contributions-submit'      => 'Cîr',

# What links here
'whatlinkshere'            => 'Leams a cheste vôs',
'whatlinkshere-title'      => 'Pagjinis che a son leadis a "$1"',
'whatlinkshere-page'       => 'Pagjine:',
'linkshere'                => "Lis pagjinis ca sot a son leadis a '''[[:$1]]''':",
'nolinkshere'              => "Nissune pagjine e à leams a '''[[:$1]]'''.",
'nolinkshere-ns'           => "No son pagjine leadis a '''[[:$1]]''' intal spazi dai nons sielt.",
'isredirect'               => 'pagjine di reindirizament',
'istemplate'               => 'includude',
'isimage'                  => 'leam a figure',
'whatlinkshere-prev'       => '{{PLURAL:$1|precedent|precedents $1}}',
'whatlinkshere-next'       => '{{PLURAL:$1|sucessîf|sucessîfs $1}}',
'whatlinkshere-links'      => '← leams',
'whatlinkshere-hideredirs' => '$1 re-indreçaments',
'whatlinkshere-hidetrans'  => '$1 inclusions',
'whatlinkshere-hidelinks'  => '$1 leams',
'whatlinkshere-hideimages' => '$1 leams da figuris',
'whatlinkshere-filters'    => 'Filtris',

# Block/unblock
'blockip'                  => 'Bloche utent',
'blockip-title'            => "Bloche l'utent",
'blockip-legend'           => "Bloche l'utent",
'ipadressorusername'       => 'Direzion IP o non utent:',
'ipbexpiry'                => 'Scjadence dal bloc:',
'ipbreason'                => 'Reson dal bloc:',
'ipbreasonotherlist'       => 'Altri motîf',
'ipbsubmit'                => 'Bloche chest utent',
'ipboptions'               => '2 oris:2 hours,1 zornade:1 day,3 zornadis:3 days,1 setemane:1 week,2 setemanis:2 weeks,1 mês:1 month,3 mês:3 months,6 mês:6 months,1 an:1 year,infinît:infinite',
'badipaddress'             => 'La direzion IP no je valide',
'ipblocklist'              => 'Utents blocâts',
'ipblocklist-submit'       => 'Cîr',
'blocklink'                => 'bloche',
'unblocklink'              => 'disbloche',
'change-blocklink'         => 'cambie bloc',
'contribslink'             => 'contribûts',
'blocklogpage'             => 'Regjistri dai blocs',
'blocklogentry'            => 'al à blocât "[[$1]]"; scjadence $2 $3',
'unblocklogentry'          => 'sblocât $1',
'block-log-flags-nocreate' => 'creazion identitât blocade',

# Developer tools
'lockdb'  => 'Bloche base di dâts',
'lockbtn' => 'Bloche base di dâts',

# Move page
'move-page'               => 'Spostament di $1',
'move-page-legend'        => 'Môf pagjine',
'movepagetext'            => "Cun il formulari ca sot tu puedis gambiâ il non a une pagjine, movint dut il sô storic al gnûf non.
Il vieri titul al deventarà une pagjine di reindirizament al gnûf titul. I leams ae vecje pagjine no saran gambiâts; verifiche
par plasê che no sedin reindirizaments doplis o no funzionants.
Tu sês responsabil che i leams a continui a mandâ tal puest just.

Note che la pagjine '''no''' sarà movude se e je za une pagjine cul gnûf titul, a mancul che no sedi vueide o un reindirizament e
cence un storic. Chest al vûl dî che tu puedis tornâ a movi la pagjine tal titul precedent, se
tu 'nd âs sbaliât e che no tu puedis sorescrivi une pagjine esistìnte.

<b>ATENZION!</b>
Chest al pues jessi un cambiament drastic e surprendint par une pagjine popolâr;
tu âs di cognossi lis conseguencis prime di lâ indevant.",
'movepagetalktext'        => "La pagjine di discussion corispuindinte e vegnarà ancje movude in automaticc, '''fûr che in chescj câs:'''
* Il spostament de pagjine e je tra spazis dai nons diviers
* Sot dal gnûf titul e esist za une pagjine di discussion (e no je vueide)
* Tu âs gjavât la sponte te casele culì sot.

In chescj câs, tu varâs di movi o unî a man lis informazions contignudis te pagjine di discussion, se tu lu desideris.",
'movearticle'             => 'Môf la vôs',
'movenologin'             => 'No tu sês jentrât',
'movenologintext'         => 'Tu âs di jessi un utent regjistrât e <a href="{{localurl:Special:UserLogin}}">jentrât</a> par movi une pagjine.',
'movenotallowed'          => 'No tu âs i permès che a coventin par movi lis pagjinis.',
'newtitle'                => 'Al gnûf titul',
'move-watch'              => 'Ten di voli cheste pagjine',
'movepagebtn'             => 'Môf pagjine',
'pagemovedsub'            => 'Movude cun sucès',
'movepage-moved'          => '\'\'\'"$1" e je stade movude al titul "$2"\'\'\'',
'articleexists'           => 'Une pagjine cun chest non e esist za, o il non sielt nol è valit.
Sielç par plasê un altri non.',
'talkexists'              => "'''La pagjine e je stade movude cun sucès, ma no si à podût movi la pagjine di discussion parcè che e esist za tal gnûf titul. Trasferìs il contignût a man par plasê.'''",
'movedto'                 => 'Movude in',
'movetalk'                => 'Môf ancje la pagjine di discussion, se pussibil.',
'movelogpage'             => 'Regjistri des pagjinis movudis',
'movelogpagetext'         => 'Ca sot e je une liste des pagjinis movudis.',
'movereason'              => 'Reson:',
'revertmove'              => 'ripristine',
'delete_and_move'         => 'Elimine e môf',
'delete_and_move_confirm' => 'Sì, elimine la pagjine',

# Export
'export'        => 'Espuarte pagjinis',
'exportcuronly' => 'Inclût dome la revision corinte, no dut il storic',
'export-addcat' => 'Zonte',
'export-addns'  => 'Zonte',

# Namespace 8 related
'allmessages'               => 'Ducj i messaçs di sistem',
'allmessagesname'           => 'Non',
'allmessagesdefault'        => 'Test predeterminât',
'allmessagescurrent'        => 'Test curint',
'allmessagestext'           => 'Cheste e je une liste dai messaçs di sisteme disponibii tal non dal spazi MediaWiki.
Par plasê va su [//www.mediawiki.org/wiki/Localisation MediaWiki Localisation] e [//translatewiki.net translatewiki.net] se tu vuelis contribuî ae traduzion gjeneriche di MediaWiki.',
'allmessages-filter-all'    => 'Ducj',
'allmessages-language'      => 'Lenghe:',
'allmessages-filter-submit' => 'Va',

# Thumbnails
'thumbnail-more'  => 'Slargje',
'filemissing'     => 'File mancjant',
'thumbnail_error' => 'Erôr inte creazion de miniature: $1',

# Special:Import
'import'                  => 'Impuarte pagjinis',
'import-interwiki-submit' => 'Impuarte',
'import-upload-filename'  => 'Non dal file:',
'import-comment'          => 'Coment:',
'import-revision-count'   => '$1 {{PLURAL:$1|revision|revisions}}',
'importfailed'            => 'Impuartazion falide: $1',
'importnotext'            => 'Vueit o cence test',
'importsuccess'           => 'Impuartât cun sucès!',

# Import log
'importlogpage'                    => 'Regjistris des impuartazions',
'import-logentry-upload-detail'    => '$1 {{PLURAL:$1|revision|revisions}}',
'import-logentry-interwiki-detail' => '$1 {{PLURAL:$1|revision|revisions}} di $2',

# Tooltip help for the actions
'tooltip-pt-userpage'             => 'La tô pagjine utent',
'tooltip-pt-anonuserpage'         => 'La pagjine utent di cheste direzion IP',
'tooltip-pt-mytalk'               => 'La tô pagjine di discussion',
'tooltip-pt-anontalk'             => 'Discussions dai cambiaments fats di cheste direzion IP',
'tooltip-pt-preferences'          => 'Lis mês preferencis',
'tooltip-pt-watchlist'            => 'La liste des pagjinis che tu stâs tignint di voli',
'tooltip-pt-mycontris'            => 'Liste dai tiei contribûts',
'tooltip-pt-login'                => 'La regjistrazion e je conseade, ancje se no obligatorie.',
'tooltip-pt-anonlogin'            => 'La regjistrazion e je conseade, ma no si scugne fâle',
'tooltip-pt-logout'               => 'Jes (logout)',
'tooltip-ca-talk'                 => 'Discussions su cheste pagjine',
'tooltip-ca-edit'                 => 'Tu puedis cambiâ cheste pagjine. Par plasê dopre il boton de anteprime prime di salvâ.',
'tooltip-ca-addsection'           => 'Scomence une gnove sezion',
'tooltip-ca-viewsource'           => 'Cheste pagjine e je protezude, ma tu puedis viodi la sô risultive.',
'tooltip-ca-history'              => 'Versions precedentis di cheste pagjine.',
'tooltip-ca-protect'              => 'Protêç cheste pagjine',
'tooltip-ca-unprotect'            => 'No stâ plui protezi cheste pagjine',
'tooltip-ca-delete'               => 'Elimine cheste pagjine',
'tooltip-ca-undelete'             => 'Ripristine i cambiaments fats a cheste pagjine prime che e fos eliminade',
'tooltip-ca-move'                 => 'Môf cheste pagjine (cambie il titul)',
'tooltip-ca-watch'                => 'Zonte cheste pagjine ae liste des pagjinis tignudis di voli',
'tooltip-ca-unwatch'              => 'Gjave cheste pagjine de liste des pagjinis tignudis di voli',
'tooltip-search'                  => 'Cîr in cheste wiki',
'tooltip-search-go'               => 'Va a une pagjine cul titul esat inserît, se e esist',
'tooltip-search-fulltext'         => 'Cîr il test inserît intes pagjinis',
'tooltip-p-logo'                  => 'Pagjine principâl',
'tooltip-n-mainpage'              => 'Visite la pagjine principâl',
'tooltip-n-mainpage-description'  => 'Visite la pagjine principâl',
'tooltip-n-portal'                => 'Descrizion dal progjet, ce che tu puedis fâ e dulà che tu puedis cjatâ lis robis',
'tooltip-n-currentevents'         => 'Informazions sui events di atualitât',
'tooltip-n-recentchanges'         => 'Liste dai ultins cambiaments inte wiki.',
'tooltip-n-randompage'            => 'Mostre une pagjine casuâl',
'tooltip-n-help'                  => 'Pagjinis di aiût',
'tooltip-t-whatlinkshere'         => 'Liste di dutis lis pagjinis che a son leadis a cheste',
'tooltip-t-recentchangeslinked'   => 'Liste dai ultins cambiaments intes pagjinis leadis a cheste',
'tooltip-feed-rss'                => 'Cjanâl RSS par cheste pagjine',
'tooltip-feed-atom'               => 'Cjanâl Atom par cheste pagjine',
'tooltip-t-contributions'         => 'Liste dai contribûts di chest utent',
'tooltip-t-emailuser'             => 'Mande un messaç di pueste eletroniche a chest utent',
'tooltip-t-upload'                => 'Cjame sù files multimediâi',
'tooltip-t-specialpages'          => 'Liste di dutis lis pagjinis speciâls',
'tooltip-t-print'                 => 'Version apueste pe stampe di cheste pagjine',
'tooltip-t-permalink'             => 'Leam permanent a cheste version de pagjine',
'tooltip-ca-nstab-main'           => 'Cjale la vôs',
'tooltip-ca-nstab-user'           => 'Cjale la pagjine dal utent',
'tooltip-ca-nstab-media'          => 'Cjale la pagjine dal file multimediâl',
'tooltip-ca-nstab-special'        => 'Cheste e je une pagjine speciâl e no pues jessi cambiade',
'tooltip-ca-nstab-project'        => 'Cjale la pagjine dal progjet',
'tooltip-ca-nstab-image'          => 'Cjale la pagjine dal file',
'tooltip-ca-nstab-mediawiki'      => 'Cjale il messaç di sisteme',
'tooltip-ca-nstab-template'       => 'Cjale il model',
'tooltip-ca-nstab-help'           => 'Cjale la pagjine dal jutori',
'tooltip-ca-nstab-category'       => 'Cjale la pagjine de categorie',
'tooltip-minoredit'               => 'Segne cheste come une piçul cambiament',
'tooltip-save'                    => 'Salve i tiei cambiaments',
'tooltip-preview'                 => 'Anteprime dai tiei cambiaments, doprile par plasê prime di salvâ!',
'tooltip-diff'                    => 'Mostre i cambiaments che tu âs fat al test.',
'tooltip-compareselectedversions' => 'Viôt lis difarencis framieç lis dôs versions di cheste pagjine selezionadis.',
'tooltip-watch'                   => 'Zonte cheste pagjine ae liste di chês tignudis di voli',
'tooltip-recreate'                => 'Torne a creâ la pagjine ancje se e je stade eliminade',
'tooltip-upload'                  => 'Scomence la cjamade',
'tooltip-rollback'                => '"Rollback" al anule il/i cambiament/s a cheste pagjine fats dal ultin utent cuntun sôl clic',
'tooltip-undo'                    => '"Anule" al permet di anulâ chest cambiament e al vierç il modul pal cambiament te modalitât di anteprime. Al permet cussì di zontâ une reson tal somari.',
'tooltip-summary'                 => 'Inserìs un curt somari',

# Stylesheets
'monobook.css' => '/* modifiche chest file par personalizâ la skin monobook par dut il sît */',

# Attribution
'anonymous'        => '{{PLURAL:$1|Utent anonim|Utents anonims}} di {{SITENAME}}',
'siteuser'         => 'Utent $1 di {{SITENAME}}',
'anonuser'         => '$1, utent anonim di {{SITENAME}}',
'lastmodifiedatby' => 'Cheste pagjine e je stade cambiade pe ultime volte a lis $2, $1 di $3.',
'othercontribs'    => 'Basât sul lavôr di $1.',
'others'           => 'altris',
'siteusers'        => '$1, {{PLURAL:$2|utent|utents}} di {{SITENAME}}',
'anonusers'        => '$1, {{PLURAL:$2|utent anonim|utents anonims}} di {{SITENAME}}',
'creditspage'      => 'Pagjine dai ricognossiments',
'nocredits'        => 'Nissune informazion sui ricognossiments disponibil par cheste pagjine.',

# Skin names
'skinname-standard'  => 'Classiche',
'skinname-nostalgia' => 'Nostalgjie',
'skinname-modern'    => 'Moderne',

# Browsing diffs
'previousdiff' => '← Difarence precedente',
'nextdiff'     => 'Prossime difarence →',

# Media information
'thumbsize'       => 'Dimension miniature:',
'widthheightpage' => '$1×$2, $3 {{PLURAL:$3|pagjine|pagjinis}}',
'file-info'       => 'Dimensions: $1, gjenar MIME: $2',
'file-info-size'  => '$1 × $2 pixel, dimensions: $3, gjenar MIME: $4',
'file-nohires'    => 'No son disponibilis versions cun risoluzion plui alte.',
'svg-long-desc'   => 'file tal formât SVG, dimensions nominâls $1 × $2 pixels, dimensions dal file: $3',
'show-big-image'  => 'Version a risoluzion plene',

# Special:NewFiles
'newimages'     => 'Galarie dai gnûfs files',
'imagelisttext' => 'Ca sot e je une liste di $1 {{PLURAL:$1|file|files}} ordenâts $2.',
'showhidebots'  => '($1 i bots)',
'noimages'      => 'Nuie di viodi.',
'ilsubmit'      => 'Cîr',
'bydate'        => 'par date',

# Bad image list
'bad_image_list' => 'Il formât al è cussi:

a vegnin considerâts dome i elements des listis (riis che a scomencin cul catatar *).
Il prin leam intune rie al à di jessi un leam aun file indesiderâtI.
I leams sucessîfs, su la stesse rie, a son considerâts come ecezions (ven a stâi pagjinis dulà che il file al pues jessi inserît normalmentri).',

# Metadata
'metadata'          => 'Metadâts',
'metadata-help'     => 'Chest file al conten informazions in plui, probabilmentri zontadis de fotocjamare o dal scanner doprât par creâlu o digjitalizâlu.
Se il file al è stât cambiât rispiet al so stât origjinâl, cualchi informazion e podarès no rifleti il file modificât.',
'metadata-expand'   => 'Mostre plui detais',
'metadata-collapse' => 'Plate detais',
'metadata-fields'   => 'I cjamps relatîfs ai metadâts EXIF elencâts ca sot a vignaran mostrâts inte pagjine de figure cuant che la tabele dai metadâts e je mostrade inte forme curte. Par impostazion predeterminade, ducj chei altris cjamps a vignaran platâts.
* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* isospeedratings
* focallength
* artist
* copyright
* imagedescription
* gpslatitude
* gpslongitude
* gpsaltitude',

# EXIF tags
'exif-imagewidth'       => 'Largjece',
'exif-imagelength'      => 'Altece',
'exif-orientation'      => 'Orientament',
'exif-xresolution'      => 'Risoluzion orizontâl',
'exif-yresolution'      => 'Risoluzion verticâl',
'exif-imagedescription' => 'Titul de figure',
'exif-make'             => 'Produtôr machine',
'exif-model'            => 'Model di machine fotografiche',
'exif-software'         => 'Software doprât',
'exif-artist'           => 'Autôr',
'exif-datetimeoriginal' => 'Date e ore di creazion dai dâts',
'exif-exposuretime'     => 'Timp di esposizion',
'exif-flash'            => 'Flash',
'exif-focallength'      => 'Lungjece focâl obietîf',
'exif-contrast'         => 'Control contrast',
'exif-gpsaltitude'      => 'Altitudin',

# EXIF attributes
'exif-compression-1' => 'Cence compression',

'exif-unknowndate' => 'Date no cognossude',

'exif-orientation-1' => 'Normâl',

# External editor support
'edit-externally'      => 'Modifiche chest file cuntune aplicazion esterne',
'edit-externally-help' => '(Cjale lis [//www.mediawiki.org/wiki/Manual:External_editors istruzions] par vê altris informazions)',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'dutis',
'namespacesall' => 'ducj',
'monthsall'     => 'ducj',

# E-mail address confirmation
'confirmemail'           => 'Conferme direzione di pueste',
'confirmemail_noemail'   => 'No tu âs metût une direzion di pueste eletroniche valide intes tôs [[Special:Preferences|preferencis]].',
'confirmemail_text'      => 'Cheste wiki ti domande di validÂ la to direzion di pueste eletroniche prime di doprâ lis funzions di email. Ative il boton ca sot par inviâ un codiç di conferme ae to direzion. Chest messaç al includarà un leam cuntun codiç; cjame il leam tal to sgarfadôr par confermâ la validitât de tô direzion.',
'confirmemail_send'      => 'Mande un codiç di conferme',
'confirmemail_sent'      => 'Messaç di conferme mandât.',
'confirmemail_needlogin' => 'Al covente $1 par confermâ la to direzion di pueste eletroniche.',
'confirmemail_success'   => 'La tô direzion di pueste e je stade confermade. Tu puedis cumò jentrâ e gjoldi la wiki.',
'confirmemail_loggedin'  => 'La tô direzion di pueste e je stade confermade.',
'confirmemail_subject'   => '{{SITENAME}}: richieste di conferme de direzion di pueste',

# Scary transclusion
'scarytranscludedisabled' => '[Inclusion dai interwikis no ative]',
'scarytranscludefailed'   => '[Recupar dal model falît par $1]',
'scarytranscludetoolong'  => '[URL masse lungje]',

# Delete conflict
'recreate' => 'Torne a creâ',

# action=purge
'confirm_purge_button' => 'Va indevant',

# Multipage image navigation
'imgmultipageprev' => '← pagjine precedente',
'imgmultipagenext' => 'pagjine sucessive →',
'imgmultigo'       => 'Va!',
'imgmultigoto'     => 'Va ae pagjine $1',

# Table pager
'ascending_abbrev'         => 'asc',
'descending_abbrev'        => 'disc',
'table_pager_next'         => 'Pagjine sucessive',
'table_pager_prev'         => 'Pagjine precedente',
'table_pager_first'        => 'Prime pagjine',
'table_pager_last'         => 'Ultime pagjine',
'table_pager_limit'        => 'Mostre $1 elements in ogni pagjine',
'table_pager_limit_submit' => 'Va',

# Auto-summaries
'autosumm-blank' => 'Pagjine disvuedade fûr par fûr',
'autosumm-new'   => 'Creade la pagjine cun "$1"',

# Live preview
'livepreview-loading' => 'Daûr a cjamâ…',
'livepreview-ready'   => 'Daûr a cjamâ… pront!',

# Watchlist editor
'watchlistedit-numitems'      => 'La liste des pagjinis tignudis di voli e conten {{PLURAL:$1|une pagjine|$1 pagjinis}}, cence contâ lis pagjinis di discussion.',
'watchlistedit-noitems'       => 'La liste des pagjinis tignudis di voli e je vueide.',
'watchlistedit-normal-title'  => 'Modifiche tignûts di voli',
'watchlistedit-normal-submit' => 'Elimine pagjinis',
'watchlistedit-normal-done'   => '{{PLURAL:$1|1 pagjine e je stade eliminade|$1 pagjinis a son stadis eliminadis}} de liste des pagjinis tignudis di voli:',
'watchlistedit-raw-titles'    => 'Pagjinis:',

# Watchlist editing tools
'watchlisttools-view' => 'Cjale i cambiaments rilevants',
'watchlisttools-edit' => 'Cjale e cambie la liste des pagjinis tignudis di voli',
'watchlisttools-raw'  => 'Modifiche la liste des pagjinis tignudis di voli in formât testuâl',

# Core parser functions
'duplicate-defaultsort' => "'''Avîs:''' La clâf predeterminade par l'ordenament \"\$2\" invalide la clâf predeterminade precedente \"\$1\".",

# Special:Version
'version'                  => 'Version',
'version-variables'        => 'Variabilis',
'version-version'          => '(Version $1)',
'version-license'          => 'Licence',
'version-software-version' => 'Version',

# Special:FilePath
'filepath-page' => 'Non dal file:',

# Special:FileDuplicateSearch
'fileduplicatesearch-filename' => 'Non dal file:',
'fileduplicatesearch-submit'   => 'Cîr',

# Special:SpecialPages
'specialpages'                   => 'Pagjinis speciâls',
'specialpages-note'              => '----
* Pagjinis speciâls no riservadis.
* <strong class="mw-specialpagerestricted">Pagjinis speciâls a ciertis categoriis di utents.</strong>',
'specialpages-group-maintenance' => 'Rapuarts di manutenzion',
'specialpages-group-other'       => 'Altris pagjinis speciâls',
'specialpages-group-login'       => 'Jentrade / regjistrazion',
'specialpages-group-changes'     => 'Ultins cambiaments e regjistris',
'specialpages-group-media'       => 'Files multimediâi - cjamadis e rapuarts',
'specialpages-group-users'       => 'Utents e dirits',
'specialpages-group-highuse'     => 'Pagjinis dopradis une vore',
'specialpages-group-pages'       => 'Listis di pagjinis',
'specialpages-group-pagetools'   => 'Imprescj utii pes pagjinis',
'specialpages-group-wiki'        => 'Imprescj e informazions sul progjet',
'specialpages-group-redirects'   => 'Pagjinis speciâls di re-indreçament',
'specialpages-group-spam'        => 'Imprescj pal spam',

# Special:BlankPage
'blankpage' => 'Pagjine vueide',

# External image whitelist
'external_image_whitelist' => ' #Lasse cheste rie cemût che a je<pre>
#Inserìs lis espressions regolârs (dome il toc che al va tal mieç di //) ca sot
#Chestis e saran controladis cun lis URLs des figuris esternis
#A vignaran mostradis dome chês che a corispuindin, di chês altris si viodarà dome un leam
#Lis riis che a scomencin cun # a son consideradis come coments
#Si considerin diviersis lis letaris maiusculis e minusculis

#Met ducj i framents regex parsore di cheste rie. Lasse cheste rie cemût che e je</pre>',

# Special:Tags
'tag-filter'        => 'Filtre par [[Special:Tags|etichetis]]:',
'tag-filter-submit' => 'Filtre',
'tags-edit'         => 'cambie',
'tags-hitcount'     => '$1 {{PLURAL:$1|cambiament|cambiaments}}',

# Database error messages
'dberr-header'   => 'Cheste wiki e à un probleme',
'dberr-problems' => 'Nus displâs, chest sît web al è daûr a vê dificoltâts tecnichis.',
'dberr-again'    => 'Prove a spietâ uns minûts e po torne a cjamâ la pagjine.',
'dberr-info'     => '(No si pues contatâ il servidor de base di dâts: $1)',

# HTML forms
'htmlform-submit'              => 'Invie',
'htmlform-selectorother-other' => 'Altris',

# New logging system
'newuserlog-byemail' => 'peraule clâf mandade par pueste eletroniche',

# API errors
'api-error-unclassified' => 'Al è capitât un erôr no cognossût',

);
