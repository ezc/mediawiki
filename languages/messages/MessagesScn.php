<?php
/** Sicilian (Sicilianu)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Aushulz
 * @author Gmelfi
 * @author Melos
 * @author Omnipaedista
 * @author Santu
 * @author Sarvaturi
 * @author Tonyfroio
 * @author Urhixidur
 * @author לערי ריינהארט
 */

$fallback = 'it';

$namespaceNames = array(
	NS_MEDIA            => 'Mèdia',
	NS_SPECIAL          => 'Spiciali',
	NS_TALK             => 'Discussioni',
	NS_USER             => 'Utenti',
	NS_USER_TALK        => 'Discussioni_utenti',
	NS_PROJECT_TALK     => 'Discussioni_$1',
	NS_FILE             => 'File',
	NS_FILE_TALK        => 'Discussioni_file',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Discussioni_MediaWiki',
	NS_TEMPLATE         => 'Template',
	NS_TEMPLATE_TALK    => 'Discussioni_template',
	NS_HELP             => 'Aiutu',
	NS_HELP_TALK        => 'Discussioni_aiutu',
	NS_CATEGORY         => 'Catigurìa',
	NS_CATEGORY_TALK    => 'Discussioni_catigurìa',
);

$namespaceAliases = array(
	'Discussioni_Utenti' => NS_USER_TALK,
	'Mmàggini' => NS_FILE,
	'Discussioni mmàggini' => NS_FILE_TALK,
	'Discussioni_Template' => NS_TEMPLATE_TALK,
	'Discussioni_Aiutu' => NS_HELP_TALK,
	'Discussioni_Catigurìa' => NS_CATEGORY_TALK,
);

$specialPageAliases = array(
	'Allmessages'               => array( 'Missaggi' ),
	'Allpages'                  => array( 'TuttiLiPàggini' ),
	'Ancientpages'              => array( 'PàgginiMenuNovi' ),
	'Blankpage'                 => array( 'PàgginaVacanti' ),
	'Block'                     => array( 'Blocca' ),
	'Blockme'                   => array( 'BloccaProxy' ),
	'Booksources'               => array( 'RicercaISBN' ),
	'BrokenRedirects'           => array( 'RinnirizzamentiSbagghiati' ),
	'Categories'                => array( 'Catigurìi' ),
	'ChangePassword'            => array( 'RimpostaPassword' ),
	'Confirmemail'              => array( 'CunfermaEmail' ),
	'Contributions'             => array( 'Cuntribbuti', 'CuntribbutiUtenti' ),
	'CreateAccount'             => array( 'CrìatiNuCuntu' ),
	'Deadendpages'              => array( 'PàgginiSenzaNisciuta' ),
	'DeletedContributions'      => array( 'CuntribbutiScancillati' ),
	'Disambiguations'           => array( 'Disambiguazzioni' ),
	'DoubleRedirects'           => array( 'RinnirizzamentiDuppi' ),
	'Emailuser'                 => array( 'MannaEmail' ),
	'Export'                    => array( 'Esporta' ),
	'Fewestrevisions'           => array( 'PàgginiCuCchiùPiccaRivisioni' ),
	'Import'                    => array( 'Mporta' ),
	'BlockList'                 => array( 'IPBluccati' ),
	'LinkSearch'                => array( 'CercaCullicamenti' ),
	'Listadmins'                => array( 'Amministratura' ),
	'Listbots'                  => array( 'ListaBot' ),
	'Listfiles'                 => array( 'Mmàggini' ),
	'Listgrouprights'           => array( 'AlencuPirmessiGruppi' ),
	'Listredirects'             => array( 'Rinnirizzamenti', 'ListaRinnirizzamenti' ),
	'Listusers'                 => array( 'Utilizzatura', 'ListaUtilizzatura' ),
	'Lockdb'                    => array( 'BloccaDB', 'BloccaDatabase' ),
	'Log'                       => array( 'Riggistri', 'Riggistru' ),
	'Lonelypages'               => array( 'PàgginiOrfani' ),
	'Longpages'                 => array( 'PàgginiCchiùLonghi' ),
	'MergeHistory'              => array( 'UnìficaCrunuluggìa' ),
	'MIMEsearch'                => array( 'RicercaMIME' ),
	'Mostcategories'            => array( 'PàgginiCuCchiossaiCatigurìi' ),
	'Mostimages'                => array( 'MmàgginiCchiùRichiamati' ),
	'Mostlinked'                => array( 'PàgginiCchiùRichiamati' ),
	'Mostlinkedcategories'      => array( 'CatigurìiCchiùRichiamati' ),
	'Mostlinkedtemplates'       => array( 'TemplateCchiùRichiamati' ),
	'Mostrevisions'             => array( 'PàgginiCuCchiossaiRivisioni' ),
	'Movepage'                  => array( 'Sposta', 'Rinòmina' ),
	'Mycontributions'           => array( 'CuntribbutiMei' ),
	'Mypage'                    => array( 'MèPàgginaUtenti' ),
	'Mytalk'                    => array( 'DiscussioniMei' ),
	'Newimages'                 => array( 'MmàgginiRicenti' ),
	'Newpages'                  => array( 'PàgginiCchiùNovi' ),
	'Popularpages'              => array( 'PàgginiCchiùVisitati' ),
	'Preferences'               => array( 'Prifirenzi' ),
	'Prefixindex'               => array( 'Prifissi' ),
	'Protectedpages'            => array( 'PàgginiPrutiggiuti' ),
	'Protectedtitles'           => array( 'TìtuliPrutiggiuti' ),
	'Randompage'                => array( 'PàgginaAmmuzzu' ),
	'Randomredirect'            => array( 'RedirectAmmuzzu' ),
	'Recentchanges'             => array( 'ÙrtimiCanciamenti' ),
	'Recentchangeslinked'       => array( 'CanciamentiCurrilati' ),
	'Revisiondelete'            => array( 'ScancellaRivisioni' ),
	'Search'                    => array( 'Ricerca', 'Cerca' ),
	'Shortpages'                => array( 'PàgginiCchiùCurti' ),
	'Specialpages'              => array( 'PàgginiSpiciali' ),
	'Statistics'                => array( 'Statìstichi' ),
	'Uncategorizedcategories'   => array( 'CatigurìiSenzaCatigurìi' ),
	'Uncategorizedimages'       => array( 'MmàgginiSenzaCatigurìi' ),
	'Uncategorizedpages'        => array( 'PàgginiSenzaCatigurìi' ),
	'Uncategorizedtemplates'    => array( 'TemplateSenzaCatigurìi' ),
	'Undelete'                  => array( 'Riprìstina' ),
	'Unlockdb'                  => array( 'SbloccaDB', 'SbloccaDatabase' ),
	'Unusedcategories'          => array( 'CatigurìiNonUsati' ),
	'Unusedimages'              => array( 'MmàgginiNonUsati' ),
	'Unusedtemplates'           => array( 'TemplateNunUsati' ),
	'Unwatchedpages'            => array( 'PàgginiNunTaliati' ),
	'Upload'                    => array( 'Càrrica' ),
	'Userlogin'                 => array( 'Tràsi', 'Login' ),
	'Userlogout'                => array( 'Nesci', 'Logout' ),
	'Userrights'                => array( 'PirmessiUtenti' ),
	'Version'                   => array( 'Virsioni' ),
	'Wantedcategories'          => array( 'CatigurìiAddumannati' ),
	'Wantedfiles'               => array( 'FileAddumannati' ),
	'Wantedpages'               => array( 'PàgginiAddumannati' ),
	'Wantedtemplates'           => array( 'TemplateAddumannati' ),
	'Watchlist'                 => array( 'ArtìculiTaliati' ),
	'Whatlinkshere'             => array( 'ChiPuntaCcà' ),
	'Withoutinterwiki'          => array( 'SenzaInterwiki' ),
);

