<?php
/** Võro (Võro)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Niklas Laxström
 * @author Pikne
 * @author Sulev Iva (Võrok)
 * @author Trixt
 * @author Võrok
 */

$fallback = 'et';

$namespaceNames = array(
	NS_MEDIA            => 'Meediä',
	NS_SPECIAL          => 'Tallituslehekülg',
	NS_TALK             => 'Arotus',
	NS_USER             => 'Pruukja',
	NS_USER_TALK        => 'Pruukja_arotus',
	NS_PROJECT_TALK     => '$1_arotus',
	NS_FILE             => 'Pilt',
	NS_FILE_TALK        => 'Pildi_arotus',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki_arotus',
	NS_TEMPLATE         => 'Näüdüs',
	NS_TEMPLATE_TALK    => 'Näüdüse_arotus',
	NS_HELP             => 'Oppus',
	NS_HELP_TALK        => 'Oppusõ_arotus',
	NS_CATEGORY         => 'Katõgooria',
	NS_CATEGORY_TALK    => 'Katõgooria_arotus',
);

$magicWords = array(
	'redirect'                => array( '0', '#saadaq', '#suuna', '#REDIRECT' ),
);

$messages = array(
# User preference toggles
'tog-underline'               => 'Lingiq ala tõmmadaq',
'tog-highlightbroken'         => 'Parandaq vigadsõq lingiq <a href="" class="new">nii</a> (vai nii: <a href="" class="internal">?</a>)',
'tog-justify'                 => 'Lõiguveereq sirgõs',
'tog-hideminor'               => 'Käkiq perämäidsin muutmiisin ärq väikuq parandusõq',
'tog-hidepatrolled'           => 'Käkiq perämäidsi muutmiisi nimekirän ärq muutmisõq, miä ommaq perräkaemisnimekirän',
'tog-newpageshidepatrolled'   => 'Käkiq vahtsidõ lehti nimekirän ärq ülekaeduq leheq',
'tog-extendwatchlist'         => 'Laendaq perräkaemisnimekirjä, et nätäq kõiki muutmiisi, mitte õnnõ kõgõ perämäidsi',
'tog-usenewrc'                => 'Laendõduq perämädseq muutmisõq (vaia JavaScripti)',
'tog-numberheadings'          => 'Päälkirjo automaatnummõrdus',
'tog-showtoolbar'             => 'Näütäq toimõndusõ riistakasti',
'tog-editondblclick'          => 'Artiklidõ toimõndaminõ topõltklõpsu pääle (JavaScript)',
'tog-editsection'             => 'Lupaq lõikõ toimõndaq [toimõndaq]-linkõga',
'tog-editsectiononrightclick' => 'Lupaq lõikõ toimõndaq hüäpoolidsõ klõpsutusõga <br /> lõigu päälkirä pääl (JavaScript)',
'tog-showtoc'                 => 'Näütäq sisukõrda (rohkõmb ku kolmõ vaihõpäälkiräga lehile)',
'tog-rememberpassword'        => 'Salasõna miildejätmine tulõvaidsis kõrros (kõgõ inämb $1 {{PLURAL:$1|pääväs|pääväs}})',
'tog-watchcreations'          => 'Panõq mu luuduq leheq mu perräkaemisnimekirjä',
'tog-watchdefault'            => 'Kaeq vahtsidõ ja muudõtuidõ artiklidõ perrä',
'tog-watchmoves'              => 'Panõq mu ümbrenõstõduq leheküleq mu perräkaemisnimekirjä',
'tog-watchdeletion'           => 'Panõq mu kistutõduq leheküleq mu perräkaemisnimekirjä',
'tog-minordefault'            => 'Märgiq kõik parandusõq vaikimiisi väikeisis paranduisis',
'tog-previewontop'            => 'Näütäq proovikaehust inne, mitte perän toimõnduskasti',
'tog-previewonfirst'          => 'Näütäq edimädse toimõndusõ aigo proovikaehust',
'tog-nocache'                 => 'Pästku-i lehekülgi võrgokaeja vaihõmällo',
'tog-enotifwatchlistpages'    => 'Saadaq mullõ e-kiri, ku muq perräkaetavat lehte muudõtas',
'tog-enotifusertalkpages'     => 'Saadaq mullõ e-kiri, ku mu arotuslehte muudõtas',
'tog-enotifminoredits'        => 'Saadaq mullõ e-kiri ka väikeisi muutmiisi kotsilõ',
'tog-enotifrevealaddr'        => 'Näütäq mu e-postiaadrõssit tõisilõ saadõtuin teedüssin',
'tog-shownumberswatching'     => "Näütäq, ku pall'o pruukjit taa lehe perrä kaes",
'tog-oldsig'                  => 'Parhilladsõ alakirotusõ proomikaehus:',
'tog-fancysig'                => 'Pruugiq vikiteksti moodulist alakirotust (ilma automaatsõ lingildä)',
'tog-externaleditor'          => "Pruugiq vaikimiisi välist tekstitoimõndajat (õnnõ as'atundjilõ, nõud suq puutri ümbresäädmist, kaeq [//www.mediawiki.org/wiki/Manual:External_editors More information.])",
'tog-externaldiff'            => "Pruugiq vaikimiisi välist võrrõlusprogrammi (õnnõ as'atundjilõ, nõud su puutri ümbresäädmist, kaeq [//www.mediawiki.org/wiki/Manual:External_editors More information.])",
'tog-showjumplinks'           => 'Panõq lehe algustõ kipõqlingiq',
'tog-uselivepreview'          => 'Pruugiq kipõkaehust (JavaScript) (proomi)',
'tog-forceeditsummary'        => 'Annaq teedäq, ku olõ-i kirotõt kokkovõtõt',
'tog-watchlisthideown'        => 'Näüdäku-i perräkaemisnimekirän mu hindä toimõnduisi',
'tog-watchlisthidebots'       => 'Näüdäku-i perräkaemisnimekirän robotidõ toimõnduisi',
'tog-watchlisthideminor'      => 'Näüdäku-i perräkaemisnimekirän väikeisi muutmiisi',
'tog-watchlisthideliu'        => 'Käkiq perräkaemisnimekirän ärq nimega sisselännüisi pruukjidõ toimõndusõq',
'tog-watchlisthideanons'      => 'Käkiq perräkaemisnimekirän ärq nimeldä pruukjidõ toimõndusõq',
'tog-watchlisthidepatrolled'  => 'Näüdäku-i perräkaemisnimekirän kontrollituid toimõnduisi',
'tog-nolangconversion'        => 'Jätäq ärq variantõ võrrõlus',
'tog-ccmeonemails'            => "Saadaq mullõ kopiq e-kir'ost, miä ma saada tõisilõ pruukjilõ",
'tog-diffonly'                => 'Näüdäku-i lahkominekide lehe all lehe täüt sissu',
'tog-showhiddencats'          => 'Näütäq käkitüid katõgoorijit',
'tog-norollbackdiff'          => 'Päält tagasivõtmist näüdäku-i lahkominekiid',

'underline-always'  => 'Kõgõ',
'underline-never'   => 'Ei kunagi',
'underline-default' => 'Võrgokaeja perrä',

# Font style option in Special:Preferences
'editfont-style'     => 'Toimõndamiskotusõ kirätüüp:',
'editfont-default'   => 'Võrgokaeja vaikimiisisäädeq',
'editfont-monospace' => 'Püsüsammuga font',
'editfont-sansserif' => 'Ilostuisilda (sans-serif-) kiri',
'editfont-serif'     => 'Ilostuisiga (serif-) kiri',

# Dates
'sunday'        => 'pühäpäiv',
'monday'        => 'iispäiv',
'tuesday'       => 'tõõsõpäiv',
'wednesday'     => 'kolmapäiv',
'thursday'      => 'nelapäiv',
'friday'        => 'riidi',
'saturday'      => 'puulpäiv',
'sun'           => 'Pü',
'mon'           => 'I',
'tue'           => 'T',
'wed'           => 'K',
'thu'           => 'N',
'fri'           => 'R',
'sat'           => 'Pu',
'january'       => 'vahtsõaastakuu',
'february'      => 'radokuu',
'march'         => 'urbõkuu',
'april'         => 'mahlakuu',
'may_long'      => 'lehekuu',
'june'          => 'piimäkuu',
'july'          => 'hainakuu',
'august'        => 'põimukuu',
'september'     => 'süküskuu',
'october'       => 'rehekuu',
'november'      => 'märtekuu',
'december'      => 'joulukuu',
'january-gen'   => 'vahtsõaastakuu',
'february-gen'  => 'radokuu',
'march-gen'     => 'urbõkuu',
'april-gen'     => 'mahlakuu',
'may-gen'       => 'lehekuu',
'june-gen'      => 'piimäkuu',
'july-gen'      => 'hainakuu',
'august-gen'    => 'põimukuu',
'september-gen' => 'süküskuu',
'october-gen'   => 'rehekuu',
'november-gen'  => 'märtekuu',
'december-gen'  => 'joulukuu',
'jan'           => 'vahts',
'feb'           => 'radok',
'mar'           => 'urbõk',
'apr'           => 'mahlak',
'may'           => 'lehek',
'jun'           => 'piimäk',
'jul'           => 'hainak',
'aug'           => 'põimuk',
'sep'           => 'süküsk',
'oct'           => 'rehek',
'nov'           => 'märtek',
'dec'           => 'jouluk',

# Categories related messages
'pagecategories'                 => '{{PLURAL:$1|Katõgooria|Katõgooriaq}}',
'category_header'                => 'Katõgooria "$1" artikliq',
'subcategories'                  => 'Allkatõgooriaq',
'category-media-header'          => 'Kiräkotus katõgoorian "$1"',
'category-empty'                 => "''Seon katõgoorian olõ-i parhilla artikliid ega teedüstüid.''",
'hidden-categories'              => '{{PLURAL:$1|Käkit katõgooria|Käkidüq katõgooriaq}}',
'hidden-category-category'       => 'Käkidüq katõgooriaq',
'category-subcat-count'          => '{{PLURAL:$2|Seol katõgoorial om õnnõ järgmäne allkatõgooria.|Seol katõgoorial  {{PLURAL:$1|om järgmäne allkatõgooria|ommaq järgmädsed $1 allkatõgooriat}} (kokko $2).}}',
'category-subcat-count-limited'  => 'Seol katõgoorial {{PLURAL:$1|om järgmäne allkatõgooria|ommaq järgmädsed $1 allkatõgooriaq}}.',
'category-article-count'         => '{{PLURAL:$2|Seon katõgoorian om õnnõ järgmäne lehekülg.|Seon katõgoorian {{PLURAL:$1|om järgmäne lehekülg|ommaq järgmädseq $1 lehekülge}} (kokko $2).}}',
'category-article-count-limited' => 'Seon katõgoorian {{PLURAL:$1|om järgmäne lehekülg|ommaq järgmädseq $1 lehekülge}}.',
'category-file-count'            => '{{PLURAL:$2|Seon katõgoorian om õnnõ järgmäne teedüstü.|{{PLURAL:$1|Järgmäne teedüstü om |Järgmädseq $1 teedüstüt ommaq}} seon katõgoorian (kokko $2).}}',
'category-file-count-limited'    => '{{PLURAL:$1|Järgmäne teedüstü om|Järgmädseq $1 teedüstüt}} ommaq seon katõgoorian.',
'listingcontinuesabbrev'         => 'lätt edesi',
'index-category'                 => 'Indeksiga leheq',
'noindex-category'               => 'Indeksildä leheq',

'about'         => 'Pääteedüs',
'article'       => 'Sisu',
'newwindow'     => '(tulõ vallalõ vahtsõn aknõn)',
'cancel'        => 'Jätäq katski',
'moredotdotdot' => 'Viil...',
'mypage'        => 'Muq lehekülg',
'mytalk'        => 'Mu arotus',
'anontalk'      => 'Seo puutri võrgoaadrõsi arotus',
'navigation'    => 'Juhtminõ',
'and'           => '&#32;ja',

# Cologne Blue skin
'qbfind'         => 'Otsiq',
'qbbrowse'       => 'Kaeq',
'qbedit'         => 'Toimõndaq',
'qbpageoptions'  => 'Leheküle säädmine',
'qbpageinfo'     => 'Leheküle teedüs',
'qbmyoptions'    => 'Mu säädmiseq',
'qbspecialpages' => 'Tallitusleheküleq',
'faq'            => 'Sagõhõhe küsüdüq küsümiseq',
'faqpage'        => 'Project:KKK',

# Vector skin
'vector-action-addsection'       => 'Vahtsõ teema ülespandminõ',
'vector-action-delete'           => 'Kistudaq ärq',
'vector-action-move'             => 'Nõstaq ümbre',
'vector-action-protect'          => 'Kaidsaq',
'vector-action-undelete'         => 'Tiiq tagasi',
'vector-action-unprotect'        => 'Muudaq kaidsõt',
'vector-simplesearch-preference' => 'Lupaq tävvendedüid otsmispakmiisi (õnnõ Vektori-kujundusõn)',
'vector-view-create'             => 'Luuq',
'vector-view-edit'               => 'Toimõndaq',
'vector-view-history'            => 'Näütäq aoluku',
'vector-view-view'               => 'Loeq',
'vector-view-viewsource'         => 'Kaeq lätteteksti',
'actions'                        => 'Tallitusõq',
'namespaces'                     => 'Nimeruumiq',
'variants'                       => 'Tõõsõndiq',

'errorpagetitle'    => 'Viga',
'returnto'          => 'Tagasi lehe manoq $1.',
'tagline'           => 'Läteq: {{SITENAME}}',
'help'              => 'Abi',
'search'            => 'Otsiq',
'searchbutton'      => 'Otsiq',
'go'                => 'Mineq',
'searcharticle'     => 'Mineq',
'history'           => 'Artikli aolugu',
'history_short'     => 'Aolugu',
'updatedmarker'     => 'toimõndõt päält mu perämäst kaemist',
'printableversion'  => 'Trükükujo',
'permalink'         => 'Püsülink',
'print'             => 'Trüküq vällä',
'view'              => 'Näütäq',
'edit'              => 'Toimõndaq',
'create'            => 'Luuq leht',
'editthispage'      => 'Toimõndaq seod artiklit',
'create-this-page'  => 'Luuq seo leht',
'delete'            => 'Kistudaq ärq',
'deletethispage'    => 'Kistudaq seo artikli ärq',
'undelete_short'    => 'Võtaq tagasi {{PLURAL:$1|üts muutminõ|$1 muutmist}}',
'viewdeleted_short' => 'Kaeq {{PLURAL:$1|ütte|$1}} kistutõdut redaktsiooni',
'protect'           => 'Kaidsaq',
'protect_change'    => 'muudaq',
'protectthispage'   => 'Kaidsaq seod artiklit',
'unprotect'         => 'Muudaq kaidsõt',
'unprotectthispage' => 'Muudaq seo leheküle kaidsõt',
'newpage'           => 'Vahtsõnõ artikli',
'talkpage'          => 'Seo artikli arotus',
'talkpagelinktext'  => 'Arotus',
'specialpage'       => 'Tallituslehekülg',
'personaltools'     => 'Erätüüriistaq',
'postcomment'       => 'Vahtsõnõ alajago',
'articlepage'       => 'Artiklilehekülg',
'talk'              => 'Arotus',
'views'             => 'Kaemisõq',
'toolbox'           => 'Tüüriistakast',
'userpage'          => 'Pruukjalehekülg',
'projectpage'       => 'Tallituslehekülg',
'imagepage'         => 'Näütäq teedüstülehte',
'mediawikipage'     => 'Näütäq sõnomilehekülge',
'templatepage'      => 'Näütäq näüdüselehekülge',
'viewhelppage'      => 'Näütäq abilehekülge',
'categorypage'      => 'Näütäq katõgoorialehekülge',
'viewtalkpage'      => 'Arotuslehekülg',
'otherlanguages'    => 'Tõisin keelin',
'redirectedfrom'    => '(Ümbre saadõt artiklist $1)',
'redirectpagesub'   => 'Ümbresaatmislehekülg',
'lastmodifiedat'    => 'Seo leht om viimäte muudõt $2, $1.',
'viewcount'         => 'Seo lehe pääl om käüt $1 {{PLURAL:$1|kõrd|kõrda}}.',
'protectedpage'     => 'Kaidsõt artikli',
'jumpto'            => 'Mineq üle:',
'jumptonavigation'  => 'juhtminõ',
'jumptosearch'      => 'otsminõ',
'view-pool-error'   => "Serveriq ommaq parhilla üle koormaduq.
Pall'o hulga pruukjit pruuv kõrraga seod lehte kaiaq.
Olõq hää, oodaq vähäkese inne ku vahtsõst proomit.

$1",
'pool-timeout'      => 'Kinniqpidämise uutmisaig om läbi',
'pool-queuefull'    => 'Kinniqpandmiisi järekõrd om täüs',
'pool-errorunknown' => 'Tiidmäldä hädä',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'            => '{{SITENAME}} tutvustus',
'aboutpage'            => 'Project:Pääteedüs',
'copyright'            => 'Teksti või vabalt pruukiq litsendsi $1 perrä.',
'copyrightpage'        => '{{ns:project}}:Tegijäõigusõq',
'currentevents'        => 'Miä sünnüs',
'currentevents-url'    => 'Project:Miä sünnüs',
'disclaimers'          => 'Hoiatuisi',
'disclaimerpage'       => 'Project:Üledseq hoiatusõq',
'edithelp'             => 'Toimõndamisoppus',
'edithelppage'         => 'Help:Kuis_artiklit_toimõndaq',
'helppage'             => 'Help:Oppus',
'mainpage'             => 'Pääleht',
'mainpage-description' => 'Pääleht',
'policy-url'           => 'Project:Säädüseq',
'portal'               => 'Arotusõtarõ',
'portal-url'           => 'Project:Arotusõtarõ',
'privacy'              => 'Eräteedüse kaitsminõ',
'privacypage'          => 'Project:Eräteedüse kaitsminõ',

'badaccess'        => 'Lubamalda tallitus',
'badaccess-group0' => 'Sul olõ-i õigust seod tallitust tetäq.',
'badaccess-groups' => 'Seod tallitust saavaq tetäq õnnõ {{PLURAL:$2|rühmä|rühmi}} $1 liikmõq.',

'versionrequired'     => 'Om vaia MediaWiki kujjo $1',
'versionrequiredtext' => 'Seo lehe kaemisõs om vaia MediaWiki kujjo $1. Kaeq [[Special:Version|kujoteedüst]].',

'ok'                      => 'Hää külh',
'retrievedfrom'           => 'Vällä otsit teedüskogost "$1"',
'youhavenewmessages'      => 'Sul om $1 ($2).',
'newmessageslink'         => 'vahtsit sõnomiid',
'newmessagesdifflink'     => 'perämäne muutminõ',
'youhavenewmessagesmulti' => 'Sullõ om vahtsit sõnomit lehe pääl $1',
'editsection'             => 'toimõndaq',
'editold'                 => 'toimõndaq',
'viewsourceold'           => 'näütäq lättekuudi',
'editlink'                => 'toimõndaq',
'viewsourcelink'          => 'kaeq lätteteksti',
'editsectionhint'         => 'Toimõndaq lõiku: $1',
'toc'                     => 'Sisukõrd',
'showtoc'                 => 'näütäq',
'hidetoc'                 => 'käkiq',
'collapsible-collapse'    => 'Käkiq ärq',
'collapsible-expand'      => 'Näütäq',
'thisisdeleted'           => 'Kaeq vai tiiq tagasi $1?',
'viewdeleted'             => 'Näüdädäq $1?',
'restorelink'             => '{{PLURAL:$1|üts kistutõt muutminõ|$1 kustutõdut muutmist}}',
'feedlinks'               => 'Sisseandminõ:',
'feed-invalid'            => 'Viganõ sisseandminõ.',
'feed-unavailable'        => 'Võrgosüütit olõ-i saiaq',
'site-rss-feed'           => '$1-RSS-söödüs',
'site-atom-feed'          => '$1-Atom-söödüs',
'page-rss-feed'           => '$1 (RSS-söödüs)',
'page-atom-feed'          => '$1 (Atom-söödüs)',
'red-link-title'          => '$1 (säänest lehte olõ-i)',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main'      => 'Artikli',
'nstab-user'      => 'Pruukjalehekülg',
'nstab-media'     => 'Meediä',
'nstab-special'   => 'Tallituslehekülg',
'nstab-project'   => 'Nimileht',
'nstab-image'     => 'Pilt',
'nstab-mediawiki' => 'Teedüs',
'nstab-template'  => 'Näüdüs',
'nstab-help'      => 'Oppus',
'nstab-category'  => 'Katõgooria',

# Main script and global functions
'nosuchaction'      => 'Säänest tallitust olõ-i.',
'nosuchactiontext'  => 'Seo aadrõsi manoq käüvä tallitus om viganõ.
Võimalik, et sa kirotit aadrõsi võlssi vai pruugõt vigast linki.
Niisama või taa ollaq {{SITENAME}} tarkvara viga.',
'nosuchspecialpage' => 'Säänest tallituslehekülge olõ-i.',
'nospecialpagetext' => '<strong> Säänest tallituslehekülge olõ-õi.</strong>

Olõmanolõvaq tallitusleheküleq ommaq löüdäq leheküle päält [[Special:SpecialPages|{{int:specialpages}}]].',

# General errors
'error'                => 'Viga',
'databaseerror'        => 'Teedüskogo viga',
'dberrortext'          => 'Teedüskogo perräküsümisen oll\' süntaksiviga.
Perräküsümine oll\' viganõ vai om tarkvaran viga.
Viimäne teedüskogo perräküsümine oll\':
<blockquote><tt>$1</tt></blockquote>
ja tuu tetti funktsioonist "<tt>$2</tt>".
Teedüskogo and\' viateedüse "<tt>$3: $4</tt>".',
'dberrortextcl'        => 'Teedüskogo perräküsümisen oll\' süntaksiviga.
Viimäne teedüskogo perräküsümine oll\':
"$1"
ja tuu tetti funktsioonist "$2".
Teedüskogo and\' viateedüse "$3: $4".',
'laggedslavemode'      => 'Hoiatus: Taa lehe pääl pruugi-i ollaq perämäidsi muutmiisi.',
'readonly'             => 'Teedüskogo kirotuskaitsõ all',
'enterlockreason'      => 'Kirodaq lukkupandmisõ põhjus ja ligikaudnõ vallalõvõtmisõ aig',
'readonlytext'         => "Teedüskogo om kirotuskaitsõ all, arvadaq niikavvas ku tedä parandõdas.
Kõrraldaja, kiä taa kirotuskaitsõ alaq võtt', and' sääntse selgütüse:
<p>$1",
'missing-article'      => 'Lehe sissu lövvetä-s teedüskogost: $1 $2.

Hariligult tulõ taa vanaslännüst võrrõlus- vai aoluulehelingist, miä näütäs ärqkistutõdu lehe pääle.

Ku olõ-i tegemist ärqkistutõdu lehega, olõt või-ollaq löüdnüq programmivia.
Annaq taa lehe aadrõs viki [[Special:ListUsers/sysop|ülevänpidäjäle]].',
'missingarticle-rev'   => '(kujo#: $1)',
'missingarticle-diff'  => '(lahkominek: $1, $2)',
'readonly_lag'         => 'Teedüskogo panti automaatsõhe kinniq, et kõik teedüskogoserveriq saasiq kätte kõik värskiq muutmisõq',
'internalerror'        => 'Sisemäne viga',
'internalerror_info'   => 'Viga: $1',
'filecopyerror'        => 'Es saaq teedüstüt "$1" teedüstüs "$2" kopidaq.',
'filerenameerror'      => 'Es saaq teedüstüt "$1" teedüstüs "$2" ümbre nimetäq.',
'filedeleteerror'      => 'Teedüstüt nimega "$1" saa-i ärq kistutaq.',
'directorycreateerror' => 'Saa-s luvvaq kausta "$1".',
'filenotfound'         => 'Lövvä es teedüstüt "$1".',
'fileexistserror'      => 'Saa-i kirotaq teedüstühe "$1": teedüstü om olõman',
'unexpected'           => 'Uutmaldaq väärtüs: "$1"="$2".',
'formerror'            => 'Viga: vormi saa es pästäq',
'badarticleerror'      => 'Taad tallitust saa ei seo leheküle pääl tetäq.',
'cannotdelete'         => 'Lehekülge vai pilti "$1" saa ei ärq kistutaq. 
Või-ollaq kiäki tõõnõ jo kistut\' taa ärq.',
'badtitle'             => 'Viganõ päälkiri',
'badtitletext'         => "Küsüt artiklipäälkiri oll' kas viganõ, tühi vai sis
võlssi näüdät kiili- vai wikidevaihõlinõ päälkiri.",
'perfcached'           => 'Järgmäne teedüs om puhvõrdõt ja pruugi ei ollaq kõgõ värskimb:',
'perfcachedts'         => 'Järgmäne teedüs om puhvõrdõt ja om viimäte muudõt $1.',
'querypage-no-updates' => 'Taad lehe teedüst parhilla värskis ei tetäq.',
'wrong_wfQuery_params' => 'Võlss suurusõq tallitusõlõ wfQuery()<br />
Tallitus: $1<br />
Perräküsümine: $2',
'viewsource'           => 'Kaeq lätteteksti',
'actionthrottled'      => 'Tallitusõ kibõhus piirõt',
'actionthrottledtext'  => "Taa tallitusõ mitmit kõrdo tegemine om prahipandjidõ peräst ärq keelet. Olõt taad lühkü ao seen pall'o hulga tennüq. Prooviq veidükese ao peräst vahtsõst.",
'protectedpagetext'    => 'Taa lehekülg om kirotuskaidsõt.',
'viewsourcetext'       => 'Võit kaiaq ja kopidaq taa lehe lättekoodi:',
'protectedinterface'   => "Taa lehe pääl om tarkvara pruukjapalgõ tekst. Leht om lukku pant, et taad saasi-i ärq ts'urkiq.",
'editinginterface'     => "'''Hoiatus:''' Sa toimõndat tarkvara pruukjapalgõ tekstiga lehte. Ku siin midä muudat, mõotas tuu pruukjapalõt. Ümbrepandmisõs tasos pruukiq MediaWiki ümbrepandmisõ tüüriista [//translatewiki.net/wiki/Main_Page?setlang=fiu-vro translatewiki.net].",
'sqlhidden'            => '(SQL-perräküsümine käkit)',
'cascadeprotected'     => 'Taa leht om kirotuskaidsõt, selle et taa {{PLURAL:$1|kuulus alanolõvidõ kaidsõtuidõ lehti hulka|kuulus alanolõvidõ kaidsõtuidõ lehti hulka}}:
$2',
'namespaceprotected'   => "Sul olõ-i lubat toimõndaq nimeruumi '''$1''' lehti.",
'ns-specialprotected'  => 'Tallituslehekülgi ei saaq toimõndaq.',
'titleprotected'       => "Pruukja [[User:$1|$1]] om sääntse nimega lehe luumisõ ärq kiildnüq põhjusõga: ''$2''.",

# Virus scanner
'virus-badscanner'     => "Viga säädmiisin: tundmalda viirusõkaidsõq: ''$1''",
'virus-scanfailed'     => 'viirusõotsminõ lää-s kõrda (viakuud $1)',
'virus-unknownscanner' => 'tundmalda viirusõkaidsõq:',

# Login and logout pages
'logouttext'                 => "'''Olõt nime alt vällä lännüq.'''

Võit {{SITENAME}}t ilma nimeldä edesi toimõndaq vai [[Special:UserLogin|vahtsõst sama vai tõõsõ nimega sisse minnäq]].
Tähelepandmisõs: niikavva, ku sa olõ-i tühäs tennüq uma võrgokaeja vaihõmällo, võivaq mõnõq leheküleq iks viil näüdädäq, nigu sa olõsi nimega seen.",
'welcomecreation'            => '<h2>Tereq, $1!</h2><p>Su konto om valmis. Võit taa hindä perrä sisse säädäq.',
'yourname'                   => 'Pruukjanimi',
'yourpassword'               => 'Salasõna',
'yourpasswordagain'          => 'Kirodaq viilkõrd salasõna',
'remembermypassword'         => 'Jätäq salasõna miilde (kooniq $1 {{PLURAL:$1|pääväs|pääväs}})',
'yourdomainname'             => 'Võrgonimi',
'externaldberror'            => 'Välitsen kimmästegemisteedüskogon om viga vai olõ-i sul lubat umma pruukjanimme muutaq.',
'login'                      => 'Nimega sisseminek',
'nav-login-createaccount'    => 'Mineq nimega sisse',
'loginprompt'                => '{{SITENAME}} lask nimega sisse õnnõ sis, ku lubatas valmistuisi.',
'userlogin'                  => 'Mineq nimega sisse vai luuq pruukjanimi',
'userloginnocreate'          => 'Nimega sisseminek',
'logout'                     => 'Nime alt välläminek',
'userlogout'                 => 'Mineq nime alt vällä',
'notloggedin'                => 'Olõ-i nimega sisse mint',
'nologin'                    => "Sul olõ-i viil pruukjanimme? '''$1'''.",
'nologinlink'                => 'Tiiq hindäle pruukjanimi',
'createaccount'              => 'Tiiq pruukjanimi ärq',
'gotaccount'                 => "Ku sul jo om uma pruukjanimi, sis '''$1'''.",
'gotaccountlink'             => 'võit nimega sisse minnäq',
'createaccountmail'          => 'e-postiga',
'createaccountreason'        => 'Põhjus:',
'badretype'                  => 'Kirotõduq salasõnaq ei klapiq kokko.',
'userexists'                 => 'Taad pruukjanimme jo pruugitas.
Valiq tõõnõ nimi.',
'loginerror'                 => 'Sisseminemise viga',
'createaccounterror'         => 'Pruukjanime luuminõ lää-äs kõrda: $1',
'nocookiesnew'               => 'Pruukjakonto om valmis, a sa päse-s sisse, selle et {{SITENAME}} tarvitas pruukjidõ kimmästegemises valmistuisi. Suq võrgokaejan ommaq valmistusõq ärq keeledüq. Säeq valmistusõq lubatus ja mineq sis uma vahtsõ pruukjanime ja salasõnaga sisse.',
'nocookieslogin'             => '{{SITENAME}} tarvitas pruukjidõ kimmästegemises valmistuisi. Suq võrgokaejan ommaq valmistusõq keeledüq. Säeq valmistusõq lubatus ja prooviq vahtsõst.',
'noname'                     => 'Võlssi kirotõt pruukjanimi.',
'loginsuccesstitle'          => "Sisseminek läts' kõrda",
'loginsuccess'               => 'Olõt nimega sisse lännüq. Suq pruukjanimi om "$1".',
'nosuchuser'                 => '"$1" nimelist pruukjat olõ-i olõman.
Kaeq kiräpilt üle vai [[Special:UserLogin/signup|luuq vahtsõnõ pruukjanimi]].',
'nosuchusershort'            => '"$1" nimelist pruukjat olõ-i olõman. Kas kirotit iks nime õigõhe?',
'nouserspecified'            => 'Olõ-i kirotõt pruukjanimme.',
'wrongpassword'              => 'Kirotõt võlss salasõna. Prooviq vahtsõst.',
'wrongpasswordempty'         => 'Salasõna tohe-i tühi ollaq.',
'passwordtooshort'           => "Salasõna om viganõ vai pall'o lühkü. Taan piät olõma vähämbält {{PLURAL:$1|1 märk|$1 märki}} ja taa tohe-i ollaq sama, miä su pruukjanimi.",
'mailmypassword'             => 'Saadaq mullõ e-postiga vahtsõnõ salasõna',
'passwordremindertitle'      => '{{SITENAME}} salasõna miildetulõtus',
'passwordremindertext'       => 'Kiäki (arvadaq saq esiq, puutri võrgonummõr $1),
pallõl\' vahtsõt sisseminegi salasõnna {{SITENAME}} ($4) jaos.
Pruukja "$2" salasõna om noq "$3". Ku olõt nimega sisse lännüq, võit taa aotlidsõ salasõna ärq muutaq.
Aotlinõ salasõna lätt vanas {{PLURAL:$5|üte päävä|$5 päävä}} peräst.

Ku taa pallõmisõ om tennüq kiä tõõnõ vai ku olõt uma salasõna miilde tulõtanuq ja taha-i taad inämb muutaq,
sis teku-i seost sõnomist vällä ja pruugiq umma vanna salasõnna edesi.',
'noemail'                    => 'Kah\'os olõ-i meil pruukja "$1" e-postiaadrõssit.',
'passwordsent'               => 'Vahtsõnõ salasõna om saadõt pruukja "$1" kirotõdu e-postiaadrõsi pääle. Ku olõt salasõna kätte saanuq, mineq nimega sisse.',
'blocked-mailpassword'       => 'Su võrgonumbrilõ om pant pääle toimõndamiskiild, miä lasõ-i salasõnna miilde tulõtaq.',
'eauthentsent'               => 'Sullõ om saadõt kinnütüskiri. Muid kirjo saadõta-i inne, ku olõt tennüq nii, kuis kirän opat ja kinnütänüq, et taa om suq e-postiaadrõs.',
'throttled-mailpassword'     => '{{PLURAL:$1|tunni|$1 tunni}} seen om saadõt salasõna miildetulõtus. Sääntsit miildetulõtuisi saadõtas õnnõ {{PLURAL:$1|tunni|$1 tunni}} takast.',
'mailerror'                  => 'Kirä saatmisõ viga: $1',
'acct_creation_throttle_hit' => 'Sa olõt tennüq jo {{PLURAL:$1|1 pruukjanime|$1 pruukjanimme}}. Rohkõmb ei saaq.',
'emailauthenticated'         => 'Su e-postiaadrõs kinnütedi ärq $2 kell $3.',
'emailnotauthenticated'      => "Su e-postiaadrõssit olõ-i viil kinnütet. Alanolõvi as'on e-kirjo ei saadõtaq.",
'noemailprefs'               => 'Olõ-i ant e-postiaadrõssit.',
'emailconfirmlink'           => 'Kinnüdäq uma e-postiaadrõs.',
'invalidemailaddress'        => 'Olõ-i kõrralik e-postiaadrõs, taa om võlss moodun.
Kirodaq õigõ e-postiaadrõs vai jätäq rivi rühäs.',
'accountcreated'             => 'Pruukjanimi luudi',
'accountcreatedtext'         => 'Luudi pruukjanimi pruukjalõ $1.',
'createaccount-title'        => 'Vahtsõ {{SITENAME}} pruukjanime luuminõ',
'createaccount-text'         => 'Kiäki om loonuq pruukjanime $2 lehistüle {{SITENAME}} ($4). Pruukjanime "$2" salasõna om "$3".
Mineq nimega sisse ja vaihtaq salasõna ärq.

Ku taa pruukjanimi om luud kogõmaldaq, olõ-i sul vaia taast sõnomist vällä tetäq.',
'usernamehasherror'          => 'Pruukjanimen ei võiq ollaq trellimärke ("#").',
'login-throttled'            => "Olõt uma nime ala minekis pruuvnuq pall'o hulga esiqsugutsit salasõnno.
Oodaq vähä inne ku proovit vahtsõst.",
'loginlanguagelabel'         => 'Kiil: $1',

# Change password dialog
'resetpass'                 => 'Muudaq salasõnna',
'resetpass_announce'        => 'Sa lätsit sisse e-postiga saadõdu aotlidsõ koodiga. Kõrdapiten sisseminekis tulõ sul siin tetäq hindäle  vahtsõnõ salasõna:',
'resetpass_text'            => '<!-- Kirodaq siiäq -->',
'resetpass_header'          => 'Muudaq pruukjanime salasõnna',
'oldpassword'               => 'Vana salasõna',
'newpassword'               => 'Vahtsõnõ salasõna',
'retypenew'                 => 'Kirodaq viilkõrd vahtsõnõ salasõna',
'resetpass_submit'          => 'Kirodaq salasõna ja mineq nimega sisse',
'resetpass_success'         => 'Salasõna vaihtaminõ läts kõrda.',
'resetpass_forbidden'       => 'Salasõnno saa-i muutaq.',
'resetpass-no-info'         => 'Taa lehe pääle päsemises piät olõma nimega sisse lännüq.',
'resetpass-submit-loggedin' => 'Muudaq salasõnna',
'resetpass-submit-cancel'   => 'Jätäq katski',
'resetpass-wrong-oldpass'   => 'Viganõ aotlinõ vai parhillanõ salasõna.
Või-ollaq olõt jo uma salasõna ärq muutnuq vai küsünüq vahtsõ aotlidsõ salasõna.',
'resetpass-temp-password'   => 'Aotlinõ salasõna:',

# Edit page toolbar
'bold_sample'     => 'Paks kiri',
'bold_tip'        => 'Paks kiri',
'italic_sample'   => 'Liuhkakiri',
'italic_tip'      => 'Liuhkakiri',
'link_sample'     => 'Lingitäv päälkiri',
'link_tip'        => 'Siselink',
'extlink_sample'  => 'http://www.example.com Lingi nimi',
'extlink_tip'     => 'Välislink (unõhtagu-i ette pandaq http://)',
'headline_sample' => 'Päälkiri',
'headline_tip'    => 'Tõõsõ tasõmõ päälkiri',
'nowiki_sample'   => 'Kirodaq kujondamalda tekst',
'nowiki_tip'      => 'Tunnistagu-i viki kujondust',
'image_sample'    => 'Näüdüs.jpg',
'image_tip'       => 'Pästet pilt',
'media_sample'    => 'Näüdüs.ogg',
'media_tip'       => 'Meediäteedüstü',
'sig_tip'         => 'Suq allkiri üten aotempliga',
'hr_tip'          => 'Horisontaaljuun',

# Edit pages
'summary'                          => 'Kokkovõtõq:',
'subject'                          => 'Päälkiri:',
'minoredit'                        => 'Taa om väiku parandus',
'watchthis'                        => 'Kaeq taa lehe perrä',
'savearticle'                      => 'Pästäq',
'preview'                          => 'Proovikaehus',
'showpreview'                      => 'Näütäq proovikaehust',
'showlivepreview'                  => 'Kipõkaehus',
'showdiff'                         => 'Näütäq muutmiisi',
'anoneditwarning'                  => "'''Hoiatus:''' sa olõ-i nimega sisse lännüq, seo lehe aolukku pandas su puutri aadrõs.",
'missingsummary'                   => "'''Miildetulõtus:'''sa olõ-i kirotanuq uma toimõndamisõ kokkovõtõt. Ku klõpsahtat viil kõrra nuppi Pästäq, sis pästetäs su toimõndus ilma kokkovõttõldaq.",
'missingcommenttext'               => 'Olõq hää, kirodaq kokkovõtõq.',
'missingcommentheader'             => 'Sa olõ-i andnuq umalõ kokkovõttõlõ päälkirjä. Ku klõpsahtat nuppi <em>Pästäq</em>, pästetäs toimõndus ilma päälkiräldä.',
'summary-preview'                  => 'Kokkovõttõ kaeminõ:',
'subject-preview'                  => 'Päälkirä kaeminõ:',
'blockedtitle'                     => 'Pruukja om kinniq peet',
'blockedtext'                      => "'''Su pruukjanimi vai puutri võrgoaadrõs om kinniq pant.'''

Kinniqpandja om $1.
Timä põhjõndus om sääne: ''$2''.

* Kinniqpandmisõ algus: $8
* Kinniqpandmisõ lõpp: $6
* Kinnipandja: $7

Küsümüst saat arotaq $1 vai mõnõ tõõsõ [[{{MediaWiki:Grouppage-sysop}}|kõrraldajaga]].
Panõq tähele, et sa saa-i taalõ pruukjalõ sõnomit saataq, ku sa olõ-i kirjä pandnuq umma [[Special:Preferences|säädmislehe]] e-posti aadrõssit.
Suq puutri võrgoaadrõs om $3 ja kinnipandmistunnus om #$5. Panõq naaq kõiki perräküsümiisi manoq, midä tiit.",
'autoblockedtext'                  => "Su puutri võrgoaadrõs peeti automaatsõhe kinniq, selle et taad om tarvitanuq kiäki pruukja, kink om kinniq pidänüq $1.
Kinniqpidämise põhjus:

:''$2''

* Kinniqpidämise algus: $8
* Kinniqpidämise lõpp: $6
* Taheti kinniq pitäq: $7


Taa kinniqpidämise kotsilõ perräküsümises ja taa arotamisõs võit kirotaq kõrraldajalõ $1 vai mõnõlõ
[[{{MediaWiki:Grouppage-sysop}}|tõõsõlõ kõrraldajalõ]].

Rehkendäq tuud, et sa saa-i tõisilõ pruukjilõ e-kirjo saataq, ku sa olõ-i ummi [[Special:Preferences|säädmiisihe]] kirjä pandnuq suq hindä masvat e-postiaadrõssit.

Suq puutri võrgoaadrõs om parhilla $3 ja kinniqpidämise tunnusnummõr om #$5. Olõq hää, kirodaq taa nummõr egä perräküsümise mano, miä sa tiit.",
'blockednoreason'                  => 'põhjust olõ-i näüdät',
'whitelistedittext'                => 'Lehekülgi toimõndamisõs $1.',
'confirmedittext'                  => 'Sa saa-i inne lehekülgi toimõndaq, ku olõt kinnütänüq ärq uma e-postiaadrõsi. Tuud saat tetäq uma [[Special:Preferences|säädmislehe]] pääl.',
'nosuchsectiontitle'               => 'Olõ-i säänest lõiku',
'nosuchsectiontext'                => 'Sa proovõq toimõndaq lõiku, midä olõ-i olõman.
Või ollaq, et taa kistutõdi ärq tuul aol, ku sa lehte kait.',
'loginreqtitle'                    => 'Piät nimega sisse minemä',
'loginreqlink'                     => 'nimega sisse minemä',
'loginreqpagetext'                 => 'Tõisi lehekülgi kaemisõs piät $1.',
'accmailtitle'                     => 'Salasõna saadõt.',
'accmailtext'                      => "Pruukjalõ '$1' luud johuslinõ salasõna saadõti aadresi pääle $2.

Tuud salasõnna saa muutaq ''[[Special:ChangePassword|salasõba muutmisõ lehe pääl]]'' päält vahtsõ nimega sisseminemist.",
'newarticle'                       => '(Vahtsõnõ)',
'newarticletext'                   => "Taad lehekülge olõ-i viil luud.
Leheküle luumisõs nakkaq kirotama alanolõvahe kasti (kaeq [[{{MediaWiki:Helppage}}|oppust]]).
Ku sa johtuq siiäq kogõmaldaq, sis klõpsaq võrgokaeja '''Tagasi'''-nuppi.",
'anontalkpagetext'                 => "---- ''Taa om arotusleht nimeldä pruukja kotsilõ, kiä olõ-i loonuq pruukjanimme vai pruugi-i tuud. Tuuperäst tulõ meil pruukja kimmästegemises pruukiq timä puutri võrgoaadrõssit. Taa aadrõs või ollaq mitmõ pruukja pääle ütine. Ku olõt nimeldä pruukja ja lövvät, et taa leheküle pääle kirotõt jutt käü suq kotsilõ, sis olõq hää, [[Special:UserLogin/signup|luuq konto]] vai [[Special:UserLogin|mineq nimega sisse]], et edespiten segähüisi ärq hoitaq.''",
'noarticletext'                    => 'Seo leht om parlaq tühi.
Võit [[Special:Search/{{PAGENAME}}|otsiq soe lehe nimme]]  tõisi lehti päält vai
<span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} uuriq muutmisnimekirjo] vai [{{fullurl:{{FULLPAGENAME}}|action=edit}} puuduolõva leheküle esiq luvvaq]</span>.',
'userpage-userdoesnotexist'        => 'Pruukjanimme "<nowiki>$1</nowiki>" olõ-i kirjä pant. Kaeq perrä, kas olõt iks kimmäs, et tahat taad lehte toimõndaq.',
'userpage-userdoesnotexist-view'   => 'Pruukjanimme "$1" olõ-õi kirjä pant.',
'clearyourcache'                   => "'''Panõq tähele:''' perän pästmist piät muutmiisi nägemises uma võrgokaeja vaihõmälo tühäs tegemä. '''Mozillal / Firofoxil / Safaril''' hoiaq all nõstmisnuppi ''Shift'' ja vaodaq ''Reload'' vai ''Ctrl-R'' (Macil ''Command-R''); Konqueroril vaodaq ''Reload'' vai ''F5''. Operal puhastaq vaihõmälo ja võtaq valikust ''Tools → Preferences''. Internet Exploreril hoiaq ''Ctrl'' ja vaodaq ''Refresh'' vai vaodaq  ''ctrl-f5''.",
'usercssyoucanpreview'             => "'''Nõvvoannõq:''' Pruugiq nuppi 'Näütäq proovikaehust' uma vahtsõ CCS-i vai JavaScripti ülekaemisõs, inne ku taa ärq pästät.",
'userjsyoucanpreview'              => "'''Nõvvoannõq:''' Pruugiq nuppi 'Näütäq proovikaehust' uma vahtsõ CCS-i vai JavaScripti ülekaemisõs, inne ku taa ärq pästät.",
'usercsspreview'                   => "'''Seo um CSS-i proovikaehus. Määntsitki muutuisi olõ-i viil pästet.'''",
'userjspreview'                    => "'''Unõhtagu-i, et seo kujo su umast javascriptist om viil pästmäldäq!'''",
'userinvalidcssjstitle'            => "'''Miildetulõtus:''' Olõ-i stiili nimega \"\$1\". Piäq meelen, et pruukja säedüq .css- and .js-leheq piät nakkama väiku algustähega.",
'updated'                          => '(Värskis tett)',
'note'                             => "'''Miildetulõtus:'''",
'previewnote'                      => "'''Taa om õnnõ proovikaehus; muutmisõq olõ-i pästedüq!'''",
'previewconflict'                  => "Taa proovikaehus näütäs, kuis ülembädsen toimõtuskastin ollõv tekst' päält pästmist vällä nägemä nakkas.",
'session_fail_preview'             => "'''Annaq andis! Su toimõndust saa-s pästäq, selle et su tüükõrra teedüs om kaoma lännüq. Olõq hää, proomiq viilkõrd. Ku tuust olõ-i kassu, proomiq nii, et läät nime alt vällä ja sis jälq tagasi sisse.'''",
'session_fail_preview_html'        => "'''Annaq andis, mi saa-i tallitaq su toimõndust, selle et toimõnduskõrra teedüs om kaoma lännüq.'''

