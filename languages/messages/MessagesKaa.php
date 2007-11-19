<?php
/** Kara-Kalpak (Qaraqalpaqsha)
 *
 * @addtogroup Language
 *
 * @author Atabek
 * @author Jiemurat
 * @author AlefZet
 */

$fallback = 'kk-tr';

$separatorTransformTable = array(
	',' => "\xc2\xa0",
	'.' => ',',
);

$fallback8bitEncoding = 'windows-1254';

$linkPrefixExtension = true;

$namespaceNames = array(
	NS_MEDIA          => 'Media',
	NS_SPECIAL        => 'Arnawlı',
	NS_MAIN           => '',
	NS_TALK           => "Sa'wbet",
	NS_USER           => 'Paydalanıwshı',
	NS_USER_TALK      => "Paydalanıwshı_sa'wbeti",
	# NS_PROJECT set by $wgMetaNamespace
	NS_PROJECT_TALK   => "$1_sa'wbeti",
	NS_IMAGE          => "Su'wret",
	NS_IMAGE_TALK     => "Su'wret_sa'wbeti",
	NS_MEDIAWIKI      => 'MediaWiki',
	NS_MEDIAWIKI_TALK => "MediaWiki_sa'wbeti",
	NS_TEMPLATE       => 'Shablon',
	NS_TEMPLATE_TALK  => "Shablon_sa'wbeti",
	NS_HELP           => 'Anıqlama',
	NS_HELP_TALK      => "Anıqlama_sa'wbeti",
	NS_CATEGORY       => 'Kategoriya',
	NS_CATEGORY_TALK  => "Kategoriya_sa'wbeti",
);

$datePreferences = array(
	'default',
	'mdy',
	'dmy',
	'ymd',
	'yyyy-mm-dd',
	'ISO 8601',
);

$defaultDateFormat = 'ymd';

$datePreferenceMigrationMap = array(
	'default',
	'mdy',
	'dmy',
	'ymd'
);

$dateFormats = array(
	'mdy time' => 'H:i',
	'mdy date' => 'xg j, Y "j."',
	'mdy both' => 'H:i, xg j, Y "j."',

	'dmy time' => 'H:i',
	'dmy date' => 'j F, Y "j."',
	'dmy both' => 'H:i, j F, Y "j."',

	'ymd time' => 'H:i',
	'ymd date' => 'Y "j." xg j',
	'ymd both' => 'H:i, Y "j." xg j',

	'yyyy-mm-dd time' => 'xnH:xni:xns',
	'yyyy-mm-dd date' => 'xnY-xnm-xnd',
	'yyyy-mm-dd both' => 'xnH:xni:xns, xnY-xnm-xnd',

	'ISO 8601 time' => 'xnH:xni:xns',
	'ISO 8601 date' => 'xnY-xnm-xnd',
	'ISO 8601 both' => 'xnY-xnm-xnd"T"xnH:xni:xns',
);

$linkTrail = "/^([a-zı'ʼ’“»]+)(.*)$/sDu";