$messages = array(
# User preference toggles
'tog-underline'               => 'Suttalìnia li culligamenti:',
'tog-highlightbroken'         => 'Furmatta <a href="" class="new">accussì</a> (o accussì<a href="" class="internal">?</a>) li culligamenti ca pùntanu a artìculi ancora a scrìviri.',
'tog-justify'                 => 'Alliniamentu dû paràgrafu: giustificatu',
'tog-hideminor'               => "Ammuccia li canciamenti nichi nta l'ùrtimi canciamenti",
'tog-hidepatrolled'           => "Ammuccia li mudìfichi fatti ntâ l'ùrtimi canciamenti",
'tog-newpageshidepatrolled'   => "Ammuccia li pàggini virificati di l'alencu dî pàgging cchiù novi",
'tog-extendwatchlist'         => "Attiva tutti li funzioni avanzati pi l'ossirvati spiciali, nun sulu l'ultima",
'tog-usenewrc'                => 'Utilizza Ùrtimi canciamenti avanzati (richiedi JavaScript)',
'tog-numberheadings'          => 'Nummirazzioni automàtica dî tìtuli di paràgrafu',
'tog-showtoolbar'             => 'Ammustra la barra dî strumenta pi lu canciamentu',
'tog-editondblclick'          => "Duppiu click pi canciari l'artìculu (richiedi Javascript)",
'tog-editsection'             => 'Abbìlita lu canciamentu dî sezzioni tràmiti lu culligamentu [cancia]',
'tog-editsectiononrightclick' => 'Abbìlita lu canciamentu dî sezzioni tràmiti duppiu click supra lu tìtulu dâ sezzioni (richiedi Javascript)',
'tog-showtoc'                 => "Ammustra l'ìndici (pi artìculi cu cchiù di 3 sezzioni)",
'tog-rememberpassword'        => 'Arricorda la password supra stu navigaturi (pi ô massimu $1 {{PLURAL:$1|jornu|jorna}})',
'tog-watchcreations'          => "Agghiunci li pàggini criati a l'ossirvati spiciali",
'tog-watchdefault'            => "Agghiunci li pàggini canciati a l'ossirvati spiciali",
'tog-watchmoves'              => "Agghiunci li pàggini spustati a l'ossirvati spiciali",
'tog-watchdeletion'           => "Agghiunci li pàggini di mìa cancillati a l'ossirvati spiciali",
'tog-minordefault'            => 'Ìndica ogni canciamentu comu nicu (sulu comu pridifinitu)',
'tog-previewontop'            => "Ammustra l'antiprima prima dâ casella di canciamentu e nun doppu",
'tog-previewonfirst'          => "Ammustra l'antiprima supra lu primu canciamentu",
'tog-nocache'                 => 'Disabbìlita la cache dî pàggini dû navigaturi',
'tog-enotifwatchlistpages'    => 'Mànnami na e-mail siddu la pàggina subbisci canciamenti',
'tog-enotifusertalkpages'     => 'Mànnimi nu missaggiu email quannu la mè pàggina di discussioni è canciata',
'tog-enotifminoredits'        => 'Mànnami na e-mail macari pi li canciamenti nichi di sta pàggina',
'tog-enotifrevealaddr'        => 'Rivela lu mè ndirizzu e-mail ntê mail di nutificazzioni',
'tog-shownumberswatching'     => 'Ammustra lu nùmmiru di utenti ca sèquinu la pàggina',
'tog-oldsig'                  => 'Firma attuali:',
'tog-fancysig'                => 'Interpitra li cumanna wiki nâ firma (senza liami automaticu)',
'tog-externaleditor'          => 'Usa di default nu editor esternu (sulu pi li esperti, abbisognanu mpustazzioni particulari pô tò computer. [//www.mediawiki.org/wiki/Manual:External_editors More information.])',
'tog-externaldiff'            => 'Usa di default un prugramma di diff sternu',
'tog-showjumplinks'           => "Attiva li culligamenti accissìbbili 'và a'",
'tog-uselivepreview'          => "Attiva la funzioni ''Live preview'' (richiedi JavaScript; spirimintali)",
'tog-forceeditsummary'        => "Chiedi cunferma siddu l'uggettu dû canciamentu è vacanti",
'tog-watchlisthideown'        => "Ammuccia li mè canciamenti nta l'ossirvati spiciali",
'tog-watchlisthidebots'       => "Ammuccia li canciamenti dî bot nta l'ossirvati spiciali",
'tog-watchlisthideminor'      => "Ammuccia li canciamenti nichi nta l'ossirvati spiciali",
'tog-watchlisthideliu'        => "Ammuccia li canciamenti di l'utilizzatura riggistrati nti l'ussirvati spiciali",
'tog-watchlisthideanons'      => "Ammuccia li canciamenti di l'utilizzatura anònimi nti l'ussirvati spiciali",
'tog-watchlisthidepatrolled'  => "Ammuccia li mudìfichi virificati nta l'ussirvati spiciali",
'tog-nolangconversion'        => 'Disattiva la cunvirsioni tra varianti linguìstichi',
'tog-ccmeonemails'            => "Mànnami na copia dî missaggi spiditi a l'àutri utenti",
'tog-diffonly'                => "Nun visualizzari lu cuntinutu dâ pàggina quannu s'esequi na ''diff'' tra dui virsioni",
'tog-showhiddencats'          => 'Ammustra li catigurìi ammucciati.',
'tog-norollbackdiff'          => "Umettiri li ''diff'' doppu aviri fattu nu ''rollback''",

'underline-always'  => 'sempri',
'underline-never'   => 'mai',
'underline-default' => 'manteni li mpustazzioni dû browser',

# Font style option in Special:Preferences
'editfont-style'     => 'Stili da casedda di canciamentu:',
'editfont-default'   => 'Pridifinitu dô Browser',
'editfont-monospace' => 'Font monospaziu',
'editfont-sansserif' => 'Font sans-serif',
'editfont-serif'     => 'Font serif',

# Dates
'sunday'        => 'Duminicadìa',
'monday'        => 'Lunidìa',
'tuesday'       => 'Martidìa',
'wednesday'     => 'Mercuridìa',
'thursday'      => 'Jovidìa',
'friday'        => 'Venniridìa',
'saturday'      => 'Sabbatudìa',
'sun'           => 'dum',
'mon'           => 'lun',
'tue'           => 'mar',
'wed'           => 'mer',
'thu'           => 'jov',
'fri'           => 'vènn',
'sat'           => 'sabb',
'january'       => 'jinnaru',
'february'      => 'Frivaru',
'march'         => 'Marzu',
'april'         => 'Aprili',
'may_long'      => 'Maiu',
'june'          => 'Giugnu',
'july'          => 'Giugnettu',
'august'        => 'Austu',
'september'     => 'Sittèmmiru',
'october'       => 'Uttùviru',
'november'      => 'Nuvèmmiru',
'december'      => 'Dicèmmiru',
'january-gen'   => 'jinnaru',
'february-gen'  => 'frivaru',
'march-gen'     => 'marzu',
'april-gen'     => 'Aprili',
'may-gen'       => 'Maiu',
'june-gen'      => 'giugnu',
'july-gen'      => 'giugnettu',
'august-gen'    => 'Austu',
'september-gen' => 'sittèmmiru',
'october-gen'   => 'uttùviru',
'november-gen'  => 'nuvèmmiru',
'december-gen'  => 'Dicèmmiru',
'jan'           => 'jin',
'feb'           => 'Friv',
'mar'           => 'mar',
'apr'           => 'apr',
'may'           => 'Maiu',
'jun'           => 'giu',
'jul'           => 'giugn',
'aug'           => 'Au',
'sep'           => 'Sitt',
'oct'           => 'utt',
'nov'           => 'nuv',
'dec'           => 'Dic',

# Categories related messages
'pagecategories'                 => '{{PLURAL:$1|Catigurìa|Catigurìi}}',
'category_header'                => 'Artìculi ntâ catigurìa "$1"',
'subcategories'                  => 'Suttacatigurìi',
'category-media-header'          => 'File multimidiali ntâ catigurìa "$1"',
'category-empty'                 => "''Sta catigurìa attuarmenti nun havi artìculi o \"media\".''",
'hidden-categories'              => '{{PLURAL:$1|Catigurìa ammucciata|Catigurìi ammuciati}}',
'hidden-category-category'       => 'Catigurìi ammucciati',
'category-subcat-count'          => '{{PLURAL:$2|Sta catigurìa cunteni na sula suttacatigurìa, nnicata ccà sutta.|Sta catigurìa cunteni {{PLURAL:$1|la suttacatigurìa|li $1 suttacatigurìi nnicati}} ccà sutta, sùpira nu tutali di $2.}}',
'category-subcat-count-limited'  => 'Sta catigurìa cunteni {{PLURAL:$1|na suttacatigurìa, nnicata|$1 suttacatigurìi, nnicati}} ccà sutta.',
'category-article-count'         => '{{PLURAL:$2|Sta catigurìa cunteni na pàggina sula, nnicata ccà sutta.|Sta catigurìa cunteni {{PLURAL:$1|la pàggina nnicata|li $1 pàggini nnicati}} di sècutu, supra nu tutali di $2.}}',
'category-article-count-limited' => 'Stâ catiguria cunteni {{PLURAL:$1|la pàggina ndicata|li $1 pàggini ndicati}} ccà sutta.',
'category-file-count'            => '{{PLURAL:$2|Sta catigurìa cunteni nu sulu file, ndicatu ccà sutta.|Sta catigurìa cunteni {{PLURAL:$1|nu file, ndicatu|$1 file, ndicati}} ccà sutta, su nu totali di $2.}}',
'category-file-count-limited'    => 'Sta catigurìa cunteni {{PLURAL:$1|lu file ndicatu|li $1 file ndicati}} ccà sutta.',
'listingcontinuesabbrev'         => ' cunt.',
'index-category'                 => 'Pàggini nnicizzati',
'noindex-category'               => 'Pàggini nun nnicizzati',
'broken-file-category'           => 'Pàggini ca nclùdunu file inesistenti',

'about'         => 'pàggina',
'article'       => 'artìculu',
'newwindow'     => '(grapi na finestra nova)',
'cancel'        => 'annulla',
'moredotdotdot' => 'Àutru...',
'mypage'        => 'La mè pàggina',
'mytalk'        => 'la mè pàggina di discussioni',
'anontalk'      => 'Discussione pi stu IP',
'navigation'    => 'Navigazzioni',
'and'           => '&#32;e',

# Cologne Blue skin
'qbfind'         => 'Attrova',
'qbbrowse'       => 'Sfogghia',
'qbedit'         => 'Cancia',
'qbpageoptions'  => 'Opzioni pàggina',
'qbpageinfo'     => 'Nfurmazzioni supra la pàggina',
'qbmyoptions'    => 'Li mè pàggini',
'qbspecialpages' => 'Pàggini spiciali',
'faq'            => 'Dumanni cumuni',
'faqpage'        => 'Project:Dumanni comuni',

# Vector skin
'vector-action-addsection'       => 'Agghiunci argumentu',
'vector-action-delete'           => 'Elìmina',
'vector-action-move'             => 'Sposta',
'vector-action-protect'          => 'Pruteggi',
'vector-action-undelete'         => 'Riprìstina',
'vector-action-unprotect'        => 'Cancia la prutizzioni',
'vector-simplesearch-preference' => 'Abbilita li suggirimenti pâ ricerca avanzata',
'vector-view-create'             => 'Crea',
'vector-view-edit'               => 'Cancia',
'vector-view-history'            => 'Talìa a storia',
'vector-view-view'               => 'Leggi',
'vector-view-viewsource'         => 'Talìa la fonti',
'actions'                        => 'Azzioni',
'namespaces'                     => 'Namespace',
'variants'                       => 'Varianti',

'errorpagetitle'    => 'Erruri',
'returnto'          => 'Ritorna a $1.',
'tagline'           => 'Di {{SITENAME}}',
'help'              => 'Aiutu',
'search'            => 'Trova',
'searchbutton'      => "Va' cerca",
'go'                => 'Trova',
'searcharticle'     => 'Vai',
'history'           => 'cronuluggìa',
'history_short'     => 'storia',
'updatedmarker'     => 'canciata dâ mè ùrtima vìsita',
'printableversion'  => 'Virsioni stampàbbili',
'permalink'         => 'Liami pirmanenti',
'print'             => 'Stampa',
'view'              => 'Talìa',
'edit'              => 'cancia',
'create'            => 'Crea',
'editthispage'      => 'Cancia sta pàggina',
'create-this-page'  => 'Crea sta pàggina',
'delete'            => 'elìmina',
'deletethispage'    => 'Elìmina sta pàggina',
'undelete_short'    => 'Ricùpira {{PLURAL:$1|na rivisioni|$1 rivisioni}}',
'protect'           => 'Pruteggi',
'protect_change'    => 'cancia',
'protectthispage'   => 'Pruteggi sta pàggina',
'unprotect'         => 'Cancia la prutizzioni',
'unprotectthispage' => 'Cancia la prutizzioni a sta pàggina',
'newpage'           => 'pàggina nova',
'talkpage'          => 'Pàggina di discussioni',
'talkpagelinktext'  => 'Discussioni',
'specialpage'       => 'Pàggina spiciali',
'personaltools'     => 'Strumenta pirsunali',
'postcomment'       => 'Nova sizzioni',
'articlepage'       => 'artìculu',
'talk'              => 'discussioni',
'views'             => 'Vìsiti',
'toolbox'           => 'Strummenta',
'userpage'          => 'Visualizza la pàggina utenti',
'projectpage'       => 'Visualizza la pàggina di sirvizziu',
'imagepage'         => 'Visualizza la pàggina dô file',
'mediawikipage'     => 'Visualizza lu missaggiu',
'templatepage'      => 'Visualizza lu template',
'viewhelppage'      => "Visualizza la pàggina d'aiutu",
'categorypage'      => 'Visualizza la catigurìa',
'viewtalkpage'      => 'Vidi discussioni',
'otherlanguages'    => 'Àutri lingui',
'redirectedfrom'    => '(Rinnirizzata di $1)',
'redirectpagesub'   => 'Pàggina di rinnirizzamentu',
'lastmodifiedat'    => 'Sta pàggina fu canciata a $2 di lu $1.',
'viewcount'         => 'Sta pàggina hà statu liggiuta {{PLURAL:$1|una vota|$1 voti}}.',
'protectedpage'     => 'Pàggina bluccata',
'jumpto'            => "Va' a:",
'jumptonavigation'  => 'navigazzioni',
'jumptosearch'      => "Va' cerca",
'view-pool-error'   => "Ci spiaci, li server ni stu mumentu sunu troppu carichi. Troppi utenti stannu circannu di taliari sta pàggina. Aspetta n'anticchia prima di pruvari a ritaliari sta pàggina.

$1",
'pool-timeout'      => 'Tempu scadutu aspittannu lu sbloccu',
'pool-queuefull'    => 'La cuda dû pool è china',
'pool-errorunknown' => 'Erruri scanusciutu',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'            => 'Àutri nfurmazzioni supra {{SITENAME}}',
'aboutpage'            => 'Project:Àutri nformazzioni',
'copyright'            => 'Lu cuntinutu è utilizzàbbili secunnu la $1.',
'copyrightpage'        => '{{ns:project}}:Copyright',
'currentevents'        => 'Nutizzî',
'currentevents-url'    => 'Project:Nutizzî',
'disclaimers'          => 'Avvirtenzi',
'disclaimerpage'       => 'Project:Avvirtenzi ginirali',
'edithelp'             => 'Guida',
'edithelppage'         => 'Help:Canciamentu',
'helppage'             => 'Help:Cuntinuti',
'mainpage'             => 'Pàggina principali',
'mainpage-description' => 'Pàggina principali',
'policy-url'           => 'Project:Policy',
'portal'               => 'Porta dâ cumunitati',
'portal-url'           => 'Project:Porta dâ cumunitati',
'privacy'              => 'Pulìtica supra la privacy',
'privacypage'          => 'Project:Pulìtica rilativa â privacy',

'badaccess'        => 'Pirmessi nun sufficienti',
'badaccess-group0' => "Nun hai li pirmessi nicissari p'esèquiri l'azzioni addumannata.",
'badaccess-groups' => "La funzioni addumannata è risirvata a l'utenti ca appartèninu {{PLURAL:$2|ô gruppu|a unu dî gruppi siquenti}}: $1.",

'versionrequired'     => 'È nicissaria la virsioni $1 dû software MediaWiki',
'versionrequiredtext' => "P'usari sta pàggina ci voli la virsioni $1 dû software MediaWiki. Talìa [[Special:Version|sta pàggina]]",

'ok'                      => 'OK',
'retrievedfrom'           => 'Estrattu di "$1"',
'youhavenewmessages'      => 'Ricivìsti $1 ($2).',
'newmessageslink'         => 'missaggi novi',
'newmessagesdifflink'     => 'ùrtimi canciamenti',
'youhavenewmessagesmulti' => 'Hai missaggi novi supra $1',
'editsection'             => 'cancia',
'editold'                 => 'cancia',
'viewsourceold'           => 'talìa la fonti',
'editlink'                => 'cancia',
'viewsourcelink'          => 'Talìa la funti',
'editsectionhint'         => 'Cancia la sezzioni $1',
'toc'                     => 'Ìndici',
'showtoc'                 => 'ammustra',
'hidetoc'                 => 'ammuccia',
'collapsible-collapse'    => 'Cumprimi',
'collapsible-expand'      => 'Spanni',
'thisisdeleted'           => 'Vidi e/o riprìstina $1?',
'viewdeleted'             => 'Vidi $1?',
'restorelink'             => '{{PLURAL:$1|nu canciamentu annullatu|$1 canciamenti annullati}}',
'feedlinks'               => 'Feed:',
'feed-invalid'            => 'Mudalitati di suttascrizzioni dû feed nun vàlida.',
'feed-unavailable'        => 'Nun sunnu dispunìbbili li feed',
'site-rss-feed'           => 'Feed RSS di $1',
'site-atom-feed'          => 'Feed Atom di $1',
'page-rss-feed'           => 'Feed RSS pi "$1"',
'page-atom-feed'          => 'Feed Atom pi "$1"',
'red-link-title'          => '$1 (ancora nun scrivutu)',
'sort-descending'         => 'Urdinamenti dicriscenti',
'sort-ascending'          => 'Urdinamenti criscenti',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main'      => 'artìculu',
'nstab-user'      => "Pàggina d'utenti",
'nstab-media'     => 'File multimidiali',
'nstab-special'   => 'Spiciali',
'nstab-project'   => 'pàggina',
'nstab-image'     => 'mmàggini',
'nstab-mediawiki' => 'missagiu',
'nstab-template'  => 'template',
'nstab-help'      => 'aiutu',
'nstab-category'  => 'Catigurìa',

# Main script and global functions
'nosuchaction'      => 'Opirazzioni nun ricanusciuta',
'nosuchactiontext'  => "L'azzioni spicificata nâ URL nun è vailida.
Poi aviri sbagghiatu a digitari â URL, o cliccatu supra nu link sbagghiatu.
Chistu putissi ndicari nu bug nô software usatu da {{SITENAME}}.",
'nosuchspecialpage' => 'Sta pàggina spiciali nun è dispunìbbili',
'nospecialpagetext' => "<strong>Hai cercatu na pàggina spiciali nun vàlida.</strong>

L'alencu dî pàggini spiciali vàlidi s'attrova 'n [[Special:SpecialPages|Alencu dî pàggini spiciali]].",

# General errors
'error'                => 'Erruri',
'databaseerror'        => 'Erruri dû database',
'dberrortext'          => 'Erruri di sintassi ntâ richiesta nultrata a lu databbasi.
Chistu putissi innicari la prisenza d\'un bug ntô software.
L\'ùrtima query mannata a lu database fu:
<blockquote><tt>$1</tt></blockquote>
richiamata dâ funzioni "<tt>$2</tt>".
Lu databbasi desi l\'erruri "<tt>$3: $4</tt>".',
'dberrortextcl'        => 'Erruri di sintassi ntâ richiesta nultrata a lu database.
L\'ùrtima query mannata a lu database hà stata:
"$1"
richiamata dâ funzioni "$2".
MySQL hà ristituitu lu siquenti erruri "$3: $4".',
'laggedslavemode'      => "Accura: La pàggina putissi nun ripurtari l'aggiurnamenti cchiù ricenti.",
'readonly'             => 'Database bluccatu',
'enterlockreason'      => "Ìnnica lu mutivu dû bloccu, spicificannu lu mumentu 'n cui è prisumìbbili ca veni rimossu.",
'readonlytext'         => "Nta stu mumentu lu database è bluccatu e nun sunnu pussìbbili junti o canciamenti a li pàggini. Lu bloccu è di sòlitu lijatu a upirazzioni di manutinzioni urdinària, a lu tèrmini di lu quali lu database è di novu accissìbbili. L'amministraturi di sistema ca fici lu bloccu desi sta spiecazzioni: $1",
'missing-article'      => 'Lu database nun attruvau lu testu di na pàggina c\'avìa attruvari sutta lu nomu di "$1" $2.

Chistu di sòlitu avveni quannu s\'arrichiama, a partiri di la crunuluggìa o di lu cunfruntu tra rivisioni, nu cullicamentu a na pàggina scancillata, a nu cunfrontu tra rivisioni ca nun asìstunu o a nu cunfrontu tra rivisioni pulizziati di la crunuluggìa.

Nta lu casu ca non fussi accuddì, è fàcili ca si scuprìu nu sbagghiu di lu software MediaWiki.
V\'arringrazziamu si signaliati zoccu succidìu a nu [[Special:ListUsers/sysop|amministraturi]] spicificannu la URL \'n chistioni.',
'missingarticle-rev'   => '(rivisioni#: $1)',
'missingarticle-diff'  => '(Diff: $1, $2)',
'readonly_lag'         => 'Lu database hà statu bluccatu automaticamenti, mentri li server cu li database slave si sincrunìzzanu cu lu master',
'internalerror'        => 'Erruri nternu',
'internalerror_info'   => 'Erruri nternu: $1',
'fileappenderrorread'  => 'Nu fu pussìbbili di lèggiri "$1" nta mentri lu juncìa.',
'fileappenderror'      => 'Nun è possibi junciri "$1" a "$2".',
'filecopyerror'        => 'Mpussìbbili cupiari lu file "$1" n "$2".',
'filerenameerror'      => 'Mpussìbbili rinuminari lu file "$1" \'n "$2".',
'filedeleteerror'      => 'Mpussìbbili cancillari lu file "$1".',
'directorycreateerror' => 'Mpussìbbili criari la directory "$1".',
'filenotfound'         => 'File "$1" nun attruvatu.',
'fileexistserror'      => 'Mpussìbbili scrìviri lu file "$1": lu file esisti già',
'unexpected'           => 'Valuri mpruvistu: "$1"="$2".',
'formerror'            => 'Erruri: mpussìbbili mannari lu mòdulu',
'badarticleerror'      => 'Opirazzioni nun cunzintita pi sta pàggina.',
'cannotdelete'         => 'Mpussìbbili cancillari la pàggina o lu file "$1" addumannatu. Putissi siri già cancillatu di quarcun\'àutru.',
'cannotdelete-title'   => 'Mpussibbili eliminari la pàggina "$1"',
'badtitle'             => 'Tìtulu nun currettu',
'badtitletext'         => "Lu tìtulu dâ pàggina addumannata è vacanti, erratu o cu caràttiri nun ammessi oppuru diriva di n'erruri ntê culligamenti tra siti wiki diversi o virsioni n lingui diversi dû stissu situ.",
'perfcached'           => "'''Nota:''' li dati ca sèquinu sunnu stratti di na copia ''cache'' dû database, nun aggiurnati n tempu riali.",
'perfcachedts'         => 'Li dati ccà sutta foru attruvati e sunnu aggiurnati ô $1.',
'querypage-no-updates' => "L'aggiurnamenti dâ pàggina sunnu timpuraniamenti suspisi. Li dati 'n chidda cuntinuti nun vèninu aggiurnati.",
'wrong_wfQuery_params' => 'Paràmitri errati pi wfQuery()<br />
Funzioni: $1<br />
Query: $2',
'viewsource'           => 'Talìa la fonti',
'viewsource-title'     => 'Visualizza la surgenti di $1',
'actionthrottled'      => 'Azzioni ritardata',
'actionthrottledtext'  => "Comu misura di sicurezza contru lu spam, l'esecuzioni di alcuni azzionu è limitata a nu nùmmuru massimu di voti ni nu determinatu piriudu du tempu, limiti ca ni stu casu fu supiratu. Si prega di ripruvari tra qualchi minutu.",
'protectedpagetext'    => 'Sta pàggina fu bluccata pi privèniri li canciamenti.',
'viewsourcetext'       => 'È pussìbbili visualizzari e cupiari lu còdici surgenti di sta pàggina:',
'protectedinterface'   => "Sta pàggina cunteni un elementu ca fà parti dâ nterfaccia utenti dû software; è quinni prutetta p'evitari pussìbbili abbusi.",
'editinginterface'     => "'''Accura:''' Lu testu di sta pàggina fà parti dî interfaccia utenti dû situ. Tutti li canciamenti appurtati a sta pàggina si riflèttinu supra li missaggi visualizzati pi tutti l'utenti. Pi li traduzioni, cunsidira â pussibilità di usari [//translatewiki.net/wiki/Main_Page?setlang=scn translatewiki.net], u prugettu di localizzazioni MediaWiki.",
'sqlhidden'            => '(la query SQL hà statu ammucciata)',
'cascadeprotected'     => 'Supra sta pàggina nun è pussìbbili effittuari canciamenti pirchì veni nclusa nt{{PLURAL:$1|â pàggina siquenti, ca fu prutetta|ê pàggini siquenti, ca foru prutetti}} silizziunannu la prutizzioni "ricursiva":
$2',
'namespaceprotected'   => "Nun hai lu pirmissu pi canciari li pàggini ntô namespace '''$1'''.",
'ns-specialprotected'  => 'Li pàggini ntô namespace {{ns:special}} non ponnu èssiri canciati.',
'titleprotected'       => "La criazzioni di sta pàggina cu stu tìtulu fu bluccata da [[User:$1|$1]].
La mutivazzioni è chista: ''$2''.",

# Virus scanner
'virus-badscanner'     => "Sbagghiu di cunfigurazzioni: antivirus scanusciutu: ''$1''",
'virus-scanfailed'     => 'scanzioni nun arrinisciuta (còdici $1)',
'virus-unknownscanner' => 'antivirus scanusciutu:',

# Login and logout pages
'logouttext'                 => "'''Nisciuta. Ora siti fora.'''

Poi cuntinuari a usari {{SITENAME}} di manera anònima, o poi [[Special:UserLogin|tràsiri n'àutra vota]] cu lu stissu o cu n'àutru nomu d'utenti.
Accura chi quarchi pàggina pò cuntinuari a èssiri ammustrata comu si nun avissi nisciutu nzinu a quannu tu nun scancelli tutta la mimoria dû tò browser.",
'welcomecreation'            => "== Bonvinutu, $1! ==

L'account hà statu criatu currettamenti. Nun ti scurdari di pirsunalizzari li [[Special:Preferences|prifirenzi di {{SITENAME}}]].",
'yourname'                   => "Lu tò nomu d'utenti (''user name'')",
'yourpassword'               => "La tò ''password''",
'yourpasswordagain'          => "Scrivi la password n'àutra vota",
'remembermypassword'         => "Ricòrdami la mè ''password'' duranti li sissioni (for a maximum of $1 {{PLURAL:$1|day|days}})",
'yourdomainname'             => 'Lu tò dominiu',
'externaldberror'            => "S'havi virificatu n'erruri cû server d'autinticazzioni sternu, oppuru nun si disponi di l'auturizzazzioni nicissari p'aggiurnari lu propiu accessu sternu.",
'login'                      => 'Trasi',
'nav-login-createaccount'    => 'Riggìstrati o trasi',
'loginprompt'                => "Tu hai a abbilitari li ''cookies'' pi tràsiri ntâ {{SITENAME}}.",
'userlogin'                  => 'Riggìstrati o trasi',
'userloginnocreate'          => 'Trasi',
'logout'                     => 'Nesci',
'userlogout'                 => 'Nesci',
'notloggedin'                => "Nun v'aviti riggistratu",
'nologin'                    => "Nun nn'aviti nu cuntu pi ccà? '''$1'''.",
'nologinlink'                => 'Criati nu cuntu sùbbitu',
'createaccount'              => 'Criati un cuntu novu',
'gotaccount'                 => "Hai già nu cuntu? '''$1'''.",
'gotaccountlink'             => 'Trasi',
'createaccountmail'          => 'via e-mail',
'createaccountreason'        => 'Mutivu:',
'badretype'                  => "La ''password'' chi mittisti nun è bona.",
'userexists'                 => 'Lu nomu utenti nzeritu è già usatu. Ti prijamu pirciò di vuliri scègghiri nu nomu utenti diversu.',
'loginerror'                 => "Erruri nta l'accessu",
'createaccounterror'         => "Mpussibbili di criari l'account $1",
'nocookiesnew'               => 'Lu nomu utenti pi tràsiri fu criatu, ma nun hai effittuatu lu log in. {{SITENAME}} usa li cookies pi gistiri li log in. Lu tò browser havi li cookies disabbilitati. Abbìlita li cookies, appoi effèttua lu login cu li tò username e password novi.',
'nocookieslogin'             => '{{SITENAME}} usa li cookies pi gistiri lu log in. Lu tò browser havi li cookies disabbilitati. Abbìlita li cookies, appoi effèttua lu login cu li tò username e password.',
'noname'                     => 'Lu nomu utenti innicatu nun è vàlidu, nun è pussìbbili criari un account a stu nomu.',
'loginsuccesstitle'          => 'Trasuta rinisciuta',
'loginsuccess'               => "'''Ora trasisti nta {{SITENAME}} comu \"\$1\".'''",
'nosuchuser'                 => 'Nun è riggistratu nuddu utenti di nomu "$1".
Li nnomi utenti sunu sinsitivi ê maiusculi.
Virificari lu nomu nziritu o [[Special:UserLogin/signup|criari un novu accessu]].',
'nosuchusershort'            => 'Nun c\'è nuddu utenti di nomu "$1". Cuntrolla l\'ortugrafìa.',
'nouserspecified'            => 'È nicissariu spicificari un nomu utenti.',
'login-userblocked'          => "St'utilizzaturi è bluccatu. Nun è pussibbili di tràsiri",
'wrongpassword'              => "La ''password'' chi mittisti nun è giusta. Prova n'àutra vota.",
'wrongpasswordempty'         => 'Nun hà statu nzirita arcuna password. Ripruvari.',
'passwordtooshort'           => 'La tò password è troppu curta. Havi a cuntèniri armenu {{PLURAL:$1|1 caràttiri|$1 caràttiri}}.',
'password-name-match'        => 'La tou password havi a essiri diversa dô tou nnomu utenti.',
'mailmypassword'             => "Mànnimi n'àutra password",
'passwordremindertitle'      => 'Sirvizziu Password Reminder di {{SITENAME}}',
'passwordremindertext'       => 'Quarchidunu (prubbabbirmenti tu, cu nnirizzu IP $1) addumannau d\'aviri mannata na password d\'accessu nova a {{SITENAME}} ($4). La password pi l\'utenti "$2" vinni mpustata a "$3".
Ti cummeni fari n\'accessu quantu prima e canciari la password pi sùbbitu. La tò password timpuranea scadrà dopu {{PLURAL:$5|nu jornu|$5 jorna}}.
Siddu nun fusti tu a fari la dumanna, oppuru arrittruvasti la password e nun addisìi cchiù canciàrila, poi non tèniri cuntu di stu missaggiu e cuntinuari a usari la password vecchia.',
'noemail'                    => 'Nuddu ndirizzu e-mail riggistratu pi l\'utenti "$1".',
'noemailcreate'              => 'Aviti a dari nu nnirizzu e-mail validu',
'passwordsent'               => 'Na password nova hà statu mannata a lu ndirizzu e-mail riggistratu pi l\'utenti "$1". Pi favuri, effèttua un accessu nun appena l\'arricevi.',
'blocked-mailpassword'       => 'Pi privèniri abbusi, nun è cunzititu usari la funzioni "Nvia nova password" d\'un ndirizzu IP bluccatu.',
'eauthentsent'               => "Un missaggiu e-mail di cunferma hà statu spiditu a lu ndirizzu ndicatu. Pi abbilitari la mannata di missaggi e-mail pi st'accessu è nicissariu sèquiri li istruzzioni ca vi sunnu ndicati, 'n modu di cunfirmari ca s'è li liggìttimi prupitari di lu ndirizzu",
'throttled-mailpassword'     => 'Na password nova hà già statu mannata di menu di {{PLURAL:$1|1 ura|$1 uri}}. Pi privèniri abbusi, la funzioni "Manna password nova" pò èssiri usata sulu una vota ogni {{PLURAL:$1|1 ura|$1 uri}}.',
'mailerror'                  => 'Erruri nta lu mannu dû missaggiu: $1',
'acct_creation_throttle_hit' => "L'utenti di sta wiki ca utilizzanu stu ndirizzu IP hanu criatu {{PLURAL:$1|1 account|$1 account}} ni l'ultimu iornu, lu massimu pirmessu ni stu piriudu di tempu.
Pirciò, li utenti ca usunu stu ndirizzu IP nun ponu pi lu mumentu criari novi account.",
'emailauthenticated'         => 'Lu nnirizzu e-mail fu cunfirmatu lu $2 ê $3.',
'emailnotauthenticated'      => 'Lu tò ndrizzu imeil nun hà statu ancora autinticatu. Nun vannu a èssiri mannati missaggi imeil pi sti funzioni.',
'noemailprefs'               => "Innicari un ndirizzu e-mail p'attivari sti funzioni.",
'emailconfirmlink'           => 'Cunfirmari lu tò ndrizzu imeil',
'invalidemailaddress'        => 'Lu nnirizzu email nun pò èssiri accittatu ca ci hà un furmatu nun vàlidu.
Pi favuri nziriti nu nnirizzu vàlidu o svacantati la casella.',
'accountcreated'             => 'Cuntu criatu',
'accountcreatedtext'         => "Fu criatu n'accessu pi l'utenti $1.",
'createaccount-title'        => "Criazzioni di n'accessu a {{SITENAME}}",
'createaccount-text'         => 'Qualcuno criau n\'accessu a {{SITENAME}} ($4) a nomu di $2, associatu cu stu ndirizzu di posta elettronica. La password pi l\'utenti "$2" è mpustata a "$3". È opportunu trasiri quantu prima e canciari la password subbutu.

Si l\'accessu fu criatu pi sbagghiu, si può gnurari stu missaggiu.',
'usernamehasherror'          => "Lu nomu di l'utenti nun pò cuntèniri caràttiri hash",
'login-throttled'            => "Facisti troppi tintativi.
Aspetta tanticchia prima di pruvari  n'àutra vota.",
'loginlanguagelabel'         => 'Lingua: $1',
'suspicious-userlogout'      => 'La tò dumanna di discunnissioni fu niàta prichì pari ca veni di nu browser nun funziunanti o nu proxy di caching.',

# Change password dialog
'resetpass'                 => "Scrivi n'àutra vota la password",
'resetpass_announce'        => "Hai effittuatu l'accessu cu na password timpurània ca t'hà statu mannata via email. Pi tirminari l'accessu, hai a nziriri na password nova ccà:",
'resetpass_text'            => '<!-- Agghiunci lu testu ccà -->',
'resetpass_header'          => 'Rimposta la password',
'oldpassword'               => 'Password vecchia:',
'newpassword'               => 'Password nova:',
'retypenew'                 => "Scrivi n'àutra vota la password",
'resetpass_submit'          => 'Mposta la password e accedi',
'resetpass_success'         => "Lu canciu password hà statu effittuatu cu successu! Ora stai effittuannu l'accessu...",
'resetpass_forbidden'       => 'Li password nun ponnu èssiri canciati sùpira sta wiki',
'resetpass-no-info'         => 'Pi tràsiri nta sta pàggina hà èssiri riggistratu',
'resetpass-submit-loggedin' => 'Cancia la password',
'resetpass-submit-cancel'   => 'Annulla',
'resetpass-wrong-oldpass'   => "La password timpurrània nun è giusta.
Pò èssiri ca ggià canciasti cu successu la tò password o c'addumannasti na nova password timpurrània.",
'resetpass-temp-password'   => 'Password timpurrània:',

# Edit page toolbar
'bold_sample'     => 'Grassettu',
'bold_tip'        => 'Grassettu',
'italic_sample'   => 'Cursivu',
'italic_tip'      => 'Cursivu',
'link_sample'     => 'Nomu dû link',
'link_tip'        => 'Link nternu',
'extlink_sample'  => 'http://www.example.com tìtulu dû culligamentu',
'extlink_tip'     => 'Culligamentu sternu (nutari lu prifissu http:// )',
'headline_sample' => 'Ntistazzioni',
'headline_tip'    => 'Suttantistazzioni',
'nowiki_sample'   => 'Nzirisci ccà lu testu nun furmattatu',
'nowiki_tip'      => 'Gnora la furmattazzioni wiki',
'image_sample'    => 'Asempiu.jpg',
'image_tip'       => 'Mmàggini ncurpurata',
'media_sample'    => 'Asempiu.ogg',
'media_tip'       => 'Culligamentu a file multimidiali',
'sig_tip'         => 'Firma cu data e ura',
'hr_tip'          => 'Lìnia urizzuntali (usari cu giudizziu)',

# Edit pages
'summary'                          => 'Discrizzioni:',
'subject'                          => 'Suggettu/ntistazzioni:',
'minoredit'                        => 'Chistu è nu canciamentu nicu',
'watchthis'                        => 'talìa sta pàggina',
'savearticle'                      => 'sarva la pàggina',
'preview'                          => 'visuali',
'showpreview'                      => 'ammustra la visuali prima di sarvari',
'showlivepreview'                  => "Funzioni ''Live preview''",
'showdiff'                         => 'Ammustra li canciamenti',
'anoneditwarning'                  => "'''Accura''': nun hai esiquitu lu login. Lu tò ndirizzu IP veni riggistratu ntâ cronoluggìa di sta pàggina.",
'anonpreviewwarning'               => "''Nun trasisti comu utiliggaturi loggatu. Sarbannu, lu tò nnirizzu IP veni arriggistratu ntâ storia dî canciamenti.''",
'missingsummary'                   => "'''Accura:''' Nun hà statu spicificatu l'uggettu di stu canciamentu. Primennu di novu '''Sarva''' lu canciamentu veni sarvatu cu l'uggettu vacanti.",
'missingcommenttext'               => 'Nziriri un cummentu ccà sutta.',
'missingcommentheader'             => "'''Accura:''' Nun hà statu spicificatu la ntistazzioni di stu cummentu. Primennu di novu '''Sarva''' lu canciamentu veni saravtu senza ntistazzioni.",
'summary-preview'                  => 'Antiprima uggettu:',
'subject-preview'                  => 'Antiprima suggettu/ntistazzioni:',
'blockedtitle'                     => 'Utenti bluccatu.',
'blockedtext'                      => "'''Stu nomu d'utenti o nnirizzu IP havi statu bluccatu.'''

Lu bloccu fu fattu di $1. Lu mutivu dû bloccu è: ''$2''.

* Accuminzata dû bloccu: $8
* Fini dû bloccu: $6
* Ntirvallu dû bloccu: $7

Poi cuntattari a $1 o a n'àutru [[{{MediaWiki:Grouppage-sysop}}|amministraturi]] pi discùtiri dû bloccu.

Nun poi usari la carattirìstica 'manna n'email a st'utenti' siddu nun è spicificatu nu nnirizzu email vàlidu nta li toi [[Special:Preferences|prifirenzi]] e siddu nun hai statu bluccatu di l'usari.

Lu tò nnirizzu IP attuali è $3, e lu nùmmiru ID dû bloccu è #$5.

Spicìfica tutti li dittagghi pricidenti nta quarsiasi addumannata di chiarimenti.",
'autoblockedtext'                  => "Lu tò nnirizzu IP hà statu bluccatu automaticamenti pirchì fu usatu di n'àutru utenti, chi fu bluccatu di $1.
Lu mutivu è chistu:

:''$2''

* Accuminzata dû bloccu: $8
* Fini dû bloccu: $6
* Ntirvallu dû bloccu: $7

Poi cuntattari a $1 o a n'àutru [[{{MediaWiki:Grouppage-sysop}}|amministraturi]] pi discùtiri dû bloccu.

Nun poi usari la carattirìstica 'manna n'email a st'utenti' siddu nun è spicificatu nu nnirizzu email vàlidu ntra li tòi [[Special:Preferences|prifirenzi]] e siddu nun fusti bluccatu di l'usari.

Lu tò nnirizzu IP attuali è $3, e l'ID dû bloccu è $5.
Pi favuri nclùdilu nta tutti li dumanni chi fai.",
'blockednoreason'                  => 'nudda motivazioni ndicata',
'whitelistedittext'                => "Hai a $1 pi canciari l'artìculi.",
'confirmedittext'                  => "P'èssiri abbilitati a lu canciamentu dî pàggini è nicissariu cunfirmari lu propiu ndirizzu e-mail. Pi mpustari e cunfirmari lu ndirizzu sirvìrisi dî [[Special:Preferences|prifirenzi]].",
'nosuchsectiontitle'               => 'Lu paràgrafu nun fu truvatu',
'nosuchsectiontext'                => 'Pruvasti a canciari na sezzioni chi nun esisti.
Forsi ca fu spustata o cancillata na mentri ca stàvutu taliannu la pàggina.',
'loginreqtitle'                    => 'Login nicissariu',
'loginreqlink'                     => "esèquiri l'accessu",
'loginreqpagetext'                 => 'Pi vìdiri àutri pàggini è nicissariu $1.',
'accmailtitle'                     => 'Password nviata.',
'accmailtext'                      => 'La password pi [[User talk:$1|$1]] fu nviata a lu ndirizzu $2.

La password pi stu novu account pò essiri canciata â accessu nâ pàggina pi [[Special:ChangePassword|canciari password]].',
'newarticle'                       => '(Novu)',
'newarticletext'                   => "Sta pàggina ancora nun esisti.
Pi criari na pàggina cu stu tìtulu, accumenza a scrìviri ccassutta (talìa la [[{{MediaWiki:Helppage}}|pàggina d'aiutu]] pi aviri maiuri nfurmazzioni).
Si agghicasti ccà pi sbagghiu, clicca lu buttuni ''''n arreri (back)''' dû tò browser.",
'anontalkpagetext'                 => "----''Chista è la pàggina di discussioni di n’utenti anònimu, ca nun criau ancora n’accessu o ca nun l’usa.
P’idintificàrilu è pirciò nicissariu usari lu nùmmiru di lu sò nnirizzu IP.
Li nnirizzi IP ponnu pirò èssiri spartuti di cchiù utenti.
Siddu sî n’utenti anònimu e riteni ca li cummenti prisenti nta sta pàggina nun si rifirìscinu a tia, [[Special:UserLogin/signup|crea n’accessu novu]] o [[Special:UserLogin|trasi]] cu chiddu ca già hai p’evitari d’èssiri cunfusu cu àutri utenti anònimi ‘n futuru.''",
'noarticletext'                    => "Nta stu mumentu la pàggina addumannata è vacanti. È pussìbbili [[Special:Search/{{PAGENAME}}|circari stu tìtulu]] nta l'àutri pàggini dû situ oppuru [{{fullurl:{{FULLPAGENAME}}|action=edit}} canciari la pàggina ora].",
'userpage-userdoesnotexist'        => 'L\'account "<nowiki>$1</nowiki>" nun currispunni a n\'utenti riggistratu. Virificari si si voli criari o canciari sta pàggina.',
'clearyourcache'                   => "'''Nota:''' doppu aviri sarvatu è nicissariu puliri la cache dû propiu browser pi vìdiri li canciamenti. Pi '''Mozilla / Firefox / Safari''': fari clic supra ''Ricarica'' tinnennu primutu lu tastu dî maiùsculi, oppuru prèmiri ''Ctrl-Maiusc-R'' (''Cmd-Maiusc-R'' supra Mac); pi '''Internet Explorer:''' mantèniri primutu lu tastu ''Ctrl'' mentri si premi lu pulsanti ''Aggiorna'' o prèmiri ''Ctrl-F5''; pi '''Konqueror''': prèmiri lu pulsanti ''Ricarica'' o lu tastu ''F5''; pi '''Opera''' pò èssiri nicissariu svacantari cumpletamenti la cache dû menu ''Strumenti → Preferenze''.",
'usercssyoucanpreview'             => "'''Suggirimentu:''' Usa lu tastu 'Visualizza antiprima' pi pruvari li novi css/js prima di sarvàrili.",
'userjsyoucanpreview'              => "'''Suggirimentu:''' Usa lu tastu 'Visualizza antiprima' pi pruvari li novi css/js prima di sarvàrili.",
'usercsspreview'                   => "'''Arricorda ca stai sulu visualizzannu n'antiprima dû tò CSS pirsunali.'''
'''Nun hà ancora statu sarvatu!'''",
'userjspreview'                    => "'''Arricorda ca stai sulu tistanno/vidennu 'n antiprima lu tò javascript pirsunali, nun hà statu ancora sarvatu!'''",
'userinvalidcssjstitle'            => "'''Accura:''' Nun esisti arcuna skin cu nomu \"\$1\". S'arricorda ca li pàggini pi li .css e .js pirsunalizzati hannu la nizziali dû tìtulu minùscula, p'asempiu {{ns:user}}:Asempiu/vector.js e nun {{ns:user}}:Asempiu/Vector.css.",
'updated'                          => '(Aggiurnatu)',
'note'                             => "'''Accura:'''",
'previewnote'                      => "'''Ricurdàtivi ca chista è sulu n'antiprima, e ca nun hà statu ancora sarvata!'''",
'previewconflict'                  => "L'antiprima currispunni a lu testu prisenti ntâ casella di canciamentu supiriuri e rapprisenta la pàggina comu appari siddu si scegghi di prèmiri 'Sarva' 'n stu mumentu.",
'session_fail_preview'             => "'''Purtroppu nun hà statu pussìbbili sarvari li tò canciamenti pirchì li dati dâ sissioni hannu jutu pirduti. Pi favuri, riprova. Siddu arricevi stu missaggiu d'erruri cchiù voti, prova a sculligàriti e a culligàriti novamenti.'''",
'session_fail_preview_html'        => "'''Semu spiacenti, nun hà statu pussìbbili elabburari lu canciamentu pirchì hannu jutu pirduti li dati rilativi â sissioni.'''

''Poichì nta stu situ è abbilitatu l'usu di HTML senza limitazzioni, l'antiprima nun veni visualizzata; si tratta di na misura di sicurizza contra l'attacchi JavaScript.''

'''Siddu chistu è nu tintativu liggìttimu di canciamentu, arriprova. Siddu lu prubbrema pirsisti, si pò pruvari a [[Special:UserLogout|sculligàrisi]] e effittuari n'accessu novu.'''",
'token_suffix_mismatch'            => "'''Lu canciamentu nun fu sarvatu pirchì lu client ammustrau di gèstiri 'n modu sbagghiatu li caràttiri di puntiggiatura nta lu token assuciatu a iddu. P'evitari na curruzzioni pussìbbili dô testu dâ pàggina, fu rifiutatu tuttu lu canciamentu. Sta situazzioni pò virificàrisi, certi voti, quannu s'adòpiranu arcuni sirvizza di proxy anònimi via web chi prisèntanu bug.'''",
'editing'                          => 'Canciu di la vuci "$1"',
'editingsection'                   => 'Canciamentu di $1 (sezzioni)',
'editingcomment'                   => 'Canciu di $1 (nova sizzioni)',
'editconflict'                     => "Cunflittu d'edizzioni supra $1",
'explainconflict'                  => "N'àutru utenti havi sarvatu na virsioni nova dâ pàggina mentri stavi effittuannu li canciamenti.
La casella di canciamentu supiriuri cunteni lu testu dâ pàggina attuarmenti online, accussì comu hà statu aggiurnatu di l'àutru utenti.
La virsioni cu li tò canciamenti è mmeci ripurtata ntâ casella di canciamentu nfiriuri.
Siddu addisìi cunfirmàrili, hai a ripurtari li tò canciamenti ntô testu asistenti (casella supiriuri).
Primennu lu pulsanti '{{int:savearticle}}', veni sarvatu '''sulu''' lu testu cuntinutu ntâ casella di canciamentu supiriuri.",
'yourtext'                         => 'Lu tò testu',
'storedversion'                    => 'La virsioni mimurizzata',
'nonunicodebrowser'                => "''''''ACCURA: Lu tò browser nun supporta unicode, li caràttiri nun-ASCII appàrinu nta lu box di canciamentu comu còdici esadicimali.''''''",
'editingold'                       => "'''Accura: si sta canciannu na virsioni nun aggiurnata dâ pàggina.<br /> Siddu si scegghi di sarvàrila, tutti li canciamenti appurtati doppu sta rivisioni vannu pirduti.'''",
'yourdiff'                         => 'Diffirenzi',
'copyrightwarning'                 => "Nutati chi tutti li cuntribbuti a {{SITENAME}} s'hannu a cunzidirari sutta la licenza d'usu $2 (talìa $1 pî dittagghi). Si nun vuliti chi lu vostru travagghiu curri lu rìsicu di vèniri ritravagghiatu e/o ridistribbuitu, nun suttamittìtilu ccà.<br />
Vuatri prumittiti puru chi lu scrivìstivu chî vostri palori, o chi lu cupiàstivu di nu duminiu pùbbricu o di risursi sìmili
'''NUN SUTTAMITTÌTI MATIRIALI SUTTA COPYRIGHT SENZA PIRMISSU!'''",
'copyrightwarning2'                => "Nota: tutti li cuntribbuti mannati a {{SITENAME}} ponnu èssiri mudificati o cancillati di parti di l'àutri participanti. Siddu nun addisìi ca li tò testi ponnu èssiri mudificati senza arcunu riguardu, nun mannàrili a stu situ.<br /> Cu la mannata dû testu dichiari noltri, sutta la tò rispunzabbilitati, ca lu testu hà statu scrittu di tia pirsunalmenti oppuru c'hà statu cupiatu di na fonti di pùbbricu dominiu o analucamenti lìbbira. (vidi $1 pi maiuri dittagghi) '''NUN MANNARI MATIRIALI CUPERTU DI DRITTU D'AUTURI SENZA AUTURIZZAZZIONI!'''",
'longpageerror'                    => "'''ERRURI: Lu testu ca hai suttamissu è longu $1 kilobyte, ch'è cchiù dû màssimu di $2 kilobyte. Nun pò èssiri sarvatu.'''",
'readonlywarning'                  => "'''ACCURA: Lu database è fermu pi manutinzioni, pirciò nun poi sarvari li tò canciamenti nta stu mumentu. La cosa megghia è fari un copia e ncolla dû testu nta n'àutru prugramma e sarvàrilu pi quannu lu database è accissìbbili.'''

L'amministraturi ca bluccau lu database lu fici pi stu mutivu: $1",
'protectedpagewarning'             => "'''ACCURA: Sta pàggina havi na prutizzioni spiciali e sulu l'utenti chi hannu lu status di amministraturi ponnu canciàrila.'''",
'semiprotectedpagewarning'         => "'''ACCURA:''' Sta pàggina hà statu bluccata n modu ca sulu li utenti riggistrati ponnu canciàrila.",
'cascadeprotectedwarning'          => "'''Accura:''' Sta pàggina havi stata bluccata n modu ca sulu li utenti cu privileggi di amministraturi ponnu mudificàrila, pirchì veni nclusa {{PLURAL:\$1|nta siquente pàggina ca hà stata prutiggiuta|ntê siquenti pàggini ca hannu stati prutiggiuti}} silizziunannu la prutizzioni \"ricursiva\":",
'titleprotectedwarning'            => "'''ATTENZIONI:  Sta pàggina fu bluccata n modu tali ca sianu nicissari [[Special:ListGroupRights|diritti spicifici]] pi criarla.'''",
'templatesused'                    => "Template utilizzati 'n sta pàggina:",
'templatesusedpreview'             => "Template utilizzati 'n st'antiprima:",
'templatesusedsection'             => "Template utilizzati 'n sta sezzioni:",
'template-protected'               => '(prutettu)',
'template-semiprotected'           => '(semiprutettu)',
'hiddencategories'                 => 'Sta pàggina apparteni a {{PLURAL:$1|na catigurìa ammuciata|$1 catigurìi ammuciati}}:',
'edittools'                        => '<!-- Chistu testu cumpari sutta li moduli di canciu e carricamentu. -->',
'nocreatetitle'                    => 'Criazzioni dî pàggini limitata',
'nocreatetext'                     => "La pussibbilitati di criari pàggini novi nta {{SITENAME}} è limitata a l'utenti riggistrati. Poi turnari 'n arreri e canciari na pàggina esistenti, oppuru [[Special:UserLogin|tràsiri o criari nu cuntu novu]].",
'nocreate-loggedin'                => 'Nun hai lu pirmissu pi criari pàggini novi ntâ {{SITENAME}}.',
'permissionserrors'                => 'Erruri di pirmissu',
'permissionserrorstext'            => 'Nun hai lu pirmissu pi fari chistu, pi {{PLURAL:$1|chistu motivu|sti mutivi}}:',
'permissionserrorstext-withaction' => 'Nun hai lu pirmessu di fari $2, pi {{PLURAL:$1|lu siguenti mutivu|li siguenti mutivi}}:',
'recreate-moveddeleted-warn'       => "'''Accura: stai pi criari na pàggina chi fu cancillata 'n passatu.'''

Accuràtivi ch'è uppurtunu cuntinuari a canciari sta pàggina.
L'alencu dî cancillazzioni e spustamenti rilativi veni ripurtatu ccà pi cummudità:",
'moveddeleted-notice'              => 'Sta pàggina fu scancillata. La lista di li scancillazzioni e spustamenti veni ammustrata di sècutu pi nfurmazzioni.',
'log-fulllog'                      => 'Talìa log cumpletu',
'edit-hook-aborted'                => "Canciamentu scancillatu di l'hook.
Nun desi nudda spiecazzioni.",
'edit-gone-missing'                => 'Mpussìbbili aggiurnari la pàggina.
Pari ca fu scancillata.',
'edit-conflict'                    => 'Cunflittu di edizzioni.',
'edit-no-change'                   => 'La mudifica fu ignurata pirchì nu foru appurtati canci ntô testu.',
'edit-already-exists'              => 'Mpussìbbili criari na nova pàggina.
Esisti ggià.',

# Parser/template warnings
'expensive-parserfunction-warning'        => "Accura: Sta pàggina cunteni troppi chiamati ê parser functions.

Avissi a èssiri menu di $2, ô mumentu ci {{PLURAL:$1|nn'è $1|nni sunnu $1}}.",
'expensive-parserfunction-category'       => 'Pàggini cu troppi chiamati ê parser functions',
'post-expand-template-inclusion-warning'  => 'Accura: la diminzioni di li template nziriti è troppu granni.
Arcuni template non vènunu nziriti.',
'post-expand-template-inclusion-category' => 'Pàggini unni la diminsioni dê template nclusi supira lu limiti cunsintutu',
'post-expand-template-argument-warning'   => "Attenzioni: Sta pàggina cunteni almenu n'argomentu di nu template ca havi na diminsioni troppu rossa pi essiri espansu. St'argomenti verrannu omessi.",
'post-expand-template-argument-category'  => 'Pàggini ca cuntèninu template cu argumenti mancanti',
'parser-template-loop-warning'            => 'Fu truvatu nu loop di Template : [[$1]]',
'parser-template-recursion-depth-warning' => 'Limiti di ricursioni funnuti di Template surpassatu ($1)',

# "Undo" feature
'undo-success' => "Lu canciamentu pò essiri annullatu.
Virificati lu paraguni ccà sutta p'accuràrivi ca lu cuntinutu è chiddu addisiatu e doppu sarvati la pàggina pi cumplitari l'annullamentu.",
'undo-failure' => "Lu canciamentu nun pò èssiri annullatu a càusa d'un cunflittu cu li canciamenti ntirmedi.",
'undo-norev'   => 'Lu canciamentu nun pò essiri annullatu pirchì nun esisti o fù cancillato.',
'undo-summary' => 'Annullatu lu canciamentu $1 di [[Special:Contributions/$2|$2]] ([[User talk:$2|discussioni]])',

# Account creation failure
'cantcreateaccounttitle' => "Mpussìbbili riggistrari n'utenti",
'cantcreateaccount-text' => "La criazzioni di account di stu nnirizzu IP ('''$1''') fu bluccata di [[User:$3|$3]].

Lu mutivu è ''$2''",

# History pages
'viewpagelogs'           => 'Vidi li log rilativi a sta pàggina',
'nohistory'              => 'Cronoluggìa dî virsioni di sta pàggina nun ripirìbbili.',
'currentrev'             => 'Virsioni currenti',
'currentrev-asof'        => 'Virsioni currenti dû $1',
'revisionasof'           => 'Virsioni dû $1',
'revision-info'          => 'Virsioni dû $1 di $2',
'previousrevision'       => '← Virsioni menu ricenti',
'nextrevision'           => 'Virsioni cchiù ricenti →',
'currentrevisionlink'    => 'Virsioni currenti',
'cur'                    => 'curr',
'next'                   => 'pròssimu',
'last'                   => 'pric',
'page_first'             => 'prima',
'page_last'              => 'ùrtima',
'histlegend'             => "Cunfrontu tra virsioni: silizziunari li caselli currispunnenti ê virsioni addisiati e prèmiri Mannu o lu pulsanti a basciu.<br /> Liggenna: (curr) = diffirenzi cu la virsioni attuali, (pric) = diffirenzi cu la virsioni pricidenti, '''m''' = canciamentu nicu",
'history-fieldset-title' => 'Scurri ntâ crunuluggìa',
'histfirst'              => 'Prima',
'histlast'               => 'Ùrtima',
'historysize'            => '({{PLURAL:$1|1 byte|$1 byte}})',
'historyempty'           => '(vacanti)',

# Revision feed
'history-feed-title'          => 'Lista dî canciamenti',
'history-feed-description'    => 'Cronoluggìa dâ pàggina supra stu situ',
'history-feed-item-nocomment' => '$1 lu $2',
'history-feed-empty'          => 'La pàggina richiesta nun asisti; putissi aviri stata cancillata dû situ o rinuminata. Virificari cu la [[Special:Search|pàggina di ricerca]] siddu ci sunnu novi pàggini.',

# Revision deletion
'rev-deleted-comment'         => '(cummentu rimussu)',
'rev-deleted-user'            => '(nomu utenti rimussu)',
'rev-deleted-event'           => '(elementu cancillatu)',
'rev-deleted-text-permission' => "Sta virsioni dâ pàggina hà statu '''cancillata'''.
Cunzurtari lu [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} log di cancillazzioni] pi ultiriuri dittagghi.",
'rev-deleted-text-unhide'     => "Sta virsioni da pàggina fu '''cancillata'''.
Talìari lu [{{fullurl:{{#Special:Log}}/delete|page={{PAGENAMEE}}}} log dê cancillazzioni] pi autri dittagli.
All'aministraturi ancora è cunsintutu [$1 talìari sta virsioni] si nicissariu.",
'rev-suppressed-text-unhide'  => "Sta virsioni dâ pàggina fu '''rimossa'''.
Talìari lu [{{fullurl:{{#Special:Log}}/delete|page={{PAGENAMEE}}}} log dê cancillazzioni] pi autri dittagli.
All'aministraturi ancora è cunsintutu [$1 talìari sta virsioni] si nicissariu.",
'rev-deleted-text-view'       => "Sta virsioni dâ pàggina hà statu '''cancillata'''.
Lu testu pò èssiri visualizzatu surtantu di l'amministratura dû situ. Cunzurtari lu [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} log di cancillazzioni] pi ultiriuri dittagghi.",
'rev-suppressed-text-view'    => "Sta virsioni dâ paggina fu '''luvata'''.
L'amministratura ponu ancora taliarla; taliari lu [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} log di rimozzioni] pi autri dittagli.",
'rev-deleted-no-diff'         => "Nun è possibili taliari stu cunfrontu tra virsioni pirchì na revisioni fu '''scancillata'''.
Cunzurtari lu [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} log di cancillazzioni] pi ultiriuri dittagghi.",
'rev-deleted-unhide-diff'     => "Una dê rivisioni di stu confrontu tra visrsioni fu '''cancillata'''.
Cunzurtari lu [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} log di cancillazzioni] pi ultiriuri dittagghi.
All'amministratura è ancora possibili [$1 talìari lu confrontu] si nicissariu.",
'rev-delundel'                => 'ammustra/ammuccia',
'rev-showdeleted'             => 'ammustra',
'revisiondelete'              => 'Cancella o riprìstina virsioni',
'revdelete-nooldid-title'     => 'Virsioni nun spicificata',
'revdelete-nooldid-text'      => 'Nun hà statu spicificata arcuna virsioni dâ pàggina supra cui esèquiri sta funzioni.',
'revdelete-nologtype-title'   => 'Nuddu tipu di log spicificatu',
'revdelete-nologtype-text'    => "Nun è statu spicificatu nuddu registru su cui fari l'azioni.",
'revdelete-nologid-title'     => 'Vuci di riggistru ca non vali',
'revdelete-nologid-text'      => 'Nun è statu spicificatu nuddu registru su cui fari sta funzioni oppuru lu riggistru nun esisti.',
'revdelete-no-file'           => 'Lu file spicificatu nun esisti.',
'revdelete-show-file-confirm' => 'Si desidira talìari la virsioni cancillata dô file "<nowiki>$1</nowiki>" dô $2 ê $3?',
'revdelete-show-file-submit'  => 'Sì',
'revdelete-selected'          => "'''{{PLURAL:$2|Virsioni silizziunata|Virsioni silizziunati}} di [[:$1]]:'''",
'logdelete-selected'          => "'''{{PLURAL:$1|Eventu dû riggistru silizziunatu|Eventi dû riggistru silizziunati}}:'''",
'revdelete-text'              => "'''Li virsioni cancillati rèstanu visìbbili ntâ cronoluggìa dâ pàggina, mentri lu testu cuntinutu nun è accissìbbili a lu pùbbricu.'''
L'àutri amministratura dû situ ponnu accèdiri comu è gghiè a li cuntinuti ammucciati e ripristinàrili attraversu sta stissa nterfaccia, siddu nun hannu statu mpustati àutri limitazzioni n fasi di nstallazzioni dû situ.",
'revdelete-suppress-text'     => "La rimozzioni havi a essiri utilizzata '''sulu''' ni sti casi:
* Dati pirsonali inoppurtuni
*: ''ndirizzi, nnummara di telefunu, codici fiscali, ecc.''",
'revdelete-legend'            => 'Mposta li limitazzioni siquenti supra li virsioni cancillati:',
'revdelete-hide-text'         => 'Ammuccia lu testu dâ virsioni',
'revdelete-hide-image'        => 'Ammuccia lu cuntinutu dû file',
'revdelete-hide-name'         => 'Ammuccia azione e uggettu dâ stissa',
'revdelete-hide-comment'      => "Ammuccia l'uggettu dû canciamentu",
'revdelete-hide-user'         => "Ammuccia lu nomu o lu ndirizzu IP di l'auturi",
'revdelete-hide-restricted'   => "Ammuccia l'informazioni innicati macari a li amministratura",
'revdelete-radio-same'        => '(nun canciari)',
'revdelete-radio-set'         => 'Sè',
'revdelete-radio-unset'       => 'Nò',
'revdelete-suppress'          => "Ammuccia nformazioni puru all'amministratura",
'revdelete-unsuppress'        => 'Elìmina le limitazzioni su li rivisioni ripristinati',
'revdelete-log'               => 'Mutivu:',
'revdelete-submit'            => 'Àpplica â rivisioni silizziunata',
'revdelete-success'           => "'''Visibbilitati dâ rivisioni mpustata currittamenti.'''",
'revdelete-failure'           => "'''A visibilità dâ rivisioni nu pò essiri impustata:'''
$1",
'logdelete-success'           => "'''Visibbilitati de l'eventu mpustata currittamenti.'''",
'logdelete-failure'           => "'''La visibilità dû eventu nun po essiri impustata:'''
$1",
'revdel-restore'              => 'Cancia la visibbilità',
'pagehist'                    => 'Storia dâ pàggina',
'deletedhist'                 => 'Storia cancillata',
'revdelete-hide-current'      => "Impussibili ammucciari l'oggettu cu la data $1 $2 in quantu è la rivisoni currenti.",
'revdelete-show-no-access'    => 'Impussibili ammustrari l\'oggettu cu data $1 $2 in quantu fu identificatu comu "riservatu" e nun si disponi di lu rilativu accessu.',
'revdelete-modify-no-access'  => 'Impussibili canciari l\'oggettu cu data $1 $2 in quantu fu identificatu comu "riservatu" e nun si disponi di lu rilativu accessu.',
'revdelete-modify-missing'    => "Impossibili canciari l'oggettu cu ID $1 in quantu nun è presenti nô database.",
'revdelete-no-change'         => "'''Attenzioni:''' l'oggettu cu data $1 $2 aveva già l'impostazioni di visibilità richiesti.",
'revdelete-concurrent-change' => "Impussibili canciari l'oggettu cu data $1 $2 in quantu lu sò statu fu canciatu da n'autru utenti mentri si tintava lu canciamentu.
Cuntrolla lu log.",
'revdelete-only-restricted'   => "Nun poi ammucciari â vista di l'amministraturi senza silizziunari l'autri opzioni di supprissioni.",
'revdelete-reasonotherlist'   => 'Àutru mutivu',
'revdelete-edit-reasonlist'   => 'Cancia li mutivazioni pi la cancillazzioni',

# Suppression log
'suppressionlog'     => 'Log dê supprissioni',
'suppressionlogtext' => "Ccà veni prisintatu n'elencu dê cancillazioni e dê blocchi cchiù ricenti supra cuntinuti ammucciati d'amministraturi. Vidi l'[[Special:IPBlockList|elenco d'IP bloccati]] pi l'elencu dî ban e dî blocchi attivi.",

# History merging
'mergehistory'                     => 'Unioni storie',
'mergehistory-header'              => "Sta pàggina fa junciri li rivisioni dâ storia di na pàggina (ditta macari pàggina d'origini) cu na pàggina cchiù ricenti.
S'havi accirtari ca la cuntinuità storica di la pàggina nun veni altirata.",
'mergehistory-box'                 => 'Junci li storii di dui pàggini:',
'mergehistory-from'                => 'Pàggina di origgini:',
'mergehistory-into'                => 'Pàggina di distinazioni:',
'mergehistory-list'                => "Storia a cui è applicabili l'unioni",
'mergehistory-merge'               => 'È possibili junciri li rivisioni di [[:$1]] ndicati ccà â storia di [[:$2]]. Usari la colunna cu li pulsanti di opzioni pi junciri tutti li rivisioni finu â data e ura ndicati. Talìa ca si venunu usati li pulsanti di navigazzioni, la colonna di li pulsanti di opzioni veni azzirata.',
'mergehistory-go'                  => 'Vidi li canciamenti ca ponu essiri junciuti',
'mergehistory-submit'              => 'Junci li rivisioni',
'mergehistory-empty'               => 'Nudda rivisioni da junciri.',
'mergehistory-success'             => '{{PLURAL:$3|Na rivisioni di [[:$1]] fu junciuta|$3 rivisioni di [[:$1]] sunu stati junciuti}} â storia di [[:$2]].',
'mergehistory-fail'                => 'Impossibbili junciri li storii. Virificari la pàggina e li parametri temporali.',
'mergehistory-no-source'           => 'La pàggina di origgini $1 nun esisti.',
'mergehistory-no-destination'      => 'La pàggina di distinazzioni $1 nun esisti.',
'mergehistory-invalid-source'      => 'La pàggina di origgini havi aviri nu titulu currettu.',
'mergehistory-invalid-destination' => 'La pàggina di distinazzioni havi aviri nu tìtulu currettu.',
'mergehistory-autocomment'         => 'Unioni di [[:$1]] ni [[:$2]]',
'mergehistory-comment'             => 'Unioni di [[:$1]] in [[:$2]]: $3',
'mergehistory-same-destination'    => "Li pàggini d'urìggini e di distinazioni non ponnu èssiri la stissa",
'mergehistory-reason'              => 'Mutivu:',

# Merge log
'mergelog'           => "Log d'unioni",
'pagemerge-logentry' => 'havi iunciutu [[$1]] a [[$2]] (rivisioni finu a $3)',
'revertmerge'        => 'Annulla unioni',
'mergelogpagetext'   => "Appressu veni ammustrata na lista dî operazioni cchiù ricenti di unioni dâ storia di na pàggina ni n'autra.",

# Diffs
'history-title'            => 'Crunoluggìa dî canciamenti di "$1"',
'difference'               => '(Diffirenzi tra li rivisioni)',
'lineno'                   => 'Lìnia $1:',
'compareselectedversions'  => 'Fari lu paraguni',
'showhideselectedversions' => 'Ammustra/ammuccia virsioni silizziunati',
'editundo'                 => 'annulla',
'diff-multi'               => '({{PLURAL:$1|Na rivisioni ntirmèdia nun ammustrata|$1 rivisioni ntirmedi nun ammustrati}}.)',

# Search results
'searchresults'                    => 'Risurtati dâ circata',
'searchresults-title'              => 'Risurtati dâ circata di "$1"',
'searchresulttext'                 => 'Pi cchiossai nfurmazzioni supra la circata nterna di {{SITENAME}}, talìa [[{{MediaWiki:Helppage}}|{{int:help}}]].',
'searchsubtitle'                   => "Pruvasti a circari: '''[[$1]]'''",
'searchsubtitleinvalid'            => "Circata di '''$1'''",
'toomanymatches'                   => 'Troppi currispunnenzi. Cancia la richiesta.',
'titlematches'                     => "Ntê tìtuli di l'artìculi",
'notitlematches'                   => 'Nudda currispunnenza ntê tìtuli dî pàggini',
'textmatches'                      => "Ntô testu di l'artìculi",
'notextmatches'                    => 'Nudda currispunnenza ntô testu dî pàggini',
'prevn'                            => 'li pricidenti {{PLURAL:$1|$1}}',
'nextn'                            => 'li pròssimi {{PLURAL:$1|$1}}',
'prevn-title'                      => '{{PLURAL:$1|Risultatu pricidenti|$1 risultati pricedenti}}',
'nextn-title'                      => '{{PLURAL:$1|Risultatu successivu|$1 risultata successivi}}',
'shown-title'                      => 'Ammustra {{PLURAL:$1|nu risultatu|$1 risultati}} pi pàggina',
'viewprevnext'                     => 'Talìa ($1 {{int:pipe-separator}} $2) ($3).',
'searchmenu-legend'                => 'Opzioni di circata',
'searchmenu-exists'                => "* Pàggina '''[[$1]]'''",
'searchmenu-new'                   => "'''Crea la pàggina \"[[:\$1]]\" supra sta wiki!'''",
'searchhelp-url'                   => 'Help:Cuntinuti',
'searchmenu-prefix'                => '[[Special:PrefixIndex/$1|Visualizza li pàggini cu stu prifissu]]',
'searchprofile-articles'           => 'Pàggini di cuntinutu',
'searchprofile-project'            => "Pàggini d'aiutu e dô pruggettu",
'searchprofile-images'             => 'Multimedia',
'searchprofile-everything'         => 'Tuttu',
'searchprofile-advanced'           => 'Avanzata',
'searchprofile-articles-tooltip'   => 'Cerca nti $1',
'searchprofile-project-tooltip'    => 'Cerca nti $1',
'searchprofile-images-tooltip'     => 'Cerca file',
'searchprofile-everything-tooltip' => 'Cerca unnegghiè (puru ntî pàggini di discussioni)',
'searchprofile-advanced-tooltip'   => 'Cerca ntê namespace pirsunalizzati',
'search-result-size'               => '$1 ({{PLURAL:$2|na parola|$2 paroli}})',
'search-result-score'              => 'Rilivanza: $1%',
'search-redirect'                  => '(redirect $1)',
'search-section'                   => '(sizzioni $1)',
'search-suggest'                   => 'Forsi circavutu: $1',
'search-interwiki-caption'         => 'Pruggetti frati',
'search-interwiki-default'         => 'Risultati da $1:',
'search-interwiki-more'            => '(cchiù)',
'search-mwsuggest-enabled'         => 'cu suggirimenti',
'search-mwsuggest-disabled'        => 'senza suggirimenti',
'search-relatedarticle'            => 'Risultati currilati',
'mwsuggest-disable'                => 'Astuta suggirimenti AJAX',
'searcheverything-enable'          => 'Cerca ni tutti li namespace',
'searchrelated'                    => 'currilati',
'searchall'                        => 'tutti',
'showingresults'                   => "Ammustra nzinu a {{PLURAL:$1|'''1''' risurtatu|'''$1''' risurtati}} a pàrtiri dô nùmmuru '''$2'''.",
'showingresultsnum'                => "L'alencu cunteni {{PLURAL:$3|'''1''' risurtatu|'''$3''' risurtati}} a pàrtiri dû nùmmuru '''$2'''.",
'showingresultsheader'             => "{{PLURAL:$5|Risultatu '''$1''' di '''$3'''|Risultati '''$1 - $2''' di '''$3'''}} pi '''$4'''",
'nonefound'                        => "'''Nota''': la circata è effittuata pi default sulu nta arcuni namespace. Prova a primèttiri ''all:'' ô testu dâ circata pi circari nta tutti li namespace (cumprisi pàggini di discussioni, template, ecc) oppuru usa lu namespace disidiratu comu prifissu.",
'search-nonefound'                 => 'La circata nun desi nuddu risurtatu.',
'powersearch'                      => 'Arriscedi',
'powersearch-legend'               => 'Ricerca avanzata',
'powersearch-ns'                   => 'Cerca ntê namespace:',
'powersearch-redir'                => 'Elenca redirect',
'powersearch-field'                => 'Cerca',
'powersearch-togglelabel'          => 'Silizziona:',
'powersearch-toggleall'            => 'Tutti',
'powersearch-togglenone'           => 'Nuddu',
'search-external'                  => 'Ricerca sterna',
'searchdisabled'                   => 'La circata nterna di {{SITENAME}} hà statu disabbilitata. Nta stu mentri, poi usari la circata supra Google o supra àutri muturi di circata. Accura ca li sò ìnnici dê cuntinuti di {{SITENAME}} ponnu nun èssiri aggiurnati.',

# Quickbar
'qbsettings'               => 'Pusizzioni QuickBar',
'qbsettings-none'          => 'Nuddu',
'qbsettings-fixedleft'     => 'Fissu a manu manca',
'qbsettings-fixedright'    => 'Fissu a manu dritta',
'qbsettings-floatingleft'  => 'Fluttuanti a manu manca',
'qbsettings-floatingright' => 'Fluttuanti a manu dritta',

# Preferences page
'preferences'                   => 'prifirenzi',
'mypreferences'                 => 'Li mè prifirenzi',
'prefs-edits'                   => 'Nùmmuru di canciamenti:',
'prefsnologin'                  => 'Accessu nun effittuatu',
'prefsnologintext'              => 'Pi putiri pirsunalizzari li prifirenzi è nicissariu fari l\'<span class="plainlinks">[{{fullurl:{{#Special:UserLogin}}|returnto=$1}} accessu]</span>.',
'changepassword'                => 'Cancia la password',
'prefs-skin'                    => 'Aspettu',
'skin-preview'                  => 'Antiprima',
'datedefault'                   => 'Nudda prifirenza',
'prefs-beta'                    => 'Funzioni beta',
'prefs-datetime'                => 'Data e ura',
'prefs-labs'                    => 'Funziunalità dî labboratoria',
'prefs-personal'                => 'Prufilu utenti',
'prefs-rc'                      => 'Ùrtimi canciamenti',
'prefs-watchlist'               => 'Ossirvati spiciali',
'prefs-watchlist-days'          => "Nùmmiru di jorna ammustrati nta l'ossirvati spiciali:",
'prefs-watchlist-days-max'      => 'Non cchiossai di 7 jorna',
'prefs-watchlist-edits'         => 'Nùmmaru di canciamenti a ammustrari cu li funzioni avanzati:',
'prefs-watchlist-edits-max'     => '(nùmmaru màssimu: 1000)',
'prefs-watchlist-token'         => 'Token lista taliata mia',
'prefs-misc'                    => 'Vari',
'prefs-resetpass'               => 'Cancia password',
'prefs-email'                   => 'Opzioni email',
'prefs-rendering'               => 'Aspettu',
'saveprefs'                     => 'Sarva li prifirenzi',
'resetprefs'                    => 'Annulla',
'restoreprefs'                  => 'Ripristina li mpustazzioni di default',
'prefs-editing'                 => 'Cancia',
'prefs-edit-boxsize'            => 'Diminzioni dâ finestra di mudìfica.',
'rows'                          => 'Righi:',
'searchresultshead'             => 'Circata',
'resultsperpage'                => 'Nùmmiru di risurtati pi pàggina:',
'stub-threshold'                => 'Valuri minimu pî <a href="#" class="stub">liami a li stub</a>:',
'stub-threshold-disabled'       => 'Disabbìlitatu',
'recentchangesdays'             => "Nùmmuru di jorna a ammustrari nte l'urtimi cancaiamenti:",
'recentchangesdays-max'         => '(màssimu $1 {{PLURAL:$1|jornu|jorna}})',
'recentchangescount'            => 'Nùmmiru di canciamenti da ammustrari di default:',
'prefs-help-recentchangescount' => 'Ciò includi li canciamenti ricenti, storii e riggistri.',
'prefs-help-watchlist-token'    => "Cumpilannu stu campu cu na chiavi sigreta sarà giniratu nu feed RSS pi propri ossirvati spiciali. Chiunqui sa sta chiavi ni stu campu putrà leggiri li osservati speciali, quindi assicurati di nsiriri nu valori sicuru. Ccà c'è nu valori ginirato casualmenti ca si pò usari: $1",
'savedprefs'                    => 'Li tò prifirenzi foru sarvati.',
'timezonelegend'                => 'Fusu orariu:',
'localtime'                     => 'Uràriu lucali',
'timezoneuseserverdefault'      => 'Usa uràriu dû server',
'timezoneuseoffset'             => 'Àutru (spicificari diffirenza)',
'timezoneoffset'                => 'Uri di diffirenza¹',
'servertime'                    => 'Uràriu dû server',
'guesstimezone'                 => "Usa l'ura dû tò browser",
'timezoneregion-africa'         => 'Africa',
'timezoneregion-america'        => 'America',
'timezoneregion-antarctica'     => 'Antartide',
'timezoneregion-arctic'         => 'Artide',
'timezoneregion-asia'           => 'Asia',
'timezoneregion-atlantic'       => 'Oceanu Atlantico',
'timezoneregion-australia'      => 'Australia',
'timezoneregion-europe'         => 'Europa',
'timezoneregion-indian'         => 'Oceanu Indianu',
'timezoneregion-pacific'        => 'Oceanu Pacificu',
'allowemail'                    => 'Cunzenti la ricezzioni di e-mail di àutri utenti',
'prefs-searchoptions'           => 'Opzioni di circata',
'prefs-namespaces'              => 'Namespace',
'defaultns'                     => 'In casu cuntrariu cerca ni sti namespace:',
'default'                       => 'pridifinitu',
'prefs-files'                   => 'Mmàggini',
'prefs-custom-css'              => 'CSS personalizzatu',
'prefs-custom-js'               => 'JS personalizzatu',
'prefs-reset-intro'             => "È pussibili usari sta pàggina pi reimpustari li propri prifirenzi a chiddi pridifiniti dô situ.
L'operazioni nun pò èssiri annullata.",
'prefs-emailconfirm-label'      => 'Conferma dâ e-mail:',
'prefs-textboxsize'             => 'Diminsioni dâ casedda di canciamentu',
'youremail'                     => 'Lu tò nnirizzu email:',
'username'                      => "Nomu d'utenti:",
'uid'                           => 'ID utenti:',
'prefs-memberingroups'          => 'Cumpunenti {{PLURAL:$1|dû gruppu|dî gruppi}}:',
'prefs-registration'            => 'Data di riggistrazioni:',
'yourrealname'                  => 'Lu tò nomu veru*',
'yourlanguage'                  => 'Lingua dâ nterfaccia:',
'yourvariant'                   => 'Varianti:',
'yournick'                      => 'Suprannomu (nickname):',
'prefs-help-signature'          => 'Li cummenta nê pàggini di discussioni hanu essiri firmata cu "<nowiki>~~~~</nowiki>" ca virrannu cunvirtuta nâ propria firma cu appressu la data.',
'badsig'                        => 'Erruri ntâ firma nun standard, virificari li tag HTML.',
'badsiglength'                  => 'Lu Nickname è troppu longu. Nun pò aviri cchiù di $1 {{PLURAL:$1|caràttiri|caràttiri}}.',
'yourgender'                    => 'Geniri:',
'gender-unknown'                => 'Nun specificatu',
'gender-male'                   => 'Masculu',
'gender-female'                 => 'Fimmina',
'prefs-help-gender'             => "Opzionali: cunsenti di adattari li missaggi dô software in funzioni dô generi d'utenti. Sta nfurmazioni sarà pubblica.",
'email'                         => 'Nnirizzu email',
'prefs-help-realname'           => '* Nomu veru (upziunali): siddu scegghi di furnìrilu veni usatu pi dàriti crèditu dû tò travagghiu.',
'prefs-help-email'              => "* Imeil (opziunali): abbìlita l'àutri utenti a cuntattàriti attraversu la tò pàggina d'utenti o di discussioni, senza pi chissu rivilari la tò idintitati.",
'prefs-help-email-required'     => 'Lu nnirizzu email è nicissariu.',
'prefs-info'                    => 'Informazzioni di basi',
'prefs-i18n'                    => 'Internazionalizzazioni',
'prefs-signature'               => 'Firma',
'prefs-dateformat'              => 'Furmatu data',
'prefs-timeoffset'              => 'Uri di diffirenza',
'prefs-advancedediting'         => 'Opzioni avanzati',
'prefs-advancedrc'              => 'Opzioni avanzati',
'prefs-advancedrendering'       => 'Opzioni avanzati',
'prefs-advancedsearchoptions'   => 'Opzioni avanzati',
'prefs-advancedwatchlist'       => 'Opzioni avanzati',
'prefs-displayrc'               => 'Opzioni di visualizzazioni',
'prefs-diffs'                   => 'Diffirenzi',

# User rights
'userrights'                  => 'Gistioni dî dritti utenti',
'userrights-lookup-user'      => "Gistisci li gruppi di l'utenti",
'userrights-user-editname'    => "Trasi nu nomu d'utenti:",
'editusergroup'               => 'Cancia gruppi utenti',
'editinguser'                 => "Canciamentu dî dritti di l'utenti '''[[User:$1|$1]]''' ([[User talk:$1|{{int:talkpagelinktext}}]]{{int:pipe-separator}}[[Special:Contributions/$1|{{int:contribslink}}]])",
'userrights-editusergroup'    => "Cancia li gruppi di l'utenti",
'saveusergroups'              => 'Sarva gruppi utenti',
'userrights-groupsmember'     => 'Membru di:',
'userrights-groups-help'      => "È pussibili canciari li gruppi cui è assegnatu l'utenti.
* Na casedda di spunta silizzionata ndica l'appartinenza dill'utenti ô gruppu
* Na casedda di spunta nun silizzionata ndica la sou mancata appartinenza ô gruppu.
* Lu simbulu * ndica ca nun è pussibili livari l'appartinenza ô gruppo dopo avirla junciuta (o vici versa).",
'userrights-reason'           => 'Mutivu:',
'userrights-no-interwiki'     => "Nun si disponi di li pirmessi nicissari pi canciari li diritti di l'utenti ni autri siti.",
'userrights-nodatabase'       => 'Lu database $1 nu esisti o nun è lu database locali.',
'userrights-nologin'          => "Pi assignari li diritti di l'utenti è nicissariu [[Special:UserLogin|trasiri]] comu amministraturi.",
'userrights-notallowed'       => "L'utenti nun disponi dê pirmessi nicissari pi assignari diritti all'utenti.",
'userrights-changeable-col'   => 'Gruppi canciabili',
'userrights-unchangeable-col' => 'Gruppi nun canciabili',

# Groups
'group'               => 'Gruppu:',
'group-user'          => 'Utenti',
'group-autoconfirmed' => 'Utenti autocunfirmati',
'group-bot'           => 'Bot',
'group-sysop'         => 'Amministratura',
'group-bureaucrat'    => 'Buròcrati',
'group-suppress'      => 'Oversight',
'group-all'           => 'Utenti',

'group-user-member'          => 'Utenti',
'group-autoconfirmed-member' => 'Utenti autocunfirmatu',
'group-bot-member'           => 'Bot',
'group-sysop-member'         => 'Amministraturi',
'group-bureaucrat-member'    => 'Buròcrati',
'group-suppress-member'      => 'Oversight',

'grouppage-user'          => '{{ns:project}}:Utenti',
'grouppage-autoconfirmed' => '{{ns:project}}:Utenti autocunfirmati',
'grouppage-bot'           => '{{ns:project}}:Bot',
'grouppage-sysop'         => '{{ns:project}}:Amministratura',
'grouppage-bureaucrat'    => '{{ns:project}}:Buròcrati',
'grouppage-suppress'      => '{{ns:project}}:Oversight',

# Rights
'right-read'                  => 'Leggi pàggini',
'right-edit'                  => 'Cancia pàggini',
'right-createpage'            => 'Crea pàggini',
'right-createtalk'            => 'Crea pàggini di discussioni',
'right-createaccount'         => 'Crea novi account utenti',
'right-minoredit'             => 'Segna li canciamenti comu nichi',
'right-move'                  => 'Sposta pàggini',
'right-move-subpages'         => 'Sposta li pàggini nzemi a li rilativi suttapàggini',
'right-move-rootuserpages'    => "Canciari li pàggini di l'utilizzaturi dâ ràdica",
'right-movefile'              => 'Movi file',
'right-suppressredirect'      => 'Cancella nu redirect quannu sposti na pàggina a du tìtulu',
'right-upload'                => 'Carica file',
'right-reupload'              => 'Sovrascrivi nu file esistenti',
'right-reupload-own'          => 'Sovrascrivi nu file esistenti caricatu dô stissu utenti',
'right-reupload-shared'       => "Suprascrivi lucalmenti file prisenti nta l'archìviu cunnivisu",
'right-upload_by_url'         => 'Carica nu file da nu ndirizzu URL',
'right-purge'                 => 'Purga la cache dû situ senza cunfirma',
'right-autoconfirmed'         => 'Cancia pàggini semiprotetti',
'right-bot'                   => 'A trattari comu prucessu autumàticu',
'right-nominornewtalk'        => "Fa di manera tali chi li canci nichi nun fannu cumpàriri l'avvisu di misaggiu novu.",
'right-apihighlimits'         => 'Usa limiti cchiù àuti pi li ntirrugazzioni API',
'right-writeapi'              => "Usa l'API pi canciari lu wiki",
'right-delete'                => 'Scancella pàggini',
'right-bigdelete'             => 'Scancella pàggini cu la storia longa',
'right-deleterevision'        => 'Ammuccia e ammustra canci spicìfichi dî pàggini',
'right-deletedhistory'        => 'Visualizza li rivisioni dâ crunuluggìa cancillati senza lu testu assuciatu',
'right-browsearchive'         => 'Talìa pàggini cancillati',
'right-undelete'              => 'Riprìstina na pàggina',
'right-suppressrevision'      => 'Ritalìa e riprìstina virsioni ammucciati',
'right-suppressionlog'        => 'Talìa li log privati',
'right-block'                 => 'Blocca li canciamenti da parti di autri utenti',
'right-blockemail'            => "Mpidisci a n'utilizzaturi di mannari na mail",
'right-hideuser'              => "Blocca nu nomu d'utilizzaturi, ammucciannulu ô pùbblicu",
'right-ipblock-exempt'        => "Gnura li bloccatini di l'IP, chiddi autumàtici e chiddi di range di IP",
'right-proxyunbannable'       => 'Sàuta li blocchi supra li proxy',
'right-protect'               => 'Cancia li livedda di prutizzioni',
'right-editprotected'         => 'Cancia li pàggini prutiggiuti',
'right-editinterface'         => 'Cancia la ntirfaccia utilizzaturi',
'right-editusercssjs'         => 'Cancia li file CSS e JS di àutri utilizzatura',
'right-editusercss'           => 'Cancia li file CSS di àutri utilizzatura',
'right-edituserjs'            => 'Cancia li file JS di àutri utilizzatura',
'right-rollback'              => "Canciu n'arreri ràpidu pi l'utilizzaturi chi canciau na pàggina particulari",
'right-markbotedits'          => 'Marca li canci spicìfichi comu bot',
'right-noratelimit'           => 'Nun suggettu ô limiti di azzioni',
'right-import'                => 'Mpùrta pàggini di àutri wiki',
'right-importupload'          => 'Mpùrta pàggini di nu carricamentu di file',
'right-patrol'                => 'Marca li canci di àutri utilizzatura comu virificati',
'right-autopatrol'            => 'Marca autumaticamenti li sò canci comu virificati',
'right-patrolmarks'           => "Usa la funzioni di virifica di l'ùrtimi canci",
'right-unwatchedpages'        => 'Visualizza na lista di pàggini nun taliati',
'right-mergehistory'          => 'Funni la crunuluggìa dî pàggini',
'right-userrights'            => "Cancia tutti li diritta di l'utilizzaturi",
'right-userrights-interwiki'  => "Cancia li diritti di l'utilizzatura di àutri wiki",
'right-siteadmin'             => 'Blocca a sblocca lu databasi',
'right-override-export-depth' => 'Esporta pàggini cumpresi li pàggini culligati finu ô quintu liveddu',

# User rights log
'rightslog'      => "Dritti di l'utenti",
'rightslogtext'  => "Chistu è un log dî canciamenti a li dritti di l'utenti.",
'rightslogentry' => "hà canciatu l'appartinenza di $1 dû gruppu $2 a lu gruppu $3",
'rightsnone'     => '(nuddu)',

# Associated actions - in the sentence "You do not have permission to X"
'action-read'                 => 'lèggiri sta pàggina',
'action-edit'                 => 'canciari sta pàggina',
'action-createpage'           => 'criari pàggini',
'action-createtalk'           => 'creari pàggini di discussioni',
'action-createaccount'        => 'creari stu cuntu di utilizzaturi',
'action-minoredit'            => 'marcari stu canciu comu nicu',
'action-move'                 => 'spustari sta pàggina',
'action-move-subpages'        => 'spustari sta pàggina e li rilativi suttapàggini',
'action-move-rootuserpages'   => 'spustari li pàggini di utilizzaturi dâ ràdica',
'action-movefile'             => 'mòviri chistu file',
'action-upload'               => 'carricari stu file',
'action-reupload'             => 'suprascriviri stu file esistenti',
'action-reupload-shared'      => "suprascriviri stu file prisenti nti l'archiviu spartutu",
'action-upload_by_url'        => 'carricari stu file di nu nnirizzu URL',
'action-writeapi'             => 'usari li API n scrittura',
'action-delete'               => 'scancillari sta pàggina',
'action-deleterevision'       => 'scancillari sta virsioni',
'action-deletedhistory'       => 'talìa la crunuluggìa cancillata di sta pàggina',
'action-browsearchive'        => 'cercari pàggini scancillati',
'action-undelete'             => 'ricupirari sta pàggina',
'action-suppressrevision'     => 'rivìdiri e ripristinari li canci ammucciati',
'action-suppressionlog'       => 'visiunari stu log privatu',
'action-block'                => 'bluccari stu utenti n scrittura',
'action-protect'              => 'cancairi li livedda di prutizzioni pi sta pàggina',
'action-import'               => "mpurtari sta pàggina di n'àutra wiki",
'action-importupload'         => 'mpurtari sta pàggina di nu carricamentu di file',
'action-patrol'               => "marcari li canci li l'àutri utilizzatura comu virificati",
'action-autopatrol'           => 'marcari li tò canci comu virificati',
'action-unwatchedpages'       => 'visiunari la lista dî pàggini nun taliati',
'action-mergehistory'         => 'jùnciri la crunuluggìa di sta pàggina',
'action-userrights'           => "canciari tutti li diritti di l'utilizzaturi",
'action-userrights-interwiki' => "cancia li diritti di l'utenti supra a àutri wiki",
'action-siteadmin'            => 'bluccari e sbluccari lu database',

# Recent changes
'nchanges'                          => '$1 {{PLURAL:$1|canciamentu|canciamenti}}',
'recentchanges'                     => 'Ùrtimi canciamenti',
'recentchanges-legend'              => 'Opzioni ùrtimi canciamenti',
'recentchangestext'                 => 'Chista pàggina prisenta li canci cchiù ricenti ê cuntinuti dô situ.',
'recentchanges-feed-description'    => 'Stu feed riporta li canciamenti cchiù ricenti a li cuntinuti dû situ.',
'recentchanges-label-newpage'       => 'This edit havi creatu na nova pàggina',
'recentchanges-label-minor'         => 'Chista è nu canciamentu nnicu',
'recentchanges-label-bot'           => 'Stu canciamentu fu fattu dû bot',
'recentchanges-label-unpatrolled'   => 'Stu canciamentu nun havi ancora statu virificatu',
'rcnote'                            => "Ccà sutta {{PLURAL:$1|c'è lu canciamentu cchiù ricenti appurtatu|cci sunnu l'ùrtimi '''$1''' canciamenti appurtati}} ô situ {{PLURAL:$2|nta l'ùrtimi 24 uri|nta l'ùrtimi '''$2''' giorni}}; li dati sunnu aggiurnati ê $5 dû $4.",
'rcnotefrom'                        => 'Ccà sutta cci sunnu li canciamenti a pàrtiri dû <b>$2</b> (ammustrati nzinu ô <b>$1</b>).',
'rclistfrom'                        => 'Ammustra li canciamenti novi a pàrtiri di $1',
'rcshowhideminor'                   => '$1 li canciamenti nichi',
'rcshowhidebots'                    => '$1 li bot',
'rcshowhideliu'                     => "$1 l'utilizzatura cû nomu",
'rcshowhideanons'                   => "$1 l'utilizzatura anònimi",
'rcshowhidepatr'                    => '$1 li canciamenti cuntrullati',
'rcshowhidemine'                    => '$1 li mè canciamenti',
'rclinks'                           => "Ammustra l'ùrtimi $1 canciamenti nta l'ùrtimi $2 jorna <br />$3",
'diff'                              => 'diff',
'hist'                              => 'storia',
'hide'                              => 'ammuccia',
'show'                              => 'ammustra',
'minoreditletter'                   => 'n',
'newpageletter'                     => 'N',
'boteditletter'                     => 'b',
'number_of_watching_users_pageview' => '[ossirvata di {{PLURAL:$1|nu utenti|$1 utenti}}]',
'rc_categories'                     => 'Lìmita a li catigurìi (siparati di "|")',
'rc_categories_any'                 => 'Qualisiasi',
'newsectionsummary'                 => '/* $1 */ sizzioni nova',
'rc-enhanced-expand'                => 'Ammustra dittagghi (addumanna JavaScript)',
'rc-enhanced-hide'                  => 'Ammuccia dittagghi',

# Recent changes linked
'recentchangeslinked'          => 'Canciamenti culligati',
'recentchangeslinked-feed'     => 'Canciamenti culligati',
'recentchangeslinked-toolbox'  => 'Canciamenti culligati',
'recentchangeslinked-title'    => 'Canciamenti culligati a "$1"',
'recentchangeslinked-noresult' => 'Nuddu canciamentu ê pàggini culligati ntô pirìudu spicificatu.',
'recentchangeslinked-summary'  => "Chista pàggina spiciali ammustra li canciamenti cchiù ricenti ê pàggini culligati a chidda spicificata. Li pàggini taliati ni la tou [[Special:Watchlist|lista taliata]] sunu evidenziati 'n '''grassettu'''.",
'recentchangeslinked-page'     => 'Nnomu dâ pàggina:',
'recentchangeslinked-to'       => 'Vidi sulu li canciamenti ê pàggini culligati a chidda spicificata',

# Upload
'upload'                      => 'Càrrica nu file',
'uploadbtn'                   => 'Càrrica',
'reuploaddesc'                => 'Torna a lu mòdulu pi lu carricamentu.',
'uploadnologin'               => 'Accessu nun effittuatu',
'uploadnologintext'           => 'Hai a esèquiri [[Special:UserLogin|lu login]] pi carricari mmàggini o àutri files multimidiali.',
'upload_directory_missing'    => 'La directory di upload ($1) nun asisti e non pò èssiri criata dû webserver.',
'upload_directory_read_only'  => 'Lu server web nun è n gradu di scrìviri ntâ directory di upload ($1).',
'uploaderror'                 => 'Erruri ntô carricamentu',
'uploadtext'                  => "Usa lu mòdulu ccà sutta pi carricari file novi. Pi vìdiri o circari li file già carricati, talìa lu [[Special:FileList|log dî file carricati]]. Carricamenti di file e di virsioni novi di file sunnu riggistrati ntô [[Special:Log/upload|log di l'upload]], li cancillazzioni di file sunnu
riggistrati [[Special:Log/delete|ccà]].

Pi nziriri nu file nta na pàggina, fai nu lijami accussì:
* '''<tt><nowiki>[[</nowiki>{{ns:file}}<nowiki>:File.jpg]]</nowiki></tt>''' p'usari la virsioni ntera dû file
* '''<tt><nowiki>[[</nowiki>{{ns:file}}<nowiki>:File.png|200px|thumb|left|testu altirnativu]]</nowiki></tt>''' p'usari na virsioni làrica 200 pixel nziruta nta nu box, alliniata a manu manca e cu 'testu altirnativu' comu didascalìa
* '''<tt><nowiki>[[</nowiki>{{ns:media}}<nowiki>:File.ogg]]</nowiki></tt>''' pi culligari direttamenti a lu file senza vidìrilu.",
'upload-permitted'            => 'Tipi di file cunzintiti: $1.',
'upload-preferred'            => 'Tipi di file cunsigghiati: $1.',
'upload-prohibited'           => 'Tipi di file pruibbiti: $1.',
'uploadlog'                   => 'File carricati',
'uploadlogpage'               => 'File carricati',
'uploadlogpagetext'           => "Ccà sutta la lista di l'ùrtimi file carricati. Talìa la [[Special:NewFiles|gallarìa dî file novi]] pi na visioni ginirali.",
'filename'                    => 'Nomu dû file',
'filedesc'                    => 'Discrizzioni',
'fileuploadsummary'           => "Discrizzioni (auturi, fonti, discrizzioni, licenza d'usu, noti) dû file:",
'filereuploadsummary'         => 'Canciamenti ô file:',
'filestatus'                  => 'Nfurmazzioni supra lu copyright:',
'filesource'                  => 'Fonti:',
'uploadedfiles'               => 'File carricati',
'ignorewarning'               => "Gnora l'avvisu e sarva comu è gghiè lu file. La virsioni asistenti veni suvrascritta.",
'ignorewarnings'              => "Gnora li missaggi d'avvirtimentu dû sistema",
'minlength1'                  => 'Lu nomu dô file hà a èssiri cumpostu di armenu na lìttera.',
'illegalfilename'             => 'Lu nomu "$1" cunteni dî caràttiri nun ammessi ntê tìtuli dî pàggini. Dari a lu file un nomu diversu e pruvari a carricàrilu di novu.',
'badfilename'                 => 'Lu nomu dû file è statu cummirtutu n "$1".',
'filetype-badmime'            => 'Nun è cunzintitu carricari file di tipu MIME "$1".',
'filetype-bad-ie-mime'        => 'Mpussìbbili caricari lu file pirchì Internet Explorer lu canuscissi comu  "$1", ca è nu tipu di file disattivatu e ca putissi èssiri piriculusu.',
'filetype-unwanted-type'      => "Caricari file di tipu '''\".\$1\"''' è scunsigghiatu. {{PLURAL:\$3|Lu tipu di file cunsigghiatu è|Li tipi di file cunsigghiati sunnu}} \$2.",
'filetype-banned-type'        => "Caricari file di tipu '''\".\$1\"''' non è cunzintitu. {{PLURAL:\$3|Lu tipu di file cunzintitu è|Li tipi di file cunzintiti sunnu}} \$2.",
'filetype-missing'            => 'Lu file è privu d\'estinzioni (p\'asèmpiu ".jpg").',
'unknown-error'               => 'Ci fù un erruri scanusciutu',
'large-file'                  => 'Si raccumanna di nun supirari li diminzioni di $1 pi ognunu file; stu file è granni $2.',
'largefileserver'             => 'Lu file sùpira li diminzioni cunzintiti dâ cunfigurazzioni dû server.',
'emptyfile'                   => "Lu file appena carricatu pari èssiri vacanti. Chistu putissi èssiri duvutu a n'erruri ntô nomu dû file. Virificari ca si ntenni riarmenti carricari stu file.",
'fileexists'                  => "Nu file cu stu nomu asisti già, pi favuri cuntrolla '''<tt>[[:$1]]</tt>''' siddu nun sî sicuru di vulìrilu suvrascrìviri.
[[$1|thumb]]",
'filepageexists'              => "La pàggina di discrizzioni di stu file fu ggià criata nnû nnirizzu '''<tt>[[:$1]]</tt>''', macari si ancora non c'è nu file cu stu nomu. La discrizzioni di l'uggettu ca fu misa ntô mentri dû caricamentu non si vidi supra a la pàggina di discussioni. Pi fàrila cumpàriri ntâ pàggina di discussioni, c'è la nicissitati di mudificàrila a manu",
'fileexists-extension'        => "Nu file cu nu nomu simili a chistu esisti già; l'unica diffirenza è l'usu dê maiusculi nte l'estensioni: [[$2|thumb]]
* Nomu dû file carricatu: '''<tt>[[:$1]]</tt>'''
* Nome dû file esistenti: '''<tt>[[:$2]]</tt>'''
Pi favuri scegghiti n'àutru nomu.",
'fileexists-thumbnail-yes'    => "Lu file carricato sembra èssiri lu risurtatu di n'antiprima ''(thumbnail)''. [[$1|thumb]]
Virificari, pi cunfruntu, lu file '''<tt>[[:$1]]</tt>'''.
Siduu si tratta dâ stissa mmagini, nte dimenzioni urigginali, nun è nicissariu carricara àutri antiprimi.",
'file-thumbnail-no'           => "Lu nomu dô file accumenza cu '''<tt>$1</tt>'''.
Pari quinni èssiri lu risurtatu di n'antiprima ''(thumbnail)''.
Siddu si disponi dâ mmàggini ntâ risuluzzioni urigginali, si prega di carricàrila. 'N casu cuntrariu, si prega di canciari lu nomu dô file.",
'fileexists-forbidden'        => "Nu file cu stu nomu asisti già e nun pò essiri sovrascrittu. Turnari n'arreri e canciari lu nomu cu lu quali carricari lu file. [[File:$1|thumb|center|$1]]",
'fileexists-shared-forbidden' => "Nu file cu stu nomu asisti già nta l'archiviu dî risursi multimidiali cundivisi. Siddu voi ancora carricari lu file, pi favuri torna n'arreri e cancia lu nomu ca voi dari a lu file. [[File:$1|thumb|center|$1]]",
'file-exists-duplicate'       => 'Stu file è na copia duppiuni {{PLURAL:$1|dû|dî}} file ccà di sècutu:',
'file-deleted-duplicate'      => "Nu file lu stissu comu a chistu file ([[:$1]]) vinni scanciallatu prima di ora. S'aviss'a cuntrullari la stòria e lu picchì dâ scancillazzioni dû file prima di ri-caricàrilu.",
'uploadwarning'               => 'Avvisu di Upload',
'uploadwarning-text'          => 'Cancia cà sutta la discrizzioni di lu file e prova arré',
'savefile'                    => 'Sarva file',
'uploadedimage'               => 'hà carricatu "[[$1]]"',
'overwroteimage'              => 'carricata na nova virsioni di "[[$1]]"',
'uploaddisabled'              => 'Semu spiacenti, ma lu carricamentu di file è timpuraniamenti suspisu.',
'uploaddisabledtext'          => 'Lu carricamentu dî file nun è attivu supra a stu situ.',
'php-uploaddisabledtext'      => 'Li file PHP non sunnu abbilitati. Pi favuri cuntrolla li mpustazzioni dû file_uploads.',
'uploadscripted'              => "Stu file cunteni còdici HTML o di script, ca putissi èssiri nterpritato erroniamenti d'un browser web.",
'uploadvirus'                 => 'Lu file cunteni un virus! Ultiriuri nfurmazzioni: $1',
'sourcefilename'              => "Nomu dû file d'orìggini:",
'destfilename'                => 'Nomu dû file di distinazzioni:',
'upload-maxfilesize'          => 'Diminzioni màssima dû file: $1',
'watchthisupload'             => 'Talìa stu file',
'filewasdeleted'              => 'Nu file cu stu nomu hà statu già carricatu e cancillatu n passatu. Virificari $1 prima di carricàrilu di novu.',
'filename-bad-prefix'         => "Lu nomu dô file chi stai carricannu ncigna cu '''\"\$1\"''', chi è nu nomu non descrittivu assignatu, di solitu, automaticamenti dê màchini fotugràfici diggitali. Pi favuri scegghia nu nomu cchiù descrtittivu pi lu tò file.",
'filename-prefix-blacklist'   => ' #<!-- dassa sta lìnia comu è già --> <pre>
# Chista di sèquitu è la sintassi:
#   * Tutti li scritti a pàrtiri dô carattiri "#" sugnu commenti
#   * Tutti li lìnii non vacanti sugnu prefissi pi tipici nomi di file assignati automaticamenti dê màchini fotugràfici diggitali
CIMG # Casio
DSC_ # Nikon
DSCF # Fuji
DSCN # Nikon
DUW # arcuni cellulari
IMG # genericu
JD # Jenoptik
MGP # Pentax
PICT # arcuni
 #</pre> <!-- dassa sta lìnia comu è già -->',
'upload-success-subj'         => 'Carricamentu cumplitatu',

'upload-proto-error'        => 'Protucollu erratu',
'upload-proto-error-text'   => "Pi l'upload rimotu è nicissariu spicificari URL ca nìzzianu cu <code>http://</code> oppuru <code>ftp://</code>.",
'upload-file-error'         => 'Erruri nternu',
'upload-file-error-text'    => "S'hà virificatu un erruri nternu duranti la criazzioni d'un file timpuràniu supra lu server. Cuntattari un amministraturi di sistema.",
'upload-misc-error'         => "Erruri nun idintificatu pi l'upload",
'upload-misc-error-text'    => "S'hà virificatu un erruri nun idintificatu duranti lu carricamentu dû file. Virificari ca la URL è curretta e accissìbbili e pruvari di novu. Siddu lu prubbrema pirsisti, cuntattari un amministraturi di sistema.",
'upload-too-many-redirects' => "L'URL cuntineva troppi redirect",
'upload-unknown-size'       => 'Diminsioni scunusciuta',
'upload-http-error'         => "Ci fù n'erruri HTTP: $1",

# img_auth script messages
'img-auth-accessdenied' => 'Nun pò trasiri',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6'       => 'URL nun ragghiuncìbbili',
'upload-curl-error6-text'  => 'Mpussìbbili ragghiùnciri la URL spicificata. Virificari ca la URL è scritta currettamenti e ca lu situ n chistioni è attivu.',
'upload-curl-error28'      => "Tempu scadutu pi l'upload",
'upload-curl-error28-text' => 'Lu situ rimotu hà mpiegatu troppu tempu a arrispùnniri. Virificari ca lu situ è attivu, attènniri quarchi minutu e pruvari di novu, eventuarmenti nta un mumentu di tràfficu nicu.',

'license'            => "Licenza d'usu:",
'nolicense'          => 'Nudda silizzioni',
'license-nopreview'  => '(Antiprima nun disponibbili)',
'upload_source_url'  => '(na URL curretta e accissìbbili)',
'upload_source_file' => '(un file supra lu propiu computer)',

# Special:ListFiles
'listfiles-summary'     => "Sta pàggina spiciali ammustra tutti li file caricati.
Li file caricati di cchiù picca tempu sunnu ammustrati ô princìpiu dâ lista.
Pi canciari l'urdinamentu, fari clic supra a la ntistazzioni dâ culonna scigghiuta.",
'listfiles_search_for'  => 'Ricerca dâ mmàggini di nomu:',
'imgfile'               => 'file',
'listfiles'             => 'Alencu dî file',
'listfiles_date'        => 'Data',
'listfiles_name'        => 'Nomu',
'listfiles_user'        => 'Utenti',
'listfiles_size'        => 'Diminzioni (bytes)',
'listfiles_description' => 'Discrizzioni',
'listfiles_count'       => 'Virsioni',

# File description page
'file-anchor-link'          => 'Mmàggini',
'filehist'                  => 'Crunuluggìa dô file',
'filehist-help'             => 'Fari clic supra nu gruppu data/ura pi vìdiri lu file comu si prisintava ntô mumentu nnicatu.',
'filehist-deleteall'        => 'cancilla tuttu',
'filehist-deleteone'        => 'cancella',
'filehist-revert'           => 'riprìstina',
'filehist-current'          => 'correnti',
'filehist-datetime'         => 'Data/Ura',
'filehist-thumb'            => 'Miniatura',
'filehist-thumbtext'        => 'Miniatura di la virsioni dû $1',
'filehist-nothumb'          => 'Nudda miniatura',
'filehist-user'             => 'Utenti',
'filehist-dimensions'       => 'Diminsioni',
'filehist-filesize'         => 'Dimensioni dû file',
'filehist-comment'          => 'Oggettu',
'filehist-missing'          => 'File mancanti',
'imagelinks'                => "Pàggini c'ùsanu sta mmàggini",
'linkstoimage'              => '{{PLURAL:$1|La pàggina siquenti richiàma|Li $1 pàggini siquenti richiàmanu}} sta mmàggini:',
'linkstoimage-more'         => 'Chiossai di $1 {{PLURAL:$1|pàggina punta|pàggini pùntanu}} a stu file.
Di sècutu sunnu alincati sulu {{PLURAL:$1|la prima pàggina ca punta|li primi $1 pàggini ca pùntanu}} a stu file.
È dispunìbbilu nu [[Special:WhatLinksHere/$2|alencu cumpretu]].',
'nolinkstoimage'            => 'Nudda pàggina cunteni sta mmàggini.',
'morelinkstoimage'          => 'Visualizza [[Special:WhatLinksHere/$1|àutri link]] a stu file.',
'duplicatesoffile'          => '{{PLURAL:$1|Chistu|Chisti $1}} file {{PLURAL:$1|è nu dupppiuni|sunnu duppiuni}} di stu file ([[Special:FileDuplicateSearch/$2|cchiù dittagli]]):',
'sharedupload'              => 'Stu file veni di $1 e pò èssiri utilizzatu di àutri pruggetti wiki.',
'sharedupload-desc-there'   => "Stu file pruvieni da $1 e pò èssiri usatu da l'autri prugetti.
Talìari la [$2 paggina di discrizzioni dô file] pi autri nfurmazioni.",
'sharedupload-desc-here'    => "Stu file pruvieni da $1 e pò èssiri usatu da l'autri prugetti.
Appressu veni ammustrata la discrizioni prisenti nâ [$2 paggina di discrizzioni dô file].",
'filepage-nofile'           => 'Nun esisti nu file cu stu nnomu.',
'filepage-nofile-link'      => 'Nun esisti nu file cu stu nnomu, ma è pussibili [$1 caricarlu].',
'uploadnewversion-linktext' => 'Càrrica na virsioni nova di stu file',
'shared-repo-from'          => 'da $1',
'shared-repo'               => "n'archiviu cundivisu",

# File reversion
'filerevert'                => 'Riprìstina $1',
'filerevert-legend'         => 'Riprìstina file',
'filerevert-intro'          => "Stai pi ripristinari lu file '''[[Media:$1|$1]]''' â [virsioni $4 dô $2, $3].",
'filerevert-comment'        => 'Oggettu:',
'filerevert-defaultcomment' => 'Ripristinata la virsioni dô $1, $2',
'filerevert-submit'         => 'Riprìstina',
'filerevert-success'        => "'''Lu file [[Media:$1|$1]]''' hà statu ripristinatu â [$4 virsioni dô $2, $3].",
'filerevert-badversion'     => 'Nun esistanu virsiona locali pricidenti dô file cû timestamp richiestu.',

# File deletion
'filedelete'                  => 'Cancella $1',
'filedelete-legend'           => 'Cancella lu file',
'filedelete-intro'            => "Stai pi cancillari û file '''[[Media:$1|$1]]''' cu tutta la sou storia.",
'filedelete-intro-old'        => "Stai cancillannu la virsioni di '''[[Media:$1|$1]]''' dô [$4 $3, $2].",
'filedelete-comment'          => 'Mutivu:',
'filedelete-submit'           => 'Cancella',
'filedelete-success'          => "Lu file '''$1''' hà statu cancillatu.",
'filedelete-success-old'      => '<span class="plainlinks">La virsioni dô file \'\'\'[[Media:$1|$1]]\'\'\' dô $2, $3 hà statu cancillata.</span>',
'filedelete-nofile'           => "Nta {{SITENAME}} nun c'è nuddu file $1",
'filedelete-nofile-old'       => "'N archiviu nun ci sugnu virsioni di '''$1''' cu li carattiristichi nnicati.",
'filedelete-otherreason'      => 'Autra mutivazioni o mutivazioni n più:',
'filedelete-reason-otherlist' => 'Autra mutivazioni',
'filedelete-reason-dropdown'  => '*Mutivazzioni cchiù cumuni
** Viulazzioni di copyright
** File duplicatu',
'filedelete-edit-reasonlist'  => 'Cancia li mutivazioni pi la cancillazzioni',

# MIME search
'mimesearch'         => "Circata 'n basi a lu tipu MIME",
'mimesearch-summary' => "Sta pàggina cunzenti di filtrari li file 'n basi a lu tipu MIME. Nziriri la stringa di ricerca ntâ forma tipu/suttatipu, p'asempiu <tt>image/jpeg</tt>.",
'mimetype'           => 'Tipu MIME:',
'download'           => 'scarica',

# Unwatched pages
'unwatchedpages' => 'Pàggini nun taliati',

# List redirects
'listredirects' => 'Alencu di tutti li redirect',

# Unused templates
'unusedtemplates'     => 'Template nun utilizzati',
'unusedtemplatestext' => 'Nta sta pàggina vèninu alincati tutti li template (pàggini dû namespace Template) ca nun sunnu nclusi n nudda pàggina. Prima di scancillàrili è megghiu virificari ca li sìnguli template nun hannu àutri culligamenti ca ci tràsunu.',
'unusedtemplateswlh'  => 'àutri liami',

# Random page
'randompage'         => 'Na pàggina ammuzzu',
'randompage-nopages' => 'Nudda pàggina ntô namespace "$1".',

# Random redirect
'randomredirect'         => 'Un redirect a muzzu',
'randomredirect-nopages' => 'Nuddu rinnirizzamentu ntô namespace "$1".',

# Statistics
'statistics'                   => 'Statìstichi',
'statistics-header-pages'      => 'Statistichi pî pàggini',
'statistics-header-edits'      => 'Statistichi pî canci',
'statistics-header-views'      => 'Statistichî pî taliàti',
'statistics-header-users'      => "Li statìstichi di l'utilizzatura",
'statistics-header-hooks'      => 'Autri statistichi',
'statistics-articles'          => 'Pàggini di cuntinutu',
'statistics-pages'             => 'Pàggini',
'statistics-pages-desc'        => 'Tutti li pàggini dâ wiki, cu puru chiddi di discussioni, li rinnirizzamenti, ecc.',
'statistics-files'             => 'File carricati',
'statistics-edits'             => 'Canci a pàrtiri di la nstallazzioni di {{SITENAME}}',
'statistics-edits-average'     => 'Media dî canci pi pàggina',
'statistics-views-total'       => 'Visualizzazioni totali',
'statistics-views-peredit'     => 'Visualizzazioni pî canci',
'statistics-users'             => '[[Special:ListUsers|Utilizzatura]] riggistrati',
'statistics-users-active'      => 'Utilizzatura attivi',
'statistics-users-active-desc' => "Utilizzatura chi fìciru n'azzioni {{PLURAL:$1|ni l'ultimu ionnu|nî l'ultimi $1 ionna}}",
'statistics-mostpopular'       => 'Pàggini cchiù visitati',

'disambiguations'      => 'Pàggini cu liami ambìgui',
'disambiguationspage'  => 'Template:Disambigua',
'disambiguations-text' => "Li pàggini ntâ lista ca sequi cuntèninu dî culligamenti a '''pàggini di disambiguazzioni''' e nun a l'argumentu cui avìssiru a fari rifirimentu.<br />
Vèninu cunzidirati pàggini di disambiguazzioni tutti chiddi ca cuntèninu li template alincati 'n [[MediaWiki:Disambiguationspage]]",

'doubleredirects'            => 'Rinnirizzamenti duppi',
'doubleredirectstext'        => 'Chista pàggina alenca li pàggini chi rinnirìzzanu a àutri pàggini di rinnirizzamentu.
Ognuna riga cunteni li culligamenti a lu primu e a lu secunnu redirect, oltri â prima riga di testu dû secunnu redirect ca di sòlitu cunteni la pàggina di distinazzioni "curretta" â quali avissi a puntari macari lu primu redirect.
Li redirect <del>cancillati</del> furunu curretti.',
'double-redirect-fixed-move' => "[[$1]] fu spustata 'n modu automàticu, ora è nu redirect a [[$2]]",
'double-redirect-fixer'      => 'Curritturi di redirect',

'brokenredirects'        => "Riinnirizzamenti (''redirects'') rumputi.",
'brokenredirectstext'    => 'Li rinnirizzamenti siquenti pùntanu a pàggini ca nun asìstinu:',
'brokenredirects-edit'   => 'cancia',
'brokenredirects-delete' => 'cancella',

'withoutinterwiki'         => 'Pàggini senza interwiki',
'withoutinterwiki-summary' => 'Li pàggini nnicati ccà nun hànnu liami ê virsioni nta àutri lingui:',
'withoutinterwiki-legend'  => 'Prifissu',
'withoutinterwiki-submit'  => 'Ammustra',

'fewestrevisions' => 'Pàggini cu menu rivisioni',

# Miscellaneous special pages
'nbytes'                  => '$1 {{PLURAL:$1|byte|byte}}',
'ncategories'             => '$1 {{PLURAL:$1|catigurìa|catigurìi}}',
'nlinks'                  => '$1 {{PLURAL:$1|culligamentu|culligamenti}}',
'nmembers'                => '$1 {{PLURAL:$1|elementu|elementi}}',
'nrevisions'              => '$1 {{PLURAL:$1|rivisioni|rivisioni}}',
'nviews'                  => '$1 {{PLURAL:$1|vìsita|vìsiti}}',
'specialpage-empty'       => 'Sta pàggina spiciali è attuarmenti vacanti.',
'lonelypages'             => 'Pàggini òrfani',
'lonelypagestext'         => "Li pàggini nnicati ccà sutta nun hannu lijami ca vèninu d'àutri pàggini di {{SITENAME}}.",
'uncategorizedpages'      => 'Pàggini nun catigurizzati',
'uncategorizedcategories' => 'Catigurìi nun catigurizzati',
'uncategorizedimages'     => 'Mmàggini nun catigurizzati',
'uncategorizedtemplates'  => 'Template senza catigurìi',
'unusedcategories'        => 'Catigurìi vacanti',
'unusedimages'            => 'File nun utilizzati',
'popularpages'            => 'Pàggini cchiù visitati',
'wantedcategories'        => 'Catigurìi addumannati',
'wantedpages'             => 'Artìculi cchiù addumannati',
'wantedpages-badtitle'    => 'Tìtulu nun validu nô gruppu di risultati: $1',
'wantedfiles'             => 'File addumannati',
'wantedtemplates'         => 'Template addumannati',
'mostlinked'              => 'Pàggini supra cui agghìcanu cchiù liami',
'mostlinkedcategories'    => 'Catigurìi cchiù richiamati',
'mostlinkedtemplates'     => 'Template cchiù usati',
'mostcategories'          => 'Artìculi urdinati secunnu chiddi chi hannu cchiù catigurìi',
'mostimages'              => 'Mmàggini cchiù richiamati',
'mostrevisions'           => 'Artìculi urdinati secunnu chiddi chi hannu cchiù canciamenti',
'prefixindex'             => 'Ìnnici secunnu un prifissu',
'shortpages'              => 'Artìculi urdinati secunnu la lunchizza (li cchiù curti prima)',
'longpages'               => 'Artìculi urdinati secunnu la lunchizza (li cchiù lonchi prima)',
'deadendpages'            => 'Pàggini senza nisciuta',
'deadendpagestext'        => 'Li pàggini ndicati di sèquitu sunnu privi di culligamenti versu àutri pàggini dû situ.',
'protectedpages'          => 'Pàggini prutetti',
'protectedpages-indef'    => 'Sulu prutizzioni nfiniti',
'protectedpages-cascade'  => 'Sulu prutizzioni ricursivi',
'protectedpagestext'      => 'Sta pàggina hà statu prutiggiuta pi mpidìrinni lu canciamentu.',
'protectedpagesempty'     => 'A lu mumentu nun ci sunnu pàggini prutetti',
'protectedtitles'         => 'Tituli prutiggiuti',
'protectedtitlestext'     => 'Nun si ponnu criari pàggini ccu li tìtuli nnicati di sècutu',
'protectedtitlesempty'    => 'Nta stu mumentu nun ci sunnu tìtuli prutetti ccu li paràmitri nnicati.',
'listusers'               => 'Lista di utilizzatura',
'listusers-editsonly'     => 'Ammustra sulu utenti cu cuntribbuti',
'listusers-creationsort'  => 'Ordina pi data di criazioni',
'usereditcount'           => '$1 {{PLURAL:$1|cuntribbutu|cuntribbuti}}',
'usercreated'             => 'Creatu lu $1 ê $2',
'newpages'                => 'pàggini cchiù ricenti',
'newpages-username'       => 'Utenti:',
'ancientpages'            => 'pàggini cchiù vecchi',
'move'                    => 'sposta',
'movethispage'            => 'Sposta sta pàggina',
'unusedimagestext'        => "Accura, è pussìbbili fari lijami a li file d'àutri siti, usannu direttamenti la URL;
chisti putìssiru quinni èssiri utilizzati puru siddu cumpàrinu nta l'alencu.",
'unusedcategoriestext'    => 'Li siquenti pàggini dî catigurìi esìstinu, sibbeni li catigurìi currispunnenti sunnu vacanti.',
'notargettitle'           => 'Dati mancanti',
'notargettext'            => "Nun hà statu innicata na pàggina o un utenti 'n rilazzioni a lu quali esèquiri l'opirazzioni addumannata.",
'nopagetitle'             => 'La pàggina di distinazzioni nun asisti',
'nopagetext'              => "La pàggina c'addumannasti nun asisti.",
'pager-newer-n'           => '{{PLURAL:$1|1 di cchiù picca tempu|$1 di cchiù picca tempu}}',
'pager-older-n'           => '{{PLURAL:$1|1 di cchiù tempu|$1 di cchiù tempu}}',
'suppress'                => 'Oversight',

# Book sources
'booksources'               => 'Libbra secunnu lu còdici ISBN',
'booksources-search-legend' => 'Ricerca di fonti libbrari',
'booksources-isbn'          => 'Còdici ISBN:',
'booksources-go'            => 'Vai',
'booksources-text'          => "Di sèquitu veni prisintatu n'alencu di culligamenti versu siti sterni ca vìnninu libbra novi e usati, attraversu li quali è pussìbbili ottèniri maiuri nfurmazzioni supra lu testu circatu:",
'booksources-invalid-isbn'  => "L'ISBN datu pari ca nun è vàlidu; cuntrolla l'erruri di ricupiatura dâ surgenti urigginali.",

# Special:Log
'specialloguserlabel'  => 'Utenti:',
'speciallogtitlelabel' => 'Tìtulu:',
'log'                  => 'Log',
'all-logs-page'        => 'Tutti li log pubblici',
'alllogstext'          => "Prisintazzioni unificata di tutti li riggistri di {{SITENAME}}. Poi limitari li criteri di circata silizziunannu lu tipu di riggistru, l'utenti ca fici l'azzioni (case-sensitive), e/o la pàggina ntirissata (pur'idda case-sensitive).",
'logempty'             => 'Lu log nun cunteni elementi currispunnenti â ricerca.',
'log-title-wildcard'   => 'Attrova tituli chi ncignanu cu',

# Special:AllPages
'allpages'          => 'Tutti li paggini',
'alphaindexline'    => 'di $1 a $2',
'nextpage'          => 'Pàggina doppu ($1)',
'prevpage'          => 'Pàggina pricidenti ($1)',
'allpagesfrom'      => 'Ammustra li pàggini a pàrtiri di:',
'allpagesto'        => 'Ammustra li pàggini nzinu a:',
'allarticles'       => "Tutti l'artìculi",
'allinnamespace'    => 'Tutti li pàggini dû namespace $1',
'allnotinnamespace' => 'Tutti li pàggini, sparti lu namespace $1',
'allpagesprev'      => "'n arreri",
'allpagesnext'      => "'n avanti",
'allpagessubmit'    => 'Vai',
'allpagesprefix'    => 'Ammustra li pàggini chi accumìnzanu cu:',
'allpagesbadtitle'  => 'Lu tìtulu ndicatu pi la pàggina nun è vàlidu o cunteni prifissi interlingua o interwiki. Putissi noltri cuntèniri unu o cchiù caràttiri lu cui usu nun è ammissu ntê tìtuli.',
'allpages-bad-ns'   => 'Lu namespace "$1" nun asisti supra {{SITENAME}}.',

# Special:Categories
'categories'                    => 'Catigurìi',
'categoriespagetext'            => '{{PLURAL:$1|La catigurìa ccassutta cunteni|Li catigurìi ccassutta cuntèninu}} pàggini o file multimidiali.
Li [[Special:UnusedCategories|catigurìi vacanti]] nun sunnu ammustrati ccà.
Talìa macari li [[Special:WantedCategories|catigurìi addumannati]].',
'categoriesfrom'                => 'Ammustra li catigurìi a pàrtiri di:',
'special-categories-sort-count' => 'ordina pi nùmmuru',
'special-categories-sort-abc'   => 'ordina alfabbeticamenti',

# Special:DeletedContributions
'deletedcontributions'             => 'Cuntribbuti utenti scancillati',
'deletedcontributions-title'       => 'Cuntribbuti utenti scancillati',
'sp-deletedcontributions-contribs' => 'cuntribbuti',

# Special:LinkSearch
'linksearch'       => 'Lijami di fora',
'linksearch-pat'   => 'Mudellu di circata:',
'linksearch-ns'    => 'Namespace:',
'linksearch-ok'    => 'Cerca',
'linksearch-text'  => 'C\'è la pussibbilitati di fari usu di metacaràttiri, p\'asèmpiu "*.wikipedia.org".<br />
Protucolli suppurtati: <tt>$1</tt>',
'linksearch-line'  => '$1 prisenti ntâ pàggina $2',
'linksearch-error' => 'Li metacaràttiri si ponnu usari sulu a lu princìpiu dû nnirizzu.',

# Special:ListUsers
'listusersfrom'      => "Ammustra l'utenti a pàrtiri di:",
'listusers-submit'   => 'Ammustra',
'listusers-noresult' => "Nuddu utenti attruvatu. Virificari l'usu di caràttiri maiùsculi/minùsculi.",
'listusers-blocked'  => '(bloccatu)',

# Special:ActiveUsers
'activeusers'            => 'Lista dî utenti attivi',
'activeusers-count'      => '$1 recent {{PLURAL:$1|canciamento|canciamenti ricenti}}',
'activeusers-from'       => 'Ammustra li utenti a pàrtiri da:',
'activeusers-hidebots'   => 'Bot ammucciati',
'activeusers-hidesysops' => 'Amministratura ammucciati',
'activeusers-noresult'   => 'Nussun utenti truvatu.',

# Special:Log/newusers
'newuserlogpage'     => 'Novi utenti',
'newuserlogpagetext' => 'Di sècutu vènunu elincati li criazzioni di cunti novi (account).',

# Special:ListGroupRights
'listgrouprights'                      => 'Diritti dô gruppu utenti',
'listgrouprights-summary'              => "Ccà sutta sunnu elincati li gruppi utenti difiniti pi sta wiki, cu li dritti d'accessu assuciati a iddi. Pi sapìrinni chiossai supra li dritti, lèggiti [[{{MediaWiki:Listgrouprights-helppage}}|sta pàggina]].",
'listgrouprights-key'                  => '* <span class="listgrouprights-granted">Dirittu assegnatu</span>
* <span class="listgrouprights-revoked">Dirittu revocatu</span>',
'listgrouprights-group'                => 'Gruppu',
'listgrouprights-rights'               => 'Diritti',
'listgrouprights-helppage'             => 'Help:Diritti dô gruppu',
'listgrouprights-members'              => '(Elencu di cu ni fa parti)',
'listgrouprights-addgroup'             => 'Pò jùnciri {{PLURAL:$2|lu gruppu|li gruppi}}: $1',
'listgrouprights-removegroup'          => 'Pò livari {{PLURAL:$2|lu gruppu|li gruppi}}: $1',
'listgrouprights-addgroup-all'         => 'Pò jùnciri a tutti li gruppi',
'listgrouprights-removegroup-all'      => 'Pò livari tutti li gruppi',
'listgrouprights-addgroup-self'        => 'Pò jùnciri {{PLURAL:$2|lu gruppu|li gruppi}} a lu propriu account: $1',
'listgrouprights-removegroup-self'     => 'Pò livari {{PLURAL:$2|nu gruppu|li gruppi}} da lu propriu account: $1',
'listgrouprights-addgroup-self-all'    => 'Junci tutti li gruppa ô propriu account',
'listgrouprights-removegroup-self-all' => 'Può livari tutti li gruppi dô propriu account',

# E-mail user
'mailnologin'      => 'Nuddu ndirizzu cui mannari lu missaggiu',
'mailnologintext'  => 'Hai a fari lu [[Special:UserLogin|login]] e aver riggistratu na casella e-mail vàlida ntê tò [[Special:Preferences|prifirenzi]] pi mannari posta alittrònica a àutri Utenti.',
'emailuser'        => "Manna n'imail a stu utenti",
'emailpage'        => "Manna un missaggiu e-mail a l'utenti",
'emailpagetext'    => "Siddu st'utenti lassau nu nnirizzu email vàlidu ntê sò prifirenzi, ci putiti mannari nu missaggiu. Lu nnirizzu email ca lassasti ntê tò [[Special:Preferences|prifirenzi]] và a cumpàriri comu mittenti di lu email, di manera ca lu distinatariu ti pò arrispùnniri.",
'usermailererror'  => "L'uggettu mail hà ristituitu l'erruri:",
'defemailsubject'  => 'Missaggiu di {{SITENAME}}',
'noemailtitle'     => 'Nuddu ndirizzu e-mail',
'noemailtext'      => "St'utilizzaturi nun spicificau nu nnirizzu email vàlidu.",
'nowikiemailtitle' => 'E-mail nun pirmittuta',
'nowikiemailtext'  => "St'utenti scigghìu di non aricèviri missaggi di posta alittrònica di l'àutri utenti.",
'email-legend'     => "Manna n'e-mail a n'àutru utenti di {{SITENAME}}",
'emailfrom'        => 'Di:',
'emailto'          => 'A:',
'emailsubject'     => 'Uggettu:',
'emailmessage'     => 'Missaggiu:',
'emailsend'        => 'Mannari',
'emailccme'        => 'Mànnami na copia dû missaggiu.',
'emailccsubject'   => 'Copia dû missaggiu mannatu a $1: $2',
'emailsent'        => 'Imeil mannata',
'emailsenttext'    => 'Lu tò missaggiu imeil ha statu mannatu.',
'emailuserfooter'  => 'Sta e-mail fu mannata di $1 a $2 attraversu la funzionu "Manna nu missàggiu e-mail a l\'utenti" supra {{SITENAME}}.',

# Watchlist
'watchlist'            => 'Lista taliata mia',
'mywatchlist'          => 'Lista taliata mia',
'nowatchlist'          => "Nun hai innicatu pàggini a tèniri d'occhiu.",
'watchlistanontext'    => "Pi visualizzari e canciari l'alencu di l'ossirvati spiciali è nicissariu $1.",
'watchnologin'         => 'Nun hai effittuatu lu login',
'watchnologintext'     => 'Hai a fari prima lu [[Special:UserLogin|login]] pi canciari la tò lista di ossirvati spiciali.',
'addedwatchtext'       => "La pàggina \"[[:\$1]]\" è stata agghiunciuta â propia [[Special:Watchlist|lista di l'ossirvati spiciali]]. D'ora n poi, li mudìfichi appurtati â pàggina e â sò discussioni vèninu alincati n chidda sedi; lu tìtulu dâ pàggina appari n '''grassettu''' ntâ pàggina di l' [[Special:RecentChanges|ùrtimi canciamenti]] pi rinnìrilu cchiù visìbbili. Siddu n un secunnu tempu s'addisìa eliminari la pàggina dâ lista di l'ossirvati spiciali, fari clic supra \"nun sèquiri\" ntâ barra n àutu.",
'removedwatchtext'     => 'La pàggina "[[:$1]]" hà statu eliminata dâ lista di l\'ossirvati spiciali.',
'watch'                => 'talìa',
'watchthispage'        => 'talìa sta pàggina',
'unwatch'              => 'Nun taliari',
'unwatchthispage'      => 'Smetti di sèquiri',
'notanarticle'         => "Nun è n'artìculu",
'notvisiblerev'        => 'La revisioni fu cancillata',
'watchnochange'        => 'Nudda dî pàggini ossirvati hà statu canciata ntô pirìudu cunzidiratu.',
'watchlist-details'    => 'La lista dê pàggini taliati cunteni {{PLURAL:$1|na pàggina (cu la rispittiva pàggina di discussioni)|$1 pàggini (cu li rispittivi pàggini di discussioni)}}.',
'wlheader-enotif'      => '* La nutìfica via e-mail è attivata.',
'wlheader-showupdated' => "* Li pàggini ca hannu statu canciati dâ tò ùrtima vìsita sunnu evidinziati 'n '''grassettu'''",
'watchmethod-recent'   => "cuntrollu dî canciamenti ricenti pi l'ossirvati spiciali",
'watchmethod-list'     => "cuntrollu di l'ossirvati spiciali pi canciamenti ricenti",
'watchlistcontains'    => 'La tò lista di ossirvati spiciali cunteni {{PLURAL:$1|na pàggina|$1 pàggini}}.',
'iteminvalidname'      => "Prubbremi cu la pàggina '$1', nomu nun vàlidu...",
'wlnote'               => "Sutta attrovi l'ùrtim{{PLURAL:$1|u canciamentu|i $1 canciamenti}}, nta l'ùrtim{{PLURAL:$1|a ura|i '''$2''' uri}}.",
'wlshowlast'           => "Ammustra l'ùrtimi $1 uri $2 jorna $3",
'watchlist-options'    => 'Opzioni ussirvati spiciali',

# Displayed when you click the "watch" button and it is in the process of watching
'watching'   => "Junta a l'ussirvati spiciali...",
'unwatching' => "Scancillazzioni di l'ussirvati spiciali...",

'enotif_mailer'                => 'Sistema di nutìfica via e-mail di {{SITENAME}}',
'enotif_reset'                 => 'Segna tutti li pàggini comu già visitati',
'enotif_newpagetext'           => 'Chista è na pàggina nova.',
'enotif_impersonal_salutation' => 'Utenti di {{SITENAME}}',
'changed'                      => 'canciatu',
'created'                      => 'criatu',
'enotif_subject'               => 'La pàggina $PAGETITLE di {{SITENAME}} hà stata $CHANGEDORCREATED di $PAGEEDITOR',
'enotif_lastvisited'           => 'Cunzurta $1 pi vìdiri tutti li canciamenti dâ tò ùrtima vìsita.',
'enotif_lastdiff'              => 'Vìdiri $1 pi visualizzari lu canciamentu.',
'enotif_anon_editor'           => 'utenti anonimu $1',
'enotif_body'                  => 'Gintili $WATCHINGUSERNAME,

la pàggina $PAGETITLE di {{SITENAME}} hà stata $CHANGEDORCREATED \'n data $PAGEEDITDATE di $PAGEEDITOR; la virsioni attuali s\'attrova a lu ndirizzu $PAGETITLE_URL.

$NEWPAGE

Riassuntu dû canciamentu, nziritu di l\'auturi: $PAGESUMMARY $PAGEMINOREDIT

Cuntatta l\'auturi dû canciamentu:
via e-mail: $PAGEEDITOR_EMAIL
supra lu situ: $PAGEEDITOR_WIKI

Nun vèninu mannati àutri canciamenti \'n caso di ultiriuri canciamenti, a menu ca tu nun vìsiti la pàggina. Noltri, è pussìbbili rimpustari l\'avvisu di nutìfica pi tutti li pàggini ntâ lista di l\'ussirvati spiciali.

             Lu sistema di nutìfica di {{SITENAME}}, a lu tò sirvizziu

--
Pi mudificari li mpustazzioni dâ lista di l\'ussirvati spiciali, vìsita
{{canonicalurl:{{#special:EditWatchlist}}}}

Pi dari lu tò feedback e arricèviri ultiriuri assistenza:
{{canonicalurl:{{MediaWiki:Helppage}}}}',

# Delete
'deletepage'             => 'Elìmina la pàggina',
'confirm'                => 'Cunferma',
'excontent'              => "Lu cuntinutu era: '$1'",
'excontentauthor'        => "Lu cuntinutu era: '$1' (e lu sulu cuntribbuturi era '[[Special:Contributions/$2|$2]]')",
'exbeforeblank'          => "Lu cuntinutu prima dû svacantamentu era: '$1'",
'exblank'                => 'la pàggina era vacanti',
'delete-confirm'         => 'Cancella "$1"',
'delete-legend'          => 'Cancella',
'historywarning'         => 'Accura: La pàggina ca stai pi cancillari havi na cronoluggìa:',
'confirmdeletetext'      => "Stai cancillannu dû databbasi na pàggina o na mmàggini cu tutta la sò storia di manera pirmanenti. Pi fauri, cunferma ca tu ntenni fari sta cosa, ca tu hai caputu li cunziquenzi, e chi lu fai secunnu li linìi guida stabbiliti 'n [[{{MediaWiki:Policy-url}}]].",
'actioncomplete'         => 'Azzioni cumpritata',
'actionfailed'           => 'Azioni fallita',
'deletedtext'            => '"$1" ha statu cancillatu.
Talìa $2 pi na lista di cancillazzioni ricenti.',
'dellogpage'             => 'Cancillazzioni',
'dellogpagetext'         => 'Di sèquitu sunnu alincati li pàggini cancillati di ricenti.',
'deletionlog'            => 'Log dî cancillazzioni',
'reverted'               => 'Ripristinata la virsioni pricidenti',
'deletecomment'          => 'Mutivu:',
'deleteotherreason'      => 'Autra mutivazioni o mutivazioni in più:',
'deletereasonotherlist'  => 'Autra mutivazioni',
'deletereason-dropdown'  => "*Mutivazzioni cchiù cumuni pi la cancillazzioni
** Dumanna di l'auturi
** Viulazzioni di copyright
** Vannalismu",
'delete-edit-reasonlist' => 'Cancia li mutivazzioni pi la cancillazioni',
'delete-toobig'          => 'La storia dî canciamenti di sta pàggina è assai longa (ortri $1 {{PLURAL:$1|rivisioni|rivisioni}}). La sò scancillazzioni vinni limitata pi scanzari la pussibbilitati di criari senza vulìrilu prubbremi di funziunamentu ô database di {{SITENAME}}.',
'delete-warning-toobig'  => 'La storia di sta pàggina è assai longa (ortri $1 {{PLURAL:$1|rivisioni|rivisioni}}). La sò scancillazzioni pò dari prubbremi di funziunamentu ô database di {{SITENAME}}; prucèdiri cu attinzioni.',

# Rollback
'rollback'         => 'Annulla li canciamenti',
'rollback_short'   => "Canciu n'arreri",
'rollbacklink'     => "canciu n'arreri",
'rollbackfailed'   => "Canciu 'n arreri fallitu",
'cantrollback'     => "Mpussìbbili annullari li canciamenti; l'utenti ca l'effittuau è l'ùnicu a aviri cuntribbuiutu â pàggina.",
'alreadyrolled'    => "Nun è pussìbbili annullari li canciamenti appurtati â pàggina [[:$1]] di parti di [[User:$2|$2]] ([[User talk:$2|discussioni]]{{int:pipe-separator}}[[Special:Contributions/$2|{{int:contribslink}}]]); n'àutru utenti hà già canciatu la pàggina oppuru hà effittuatu lu rollback.

Lu canciamentu cchiù ricenti â pàggina fu appurtata di [[User:$3|$3]] ([[User talk:$3|discussioni]]{{int:pipe-separator}}[[Special:Contributions/$3|{{int:contribslink}}]]).",
'editcomment'      => "Â discrizzioni â mudìfica era: \"''\$1''\".",
'revertpage'       => "Canciu narrè di [[Special:Contributions/$2|$2]] ([[User talk:$2|Discussioni]]) cu l'ùrtima virsioni di [[User:$1|$1]]",
'rollback-success' => 'Annullati li canciamenti di $1; ritornata â virsioni pricidenti di $2.',

# Edit tokens
'sessionfailure' => 'S\'hà virificatu un prubbrema cu la tò sissioni di login;
lu sistema nun hà esiquitu lu cumannu mpartitu pi pricauzzioni.
Pi favuri utilizza lu tastu "\'n arreri" dû tò browser, ricàrrica la pàggina e riprova di novu.',

# Protect
'protectlogpage'              => 'Pàggini prutetti',
'protectlogtext'              => 'Lista di prutezzioni/sprutezzioni dî pàggini. Vidi macari la [[Special:ProtectedPages|lista dî pàggini prutetti]].',
'protectedarticle'            => 'hà prutettu [[$1]]',
'modifiedarticleprotection'   => 'canciàu lu liveddu di prutizzioni di "[[$1]]"',
'unprotectedarticle'          => 'hà sprutettu [[$1]]',
'movedarticleprotection'      => 'spustau la prutizzioni di "[[$2]]" a "[[$1]]"',
'protect-title'               => 'Prutezzioni di "$1"',
'prot_1movedto2'              => '[[$1]] spustatu a [[$2]]',
'protect-legend'              => 'Cunferma la prutezzioni',
'protectcomment'              => 'Mutivu:',
'protectexpiry'               => 'Scadenza',
'protect_expiry_invalid'      => 'Scadenza nun vàlida.',
'protect_expiry_old'          => 'Scadenza già trascursa.',
'protect-text'                => "Ccà poi vìdiri e canciari lu liveddu di prutezzioni pi la pàggina '''$1'''.",
'protect-locked-blocked'      => "Nun pò canciari li liveddi di prutizzioni quannu sî bloccatu. Li mpostazzioni correnti pâ pàggina sugnu '''$1''':",
'protect-locked-dblock'       => "Mpussibbili canciari li liveddi di prutizzioni pi nu bloccu dô database.
Li mpostazzioni correnti pâ pàggina sugnu '''$1''':",
'protect-locked-access'       => "Nun hai li pirmessi nicissari pi canciari li liveddi di prutizzioni dâ pàggina.
Li mpostazzioni correnti pâ pàggina sugnu '''$1''':",
'protect-cascadeon'           => 'A lu mumentu sta pàggina è bluccata, poichì nclusa nt{{PLURAL:$1|â pàggina innicata di sèquitu, supra la quala|ê pàggini innicati di sèquitu, supra li quali}} hà statu attivata la prutezzioni ricursiva. È pussìbbili mudificari lu liveddu di prutezzioni di sta pàggina ma lu liveddu di prutezzioni arresta chiddu difinitu dâ prutezzioni ricursiva, siddu la stissa nun veni canciata.',
'protect-default'             => "Auturizza tutti l'utenti",
'protect-fallback'            => 'Richiedi lu pirmissu "$1"',
'protect-level-autoconfirmed' => "Blocca l'utenti nun riggistrati",
'protect-level-sysop'         => 'Sulu li amministratura',
'protect-summary-cascade'     => 'ricursiva',
'protect-expiring'            => 'scadi a li $1 (UTC)',
'protect-expiry-indefinite'   => 'senza fini',
'protect-cascade'             => 'Prutezzioni ricursiva (pruteggi tutti li pàggini nclusi nta chista).',
'protect-cantedit'            => 'Nun è possibili canciari li livelli di prutizzioni pi la pàggina n quantu nun si disponi dî pirmessi necissari pi canciari la pàggina stissa.',
'protect-othertime'           => "Durata non 'n alencu:",
'protect-othertime-op'        => "durata non 'n alencu",
'protect-existing-expiry'     => 'Scadenza attuali: $2, $3',
'protect-otherreason'         => 'Àustri mutivi/dittagghi:',
'protect-otherreason-op'      => 'àutri mutivi/dittagghi',
'protect-dropdown'            => '*Mutivi cumuni di prutizzioni
** Vannalìsimi fatti cchiossai di na vota
** Nzirimenti di spam fatti cchiossai di na vota
** Edit war
** Pàggina usata assai',
'protect-edit-reasonlist'     => 'Cancia li mutivi pâ prutizzioni',
'protect-expiry-options'      => '1 ura:1 hour,1 jornu:1 day,1 simana:1 week,2 simani:2 weeks,1 misi:1 month,3 misi:3 months,6 misi:6 months,1 annu:1 year,nfinitu:infinite',
'restriction-type'            => 'Pirmissu',
'restriction-level'           => 'Liveddu di ristrizzioni:',
'minimum-size'                => 'Dimensioni minima',
'maximum-size'                => 'Dimensioni massima:',
'pagesize'                    => '(byte)',

# Restrictions (nouns)
'restriction-edit'   => 'Cancia',
'restriction-move'   => 'Sposta',
'restriction-create' => 'Criazioni',
'restriction-upload' => 'Càrica',

# Restriction levels
'restriction-level-sysop'         => 'prutetta',
'restriction-level-autoconfirmed' => 'semi-prutetta',
'restriction-level-all'           => 'tutti li liveddi',

# Undelete
'undelete'                     => 'Visualizza pàggini cancillati',
'undeletepage'                 => 'Talìa e ricùpira li pàggini cancillati',
'undeletepagetitle'            => "'''Quantu segui è compostu da rivisioni cancillati di [[:$1]]'''.",
'viewdeletedpage'              => 'Talìa li pàggini cancillati',
'undeletepagetext'             => "{{PLURAL:$1|La pàggina ndicata di sècutu fu scancillata|Li $1 pàggini foru scancillati}}, ma {{PLURAL:$1|è|sunnu}} ancora nti l'archìviu e picciò {{PLURAL:$1|pò èssiri arripigghiata|ponnu èssiri aripigghiati}}. L'archìviu pò èssiri svacantatu piriodicamenti.",
'undelete-fieldset-title'      => 'Ripigghia rivisioni',
'undeleteextrahelp'            => "Pi ricupirari la storia ntera dâ pàggina, fari clic supra '''''Riprìstina''''' senza silizziunari nudda casella. P'effittuari un riprìstinu silittivu, silizziunari li caselli currispunnenti a li rivisioni a ripristinari e fari clic supra '''''Riprìstina'''''. Facennu clic supra '''''Reset''''' vèninu disilizziunati tutti li caselli e svacantatu lu spazziu pi lu cummentu.",
'undeleterevisions'            => '{{PLURAL:$1|Na rivisioni|$1 rivisioni}} n archiviu',
'undeletehistory'              => "Siddu ricùpiri st'artìculu, tutti li sò rivisioni vèninu ricupirati ntâ cronoluggìa rilativa. Siddu doppu la cancillazzioni na pàggina nova cu lu stissu tìtulu fu criata, li rivisioni ricupirati sunnu nziriti ntâ cronoluggìa e la virsioni attuarmenti online dâ pàggina nun veni canciata.",
'undeleterevdel'               => 'Lu riprìstinu nun è fattu siddu cancella parziarmenti la virsioni currenti dâ pàggina o dû file. Nta stu casu, è nicissariu livari lu signu di spunta o lu scuramentu dê rivisioni cancillati cchiù ricenti.',
'undeletehistorynoadmin'       => "Sta pàggina hà statu cancillata. Lu mutivu dâ cancillazzioni è ammustratu ccà sutta, nzèmmula a li dittagghi di l'utenti c'hà canciatu sta pàggina prima dâ cancillazzioni. Lu testu cuntinutu ntê rivisioni cancillati è dispunìbbili sulu a li amministratura.",
'undelete-revision'            => 'Rivisioni scancillata di $1, nsiruta lu $4$ ê $5$ di $3$:',
'undeleterevision-missing'     => "Rivisioni errata o mancanti. Lu culligamentu è erratu oppuru la rivisioni hà statu già ripristinata o eliminata di l'archiviu.",
'undelete-nodiff'              => "Nun s'havi attruvatu na rivisioni pricidenti.",
'undeletebtn'                  => 'Riprìstina!',
'undeletelink'                 => 'riprìstina',
'undeleteviewlink'             => 'talìa',
'undeletereset'                => 'Rimposta',
'undeleteinvert'               => 'Scancia la silizzioni',
'undeletecomment'              => 'Cummentu:',
'undeletedrevisions'           => '$1 rivisioni ricupirat{{PLURAL:$1|a|i}}',
'undeletedrevisions-files'     => '{{PLURAL:$1|na rivisioni|$1 rivisioni}} e {{PLURAL:$2|nu file ricupiratu|$2 file ricupirati}}',
'undeletedfiles'               => '{{PLURAL:$1|un file ricupiratu|$1 file ricupirati}}',
'cannotundelete'               => 'Lu ricùpiru nun è arrinisciutu: quarcunu àutru putissi aviri già ricupiratu la pàggina.',
'undeletedpage'                => "'''La pàggina $1 hà statu ricupirata''' Cunzurta lu [[Special:Log/delete|log dî cancillazzioni]] pi vìdiri li cancillazzioni e li ricùpiri cchiù ricenti.",
'undelete-header'              => 'Vidi lu [[Special:Log/delete|log dî cancillazzioni]] pi li pàggini cancillati di ricenti.',
'undelete-search-box'          => 'Cerca li pàggini cancillati',
'undelete-search-prefix'       => 'Ammustra li pàggini lu cui tìtulu accumincia cu:',
'undelete-search-submit'       => 'Cerca',
'undelete-no-results'          => "Nuddu risurtatu attruvatu nta l'archìviu dî pàggini scancillati.",
'undelete-filename-mismatch'   => 'Mpussibbili annullari la cancillazzioni dâ rivisioni dô file cû timestamp $1: nomu file nun currispunnenti.',
'undelete-bad-store-key'       => 'Mpussibile annullari la cancillazzioni dâ rivisioni dû file cû timestamp $1: file nun dispunibbili prima dâ cancillazzioni.',
'undelete-cleanup-error'       => 'Erruri ntâ cancillazzioni dû file d\'archiviu nun usatu "$1".',
'undelete-missing-filearchive' => "Mpussibbili ripristinari l'ID $1 de l'archiviu file picchì nun è ntô databbasi. Pò èssiri già statu ripristinatu.",
'undelete-error-short'         => 'Erruri ntô ripristinu dû file: $1',
'undelete-error-long'          => 'Si virificaru erruri ntô tentativu di annullari la cancillazzioni dô file:

$1',
'undelete-show-file-confirm'   => 'Si sicuru di vuliri taliari na rivisioni dû file scancillatu "<nowiki>$1</nowiki>" di $2 a $3?',
'undelete-show-file-submit'    => 'Si',

# Namespace form on various pages
'namespace'      => 'Tipu di pàggina:',
'invert'         => 'scancia la silizzioni',
'blanknamespace' => '(Principali)',

# Contributions
'contributions'       => 'cuntribbuti',
'contributions-title' => 'Cuntribbuti di $1',
'mycontris'           => 'Li mei cuntribbuti',
'contribsub2'         => 'Pi $1 ($2)',
'nocontribs'          => 'Secunnu sti criteri nun ci sunnu canci o cuntribbuti.',
'uctop'               => '(ùrtima pi la pàggina)',
'month'               => 'A pàrtiri dô mese (e pricidenti):',
'year'                => "A pàrtiri di l'annu (e pricidenti):",

'sp-contributions-newbies'       => "Ammustra sulu li cuntribbuti di l'utenti novi",
'sp-contributions-newbies-sub'   => 'Pi li utenti novi',
'sp-contributions-newbies-title' => "Cuntribbuti di l'utenti novi",
'sp-contributions-blocklog'      => 'log dî blocchi',
'sp-contributions-deleted'       => 'cuntribbuti utenti scancillati',
'sp-contributions-logs'          => 'riggistri',
'sp-contributions-talk'          => 'discussioni',
'sp-contributions-userrights'    => 'gistioni dî dritti utenti',
'sp-contributions-search'        => 'Ricerca cuntribbuti',
'sp-contributions-username'      => 'Nnirizzu IP o nomu utenti:',
'sp-contributions-submit'        => 'Ricerca',

# What links here
'whatlinkshere'            => 'Chi punta ccà',
'whatlinkshere-title'      => 'Pàggini ca pùntanu a "$1"',
'whatlinkshere-page'       => 'Pàggina:',
'linkshere'                => "Sti pàggini hannu nu liami a '''[[:$1]]''':",
'nolinkshere'              => "Nudda pàggina havi nu liami a '''[[:$1]]'''.",
'nolinkshere-ns'           => "Nun ci sugnu pàggini chi puntano a '''[[:$1]]''' ntô namespace silizziunatu.",
'isredirect'               => 'pàggina di rinnirizzamentu',
'istemplate'               => 'nchiusioni',
'isimage'                  => 'link mmàggini',
'whatlinkshere-prev'       => '{{PLURAL:$1|pricidenti|pricidenti $1}}',
'whatlinkshere-next'       => '{{PLURAL:$1|succissivu|succissivi $1}}',
'whatlinkshere-links'      => '← liami',
'whatlinkshere-hideredirs' => '$1 redirect',
'whatlinkshere-hidetrans'  => '$1 nclusioni',
'whatlinkshere-hidelinks'  => '$1 link',
'whatlinkshere-hideimages' => '$1 link di mmàggini',
'whatlinkshere-filters'    => 'Filtri',

# Block/unblock
'blockip'                         => "Blocca l'utenti",
'blockip-legend'                  => "Blocca l'utenti",
'blockiptext'                     => "Usa lu mòdulu cassutta pi bluccari la pussibbilità di scrìviri pi n'utenti o pi nu ndirizzu IP spicìficu. Chistu s'havi a fari sulu pi privèniri lu vannalismu e secunnu la [[{{MediaWiki:Policy-url}}|pulìtica di {{SITENAME}}]]. Scrivi na raggiùni valida ccà sutta (pi asempiu, cita li pàggini chi foru vannalizzati).",
'ipadressorusername'              => 'Ndirizzu IP o nomu utenti:',
'ipbexpiry'                       => 'Durata dû bloccu:',
'ipbreason'                       => 'Mutivu:',
'ipbreasonotherlist'              => 'Àutru mutivu',
'ipbreason-dropdown'              => '*Mutivi cchiù cumuni pî blocchi
** Nzerimentu di nformazziuni falsi
** Cancillazzioni di cuntinuti dê pàggini
** Liami prumozziunalu a siti sterni
** Nzserimentu di cuntinuti privi di sensu
** Cumportamenti ntimidatori o molestie
** Usu ndebitu di cchiù cunti
** Nomu utenti nun accittabbili',
'ipbcreateaccount'                => 'Mpidisci la criazzioni di àutri account',
'ipbemailban'                     => "Mpedisci a l'utenti l'inviu di email",
'ipbenableautoblock'              => "Blocca automaticamenti l'ùrtimu ndirizzu IP usatu di l'utenti e li succissivi cu cui vèninu tintati canciamenti",
'ipbsubmit'                       => "Blocca st'utenti",
'ipbother'                        => 'Durata nun n alencu',
'ipboptions'                      => '2 uri:2 hours,1 jornu:1 day,3 jorna:3 days,1 simana:1 week,2 simani:2 weeks,1 misi:1 month,3 misi:3 months,6 misi:6 months,1 annu:1 year,nfinitu:infinite',
'ipbotheroption'                  => 'àutru',
'ipbotherreason'                  => 'Àutri mutivi/dittagghi:',
'ipbhidename'                     => 'Ammuccia lu nomu utenti dê canciamenti e dê listi',
'ipbwatchuser'                    => "Talìa li pàggini e li discussioni utenti di st'utenti",
'ipb-change-block'                => "Ri-blocca l'utilizzaturi cu sti mpustazzioni",
'badipaddress'                    => 'Ndirizzu IP nun vàlidu.',
'blockipsuccesssub'               => 'Bloccu esiquitu',
'blockipsuccesstext'              => "[[Special:Contributions/$1|$1]] fu bluccatu.<br />
Pi maggiuri nfurmazzioni, talìa la [[Special:BlockList|lista di l'IP bluccati]] .",
'ipb-edit-dropdown'               => 'Mutivi pô bloccu',
'ipb-unblock-addr'                => 'Sblocca $1',
'ipb-unblock'                     => "Sblocca n'utenti o nu ndirizzu IP",
'ipb-blocklist'                   => 'Alenca li blocchi attivi',
'ipb-blocklist-contribs'          => 'Cuntribbuti di $1',
'unblockip'                       => 'Sblocca ndirizzu IP',
'unblockiptext'                   => "Usari lu mòdulu suttastanti pi ristituiri l'accessu n scrittura a un utenti o ndirizzu IP bluccatu.",
'ipusubmit'                       => 'Leva stu bloccu',
'unblocked'                       => "L'utenti [[User:$1|$1]] hà statu sbluccatu",
'unblocked-id'                    => 'Lu bloccu $1 hà statu cacciatu',
'ipblocklist'                     => 'Utenti e nnirizzi IP bluccati',
'ipblocklist-legend'              => "Atrova n'utenti bluccatu",
'ipblocklist-submit'              => 'Ricerca',
'infiniteblock'                   => 'nfinitu',
'expiringblock'                   => 'scadi lu $1 ê $2',
'anononlyblock'                   => 'sulu anònimi',
'noautoblockblock'                => 'bloccu automàticu disabbilitatu',
'createaccountblock'              => 'criazzioni account bluccata',
'emailblock'                      => 'email bluccati',
'blocklist-nousertalk'            => 'nun pò mudificari la sò pròpia pàggina di discussioni',
'ipblocklist-empty'               => "L'alencu dî blocchi è vacanti.",
'ipblocklist-no-results'          => 'Lu nnirizzu IP o nomu utenti richiestu nun è bluccatu.',
'blocklink'                       => 'blocca',
'unblocklink'                     => 'sblocca',
'change-blocklink'                => 'cancia bloccu',
'contribslink'                    => 'cuntribbuti',
'autoblocker'                     => 'Bluccatu automaticamenti pirchì lu ndirizzu IP è cundivisu cu l\'utenti "[[User:$1|$1]]". Lu bloccu di l\'utenti $1 fu mpostu pi lu siquenti mutivu: "\'\'\'$2\'\'\'".',
'blocklogpage'                    => 'Blocchi',
'blocklogentry'                   => 'hà bluccatu [[$1]]; scadenza $2 $3',
'reblock-logentry'                => 'Canciau li mpustazzioni dû bloccu pi [[$1]] cu na scadenza di $2 $3',
'blocklogtext'                    => "Chistu è l'alencu di l'azzioni di bloccu e sbloccu utenti. Li ndirizzi IP bluccati automaticamenti nun sunu alincati. Cunzurtari l'[[Special:BlockList|alencu IP bluccati]] pi l'alencu dî ndirizzi e noma utenti lu cui bloccu è opirativu.",
'unblocklogentry'                 => 'hà sbluccatu "$1"',
'block-log-flags-anononly'        => 'sulu utenti anònimi',
'block-log-flags-nocreate'        => 'criazzioni account bluccata',
'block-log-flags-noautoblock'     => 'bloccu automàticu disattivatu',
'block-log-flags-noemail'         => 'email bluccati',
'block-log-flags-nousertalk'      => 'nun pò mudificari la sò pròpia pàggina di discussioni',
'block-log-flags-angry-autoblock' => 'bloccu automàticu avanzatu attivu',
'block-log-flags-hiddenname'      => 'nnomu utenti ammucciatu',
'range_block_disabled'            => 'La pussibbilitati di bluccari ntervalli di ndirizzi IP è disattiva a lu mumentu.',
'ipb_expiry_invalid'              => 'Durata o scadenza dû bloccu nun vàlida.',
'ipb_expiry_temp'                 => 'Li blocchi dê nomi utenti ammucciati avìssiru èssiri nfiniti',
'ipb_hide_invalid'                => "Impussibili cancillari l'account; putissi aviri troppi canciamenti.",
'ipb_already_blocked'             => 'L\'utenti "$1" è già bluccatu',
'ipb-needreblock'                 => '$1 è già bluccatu. Vòi caciari li mpustazzioni?',
'ipb_cant_unblock'                => 'Erruri: Mpussìbbili attruvari lu bloccu cu ID $1. Putissi aviri già statu sbluccatu.',
'ipb_blocked_as_range'            => 'Sbagghiu: Lu ndirizzu IP $1 nun è suggettu a bloccu ndividuali e non pò èssiri sbloccatu. Lu bloccu è attivu mmeci a liveddu dû ntirvallu $2, ca pò èssiri sbluccatu.',
'ip_range_invalid'                => 'Ntervallu di ndirizzi IP nun vàlidu.',
'blockme'                         => 'Blocca a mia',
'proxyblocker'                    => 'Blocca proxy',
'proxyblocker-disabled'           => 'Sta funzioni nun è attiva.',
'proxyblockreason'                => "Lu tò ndirizzu IP hà statu bluccatu pirchì è un open proxy. Pi favuri cuntatta lu tò furnituri d'accessu a Internet o lu supportu tècnicu e nfòrmali di stu gravi prubbrema di sicurizza.",
'proxyblocksuccess'               => 'Esiquitu.',
'sorbsreason'                     => 'Lu tò ndirizzu IP è alincatu comu proxy apertu ntâ lista DNSBL.',
'sorbs_create_account_reason'     => 'Lu tò ndirizzu IP è alincatu comu open proxy ntâ DNSBL. Nun poi criari un utenti.',
'cant-block-while-blocked'        => 'Nun putiti bluccari àutri utenti ntô mentri ca vui stissi siti bluccati.',

# Developer tools
'lockdb'              => 'Blocca lu database',
'unlockdb'            => 'Sblocca lu database',
'lockdbtext'          => "Lu bloccu dû database cumporta la nterruzzioni, pi tutti l'utenti, dâ pussibbilitati di mudificari li pàggini o di criàrinni di novi, di canciari li prifirenzi e mudificari li listi di l'ossirvati spiciali, e n ginirali di tutti l'upirazzioni ca richièdinu canciamenti a lu database. Pi favuri, cunferma ca chistu currispunni effittivamenti a l'azzioni di tia richiesta e ca a lu tèrmini dâ manutinzzioni pruvidi a  lu sbloccu dû database.",
'unlockdbtext'        => "Lu sbloccu dû database cunzenti di novu a tutti li utenti di canciari li pàggini o di criàrinni di novi, di canciari li prifirenzi e canciari li listi di l'ossirvati spiciali, e n ginirali di còmpiri tutti li upirazzioni ca richièdinu canciamenti a lu database. Pi curtisìa, cunferma ca chistu currispunni effittivamenti a l'azzioni di tìa addumannata.",
'lockconfirm'         => 'Sì, ntennu effittivamenti bluccari lu database.',
'unlockconfirm'       => 'Sì, effittivamenti ntennu, sutta la mè rispunzabbilitati, sbluccari lu database.',
'lockbtn'             => 'Blocca lu database',
'unlockbtn'           => 'Sblocca lu database',
'locknoconfirm'       => 'Nun hà statu spuntata la casillina di cunferma.',
'lockdbsuccesssub'    => 'Bloccu dû database esiquitu',
'unlockdbsuccesssub'  => 'Sbloccu dû database esiquitu',
'lockdbsuccesstext'   => "Lu database hà statu bluccatu.
<br />Arricorda di [[Special:UnlockDB|rimòviri lu bloccu]] doppu aviri accabbatu l'upirazzioni di manutinzioni.",
'unlockdbsuccesstext' => 'Lu database hà statu sbluccatu.',
'lockfilenotwritable' => "Mpussìbbili scrìviri supra lu file di ''lock'' dû database. L'accessu n scrittura a tali file di parti dû server web è nicissariu pi bluccari e sbluccari lu database.",
'databasenotlocked'   => 'Lu database nun è bluccatu.',

# Move page
'move-page'                    => 'Spustamentu di $1',
'move-page-legend'             => 'Sposta la pàggina',
'movepagetext'                 => "Usannu lu mòdulu ccà sutta vui canciati lu nomu dâ pàggina, e spustati tutta la sò storia versu la pàggina nova. Lu tìtulu vecchiu addiventa na pàggina di ''redirect'' versu lu tìtulu novu.
Li liami â pàggina vecchia nun càncianu.
Assicuràtivi ca lu spustamentu nun havi criatu [[Special:DoubleRedirects|redirect duppi]] o [[Special:BrokenRedirects|redirect rumputi]]. Vui siti rispunzàbbili dî liami chi avìssiru a puntari â pàggina giusta.

La pàggina '''nun''' è spustata siddu cc'è già na pàggina cu lu tìtulu novu, tranni chi la pàggina 'n chistioni è vacanti o è na pàggina di ''redirect'' e nun havi n'archiviu di canciamenti.
Chistu signìfica chi vui putiti rinuminari la pàggina cu lu nomu vecchiu si aviti sbagghiatu, e chi nun putiti suprascrìviri nta na pàggina chi esisti già.

'''Accura!'''
Chistu pò èssiri nu canciamentu dràsticu pi na pàggina pupulari; aviti a èssiri sicuri di capiri li cunziquenzi prima di cuntinuari.",
'movepagetalktext'             => "La pàggina di discussioni assuciata, siddu esisti, veni spustata automaticamenti nzèmmula, '''a menu chi:'''
*Na pàggina nun-vacanti di discussioni già esisti cu lu nomu novu,
*Hai disilizziunatu lu quatratu ccà sutta.

Nta sti casi, tu hai a spustari o agghiùnciri manuarmenti la pàggina di discussioni.",
'movearticle'                  => 'Sposta la pàggina',
'movenologin'                  => 'Accessu nun effittuatu',
'movenologintext'              => "Lu spustamentu dî pàggini è cunzintitu sulu a l'utenti riggistrati c'hannu esiquitu l'[[Special:UserLogin|accessu]] a lu situ.",
'movenotallowed'               => 'Nun hai li pirmessi nicissari a lu spustamentu dê pàggini.',
'movenotallowedfile'           => "Nun ci su' li pirmessi nicissàrii pi spustari file.",
'cant-move-user-page'          => 'Nun aviti lu pirmissu nicissàriu pi spustari li pàggini utenti.',
'cant-move-to-user-page'       => 'Nun aviti li pirmessi nicessàrii pô spustamentu dâ pàggina supra na pàggina utenti (cu eccizzioni di na suttapàggina utenti).',
'newtitle'                     => 'Cu lu tìtulu novu di',
'move-watch'                   => 'Talìa sta pàggina',
'movepagebtn'                  => 'Sposta la pàggina',
'pagemovedsub'                 => 'Lu spustamentu riniscìu.',
'movepage-moved'               => '\'\'\'"$1" fu spustata a "$2"\'\'\'',
'movepage-moved-redirect'      => 'Vinni criatu nu riinnirizzamentu.',
'movepage-moved-noredirect'    => 'La criazzioni di nu riinnirizzamentu vinni scancillata.',
'articleexists'                => "Na pàggina cu stu nomu esisti già, oppuru lu nomu scigghiutu nun è vàlidu. Scègghiri n'àutru tìtulu.",
'cantmove-titleprotected'      => 'Nun putiti spustari la pàggina pirchì lu tìtulu novu fu prutiggiutu pi mpidìrini la criazzioni',
'talkexists'                   => "'''La pàggina hà statu spustata currettamenti, ma nun hà statu pussìbbili spustari la pàggina di discussioni pirchì nn'esisti già n'àutra cu lu tìtulu novu. Ntigrari manuarmenti li cuntinuti dî dui pàggini.'''",
'movedto'                      => 'spustata a',
'movetalk'                     => 'Sposta puru la pàggina di discussioni, eventuarmenti.',
'move-subpages'                => 'Sposta li suttapàggini (finu a $1)',
'move-talk-subpages'           => 'Sposta li suttapàggini di discussioni (finu a $1)',
'movepage-page-exists'         => 'La pàggina $1 esisti ggià e nun pò èssiri autumaticamenti suprascrivuta.',
'movepage-page-moved'          => 'La pàggina $1 fu spustata a $2.',
'movepage-page-unmoved'        => 'La pàggina $1 nun pò èssiri spustata a $2.',
'movepage-max-pages'           => 'Vinni spustatu lu nùmmuru màssimu di $1 {{PLURAL:$1|pàggina|pàggini}} e non si ponnu cchiù spustari àutri pàggini autumàticamenti.',
'movelogpage'                  => 'Spustamenti',
'movelogpagetext'              => "Chistu è l'alencu dî pàggini spustati.",
'movesubpage'                  => '{{PLURAL:$1|Suttapàggina|Suttapàggini}}',
'movesubpagetext'              => 'Sta pàggina havi $1 {{PLURAL:$1|suttapàgina ammustrata|suttapàgini ammustrati}} appressu.',
'movenosubpage'                => 'Sta pàggina nun havi suttapàggini.',
'movereason'                   => 'Mutivu:',
'revertmove'                   => 'riprìstina',
'delete_and_move'              => 'Scancella e sposta',
'delete_and_move_text'         => '==Richiesta di cancillazzioni==

La pàggina di distinazzioni "[[:$1]]" asisti già. S\'addisìa cancillàrila pi rènniri pussìbbili lu spustamentu?',
'delete_and_move_confirm'      => 'Sì, suvrascrivi la pàggina asistenti',
'delete_and_move_reason'       => 'Cancillata pi rènniri pussìbbili lu spustamentu',
'selfmove'                     => 'Lu tìtulu di distinazzioni nziritu è agguali a chiddu di pruvinenza; mpossibbili spustari la pàggina su idda stissa.',
'immobile-source-namespace'    => 'Non pòi spustari li pàggini nto namespace "$1"',
'immobile-target-namespace'    => 'Nun pòi spustari li pàggini ntô namespace "$1"',
'immobile-target-namespace-iw' => "L'interwiki link nun è n'ubbiettivu bonu pi spustari la pòggina.",
'immobile-source-page'         => 'Sta pàggina nun pò èssiri spustata.',
'immobile-target-page'         => 'Nun pòi spustari nti stu tìtulu.',
'imagenocrossnamespace'        => 'Nun pòi spustari na mmàggini fora dû namespace Mmàggini.',
'imagetypemismatch'            => 'La estensioni nova dû file cun currispunni â sò estensioni riali',
'imageinvalidfilename'         => 'Lu nomu dû file di distinazzioni nun è validu',
'fix-double-redirects'         => 'Aggiorna tutti li redirect chi puntanu ô titulu urigginali',
'move-leave-redirect'          => 'Lassa darreri nu redirect',
'protectedpagemovewarning'     => "'''Attenzioni: Sta pàggina è stata bluccata n modu ca sulu l'utentu cu li privileggi di amministraturi ponu spustarla.'''",
'semiprotectedpagemovewarning' => "'''Nota:''' Sta pàggina fu bluccata n modo tali ca solo l'utenti riggistrati ponu spustarla.",

# Export
'export'            => 'Esporta pàggini',
'exporttext'        => "È pussìbbili espurtari lu testu e la cronoluggìa dî canciamenti di na pàggina o d'un gruppu di pàggini n furmatu XML pi mpurtàrili n àutri siti ca utilìzzanu lu software MediaWiki, attraversu la pàggina [[Special:Import|d'importu]].

P'espurtari li pàggini innicari li tìtuli ntâ casella di testu suttastanti, unu pi riga, e spicificari siddu s'addisìa attèniri la virsioni currenti e tutti li virsioni pricidenti, cu li dati dâ cronoluggìa dâ pàggina, oppuru surtantu l'ùrtima virsioni e li dati currispunnenti a l'ùrtimu canciamentu.

Nta st'ùrtimu casu si pò macari utilizzari un culligamentu, p'asempiu [[{{#Special:Export}}/{{MediaWiki:Mainpage}}]] p'espurtari \"[[{{MediaWiki:Mainpage}}]]\".",
'exportcuronly'     => 'Ncludi sulu la rivisioni attuali, nun la ntera cronoluggìa',
'exportnohistory'   => "---- '''Nota:''' l'espurtazzioni dâ ntera cronoluggìa dî pàggini attraversu sta nterfaccia hà stata disattivata pi mutivi ligati a li pristazzioni dû sistema.",
'export-submit'     => 'Espurtazzioni',
'export-addcattext' => 'Agghiunci pàggini dâ catigurìa:',
'export-addcat'     => 'Agghiunci',
'export-addnstext'  => 'Iunci pagini dô namespace:',
'export-addns'      => 'Iunci',
'export-download'   => 'Offri di sarvari comu file',
'export-templates'  => 'Ncludi li template',
'export-pagelinks'  => 'Includi pàggini currilati, funnuti di:',

# Namespace 8 related
'allmessages'                   => 'Missaggi di sistema',
'allmessagesname'               => 'Nomu',
'allmessagesdefault'            => 'Testu pridifinitu',
'allmessagescurrent'            => 'Testu attuali',
'allmessagestext'               => "Chista è na lista di missaggi di sistema chi s'attròvanu sutta MediaWiki:''nomu''.
Visita [//www.mediawiki.org/wiki/Localisation MediaWiki Localisation] e [//translatewiki.net translatewiki.net] si voi cuntribbuiri â localizzazioni generica di MediaWiki.",
'allmessagesnotsupportedDB'     => "'''{{ns:special}}:Allmessages''' nun è suppurtatu pirchì lu flag '''\$wgUseDatabaseMessages''' nun è attivu.",
'allmessages-filter-legend'     => 'Filtru',
'allmessages-filter'            => 'Filtru pi statu di canciamentu:',
'allmessages-filter-unmodified' => 'Nun canciati',
'allmessages-filter-all'        => 'Tutti',
'allmessages-filter-modified'   => 'Canciati',
'allmessages-prefix'            => 'Filtra pi prefissu:',
'allmessages-language'          => 'Lingua:',
'allmessages-filter-submit'     => 'Vai',

# Thumbnails
'thumbnail-more'           => 'Ngrannisci',
'filemissing'              => 'File mancanti',
'thumbnail_error'          => 'Erruri ntâ criazzioni dâ miniatura: $1',
'djvu_page_error'          => 'Nùmmuru di pàggina DjVu erratu',
'djvu_no_xml'              => 'Mpussibbili òtteniri lu XML pô file DjVu',
'thumbnail_invalid_params' => 'Parametri antiprima nun validi',
'thumbnail_dest_directory' => 'Mpussibbili criari la directory di distinazzioni',
'thumbnail_image-type'     => 'Tipu di mmàggini nun supputtatu',
'thumbnail_gd-library'     => 'Cunfigurazioni ncumpleta da libreria GD: funzioni $1 mancanti',
'thumbnail_image-missing'  => 'Pari èssiri mancanti lu file: $1',

# Special:Import
'import'                     => 'Mporta pàggini',
'importinterwiki'            => 'Mpurtazzioni transwiki',
'import-interwiki-text'      => "Silizziunari un pruggettu wiki e lu tìtulu dâ pàggina a mpurtari. Li dati di pubbricazzioni e li noma di l'autura dî vari virsioni sunnu sarvati. Tutti l'opirazzioni di mpurtazzioni trans-wiki sunnu riggistrati ntô [[Special:Log/import|log di mpurtazzioni]].",
'import-interwiki-source'    => 'Surgenti wiki/pàggina:',
'import-interwiki-history'   => 'Copia la ntera cronoluggìa di sta pàggina',
'import-interwiki-templates' => 'Includi tutti li template',
'import-interwiki-submit'    => 'Mporta',
'import-interwiki-namespace' => 'Trasfirisci li pàggini ntô namespace:',
'import-upload-filename'     => 'Nomu file:',
'import-comment'             => 'Oggettu:',
'importtext'                 => "Pi favuri, esporta lu file dâ wiki d'orìggini usannu l'utility Speciale:Export, sàrvalu supra lu tò discu e carrìcalu ccà",
'importstart'                => 'Mpurtazzioni dî pàggini n cursu...',
'import-revision-count'      => '{{PLURAL:$1|na rivisioni mpurtata|$1 rivisioni mpurtati}}',
'importnopages'              => 'Nudda pàggina a mpurtari.',
'importfailed'               => 'Mpurtazzioni nun arrinisciuta: $1',
'importunknownsource'        => "Tipu d'orìggini scanusciutu pi la mpurtazzioni",
'importcantopen'             => 'Mpussìbbili grapiri lu file di mpurtazzioni',
'importbadinterwiki'         => 'Culligamentu inter-wiki erratu',
'importnotext'               => 'Testu vacanti o mancanti',
'importsuccess'              => 'Mpurtazzioni arrinisciuta.',
'importhistoryconflict'      => 'Asìstinu rivisioni dâ cronoluggìa n cunflittu (sta pàggina putissi aviri già statu mpurtata)',
'importnosources'            => 'Nun hà statu difinita na fonti pi la mpurtazzioni transwiki; la mpurtazzioni diretta dâ cronoluggìa nun è attiva.',
'importnofile'               => 'Nun hà statu carrcatu nuddu file pi la mpurtazzioni.',
'importuploaderrorsize'      => "Caricamentu dû file pi la mpurtazzioni non arrinisciutu. Lu file è cchiù granni di li diminzioni màssimi cunzentiti pi l'upload.",
'importuploaderrorpartial'   => 'Caricamentu dû file pi la mpurtazzioni non arrinisciutu. Sulamenti na parti dû file vinni caricatu.',
'importuploaderrortemp'      => 'Caricamentu dû file pi la mpurtazzioni non arrinisciutu. Manca na cartedda timpurània.',
'import-parse-failure'       => "Sbagghiu d'anàlisi ntâ mpurtazzioni XML",
'import-noarticle'           => 'Nudda pàggina di mpurtari.',
'import-nonewrevisions'      => 'Tutti li rivisioni già foru mpurtati apprima.',
'xml-error-string'           => '$1 a riga $2, culonna $3 (byte $4): $5',
'import-upload'              => 'Càrrica dati XML',
'import-token-mismatch'      => "Si pèrsiru li dati rilativi a la sissioni. Pi piaciri, prova n'àutra vota.",
'import-invalid-interwiki'   => "E' mpussìbbili mpurtari dû pruggettu wiki nnicatu.",

# Import log
'importlogpage'                    => 'Mpurtazzioni',
'importlogpagetext'                => "Riggistru dî mpurtazzioni d'ufficiu di pàggini pruvinenti d'àutri wiki, cumpleti di cronoluggìa.",
'import-logentry-upload'           => 'hà mpurtatu $1 tràmiti upload',
'import-logentry-upload-detail'    => '{{PLURAL:$1|na rivisioni mpurtata|$1 rivisioni mpurtati}}',
'import-logentry-interwiki'        => 'hà trasfiritu di àutra wiki la pàggina $1',
'import-logentry-interwiki-detail' => '{{PLURAL:$1|na rivisioni mpurtata|$1 rivisioni mpurtati}} di $2',

# Tooltip help for the actions
'tooltip-pt-userpage'             => 'La tò pàggina utenti',
'tooltip-pt-anonuserpage'         => 'La pàggina utenti di stu ndirizzu IP',
'tooltip-pt-mytalk'               => "La to' pàggina di discussioni",
'tooltip-pt-anontalk'             => 'Discussioni supra li canciamenti fatti di stu ndirizzu IP',
'tooltip-pt-preferences'          => 'Li mè prifirenzi',
'tooltip-pt-watchlist'            => 'La lista dî pàggini ca stai tinennu sutta ossirvazzioni',
'tooltip-pt-mycontris'            => "L'alencu dî tò cuntribbuti",
'tooltip-pt-login'                => 'La riggistrazzioni è cunzigghiata, puru siddu nun obbrigatoria.',
'tooltip-pt-anonlogin'            => 'La riggistrazzioni è cunzigghiata, puru siddu nun obbrigatoria.',
'tooltip-pt-logout'               => 'Nisciuta (logout)',
'tooltip-ca-talk'                 => 'Vidi li discussioni rilativi a sta pàggina',
'tooltip-ca-edit'                 => "Poi canciari sta pàggina. Pi favuri usa lu pulsanti d'antiprima prima di sarvari.",
'tooltip-ca-addsection'           => 'Agghiunci un cummentu a sta discussioni.',
'tooltip-ca-viewsource'           => 'Sta pàggina è prutetta, ma poi vìdiri lu sò còdici surgenti.',
'tooltip-ca-history'              => 'Virsioni pricidenti di sta pàggina.',
'tooltip-ca-protect'              => 'Pruteggi sta pàggina',
'tooltip-ca-delete'               => 'Cancella sta pàggina',
'tooltip-ca-undelete'             => "Riprìstina la pàggina com'era prima dâ cancillazzioni",
'tooltip-ca-move'                 => 'Sposta sta pàggina (cancia tìtulu)',
'tooltip-ca-watch'                => 'Agghiunci sta pàggina â tò lista di ossirvati spiciali',
'tooltip-ca-unwatch'              => 'Elìmina sta pàggina dâ tò lista di ossirvati spiciali',
'tooltip-search'                  => "Cerca 'n {{SITENAME}}",
'tooltip-search-go'               => 'Vai a na pàggina cu chistu nomu esattu si asisti',
'tooltip-search-fulltext'         => 'Attrova pàggini pi chistu testu',
'tooltip-p-logo'                  => 'Pàggina principali',
'tooltip-n-mainpage'              => 'Vìsita la pàggina principali',
'tooltip-n-mainpage-description'  => 'Talìa la pàggina principali',
'tooltip-n-portal'                => 'Discrizzioni dû pruggettu, zoccu poi fari, unni attruvari li cosi',
'tooltip-n-currentevents'         => "Nfurmazzioni supra l'avvinimenti d'attualitati",
'tooltip-n-recentchanges'         => "Alencu di l'ùrtimi canciamenti dû situ.",
'tooltip-n-randompage'            => 'Ammustra na pàggina a muzzu',
'tooltip-n-help'                  => "Pàggini d'aiutu.",
'tooltip-t-whatlinkshere'         => 'Alencu di tutti li pàggini ca sunnu culligati a chista',
'tooltip-t-recentchangeslinked'   => "Alencu di l'ùrtimi canciamenti a li pàggini culligati a chista",
'tooltip-feed-rss'                => 'Feed RSS pi sta pàggina',
'tooltip-feed-atom'               => 'Feed Atom pi sta pàggina',
'tooltip-t-contributions'         => 'Lista dî cuntribbuti di stu utenti',
'tooltip-t-emailuser'             => 'Manna un missaggiu e-mail a stu utenti',
'tooltip-t-upload'                => 'Càrrica mmàggini o file multimidiali',
'tooltip-t-specialpages'          => 'Lista di tutti li pàggini spiciali',
'tooltip-t-print'                 => 'Virsioni stampabbili di chista pàggina',
'tooltip-t-permalink'             => 'Liami pirmanenti a chista virsioni dâ pàggina',
'tooltip-ca-nstab-main'           => "Vidi l'artìculu",
'tooltip-ca-nstab-user'           => 'Vidi la pàggina utenti',
'tooltip-ca-nstab-media'          => 'Vidi la pàggina dû file multimidiali',
'tooltip-ca-nstab-special'        => 'Chista è na pàggina spiciali, nun pò èssiri canciata',
'tooltip-ca-nstab-project'        => 'Vidi la pàggina di sirvizziu',
'tooltip-ca-nstab-image'          => 'Vidi la pàggina dâ mmàggini',
'tooltip-ca-nstab-mediawiki'      => 'Vidi lu missaggiu di sistema',
'tooltip-ca-nstab-template'       => 'Vidi lu template',
'tooltip-ca-nstab-help'           => "Vidi la pàggina d'aiutu",
'tooltip-ca-nstab-category'       => 'Vidi la pàggina dâ catigurìa',
'tooltip-minoredit'               => 'Signala comu canciamentu nicu',
'tooltip-save'                    => 'Sarva li canciamenti',
'tooltip-preview'                 => 'Antiprima dî canciamenti, ùsala prima di sarvari!',
'tooltip-diff'                    => "Talìa (mudalitati diff) li canciamenti c'hai fattu.",
'tooltip-compareselectedversions' => 'Talìa li diffirenzi tra li dui virsioni silizziunati di sta pàggina.',
'tooltip-watch'                   => "Agghiunci sta pàggina â lista di l'ossirvati spiciali",
'tooltip-recreate'                => 'Ricrea la pàggina puru siddu hà statu cancillata',
'tooltip-upload'                  => 'Ncigna carricamentu',
'tooltip-rollback'                => '"Rollback" annulla li canci di l\'ùrtinu cuntribbuturi â sta pâggina cu nu sulu clic.',
'tooltip-undo'                    => '"Annulla" pirmetti di annullari sta mudìfica e grapi lu mòdulu di mudifica ntâ mudalità di antiprima. Pirmetti di nsiriri na mutivazziopni nti l\'uggettu dâ mudifica.',
'tooltip-preferences-save'        => 'Sarva prifirenzi',

# Stylesheets
'common.css'   => "/* Li stili CSS nziriti ccà s'àpplicanu a tutti li skin */",
'monobook.css' => "/* Li stili CSS nziriti ccà s'àpplicanu a l'utenti chi usanu la skin Monobook */",

# Scripts
'common.js'   => "/* Lu còdici JavaScript nziritu ccà veni carricatu di ognuna pàggina, pi tutti l'utenti. */",
'monobook.js' => "/* Lu còdici JavaScript nzirutu ccà veni carricatu di l'utenti c'ùsanu la skin MonoBook */",

# Metadata
'notacceptable' => 'Lu server wiki nun pò furniri dati nta un furmatu liggìbbili dû tò client.',

# Attribution
'anonymous'        => '{{PLURAL:$1|Utenti anònimu|Utenti anònimi}} di {{SITENAME}}',
'siteuser'         => '$1, utenti di {{SITENAME}}',
'lastmodifiedatby' => "Sta pàggina hà statu canciata pi l'ùrtima vota lu $2, $1 di $3.",
'othercontribs'    => 'Basatu supra lu travagghiu di $1.',
'others'           => 'àutri',
'siteusers'        => '$1, {{PLURAL:$2|utenti|utenti}} di {{SITENAME}}',
'creditspage'      => 'Li autura dâ pàggina',
'nocredits'        => 'Nudda nfurmazzioni supra li crèditi dispunìbbili pi sta pàggina.',

# Spam protection
'spamprotectiontitle' => 'Filtru anti-spam',
'spamprotectiontext'  => 'La pàggina ca vulevi sarvari hà statu bluccata dû filtru anti-spam. Chistu è prubbabbirmenti duvutu â prisenza di nu liami a nu situ sternu bluccatu.',
'spamprotectionmatch' => 'Lu nostru filtru anti-spam hà ndividuatu lu testu siquenti: $1',
'spambot_username'    => 'MediaWiki - sistema di rimuzzioni spam',
'spam_reverting'      => "Ripristinata l'ùrtima virsioni priva di culligamenti a $1",
'spam_blanking'       => 'Pàggina svacantata, tutti li virsioni cuntinìanu culligamenti a $1',

# Skin names
'skinname-standard'    => 'Classicu',
'skinname-nostalgia'   => 'Nustargìa',
'skinname-cologneblue' => 'Cologne Blu',
'skinname-monobook'    => 'MonoBook',
'skinname-myskin'      => 'MySkin',
'skinname-chick'       => 'Chick',
'skinname-simple'      => 'Sìmprici',
'skinname-modern'      => 'Mudernu',

# Patrolling
'markaspatrolleddiff'                 => 'Segna lu canciamentu comu virificatu',
'markaspatrolledtext'                 => 'Segna sta pàggina comu virificata',
'markedaspatrolled'                   => 'Canciamentu virificatu',
'markedaspatrolledtext'               => 'Lu canciamentu silizziunatu hà statu signatu comu virificatu.',
'rcpatroldisabled'                    => "La virìfica di l'ùrtimi canciamenti è disattivata",
'rcpatroldisabledtext'                => "La funzioni di virìfica di l'ùrtimi canciamenti a lu mumentu nun è attiva.",
'markedaspatrollederror'              => 'Mpussìbbili contrassignari lu canciamentu comu virificatu',
'markedaspatrollederrortext'          => 'Ci voli spicificari un canciamentu a contrassignari comu virificatu.',
'markedaspatrollederror-noautopatrol' => 'Nun si disponi dî pirmissi nicissari pi signari li propi canciamenti comu virificati.',

# Patrol log
'patrol-log-page'      => 'Canciamenti virificati',
'patrol-log-header'    => 'Ccassutta sunnu elencati li virìfichi dî canci.',
'log-show-hide-patrol' => '$1 log di li canciamenti virificati',

# Image deletion
'deletedrevision'                 => 'Rivisioni pricidenti, cancillata: $1.',
'filedeleteerror-short'           => 'Erruri ntâ cancillazzioni dû file: $1',
'filedeleteerror-long'            => 'Si virificaru erruri ntô tentativu di cancillari lu file:

$1',
'filedelete-missing'              => 'Mpussibbili cancillari lu file "$1" pirchì nun asisti.',
'filedelete-old-unregistered'     => 'La rivisioni dô file nnicata, "$1", nun è cuntinuta ntô databbasi.',
'filedelete-current-unregistered' => 'Lu file spicificatu, "$1", nun è cuntinutu ntô databbasi.',
'filedelete-archive-read-only'    => 'Lu server Web nun è capaci di scrìviri ntâ directory d\'archiviu "$1".',

# Browsing diffs
'previousdiff' => '← Diffirenza pricidenti',
'nextdiff'     => 'Diffirenza siquenti →',

# Media information
'mediawarning'         => "'''Accura''': Stu file pò cuntèniri còdici malignu, esiquènnulu lu vostru sistema putisi vèniri cumprumissu.",
'imagemaxsize'         => "Diminzioni màssima dî mmàggini:<br />''(pi li pàggini di discrizzioni dô file)''",
'thumbsize'            => 'Grannizza dî miniaturi:',
'widthheightpage'      => '$1×$2, $3 {{PLURAL:$3|pàggina|pàggini}}',
'file-info'            => 'Diminzioni: $1, tipu MIME: $2',
'file-info-size'       => '$1 × $2 pixel, diminzioni: $3, tipu MIME: $4',
'file-nohires'         => 'Nun sunnu dispunìbbili virsioni a risuluzzioni cchiù elivata.',
'svg-long-desc'        => 'file SVG, dimensioni nominali $1 × $2 pixel, dimensioni dô file: $3',
'show-big-image'       => 'Virsioni a àuta risuluzzioni',
'file-info-gif-looped' => 'luppatu',
'file-info-gif-frames' => '$1 {{PLURAL:$1|frame|frame}}',

# Special:NewFiles
'newimages'             => 'Gallarìa dî file novi',
'imagelisttext'         => "Di sèquitu veni prisintata na lista di '''$1''' file urdinat{{PLURAL:$1|u|i}} pi $2.",
'newimages-summary'     => 'Sta pàggina spiciali ammustra li file caricati di cchiù picca tempu.',
'newimages-legend'      => 'Nomu file',
'newimages-label'       => "Nomu file (o nu pezzu d'iddu):",
'showhidebots'          => '($1 li bot)',
'noimages'              => 'Nenti a vìdiri.',
'ilsubmit'              => "Va' cerca",
'bydate'                => 'pi data',
'sp-newimages-showfrom' => "Ammustra li mmàggini cchiù ricenti a pàrtiri d'uri $2 dô $1",

# Bad image list
'bad_image_list' => "Lu furmatu è lu siquenti:

Vèninu cunzidirati sulu l'alenchi puntati (righi ca accumènzanu cû sìmmulu *). Lu primu lijami supra ogni riga havi a èssiri nu lijami a nu file nun addisiatu.
Li lijami succissivi, supra la stissa riga, sunnu cunzidirati comu eccizzioni (pàggini ntê quali lu file pò èssiri richiamatu 'n modu nurmali).",

# Metadata
'metadata'          => 'Metadati',
'metadata-help'     => 'Stu file cunteni nfurmazzioni agghiuntivi, prubbabbirmenti junti dâ fotucàmira o dû scanner usati pi criàrila o diggitalizzàrila. Siddu lu file hà statu canciatu, arcuni dittagghi putìssiru nun currispùnniri â rialitati.',
'metadata-expand'   => 'Ammustra dittagghi',
'metadata-collapse' => 'Ammuccia dittagghi',
'metadata-fields'   => "Li campi rilativi a li metadati EXIF alincati 'n stu missaggiu vèninu ammustrati supra la pàggina dâ mmàggini quannu la tabbella dî metadati è prisintata ntâ forma brivi. Pi mpustazzioni pridifinita, l'àutri campi vèninu ammucciati.
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
* gpsaltitude",

# EXIF tags
'exif-imagewidth'                  => 'Larghizza',
'exif-imagelength'                 => 'Autizza',
'exif-bitspersample'               => 'Bit pi campiuni',
'exif-compression'                 => 'Miccanismu di cumprissioni',
'exif-photometricinterpretation'   => 'Struttura dî pixel',
'exif-orientation'                 => 'Urientamentu',
'exif-samplesperpixel'             => 'Nùmmuru dî cumpunenti',
'exif-planarconfiguration'         => 'Dispusizzioni dî dati',
'exif-ycbcrsubsampling'            => 'Rapportu di campiunamentu Y / C',
'exif-ycbcrpositioning'            => 'Pusizziunamentu cumpunenti Y e C',
'exif-xresolution'                 => 'Risuluzzioni urizzuntali',
'exif-yresolution'                 => 'Risuluzzioni virticali',
'exif-stripoffsets'                => 'Pusizzioni dî dati mmàggini',
'exif-rowsperstrip'                => 'Nùmmiru righi pi striscia',
'exif-stripbytecounts'             => 'Nùmmiru di byte pi striscia cumpressa',
'exif-jpeginterchangeformat'       => 'Pusizzioni byte SOI JPEG',
'exif-jpeginterchangeformatlength' => 'Nùmmuru di byte di dati JPEG',
'exif-whitepoint'                  => 'Cuurdinati crumàtichi dû puntu di jancu',
'exif-primarychromaticities'       => 'Cuurdinati crumàtichi dî culuri primari',
'exif-ycbcrcoefficients'           => 'Cuefficienti matrici di trasfurmazzioni spazzi dî culuri',
'exif-referenceblackwhite'         => 'Cucchia di valuri di rifirimentu (nìuru e jancu)',
'exif-datetime'                    => 'Data e ura di canciamentu dû file',
'exif-imagedescription'            => 'Discrizzioni dâ mmàggini',
'exif-make'                        => 'Prudutturi fotucàmira',
'exif-model'                       => 'Mudellu fotucàmira',
'exif-software'                    => 'Software',
'exif-artist'                      => 'Auturi',
'exif-copyright'                   => 'Nfurmazzioni supra lu copyright',
'exif-exifversion'                 => 'Virsioni dû furmatu Exif',
'exif-flashpixversion'             => 'Virsioni Flashpix suppurtata',
'exif-colorspace'                  => 'Spazziu dî culuri',
'exif-componentsconfiguration'     => "Significatu d'ognuna cumpunenti",
'exif-compressedbitsperpixel'      => 'Mudalitati di cumprissioni dâ mmàggini',
'exif-pixelydimension'             => 'Larghizza effittiva mmàggini',
'exif-pixelxdimension'             => 'Autizza effittiva mmàggini',
'exif-usercomment'                 => "Noti di l'utenti",
'exif-relatedsoundfile'            => 'File audiu culligatu',
'exif-datetimeoriginal'            => 'Data e ura di criazzioni dî dati',
'exif-datetimedigitized'           => 'Data e ura di diggitalizzazzioni',
'exif-subsectime'                  => 'Data e ura, frazzioni di secunnu',
'exif-subsectimeoriginal'          => 'Data e ura di criazzioni, frazzioni di secunnu',
'exif-subsectimedigitized'         => 'Data e ura di diggitalizzazzioni, frazzioni di secunnu',
'exif-exposuretime'                => "Tempu d'espusizzioni",
'exif-exposuretime-format'         => '$1 s ($2)',
'exif-fnumber'                     => 'Rapportu fucali',
'exif-exposureprogram'             => "Prugramma d'espusizzioni",
'exif-spectralsensitivity'         => 'Sinzibbilitati spittrali',
'exif-isospeedratings'             => 'Sinzibbilitati ISO',
'exif-shutterspeedvalue'           => "Tempu d'espusizzioni",
'exif-aperturevalue'               => 'Apirtura',
'exif-brightnessvalue'             => 'Luminusitati',
'exif-exposurebiasvalue'           => 'Currezzioni espusizzioni',
'exif-maxaperturevalue'            => 'Apirtura màssima',
'exif-subjectdistance'             => 'Distanza dû suggettu',
'exif-meteringmode'                => 'Mètudu di misurazzioni',
'exif-lightsource'                 => 'Surgenti luminusa',
'exif-flash'                       => 'Carattirìstichi e statu dû flash',
'exif-focallength'                 => 'Distanza fucali obbittivu',
'exif-subjectarea'                 => 'Ària nquatranti lu suggettu',
'exif-flashenergy'                 => 'Putenza dû flash',
'exif-focalplanexresolution'       => 'Risuluzzioni X supra lu chianu fucali',
'exif-focalplaneyresolution'       => 'Risuluzzioni Y supra lu chianu fucali',
'exif-focalplaneresolutionunit'    => 'Unitati di misura risuluzzioni supra lu chianu fucali',
'exif-subjectlocation'             => 'Pusizzioni dû suggettu',
'exif-exposureindex'               => 'Sinzibbilitati mpustata',
'exif-sensingmethod'               => 'Mètudu di rilivazzioni',
'exif-filesource'                  => 'Orìggini dû file',
'exif-scenetype'                   => 'Tipu di nquatratura',
'exif-customrendered'              => 'Elabburazzioni pirsunalizzata',
'exif-exposuremode'                => "Mudalitati d'espusizzioni",
'exif-whitebalance'                => 'Valanzamentu dû jancu',
'exif-digitalzoomratio'            => 'Rapportu zoom diggitali',
'exif-focallengthin35mmfilm'       => 'Fucali equivalenti supra 35 mm',
'exif-scenecapturetype'            => "Tipu d'accanzu",
'exif-gaincontrol'                 => 'Cuntrollu nquatratura',
'exif-contrast'                    => 'Cuntrollu cuntrastu',
'exif-saturation'                  => 'Cuntrollu saturazzioni',
'exif-sharpness'                   => 'Cuntrollu nititizza',
'exif-devicesettingdescription'    => 'Discrizzioni mpustazzioni dispusitivu',
'exif-subjectdistancerange'        => 'Scala distanza suggettu',
'exif-imageuniqueid'               => 'ID unìvucu mmàggini',
'exif-gpsversionid'                => 'Virsioni dî tag GPS',
'exif-gpslatituderef'              => 'Latitùtini Nord o Sud',
'exif-gpslatitude'                 => 'Latitùtini',
'exif-gpslongituderef'             => 'Lungitùtini Est o Ovest',
'exif-gpslongitude'                => 'Lungitùtini',
'exif-gpsaltituderef'              => "Rifirimentu pi l'autitùtini",
'exif-gpsaltitude'                 => 'Autitùtini',
'exif-gpstimestamp'                => 'Ura GPS (ruloggiu atòmicu)',
'exif-gpssatellites'               => 'Satèlliti usati pi la misurazzioni',
'exif-gpsstatus'                   => 'Statu dû ricivituri',
'exif-gpsmeasuremode'              => 'Mudalitati di misurazzioni',
'exif-gpsdop'                      => 'Pricisioni dâ misurazzioni',
'exif-gpsspeedref'                 => 'Unitati di misura dâ vilucitati',
'exif-gpsspeed'                    => 'Vilucitati dû ricivituri GPS',
'exif-gpstrackref'                 => 'Rifirimentu pi la direzzioni movimentu',
'exif-gpstrack'                    => 'Direzzioni dû movimentu',
'exif-gpsimgdirectionref'          => 'Rifirimentu pi la direzzioni dâ mmàggini',
'exif-gpsimgdirection'             => 'Direzzioni dâ mmàggini',
'exif-gpsmapdatum'                 => 'Rilivamentu giodèticu usatu',
'exif-gpsdestlatituderef'          => 'Rifirimentu pi la latitùtini dâ distinazzioni',
'exif-gpsdestlatitude'             => 'Latitùtini dâ distinazzioni',
'exif-gpsdestlongituderef'         => 'Rifirimentu pi la lungitùtini dâ distinazzioni',
'exif-gpsdestlongitude'            => 'Lungitùtini dâ distinazzioni',
'exif-gpsdestbearingref'           => 'Rifirimentu pi la direzzioni dâ distinazzioni',
'exif-gpsdestbearing'              => 'Direzzioni dâ distinazzioni',
'exif-gpsdestdistanceref'          => 'Rifirimentu pi la distanza dâ distinazzioni',
'exif-gpsdestdistance'             => 'Distanza dâ distinazzioni',
'exif-gpsprocessingmethod'         => "Nomu dû mètudu d'elabburazzioni GPS",
'exif-gpsareainformation'          => 'Nomu dâ zona GPS',
'exif-gpsdatestamp'                => 'Data GPS',
'exif-gpsdifferential'             => 'Currezzioni diffirinziali GPS',

# EXIF attributes
'exif-compression-1' => 'Nuddu',

'exif-unknowndate' => 'Data scanusciuta',

'exif-orientation-1' => 'Nurmali',
'exif-orientation-2' => 'Capuvortu urizzontarmenti',
'exif-orientation-3' => 'Rutatu di 180°',
'exif-orientation-4' => 'Capuvortu virticarmenti',
'exif-orientation-5' => "Rotatu 90° 'n sensu antiurariu e capuvortu virticarmenti",
'exif-orientation-6' => "Rutatu 90° 'n senzu orariu",
'exif-orientation-7' => "Rotatu 90° 'n sensu urariu e capuvortu virticarmenti",
'exif-orientation-8' => "Rutatu 90° 'n senzu antiorariu",

'exif-planarconfiguration-1' => 'a blocchi (chunky)',
'exif-planarconfiguration-2' => 'liniari (planar)',

'exif-xyresolution-i' => '$1 punti pi puseri (dpi)',
'exif-xyresolution-c' => '$1 punti pi cintìmitru (dpc)',

'exif-colorspace-65535' => 'Nun calibbratu',

'exif-componentsconfiguration-0' => 'assenti',

'exif-exposureprogram-0' => 'Nun difinitu',
'exif-exposureprogram-1' => 'Manuali',
'exif-exposureprogram-2' => 'Standard',
'exif-exposureprogram-3' => 'Priuritati a lu diaframma',
'exif-exposureprogram-4' => "Priuritati a l'espusizzioni",
'exif-exposureprogram-5' => 'Artìsticu (urientatu â prufunnitati di campu)',
'exif-exposureprogram-6' => 'Spurtivu (urientatu â vilucitati di ripresa)',
'exif-exposureprogram-7' => 'Ritrattu (suggetti vicini cu sfunnu fora focu)',
'exif-exposureprogram-8' => 'Panurama (suggetti luntani cu sfunnu a focu)',

'exif-subjectdistance-value' => '$1 metri',

'exif-meteringmode-0'   => 'Scanusciutu',
'exif-meteringmode-1'   => 'Mèdia',
'exif-meteringmode-2'   => 'Media pisata cintrata',
'exif-meteringmode-3'   => 'Spot',
'exif-meteringmode-4'   => 'MultiSpot',
'exif-meteringmode-5'   => 'Pattern',
'exif-meteringmode-6'   => 'Parziali',
'exif-meteringmode-255' => 'Àutru',

'exif-lightsource-0'   => 'Scanusciuta',
'exif-lightsource-1'   => 'Luci sulari',
'exif-lightsource-2'   => 'Làmpara a fluoriscenza',
'exif-lightsource-3'   => 'Làmpara a lu tungstenu (a ncanniscenza)',
'exif-lightsource-4'   => 'Flash',
'exif-lightsource-9'   => 'Bonu tempu',
'exif-lightsource-10'  => 'Nigghiusu',
'exif-lightsource-11'  => "'N ùmmira",
'exif-lightsource-12'  => 'Daylight fluorescent (D 5700 - 7100K)',
'exif-lightsource-13'  => 'Day white fluorescent (N 4600 - 5400K)',
'exif-lightsource-14'  => 'Cool white fluorescent (W 3900 - 4500K)',
'exif-lightsource-15'  => 'White fluorescent (WW 3200 - 3700K)',
'exif-lightsource-17'  => 'Luci standard A',
'exif-lightsource-18'  => 'Luci standard B',
'exif-lightsource-19'  => 'Luci standard C',
'exif-lightsource-20'  => 'Alluminanti D55',
'exif-lightsource-21'  => 'Alluminanti D65',
'exif-lightsource-22'  => 'Alluminanti D75',
'exif-lightsource-23'  => 'Alluminanti D50',
'exif-lightsource-24'  => 'Làmpara di studiu ISO a lu tungstenu',
'exif-lightsource-255' => 'Àutra surgenti luminusa',

# Flash modes
'exif-flash-fired-0'    => 'Lu flash non scattau',
'exif-flash-fired-1'    => 'Flash scattatu',
'exif-flash-return-0'   => 'nudda funzioni di ndividuazzioni dâ turnata dâ luci strobboscòpica',
'exif-flash-return-2'   => 'luci strobboscòpica di riturnata non ndividuata',
'exif-flash-return-3'   => 'luci strobboscòpica di riturnata ndividuata',
'exif-flash-mode-1'     => 'attivazzioni flash fattu câ forza',
'exif-flash-mode-2'     => 'rimuzzioni flash fattu câ forza',
'exif-flash-mode-3'     => 'modu automàticu',
'exif-flash-function-1' => 'Astuta flash',
'exif-flash-redeye-1'   => 'modu menu occhi russi',

'exif-focalplaneresolutionunit-2' => 'puseri',

'exif-sensingmethod-1' => 'Nun difinitu',
'exif-sensingmethod-2' => 'Sinzuri ària culuri a 1 chip',
'exif-sensingmethod-3' => 'Sinzuri ària culuri a 2 chip',
'exif-sensingmethod-4' => 'Sinzuri ària culuri a 3 chip',
'exif-sensingmethod-5' => 'Sinzuri ària culuri siquinziali',
'exif-sensingmethod-7' => 'Sinzuri triliniari',
'exif-sensingmethod-8' => 'Sinzuri liniari culuri siquinziali',

'exif-scenetype-1' => 'Fotugrafìa diretta',

'exif-customrendered-0' => 'Prucessu nurmali',
'exif-customrendered-1' => 'Prucessu pirsunalizzatu',

'exif-exposuremode-0' => 'Espusizzioni automàtica',
'exif-exposuremode-1' => 'Espusizzioni manuali',
'exif-exposuremode-2' => 'Bracketing automàticu',

'exif-whitebalance-0' => 'Valanzamentu dû jancu automàticu',
'exif-whitebalance-1' => 'Valanzamentu dû jancu manuali',

'exif-scenecapturetype-0' => 'Standard',
'exif-scenecapturetype-1' => 'Panurama',
'exif-scenecapturetype-2' => 'Ritrattu',
'exif-scenecapturetype-3' => 'Nutturna',

'exif-gaincontrol-0' => 'Nuddu',
'exif-gaincontrol-1' => 'Ènfasi pi accanzu vasciu',
'exif-gaincontrol-2' => 'Ènfasi pi accanzu àutu',
'exif-gaincontrol-3' => 'Diènfasi pi accanzu vasciu',
'exif-gaincontrol-4' => 'Diènfasi pi accanzu àutu',

'exif-contrast-0' => 'Nurmali',
'exif-contrast-1' => 'Cuntrastu àutu',
'exif-contrast-2' => 'Cuntrastu vasciu',

'exif-saturation-0' => 'Nurmali',
'exif-saturation-1' => 'Saturazzioni vascia',
'exif-saturation-2' => 'Saturazzioni àuta',

'exif-sharpness-0' => 'Nurmali',
'exif-sharpness-1' => 'Ntitizza minuri',
'exif-sharpness-2' => 'Nititizza maiuri',

'exif-subjectdistancerange-0' => 'Scanusciuta',
'exif-subjectdistancerange-1' => 'Macru',
'exif-subjectdistancerange-2' => 'Suggettu vicinu',
'exif-subjectdistancerange-3' => 'Suggettu luntanu',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'Latitùtini Nord',
'exif-gpslatitude-s' => 'Latitùtini Sud',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'Lungitùtini Est',
'exif-gpslongitude-w' => 'Lungitùtini Ovest',

'exif-gpsstatus-a' => 'Misurazzioni n cursu',
'exif-gpsstatus-v' => 'Misurazzioni nteropiràbbili',

'exif-gpsmeasuremode-2' => 'Misurazzioni bidiminziunali',
'exif-gpsmeasuremode-3' => 'Misurazzioni tridiminziunali',

# Pseudotags used for GPSSpeedRef
'exif-gpsspeed-k' => 'Chilòmitri orari',
'exif-gpsspeed-m' => 'Migghia orari',
'exif-gpsspeed-n' => 'Gruppa',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'Direzzioni riali',
'exif-gpsdirection-m' => 'Direzzioni magnètica',

# External editor support
'edit-externally'      => 'Cancia stu file usannu un prugramma sternu',
'edit-externally-help' => "Pi chiossai nfurmazzioni cunzurtari l'[//www.mediawiki.org/wiki/Manual:External_editors istruzzioni] ('n ngrisi)",

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'tutti',
'namespacesall' => 'Tutti',
'monthsall'     => 'tutti',

# E-mail address confirmation
'confirmemail'             => 'Cunferma ndirizzu e-mail',
'confirmemail_noemail'     => 'Nun hà statu ndicatu un ndirizzu e-mail vàlidu ntê propi [[Special:Preferences|prifirenzi]].',
'confirmemail_text'        => "Stu situ richiedi la virìfica di l ndirizzu e-mail prima di putiri usari li funzioni cunnessi a l'email. Prèmiri lu pulsanti ccà sutta pi mannari na richiesta di cunferma a lu propiu ndirizzu; ntô missaggiu è prisenti un culligamenti ca cunteni un còdici. Visitari lu culligamentu cu lu propiu browser pi cunfirmari ca lu ndirizzu e-mail è vàlidu.",
'confirmemail_pending'     => "Lu còdici di cunferma vinni già mannatu pi posta alittrònica; siddu l'account fu criatu di picca tempu, si preja d'aspittari l'arrivu dû còdici pi quarchi minutu prima di pruvari  d'addumannàrinni unu novu.",
'confirmemail_send'        => 'Manna un còdici di cunferma via e-mail.',
'confirmemail_sent'        => 'Missaggiu e-mail di cunferma mannatu.',
'confirmemail_oncreate'    => 'Un còdici di cunferma hà statu spiditu a lu ndirizzu di posta alittrònica ndicatu. Lu còdici nun è nicissariu pi tràsiri lu situ, ma è nicissariu furnirilu pi putiri abbilitari tutti li funzioni dû situ ca fannu usu dâ posta alittrònica.',
'confirmemail_sendfailed'  => "{{SITENAME}} nun pò mannari lu missaggiu e-mail di cunferma. Virificari ca lu nnirizzu nun cunteni caràttiri nun vàlidi.

Missaggiu d'erruri dû mailer: $1",
'confirmemail_invalid'     => 'Còdici di cunferma nun vàlidu. Lu còdici putissi èssiri scadutu.',
'confirmemail_needlogin'   => 'È nicissariu $1 pi cunfirmari lu propiu ndirizzu e-mail.',
'confirmemail_success'     => "Lu ndirizzu e-mail è cunfirmatu. Ora è pussìbbili esèquiri l'accessu e fari chinu usu dû situ.",
'confirmemail_loggedin'    => 'Lu tò nnirizzu email fu ora cunfirmatu.',
'confirmemail_error'       => 'Erruri ntô sarvataggiu dâ cunferma.',
'confirmemail_subject'     => '{{SITENAME}}: richiesta di cunferma di lu ndirizzu',
'confirmemail_body'        => 'Quarcunu, prubbabbirmenti tu stissu di lu ndirizzu IP $1, hà riggistratu l\'account "$2" supra {{SITENAME}} ndicannu stu ndirizzu e-mail.

Pi cunfirmari ca l\'account t\'apparteni e attivari li funzioni rilativi a lu nvìu di e-mail supra {{SITENAME}}, grapi lu culligamentu siquenti cu lu tò browser:

$3

Siddu l\'account *nun* t\'apparteni, grapi lu siguenti culligamentu:

$5

Stu còdici di cunferma scadi automaticamenti a li $4.',
'confirmemail_invalidated' => 'Addumannata di cunferma ndirizzu e-mail scancillata',
'invalidateemail'          => 'Scancella la dumanna di cunferma e-mail',

# Scary transclusion
'scarytranscludedisabled' => '[La nchiusioni di pàggini tra siti wiki nun è attiva]',
'scarytranscludefailed'   => '[Erruri: Mpussìbbili uttèniri lu template $1]',
'scarytranscludetoolong'  => '[URL troppu longu]',

# Delete conflict
'deletedwhileediting' => "'''Accura''': Sta pàggina vinni scancillata doppu c'hai accuminzatu a scanciàrila!",
'confirmrecreate'     => "L'utenti [[User:$1|$1]] ([[User talk:$1|discussioni]]) scancillau sta pàggina doppu ca hai accuminciatu a scanciàrila, pi stu mutivu: ''$2'' Pi favuri, cunferma ca addisìi pi daveru criari n'àutra vota sta pàggina.",
'recreate'            => 'Ricrìa',

'unit-pixel' => 'px',

# action=purge
'confirm_purge_button' => 'Cunferma',
'confirm-purge-top'    => "S'addisìa puliri la cache di sta pàggina?",
'confirm-purge-bottom' => "Pulizziari la cache di na pàggina pirmetti d'ammustrari la sô virsioni cchiù nova.",

# Multipage image navigation
'imgmultipageprev' => '← pàggina pricidenti',
'imgmultipagenext' => 'pàggina siquenti →',
'imgmultigo'       => "Va'",
'imgmultigoto'     => 'Vai a pàggina $1',

# Table pager
'ascending_abbrev'         => 'crisc',
'descending_abbrev'        => 'dicrisc',
'table_pager_next'         => 'Pàggina succissiva',
'table_pager_prev'         => 'Pàggina pricidenti',
'table_pager_first'        => 'Prima pàggina',
'table_pager_last'         => 'Ùrtima pàggina',
'table_pager_limit'        => 'Ammustra $1 file pi pàggina',
'table_pager_limit_submit' => "Va'",
'table_pager_empty'        => 'Nuddu risurtatu',

# Auto-summaries
'autosumm-blank'   => 'Pàggina svacantata',
'autosumm-replace' => "Pàggina sustituita cu '$1'",
'autoredircomment' => 'Rinnirizzamentu â pàggina [[$1]]',
'autosumm-new'     => "Criata pàggina cu '$1'",

# Live preview
'livepreview-loading' => "Carricamentu 'n cursu...",
'livepreview-ready'   => 'Carricamentu n cursu… Prontu.',
'livepreview-failed'  => "Erruri ntâ funzioni Live preview. Usari l'antiprima standard.",
'livepreview-error'   => 'Mpussìbbili effittuari lu culligamentu: $1 "$2" Usari l\'antiprima standard.',

# Friendlier slave lag warnings
'lag-warn-normal' => "Li canciamenti appurtati {{PLURAL:$1|nta l'ùrtimu secundu|nta l'ùrtimi $1 secundi}} ponnu nun èssiri nta sta lista.",
'lag-warn-high'   => "A càusa di nu ritardu eccissivu nta l'aggiurnamentu dô server di databbasi, li canciamenti appurtati {{PLURAL:$1|nta l'ùrtimu secundu|nta l'ùrtimi $1 secundi}} ponnu nun èssiri nta sta lista.",

# Watchlist editor
'watchlistedit-numitems'       => 'La lista dê pàggini taliati cunteni {{PLURAL:$1|na pàggina (cu la rispettiva pàggina di discussioni)|$1 pàggini (cu li rispettivi pàggini di discussioni)}}.',
'watchlistedit-noitems'        => 'La lista dê pàggini taliati è vacanti.',
'watchlistedit-normal-title'   => 'Cancia pàggini taliati',
'watchlistedit-normal-legend'  => 'Eliminazzioni di pàggini dâ lista dê pàggini taliati',
'watchlistedit-normal-explain' => "Ccà sutta sugnu alincati tutti li pàggine taliati. Pi eliminari una o cchiù pàggini dâ lista, silizziunari li casiddi accantu e fari clic supra lu buttuni 'Elìmina pàggini' 'n fundu all'alencu. Accura ca è puru possibbili [[Special:EditWatchlist/raw|canciari la lista 'n forma testuali]].",
'watchlistedit-normal-submit'  => 'Elìmina pàggini',
'watchlistedit-normal-done'    => 'Dâ lista dê pàggini taliati hà{{PLURAL:$1|&nbsp;stata eliminata na pàggina|nnu stati eliminati $1 pàggini}}:',
'watchlistedit-raw-title'      => "Cancia li pàggini taliati 'n forma testuali",
'watchlistedit-raw-legend'     => 'Canciamentu testuali pàggini taliati',
'watchlistedit-raw-explain'    => "Ccà sutta sugnu alincati tutti li pàggine taliati. Pi canciari la lista agghiunciri o rimòviri li rispettivi tituli, unu pi riga. Quannu funisci, fà clic supra 'Aggiorna la lista' 'n fundu all'alencu. Accura ca è puru possibbili [[Special:EditWatchlist|canciari la lista câ 'nterfaccia standard]].",
'watchlistedit-raw-titles'     => 'Pàggini:',
'watchlistedit-raw-submit'     => 'Aggiorna la lista',
'watchlistedit-raw-done'       => 'La tò lista dê pàggini taliati vinni aggiurnata.',
'watchlistedit-raw-added'      => '{{PLURAL:$1|Fu junciuta na pàggina|Foru junciuti $1 pàggini}}:',
'watchlistedit-raw-removed'    => '{{PLURAL:$1|&nbsp;Vinni scancillata na pàggina|Foru scancillati $1 pàggini}}:',

# Watchlist editing tools
'watchlisttools-view' => 'Talìa li canciamenti rilivanti',
'watchlisttools-edit' => 'Talìa e cancia la lista',
'watchlisttools-raw'  => "Cancia la lista 'n forma testuali",

# Iranian month names
'iranian-calendar-m1' => 'Farvardin',
'iranian-calendar-m2' => 'Ordibehesht',
'iranian-calendar-m3' => 'Khordad',

# Core parser functions
'unknown_extension_tag' => 'Tag estensioni scanusciutu: "$1"',
'duplicate-defaultsort' => 'Accura: la chiavi priddifinuta d\'urdinamentu "$2" si sciarrìa cu chidda d\'antura "$1".',

# Special:Version
'version'                       => 'virsioni',
'version-extensions'            => 'Estenzioni nstallati',
'version-specialpages'          => 'Pàggini spiciali',
'version-parserhooks'           => 'Hook dû parser',
'version-variables'             => 'Variabili',
'version-other'                 => 'Àutru',
'version-mediahandlers'         => 'Gistori di cuntinuti multimediali',
'version-hooks'                 => 'Hook',
'version-extension-functions'   => 'Funzioni ntrudotti di estenzioni',
'version-parser-extensiontags'  => 'Tag canusciuti dô parser ntrudotti di estenzioni',
'version-parser-function-hooks' => 'Hook pi funzioni dû parser',
'version-hook-name'             => "Nomu di l'hook",
'version-hook-subscribedby'     => 'Suttascrizzioni',
'version-version'               => '(Virsioni $1)',
'version-license'               => 'Licenza',
'version-software'              => 'Software nstallatu',
'version-software-product'      => 'Prodottu',
'version-software-version'      => 'Virsioni',

# Special:FilePath
'filepath'         => 'Pircorsu di nu file',
'filepath-page'    => 'Nnomu dô file:',
'filepath-submit'  => 'Pircorsu',
'filepath-summary' => 'Sta pàggina spiciali rimanna arredi lu traggittu cumpretu di nu file. Li mmàggini sù ammustrati cu la cchiù àuta risoluzzioni dispunìbbili, pi l\'àutri tipi di file parti direttamenti lu prugramma assuciatu.

Mèttiri lu nomu dû file senza lu prifissu "{{ns:file}}:"',

# Special:FileDuplicateSearch
'fileduplicatesearch'          => 'Circata dê file duppiuni',
'fileduplicatesearch-summary'  => "Circata di pussìbbili dupppiuni dû file 'n basi ô valuri di ''hash''.",
'fileduplicatesearch-legend'   => 'Circata di nu duppiuni',
'fileduplicatesearch-filename' => 'Nomu dû file:',
'fileduplicatesearch-submit'   => 'Circata',
'fileduplicatesearch-info'     => '$1 × $2 pixel<br />Diminzioni: $3<br />Tipu MIME: $4',
'fileduplicatesearch-result-1' => 'Non ci sunnu duppiuni li stissi dû file "$1".',
'fileduplicatesearch-result-n' => '{{PLURAL:$2|C\'è ggià nu duppiuni lu stissu|Ci sunnu ggià $2 duppiuni li stissi}} dû file "$1".',

# Special:SpecialPages
'specialpages'                   => 'Pàggini spiciali',
'specialpages-note'              => '----
* Pàggini spiciali non risirvati.
* <strong class="mw-specialpagerestricted">Pàggini spiciali risirvati sulu a quarchi catigurìa d\'utenti.</strong>',
'specialpages-group-maintenance' => 'Resocunti di manutinzioni',
'specialpages-group-other'       => 'Autri pàggini spiciali',
'specialpages-group-login'       => 'Trasi / riggìstrazzioni',
'specialpages-group-changes'     => 'Ùrtimi canciamenti e riggistri',
'specialpages-group-media'       => 'File multimidiali - caricamentu e rennicunti',
'specialpages-group-users'       => 'Utenti e diritti',
'specialpages-group-highuse'     => 'Pàggini cchiù usati',
'specialpages-group-pages'       => 'Listi di pàggini',
'specialpages-group-pagetools'   => 'Strumenti ùtili pi li pàggini',
'specialpages-group-wiki'        => 'Strumenti e nfurmazzioni supra lu pruggettu',
'specialpages-group-redirects'   => 'Pàggini spiciali di redirect',
'specialpages-group-spam'        => "Strumenti contr'a lu spam",

# Special:BlankPage
'blankpage'              => 'Pàggina vacanti',
'intentionallyblankpage' => 'Sta pàggina è lassata vacanti apposta e è usata pi benchmark, ecc.',

# External image whitelist
'external_image_whitelist' => " #lassa sta riga cum'è ora, senza tuccàrila<pre>
#Nzirisci li frammenti dî sprissioni rigulari (solu la parti ca và tra //) di sècutu
#Chisti hann'a currispùnniri cu li URL di mmàggini esterni (hotlinked)
#Chiddi ca currispùnnunu vènunu appoi ammustrati comu mmàggini, casu cuntràriu s'ammustra sulu nu culligamentu a la mmàggini
#Li lìnii ca accumincianu cu # sunnu di cummentu
#La diffirenza tra maiusculi e minusculi nun è significativa

#Nzirisci supr'a sta riga tutti li frammenti di regex. Lassa sta riga cum'è ora, senza tuccàrila</pre>",

# Special:Tags
'tags'                    => 'Tag di canciamenti validi',
'tag-filter'              => 'Filtru dô [[Special:Tags|Tag]]',
'tag-filter-submit'       => 'Filtra',
'tags-title'              => 'Tag',
'tags-intro'              => "Sta pàggina elenca l'etichetti ca lu software putissi associari a nu canciamentu e lu loru significatu",
'tags-tag'                => 'Nnomu internu dô tag',
'tags-display-header'     => 'Aspettu nâ lista di canciamenti',
'tags-description-header' => 'Discrizzioni cumpleta dô significatu',
'tags-hitcount-header'    => 'Canciamenti che hanno tag',
'tags-edit'               => 'cancia',
'tags-hitcount'           => '1 {{PLURAL:$1|canciamento|canciamenti}}',

# Database error messages
'dberr-header'      => 'Sta wiki havi nu prublema',
'dberr-problems'    => 'Spiacenti! Stu situ sta havennu prublema tecnici.',
'dberr-again'       => 'Prova a aspittari na para di minuti e ricaricari.',
'dberr-info'        => '(Impussibili cuntattari lu server dô database: $1)',
'dberr-usegoogle'   => 'Poi pruvari a circari supra Google ammentri.',
'dberr-outofdate'   => 'Nota ca la loru indicizzazioni dê nostri cuntintinuta po essiri nun aggiurnata.',
'dberr-cachederror' => 'Chista ca segui è na copia cache da pàggina richiesta, e putissi essiri nun aggiurnata.',

# HTML forms
'htmlform-invalid-input'       => "Ci su prublema cu l'input nseritu",
'htmlform-select-badoption'    => "Lu valori spicificatu nun è n'opzioni valida.",
'htmlform-int-invalid'         => "Lu valiri spicificatu nun è n'interu.",
'htmlform-float-invalid'       => "Lu valuri c'hai spicificatu nun è nu nnummuru.",
'htmlform-int-toolow'          => 'Lu valori spicificatu è sutta lu minimu di $1',
'htmlform-int-toohigh'         => 'Lu valori spicificatu è supra lu minimu di $1',
'htmlform-submit'              => 'Invia',
'htmlform-reset'               => 'Annulla canciamenti',
'htmlform-selectorother-other' => 'Autri',

# New logging system
'revdelete-restricted'   => 'ristrizzioni ai suli amministratura attivate',
'revdelete-unrestricted' => 'ristrizzioni pi suli amministraturi rimossi',
'newuserlog-byemail'     => 'password mannata via mail',

);