''Kuna taan vikin om käügin lihtsä HTML, sis om näütämist piiret JavaScript-i ründämiisi kaitsõs.''

'''Ku taa om õigõ toimõnduskatsõq, prooviq viilkõrd. Ku iks tüütä-i, prooviq nime alt vällä minekit ja vahtsõst sissetulõkit.'''",
'editing'                          => 'Toimõndõdas artiklit $1',
'editingsection'                   => 'Toimõndõdas lõiku artiklist $1',
'editingcomment'                   => 'Toimõndõdas kommõntaari lehe $1 pääl',
'editconflict'                     => 'Toimõndamisvastaolo: $1',
'explainconflict'                  => "Kiäki om muutnuq seod lehte perän tuud, ku saq taad toimõndama naksiq.
Ülemädsen toimõnduskastin om teksti perämäne kujo.
Suq muutmisõq ommaq alomadsõn kastin.
Sul tulõ naaq viimätsehe kujjo üle viiäq.
Ku klõpsahtat nuppi \"{{int:savearticle}}\", sis pästetäs '''õnnõ''' ülembädse toimõnduskasti tekst.",
'yourtext'                         => 'Suq tekst',
'storedversion'                    => 'Pästet kujo',
'nonunicodebrowser'                => "'''Hoiatus: su võrgokaeja tukõ-i Unicode'i. Olõq hüä, võtaq toimõndamisõs leht vallalõ tõõsõn võrgokaejan.'''",
'editingold'                       => "'''KAEQ ETTE! Toimõndat parhilla taa lehe vanna kujjo. Ku taa ärq pästät, sis lätväq kõik päält taad kujjo tettüq muutmisõq kaoma.'''",
'yourdiff'                         => 'Lahkominegiq',
'copyrightwarning'                 => 'Pruukjapalgõ ümbrepandmisõq loetasõq avaldõdus $2 perrä
(täpsämbähe kaeq $1). Muud sissu või pruukiq tävveste vabalt, ku olõ-i tõisildõ näüdät.',
'copyrightwarning2'                => "Rehkendäq tuud, et kõiki seo lehe pääle tettüid kirotuisi ja toimõnduisi või kiä taht muutaq vai ärq kistutaq. Ku sa taha-i, et su tüüd armuhiitmäldä ümbre tetäs ja uma ärqnägemise perrä pruugitas, sis pästku-i taad siiäq. Sa piät ka lubama, et kirotit uma jutu esiq vai võtit kopimiskeelüldä paigast (täpsämbält kaeq $1). '''PANGU-I TAAHA TEGIJÄÕIGUISIGA KAIDSÕTUT MATÕRJAALI ILMA LUALDA!'''",
'longpageerror'                    => "'''VIGA: Lehe suurus om $1 kilobaiti. Taad saa-i pästäq, selle et kõgõ suurõmb lubat suurus om $2 kilobaiti.'''",
'readonlywarning'                  => "'''HOIATUS: Teedüskogo om huuldustöie jaos lukku pant, nii et parhilla saa-i paranduisi pästäq. Võit teksti alalõ hoitaq tekstifailin ja pästäq taa siiäq peränpoolõ.'''",
'protectedpagewarning'             => '<center><small>Taa leht om lukun. Taad saavaq toimõndaq õnnõ kõrraldajaõiguisiga pruukjaq.</small></center>',
'semiprotectedpagewarning'         => 'Seod lehte saavaq muutaq õnnõ nimega sisse lännüq pruukjaq.',
'cascadeprotectedwarning'          => 'Taad lehte võivaq toimõndaq õnnõ kõrraldajaõiguisiga pruukjaq, selle et taa kuulus $1 järgmädse kaidsõdu lehe hulka:',
'templatesused'                    => 'Seo lehe pääl om pruugit {{PLURAL:$1|näüdüst|näüdüssit}}:',
'templatesusedpreview'             => 'Proovikaehusõn {{PLURAL:$1|pruugit näüdüs|pruugiduq näüdüseq}}:',
'templatesusedsection'             => 'Seon lõigun pruugiduq näüdüseq:',
'template-protected'               => '(ärqkaidsõt)',
'template-semiprotected'           => '(ärqkaidsõduq nimeldä ja vahtsõq pruukjaq)',
'hiddencategories'                 => 'Seo leht kuulus {{PLURAL:$1|1 käkitühe katõgooriahe|$1 käkitühe katõgooriahe}}:',
'nocreatetitle'                    => 'Lehekülgi luuminõ piiret',
'nocreatetext'                     => '{{SITENAME}} lupa-i luvvaq vahtsit lehti.
Võit toimõndaq olõmanolõvit lehti vai [[Special:UserLogin|minnäq nimega sisse]].',
'nocreate-loggedin'                => 'Sul olõ-i lupa luvvaq vahtsit {{SITENAME}} lehti.',
'permissionserrors'                => 'Õigusõq ei klapiq',
'permissionserrorstext'            => 'Sul olõ-i lubat taad tetäq, {{PLURAL:$1|tuuperäst, et|tuuperäst, et}}:',
'permissionserrorstext-withaction' => 'Sul olõ-õi lubat {{lcfirst:$2}} {{PLURAL:$1|järgmädsel põhjusõl|järgmäidsil põhjuisil}}:',
'recreate-moveddeleted-warn'       => "'''Hoiatus: Sa proovit vahtsõst luvvaq lehte, miä om ärq kistutõt.'''