$messages = array(
# User preference toggles
'tog-hideminor'            => "Aqırg'ı o'zgerislerden kishilerin jasır",
'tog-showtoolbar'          => "O'zgertiw a'sbapların ko'rset (JavaScript)",
'tog-showtoc'              => "Mazmunın ko'rset (3-ten artıq bo'limi bar betlerge)",
'tog-rememberpassword'     => "Menin' kirgenimdi usı kompyuterde saqlap qal",
'tog-watchcreations'       => 'Men jaratqan betlerdi baqlaw dizimime qos',
'tog-watchdefault'         => "Men o'zgeris kiritken betlerdi baqlaw dizimime qos",
'tog-watchmoves'           => "Men ko'shirgen betlerdi baqlaw dizimime qos",
'tog-watchdeletion'        => "Men o'shirgen betlerdi baqlaw dizimime qos",
'tog-previewonfirst'       => "Birinshi o'zgertiwdi ko'rip shıq",
'tog-enotifwatchlistpages' => "Baqlang'an bet o'zgertilgende mag'an xat jiber",
'tog-enotifusertalkpages'  => "Menin' sa'wbetim o'zgertilgende mag'an xat jiber",
'tog-enotifminoredits'     => "Kishi o'zgerisler haqqında da mag'an xat jiber",
'tog-shownumberswatching'  => "Baqlag'an paydalanıwshılar sanın ko'rset",
'tog-watchlisthideown'     => "Baqlaw dizimindegi menin' o'zgertiwlerimdi jasır",
'tog-watchlisthidebots'    => "Baqlaw dizimindegi bot o'zgertiwlerin jasır",
'tog-watchlisthideminor'   => "Baqlaw diziminen kishi o'zgerislerdi jasır",
'tog-diffonly'             => "Parqlardan to'men bet mag'lıwmatın ko'rsetpe",

'underline-always' => "Ha'r dayım",
'underline-never'  => 'Hesh qashan',

'skinpreview' => '(Korip al)',

# Dates
'sunday'        => 'Ekshenbi',
'monday'        => "Du'yshenbi",
'tuesday'       => 'Siyshenbi',
'wednesday'     => "Sa'rshenbi",
'thursday'      => 'Piyshenbi',
'friday'        => 'Juma',
'saturday'      => 'Shenbi',
'sun'           => 'Eks',
'mon'           => 'Dsh',
'tue'           => 'Ssh',
'wed'           => "Sa'r",
'thu'           => 'Psh',
'fri'           => 'Jum',
'sat'           => 'Shn',
'january'       => 'Yanvar',
'february'      => 'Fevral',
'march'         => 'Mart',
'april'         => 'Aprel',
'may_long'      => 'May',
'june'          => 'İyun',
'july'          => 'İyul',
'august'        => 'Avgust',
'september'     => 'Sentyabr',
'october'       => 'Oktyabr',
'november'      => 'Noyabr',
'december'      => 'Dekabr',
'january-gen'   => "yanvardın'",
'february-gen'  => "fevraldın'",
'march-gen'     => "marttın'",
'april-gen'     => "apreldin'",
'may-gen'       => "maydın'",
'june-gen'      => "iyunnin'",
'july-gen'      => "iyuldin'",
'august-gen'    => "avgusttın'",
'september-gen' => "sentyabrdin'",
'october-gen'   => "oktyabrdin'",
'november-gen'  => "noyabrdin'",
'december-gen'  => "dekabrdin'",
'jan'           => 'Yan',
'feb'           => 'Fev',
'mar'           => 'Mar',
'apr'           => 'Apr',
'may'           => 'May',
'jun'           => 'İun',
'jul'           => 'İul',
'aug'           => 'Avg',
'sep'           => 'Sen',
'oct'           => 'Okt',
'nov'           => 'Noy',
'dec'           => 'Dek',

# Bits of text used by many pages
'categories'            => 'Kategoriyalar',
'pagecategories'        => '{{PLURAL:$1|Kategoriya|Kategoriyalar}}',
'category_header'       => '"$1" kategoriyasindag\'ı betler',
'subcategories'         => 'Podkategoriyalar',
'category-media-header' => '"$1" kategoriyasindag\'ı media',
'category-empty'        => "''Bul kategoriyada ha'zir hesh bet yamasa media joq''",

'linkprefix'   => '/^(.*?)([a-zıA-Zİ\x80-\xff]+)$/sD',
'mainpagetext' => "<big>'''MediaWiki tabıslı ornatıldı.'''</big>",

'about'          => 'Proyekt haqqında',
'article'        => "Mag'lıwmat beti",
'newwindow'      => "(jan'a aynada)",
'cancel'         => 'Biykar',
'qbfind'         => 'Tabıw',
'qbbrowse'       => "Ko'riw",
'qbedit'         => "O'zgertiw",
'qbpageoptions'  => 'Usı bet',
'qbpageinfo'     => 'Kontekst',
'qbmyoptions'    => "Menin' betlerim",
'qbspecialpages' => 'Arnawlı betler',
'moredotdotdot'  => "Ja'ne...",
'mypage'         => "Menin' betim",
'mytalk'         => "Menin' sa'wbetim",
'anontalk'       => "Usı IP sa'wbeti",
'navigation'     => 'Navigatsiya',

# Metadata in edit box
'metadata_help' => "Metamag'lıwmat:",

'errorpagetitle'    => 'Qatelik',
'returnto'          => '$1 betine qaytıw.',
'tagline'           => "{{SITENAME}} mag'lıwmatı",
'help'              => 'Anıqlama',
'search'            => 'İzlew',
'searchbutton'      => 'İzle',
'go'                => "O'tiw",
'searcharticle'     => "O'tin'",
'history'           => 'Bet tariyxı',
'history_short'     => 'Tariyx',
'updatedmarker'     => "aqırg'ı kirgenimnen keyin jan'alang'anlar",
'info_short'        => "Mag'lıwmat",
'printableversion'  => 'Baspa nusqası',
'permalink'         => 'Turaqlı siltew',
'print'             => "Baspag'a shıg'arıw",
'edit'              => "O'zgertiw",
'editthispage'      => "Usı betti o'zgertiw",
'delete'            => "O'shiriw",
'deletethispage'    => "Usı betti o'shiriw",
'protect'           => "Qorg'aw",
'protect_change'    => "qorg'awdı o'zgertiw",
'protectthispage'   => "Bul betti qorg'aw",
'unprotect'         => "Qorg'amaw",
'unprotectthispage' => "Bul betti qorg'amaw",
'newpage'           => 'Taza bet',
'talkpage'          => 'Bul betti diskussiyalaw',
'talkpagelinktext'  => "Sa'wbet",
'specialpage'       => 'Arnawlı bet',
'personaltools'     => "Paydalanıwshı a'sbapları",
'postcomment'       => 'Kommentariy beriw',
'articlepage'       => "Mag'lıwmat betin ko'riw",
'talk'              => 'Diskussiya',
'views'             => "Ko'rinis",
'toolbox'           => "A'sbaplar",
'userpage'          => "Paydalanıwshı betin ko'riw",
'projectpage'       => "Proyekt betin ko'riw",
'imagepage'         => "Su'wret betin ko'riw",
'mediawikipage'     => "Xabar betin ko'riw",
'templatepage'      => "Shablon betin ko'riw",
'viewhelppage'      => "Anıqlama betin ko'riw",
'categorypage'      => "Kategoriya betin ko'riw",
'viewtalkpage'      => "Diskussiyanı ko'riw",
'otherlanguages'    => 'Basqa tillerde',
'redirectedfrom'    => "($1 degennen burılg'an)",
'redirectpagesub'   => 'Burıwshı bet',
'lastmodifiedat'    => "Bul bettin' aqırg'ı ma'rte o'zgertilgen waqtı: $2, $1.", # $1 date, $2 time
'viewcount'         => "Bul bet {{PLURAL:$1|bir ma'rte|$1 ma'rte}} ko'rip shıg'ılg'an.",
'protectedpage'     => "Qorg'alg'an bet",
'jumpto'            => "Bug'an o'tiw:",
'jumptonavigation'  => 'navigatsiya',
'jumptosearch'      => 'izlew',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'         => '{{SITENAME}} haqqında',
'aboutpage'         => '{{ns:project}}:Proyekt haqqında',
'copyrightpagename' => "{{SITENAME}} proyektinin' avtorlıq huquqları",
'copyrightpage'     => '{{ns:project}}:Avtorlıq huquqı',
'currentevents'     => "Ha'zirgi ha'diyseler",
'currentevents-url' => "Ha'zirgi ha'diyseler",
'disclaimers'       => 'Juwapkershilikten bas tartıw',
'disclaimerpage'    => '{{ns:project}}:Juwapkershilikten bas tartıw',
'edithelp'          => "O'zgertiw anıqlaması",
'edithelppage'      => "{{ns:help}}:O'zgertiw",
'helppage'          => '{{ns:help}}:Mazmunı',
'mainpage'          => 'Bas bet',
'policy-url'        => "{{ns:project}}:Qag'ıydalar",
'portal'            => "Ja'miyet portalı",
'portal-url'        => "{{ns:project}}:Ja'miyet Portalı",
'privacy'           => "Konfidentsiallıq qag'ıydası",
'privacypage'       => "{{ns:project}}:Konfidentsiallıq qag'ıydası",
'sitesupport'       => "Ja'rdem berıw",
'sitesupport-url'   => "{{ns:project}}:Ja'rdem",

'badaccess' => 'Ruxsatnama qateligi',

'versionrequired'     => "MediaWikidin' $1 versiyası kerek",
'versionrequiredtext' => "Bul betti paydalanıw ushın MediaWikidin' $1 nusqası kerek. [[{{ns:special}}:Version|Nusqa beti]]n qaran'.",

'ok'                      => 'OK',
'retrievedfrom'           => '"$1" saytınan alıng\'an',
'youhavenewmessages'      => 'Sizge $1 bar ($2).',
'newmessageslink'         => "jan'a xabarlar",
'newmessagesdifflink'     => "aqırg'ı o'zgeris",
'youhavenewmessagesmulti' => "$1 betinde sizge jan'a xabarlar bar",
'editsection'             => "o'zgertiw",
'editold'                 => "o'zgertiw",
'editsectionhint'         => "$1 bo'limin o'zgertiw",
'toc'                     => 'Mazmunı',
'showtoc'                 => "ko'rset",
'hidetoc'                 => 'jasır',
'viewdeleted'             => "$1 ko'riw?",
'restorelink'             => "{{PLURAL:$1|bir o'shirilgen o'zgeris|$1 o'shirilgen o'zgeris}}",
'feedlinks'               => 'Jolaq:',
'site-rss-feed'           => '$1 saytının\' "RSS" jolag\'ı',
'site-atom-feed'          => '$1 saytının\' "Atom" jolag\'ı',
'page-rss-feed'           => '"$1" betinin\' "RSS" jolag\'ı',
'page-atom-feed'          => '"$1" betinin\' "Atom" jolag\'ı',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main'      => 'Bet',
'nstab-user'      => 'Paydalanıwshı',
'nstab-media'     => 'Media beti',
'nstab-special'   => 'Arnawlı',
'nstab-project'   => 'Proyekt beti',
'nstab-image'     => 'Fayl beti',
'nstab-mediawiki' => 'Xabar',
'nstab-template'  => 'Shablon',
'nstab-help'      => 'Anıqlama beti',
'nstab-category'  => 'Kategoriya',

# Main script and global functions
'nosuchspecialpage' => 'Bunday arnawlı bet joq',

# General errors
'error'              => "Qa'telik",
'databaseerror'      => "Mag'lıwmatlar bazası qa'tesi",
'internalerror'      => "İshki qa'telik",
'internalerror_info' => "İshki qa'telik: $1",
'badtitle'           => 'Jaramsız atama',
'viewsource'         => "Ko'rip shıg'ıw",
'viewsourcefor'      => '$1 ushın',

# Login and logout pages
'logouttitle'        => "Shıg'ıw",
'loginpagetitle'     => 'Kiriw',
'yourname'           => 'Paydalanıwshı atı:',
'yourpassword'       => 'Parol:',
'yourpasswordagain'  => "Paroldi qayta kiritin':",
'remembermypassword' => "Menin' kirgenimdi usı kompyuterde saqlap qal",
'yourdomainname'     => "Sizin' domen:",
'login'              => 'Kiriw',
'loginprompt'        => "{{SITENAME}} saytına kiriw ushın kukiler qosılg'an bolıwı kerek.",
'userlogin'          => 'Kiriw / akkaunt jaratıw',
'logout'             => "Shıg'ıw",
'userlogout'         => "Shıg'ıw",
'notloggedin'        => 'Kirilmegen',
'nologin'            => "Akkauntın'ız joqpa? $1.",
'nologinlink'        => 'Akkaunt jarat',
'createaccount'      => 'Akkaunt jarat',
'gotaccount'         => "Akkauntın'ız barma? $1.",
'gotaccountlink'     => 'Kir',
'createaccountmail'  => 'e-mail arqalı',
'badretype'          => 'Siz kiritken parol tuwra kelmedi.',
'userexists'         => "Kiritken paydalanıwshı atı ba'nt. Basqa at kiritin'.",
'youremail'          => 'E-mail:',
'username'           => 'Paydalanıwshı atı:',
'uid'                => 'Paydalanıwshı IDsı:',
'yourrealname'       => "Haqıyqıy isimin'iz:",
'yourlanguage'       => 'Til:',
'yourvariant'        => "Tu'ri",
'yournick'           => "Nik isimin'iz:",
'email'              => 'E-mail',
'loginerror'         => 'Kiriwde qatelik',
'noname'             => 'Siz kiritken paydalanıwshı atı qate.',
'loginsuccesstitle'  => "Kiriw tabıslı a'melge asırıldı",
'loginsuccess'       => "'''{{SITENAME}} saytına \"\$1\" paydalanıwshı atı menen kirdin'iz.'''",
'nosuchuser'         => "\"\$1\" atlı paydalanıwshı joq. Tuwrı jazılg'anlıg'ın tekserin' yamasa taza akkaunt jaratın'.",
'nosuchusershort'    => '"$1" atlı paydalanıwshı joq. Tuwrı jazılg\'anlıg\'ın tekserin\'.',
'nouserspecified'    => "Siz paydalanıwshı atın ko'rsetpedin'iz.",
'wrongpassword'      => "Qate parol kiritlgen. Qaytadan kiritin'.",
'wrongpasswordempty' => "Parol kiritilmegen. Qaytadan ha'reket etin'.",
'mailmypassword'     => "Paroldi e-mailg'a jiberiw",
'mailerror'          => 'Xat jiberiwde qatelik juz berdi: $1',
'emailconfirmlink'   => "E-mail adresin'izdi tastıyıqlan'",
'accountcreated'     => 'Akkaunt jaratıldı',
'accountcreatedtext' => '$1 paydalanıwshısına akkaunt jaratıldı.',
'loginlanguagelabel' => 'Til: $1',

# Password reset dialog
'resetpass_missing' => "Formada mag'lıwmat joq.",

# Edit page toolbar
'bold_sample'     => 'Yarım juwan tekst',
'bold_tip'        => 'Yarım juwan tekst',
'italic_sample'   => 'Kursiv tekst',
'italic_tip'      => 'Kursiv tekst',
'link_sample'     => 'Siltew ataması',
'link_tip'        => 'İshki siltew',
'extlink_sample'  => 'http://www.example.com siltew ataması',
'extlink_tip'     => "Sırtqı siltew (http:// prefiksin kiritin')",
'headline_sample' => 'Atama teksti',
'headline_tip'    => "2-da'rejeli atama",
'math_sample'     => "Usı jerge formulanı jazın'",
'math_tip'        => 'Matematik formula (LaTeX)',
'nowiki_sample'   => "Formatlanbag'an tekstti usı jerge qoyın'",
'nowiki_tip'      => 'Wiki formatlawın esapqa almaw',
'image_sample'    => 'Example.jpg',
'media_sample'    => 'Example.ogg',
'media_tip'       => 'Media fayl siltewi',
'sig_tip'         => "Sizin' imzan'iz ha'mde waqıt belgisi",
'hr_tip'          => "Gorizont bag'ıtındag'ı sızıq (dım ko'p paydalanban')",

# Edit pages
'summary'                => 'Juwmaq',
'subject'                => 'Ataması',
'minoredit'              => "Bul kishi o'zgeris",
'watchthis'              => 'Bul betti baqlaw',
'savearticle'            => 'Betti saqla',
'preview'                => "Ko'rip shıg'ıw",
'showpreview'            => "Ko'rip shıq",
'showdiff'               => "O'zgerislerdi ko'rset",
'anoneditwarning'        => "'''Esletpe:''' Siz kirmedin'iz. Sizin' IP adresin'iz usi bettin' o'zgeris tariyxında saqlanıp qaladı.",
'missingcommenttext'     => "Kommentariydi to'mende kiritin'.",
'summary-preview'        => "Juwmag'ın ko'rip shıg'ıw",
'blockedoriginalsource'  => "'''$1''' betinin' teksti
to'mende ko'rsetilgen:",
'blockededitsource'      => "'''Siz ozgertken''' '''$1''' betinin' teksti to'mende ko'rsetilgen:",
'whitelistedittitle'     => "O'zgertiw ushın sistemag'a kiriwin'iz kerek",
'whitelistreadtitle'     => "Oqıw ushın sistemag'a kiriwin'iz kerek",
'whitelistacctitle'      => "Sizin' akkaunt jaratıwg'a ruxsatın'ız joq",
'nosuchsectiontitle'     => "Bunday bo'lim joq",
'loginreqtitle'          => "Sistemag'a kiriw kerek",
'loginreqlink'           => 'kiriw',
'loginreqpagetext'       => "Basqa betlerdi ko'riw ushın sizge $1 kerek.",
'accmailtitle'           => 'Parol jiberildi.',
'accmailtext'            => '"$1" paroli $2 g\'a jiberildi.',
'newarticle'             => '(Taza)',
'noarticletext'          => "Ha'zirgi waqıtta bul bette hesh qanday mag'lıwmat joq. Basqa betlerden usı bet atamasın [[{{ns:special}}:Search/{{PAGENAME}}|izlep ko'riwin'izge]] yamasa usı betti [{{fullurl:{{FULLPAGENAME}}|action=edit}} jaratıwin'ızga'] boladi.",
'updated'                => "(Jan'alang'an)",
'previewnote'            => "<strong>Bul ele tek aldınnan ko'rip shıg'ıw; o'zgerisler ele saqlanbadı!</strong>",
'editing'                => "$1 o'zgertilmekte",
'editinguser'            => "Paydalanıwshı <b>$1</b> o'zgertilmekte",
'editingsection'         => "$1 (bo'limi) o'zgertilmekte",
'editingcomment'         => "$1 (kommentariyi) o'zgertilmekte",
'yourtext'               => "Sizin' tekst",
'yourdiff'               => 'Parqlar',
'templatesused'          => "Bul bette qollanılg'an shablonlar:",
'templatesusedpreview'   => "Bul aldınnan ko'riw betinde qollanılg'an shablonlar:",
'templatesusedsection'   => "Bul bo'limde qollanılg'an shablonlar:",
'template-protected'     => "(qorg'alg'an)",
'template-semiprotected' => "(yarım-qorg'alg'an)",
'nocreatetitle'          => 'Bet jaratıw sheklengen',
'permissionserrors'      => 'Ruxsatnamalar Qatelikleri',

# Account creation failure
'cantcreateaccounttitle' => 'Akkaunt jaratılmadı',

# History pages
'revhistory'          => 'Nusqa tariyxı',
'viewpagelogs'        => "Usı bettin' jurnalın ko'riw",
'nohistory'           => "Bul bettin' o'zgertiw tariyxı joq.",
'revnotfound'         => 'Nusqa tabılmadı',
'currentrev'          => "Ha'zirgi nusqa",
'revisionasof'        => '$1 waqtındagı nusqası',
'revision-info'       => "$1 waqtındag'ı $2 istegen nusqası",
'previousrevision'    => '←Eskilew nusqası',
'nextrevision'        => "Jan'alaw nusqası→",
'currentrevisionlink' => "Ha'zirgi nusqa",
'cur'                 => "ha'zirgi",
'next'                => 'keyingi',
'last'                => "aqırg'ı",
'page_first'          => 'birinshi',
'page_last'           => "aqırg'ı",
'deletedrev'          => "[o'shirilgen]",
'histfirst'           => "En' aldıng'ısı",
'histlast'            => "En' aqırg'ısı",
'historysize'         => '({{PLURAL:$1|1 bayt|$1 bayt}})',
'historyempty'        => '(bos)',

# Revision feed
'history-feed-title'          => 'Nusqa tariyxı',
'history-feed-description'    => "Usı bettin' wikidegi nusqa tariyxı",
'history-feed-item-nocomment' => "$2 waqtındag'ı $1", # user at time

# Revision deletion
'rev-deleted-comment'    => "(kommentariy o'shirildi)",
'rev-deleted-user'       => "(paydalanıwshı atı o'shirildi)",
'rev-delundel'           => "ko'rsetiw/jasırıw",
'revdelete-selected'     => "'''$1''' {{PLURAL:$2|saylang'an nusqası|saylang'an nusqaları}}:",
'revdelete-legend'       => 'Sheklewlerdi belgilew:',
'revdelete-hide-text'    => 'Nusqa tekstin jasır',
'revdelete-hide-comment' => "O'zgertiw kommentariyin jasır",
'revdelete-hide-user'    => "O'zgeriwshi atın/IP jasır",
'revdelete-hide-image'   => "Fayl mag'lıwmatın jasır",
'revdelete-log'          => 'Jurnal kommentariyi:',
'revdelete-logentry'     => "[[$1]] nusqa ko'rinisin o'zgertti",

# Diffs
'history-title'             => '"$1": nusqa tariyxı',
'difference'                => "(Nusqalar arasındag'ı ayırmashılıq)",
'lineno'                    => '$1 qatar:',
'editcurrent'               => "Usı bettin' ha'zirgi nusqasın o'zgertiw",
'selectnewerversionfordiff' => "Salıstırıw ushın jan'alaw nusqasın saylan'",
'selectolderversionfordiff' => "Salıstırıw ushın eskilew nusqasın saylan'",
'compareselectedversions'   => "Saylang'an nusqalardı salıstırıw",
'editundo'                  => 'qaytar',
'diff-multi'                => "(Aradag'ı {{PLURAL:$1|bir nusqa|$1 nusqa}} ko'rsetilmeydi.)",

# Search results
'searchresults'         => "İzlew na'tiyjeleri",
'searchsubtitle'        => "'''[[:$1]]''' ushın izlegenin'iz",
'searchsubtitleinvalid' => "'''$1''' ushın izlegenin'iz",
'noexactmatch'          => "'''\"\$1\" atamalı bet joq.''' Bul betti [[:\$1|jaratıwın'ız]] mu'mkin.",
'prevn'                 => "aldıng'ı $1",
'nextn'                 => 'keyingi $1',
'viewprevnext'          => "Ko'riw: ($1) ($2) ($3)",
'powersearch'           => 'İzlew',

# Preferences page
'prefs-edits'           => "O'zgertiwler sanı:",
'prefsnologin'          => 'Kirilmegen',
'qbsettings-none'       => 'Hesh qanday',
'changepassword'        => "Paroldi o'zgertiw",
'skin'                  => "Sırtqı ko'rinis",
'math'                  => 'Formulalar',
'dateformat'            => "Sa'ne formatı",
'datetime'              => "Sa'ne ha'm waqıt",
'math_unknown_error'    => "belgisiz qa'telik",
'math_unknown_function' => 'belgisiz funktsiya',
'math_lexing_error'     => "leksikalıq qa'telik",
'math_syntax_error'     => "sintaksikalıq qa'telik",
'prefs-personal'        => 'Paydalanıwshı profaylı',
'prefs-rc'              => "Aqırg'ı o'zgerisler",
'prefs-watchlist'       => 'Baqlaw dizimi',
'prefs-misc'            => 'Basqa',
'saveprefs'             => 'Saqla',
'oldpassword'           => "Aldıng'ı parol:",
'newpassword'           => 'Taza parol:',
'retypenew'             => "Taza paroldi qayta kiritin':",
'textboxsize'           => "O'zgertiw",
'rows'                  => 'Qatarlar:',
'columns'               => "Bag'analar:",
'searchresultshead'     => 'İzlew',
'recentchangesdays'     => "Aqırg'ı o'zgerislerde ko'rsetiletug'ın ku'nler:",
'recentchangescount'    => "Aqırg'ı o'zgerislerde ko'rsetiletug'ın o'zgerisler sanı:",
'timezonelegend'        => 'Waqıt zonası',
'localtime'             => 'Jergilikli waqıt',
'servertime'            => "Serverdin' waqtı",
'files'                 => 'Fayllar',

# User rights
'userrights-lookup-user'   => 'Paydalanıwshı toparların basqarıw',
'userrights-user-editname' => "Paydalanıwshı atın kiritin':",
'editusergroup'            => "Paydalanıwshı Toparların O'zgertiw",
'userrights-editusergroup' => "Paydalanıwshı toparların o'zgertiw",
'saveusergroups'           => 'Paydalanıwshı Toparların Saqlaw',
'userrights-groupsmember'  => "Ag'zalıq toparı:",
'userrights-reason'        => "O'zgertiw sebebi:",

# Groups
'group'            => 'Topar:',
'group-bot'        => 'Botlar',
'group-sysop'      => 'Administratorlar',
'group-bureaucrat' => 'Byurokratlar',
'group-all'        => "(ha'mmesi)",

'group-bot-member'        => 'Bot',
'group-sysop-member'      => 'Administrator',
'group-bureaucrat-member' => 'Byurokrat',

'grouppage-bot'        => '{{ns:project}}:Botlar',
'grouppage-sysop'      => '{{ns:project}}:Administratorlar',
'grouppage-bureaucrat' => '{{ns:project}}:Byurokratlar',

# User rights log
'rightslog'     => 'Paydalanıwshı huquqları jurnalı',
'rightslogtext' => "Bul paydalanıwshı huquqların o'zgertiw jurnalı.",
'rightsnone'    => '(hesh qanday)',

# Recent changes
'nchanges'                          => "{{PLURAL:$1|1 o'zgeris|$1 o'zgeris}}",
'recentchanges'                     => "Aqırg'ı o'zgerisler",
'rcnote'                            => "To'mende $3 waqtındag'ı aqırg'ı {{PLURAL:$2|ku'ndegi|'''$2''' ku'ndegi}} {{PLURAL:$1|'''1''' o'zgeris bar|aqırg'ı '''$1''' o'zgeris bar}}.",
'rclistfrom'                        => "$1 waqtınan baslap jan'a o'zgerisler ko'rset",
'rcshowhideminor'                   => "Kishi o'zgerislerdi $1",
'rcshowhidebots'                    => 'Botlardı $1',
'rcshowhideliu'                     => 'Kirgenlerdi $1',
'rcshowhideanons'                   => 'Anonim paydalanıwshılardı $1',
'rcshowhidemine'                    => "O'zgertiwlerimdi $1",
'rclinks'                           => "Aqırg'ı $2 ku'ndegi aqırg'ı $1 o'zgeristi ko'rset<br />$3",
'diff'                              => 'parq',
'hist'                              => 'tar.',
'hide'                              => 'jasır',
'show'                              => "ko'rset",
'minoreditletter'                   => 'k',
'newpageletter'                     => 'T',
'boteditletter'                     => 'b',
'number_of_watching_users_pageview' => "[Baqlag'an {{PLURAL:$1|1 paydalanıwshı|$1 paydalanıwshı}}]",
'rc_categories_any'                 => "Ha'r qanday",
'newsectionsummary'                 => "/* $1 */ taza bo'lim",

# Recent changes linked
'recentchangeslinked'         => "Baylanıslı o'zgerisler",
'recentchangeslinked-title'   => "$1 baylanıslı o'zgerisler",
'recentchangeslinked-summary' => "Bul arnawlı bette siltelgen betlerdegi aqırg'ı o'zgerisler dizimi ko'rsetilgen. Baqlaw dizimin'izdegi betler '''juwan''' ha'ribi menen ko'rsetilgen.",

# Upload
'upload'            => 'Fayldı aploud qılıw',
'uploadnologin'     => 'Kirilmegen',
'filename'          => 'Fayl atı',
'filedesc'          => 'Juwmaq',
'fileuploadsummary' => 'Juwmaq:',
'badfilename'       => 'Fayl atı bug\'an o\'zgertildi: "$1".',
'savefile'          => 'Fayldı saqla',
'watchthisupload'   => 'Bul betti baqlaw',

'upload-proto-error' => 'Nadurıs protokol',
'upload-file-error'  => "İshki qa'telik",

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6' => 'URL tabılmadı',

'upload_source_file' => " (sizin' kompyuterin'izdegi fayl)",

# Image list
'imagelist'             => 'Fayllar dizimi',
'ilsubmit'              => 'İzle',
'byname'                => 'at boyınsha',
'bydate'                => "sa'ne boyınsha",
'bysize'                => "ha'jmi boyınsha",
'imgdelete'             => "o'shir.",
'imgdesc'               => 'aniqlama',
'imgfile'               => 'fayl',
'filehist'              => 'Fayl tariyxı',
'filehist-help'         => "Aldın usı fayl qanday ko'riniste bolg'anın ko'riw ushin ku'n-ay/waqıt degendi basın'.",
'filehist-deleteall'    => "ha'mmesin o'shir",
'filehist-deleteone'    => "usını o'shiriw",
'filehist-current'      => "ha'zirgi",
'filehist-datetime'     => "Sa'ne/Waqıt",
'filehist-user'         => 'Paydalanıwshı',
'filehist-dimensions'   => "O'lshemleri",
'filehist-filesize'     => "Fayldın' ha'jmi",
'filehist-comment'      => 'Kommentariy',
'imagelinks'            => 'Siltewler',
'linkstoimage'          => "To'mendegi betler bul faylg'a siltelgen:",
'nolinkstoimage'        => "Bul faylg'a hesh bir bet siltelmegen.",
'noimage'               => "Bunday atı fayl joq, $1 mu'mkinshiligin'iz bar.",
'imagelist_date'        => "Sa'ne",
'imagelist_name'        => 'Atama',
'imagelist_user'        => 'Paydalnıwshı',
'imagelist_size'        => "Ha'jim",
'imagelist_description' => 'Kommentariy',
'imagelist_search_for'  => "Su'wret atamasın izlew:",

# File reversion
'filerevert-comment' => 'Kommentariy:',

# File deletion
'filedelete'         => "$1 degendi o'shiriw",
'filedelete-legend'  => "Fayldı o'shiriw",
'filedelete-comment' => 'Kommentariy:',
'filedelete-submit'  => "O'shiriw",
'filedelete-success' => "'''$1''' o'shirildi.",
'filedelete-nofile'  => "'''$1''' bul saytta joq.",

# MIME search
'mimesearch' => 'MIME izlew',
'mimetype'   => "MIME tu'ri:",

# Unwatched pages
'unwatchedpages' => "Baqlanbag'an betler",

# List redirects
'listredirects' => 'Burıwshılar dizimi',

# Unused templates
'unusedtemplates'    => "Paydalanılmag'an shablonlar",
'unusedtemplateswlh' => 'basqa burıwshılar',

# Statistics
'statistics'             => 'Statistika',
'sitestats'              => '{{SITENAME}} statistikası',
'userstats'              => 'Paydalanıwshı statistikası',
'statistics-mostpopular' => "En' ko'p ko'rilgen betler",

'disambiguations'     => "Ko'p ma'nisli betler",
'disambiguationspage' => '{{ns:template}}:disambig',

'doubleredirects' => 'Qos burıwshılar',

'brokenredirects-edit'   => "(o'zgertiw)",
'brokenredirects-delete' => "(o'shiriw)",

'withoutinterwiki' => 'Hesh tilge siltelmegen betler',

'fewestrevisions' => "En' az du'zetilgen betler",

# Miscellaneous special pages
'nbytes'                  => '{{PLURAL:$1|1 bayt|$1 bayt}}',
'ncategories'             => '{{PLURAL:$1|1 kategoriya|$1 kategoriya}}',
'nlinks'                  => '{{PLURAL:$1|1 siltew|$1 siltew}}',
'nrevisions'              => '{{PLURAL:$1|1 nusqa|$1 nusqa}}',
'nviews'                  => "{{PLURAL:$1|1 ma'rte|$1 ma'rte}} ko'rip shıg'ılg'an",
'uncategorizedpages'      => 'Kategoriyasız betler',
'uncategorizedcategories' => 'Kategoriyasız kategoriyalar',
'uncategorizedimages'     => "Kategoriyasız su'wretler",
'uncategorizedtemplates'  => 'Kategoriyasız shablonlar',
'unusedcategories'        => "Paydalanılmag'an kategoriyalar",
'unusedimages'            => "Paydalanılmag'an fayllar",
'popularpages'            => "En' ko'p ko'rilgen betler",
'wantedcategories'        => "Talap qılıng'an kategoriyalar",
'wantedpages'             => "Talap qılıng'an betler",
'mostlinked'              => "En' ko'p siltelgen betler",
'mostlinkedcategories'    => "En' ko'p siltelgen kategoriyalar",
'mostlinkedtemplates'     => "En' ko'p siltelgen shablonlar",
'mostcategories'          => "En' ko'p siltelgen kategoriyalar",
'mostimages'              => "En' ko'p siltelgen su'wretler",
'mostrevisions'           => "En' ko'p du'zetilgen betler",
'allpages'                => "Ha'mme betler",
'prefixindex'             => 'Atama baslaw dizimi',
'shortpages'              => "En' qısqa betler",
'longpages'               => "En' uzın betler",
'deadendpagestext'        => "To'mendegi betler usi wikidegi basqa betlerge siltelmegen.",
'protectedpages'          => "Qorg'alg'an betler",
'protectedpagestext'      => "To'mendegi betler ko'shiriw ha'm o'zgertiwden qorg'alg'an",
'listusers'               => 'Paydalanıwshı dizimi',
'specialpages'            => 'Arnawlı betler',
'spheading'               => "Ha'mme paydalanıwshılardın' arnawlı betleri",
'rclsub'                  => '("$1" betinen siltengen betlerge)',
'newpages'                => "En' taza betler",
'newpages-username'       => 'Paydalanıwshı atı:',
'ancientpages'            => "En' eski betler",
'intl'                    => 'Til aralıq siltewler',
'move'                    => "Ko'shiriw",
'movethispage'            => "Bul betti ko'shiriw",

# Book sources
'booksources-search-legend' => 'Kitap haqqında informatsiya izlew',
'booksources-go'            => "O'tin'",

'categoriespagetext' => 'Wikide usı kategoriyalar bar.',
'data'               => "Mag'lıwmatlar",
'userrights'         => 'Paydalanıwshı huqıqların basqarıw',
'groups'             => 'Paydalanıwshı toparları',
'alphaindexline'     => '$1 — $2',
'version'            => 'Versiya',

# Special:Log
'specialloguserlabel'  => 'Paydalanıwshı:',
'speciallogtitlelabel' => 'Atama:',
'log'                  => 'Jurnallar',
'all-logs-page'        => "Ha'mme jurnallar",
'log-search-legend'    => 'Jurnallardı izlew',
'log-search-submit'    => "O'tin'",

# Special:Allpages
'nextpage'       => 'Keyingi bet ($1)',
'prevpage'       => "Aldıng'ı bet ($1)",
'allpagesfrom'   => "Mına betten baslap ko'rsetiw:",
'allarticles'    => "Ha'mme betler",
'allpagesprev'   => "Aldıng'ı",
'allpagesnext'   => 'Keyingi',
'allpagessubmit' => "O'tin'",
'allpagesprefix' => "Mına prefiksten baslag'an betlerdi ko'rsetiw:",

# Special:Listusers
'listusersfrom'      => "Mına paydalanıwshıdan baslap ko'rsetiw:",
'listusers-submit'   => "Ko'rset",
'listusers-noresult' => 'Paydalanıwshı tabılmadı.',

# E-mail user
'emailuser'       => 'Xat jiberiw',
'emailpage'       => "Paydalanıwshıg'a e-mail jiberiw",
'defemailsubject' => '{{SITENAME}} e-mail',
'noemailtitle'    => 'E-mail adresi joq',
'emailfrom'       => 'Kimnen',
'emailto'         => 'Kimge',
'emailmessage'    => 'Xat',
'emailsend'       => 'Jiber',
'emailsent'       => 'Xat jiberildi',

# Watchlist
'watchlist'            => "Menin' baqlaw dizimim",
'mywatchlist'          => "Menin' baqlaw dizimim",
'watchlistfor'         => "('''$1''' ushın)",
'watchnologin'         => 'Kirilmegen',
'addedwatch'           => 'Baqlaw dizimine qosıldı',
'removedwatch'         => "Baqlaw diziminen o'shirildi",
'watch'                => 'Baqlaw',
'watchthispage'        => 'Bul betti baqlaw',
'unwatch'              => 'Baqlamaw',
'unwatchthispage'      => 'Baqlawdı toqtatıw',
'notanarticle'         => "Mag'lıwmat beti emes",
'watchlist-details'    => "Baqlaw diziminde (sa'wbet betlerin esapqa almag'anda) {{PLURAL:$1|1 bet|$1 bet}} bar.",
'watchlistcontains'    => "Sizin' baqlaw dizimin'izde {{PLURAL:$1|1 bet|$1 bet}} bar.",
'wlnote'               => "To'mende aqırg'ı {{PLURAL:$2|saattag'ı|'''$2''' saattag'ı}} {{PLURAL:$1|aqırg'ı o'zgeris bar|aqırg'ı '''$1''' o'zgeris bar}}.",
'wlshowlast'           => "Aqırg'ı $1 saat, $2 ku'n, $3 ko'rset",
'watchlist-show-bots'  => "Bot o'zgertiwlerin' ko'rset",
'watchlist-hide-bots'  => "Bot o'zgertiwlerin' jasır",
'watchlist-show-own'   => "O'zgertiwlerimdi ko'rset",
'watchlist-hide-own'   => "O'zgertiwlerimdi jasır",
'watchlist-show-minor' => "Kishi o'zgerislerdi ko'rset",
'watchlist-hide-minor' => "Kishi o'zgerislerdi jasır",

# Displayed when you click the "watch" button and it's in the process of watching
'watching'   => 'Baqlaw...',
'unwatching' => 'Baqlamaw...',

'enotif_newpagetext'           => 'Bul taza bet.',
'enotif_impersonal_salutation' => '{{SITENAME}} paydalanıwshısı',
'changed'                      => "o'zgertilgen",
'created'                      => "jaratılg'an",
'enotif_anon_editor'           => 'anonim paydalanıwshı $1',

# Delete/protect/revert
'deletepage'                => "Betti o'shir",
'confirm'                   => 'Tastıyıqlaw',
'excontent'                 => "bolg'an mag'lıwmat: '$1'",
'excontentauthor'           => "bolg'an mag'lıwmat: '$1' (tek '[[{{ns:special}}:Contributions/$2|$2]]' u'lesi)",
'exblank'                   => 'bet bos edi',
'confirmdelete'             => "O'shiriwdi tastıyıqlan'",
'deletesub'                 => '("$1" o\'shirilmekte)',
'deletedtext'               => "\"\$1\" o'shirildi.
Aqırg'ı o'shirilgenlerdin' dizimin ko'riw ushin \$2 ni qaran'",
'deletedarticle'            => '"[[$1]]" o\'shirildi',
'dellogpage'                => "O'shiriw jurnalı",
'dellogpagetext'            => "To'mende en' aqırg'ı o'shirilgenlerdin' dizimi keltirilgen",
'deletionlog'               => "o'shiriw jurnalı",
'deletecomment'             => "O'shiriwdin' sebebi",
'rollbacklink'              => 'qaytarıw',
'protectlogpage'            => "Qorg'aw jurnalı",
'protectedarticle'          => '"[[$1]]" qorg\'alg\'an',
'modifiedarticleprotection' => '"[[$1]]" betinin\' qorg\'aw da\'rejesi ozgertildi',
'protectcomment'            => 'Kommentariy:',
'protect-fallback'          => '"$1" ruxsatı kerek',
'protect-level-sysop'       => 'Tek administratorlar',
'restriction-type'          => 'Ruxsatnama:',
'minimum-size'              => "En' az o'lshemi",
'maximum-size'              => "En' ko'p o'lshemi",
'pagesize'                  => '(bayt)',

# Restrictions (nouns)
'restriction-edit' => "O'zgertiw",
'restriction-move' => "Ko'shiriw",

# Restriction levels
'restriction-level-autoconfirmed' => "yarım-qorg'alg'an",

# Undelete
'undelete'                 => "O'shirilgen betlerdi ko'riw",
'undeletepage'             => "O'shirilgen betlerdi ko'riw ha'm qayta tiklew",
'viewdeletedpage'          => "O'shirilgen betlerdi ko'riw",
'undelete-revision'        => "$2 waqtında $3 o'shirgen $1 nusqası:",
'undelete-nodiff'          => "Hesh aldıng'ı nusqa tabılmadı.",
'undeletebtn'              => 'Qayta tiklew',
'undeletecomment'          => 'Kommentariy:',
'undeletedarticle'         => '"[[$1]]" qayta tiklendi',
'undeletedrevisions'       => '{{PLURAL:$1|1 nusqa|$1 nusqa}} qayta tiklendi',
'undeletedrevisions-files' => "{{PLURAL:$1|1 nusqa|$1 nusqa}} ha'm {{PLURAL:$2|1 fayl|$2 fayl}} qayta tiklendi",
'undeletedfiles'           => '{{PLURAL:$1|1 fayl|$1 fayl}} qayta tiklendi',
'undelete-search-box'      => "O'shirilgen betlerdi izlew",
'undelete-search-prefix'   => "Mınadan baslag'an betlerdi ko'rsetiw:",
'undelete-search-submit'   => 'İzle',

# Namespace form on various pages
'invert'         => "Saylaw ta'rtibin almastırıw",
'blanknamespace' => '(Baslı)',

# Contributions
'contributions' => "Paydalanıwshı u'lesi",
'mycontris'     => "Menin' u'lesim",
'contribsub2'   => '$1 ushın ($2)',
'uclinks'       => "Aqırg'ı $1 o'zgeristi ko'riw; aqırg'ı $2 ku'ndi ko'riw.",
'uctop'         => " (aqırg'ı)",
'month'         => "Aydag'ı (ha'm onnanda erterek):",
'year'          => "Jıldag'ı (ha'm onnanda erterek):",

'sp-contributions-newest'      => "En' taza",
'sp-contributions-oldest'      => "En' eski",
'sp-contributions-newer'       => "Jan'alaw $1",
'sp-contributions-older'       => 'Eskilew $1',
'sp-contributions-newbies'     => "Tek taza akkauntlar u'leslerin ko'rset",
'sp-contributions-newbies-sub' => 'Taza akkauntlar ushın',
'sp-contributions-search'      => "U'lesi boyınsha izlew",
'sp-contributions-username'    => 'IP Adres yamasa paydalanıwshı atı:',
'sp-contributions-submit'      => 'İzle',

'sp-newimages-showfrom' => "$1 baslap taza su'wretlerdi ko'rset",

# What links here
'whatlinkshere'       => "Bug'an siltelgenler",
'whatlinkshere-title' => '$1 degenge siltelgen betler',
'whatlinkshere-page'  => 'Bet:',
'linklistsub'         => '(Siltewler dizimi)',
'linkshere'           => "To'mendegi betler mınag'an siltelgen: '''[[:$1]]''':",
'nolinkshere'         => "'''[[:$1]]''' degenge hesh bet siltemeydi.",
'isredirect'          => 'burıwshı bet',
'istemplate'          => 'qosıw',
'whatlinkshere-prev'  => "{{PLURAL:$1|aldıng'ı|aldıng'ı $1}}",
'whatlinkshere-next'  => '{{PLURAL:$1|keyingi|keyingi $1}}',
'whatlinkshere-links' => '← siltewler',

# Block/unblock
'ipaddress'                => 'IP Adres:',
'ipadressorusername'       => 'IP Adres yamasa paydalanıwshı atı:',
'ipbreason'                => 'Sebep:',
'ipbreasonotherlist'       => 'Basqa sebep',
'ipbother'                 => 'Basqa waqıt:',
'ipboptions'               => "2 saat:2 hours,1 ku'n:1 day,3 ku'n:3 days,1 ha'pte:1 week,2 h'apte:2 weeks,1 ay:1 month,3 ay:3 months,6 ay:6 months,1 jil:1 year,sheksiz:infinite",
'ipbotheroption'           => 'basqa',
'ipbotherreason'           => 'Basqa/qosımsha sebep:',
'badipaddress'             => 'Jaramsız IP adres',
'ipblocklist-username'     => 'Paydalanıwshı atı yamasa IP adres:',
'ipblocklist-submit'       => 'İzle',
'infiniteblock'            => 'sheksiz',
'anononlyblock'            => 'tek anon.',
'contribslink'             => "u'lesi",
'block-log-flags-anononly' => 'tek anonim paydalanıwshılar',

# Move page
'movepage'                => "Betti ko'shiriw",
'movearticle'             => "Ko'shiriletug'ın bet:",
'movenologin'             => 'Kirilmegen',
'newtitle'                => 'Taza atama:',
'move-watch'              => 'Bul betti baqlaw',
'movepagebtn'             => "Betti ko'shir",
'pagemovedsub'            => "Tabıslı ko'shirildi",
'movepage-moved'          => "<big>'''\"\$1\" beti \"\$2\" degenge ko'shirildi'''</big>", # The two titles are passed in plain text as $3 and $4 to allow additional goodies in the message.
'movedto'                 => "betke ko'shirildi",
'1movedto2'               => "[[$1]] beti [[$2]] degenge ko'shirildi",
'1movedto2_redir'         => "[[$1]] beti [[$2]] degen burıwshıg'a ko'shirildi",
'movelogpage'             => "Jurnaldı ko'shiriw",
'movelogpagetext'         => "To'mende ko'shirilgen betlerdin' dizimi keltirilgen.",
'movereason'              => 'Sebep:',
'revertmove'              => 'qaytarıw',
'delete_and_move'         => "O'shiriw ha'm ko'shiriw",
'delete_and_move_confirm' => "Awa, bul betti o'shiriw",
'delete_and_move_reason'  => "Ko'shiriwge jol beriw ushın o'shirilgen",

# Export
'export'            => 'Betlerdi eksport qılıw',
'export-submit'     => 'Eksport',
'export-addcattext' => 'Mına kategoriyadan betlerdi qosıw:',
'export-addcat'     => 'Qos',

# Namespace 8 related
'allmessages'         => 'Sistema xabarları',
'allmessagesname'     => 'Atama',
'allmessagescurrent'  => "Ha'zirgi tekst",
'allmessagesmodified' => "Tek o'zgertilgenlerdi ko'rset",

# Thumbnails
'thumbnail-more' => "U'lkeytiw",
'filemissing'    => 'Fayl tabılmadı',

# Special:Import
'import'                  => 'Betlerdi import qılıw',
'import-interwiki-submit' => 'Import',
'importstart'             => 'Betler import qılınbaqta...',
'import-revision-count'   => '{{PLURAL:$1|1 nusqa|$1 nusqa}}',
'importnopages'           => "Import qılınatug'ın betler joq.",
'importnotext'            => 'Bos yamasa tekstsiz',

# Import log
'import-logentry-upload-detail'    => '$1 nusqa',
'import-logentry-interwiki-detail' => '$2 degennen $1 nusqa',

# Tooltip help for the actions
'tooltip-pt-userpage'             => "Menin' paydalanıwshı betim",
'tooltip-pt-mytalk'               => "Menin' sa'wbetim",
'tooltip-pt-anontalk'             => "Bul IP adresten kiritilgen o'zgerisler haqqında diskussiya",
'tooltip-pt-watchlist'            => "O'zgerislerin baqlap turg'an betler dizimi",
'tooltip-pt-mycontris'            => "Menin' u'lesler dizimim",
'tooltip-pt-login'                => "Kiriwin'iz usınıladı, biraq ma'jbu'riy bolmag'an xalda.",
'tooltip-pt-anonlogin'            => "Kiriwin'iz usınıladı, biraq ma'jbu'riy bolmag'an xalda.",
'tooltip-pt-logout'               => "Shıg'ıw",
'tooltip-ca-talk'                 => "Mag'lıwmat beti haqqında diskussiya",
'tooltip-ca-edit'                 => "Siz bul betti o'zgertiwin'izge boladi. Iltimas betti saqlawdan aldın ko'rip shig'ıw knopkasın paydalanın'.",
'tooltip-ca-addsection'           => "Bul diskussiyag'a kommentariy qosıw.",
'tooltip-ca-viewsource'           => "Bul bet qorg'alg'an. Biraq ko'rip shıg'ıwın'ızg'a boladı.",
'tooltip-ca-history'              => "Bul bettin' aqırg'ı nusqaları.",
'tooltip-ca-protect'              => "Bul betti qorg'aw",
'tooltip-ca-delete'               => "Bul betti o'shiriw",
'tooltip-ca-move'                 => "Bul betti ko'shiriw",
'tooltip-ca-watch'                => "Bul betti menin' baqlaw dizimime qosiw",
'tooltip-ca-unwatch'              => "Bul betti menin' baqlaw dizimimnen alıp tasla",
'tooltip-search'                  => '{{SITENAME}} saytınan izlew',
'tooltip-search-fulltext'         => 'Usı tekst ushın betlerdi izlew',
'tooltip-p-logo'                  => 'Bas bet',
'tooltip-n-mainpage'              => "Bas betke o'tiw",
'tooltip-n-portal'                => "Proyekt haqqında, nelerdi islewin'izge boladi, qayaqtan tabıwın'ızg'a boladi",
'tooltip-n-currentevents'         => "Ha'zirgi ha'diyseler haqqında mag'lıwmat tabıw",
'tooltip-n-recentchanges'         => "Wikidegi aqırg'ı o'zgerislerdin' dizimi.",
'tooltip-n-help'                  => 'Anıqlama tabıw ornı.',
'tooltip-n-sitesupport'           => "Bizge ja'rdem berin'",
'tooltip-t-whatlinkshere'         => 'Usı betke siltelgen barlıq betler dizimi',
'tooltip-t-recentchangeslinked'   => "Bul betten siltengen betlerdegi aqırg'ı o'zgerisler",
'tooltip-feed-rss'                => 'Bul bettin\' "RSS" jolag\'ı',
'tooltip-feed-atom'               => 'Bul bettin\' "Atom" jolag\'ı',
'tooltip-t-contributions'         => "Usı paydalanıwshının' u'lesler dizimin ko'riw",
'tooltip-t-emailuser'             => "Usı paydalanıwshıg'a e-mail jiberiw",
'tooltip-t-specialpages'          => 'Barlıq arnawlı betler dizimi',
'tooltip-t-print'                 => "Bul bettin' baspa nusqası",
'tooltip-t-permalink'             => "Bul bettegi usı nusqasının' turaqlı siltewi",
'tooltip-ca-nstab-main'           => "Mag'lıwmat betin ko'riw",
'tooltip-ca-nstab-user'           => "Paydalanıwshı betin ko'riw",
'tooltip-ca-nstab-media'          => "Media betin ko'riw",
'tooltip-ca-nstab-project'        => "Proyekt betin ko'riw",
'tooltip-ca-nstab-image'          => "Su'wret betin ko'riw",
'tooltip-ca-nstab-mediawiki'      => "Sistema xabarın ko'riw",
'tooltip-ca-nstab-template'       => "Shablondı ko'riw",
'tooltip-ca-nstab-help'           => "Anıqlama betin ko'riw",
'tooltip-ca-nstab-category'       => "Kategoriya betin ko'riw",
'tooltip-minoredit'               => "Kishi o'zgeris dep belgilew",
'tooltip-save'                    => "O'zgertiwlerin'izdi saqla",
'tooltip-preview'                 => "Saqlawdan aldın kiritken o'zgerislerin'izdi ko'rip shıg'ın'!",
'tooltip-diff'                    => "Tekstke qanday o'zgeris kiritkenin'izdi ko'rsetiw",
'tooltip-compareselectedversions' => "Bettin' eki nusqasının' ayırmashılıg'ın qaraw.",
'tooltip-watch'                   => "Bul betti baqlaw dizimin'izge qosıw",

# Attribution
'anonymous'        => '{{SITENAME}} anonim paydalanıwshı(ları)',
'siteuser'         => '{{SITENAME}} paydalanıwshısı $1',
'lastmodifiedatby' => "Bul bettin' aqırg'ı ma'rte $3 o'zgertken waqtı: $2, $1.", # $1 date, $2 time, $3 user
'and'              => "ha'm",
'others'           => 'basqalar',
'siteusers'        => '{{SITENAME}} paydalanıwshı(ları) $1',
'creditspage'      => 'Bet avtorları',

# Spam protection
'subcategorycount'       => 'Bul kategoriyada {{PLURAL:$1|bir podkategoriya bar|$1 podkategoriya bar}}.',
'categoryarticlecount'   => 'Bul kategoriyada {{PLURAL:$1|bir bet bar|$1 bet bar}}.',
'category-media-count'   => 'Bul kategoriyada {{PLURAL:$1|bir|$1}} fayl bar.',
'listingcontinuesabbrev' => 'dawamı',

# Info page
'numedits'     => "O'zgerisler sanı (bet): $1",
'numtalkedits' => "O'zgerisler sanı (diskussiya beti): $1",
'numwatchers'  => 'Baqlawshılar sanı: $1',

# Image deletion
'deletedrevision'       => "$1 eski nusqasın o'shirdi",
'filedeleteerror-short' => "Fayl o'shiriw qateligi: $1",

# Browsing diffs
'previousdiff' => "← Aldıng'ı parq",
'nextdiff'     => 'Keyingi parq →',

# Media information
'widthheight'          => '$1 × $2',
'widthheightpage'      => '$1 × $2, $3 bet',
'file-info'            => "(fayldın' ha'jmi: $1, MIME tu'ri: $2)",
'file-info-size'       => "($1 × $2 piksel, fayldın' ha'jmi: $3, MIME tu'ri: $4)",
'svg-long-desc'        => "(SVG fayl, $1 × $2 piksel belgilengen, fayldın' ha'jmi: $3)",
'show-big-image-thumb' => "<small>Bul aldinnan ko'riwdin' ha'jmi: $1 × $2 piksel</small>",

# Special:Newimages
'showhidebots' => '(botlardı $1)',

# Video information, used by Language::formatTimePeriod() to format lengths in the above messages
'video-dims'   => '$1, $2 × $3',
'hours-abbrev' => 'st',

# Metadata
'metadata'          => "Metamag'lıwmat",
'metadata-expand'   => "Qosımsha mag'lıwmatlardı ko'rset",
'metadata-collapse' => "Qosımsha mag'lıwmatlardi jasır",

# EXIF tags
'exif-imagewidth'       => 'Yeni:',
'exif-imagelength'      => "Uzunlıg'ı",
'exif-imagedescription' => "Su'wret ataması",
'exif-artist'           => 'Avtor',

# External editor support
'edit-externally'      => "Bul fayldı sırtqı bag'darlama arqalı o'zgertiw",
'edit-externally-help' => "Ko'birek mag'lıwmat ushın [http://meta.wikimedia.org/wiki/Help:External_editors ornatıw jolların] qaran'.",

# 'all' in various places, this might be different for inflected languages
'recentchangesall' => "ha'mmesin",
'imagelistall'     => "ha'mme",
'watchlistall2'    => "ha'mmesin",
'namespacesall'    => "ha'mmesi",
'monthsall'        => "ha'mme",

# E-mail address confirmation
'confirmemail'          => 'E-mail adresin tastıyıqlaw',
'confirmemail_success'  => "Sizin' e-mail adresin'iz tastıyıqlandı, endi wikige kiriwin'iz mu'mkin.",
'confirmemail_loggedin' => "Sizin' e-mail adresin'iz endi tastıyıqlandı.",

# Trackbacks
'trackbackremove' => " ([$1 O'shir])",

# Delete conflict
'recreate' => 'Qaytadan jaratıw',

# HTML dump
'redirectingto' => '[[$1]] degenge burılmaqta...',

# action=purge
'confirm_purge_button' => 'OK',

# AJAX search
'searchcontaining' => "''$1'' mag'lıwmatı bar betlerdi izlew.",
'searchnamed'      => "''$1'' ataması bar betlerdi izlew.",
'articletitles'    => "''$1'' degen menen baslag'an betlerdi",
'hideresults'      => "Na'tiyjelerdi jasır",

# Multipage image navigation
'imgmultipageprev' => "← aldıng'ı bet",
'imgmultipagenext' => 'keyingi bet →',
'imgmultigo'       => "O'tin'!",
'imgmultigotopre'  => "Betke o'tiw",

# Table pager
'table_pager_next'         => 'Keyingi bet',
'table_pager_prev'         => "Aldıng'ı bet",
'table_pager_first'        => 'Birinshi bet',
'table_pager_last'         => "Aqırg'ı bet",
'table_pager_limit_submit' => "O'tin'",
'table_pager_empty'        => "Na'tiyjeler joq",

# Auto-summaries
'autosumm-blank'   => "Bettin' barlıq mag'lıwmatın o'shırıw",
'autosumm-replace' => "Betti '$1' penen almastırıw",
'autoredircomment' => '[[$1]] degenge burıw',
'autosumm-new'     => 'Taza bet: $1',

# Watchlist editor
'watchlistedit-numitems'      => "Sizin' baqlaw dizimin'izde, sa'wbet betlerin esapqa almag'anda {{PLURAL:$1|1 atama|$1 atama}} bar.",
'watchlistedit-noitems'       => "Baqlaw dizimin'izde atamalar joq.",
'watchlistedit-normal-title'  => "Baqlaw dizimin o'zgertiw",
'watchlistedit-normal-legend' => "Baqlaw diziminen atamalardi o'shıriw",
'watchlistedit-normal-submit' => "Atamalardı O'shir",
'watchlistedit-normal-done'   => "Baqlaw dizimin'izden {{PLURAL:$1|1 atama|$1 atama}} o'shirildi:",
'watchlistedit-raw-titles'    => 'Atamalar:',
'watchlistedit-raw-submit'    => "Baqlaw dizimin jan'ala",
'watchlistedit-raw-done'      => "Baqılaw dizimin'iz jan'alandı.",
'watchlistedit-raw-added'     => "{{PLURAL:$1|1 atama|$1 atama}} qosilg'an:",
'watchlistedit-raw-removed'   => "{{PLURAL:$1|1 atama|$1 atama}} o'shirildi:",

# Watchlist editing tools
'watchlisttools-view' => "Baylanıslı o'zgerislerdi qaraw",
'watchlisttools-edit' => "Baqlaw dizimin ko'riw ha'm o'zgertiw",

);