Kas tahat taad lehte tõtõstõ toimõndaq? Kaeq ka sissekirotust seo lehe ärqkistutamisõ kotsilõ:",
'edit-conflict'                    => 'Samaaignõ toimõndus.',

# "Undo" feature
'undo-success' => "Tagasivõtminõ läts' kõrda. Kaeq üle, kas taa om tuu, midä sa tetäq tahtsõt ja pästäq muutusõq.",
'undo-failure' => 'Tagasivõtminõ lää-s kõrda samal aol tettüide muutmiisi vastaolo peräst. Võit muutusõq käsilde tagasi võttaq.',
'undo-summary' => "Tagasi võet muutminõ #$1, mink tekk' [[Special:Contributions/$2|$2]] ([[User talk:$2|Arotus]])",

# Account creation failure
'cantcreateaccounttitle' => 'Pruukjanime luuminõ lää-s kõrda',
'cantcreateaccount-text' => "Pruukjanime luuminõ taa puutri võrgoaadrõsi päält ('''$1''') om ärq keelet. Kiildjä: [[User:$3|$3]].

$3 kirjäpant põhjus: ''$2''",

# History pages
'viewpagelogs'           => 'Kaeq seo lehe muutmisnimekirjä.',
'nohistory'              => 'Seo leheküle pääl ei olõq vanõmbit kujjõ.',
'currentrev'             => 'Viimäne kujo',
'currentrev-asof'        => 'Viimäne kujo ($1)',
'revisionasof'           => 'Kujo $1',
'revision-info'          => 'Kujo aost $1 - tennüq $2',
'previousrevision'       => '←Vanõmb kujo',
'nextrevision'           => 'Vahtsõmb kujo→',
'currentrevisionlink'    => 'Viimäne kujo',
'cur'                    => 'viim',
'next'                   => 'järgm',
'last'                   => 'minev',
'page_first'             => 'edimäne leht',
'page_last'              => 'viimäne leht',
'histlegend'             => "Märgiq ärq kujoq, midä tahat kõrvo säädiq ja vaodaq võrdõlõmisnuppi.
Seletüs: (viim) = lahkominegiq viimätsest kujost,
(minev) = lahkominegiq minevädsest kujost, ts = väiku (tsill'okõnõ) muutminõ",
'history-fieldset-title' => 'Kaeq muutmiisi aoluku',
'history-show-deleted'   => 'Õnnõ kistutõduq',
'histfirst'              => 'Edimädseq',
'histlast'               => 'Viimädseq',
'historysize'            => '({{PLURAL:$1|1 bait|$1 baiti}})',
'historyempty'           => '(tühi)',

# Revision feed
'history-feed-title'          => 'Muutmislugu',
'history-feed-description'    => 'Seo lehe muutmislugu',
'history-feed-item-nocomment' => '$1 ($2)',
'history-feed-empty'          => 'Säänest lehte olõ-i. Taa või ollaq ärq kistutõt vai ümbre nimetet. Võit pruumiq [[Special:Search|otsiq]] lehti, miä võivaq ollaq taa lehega köüdedüq.',

# Revision deletion
'rev-deleted-comment'         => '(kommõntaar ärq kistutõt)',
'rev-deleted-user'            => '(pruukjanimi ärq kistutõt)',
'rev-deleted-event'           => '(muutmisnimekirä tallitus ärq kistutõt)',
'rev-deleted-text-permission' => 'Lehe taa kujo om avaligust arhiivist ärq kistutõt.
Lisateedüst või ollaq [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} kistutamisnimekirän].',
'rev-deleted-text-view'       => "Taa lehekujo om avaligust pruugist ärq kistutõt, a kõrraldajaq saavaq taad nätäq. As'a kotsilõ või teedüst olla [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} kistutusnimekirän].",
'rev-suppressed-text-view'    => "Taa lehekujo om '''käkit''', a kõrraldajaq saavaq taad nätäq. As'a kotsilõ või teedüst olla [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} käkmisnimekirän].",
'rev-deleted-no-diff'         => 'Seod lahkominekit saa-ai kaiaq, selle et üts lehekujo om ärq kistutõt. Lisateedüst või ollaq [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} kistutamisnimekirän].',
'rev-suppressed-no-diff'      => "Lahkominekit saa-ai kaiaq, selle et üts lehekujo om '''ärq kistutõt'''.",
'rev-delundel'                => 'näütäq/käkiq',
'revisiondelete'              => 'Kistudaq/võtaq tagasi lehe kujjõ',
'revdelete-nooldid-title'     => 'Säänest otsitavat kujjo olõ-i',
'revdelete-nooldid-text'      => 'Sa olõ-i valinuq kujjo vai kujjõ.',
'revdelete-selected'          => "'''{{PLURAL:$2|Valit kujo|Validuq kujoq}} lehele [[:$1]]'''",
'logdelete-selected'          => "'''{{PLURAL:$1|Valit muutminõ|Validuq muutmisõq}}:'''",
'revdelete-text'              => "'''Kistudõduq kujoq ommaq olõman lehe aoluun, a näide sissu saa-i avaligult nätäq.''' Seo viki tõõsõq kõrraldajaq saavaq taad käkitüt teksti lukõq ja taa tagasi avaligult nättäväs tetäq, ku olõ-i säet muid piirdmiisi.",
'revdelete-legend'            => 'Nättävüse piirdmiseq',
'revdelete-hide-text'         => 'Käkiq kujo sisu',
'revdelete-hide-image'        => 'Käkiq teedüstü sissu',
'revdelete-hide-name'         => 'Käkiq kujo nimi',
'revdelete-hide-comment'      => 'Käkiq kokkovõtõq',
'revdelete-hide-user'         => 'Käkiq toimõndaja pruukjanimi vai puutri võrgoaadrõs',
'revdelete-hide-restricted'   => 'Panõq teedüs lukku ka kõrraldajilõ',
'revdelete-radio-set'         => 'Jah',
'revdelete-suppress'          => 'Panõq teedüs lukku ka kõrraldajilõ',
'revdelete-unsuppress'        => 'Võtaq tagasitettüisi kujjõ päält piirdmisõq maaha',
'revdelete-log'               => 'Põhjus:',
'revdelete-submit'            => 'Võtaq käüki valitulõ kujolõ',
'revdelete-success'           => "'''Kujo nättävüs paika säet.'''",
'logdelete-success'           => "'''Muutmiisi nättävüs paika säet.'''",
'revdel-restore'              => 'Muudaq nägemist',
'revdel-restore-deleted'      => 'ärqkistutõduq muutusõq',
'revdel-restore-visible'      => 'nätäq muutusõq',
'pagehist'                    => 'Leheküle aolugu',

# History merging
'mergehistory'       => 'Panõq lehti aoluuq kokko',
'mergehistory-box'   => 'Panõq katõ lehe muutmiisi aolugu kokko:',
'mergehistory-from'  => 'Lätteleht:',
'mergehistory-into'  => 'Tsihtleht:',
'mergehistory-list'  => 'Liidetäv muutmiisi aolugu',
'mergehistory-merge' => 'Järgmädseq lehe [[:$1]] muutmisõq või mano pandaq lehe [[:$2]] muutmisaolukku. Võit valliq kujo, minkast vahtsõmbit kujjõ kokko ei pandaq, a võrgokaeja linke pruukminõ kaotas taa teedüse ärq.',
'mergehistory-go'    => 'Näütäq kokkopantavit muutuisi',

# Merge log
'revertmerge' => 'Lüüq jälki lahko',

# Diffs
'history-title'           => '"$1" muutmiisi nimekiri',
'difference'              => '(Kujjõ lahkominegiq)',
'lineno'                  => 'Rida $1:',
'compareselectedversions' => 'Võrdõlõq valituid kujjõ',
'editundo'                => 'võtaq tagasi',
'diff-multi'              => '(Kujjõ vaihõl {{PLURAL:$1|üts näütämäldä muutminõ|$1 näütämäldä muutmist}}.)',

# Search results
'searchresults'                    => 'Otsmisõ tulõmusõq',
'searchresults-title'              => 'Otsmisõ "$1" tulõmiq',
'searchresulttext'                 => 'Lisateedüst otsmisõ kotsilõ kaeq [[{{MediaWiki:Helppage}}|{{SITENAME}} otsmisoppusõst]].',
'searchsubtitle'                   => 'Sa otsõt fraasi "[[:$1]]" ([[Special:Prefixindex/$1|kõik kiräkotussõga "$1" päälenakkajaq leheq]]{{int:pipe-separator}}[[Special:WhatLinksHere/$1|kõik leheq, kon om linke artiklilõ "$1"]])',
'searchsubtitleinvalid'            => 'Otsminõ "$1"',
'titlematches'                     => "Artiklipäälkir'ost löüt",
'notitlematches'                   => "Artiklipäälkir'ost es lövväq",
'textmatches'                      => 'Artiklitekstest löüt',
'notextmatches'                    => 'Artiklitekstest es lövväq',
'prevn'                            => '← {{PLURAL:$1|mineväne|$1 mineväst}}',
'nextn'                            => '{{PLURAL:$1|järgmäne|$1 järgmäst}} →',
'prevn-title'                      => '{{PLURAL:$1|Viimäne tulõmus|Viimädseq $1 tulõmust}}',
'nextn-title'                      => '{{PLURAL:$1|Järgmäne tulõmus|Järgmädseq $1 tulõmust}}',
'shown-title'                      => 'Näütäq lehe kotsilõ $1 {{PLURAL:$1|tulõmus|tulõmust}}',
'viewprevnext'                     => 'Näütäq ($1 {{int:pipe-separator}} $2) ($3).',
'searchmenu-new'                   => "'''Luuq leht päälkiräga \"[[:\$1]]\".'''",
'searchhelp-url'                   => 'Help:Oppus',
'searchprofile-articles'           => 'Sisuleheq',
'searchprofile-project'            => 'Abi- ja projektileheq',
'searchprofile-images'             => 'Multimeediä',
'searchprofile-everything'         => 'Kõik',
'searchprofile-advanced'           => 'Täpsämb otsminõ',
'searchprofile-articles-tooltip'   => 'Otsiq nimeruumist $1',
'searchprofile-project-tooltip'    => 'Otsiq nimeruumõst $1',
'searchprofile-images-tooltip'     => 'Teedüstü otsminõ',
'searchprofile-everything-tooltip' => 'Otsiq egält puult (ka arotuslehti päält)',
'searchprofile-advanced-tooltip'   => 'Otsiq etteannõtuist nimeruumõst',
'search-result-size'               => '$1 ({{PLURAL:$2|1 sõna|$2 sõnna}})',
'search-redirect'                  => '(ümbresaatminõ $1)',
'search-section'                   => '(alljago $1)',
'search-suggest'                   => 'Kas mõtlit: $1',
'search-interwiki-caption'         => 'Sõsarprojektiq',
'search-interwiki-default'         => '$1 tulõmiq:',
'search-interwiki-more'            => '(viil)',
'search-mwsuggest-enabled'         => 'näütäq soovituisi',
'search-mwsuggest-disabled'        => 'ilma soovituisilda',
'search-relatedarticle'            => 'Otsiq samasugutsit lehti',
'mwsuggest-disable'                => 'Näüdäku-i AJAX-i soovituisi',
'searchrelated'                    => 'samasugunõ',
'searchall'                        => 'kõik',
'showingresults'                   => "{{PLURAL:$1|'''Üts''' tulõmus|'''$1''' tulõmust}} (tulõmusõst '''$2''' pääle).",
'showingresultsnum'                => "Näüdätäs {{PLURAL:$3|'''1''' tulõmus|'''$3''' tulõmust}} tulõmusõst #'''$2''' pääle.",
'showingresultsheader'             => "{{PLURAL:$5|'''$1''' '''$3'''-st vastussõst|Vastusõq '''$1–$2''' '''$3'''-st}} perräküsümisele '''$4'''",
'nonefound'                        => "'''Hoiatus''':  Otsitas õnnõ üten jaon nimeruumõn.
Ku tahat otsiq kõrraga kõigist nimeruumidest (ka arotuskülgi päält, näüdüssist jne) pruugiq
otsisõna iin edejakku ''all:''. Ütest kimmäst nimeruumist otsmisõs pruugiq edejakus tuu nimeruumi nimme.",
'powersearch'                      => 'Otsminõ',
'powersearch-legend'               => 'Laendõt otsminõ',
'powersearch-ns'                   => 'Otsminõ nimeruumõst:',
'powersearch-redir'                => 'Loeq üles ümbresaatmisõq',
'powersearch-field'                => 'Otsiq',
'search-external'                  => 'Väline otsminõ',
'searchdisabled'                   => "{{SITENAME}} otsminõ parhillaq ei tüütäq. Niikavva, ku otsminõ jälq tüüle saa, võit pruukiq otsmisõs alanolõvat Google'i otsikasti, a näide teedüs {{SITENAME}} sisust pruugi-i ollaq alasi kõgõ värskimb.",

# Quickbar
'qbsettings'               => 'Kipõriba säädmine',
'qbsettings-none'          => 'Olõ-i',
'qbsettings-fixedleft'     => 'Kõgõ kural puul',
'qbsettings-fixedright'    => 'Kõgõ hüäl puul',
'qbsettings-floatingleft'  => 'Ujovahe kural puul',
'qbsettings-floatingright' => 'Ujovahe hüäl puul',

# Preferences page
'preferences'               => 'Säädmine',
'mypreferences'             => 'Mu säädmiseq',
'prefs-edits'               => 'Tõimõndamiisi arv:',
'prefsnologin'              => 'Sa olõ-i nimega sisse lännüq',
'prefsnologintext'          => 'Et säädmiisi tetäq, tulõ sul [[Special:UserLogin|nimega sisse minnäq]].',
'changepassword'            => 'Muudaq salasõnna',
'prefs-skin'                => 'Vällänägemine',
'skin-preview'              => 'Kaeminõ',
'datedefault'               => 'Ütskõik',
'prefs-datetime'            => 'Kuupäiv ja kelläaig',
'prefs-personal'            => 'Pruukjateedüs',
'prefs-rc'                  => 'Perämädseq muutmisõq',
'prefs-watchlist'           => 'Perräkaemisnimekiri',
'prefs-watchlist-days'      => 'Mitmõ päävä muutmiisi näüdädäq perräkaemisnimekirän:',
'prefs-watchlist-edits'     => 'Perräkaemisnimekirän näüdätävide muutuisi hulk:',
'prefs-misc'                => 'Muuq säädmiseq',
'saveprefs'                 => 'Pästäq säädmiseq ärq',
'resetprefs'                => 'Võtaq säädmiseq tagasi',
'prefs-editing'             => 'Toimõnduskasti suurus',
'rows'                      => 'Rito',
'searchresultshead'         => 'Otsminõ',
'resultsperpage'            => 'Tulõmuisi leheküle kotsilõ',
'stub-threshold'            => '<a href="#" class="stub">Kehväkese lehe</a> näütämispiir (baidõn):',
'recentchangesdays'         => 'Päivi, midä näüdädäq viimätsin muutmiisin',
'recentchangescount'        => 'Päälkirjo hulk viimätsin muutmiisin',
'savedprefs'                => 'Su muutmisõq ommaq pästedüq.',
'timezonelegend'            => 'Aovüü',
'localtime'                 => 'Paiklik aig',
'timezoneoffset'            => 'Aovaheq',
'servertime'                => 'Serveri aig',
'guesstimezone'             => 'Võtaq aig võrgokaejast',
'allowemail'                => 'Lupaq tõisil pruukjil mullõ e-posti saataq',
'defaultns'                 => 'Otsiq vaikimiisi naist nimeruumõst:',
'default'                   => 'vaikimiisi',
'prefs-files'               => 'Teedüstüq',
'youremail'                 => 'Suq e-posti aadrõs *',
'username'                  => 'Pruukjanimi:',
'uid'                       => 'Pruukjanummõr:',
'prefs-memberingroups'      => 'Kuulus {{PLURAL:$1|rühmä|rühmihe}}:',
'yourrealname'              => 'Peris nimi *',
'yourlanguage'              => 'Pruukjapalgõ kiil:',
'yourvariant'               => 'Keelevariant:',
'yournick'                  => 'Alakirotus',
'badsig'                    => 'Seo alakirotus olõ-i masva.',
'badsiglength'              => "Alakirotus om pall'o pikk.
Taa tohe-i ollaq rohkõmb ku $1 {{PLURAL:$1|märk|märki}}.",
'email'                     => 'e-posti aadrõs',
'prefs-help-realname'       => "* <strong>Peris nimi</strong> (piä-i kirotama): ku taa teedäq annat, sis pruugitas taad pruukjanime asõmõl lehekülgi tegijide nimekir'on.",
'prefs-help-email'          => 'E-postiaadrõssit piä-i kirotama, a taa lupa tõisil pruukjil sullõ kirotaq ilma su aadrõssit nägemäldäq. Taast om sis kah kassu, ku uma salasõna ärq johtut unõhtama.',
'prefs-help-email-required' => 'E-postiaadrõs piät olõma.',

# User rights
'userrights'               => 'Pruukja õiguisi muutminõ',
'userrights-lookup-user'   => 'Pruukjaõiguisi muutminõ',
'userrights-user-editname' => 'Kirodaq pruukjanimi:',
'editusergroup'            => 'Muudaq pruukjidõ rühmi',
'editinguser'              => "Pruukja '''[[User:$1|$1]]''' õigusõq ([[User talk:$1|{{int:talkpagelinktext}}]]{{int:pipe-separator}}[[Special:Contributions/$1|{{int:contribslink}}]])",
'userrights-editusergroup' => 'Pruukjidõrühmä valik',
'saveusergroups'           => 'Pästäq pruukjidõrühmä muutmisõq',
'userrights-groupsmember'  => 'Kuulus rühmä:',
'userrights-reason'        => 'Põhjus:',

# Groups
'group'               => 'Rühm:',
'group-user'          => 'Pruukjaq',
'group-autoconfirmed' => 'Automaatsõhe kinnütedüq pruukjaq',
'group-bot'           => 'Robodiq',
'group-sysop'         => 'Kõrraldajaq',
'group-bureaucrat'    => 'Pääkõrraldajaq',
'group-suppress'      => 'Perräkaejaq',
'group-all'           => '(kõik)',

'group-user-member'          => 'Pruukja',
'group-autoconfirmed-member' => 'Automaatsõhe kinnütet pruukja',
'group-bot-member'           => 'Robot',
'group-sysop-member'         => 'Kõrraldaja',
'group-bureaucrat-member'    => 'Pääkõrraldaja',
'group-suppress-member'      => 'Perräkaeja',

'grouppage-user'          => '{{ns:project}}:Pruukjaq',
'grouppage-autoconfirmed' => '{{ns:project}}:Automaatsõhe kinnütedüq pruukjaq',
'grouppage-bot'           => '{{ns:project}}:Robodiq',
'grouppage-sysop'         => '{{ns:project}}:Kõrraldajaq',
'grouppage-bureaucrat'    => '{{ns:project}}:Pääkõrraldajaq',
'grouppage-suppress'      => '{{ns:project}}:Perräkaeja',

# Rights
'right-read'               => 'Lukõq lehti',
'right-edit'               => 'Toimõndaq lehti',
'right-createpage'         => 'Luvvaq lehti (miä olõ-õi arotusleheq)',
'right-createtalk'         => 'Luvvaq arotuslehti',
'right-createaccount'      => 'Luvvaq vahtsit pruukjanimmi',
'right-minoredit'          => 'Märkiq muutmiisi väikeisis muutmiisis',
'right-move'               => 'Nõstaq lehti tõistõ paika',
'right-move-subpages'      => 'Nõstaq lehti tõistõ paika üten näide alamblehtiga',
'right-move-rootuserpages' => 'Nõstaq tõistõ paika pruukjalehti',
'right-movefile'           => 'Nõstaq tõistõ paika teedüstüid',
'right-suppressredirect'   => 'Nõstaq tõistõ paika ilma ümbresaatmist loomalda',
'right-upload'             => 'Teedüstüid üles laatiq',
'right-reupload'           => 'Olõmanolõvit teedüstüid üle kirotaq',
'right-reupload-own'       => 'Hindä üleslaadituid teedüstüid üle kirotaq',
'right-reupload-shared'    => 'Vaihtaq paigapäälitsen vikin ümbre jaedu teedüskogo teedüstüid',
'right-upload_by_url'      => 'Teedüstüid võrgoaadrõsi päält üles laatiq',
'right-purge'              => 'Tühendäq lehe vaihõmälo ärq ilma kinnütüseldäq',
'right-autoconfirmed'      => 'Toimõndaq puulkaidsõtuid lehti',
'right-bot'                => 'Ollaq peet automaatsõs protsessis',
'right-nominornewtalk'     => 'Tetäq arotuslehe pääl väikeisi muutmiisi, ilma, et pruukjalõ näüdätäsi taad ku vahtsõt sõnomit',
'right-apihighlimits'      => 'Pruukiq API-perräküsümiisi man veidemb piirangit',
'right-writeapi'           => 'Pruukiq kirotus-APIt',
'right-delete'             => 'Lehti ärq kistutaq',
'right-bigdelete'          => 'Pikä aoluuga lehti ärq kistutaq',
'right-deleterevision'     => 'Kistutaq ärq ja tagasi tetäq lehti kujjõ',
'right-deletedhistory'     => 'Kaiaq kistutõduid aoluukirotuisi ilma tekstilda, mink pääle nä näütäseq',
'right-deletedtext'        => 'Kaiaq kistutõdut teksti ja võrrõldaq kistutõduid kujjõ',
'right-browsearchive'      => 'Otsiq kistutõduid lehti',
'right-undelete'           => 'Lehti tagasi tetäq',
'right-suppressrevision'   => 'Kaiaq ja tagasi tetäq kõrraldajidõ iist käkitüid kujjõ',
'right-suppressionlog'     => 'Kaiaq erämuutmisnimekirjo',
'right-block'              => 'Keeldäq tõisil pruukjil lehti toimõndaq',
'right-blockemail'         => 'Keeldäq pruukjil e-kirjo saataq',
'right-hideuser'           => 'Kinniq pitäq pruukjanimi ja käkkiq tuu ärq',
'right-ipblock-exempt'     => 'Minnäq müüdä automaatsist kinniqpidämiisist ni aadrõsijao ja IP-kinniqpidämiisist',
'right-proxyunbannable'    => 'Minnäq müüdä automaatsist vaihõserveri kinniqpidämiisist',

# User rights log
'rightslog'      => 'Pruukmisõiguisi muutmisõ nimekiri',
'rightslogtext'  => 'Taa om pruukmisõiguisi muutmiisi nimekiri.',
'rightslogentry' => 'Pruukja $1 õigusõq muudõti ümbre rühmäst $2 rühmä $3',
'rightsnone'     => '(olõ-i õiguisi)',

# Associated actions - in the sentence "You do not have permission to X"
'action-edit' => 'seod lehte toimõndaq',

# Recent changes
'nchanges'                          => '$1 {{PLURAL:$1|muutminõ|muutmiisi}}',
'recentchanges'                     => 'Viimädseq muutmisõq',
'recentchanges-legend'              => 'Viimätside muutmiisi säädmine',
'recentchangestext'                 => 'Kaeq seo lehe päält viimätsit muutmiisi.',
'recentchanges-feed-description'    => 'Kaeq seo lehe pääl {{SITENAME}} viimätsit muutmiisi.',
'rcnote'                            => 'Tan ommaq {{PLURAL:$1|üts muutus|$1 viimäst muutmist}}, miä ommaq tettüq {{PLURAL:$2|üte viimädse päävä|$2 viimädse päävä}} seen (kuupääväst $5, $4 lugõma naatõn).',
'rcnotefrom'                        => "Tan ommaq muutmisõq kuupääväst '''$2''' pääle (näüdätäs kooniq '''$1''' muutmist).",
'rclistfrom'                        => 'Näütäq muutmiisi kuupääväst $1 pääle',
'rcshowhideminor'                   => '$1 väikuq parandusõq',
'rcshowhidebots'                    => '$1 robodiq',
'rcshowhideliu'                     => '$1 nimega pruukjaq',
'rcshowhideanons'                   => '$1 nimeldä pruukjaq',
'rcshowhidepatr'                    => '$1 kontrolliduq muutmisõq',
'rcshowhidemine'                    => '$1 mu toimõndusõq.',
'rclinks'                           => 'Näütäq viimädseq $1 muutmist, miä ommaq tettüq viimädse $2 päävä seen. $3',
'diff'                              => 'lahk',
'hist'                              => 'aol',
'hide'                              => 'Käkitäseq',
'show'                              => 'Näüdätäseq',
'minoreditletter'                   => 'ts',
'newpageletter'                     => 'V',
'boteditletter'                     => 'rb',
'number_of_watching_users_pageview' => '[{{PLURAL:$1|$1 perräkaejat|üts perräkaeja}}]',
'rc_categories'                     => 'Õnnõ katõgoorijist (eräldedäs märgiga "|")',
'rc_categories_any'                 => 'Miä taht',
'rc-enhanced-expand'                => 'Näütäq ütsikasjo (nõud JavaScripti)',
'rc-enhanced-hide'                  => "Käkiq ütsikas'aq ärq",

# Recent changes linked
'recentchangeslinked'          => 'Siiäq putvaq muutmisõq',
'recentchangeslinked-feed'     => 'Siiäq putvaq muutmisõq',
'recentchangeslinked-toolbox'  => 'Siiäq putvaq muutmisõq',
'recentchangeslinked-title'    => 'Muutusõq noidõ lehti pääl, kohe näüdätäs lähe päält "$1"',
'recentchangeslinked-noresult' => 'Taaha putvit lehti olõ-i taa ao seen muudõt.',
'recentchangeslinked-summary'  => "Taan nimekirän ommaq noidõ lehti muutmisõq, mink pääle näütäs seo lehe päält linke. Naad leheq ommaq [[Special:Watchlist|perräkaemisnimekirän]] märgidüq '''paksu kiräga'''.",
'recentchangeslinked-page'     => 'Lehe nimi:',
'recentchangeslinked-to'       => 'Näütäq muutmiisi noidõ lehti pääl, kon om näütämiisi seo lehe pääle',

# Upload
'upload'                      => 'Teedüstü üleslaatminõ',
'uploadbtn'                   => 'Üleslaatminõ',
'reuploaddesc'                => 'Tagasi üleslaatmisõ vormi mano.',
'uploadnologin'               => 'Sa olõ-i nimega sisse lännüq',
'uploadnologintext'           => 'Kui tahat teedüstüid üles laatiq, piät [[Special:UserLogin|nimega sisse minemä]].',
'upload_directory_read_only'  => 'Serveril olõ-i üleslaatmiskausta ($1) kirotamisõ õigust.',
'uploaderror'                 => 'Üleslaatmisviga',
'uploadtext'                  => '<strong>PIÄQ KINNIQ!</strong> Inne ülelaatmist kaeq, et taa käünüq {{SITENAME}} [[{{MediaWiki:Policy-url}}|pilte pruukmisõ kõrra]] perrä.
<p>Innembält üleslaadiduq pildiq lövvät [[Special:FileList|pilte nimekiräst]].
<p>Järgmädse vormi abiga saat laatiq üles vahtsit pilte ummi artiklide ilostamisõs. Inämbüsel võrgokaejil näet nuppi "Browse..." vai "Valiq...", miä vii sinno
su opõratsioonisüsteemi standardsõhe teedüstüide vallalõtegemise aknõhe. Teedüstü valimisõs pandas timä nimi tekstivälä pääle, miä om nupi kõrval.
Piät ka kastikõistõ märgi tegemä, et kinnütät,
et sa riku-i taad teedüstüt üles laatõn kinkagi tegijäõiguisi. Üleslaatmisõs vaodaq nupi pääle "Üleslaatminõ". Taa või võttaq piso aigo, esiqeräle sis, kui sul om aiglanõ võrgoliin. <p>Soovitõdus kujos om pääväpildel JPEG, joonistuisil
ja ikooni muudu pildel PNG, helle jaos OGG.
Nimedäq umaq teedüstüq nii, et nimi ütelnüq midägi selgehe teedüstü sisu kotsilõ. Taa avitas segähüisi ärq hoitaq. Ku panõt artiklilõ pildi mano, pruugiq sääntse kujoga linki: <b>[[image:pilt.jpg]]</b> vai <b>[[image:pilt.png|alt. tekst]]</b>.
Helüteedüstü puhul: <b>[[media:teedüstü.ogg]]</b>.
<p>Panõq tähele, et nigu ka tõisi {{SITENAME}} lehekülgi pääl, võivaq tõõsõq su laadituid teedüstüid leheküle jaos muutaq vai ärq kistutaq. {{SITENAME}} kur\'astõ pruukjalõ võidas manoqpäsemine kinniq pandaq.',
'uploadlog'                   => 'Üleslaatmiisi nimekiri',
'uploadlogpage'               => 'Üleslaatmiisi nimekiri',
'uploadlogpagetext'           => 'Nimekiri viimätsist üleslaatmiisist. Kelläaoq ommaq märgidüq serveri aoarvamisõ perrä.',
'filename'                    => 'Teedüstü nimi',
'filedesc'                    => 'Kokkovõtõq',
'fileuploadsummary'           => 'Kokkovõtõq:',
'filestatus'                  => 'Teedüstü tegijäõigusõq:',
'filesource'                  => 'Kost peri:',
'uploadedfiles'               => 'Üleslaadiduq teedüstüq',
'ignorewarning'               => 'Pangu-i hoiatust tähele ja pästäq tuugiperäst.',
'ignorewarnings'              => 'Pangu-i üttegi hoiatust tähele',
'minlength1'                  => 'Teedüstünimen piät olõma vähämbält üts täht.',
'illegalfilename'             => 'Teedüstü nimen "$1" om lehenime jaos lubamaldaq märke. Vaihtaq teedüstü nimme ja prooviq taa vahtsõst üles laatiq.',
'badfilename'                 => 'Teedüstü nimi om ärq muudõt. Vahtsõnõ nimi om "$1".',
'filetype-badmime'            => 'Teedüstüid, mink MIME-tüüp om "$1" tohe-i üles laatiq.',
'filetype-missing'            => 'Teedüstül olõ-i laendust (nt ".jpg").',
'large-file'                  => 'Teedüstüq tohe-i ollaq suurõmbaq, ku $1, a taa teedüstü om $2.',
'largefileserver'             => 'Teedüstü om suurõmb ku server lupa.',
'emptyfile'                   => "Teedüstü, midä sa proovõq üles laatiq paistus ollõv tühi. Kaeq üle, et kirotit nime õigõhe ja et taa olõ-i serverile pall'o suur.",
'fileexists'                  => "Sama nimega teedüstü om jo olõman.
Katso '''<tt>[[:$1]]</tt>''', ku sa olõ-i kimmäs, et tahat taad muutaq.
[[$1|thumb]]",
'fileexists-extension'        => "Sääntse nimega teedüstü om jo olõman: [[$2|thumb]]
* Üleslaaditava teedüstü nimi: '''<tt>[[:$1]]</tt>'''
* Olõmanolõva teedüstü nimi: '''<tt>[[:$2]]</tt>'''
Ainugõnõ vaih om laendusõ suurõ/väiku algustähe man. Kaeq perrä, kas naaq ommaq üts ja tuusama teedüstü.",
'fileexists-thumbnail-yes'    => "Taa paistus ollõv vähändet pilt ''(thumbnail)''. [[$1|thumb]]
Kaeq teedüstü '''<tt>[[:$1]]</tt>'''üle.
Ku ülekaet teedüstü om sama pilt alguperälidsen suurusõn, sis olõ-i vaia eräle vähändedüt pilti üles laatiq.",
'file-thumbnail-no'           => "Teedüstü nimi nakkas pääle '''<tt>$1</tt>'''. Taa paistus ollõv vähändet pilt ''(thumbnail)''. Ku sul om olõman taa pilt tävven suurusõn, sis laadiq üles tuu, ku olõ-i, sis muudaq teedüstü nimi ärq.",
'fileexists-forbidden'        => 'Sääntse nimega teedüstü om jo olõman. Pästäq teedüstü tõõsõ nimega. Parhillanõ teedüstü: [[File:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'Sama nimega teedüstü om jo olõman jaetuidõ teedüstüide hulgan. Pästäq teedüstü mõnõ tõõsõ nime ala. Parhillanõ teedüstü: [[File:$1|thumb|center|$1]]',
'uploadwarning'               => 'Üleslaatmishoiatus',
'savefile'                    => 'Pästäq teedüstü ärq',
'uploadedimage'               => 'laadõ üles "$1"',
'overwroteimage'              => 'üles laadit "[[$1]]" vahtsõnõ kujo',
'uploaddisabled'              => 'Üleslaatminõ lää-s kõrda',
'uploaddisabledtext'          => 'Teedüstü üleslaatminõ om keelet.',
'uploadscripted'              => 'Seol teedüstül om HTML-kuud vai skripte, minkast võrgokaeja või võlssi arvo saiaq.',
'uploadvirus'                 => 'Teedüstül om viirus man! Kaeq: $1',
'sourcefilename'              => 'Teedüstü nimi:',
'destfilename'                => 'Teedüstü nimi vikin:',
'watchthisupload'             => 'Kaeq taa lehe perrä',
'filewasdeleted'              => 'Sääntse nimega teedüstü om jo üles laadit ja sis ärq kistutõt. Kaeq üle $1 inne ku nakkat jälq üles laatma.',
'upload-success-subj'         => "Üleslaatminõ läts' kõrda",

'upload-proto-error'      => 'Viganõ protokoll',
'upload-proto-error-text' => 'Üles saa laatiq õnnõ aadrõssidõ päält, mink alostusõn om <code>http://</code> vai <code>ftp://</code>.',
'upload-file-error'       => 'Sisemäne viga',
'upload-file-error-text'  => 'Aotlidsõ teedüstü luuminõ lää-s kõrda. Küsüq api kõrraldaja käest.',
'upload-misc-error'       => 'Üleslaatmisõ viga',
'upload-misc-error-text'  => 'Teedüstü üleslaatminõ lää-s kõrda. Kaeq üle, kas su ant aadrõs om masva ja õigõhe kirotõt. Ku viga iks ärq kao-i, küsüq api kõrraldaja käest.',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6'       => 'Lövvä-s säänest aadrõssit',
'upload-curl-error6-text'  => 'Lövvä-s säänest aadrõssit. Kaeq üle, kas aadrõss om iks õigõ ja tüütäs.',
'upload-curl-error28'      => 'Saa-s ao pääle üles laaditus',
'upload-curl-error28-text' => 'Taa aadrõsi päält saa-s ao pääle vastust. Oodaq vähä ja prooviq vahtsõst.',

'license'            => 'Litsents:',
'license-header'     => 'Litsents:',
'nolicense'          => 'Olõ-i litsentsi valit',
'license-nopreview'  => '(Saa-i kaiaq)',
'upload_source_url'  => ' (avalik tüütäv võrgoaadrõs)',
'upload_source_file' => ' (teedüstü su puutrin)',

# Special:ListFiles
'listfiles_search_for'  => 'Pildi nime otsminõ:',
'imgfile'               => 'teedüstü',
'listfiles'             => 'Pilte nimekiri',
'listfiles_date'        => 'Kuupäiv',
'listfiles_name'        => 'Nimi',
'listfiles_user'        => 'Pruukja',
'listfiles_size'        => 'Suurus (baidõn)',
'listfiles_description' => 'Seletüs',

# File description page
'file-anchor-link'          => 'Pilt',
'filehist'                  => 'Teedüstü aolugu',
'filehist-help'             => "Klõpsaq kuupäävä/kelläao pääl, et nätäq määne taa teedüstü sis oll'.",
'filehist-deleteall'        => 'kistudaq kõik ärq',
'filehist-deleteone'        => 'kistudaq ärq',
'filehist-revert'           => 'võtaq tagasi',
'filehist-current'          => 'parhillanõ',
'filehist-datetime'         => 'Kuupäiv/Kelläaig',
'filehist-thumb'            => 'Väiku pilt',
'filehist-thumbtext'        => 'Väiku pilt $1 kujolõ',
'filehist-user'             => 'Pruukja',
'filehist-dimensions'       => 'Suurus',
'filehist-filesize'         => 'Teedüstü suurus',
'filehist-comment'          => 'Seletüs:',
'imagelinks'                => 'Teedüstülingiq',
'linkstoimage'              => 'Taa pildi pääle {{PLURAL:$1|näütäs lehekülg|näütäseq leheküleq}}:',
'nolinkstoimage'            => 'Taa pildi pääle näütä-i ütski lehekülg.',
'sharedupload'              => 'Seo teedüstü om peri lättest $1 ni taad võivaq pruukiq ka tõõsõq vikiq.',
'uploadnewversion-linktext' => 'Laadiq taa teedüstü vahtsõnõ kujo',

# File reversion
'filerevert'         => 'Võtaq tagasi $1',
'filerevert-legend'  => 'Võtaq tagasi teedüstü',
'filerevert-comment' => 'Põhjus:',
'filerevert-submit'  => 'Võtaq tagasi',

# File deletion
'filedelete'         => 'Kistudaq ärq $1',
'filedelete-legend'  => 'Kistudaq teedüstü ärq',
'filedelete-intro'   => "Sa kistutat ärq '''[[Media:$1|$1]]'''.",
'filedelete-comment' => 'Põhjus:',
'filedelete-submit'  => 'Kistudaq',
'filedelete-success' => "'''$1''' om ärq kistutõt.",
'filedelete-nofile'  => "'''$1''' olõ-i seo lehe pääl.",

# MIME search
'mimesearch'         => 'MIME-otsminõ',
'mimesearch-summary' => 'Taa lehe pääl saat otsiq teedüstüid näide MIME-tüübi perrä. Kirodaq: sisutüüp/alltüüp, nt <tt>image/jpeg</tt>.',
'mimetype'           => 'MIME-tüüp:',
'download'           => 'laat',

# Unwatched pages
'unwatchedpages' => 'Perräkaemisõlda leheq',

# List redirects
'listredirects' => 'Ümbresaatmisõq',

# Unused templates
'unusedtemplates'     => 'Pruukmalda näüdüseq',
'unusedtemplatestext' => 'Tan ommaq kirän kõik näüdüseq, midä olõ-i ütegi lehe pääle pant. Inne ku naaq ärq kistutat, kaeq perrä, kas näide pääle kost määnest linki näütä-i.',
'unusedtemplateswlh'  => 'muuq lingiq',

# Random page
'randompage'         => 'Johuslinõ artikli',
'randompage-nopages' => 'Seon nimeruumin olõ-i üttegi lehte.',

# Random redirect
'randomredirect'         => 'Johuslinõ ümbresaatminõ',
'randomredirect-nopages' => 'Seon nimeruumin olõ-i üttegi ümbresaatmist.',

# Statistics
'statistics'                   => 'Statistiga',
'statistics-header-pages'      => 'Lehekülgi statistiga',
'statistics-header-edits'      => 'Toimõndamisõ statistiga',
'statistics-header-views'      => 'Kaemisõ statistiga',
'statistics-header-users'      => 'Pruukjidõ statistiga',
'statistics-articles'          => 'Sisulehekülgi',
'statistics-pages'             => 'Lehekülgi',
'statistics-pages-desc'        => 'Kõik leheq, säälhulgan arotusleheq, ümbresaatmisleheq ja muuq.',
'statistics-files'             => 'Üleslaadituid teedüstüid',
'statistics-edits'             => 'Toimõnduisi {{SITENAME}} luumisõst pääle',
'statistics-edits-average'     => 'Keskmädselt toimõnduisi leheküle kotsilõ',
'statistics-views-total'       => 'Lehti kaemiisi kokko',
'statistics-users'             => 'Kirjäpandnuid [[Special:ListUsers|pruukjit]]',
'statistics-users-active'      => 'Tegüsit pruukjit',
'statistics-users-active-desc' => 'Pruukjaq, kiä ommaq tan midägi toimõndanuq {{PLURAL:$1|viimädse päävä|viimädse $1 päävä}} seen.',
'statistics-mostpopular'       => 'Kõgõ kaetumbaq leheq',

'disambiguations'      => 'Lingiq, miä näütäseq täpsüstüslehekülgi pääle',
'disambiguationspage'  => 'Template:Linke täpsüstüslehekülile',
'disambiguations-text' => "Naaq leheq näütäseq '''täpsüstüslehti''' pääle.
Tuu asõmal pidänüq nä näütämä as'a sisu pääle.<br />
Lehte peetäs täpsüstüslehes, ku timän om pruugit näüdüst, kohe näütäs link lehelt [[MediaWiki:Disambiguationspage]].",

'doubleredirects'     => 'Katõkõrdsõq ümbresaatmisõq',
'doubleredirectstext' => 'Egä ria pääl om ärq tuud edimäne ja tõõnõ ümbresaatmisleht ja niisama tõõsõ ümbresaatmislehe link, miä näütäs hariligult kotusõ pääle, kohe edimäne ümbersaatmisleht pidänüq õkva näütämä.',

'brokenredirects'        => 'Vigadsõq ümbresaatmisõq',
'brokenredirectstext'    => 'Naaq ümbresaatmisõq näütäseq lehti pääle, midä olõ-i olõman:',
'brokenredirects-edit'   => 'toimõndaq',
'brokenredirects-delete' => 'kistudaq ärq',

'withoutinterwiki'         => 'Keelelingeldä leheq',
'withoutinterwiki-summary' => 'Nail lehil olõ-i linke tõisi kiili lehti pääle:',

'fewestrevisions' => 'Kõgõ veidemb kõrdo toimõndõduq leheq',

# Miscellaneous special pages
'nbytes'                  => '$1 {{PLURAL:$1|bait|baiti}}',
'ncategories'             => '$1 {{PLURAL:$1|katõgooria|katõgooriaq}}',
'nlinks'                  => '$1 {{PLURAL:$1|link|linki}}',
'nmembers'                => '$1 {{PLURAL:$1|liigõq|liigõt}}',
'nrevisions'              => '$1 {{PLURAL:$1|muutminõ|muutmist}}',
'nviews'                  => 'Käümiisi: $1',
'specialpage-empty'       => 'Taa leht om tühi.',
'lonelypages'             => 'Artikliq, kohe olõ-i linke',
'lonelypagestext'         => 'Nailõ lehile olõ-i muialt vikist linke.',
'uncategorizedpages'      => 'Katõgoorijilda leheq',
'uncategorizedcategories' => 'Katõgoorijilda katõgooriaq',
'uncategorizedimages'     => 'Katõgoorijilda teedüstüq',
'uncategorizedtemplates'  => 'Katõgoorialdaq näüdüseq',
'unusedcategories'        => 'Pruukmalda katõgooriaq',
'unusedimages'            => 'Pruukmaldaq pildiq',
'popularpages'            => "Pall'okäütüq leheküleq",
'wantedcategories'        => 'Kõgõ tahetumbaq katõgooriaq',
'wantedpages'             => 'Kõgõ tahetumbaq artikliq',
'mostlinked'              => 'Leheq, kohe om kõgõ rohkõmb linke',
'mostlinkedcategories'    => 'Katõgooriaq, kohe om kõgõ rohkõmb linke',
'mostlinkedtemplates'     => 'Näüdüseq, kohe näütäs kõgõ rohkõmb linke',
'mostcategories'          => 'Artikliq, mil om kõgõ rohkõmb katõgoorijit',
'mostimages'              => 'Kõgõ inämb pruugiduq teedüstüq',
'mostrevisions'           => 'Artikliq, mil om kõgõ rohkõmb toimõnduisi',
'prefixindex'             => 'Leheq päälkirä algusõ perrä',
'shortpages'              => 'Lühküq artikliq',
'longpages'               => 'Pikäq artikliq',
'deadendpages'            => 'Leheq, kon olõ-i linke',
'deadendpagestext'        => 'Nail lehil olõ-i linke tõisi viki lehti pääle.',
'protectedpages'          => 'Kaidsõduq leheq',
'protectedpagestext'      => 'Naaq leheq kaidsõtasõq ärq tõistõ paika panõkist ja muutmisõst.',
'protectedpagesempty'     => 'Olõ-i kaidsõtuid lehti.',
'listusers'               => 'Pruukjaq',
'newpages'                => 'Vahtsõq leheküleq',
'newpages-username'       => 'Pruukjanimi:',
'ancientpages'            => 'Kõgõ vanõmbaq leheküleq',
'move'                    => 'Nõstaq ümbre',
'movethispage'            => 'Panõq lehekülg tõistõ paika',
'unusedimagestext'        => 'Panõq tähele, et tõõsõq leheküleq, nigu tõisi maiõ Vikipeediäq, võivaq pandaq siiäq lehekülgi pääle õkvalinke, tuuperäst võidas siin antuid pilte ka parhilla aktiivsõhe pruukiq.',
'unusedcategoriestext'    => 'Naaq katõgooriaq ommaq olõman, a naid pruugita-i.',
'notargettitle'           => 'Otsitut lehte olõ-i',
'notargettext'            => 'Sa olõ-i andnuq lehte ega pruukjat, minka taad tallitust tetäq.',
'nopagetext'              => 'Säänest lehte olõ-i olõman.',
'pager-newer-n'           => '{{PLURAL:$1|vahtsõmb 1|vahtsõmbaq $1}}',
'pager-older-n'           => '{{PLURAL:$1|vanõmb 1|vanõmbaq $1}}',

# Book sources
'booksources'               => 'Raamaduq',
'booksources-search-legend' => 'Otsiq raamatut',
'booksources-go'            => 'Otsiq',
'booksources-text'          => 'Tan om linke lehekülile, kon müvväs raamatit vai andas raamatidõ kotsilõ teedüst.',

# Special:Log
'specialloguserlabel'  => 'Pruukja:',
'speciallogtitlelabel' => 'Päälkiri:',
'log'                  => 'Muutmisnimekiri',
'all-logs-page'        => 'Kõik muutmisõq',
'alllogstext'          => '{{SITENAME}} kõiki muutmiisi - kistutamiisi, kaitsmiisi, kinniqpidämiisi ja kõrraldamiisi ütine nimekiri. Võit valliq ka eräle muutmistüübi, pruukjanime vai lehe päälkirä perrä.',
'logempty'             => 'Muutmisnimekirän olõ-i sääntsit kiräkotussit.',
'log-title-wildcard'   => 'Otsiq päälkirjo, miä alostasõq taa tekstiga',

# Special:AllPages
'allpages'          => 'Kõik artikliq',
'alphaindexline'    => '$1 kooniq $2',
'nextpage'          => 'Järgmäne lehekülg ($1)',
'prevpage'          => 'Mineväne lehekülg ($1)',
'allpagesfrom'      => 'Nakkaq näütämä lehekülest:',
'allpagesto'        => 'Näütäq lehti kooni päälkiräni',
'allarticles'       => 'Kõik artikliq',
'allinnamespace'    => 'Kõik nimeruumi $1 leheq',
'allnotinnamespace' => 'Kõik leheq, midä olõ-i nimeruumin $1',
'allpagesprev'      => 'Mineväne',
'allpagesnext'      => 'Järgmäne',
'allpagessubmit'    => 'Näütäq',
'allpagesprefix'    => 'Näütäq lehti, mink alostusõn om:',
'allpagesbadtitle'  => "Taa päälkiri oll' viganõ vai vikidevaihõlidsõ edejakuga. Tan või ollaq märke, midä tohe-i päälkir'on pruukiq.",
'allpages-bad-ns'   => '{{SITENAME}}n olõ-i nimeruumi "$1".',

# Special:Categories
'categories'         => 'Katõgooriaq',
'categoriespagetext' => 'Seon vikin ommaq sääntseq katõgooriaq.
[[Special:UnusedCategories|Unused categories]] are not shown here.
Also see [[Special:WantedCategories|wanted categories]].',

# Special:LinkSearch
'linksearch'    => 'Välislingiq',
'linksearch-ok' => 'Otsminõ',

# Special:ListUsers
'listusersfrom'      => 'Näütäq pruukjit alostõn:',
'listusers-submit'   => 'Näütäq',
'listusers-noresult' => 'Olõ-s pruukjit.',

# Special:Log/newusers
'newuserlogpage' => 'Vahtsõq pruukjaq',

# Special:ListGroupRights
'listgrouprights'         => 'Pruukjarühmi õigusõq',
'listgrouprights-members' => '(liikmidõ nimekiri)',

# E-mail user
'mailnologin'     => 'Olõ-i saatja aadrõssit',
'mailnologintext' => 'Sa piät olõma [[Special:UserLogin|nimega sisse lännüq]]
ja sul piät umin [[Special:Preferences|säädmiisin]] olõma e-postiaadrõs, et sa saasiq tõisilõ pruukjilõ e-kirjo saataq.',
'emailuser'       => 'Kirodaq taalõ pruukjalõ e-kiri',
'emailpage'       => 'Kirodaq pruukjalõ e-kiri',
'emailpagetext'   => 'Ku taa pruukja om ummi säädmiisihe pandnuq uma tüütävä e-postiaadrõsi, saa taa vormi abiga tälle saataq üte kirä. Kirän jääs nätäq saatja aadrõs, et kirä saaja saanuq kiräle vastadaq.',
'usermailererror' => 'Saatmisõ viga:',
'defemailsubject' => '{{SITENAME}} e-post',
'noemailtitle'    => 'Olõ-i e-postiaadrõssit',
'noemailtext'     => 'Taa pruukja olõ-i andnuq umma e-postiaadrõssit.',
'emailfrom'       => 'Kink käest',
'emailto'         => 'Kinkalõ',
'emailsubject'    => 'Teema',
'emailmessage'    => 'Sõnnom',
'emailsend'       => 'Saadaq',
'emailccme'       => 'Saadaq mullõ kopi mu e-kiräst.',
'emailccsubject'  => 'Kopi su kiräst aadrõsi pääle $1: $2',
'emailsent'       => 'E-post saadõt',
'emailsenttext'   => 'Sõnnom saadõt.',

# Watchlist
'watchlist'            => 'Perräkaemisnimekiri',
'mywatchlist'          => 'mu perräkaemisnimekiri',
'nowatchlist'          => 'Perräkaemisnimekiri om tühi.',
'watchlistanontext'    => 'Perräkaemisnimekirä pruukmisõs $1.',
'watchnologin'         => 'Olõ-i nimega sisse mint',
'watchnologintext'     => 'Perräkaemisnimekirä muutmisõs piät [[Special:UserLogin|nimega sisse minemä]].',
'addedwatchtext'       => "Lehekülg \"<nowiki>\$1</nowiki>\" om pant su [[Special:Watchlist|perräkaemisnimekirjä]]. Edespididseq muutmisõq seo lehe ja tä arotuskülgi pääl pandasõq ritta siin ja [[Special:RecentChanges|viimätside muutmiisi lehe pääl]] tuvvasõq '''paksun kirän'''. Ku tahat taad lehte perräkaemisnimekiräst vällä võttaq, klõpsaq nuppi \"Lõpõdaq perräkaeminõ ärq\".",
'removedwatchtext'     => 'Leht "[[:$1]]" om [[Special:Watchlist|perräkaemisnimekiräst]] maaha võet.',
'watch'                => 'Kaeq perrä',
'watchthispage'        => 'Kaeq taad lehekülge perrä',
'unwatch'              => 'Lõpõdaq perräkaeminõ ärq',
'unwatchthispage'      => 'Lõpõdaq perräkaeminõ ärq',
'notanarticle'         => 'Olõ-i artikli',
'watchnochange'        => 'Taa ao seen olõ-i üttegi perräkaetavat lehte muudõt.',
'watchlist-details'    => 'Perräkaemisnimekirän om {{PLURAL:$1|$1 leht|$1 lehte}}, rehkendämäldä arotuslehti.',
'wlheader-enotif'      => '* E-postiga teedäqandmisõq ommaq käügin.',
'wlheader-showupdated' => "* Leheq, midä om muudõt päält su viimäst käümist, ommaq '''paksun kirän'''",
'watchmethod-recent'   => 'kontrollitas perräkaetavidõ lehti perämäidsi muutmiisi',
'watchmethod-list'     => 'perräkaetavidõ lehti perämädseq muutmisõq',
'watchlistcontains'    => 'Perräkaemisnimekirän om $1 {{PLURAL:$1|leht|lehte}}.',
'iteminvalidname'      => "Hädä lehega '$1'! Lehe nimen om viga.",
'wlnote'               => "Tan om '''$1''' {{PLURAL:$1|muutminõ|muutmist}} viimädse '''$2''' tunni ao seen.",
'wlshowlast'           => 'Näütäq viimädseq $1 tunni $2 päivä $3',
'watchlist-options'    => 'Perräkaemisnimekirä säädmine',

# Displayed when you click the "watch" button and it is in the process of watching
'watching'   => 'Pandas perräkaemisnimekirjä...',
'unwatching' => 'Võetas perräkaemisõ alt maaha...',

'enotif_mailer'                => '{{SITENAME}} lehe muutumisteedüs',
'enotif_reset'                 => 'Märgiq kõik leheq ülekaetuis',
'enotif_newpagetext'           => 'Taa om vahtsõnõ leht.',
'enotif_impersonal_salutation' => '{{SITENAME}} pruukja',
'changed'                      => 'lehte muutnuq',
'created'                      => 'lehe loonuq',
'enotif_subject'               => '$PAGEEDITOR om $CHANGEDORCREATED $PAGETITLE',
'enotif_lastvisited'           => 'Lehel $1 ommaq kõik päält suq perämäst käümist tettüq muutmisõq.',
'enotif_lastdiff'              => 'Taa muutusõ nägemises kaeq: $1.',
'enotif_anon_editor'           => 'nimeldä pruukja $1',
'enotif_body'                  => 'Hüä $WATCHINGUSERNAME,

{{SITENAME}} lehte $PAGETITLE $CHANGEDORCREATED $PAGEEDITDATE $PAGEEDITOR, parhillast kujjo kaeq $PAGETITLE_URL.

$NEWPAGE

Muutja kokkovõtõq: $PAGESUMMARY $PAGEMINOREDIT

Kirodaq muutjalõ:
e-post: $PAGEEDITOR_EMAIL
viki: $PAGEEDITOR_WIKI

Inämb seo lehe kotsilõ teedäqandmiisi saadõta-i. Võit ka kõik su perräkaetavidõ lehti muutmisõ kuulutusõq ärq keeldäq.

{{SITENAME}} teedäqandmiskõrraldus

Perräkaemisnimekirä säädmiisi saat muutaq lehe pääl: {{canonicalurl:Special:Watchlist/edit}}

As\'a kotsilõ mano kaiaq ja küssü saat lehe päält: {{canonicalurl:{{MediaWiki:Helppage}}}}',

# Delete
'deletepage'            => 'Kistudaq lehekülg ärq',
'confirm'               => 'Kinnüdäq',
'excontent'             => "sisu oll': '$1'",
'excontentauthor'       => "sisu oll': '$1' (ja ainugõnõ toimõndaja oll' '[[Special:Contributions/$2|$2]]')",
'exbeforeblank'         => "inne tühästegemist oll': '$1'",
'exblank'               => "leht oll' tühi",
'historywarning'        => 'Hoiatus: Lehel, midä tahat ärq kistutaq, om olõman aolugu:',
'confirmdeletetext'     => 'Sa kistutat teedüskogost periselt ärq lehe vai pildi üten kõgõ timä aoluuga.
Kinnüdäq, et sa tahat tuud tõtõstõ tetäq, et sa saat arvo, miä tuust tullaq või ja et tuu, miä sa tiit, klapis [[{{MediaWiki:Policy-url}}|sisekõrraga]].',
'actioncomplete'        => 'Tallitus valmis',
'deletedtext'           => '"$1" om ärq kistutõt.
Perämäidsi kistutuisi nimekirjä näet siist: $2.',
'dellogpage'            => 'Kistutõduq leheküleq',
'dellogpagetext'        => 'Naaq ommaq perämädseq kistutamisõq.
Kelläaoq ummaq serveriao perrä.',
'deletionlog'           => 'Kistutõduq leheküleq',
'reverted'              => 'Minti tagasi vana kujo pääle',
'deletecomment'         => 'Põhjus:',
'deleteotherreason'     => 'Muu põhjus vai täpsüstüs:',
'deletereasonotherlist' => 'Muu põhjus',
'deletereason-dropdown' => "*Hariliguq kistutamisõ põhjusõq
** Kirotaja hindä palvõl
** Tegijäõigusõ rikminõ
** Lehe ts'urkminõ",

# Rollback
'rollback'       => 'Mineq tagasi vana kujo pääle',
'rollback_short' => 'Võtaq tagasi',
'rollbacklink'   => 'võtaq tagasi vana kujo',
'rollbackfailed' => 'Muutmiisi tagasivõtminõ lää-s kõrda',
'cantrollback'   => 'Saa-i muutmiisi tagasi pöördäq; viimäne muutja om lehe ainugõnõ toimõndaja.',
'alreadyrolled'  => 'Pruukja [[User:$2|$2]] ([[User talk:$2|arotus]]) tettüid lehe [[:$1]] muutmiisi saa-i tagasi võttaq, selle et pruukja [[User:$3|$3]] ([[User talk:$3|arotus]]) om tennüq vahtsõmbit muutmiisi.',
'editcomment'    => "Toimõndamiskokkovõtõq oll': \"''\$1''\".",
'revertpage'     => 'Pruukja [[Special:Contributions/$2|$2]] ([[User_talk:$2|arotus]]) toimõndusõq pöörediq tagasi ja leht panti tagasi pruukja [[User:$1|$1]] tettü kujo pääle.',

# Edit tokens
'sessionfailure' => 'Paistus ollõv määnegi hädä su toimõndamiskõrraga, tuuperäst om viimäne muutminõ egäs johtumisõs jätet tegemäldä. Vaodaq võrgokaeja "tagasi"-nuppi, laadiq üle lehekülg, kost sa tullit ja prooviq vahtsõst.',

# Protect
'protectlogpage'              => 'Lehti kaitsmiisi nimekiri',
'protectlogtext'              => 'Tan om nimekiri lehti kaitsmiisist ja kaitsmisõ maahavõtmiisist. Parhilla kaitsõ all olõvidõ lehti nimekirä lövvät [[Special:ProtectedPages|tast]].',
'protectedarticle'            => 'pand\' lehe "[[$1]]" kaitsõ ala',
'modifiedarticleprotection'   => 'muut\' lehe "[[$1]]" kaitsõ kimmüst',
'unprotectedarticle'          => 'võtt\' lehe "[[$1]]" kaitsõ alt maaha',
'protect-title'               => 'Lehe "$1" kaitsminõ',
'protect-legend'              => 'Kinnüdäq kaitsõ ala pandmist',
'protectcomment'              => 'Põhjus:',
'protectexpiry'               => 'Tähtaig',
'protect_expiry_invalid'      => 'Kõlbmaldaq tähtaig.',
'protect_expiry_old'          => 'Tähtaig om joba läbi.',
'protect-text'                => "Tan saat kaiaq ja säädäq lehe '''$1''' kaitsmist.",
'protect-locked-blocked'      => "Kinniqpeetült saa-i kaitsmiisi muutaq. Tan ommaq lehe '''$1''' parhilladsõq säädmiseq:",
'protect-locked-dblock'       => "Kaitsmiisi saa-i muuta, selle et teedüskogo om lukun. Tan ommaq lehe '''$1''' parhilladsõq säädmiseq:",
'protect-locked-access'       => "Sul olõ-i õigust kaitsmiisi muutaq.
Tan ommaq lehe '''$1''' parhilladsõq säädmiseq:",
'protect-cascadeon'           => 'Taa leht om kaitsõ all, selle tä om pant {{PLURAL:$1|taa kaidsõdu lehe | naidõ kaidsõtuidõ lehti}} pääle. Võit muutaq taa lehe kaitsmiisi, a tä jääs tuugiperäst kaitsõ ala, selle et tä om taan nimekirän.',
'protect-default'             => 'Lupaq kõigilõ pruukjilõ',
'protect-fallback'            => 'Om vaia "$1"-õigust',
'protect-level-autoconfirmed' => 'Piäq kinniq vahtsõq ja kirjäpandmalda pruukjaq',
'protect-level-sysop'         => 'Õnnõ kõrraldajaq',
'protect-summary-cascade'     => 'laendõt',
'protect-expiring'            => 'tähtaig $1',
'protect-cascade'             => 'Laendaq kaitsmist - võtaq kaitsõ ala kõik seo lehe pääl olõvaq leheq.',
'protect-cantedit'            => 'Sa tohe-i muutaq seo lehe kaitsmistasõt, selle et sul olõ-i õigust seod lehte muutaq.',
'protect-expiry-options'      => '1 hour:1 hour,1 päiv:1 day,1 nätäl:1 week,2 nädälit:2 weeks,1 kuu:1 month,3 kuud:3 months,6 kuud:6 months,1 aastak:1 year,igävene:infinite',
'restriction-type'            => 'Luba',
'restriction-level'           => 'Piirdmisastõq',
'minimum-size'                => 'Kõgõ vähämb maht',
'maximum-size'                => 'Kõgõ suurõmb lubat suurus:',
'pagesize'                    => '(baiti)',

# Restrictions (nouns)
'restriction-edit' => 'Toimõndus',
'restriction-move' => 'Tõistõ paika pandminõ',

# Restriction levels
'restriction-level-sysop'         => 'tävveligult kaidsõt',
'restriction-level-autoconfirmed' => 'puulkaidsõt',
'restriction-level-all'           => 'kõik astmõq',

# Undelete
'undelete'                 => 'Tiiq kistutõt lehekülg tagasi',
'undeletepage'             => 'Kistutõduidõ lehekülgi kaeminõ ja tagasitegemine',
'viewdeletedpage'          => 'Kaeq kistutõduid lehti',
'undeletepagetext'         => 'Naaq leheküleq ommaq ärq kistudõduq, a arhiivin
viil olõman, naid saa tagasi tetäq niikavva ku naid olõ-i viil arhiivist ärq visat.',
'undeleteextrahelp'        => 'Võtaq leht tagasi vaotõn nuppi  <b><i>Võtaq tagasi</i></b>. Võit lehe kujjõ valliq ja tagasi võttaq õnnõ nuuq kujoq, miä esiq vällä valit.',
'undeleterevisions'        => '{{PLURAL:$1|Kujo|$1 kujjo}} arhiivi pant.',
'undeletehistory'          => 'Ku tiit leheküle tagasi, tulõvaq kõik kujoq tagasi artikli aolukku. Ku vaihõpääl om luud vahtsõnõ sama nimega lehekülg, ilmusõq tagasitettüq kujoq vanõmba leheküle aoluun. Olõmanolõvat kujjo automaatsõhe vällä ei vaihtõdaq. Teedüstüide kujopiiranguq kaosõq ärq.',
'undeleterevdel'           => 'Kistutõduist tagasituuminõ jätetäs tegemäldäq, ku tuuperäst kistus ärq mõni osa lehe kõgõ vahtsõmbast kujost. Ku om nii, sis tulõ vahtsõmbidõ kistudõduisi kujjõ märgistüs vai käkmine maaha võttaq. Sa saa-i kistutõduist tagasi tetäq ka teddüstükujjõ, midä sul olõ-i õigust nätäq.',
'undeletehistorynoadmin'   => 'Taa leht om ärq kistutõt. Kistutamisõ põhjust näet kokkovõttõn, kost om nätäq ka tuu, kiä ommaq taad lehte toimõndanuq inne kistutamist. Taa lehe sissu saavaq kaiaq õnnõ kõrraldajaq.',
'undelete-revision'        => 'Kistutõt kujo $1 aost $2',
'undeleterevision-missing' => 'Viganõ vai olõmaldaq kujo. Taa või ollaq tagasi tett vai arhiivist ärq kistutõt.',
'undeletebtn'              => 'Tiiq tagasi',
'undeletelink'             => 'kaeq/tiiq tagasi',
'undeleteviewlink'         => 'näütäq',
'undeletereset'            => 'Tiiq tühäs',
'undeletecomment'          => 'Kommõntaar:',
'undeletedrevisions'       => '$1 {{PLURAL:$1|kujo|kujjo}} tagasi tett',
'undeletedrevisions-files' => '$1 {{PLURAL:$1|kujo|kujjo}} ja $2 {{PLURAL:$2|teedüstü|teedüstüt}} tagasi tett',
'undeletedfiles'           => '$1 {{PLURAL:$1|teedüstü|teedüstüt}} tagasi tett',
'cannotundelete'           => 'Tagasitegemine lää-s kõrda; kiäki tõõnõ või-ollaq lehe jo tagasi tennüq.',
'undeletedpage'            => "'''$1 om tagasi tett'''

Perämäidsi kistutuisi ja tagasitegemiisi saat kaiaq [[Special:Log/delete|kistutamiisi nimekiräst]].",
'undelete-header'          => 'Perämäidsi kistutuisi saat kaiaq [[Special:Log/delete|kistutamiisi nimekiräst]].',
'undelete-search-box'      => 'Otsiq kistutõduid lehekülgi',
'undelete-search-prefix'   => 'Näütäq lehti, miä nakkasõq pääle:',
'undelete-search-submit'   => 'Otsiq',
'undelete-no-results'      => 'Kistutamiisi nimekiräst lövvetä-s säänest lehte.',

# Namespace form on various pages
'namespace'      => 'Nimeruum:',
'invert'         => 'Näütäq kõiki päält validu nimeruumi',
'blanknamespace' => '(Artikliq)',

# Contributions
'contributions'       => 'Pruukja kirotusõq',
'contributions-title' => 'Pruukja $1 toimõndusõq',
'mycontris'           => 'Mu kirotusõq',
'contribsub2'         => 'Pruukja "$1 ($2)" kirotusõq',
'nocontribs'          => 'Sääntsit muutmiisi es lövväq.',
'uctop'               => '(kõgõ vahtsõmb)',
'month'               => 'Alostõn kuust (ja varrampa):',
'year'                => 'Alostõn aastagast (ja varrampa):',

'sp-contributions-newbies'     => 'Näütäq õnnõ vahtsidõ pruukjidõ toimõnduisi',
'sp-contributions-newbies-sub' => 'Vahtsidõ pruukjidõ toimõndusõq',
'sp-contributions-blocklog'    => 'Kinniqpidämisnimekiri',
'sp-contributions-talk'        => 'Arotus',
'sp-contributions-userrights'  => 'Pruukja õiguisi muutminõ',
'sp-contributions-search'      => 'Otsiq muutmiisi',
'sp-contributions-username'    => 'Puutri võrgoaadrõs vai pruukjanimi:',
'sp-contributions-submit'      => 'Otsiq',

# What links here
'whatlinkshere'            => 'Siiäq näütäjäq lingiq',
'whatlinkshere-title'      => 'Leheq, miä näütäseq lehe "$1" pääle',
'whatlinkshere-page'       => 'Leht:',
'linkshere'                => 'Lehe <b>[[:$1]]</b> pääle näütäseq lingiq lehti päält:',
'nolinkshere'              => 'Lehe <b>[[:$1]]</b> pääle näütä-i linke ütegi lehe päält.',
'nolinkshere-ns'           => "Valitun nimeruumin näütä-i ütegi lehe päält linke lehe '''[[:$1]]''' pääle.",
'isredirect'               => 'ümbresaatmislehekülg',
'istemplate'               => 'pruugit näüdüssen',
'isimage'                  => 'pildilink',
'whatlinkshere-prev'       => '← {{PLURAL:$1|mineväne leht|$1 mineväst lehte}}',
'whatlinkshere-next'       => '{{PLURAL:$1|mineväne leht|$1 mineväst lehte}} →',
'whatlinkshere-links'      => '← lingiq',
'whatlinkshere-hideredirs' => '$1 ümbresaatmisõq',
'whatlinkshere-hidetrans'  => '$1 näüdüsses pruukmisõq',
'whatlinkshere-hidelinks'  => '$1 lingiq',
'whatlinkshere-filters'    => 'Sõglaq',

# Block/unblock
'blockip'                     => 'Piäq puutri võrgoaadrõs kinniq',
'blockiptext'                 => "Taa vorm om kimmä puutri võrgoaadrõsi päält tettüisi kirotuisi kinniqpidämises. '''Taad tohis tetäq õnnõ lehti ts'urkmisõ vasta ni [[{{MediaWiki:Policy-url}}|{{SITENAME}} sisekõrra perrä]]'''. Kimmähe tulõ täütäq ka rida \"põhjus\". Sinnäq võinuq pandaq nt lingiq noilõ lehile, midä rikuti.",
'ipadressorusername'          => 'Puutri võrgoaadrõs vai pruukjanimi',
'ipbexpiry'                   => 'Tähtaig',
'ipbreason'                   => 'Põhjus:',
'ipbreasonotherlist'          => 'Muu põhjus',
'ipbreason-dropdown'          => "*Hariliguq kinniqpidämise põhjusõq
** Võlss teedüse kirotaminõ
** Lehti sisu ärqkistutaminõ
** Reklaamilinkõ pandminõ
** Mõttõlda jutu vai prahi pandminõ
** Segämine ja ts'urkminõ
** Mitmõ pruukjanime võlsspruukminõ
** Sündümäldäq pruukjanimi",
'ipbcreateaccount'            => 'Lasku-i pruukjanimme luvvaq',
'ipbemailban'                 => 'Lubagu-i pruukjal e-posti saataq',
'ipbenableautoblock'          => 'Piäq kinniq viimäne puutri võrgoaadrõs, kost pruukja om toimõnduisi tennüq, ja edespiten aadrõsiq, kost tä viil pruuv toimõnduisi tetäq.',
'ipbsubmit'                   => 'Piäq taa aadrõs kinniq',
'ipbother'                    => 'Muu tähtaig',
'ipboptions'                  => '2 tunni:2 hours,1 päiv:1 day,3 päivä:3 days,1 nätäl:1 week,2 nädälälit:2 weeks,1 kuu:1 month,3 kuud:3 months,6 kuud:6 months,1 aastak:1 year,igävene:infinite',
'ipbotheroption'              => 'Muu tähtaig',
'ipbotherreason'              => 'Muu põhjus',
'ipbhidename'                 => 'Käkiq pruukjanimi vai puutri võrgoaadrõs ärq kinniqpidämis-, toimõndus-, ja pruukjanimekiräst',
'badipaddress'                => 'Puutri võrgoaadrõs om võlssi kirotõt.',
'blockipsuccesssub'           => 'Kinniqpidämine läts kõrda',
'blockipsuccesstext'          => 'Puutri võrgoaadrõs "$1" om kinniq peet.
<br />Kõik parhilladsõq kinniqpidämiseq lövvät [[Special:BlockList|kinniqpidämiisi nimekiräst]].',
'ipb-edit-dropdown'           => 'Toimõndaq kinniqpidämise põhjuisi',
'ipb-unblock-addr'            => 'Lõpõdaq pruukja $1 kinniqpidämine ärq',
'ipb-unblock'                 => 'Lõpõdaq pruukja vai puutri võrgoaadrõasi kinniqpidämine ärq',
'ipb-blocklist'               => 'Näütäq kinnniqpidämiisi',
'unblockip'                   => 'Lõpõdaq puutri võrgoaadrõsi kinniqpidämine ärq',
'unblockiptext'               => 'Täüdäq ärq taa vorm, et lõpõtaq ärq pruukja vai puutri võrgoaadrõsi kinniqpidämine',
'ipusubmit'                   => 'Lõpõdaq kinniqpidämine ärq',
'unblocked'                   => 'Pruukja [[User:$1|$1]] kinniqpidämine om ärq lõpõtõt',
'unblocked-id'                => '$1 kinniqpidämine võeti maaha',
'ipblocklist'                 => 'Kinniqpeetüisi IP-aadrõssidõ ja pruukjanimmi nimekiri',
'ipblocklist-legend'          => 'Otsiq kinniqpeetüt pruukjat',
'ipblocklist-submit'          => 'Otsiq',
'infiniteblock'               => 'igäveste',
'expiringblock'               => 'tähtaig om $1 $2',
'anononlyblock'               => 'õnnõ nimeldä pruukjaq',
'noautoblockblock'            => 'automaatsõ kinniqpidämiseldä',
'createaccountblock'          => 'pruukjanime luuminõ kinniq pant',
'emailblock'                  => 'e-post kinniq peet',
'ipblocklist-empty'           => 'Kinniqpidämiisi nimekiri om tühi.',
'ipblocklist-no-results'      => 'Taa puutri võrgoaadrõss vai pruukjanimi olõ-i kinniq peet.',
'blocklink'                   => 'piäq kinniq',
'unblocklink'                 => 'võtaq kinniqpidämine maaha',
'change-blocklink'            => 'muudaq kinniqpidämist',
'contribslink'                => 'kirotusõq',
'autoblocker'                 => 'Olõt automaatsõhe kinniq peet, selle et jaat puutri võrgoaadrõssit pruukjaga $1. Kinniqpidämise põhjus: $2.',
'blocklogpage'                => 'Kinniqpidämiisi nimekiri',
'blocklogentry'               => 'pidi kinniq pruukja vai puutri võrgoaadrõsi "[[$1]]". Kinniqpidämise tähtaig $2 $3',
'blocklogtext'                => 'Taa om kinniqpidämiisi ja naidõ maahavõtmiisi nimekiri. Automaatsõhe kinniqpeetüisi puutridõ võrgoaadrõssiid tan näüdätä-i, noid kaeq [[Special:BlockList|puutridõ võrgoaadrõssidõ kinniqpidämise nimekiräst]].',
'unblocklogentry'             => "lõpõt' pruukja $1 kinniqpidämise ärq",
'block-log-flags-anononly'    => 'õnnõ nimeldä pruukjaq',
'block-log-flags-nocreate'    => 'pruukjanime luuminõ kinniq peet',
'block-log-flags-noautoblock' => 'automaatnõ kinniqpidämine maaha võet',
'block-log-flags-noemail'     => 'e-post kinniq peet',
'range_block_disabled'        => 'Kõrraldaja kinniqpidämisõigusõq olõ-i masma pantuq',
'ipb_expiry_invalid'          => 'Viganõ tähtaig.',
'ipb_already_blocked'         => '"$1" om jo kinniq peet',
'ipb_cant_unblock'            => 'Lövvä-s kinniqpidämist $1. Taa või ollaq jo maaha võet.',
'ip_range_invalid'            => 'Viganõ puutri võrgoaadrõsi kujo.',
'proxyblocker'                => 'Vaihõserveri kinniqpidämine',
'proxyblockreason'            => "Su puutri võrgoaadrõs om kinniq peet, selle et taa om avalik vaihõserver. Otsiq üles uma võrgoliini pakja vai puutrias'atundja ja kõnõlõq näile taast hädäst.",
'proxyblocksuccess'           => 'Valmis.',
'sorbsreason'                 => 'Su puutri võrgoaadrõs om SORBS-i mustan nimekirän ku avalik vaihõserver.',
'sorbs_create_account_reason' => 'Su puutri võrgoaadrõs om pant SORBS-i musta nimekirjä ku avalik vaihõserver. Sa saa-i pruukjanimme tetäq',

# Developer tools
'lockdb'              => 'Panõq teedüskogo lukku',
'unlockdb'            => 'Tiiq teedüskogo lukust vallalõ',
'lockdbtext'          => 'Teedüskogo lukkupandminõ lasõ-i pruukjil lehti ja perräkaemisnimekirjo toimõndaq, säädmiisi vaihtaq ega muid teedüskoko muutvit tallituisi tetäq. Olõq hää ja kinnüdäq, et sa tahat taad tetäq ja et sa lasõt teedüskogo vallalõ, ku olõt umaq tarvilidsõq tallitusõq ärq tennüq.',
'unlockdbtext'        => 'Ku teedüskogo vallalõ laskõq, saavaq pruukjaq lehti ja perräkaemisnimekirjo toimõndaq, vaihtaq säädmiisi ja tetäq muid teedüskoko muutvit tallituisi. Olõq hää ja kinnüdäq, et sa tahat taad tetäq.',
'lockconfirm'         => 'Jah, ma taha tõtõstõ teedüskogo lukku pandaq.',
'unlockconfirm'       => 'Jah, ma taha tõtõstõ teedüskogo lukust vallalõ laskõq.',
'lockbtn'             => 'Panõq teedüskogo lukku',
'unlockbtn'           => 'Lasõq teedüskogo lukust vallalõ',
'locknoconfirm'       => 'Sa olõ-i kinnütüskasti ärq märknüq.',
'lockdbsuccesssub'    => 'Teedüskogo om lukun',
'unlockdbsuccesssub'  => 'Teedüskogo om vallalõ',
'lockdbsuccesstext'   => 'Teedüskogo om noq lukun.
<br />Ku su huuldustüü saa tettüs, sis unõhtagu-i teedüskoko jälq lukust vallalõ laskõq!',
'unlockdbsuccesstext' => 'Teedüskogo om lukust vallalõ last.',
'lockfilenotwritable' => 'Saa-i kirotaq teedüskogo lukkupandmisõ teedüstüt. Kaeq üle, kas sul om tuus õigus.',
'databasenotlocked'   => 'Teedüskoko panda-s lukku.',

# Move page
'move-page-legend'        => 'Nõstaq artikli tõistõ paika',
'movepagetext'            => "Taad vormi pruukin saat lehe ümbre nimetäq. Lehe aolugu pandas kah vahtsõ päälkirä ala.
Vana päälkiräga lehest saa vahtsõ lehe pääle ümbresaatmisõ leht.
Võit säädäq lehe pääle näütäjäq lingiq automaatsõhe näütämä vahtsõ nime pääle.
Ku sa taha-i taad tetäq automaatsõhe, unõhtagu-i üle kaiaq [[Special:DoubleRedirects|katõkõrdsit]] vai [[Special:BrokenRedirects|vigatsit]] ümbresaatmiisi.
Sa piät kaema, et kõik näütämiseq jäänüq tüütämä nigu inne ümbrenimetämist.

Lehte '''nimetedä-i ümbre''', ku vahtsõ nimega leht om jo olõman.
Erängus om tuu, ku vana leht om tühi vai om esiq ümbresaatmisleht ja täl olõ-i toimõndamisaoluku.
Tuu tähendäs, et sa saa-i kogõmalda üle kirotaq jo olõmanolõvat lehte, a saat halvastõ lännü ümbrenimetämise tagasi pöördäq.

'''KAEQ ETTE!'''
Või ollaq, et sa nakkat tegemä suurt ja uutmalda muutmist väega loetavahe artiklihe;
inne, ku midä muudat, märgiq perrä, miä tuust tullaq või.",
'movepagetalktext'        => "Üten artiklilehekülega pandas tõistõ paika ka arotuskülg, '''vällä arvat sis, ku:'''
*panõt lehe ütest nimeruumist tõistõ,
*vahtsõ nime all om jo olõman arotuskülg, kohe om jo midägi kirotõt, vai ku
*jätät alomadsõ kastikõsõ märgistämäldäq.

Kui om nii, sis panõq vana arotuskülg eräle vai panõq taa kokko vahtsõ arotuskülega.",
'movearticle'             => 'Panõq artiklilehekülg tõistõ paika',
'movenologin'             => 'Sa olõ-i nimega sisse lännüq',
'movenologintext'         => 'Et lehekülge tõistõ paika pandaq, piät hindä pruukjas kirjä pandma ja [[Special:UserLogin|nimega sisse minemä]]',
'movenotallowed'          => 'Sul olõ-i lupa {{SITENAME}} lehti tõistõ paika nõstaq.',
'newtitle'                => 'Vahtsõ päälkirä ala',
'move-watch'              => 'Kaeq taa lehe perrä',
'movepagebtn'             => 'Panõq artikli tõistõ paika',
'pagemovedsub'            => 'Artikli om tõistõ paika pant',
'movepage-moved'          => "'''$1 om pant nime ala $2'''",
'articleexists'           => 'Sääntse nimega artikli om jo olõman vai olõ-i lubat säänest nimme valliq. Valiq vahtsõnõ nimi.',
'talkexists'              => 'Artikli om tõistõ paika pant, a arotuslehekülge saa-s pandaq, selle et vahtsõ nime all om jo arotuskülg. Panõq arotusküleq esiq kokko.',
'movedto'                 => 'Pant päälkirä ala:',
'movetalk'                => 'Panõq ka "arotus", ku saa.',
'movelogpage'             => 'Tõistõ paika pandmiisi nimekiri',
'movelogpagetext'         => 'Taa om lehti tõistõ paika pandmiisi nimekiri.',
'movereason'              => 'Põhjus:',
'revertmove'              => 'võtaq tagasi',
'delete_and_move'         => 'Kistudaq tsihtlehekülg ärq ja panõq timä asõmalõ taa leht',
'delete_and_move_text'    => 'Tsihtlehekülg  "[[:$1]]" om jo olõman, kas tahat tuu ärq kistutaq, et taa leht timä asõmalõ pandaq?',
'delete_and_move_confirm' => 'Jah, kistudaq tuu leht ärq',
'delete_and_move_reason'  => 'Ärq kistutõt, et tõõnõ timä asõmalõ pandaq',
'selfmove'                => 'Lätte- ja tsihtnimi ommaq samaq; saa-i lehte timä hindä pääle pandaq.',

# Export
'export'            => 'Lehti viimine',
'exporttext'        => 'Võit viiäq lehti teksti ja toimõndusaoluu [[Special:Import|üleviimislehe]] kaudu XML-moodun tõistõ MediaWiki kõrra peri tüütäjähe vikihte.

Kirodaq taaha kasti lehti päälkiräq, kost tahat sissu üle viiäq, egä ria pääle üts, ja valiq, kas tahat viiäq lehe kõiki kujjõ vai õnnõ kõgõ vahtsõmbat.

Viimädse johtumisõ kõrral võit ka pruukiq linki, nt leht {{MediaWiki:Mainpage}} saa viidüs lingiga
[[{{#Special:Export}}/{{MediaWiki:Mainpage}}]].',
'exportcuronly'     => 'Võtku-i kõiki kujjõ, a õnnõ kõgõ vahtsõmb',
'exportnohistory'   => "----
'''Viga:''' Tulõ-i lehti terve aoluu viimisega toimõ.",
'export-submit'     => 'Viiq',
'export-addcattext' => 'Võtaq leheq katõgooriast:',
'export-addcat'     => 'Panõq mano',
'export-download'   => 'Pästäq teedüstüs',

# Namespace 8 related
'allmessages'               => 'Tallitusteedüseq',
'allmessagesname'           => 'Nimi',
'allmessagesdefault'        => 'Vaikimiisi tekst',
'allmessagescurrent'        => 'Parhillanõ tekst',
'allmessagestext'           => 'Taan nimekirän ommaq kõik MediaWiki nimeruumi tallitusteedüseq.
Please visit [//www.mediawiki.org/wiki/Localisation MediaWiki Localisation] and [//translatewiki.net translatewiki.net] if you wish to contribute to the generic MediaWiki localisation.',
'allmessagesnotsupportedDB' => "Taad lehte saa-i pruukiq, selle et '''\$wgUseDatabaseMessages'''-säädmine om välän.",

# Thumbnails
'thumbnail-more'           => 'Suurõndaq',
'filemissing'              => 'Olõ-i teedüstüt',
'thumbnail_error'          => 'Väikupildi luuminõ lää-s kõrda: $1',
'djvu_page_error'          => 'DjVu lehe viga',
'djvu_no_xml'              => 'Saa-s DjVu-teedüstü jaos XML-i kätte',
'thumbnail_invalid_params' => 'Võlss väikupildi parametriq',
'thumbnail_dest_directory' => 'Saa-i tsihtkausta luvvaq',

# Special:Import
'import'                     => 'Tuuq lehti',
'importinterwiki'            => 'Tuuq lehti tõõsõst vikist',
'import-interwiki-text'      => 'Valiq viki ja lehe nimi. Kujjõ kuupääväq ja toimõndajidõ nimeq hoiõtasõq alalõ. Kõik tõisist vikidest tuumisõq pandasõq kirjä [[Special:Log/import|tuumiisi nimekirjä]].',
'import-interwiki-history'   => 'Kopiq lehe terveq aolugu',
'import-interwiki-submit'    => 'Tuuq',
'import-interwiki-namespace' => 'Panõq leheq nimeruumi:',
'import-comment'             => 'Põhjus:',
'importtext'                 => 'Viiq lättevikist lehti [[Special:Export|viimis]]-tüüriistaga. Pästäq teedüs nii uman puutrin ku siin.',
'importstart'                => 'Tuvvas lehti...',
'import-revision-count'      => '$1 {{PLURAL:$1|kujo|kujjo}}',
'importnopages'              => 'Olõ-i lehti, midä tuvvaq.',
'importfailed'               => 'Tuuminõ lää-s kõrda: $1',
'importunknownsource'        => 'Tundmaldaq tuumisõ lättetüüp',
'importcantopen'             => 'Saa-s tuudut teedüstüt vallalõ',
'importbadinterwiki'         => 'Kõlbmalda vikidevaihõlinõ link',
'importnotext'               => 'Tühi vai tekstildä',
'importsuccess'              => 'Tuuminõ valmis!',
'importhistoryconflict'      => 'Lehest om olõman tuuduga vastaolon kujo. Taad lehte või ollaq jo inne tuud.',
'importnosources'            => 'Olõ-i vikidevaihõliidsi tuumislättit ja aoluu õkva pästmine tüütä-i.',
'importnofile'               => 'Olõ-i üttegi tuudut teedüstüt.',
'importuploaderrorsize'      => 'Teedüstü üleslaatminõ lää-s kõrda, taa om suurõmb, ku lubat.',
'importuploaderrorpartial'   => 'Teedüstü üleslaatminõ lää-s kõrda. Õnnõ osa teedüstüst laaditi üles.',
'importuploaderrortemp'      => 'Teedüstü üleslaatminõ lää-s kõrda. Olõ-i aotlist kausta.',

# Import log
'importlogpage'                    => 'Tuumiisi nimekiri',
'importlogpagetext'                => 'Tõisist vikidest tuuduisi lehti nimekiri.',
'import-logentry-upload'           => 'tõi lehe [[$1]] saatõn teedüstü',
'import-logentry-upload-detail'    => '$1 {{PLURAL:$1|kujo|kujjo}}',
'import-logentry-interwiki'        => 'tõi tõõsõst vikist lehe ”$1”',
'import-logentry-interwiki-detail' => '$1 {{PLURAL:$1|kujo|kujjo}} lehest $2',

# Tooltip help for the actions
'tooltip-pt-userpage'             => 'Suq pruukjaleht',
'tooltip-pt-anonuserpage'         => 'Su puutri võrgoaadrõsi pruukjaleht',
'tooltip-pt-mytalk'               => 'Mu arotusleht',
'tooltip-pt-anontalk'             => 'Arotus taa puutri võrgoaadrõsi päält tettüisi toimõnduisi üle',
'tooltip-pt-preferences'          => 'Mu säädmiseq',
'tooltip-pt-watchlist'            => 'Nimekiri lehist, mil tahtnuq silmä pääl hoitaq',
'tooltip-pt-mycontris'            => 'Suq toimõnduisi nimekiri',
'tooltip-pt-login'                => 'Mineq nimega sisse vai tiiq hindäle pruukjanimi (soovitav).',
'tooltip-pt-anonlogin'            => 'Mineq nimega sisse vai tiiq hindäle pruukjanimi (soovitav).',
'tooltip-pt-logout'               => 'Mineq nime alt vällä',
'tooltip-ca-talk'                 => 'Arotus lehe sisu üle',
'tooltip-ca-edit'                 => 'Saa võit taad lehte toimõndaq.',
'tooltip-ca-addsection'           => 'Tiiq vahtsõnõ alljago',
'tooltip-ca-viewsource'           => 'Taa om kaidsõt leht. Saat kaiaq õnnõ taa lättekuudi.',
'tooltip-ca-history'              => 'Taa lehe vanõmbaq kujoq.',
'tooltip-ca-protect'              => 'Võtaq taa leht kaitsõ ala',
'tooltip-ca-delete'               => 'Kistudaq taa leht ärq',
'tooltip-ca-undelete'             => 'Tuuq taa leht kistutõduist tagasi',
'tooltip-ca-move'                 => 'Panõq taa leht tõistõ paika',
'tooltip-ca-watch'                => 'Panõq taa leht umma perräkaemisnimekirjä',
'tooltip-ca-unwatch'              => 'Võtaq taa leht perräkaemisnimekiräst maaha',
'tooltip-search'                  => 'Otsiq vikist {{SITENAME}}',
'tooltip-search-go'               => 'Mineq täpsähe sääntse nimega lehe pääle, ku sääne olõman om',
'tooltip-search-fulltext'         => 'Otsiq lehti päält seod teksti',
'tooltip-p-logo'                  => 'Pääleht',
'tooltip-n-mainpage'              => 'Mineq päälehele',
'tooltip-n-mainpage-description'  => 'Mineq päälehele',
'tooltip-n-portal'                => 'Taa viki arotusõkotus',
'tooltip-n-currentevents'         => 'Tiidmist tuu kotsilõ, miä parhilla sünnüs',
'tooltip-n-recentchanges'         => 'Perämäidsi muutmiisi nimekiri',
'tooltip-n-randompage'            => 'Tiiq vallalõ johuslinõ lehekülg',
'tooltip-n-help'                  => 'Abiotsmisõ kotus',
'tooltip-t-whatlinkshere'         => 'Siiäq näütäjide linkega lehti nimekiri',
'tooltip-t-recentchangeslinked'   => 'Viimädseq muutmisõq lehile, mink pääle näüdätäs linkega seo lehe päält',
'tooltip-feed-rss'                => 'Taa lehe RSS-kujo',
'tooltip-feed-atom'               => 'Taa lehe Atom-kujo',
'tooltip-t-contributions'         => 'Näütäq taa pruukja toimõnduisi nimekirjä',
'tooltip-t-emailuser'             => 'Saadaq taalõ pruukjalõ e-kiri',
'tooltip-t-upload'                => 'Laadiq üles teedüstüid',
'tooltip-t-specialpages'          => 'Näütäq tallituslehekülgi',
'tooltip-t-print'                 => 'Taa lehe trükükujo',
'tooltip-t-permalink'             => 'Seo lehekujo püsülink',
'tooltip-ca-nstab-main'           => 'Näütäq sisulehekülge',
'tooltip-ca-nstab-user'           => 'Näütäq pruukjalehekülge',
'tooltip-ca-nstab-media'          => 'Näütäq meediälehekülge',
'tooltip-ca-nstab-special'        => 'Taa om tallituslehekülg',
'tooltip-ca-nstab-project'        => 'Näütäq projektilehekülge',
'tooltip-ca-nstab-image'          => 'Näütäq teedüstü lehekülge',
'tooltip-ca-nstab-mediawiki'      => 'Näütäq tallitusteedüst',
'tooltip-ca-nstab-template'       => 'Näütäq näüdüst',
'tooltip-ca-nstab-help'           => 'Näütäq abilehekülge',
'tooltip-ca-nstab-category'       => 'Näütäq katõgoorialehekülge',
'tooltip-minoredit'               => "Märgiq taa ärq ku tsill'okõnõ muutminõ",
'tooltip-save'                    => 'Pästäq muutmisõq',
'tooltip-preview'                 => 'Kaeq umaq toimõndusõq inne pästmist üle!',
'tooltip-diff'                    => 'Näütäq tettüid muutmiisi',
'tooltip-compareselectedversions' => 'Näütäq seo lehe valituidõ kuiõ lahkominekit.',
'tooltip-watch'                   => 'Panõq taa leht umma perräkaemisnimekirjä',
'tooltip-recreate'                => 'Tuuq taa leht kisutõduist tagasi',
'tooltip-upload'                  => 'Nakkaq üles laatma',
'tooltip-rollback'                => 'Tagasivõtminõ tege üte klõpsiga tühäs perämädse toimõndaja tettü(q) muutmisõ(q)',
'tooltip-undo'                    => '"Võtaq tagasi" tege seo muutmisõ tühäs ja tege lehe kaemisaknõn vallalõ.
Kokkovõttõria pääle või kirotaq tagasivõtmisõ põhjusõ.',
'tooltip-summary'                 => 'Kirodaq lühkü kokkovõtõq',

# Stylesheets
'common.css'   => '/* Taa lehe pääl om tervet taad vikit muutvit kujonduisi */',
'monobook.css' => '/* Taa lehe pääl om Monobook-vällänägemist muutvit kujonduisi. */',

# Scripts
'common.js'   => '/* Taa lehe kuud pandas mano egäle lehelaatmisõlõ */',
'monobook.js' => '/* Olõi soovitõt; pruugiq [[MediaWiki:common.js]] */',

# Metadata
'notacceptable' => 'Wikiserver saa-i näüdädäq teedüst sääntsen moodun, midä su programm saasiq lukõq.',

# Attribution
'anonymous'        => '{{SITENAME}} {{PLURAL:$1|nimeldä pruukja|nimeldä pruukjaq}}',
'siteuser'         => '{{SITENAME}} pruukja $1',
'lastmodifiedatby' => "Taad lehte toimõnd' viimäte ”$3” $2 kell $1.",
'othercontribs'    => 'Tennüq pruukja $1.',
'others'           => 'tõõsõq',
'siteusers'        => '{{SITENAME}} {{PLURAL:$2|pruukja|pruukjaq}}  $1',
'creditspage'      => 'Lehe tegijide nimekiri',
'nocredits'        => 'Taa lehe tegijide nimekirjä olõ-i.',

# Spam protection
'spamprotectiontitle' => 'Prahisõgõl',
'spamprotectiontext'  => 'Prahisõgõl om lehe kinniq pidänüq ja lasõ-i taad pästäq. Tuu põhjus om arvadaq vikist välläpoolõ näütäjä link.',
'spamprotectionmatch' => 'Tekst, midä prahisõgõl läbi lasõ-s: $1',
'spambot_username'    => 'MediaWiki prahihäötäjä',
'spam_reverting'      => 'Tagasi pööret viimädse kujo pääle, koh olõ-i linke lehele $1',
'spam_blanking'       => "Kõigin kujõn oll' linke lehele $1. Leht tühäs tett.",

# Skin names
'skinname-standard'    => 'Array',
'skinname-cologneblue' => 'Array',
'skinname-myskin'      => 'Array',

# Patrolling
'markaspatrolleddiff'                 => 'Märgiq ülekaetus',
'markaspatrolledtext'                 => 'Märgiq toimõndus ülekaetus',
'markedaspatrolled'                   => 'Märgit ülekaetus',
'markedaspatrolledtext'               => 'Valit kujo om üle kaet.',
'rcpatroldisabled'                    => 'Vahtsidõ muutmiisi ülekaemist olõ-i tüüle säet.',
'rcpatroldisabledtext'                => 'Vahtsidõ muutmiisi ülekaemist olõ-i tüüle säet.',
'markedaspatrollederror'              => 'Muutuisi ülekaetus märkmine lää-s kõrda',
'markedaspatrollederrortext'          => 'Olõ-i ant lehe muutmiskujjo, midä ülekaetus märkiq.',
'markedaspatrollederror-noautopatrol' => 'Esiq tohe-i ummi muutmiisi ülekaetus märkiq.',

# Patrol log
'patrol-log-page' => 'Muutmiisi ülekaemiisi nimekiri',

# Image deletion
'deletedrevision'    => 'Kistutõdi ärq vana kujo $1.',
'filedelete-missing' => 'Teedüstüt "$1" saa-i kistutaq, taad olõ-i olõman.',

# Browsing diffs
'previousdiff' => '← Innembäne muutminõ',
'nextdiff'     => 'Vahtsõmb toimõndus →',

# Media information
'mediawarning'   => "'''Kaeq ette''': Taan teedüstün või ollaq sisen ohtlik kuud, miä või su programmilõ vika tetäq.",
'imagemaxsize'   => 'Pildi seletüslehe pääl näütämise suuruspiir:',
'thumbsize'      => 'Väikupildi suurus:',
'file-info'      => '$1, MIME-tüüp: $2',
'file-info-size' => '$1×$2 pikslit, $3, MIME-tüüp: $4',
'file-nohires'   => 'Taast terävämpä pilti olõ-i saiaq.',
'svg-long-desc'  => 'SVG-teedüstü, põhisuurus $1 × $2 pikslit, teedüstü suurus $3',
'show-big-image' => 'Täüsterräv kujo',

# Special:NewFiles
'newimages'             => 'Vahtsõq pildiq',
'imagelisttext'         => 'Pilte nimekirän $1 (sordiduq $2).',
'showhidebots'          => '($1 robodiq)',
'noimages'              => 'Olõ-i vahtsit pilte.',
'ilsubmit'              => 'Otsminõ',
'bydate'                => 'kuupäävä perrä',
'sp-newimages-showfrom' => 'Näütäq vahtsit pilte kuupääväst $1 pääle',

# Bad image list
'bad_image_list' => 'Nimekirä muud om sääne:

Õnnõ *-märgiga algajaq riaq võetasõq arvõhe. Edimäne link piät näütämä keeledü teedüstü pääle. Kõik tõõsõq lingiq ommaq eränguq, tuu tähendäs leheq, kon pilti või pruukiq.',

# Metadata
'metadata'          => 'Sisuseletüseq',
'metadata-help'     => 'Seon teedüstün om lisateedüst, miä om arvadaq peri pildinudsijast, digikaamõrast vai pilditoimõndusprogrammist. Ku teedüstüt om peräst timä tegemist muudõt, sis pruugi-i taa teedüs inämb õigõ ollaq.',
'metadata-expand'   => 'Näütäq kõiki sisuseletüisi',
'metadata-collapse' => 'Näütäq õnnõ tähtsämbit sisuseletüisi',
'metadata-fields'   => 'Naaq riaq ommaq nätäq pildilehe pääl, ku sisuseletüse tapõl om tühi.
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
'exif-imagewidth'                  => 'Lakjus',
'exif-imagelength'                 => 'Korgus',
'exif-bitspersample'               => 'Bitti osa kotsilõ',
'exif-compression'                 => 'Kokkopakmisviis',
'exif-photometricinterpretation'   => 'Pildipunktõ ülesehitüs',
'exif-orientation'                 => 'Tsiht',
'exif-samplesperpixel'             => 'Ossõ arv',
'exif-planarconfiguration'         => 'Teedüse kõrraldaminõ',
'exif-ycbcrsubsampling'            => 'Y ja C alanäütüsvaihõkõrd',
'exif-ycbcrpositioning'            => 'Y ja C paikasäädmine',
'exif-xresolution'                 => 'Pildi terävüs lajoldõ',
'exif-yresolution'                 => 'Pildi terävüs pikuldõ',
'exif-stripoffsets'                => 'Pilditeedüse kotus',
'exif-rowsperstrip'                => 'Riban rivve',
'exif-stripbytecounts'             => 'Baitõ kokkopakitun riban',
'exif-jpeginterchangeformat'       => 'Kavvus JPEG SOI-st',
'exif-jpeginterchangeformatlength' => 'JPEG-teedüssen baitõ',
'exif-whitepoint'                  => 'Valgõ punkti värmiarv',
'exif-primarychromaticities'       => 'Päävärme värmiarvoq',
'exif-ycbcrcoefficients'           => 'Värmiruumi tõõsõndusmaatriksi elemendiq',
'exif-referenceblackwhite'         => 'Musta-valgõpaari võrrõlusarvoq',
'exif-datetime'                    => 'Viimäte muudõt',
'exif-imagedescription'            => 'Pildiallkiri',
'exif-make'                        => 'Kaamõra tekij',
'exif-model'                       => 'Kaamõra mutõl',
'exif-software'                    => 'Pruugit tarkvara',
'exif-artist'                      => 'Tekij',
'exif-copyright'                   => 'Tegijäõigusõ umanik',
'exif-exifversion'                 => 'Exif-kujo',
'exif-flashpixversion'             => 'Toet Flashpix-kujo',
'exif-colorspace'                  => 'Värmiruum',
'exif-componentsconfiguration'     => 'Egä osa tähendüs',
'exif-compressedbitsperpixel'      => 'Pildi kokkopakmismuud',
'exif-pixelydimension'             => 'Kõlbolinõ pildi lakjus',
'exif-pixelxdimension'             => 'Kõlbolinõ pildi korgus',
'exif-usercomment'                 => 'Pruukja kommõntaariq',
'exif-relatedsoundfile'            => 'Manopant helüteedüstü',
'exif-datetimeoriginal'            => 'Luumisaig',
'exif-datetimedigitized'           => 'Digitalisiirmisaig',
'exif-subsectime'                  => 'Ao sekundiosaq',
'exif-subsectimeoriginal'          => 'Edimält olnuq ao sekundiosaq',
'exif-subsectimedigitized'         => 'Digitalisiirmisao sekundiosaq',
'exif-exposuretime'                => 'Valgustusaig',
'exif-exposuretime-format'         => '$1 sek ($2)',
'exif-fnumber'                     => 'Mulguvaihõkõrd',
'exif-exposureprogram'             => 'Valgustusprogramm',
'exif-spectralsensitivity'         => 'Spektri herküs',
'exif-isospeedratings'             => 'Herküs (ISO)',
'exif-shutterspeedvalue'           => 'Katigu kibõhus',
'exif-aperturevalue'               => 'Läbilaskmismulk',
'exif-brightnessvalue'             => 'Helehüs',
'exif-exposurebiasvalue'           => 'Valgustusõ parandus',
'exif-maxaperturevalue'            => 'Kõgõ suurõmb läbilaskmismulk',
'exif-subjectdistance'             => 'Tsihtmärgi kavvus',
'exif-meteringmode'                => 'Mõõtmisviis',
'exif-lightsource'                 => 'Valgusläteq',
'exif-flash'                       => 'Välk',
'exif-focallength'                 => 'Läädse palotuslakjus',
'exif-subjectarea'                 => 'Tsihtmärgi ala',
'exif-flashenergy'                 => 'Välgü vägi',
'exif-focalplanexresolution'       => 'Täpsüstüsastmõ X-resolutsiuun',
'exif-focalplaneyresolution'       => 'Täpsüstüstasõmõ Y-resolutsiuun',
'exif-focalplaneresolutionunit'    => 'Täpsüstüstasõmõ resolutsiooni mõõt',
'exif-subjectlocation'             => 'Tsihtmärgi kotus',
'exif-exposureindex'               => 'Valgustusindeks',
'exif-sensingmethod'               => 'Mõõtmisviis',
'exif-filesource'                  => 'Teedüstüläteq',
'exif-scenetype'                   => 'Pilditüüp',
'exif-customrendered'              => 'Hindäperi pilditoimõndus',
'exif-exposuremode'                => 'Valgustusviis',
'exif-whitebalance'                => 'Valgõ tasakaal',
'exif-digitalzoomratio'            => 'Digitaalnõ suurõnduskõrdaja',
'exif-focallengthin35mmfilm'       => '35 mm-dse filmi palotusvaheq',
'exif-scenecapturetype'            => 'Pildi sissevõtmisviis',
'exif-gaincontrol'                 => 'Pildi säädmine',
'exif-contrast'                    => 'Kontrast',
'exif-saturation'                  => 'Värmikülläsüs',
'exif-sharpness'                   => 'Terävüs',
'exif-devicesettingdescription'    => 'Kaamõra säädmiisi seletüs',
'exif-subjectdistancerange'        => 'Tsihtmärgi kavvusvaih',
'exif-imageuniqueid'               => 'Pildi tunnusnummõr',
'exif-gpsversionid'                => 'GPS-koodi kujo',
'exif-gpslatituderef'              => "Põh'a- vai lõunalakjus",
'exif-gpslatitude'                 => 'Lakjus',
'exif-gpslongituderef'             => 'Hummogu- vai õdagupikkus',
'exif-gpslongitude'                => 'Pikkus',
'exif-gpsaltituderef'              => 'Korgusõ võrrõluspunkt',
'exif-gpsaltitude'                 => 'Korgus',
'exif-gpstimestamp'                => 'GPS-aig (aatomikell)',
'exif-gpssatellites'               => 'Mõõtmisõs pruugiduq satõlliidiq',
'exif-gpsstatus'                   => 'Vastavõtja sais',
'exif-gpsmeasuremode'              => 'Mõõtmisviis',
'exif-gpsdop'                      => 'Mõõtmistäpsüs',
'exif-gpsspeedref'                 => 'Kibõhusmõõt',
'exif-gpsspeed'                    => 'GPS-vastavõtja kibõhus',
'exif-gpstrackref'                 => 'Liikmistsihi võrrõluspunkt',
'exif-gpstrack'                    => 'Liikmistsiht',
'exif-gpsimgdirectionref'          => 'Pildi tsihi võrrõluspunkt',
'exif-gpsimgdirection'             => 'Pildi tsiht',
'exif-gpsmapdatum'                 => 'Pruugit geodeetiline maamõõtmisteedüs',
'exif-gpsdestlatituderef'          => 'Tsihtmärgi lakjusõ võrrõluspunkt',
'exif-gpsdestlatitude'             => 'Tsihtmärgi lakjus',
'exif-gpsdestlongituderef'         => 'Tsihtmärgi pikkusõ võrrõluspunkt',
'exif-gpsdestlongitude'            => 'Tsihtmärgi pikkus',
'exif-gpsdestbearingref'           => 'Tsihtmärgi vällätimmise võrrõluspunkt',
'exif-gpsdestbearing'              => 'Tsihtmärgi vällätimmine',
'exif-gpsdestdistanceref'          => 'Tsihtmärgi kavvusõ võrrõluspunkt',
'exif-gpsdestdistance'             => 'Tsihtmärgi kavvus',
'exif-gpsprocessingmethod'         => 'GPS-i tüümoodu nimi',
'exif-gpsareainformation'          => 'GPS-ala nimi',
'exif-gpsdatestamp'                => 'GPS-kuupäiv',
'exif-gpsdifferential'             => 'GPS-differentsiaalparandus',

# EXIF attributes
'exif-compression-1' => 'Kokkopakmalda',

'exif-unknowndate' => 'Tundmalda kuupäiv',

'exif-orientation-1' => 'Harilik',
'exif-orientation-2' => 'Pikäle käänet',
'exif-orientation-3' => '180° käänet',
'exif-orientation-4' => 'Pistü käänet',
'exif-orientation-5' => 'Käänet 90° vastapäivä ja pistü',
'exif-orientation-6' => 'Käänet 90° peripäivä',
'exif-orientation-7' => 'Käänet 90° peripäivä ja pistü',
'exif-orientation-8' => 'Käänet 90° vastapäivä',

'exif-planarconfiguration-1' => "''chunky''-formaat",
'exif-planarconfiguration-2' => "''planar''-formaat",

'exif-componentsconfiguration-0' => 'olõ-i',

'exif-exposureprogram-0' => 'Olõ-i paika säet',
'exif-exposureprogram-1' => 'Käsilde paikasäet',
'exif-exposureprogram-2' => 'Põhiprogramm',
'exif-exposureprogram-3' => 'Läbilaskmismulgu põhilisus',
'exif-exposureprogram-4' => 'Katiguao põhilisus',
'exif-exposureprogram-5' => 'Luuva programm (suurõndõt süvvüsterävüst)',
'exif-exposureprogram-6' => 'Liikmisprogramm (suurõndõt katiguao kibõhust)',
'exif-exposureprogram-7' => 'Rinnapildimuud (lähipildele, kon tagapõhi om hägonõ)',
'exif-exposureprogram-8' => 'Maastigumuud (maastigupildele, kon tagapõhi om selge)',

'exif-subjectdistance-value' => '$1 miitrit',

'exif-meteringmode-0'   => 'Tiidmäldä',
'exif-meteringmode-1'   => 'Keskmäne',
'exif-meteringmode-2'   => 'Keskkotusõperine keskmäne',
'exif-meteringmode-3'   => 'Täpp',
'exif-meteringmode-4'   => 'Mitmõtäpiline',
'exif-meteringmode-5'   => 'Kujond',
'exif-meteringmode-6'   => 'Osalinõ',
'exif-meteringmode-255' => 'Muu',

'exif-lightsource-0'   => 'Tiidmäldä',
'exif-lightsource-1'   => 'Päävävalgus',
'exif-lightsource-2'   => 'Päävävalguslamp',
'exif-lightsource-3'   => 'Hõõglamp (kunstvalgus)',
'exif-lightsource-4'   => 'Välk',
'exif-lightsource-9'   => 'Selge ilm',
'exif-lightsource-10'  => 'Pilvine ilm',
'exif-lightsource-11'  => 'Vari',
'exif-lightsource-12'  => 'Päävävalguslamp (D 5700 – 7100K)',
'exif-lightsource-13'  => 'Päävävalguslamp (N 4600 – 5400K)',
'exif-lightsource-14'  => 'Külmvalgõ päävävalguslamp (W 3900 – 4500K)',
'exif-lightsource-15'  => 'Valgõ päävävalguslamp (WW 3200 – 3700K)',
'exif-lightsource-17'  => 'Standardvalgus A',
'exif-lightsource-18'  => 'Standardvalgus B',
'exif-lightsource-19'  => 'Standardvalgus C',
'exif-lightsource-24'  => 'ISO stuudiohõõglamp',
'exif-lightsource-255' => 'Muu valgus',

'exif-focalplaneresolutionunit-2' => 'tolli',

'exif-sensingmethod-1' => 'Paikasäädmäldä',
'exif-sensingmethod-2' => 'Ütene värmisensor',
'exif-sensingmethod-3' => 'Katõnõ värmisensor',
'exif-sensingmethod-4' => 'Kolmõnõ värmisensor',
'exif-sensingmethod-5' => 'Sarivärmisensor',
'exif-sensingmethod-7' => 'Trilineaarsensor',
'exif-sensingmethod-8' => 'Sarilineaarsensor',

'exif-scenetype-1' => 'Õkva pildistet pilt',

'exif-customrendered-0' => 'Harilik tallitus',
'exif-customrendered-1' => 'Hindäsäet tallitus',

'exif-exposuremode-0' => 'Automaatnõ valgustus',
'exif-exposuremode-1' => 'Hindäsäet valgustus',
'exif-exposuremode-2' => 'Automaatnõ haardminõ',

'exif-whitebalance-0' => 'Automaatnõ valgõ tasakaal',
'exif-whitebalance-1' => 'Hindäsäet valgõ tasakaal',

'exif-scenecapturetype-0' => 'Harilik',
'exif-scenecapturetype-1' => 'Maastik',
'exif-scenecapturetype-2' => 'Rinnapilt',
'exif-scenecapturetype-3' => 'Üüpilt',

'exif-gaincontrol-0' => 'Olõ-i',
'exif-gaincontrol-1' => 'Matal üläkinnütüs',
'exif-gaincontrol-2' => 'Korgõ üläkinnütüs',
'exif-gaincontrol-3' => 'Matal alakinnütüs',
'exif-gaincontrol-4' => 'Korgõ alakinnütüs',

'exif-contrast-0' => 'Harilik',
'exif-contrast-1' => 'Pehmeq',
'exif-contrast-2' => 'Kõva',

'exif-saturation-0' => 'Harilik',
'exif-saturation-1' => 'Väiku värmikülläsüs',
'exif-saturation-2' => 'Suur värmikülläsüs',

'exif-sharpness-0' => 'Harilik',
'exif-sharpness-1' => 'Pehmeq',
'exif-sharpness-2' => 'Kõva',

'exif-subjectdistancerange-0' => 'Tiidmäldäq',
'exif-subjectdistancerange-1' => 'Makro',
'exif-subjectdistancerange-2' => 'Lähküpilt',
'exif-subjectdistancerange-3' => 'Kavvõpilt',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => "Põh'lakjust",
'exif-gpslatitude-s' => 'Lõunalakjust',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'Hummogupikkust',
'exif-gpslongitude-w' => 'Õdagupikkust',

'exif-gpsstatus-a' => 'Mõõtminõ käü',
'exif-gpsstatus-v' => 'Ristimõõtminõ',

'exif-gpsmeasuremode-2' => 'Katõmõõtmõlinõ mõõtminõ',
'exif-gpsmeasuremode-3' => 'Kolmõmõõtmõlinõ mõõtminõ',

# Pseudotags used for GPSSpeedRef
'exif-gpsspeed-k' => 'kilomiitrit tunnin',
'exif-gpsspeed-m' => 'miili tunnin',
'exif-gpsspeed-n' => 'sõlmõ',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'Peris tsiht',
'exif-gpsdirection-m' => 'Magnõttsiht',

# External editor support
'edit-externally'      => 'Toimõndaq taad teedüstüt välidse programmiga',
'edit-externally-help' => '(Lisateedüst loeq [//www.mediawiki.org/wiki/Manual:External_editors pruukmisoppusõ lehe päält])',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => ', terveq aolugu',
'namespacesall' => 'kõik',
'monthsall'     => 'kõik',

# E-mail address confirmation
'confirmemail'            => 'Kinnüdäq e-postiaadrõssit',
'confirmemail_noemail'    => 'Sul olõ-i [[Special:Preferences|ummi säädmiisihe]] pant kõlbolist e-postiaadrõssit.',
'confirmemail_text'       => 'Taa viki nõud e-postiaadrõsi kinnütämist, inne ku e-posti pruukiq võit. Saadaq alanolõva nupi pääle vaotõn uma aadrõsi pääle kinnütüse küsümise kiri. Säält lövvät lingi, mink vaotamisõga kinnütät uma e-postiaadrõsi.',
'confirmemail_pending'    => 'Kinnütüskiri om jo ärq saadõt. Ku lõit õkva vahtsõ pruukjanime, oodaq mõni minot sõnomi tulõkit, inne ku proovit vahtsõst.',
'confirmemail_send'       => 'Saadaq kinnütüskiri ärq',
'confirmemail_sent'       => 'Kinnütüskiri ärq saadõt.',
'confirmemail_oncreate'   => 'Kinnütüskiri saadõti su e-postiaadrõsi pääle. Kinnütüskuudi olõ-i joht vajja nimega sisseminekis, a tuu tulõ sul ärq saataq, ku tahat, et sa saanuq taan vikin e-posti saataq.',
'confirmemail_sendfailed' => 'Kinnütüskiri jäi saatmalda. Kaeq, kas su annõtun aadrõssin olõ-i keeletüid märke. Postiprogramm saat tagasi: $1',
'confirmemail_invalid'    => 'Kõlbmalda kinnütüskuud. Taa või ollaq vanaslännüq.',
'confirmemail_needlogin'  => 'Uma e-postiaadrõsi kinnütämises $1.',
'confirmemail_success'    => 'Su e-postiaadrõs om no ärq kinnütet. Võit nimega sisse minnäq.',
'confirmemail_loggedin'   => 'Su e-postiaadrõs om no ärq kinnütet.',
'confirmemail_error'      => "Su e-postiaadrõsi kinnütämisega läts' midägi võlssi.",
'confirmemail_subject'    => '{{SITENAME}} e-postiaadrõsi kinnütämine',
'confirmemail_body'       => 'Kiäki, arvadaq saq esiq, lõi puutri võrgoaadrõsi $1 päält {{SITENAME}} pruukjanime $2. Ku taa om tõtõstõ suq pruukjanimi, tiiq vallalõ link: $3. Ku taa *olõ-i* suq luud pruukjanimi, sis teku-i midägi. Kinnütüskuud lätt vanas $4.',

# Scary transclusion
'scarytranscludedisabled' => '[Vikidevaihõlinõ teedüsepruukminõ olõ-i käügin]',
'scarytranscludefailed'   => '[Saa-s näüdüst kätte: $1]',
'scarytranscludetoolong'  => "[Võrgoaadrõs om pall'o pikk]",

# Delete conflict
'deletedwhileediting' => "<center>'''Hoiatus''': taa leht om ärq kistutõt päält tuud, ku sa taad toimõndama naksit!</center>",
'confirmrecreate'     => "Pruukja '''[[User:$1|$1]]''' ([[User talk:$1|arotus]]) kistut' taa lehe ärq päält tuud, ku sa naksit taad toimõndama. Põhjus oll':
: ''$2''
Olõq hää, kinnüdäq, et tahat taad lehte vahtsõst luvvaq.",
'recreate'            => 'Luuq vahtsõst',

# action=purge
'confirm_purge_button' => 'Hää külh',
'confirm-purge-top'    => 'Kas taa lehe vaihõmälokujoq tulõvaq ärq kistutaq?',

# Multipage image navigation
'imgmultipageprev' => '← mineväne leht',
'imgmultipagenext' => 'järgmäne leht →',
'imgmultigo'       => 'Mineq!',

# Table pager
'ascending_abbrev'         => 'ülespoolõ',
'descending_abbrev'        => 'allapoolõ',
'table_pager_next'         => 'Järgmäne leht',
'table_pager_prev'         => 'Mineväne leht',
'table_pager_first'        => 'Edimäne leht',
'table_pager_last'         => 'Perämäne leht',
'table_pager_limit'        => 'Näütäq $1 ütsüst lehe kotsilõ',
'table_pager_limit_submit' => 'Mineq',
'table_pager_empty'        => 'Olõ-i tulõmuisi',

# Auto-summaries
'autosumm-blank'   => 'Leht tetti tühäs',
'autosumm-replace' => "Asõmalõ panti '$1'",
'autoredircomment' => 'Ümbresaatminõ lehele [[$1]]',
'autosumm-new'     => 'Vahtsõnõ leht: $1',

# Live preview
'livepreview-loading' => 'Laat…',
'livepreview-ready'   => 'Laat… Valmis!',
'livepreview-failed'  => 'Kipõkaehus lää-s käümä!
Prooviq harilikku kaehust.',
'livepreview-error'   => 'Ütistämine lää-s kõrda: $1 "$2"
Prooviq harilikku kaehust.',

# Friendlier slave lag warnings
'lag-warn-normal' => 'Muutmiisi, miä ommaq vahtsõmbaq ku $1 sekundit, pruugi-i taan nimekirän nätäq ollaq.',
'lag-warn-high'   => 'Teedüskogoserveri aiglusõ peräst pruugi-i $1 sekundist värskimbit muutmiisi nimekirän nätäq ollaq.',

# Watchlist editor
'watchlistedit-numitems'      => 'Su perräkaemisnimekirän om {{PLURAL:$1|1 päälkiri|$1 päälkirjä}}, arotusleheq vällä arvaduq.',
'watchlistedit-noitems'       => 'Perräkaemisnimekirän olõ-i üttegi päälkirjä.',
'watchlistedit-normal-title'  => 'Toimõndaq perräkaemisnimekirjä',
'watchlistedit-normal-legend' => 'Kistudaq päälkiräq perräkaemisnimekiräst ärq',
'watchlistedit-normal-submit' => 'Kistudaq päälkiräq ärq',
'watchlistedit-raw-titles'    => 'Päälkiräq:',
'watchlistedit-raw-submit'    => 'Vahtsõndaq perräkaemisnimekirjä',
'watchlistedit-raw-done'      => 'Perräkaemisniekiri om ärq vahtsõndõt.',
'watchlistedit-raw-added'     => 'Mano pant {{PLURAL:$1|1 päälkiri|$1 päälkirjä}}:',
'watchlistedit-raw-removed'   => 'Ärq kistutõt {{PLURAL:$1|1 päälkiri|$1 päälkirjä}}:',

# Watchlist editing tools
'watchlisttools-view' => 'Näütäq muutmiisi',
'watchlisttools-edit' => 'Kaeq ja toimõndaq perräkaemisnimekirjä',
'watchlisttools-raw'  => 'Toimõndaq lätteteedüstüt',

# Special:Version
'version'                  => 'Kujo',
'version-version'          => '(Kujo $1)',
'version-software-version' => 'Kujo',

# Special:FilePath
'filepath'        => 'Teedüstü aadrõs',
'filepath-page'   => 'Teedüstü:',
'filepath-submit' => 'Aadrõs',

# Special:FileDuplicateSearch
'fileduplicatesearch-filename' => 'Teedüstünimi:',
'fileduplicatesearch-submit'   => 'Otsiq',

# Special:SpecialPages
'specialpages'                   => 'Tallitusleheküleq',
'specialpages-note'              => '----
* Hariliguq tallitusleheq.
* <strong class="mw-specialpagerestricted">Piiredüq tallitusleheq.</strong>',
'specialpages-group-maintenance' => 'Kõrranpidämisteedüseq',
'specialpages-group-other'       => 'Muuq tallitusleheq',
'specialpages-group-login'       => 'Nimega sisseminek / Pruukjanime luuminõ',
'specialpages-group-changes'     => 'Muutmisõq ja muutmisnimekiräq',
'specialpages-group-media'       => 'Meediäteedüstüq',
'specialpages-group-users'       => 'Pruukjaq ja õigusõq',
'specialpages-group-highuse'     => 'Rohkõmbpruugiduq leheq',
'specialpages-group-pages'       => 'Lehenimekiräq',
'specialpages-group-pagetools'   => 'Lehetüüriistaq',
'specialpages-group-wiki'        => 'Vikiteedüseq ja tüüriistaq',
'specialpages-group-redirects'   => 'Ümbrenäütämistallitusleheq',

);
