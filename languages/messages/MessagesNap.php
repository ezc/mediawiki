<?php
/** Neapolitan (Nnapulitano)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Carmine Colacino
 * @author Cryptex
 * @author E. abu Filumena
 * @author SabineCretella
 * @author לערי ריינהארט
 */

$fallback = 'it';

$namespaceNames = array(
	NS_MEDIA            => 'Media',
	NS_SPECIAL          => 'Speciàle',
	NS_TALK             => 'Chiàcchiera',
	NS_USER             => 'Utente',
	NS_USER_TALK        => 'Utente_chiàcchiera',
	NS_PROJECT_TALK     => '$1_chiàcchiera',
	NS_FILE             => 'Fiùra',
	NS_FILE_TALK        => 'Fiùra_chiàcchiera',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki_chiàcchiera',
	NS_TEMPLATE         => 'Modello',
	NS_TEMPLATE_TALK    => 'Modello_chiàcchiera',
	NS_HELP             => 'Ajùto',
	NS_HELP_TALK        => 'Ajùto_chiàcchiera',
	NS_CATEGORY         => 'Categurìa',
	NS_CATEGORY_TALK    => 'Categurìa_chiàcchiera',
);

$namespaceAliases = array(
	'Speciale' => NS_SPECIAL,
	'Discussione' => NS_TALK,
	'Utente' => NS_USER,
	'Discussioni_utente' => NS_USER_TALK,
	'Discussioni_$1' => NS_PROJECT_TALK,
	'Immagine' => NS_FILE,
	'Discussioni_immagine' => NS_FILE_TALK,
	'MediaWiki' => NS_MEDIAWIKI,
	'Discussioni_MediaWiki' => NS_MEDIAWIKI_TALK,
	'Discussioni_template' => NS_TEMPLATE_TALK,
	'Aiuto' => NS_HELP,
	'Discussioni_aiuto' => NS_HELP_TALK,
	'Categoria' => NS_CATEGORY,
	'Discussioni_categoria' => NS_CATEGORY_TALK,
);

$messages = array(
# User preference toggles
'tog-underline'               => "Sottolinia 'e jonte:",
'tog-highlightbroken'         => 'Formatta \'e jonte defettose <a href="" class="new">accussì</a> (oppure: accussì<a href="" class="internal">?</a>).',
'tog-justify'                 => "Alliniamento d''e paracrafe mpare",
'tog-hideminor'               => "Annascunne 'e cagne piccirille  'int'a ll'úrdeme cagne",
'tog-extendwatchlist'         => "Spanne ll'asservate speciale pe fà vedé tutte 'e cagne possíbbele",
'tog-usenewrc'                => 'Urdeme cagne avanzate (JavaScript)',
'tog-numberheadings'          => "Annúmmera automatecamente 'e títule",
'tog-showtoolbar'             => "Aspone 'a barra d''e stromiente 'e cagno (JavaScript)",
'tog-editondblclick'          => "Cagna 'e pàggene cliccanno ddoje vote (JavaScript)",
'tog-editsection'             => "Permette 'e cagnà 'e sezzione cu a jonta [cagna]",
'tog-editsectiononrightclick' => "Permette 'e cangne 'e sezzione cliccanno p''o tasto destro ncopp 'e titule 'e sezzione (JavaScript)",
'tog-showtoc'                 => "Mosta ll'innece pe 'e paggene cu cchiù 'e 3 sezzione",
'tog-rememberpassword'        => "Ricurda 'a registrazzione pe' cchiu sessione (for a maximum of $1 {{PLURAL:$1|day|days}})",

'underline-always' => 'Sèmpe',
'underline-never'  => 'Màje',

# Dates
'sunday'        => 'dumméneca',
'monday'        => 'lunnerì',
'tuesday'       => 'marterì',
'wednesday'     => 'miercurì',
'thursday'      => 'gioverì',
'friday'        => 'viernarì',
'saturday'      => 'sàbbato',
'sun'           => 'dum',
'mon'           => 'lun',
'tue'           => 'mar',
'wed'           => 'mier',
'thu'           => 'gio',
'fri'           => 'ven',
'sat'           => 'sab',
'january'       => 'jennaro',
'february'      => 'frevàro',
'march'         => 'màrzo',
'april'         => 'abbrile',
'may_long'      => 'màjo',
'june'          => 'giùgno',
'july'          => 'luglio',
'august'        => 'aústo',
'september'     => 'settembre',
'october'       => 'ottobbre',
'november'      => 'nuvembre',
'december'      => 'dicèmbre',
'january-gen'   => 'jennaro',
'february-gen'  => 'frevaro',
'march-gen'     => 'màrzo',
'april-gen'     => 'abbrile',
'may-gen'       => 'maggio',
'june-gen'      => 'giùgno',
'july-gen'      => 'luglio',
'august-gen'    => 'aùsto',
'september-gen' => 'settembre',
'october-gen'   => 'ottovre',
'november-gen'  => 'nuvembre',
'december-gen'  => 'dicembre',
'jan'           => 'jen',
'feb'           => 'fre',
'mar'           => 'mar',
'apr'           => 'abb',
'may'           => 'maj',
'jun'           => 'giu',
'jul'           => 'lug',
'aug'           => 'aus',
'sep'           => 'set',
'oct'           => 'ott',
'nov'           => 'nuv',
'dec'           => 'dic',

# Categories related messages
'category_header' => 'Paggene rìnt\'a categurìa "$1"',
'subcategories'   => 'Categurìe secunnarie',

'about'     => 'Nfromma',
'article'   => 'Articulo',
'newwindow' => "(s'arape n'ata fenèsta)",
'cancel'    => 'Scancèlla',
'mypage'    => "'A paggena mia",
'mytalk'    => "'E mmie chiacchieriàte",
'anontalk'  => 'Chiacchierate pe chisto IP',

# Cologne Blue skin
'qbfind'         => 'Truòva',
'qbedit'         => 'Càgna',
'qbpageoptions'  => 'Chesta paggena',
'qbpageinfo'     => "Nfrummazzione ncopp'â paggena",
'qbmyoptions'    => "'E ppaggene mie",
'qbspecialpages' => 'Pàggene speciàle',

'errorpagetitle'    => 'Sbaglio',
'returnto'          => 'Torna a $1.',
'help'              => 'Ajùto',
'search'            => 'Truova',
'searchbutton'      => 'Truova',
'go'                => 'Vàje',
'history'           => "Verziune 'e primma",
'history_short'     => 'Cronologgia',
'printableversion'  => "Verzione pe' stampa",
'permalink'         => 'Jonta permanente',
'edit'              => 'Càgna',
'editthispage'      => 'Càgna chesta paggena',
'delete'            => 'Scancèlla',
'deletethispage'    => 'Scancèlla chésta paggena',
'protect'           => 'Ferma',
'protectthispage'   => 'Ferma chesta paggena',
'unprotect'         => 'Sferma',
'unprotectthispage' => 'Sferma chesta paggena',
'newpage'           => 'Paggena nòva',
'talkpage'          => "Paggena 'e chiàcchiera",
'talkpagelinktext'  => 'Chiàcchiera',
'specialpage'       => 'Paggena speciàle',
'talk'              => 'Chiàcchiera',
'toolbox'           => 'Strumiente',
'imagepage'         => 'Paggena fiùra',
'otherlanguages'    => 'Ate léngue',
'redirectedfrom'    => "(Redirect 'a $1)",
'lastmodifiedat'    => "Urdema cagnamiénto pe' a paggena: $2, $1.",
'viewcount'         => 'Chesta paggena è stata lètta {{PLURAL:$1|una vòta|$1 vòte}}.',
'jumpto'            => 'Vaje a:',
'jumptonavigation'  => 'navigazione',
'jumptosearch'      => 'truova',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'            => "'Nfrummazione ncòpp'a {{SITENAME}}",
'aboutpage'            => "Project:'Nfrummazione",
'disclaimers'          => 'Avvertimiènte',
'disclaimerpage'       => 'Project:Avvertimiènte generale',
'edithelp'             => 'Guida',
'helppage'             => 'Help:Ajùto',
'mainpage'             => 'Paggena prencepale',
'mainpage-description' => 'Paggena prencepale',
'portal'               => "Porta d''a cummunetà",
'portal-url'           => "Project:Porta d''a cummunetà",

'badaccess' => "Nun haje 'e premmesse abbastante.",

'newmessageslink'         => "nuove 'mmasciàte",
'newmessagesdifflink'     => "differenze cu 'a revisione precedente",
'youhavenewmessagesmulti' => 'Tiene nuove mmasciate $1',
'editsection'             => 'càgna',
'editold'                 => 'càgna',
'toc'                     => 'Énnece',
'showtoc'                 => 'faje vedé',
'hidetoc'                 => 'annascunne',
'viewdeleted'             => 'Vire $1?',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main'      => 'Articulo',
'nstab-user'      => 'Paggena utente',
'nstab-project'   => "Paggena 'e servizio",
'nstab-image'     => 'Fiura',
'nstab-mediawiki' => "'Mmasciata",
'nstab-help'      => 'Ajùto',
'nstab-category'  => 'Categurìa',

# General errors
'filedeleteerror' => 'Nun se pô scancellà \'o file "$1"',
'cannotdelete'    => "Nun è possibbele scassà 'a paggena o 'a fiura addamannata. (Putria éssere stato già scancellato.)",
'badtitle'        => "'O nnomme nun è jùsto",

# Login and logout pages
'logouttext'                 => "'''Site asciùte.'''

Putite cuntinuà a ausà {{SITENAME}} comme n'utente senza nomme, o si nò putite trasì n'ata vota, cu 'o stesso nomme o cu n'ato nomme.",
'welcomecreation'            => "== Bemmenuto, $1! ==

'O cunto è stato criato currettamente.  Nun scurdà 'e perzonalizzà 'e ppreferenze 'e {{SITENAME}}.",
'remembermypassword'         => 'Allicuordate d"a password (for a maximum of $1 {{PLURAL:$1|day|days}})',
'yourdomainname'             => "Spiecà 'o dumminio",
'login'                      => 'Tràse',
'userlogin'                  => "Tràse o cria n'acciesso nuovo",
'logout'                     => 'Jèsce',
'userlogout'                 => 'Jèsce',
'notloggedin'                => 'Acciesso nun affettuato',
'nologin'                    => "Nun haje ancora n'acciesso? '''$1'''.",
'nologinlink'                => 'Crialo mmo',
'createaccount'              => 'Cria nu cunto nuovo',
'gotaccount'                 => "Tiene già nu cunto? '''$1'''.",
'gotaccountlink'             => 'Tràse',
'loginerror'                 => "Probblema 'e accièsso",
'loginsuccesstitle'          => 'Acciesso affettuato',
'nosuchusershort'            => 'Nun ce stanno utente cu o nòmme "$1". Cuntrolla si scrivìste buòno.',
'nouserspecified'            => "Tiene 'a dìcere nu nomme pricìso.",
'acct_creation_throttle_hit' => 'Ce dispiace, haje già criato $1 utente. Nun ne pô crià ate.',
'accountcreated'             => 'Cunto criato',
'loginlanguagelabel'         => 'Lengua: $1',

# Edit page toolbar
'image_sample' => 'Essempio.jpg',
'image_tip'    => 'Fiura ncuorporata',

# Edit pages
'minoredit'        => 'Chisto è nu cagnamiénto piccerillo',
'watchthis'        => "Tiene d'uocchio chesta paggena",
'savearticle'      => "Sarva 'a paggena",
'preview'          => 'Anteprimma',
'showpreview'      => 'Vere anteprimma',
'showdiff'         => "Fa veré 'e cagnamiente",
'loginreqtitle'    => "Pe' cagnà chesta paggena abbesognate aseguì ll'acciesso ô sito.",
'loginreqlink'     => "aseguì ll'acciesso",
'loginreqpagetext' => "Pe' veré ate ppaggene abbesognate $1.",
'accmailtitle'     => "'O password è stato mannato.",
'accmailtext'      => '\'A password pe ll\'utente "$1" fuje mannata ô nnerizzo $2.',
'previewnote'      => "'''Chesta è sola n'anteprimma; 'e cagnamiénte â paggena NUN songo ancora sarvate!'''",
'editing'          => "Cagnamiento 'e $1",
'templatesused'    => "Template ausate 'a chesta paggena:",

# "Undo" feature
'undo-summary' => "Canciella 'o cagnamiento $1 'e [[Special:Contributions/$2|$2]] ([[User talk:$2|Chiàcchiera]])",

# History pages
'currentrev' => "Verzione 'e mmo",

# Revision deletion
'rev-delundel' => 'faje vedé/annascunne',

# Search results
'searchresults'    => "Risultato d''a recerca",
'searchresulttext' => "Pe sapé de cchiù ncopp'â comme ascia 'a {{SITENAME}}, vere [[{{MediaWiki:Helppage}}|Ricerca in {{SITENAME}}]].",
'notitlematches'   => "Voce addemannata nun truvata dint' 'e titule 'e articulo",
'notextmatches'    => "Voce addemannata nun truvata dint' 'e teste 'e articulo",
'searchhelp-url'   => 'Help:Ajùto',
'powersearch'      => 'Truova',

# Preferences page
'mypreferences'         => "Preferenze d''e mie",
'changepassword'        => 'Cagna password',
'prefs-rc'              => 'Urdeme nove',
'prefs-watchlist'       => 'Asservate speciale',
'timezoneregion-africa' => 'Afreca',
'username'              => 'Nomme utente',
'yourlanguage'          => 'Lengua:',

# User rights log
'rightsnone' => '(nisciuno)',

# Recent changes
'recentchanges'     => 'Urdeme nove',
'recentchangestext' => "Ncoppa chesta paggena song' appresentate ll'urdeme cagnamiente fatto ê cuntenute d\"o sito.",
'rcnote'            => "Ccà sotto nce songo ll'urdeme {{PLURAL:$1|cangiamiento|'''$1''' cangiamiente}} 'e ll'urdeme {{PLURAL:$2|juorno|'''$2''' juorne}}, agghiuornate a $3.",
'rclistfrom'        => "Faje vedé 'e cagnamiénte fatte a partì 'a $1",
'rcshowhideminor'   => "$1 'e cagnamiénte piccerille",
'rcshowhidebots'    => "$1 'e bot",
'rcshowhideliu'     => "$1 ll'utente reggìstrate",
'rcshowhideanons'   => "$1 ll'utente anonime",
'rcshowhidemine'    => "$1 'e ffatiche mmee",
'rclinks'           => "Faje vedé ll'urdeme $1 cagnamiente dint' ll'urdeme $2 juorne<br />$3",
'hide'              => 'annascunne',
'show'              => 'faje vedé',
'rc_categories_any' => 'Qualònca',

# Recent changes linked
'recentchangeslinked'         => 'Cagnamiénte cullegate',
'recentchangeslinked-feed'    => 'Cagnamiénte cullegate',
'recentchangeslinked-toolbox' => 'Cagnamiénte cullegate',

# Upload
'upload'        => 'Careca file',
'uploadedimage' => 'ha carecato "[[$1]]"',

# Special:ListFiles
'listfiles_name' => 'Nomme',

# File description page
'file-anchor-link' => 'Fiura',
'filehist-user'    => 'Utente',
'imagelinks'       => 'Jonte ê ffiure',

# Random page
'randompage'         => 'Na paggena qualsiase',
'randompage-nopages' => 'Nessuna pagina nel namespace selezionato.',

'disambiguations' => "Paggene 'e disambigua",

'doubleredirects' => 'Redirect duppie',

# Miscellaneous special pages
'nbytes'       => '$1 {{PLURAL:$1|byte|byte}}',
'ncategories'  => '$1 {{PLURAL:$1|categoria|categorie}}',
'nlinks'       => '$1 {{PLURAL:$1|cullegamiento|cullegamiente}}',
'popularpages' => "Paggene cchiù 'speziunate",
'wantedpages'  => 'Paggene cchiù addemannate',
'shortpages'   => 'Paggene curte',
'longpages'    => 'Paggene cchiú longhe',
'newpages'     => 'Paggene cchiù frische',
'move'         => 'Spusta',
'movethispage' => 'Spusta chesta paggena',

# Special:AllPages
'allpages'       => "Tutte 'e ppaggene",
'allarticles'    => "Tutt' 'e vvoce",
'allinnamespace' => "Tutt' 'e ppaggene d''o namespace $1",

# Special:Categories
'categories'         => 'Categurìe',
'categoriespagetext' => "Lista cumpleta d\"e categurie presente ncopp' 'o sito.
[[Special:UnusedCategories|Unused categories]] are not shown here.
Also see [[Special:WantedCategories|wanted categories]].",

# Special:LinkSearch
'linksearch-ok' => 'Truova',

# Watchlist
'watch'        => 'Secuta',
'notanarticle' => 'Chesta paggena nun è na voce',

'enotif_newpagetext' => 'Chesta è na paggena nòva.',
'changed'            => 'cagnata',

# Delete
'deletepage'      => 'Scancella paggena',
'excontent'       => "'o cuntenuto era: '$1'",
'excontentauthor' => "'o cuntenuto era: '$1' (e ll'unneco cuntribbutore era '[[Special:Contributions/$2|$2]]')",
'exbeforeblank'   => "'O cuntenuto apprimm' 'a ll'arrevacamento era: '$1'",
'exblank'         => "'a paggena era vacante",
'actioncomplete'  => 'Azzione fernuta',
'deletedtext'     => 'Qauccheruno ha scancellata \'a paggena "$1".  Addumannà \'o $2 pe na lista d"e ppaggene scancellate urdemamente.',
'dellogpage'      => 'Scancellazione',
'deletionlog'     => 'Log d"e scancellazione',
'deletecomment'   => 'Raggióne',

# Rollback
'rollback'   => "Ausa na revizione 'e primma",
'revertpage' => "Cangiaje 'e cagnamiénte 'e [[Special:Contributions/$2|$2]] ([[User talk:$2|discussione]]), cu â verzione 'e pprimma 'e  [[User:$1|$1]]",

# Protect
'prot_1movedto2'         => 'ha spustato [[$1]] a [[$2]]',
'protect-expiry-options' => '2 ore:2 hours,1 juorno:1 day,3 juorne:3 days,1 semmana:1 week,2 semmane:2 weeks,1 mise:1 month,3 mese:3 months,6 mese:6 months,1 anno:1 year,infinito:infinite',

# Undelete
'viewdeletedpage' => "Vìre 'e ppàggine scancellate",

# Namespace form on various pages
'invert' => "abbarruca 'a sceveta",

# Contributions
'contributions' => 'Contribbute utente',
'mycontris'     => 'Mie contribbute',

'sp-contributions-talk' => 'Chiàcchiera',

# What links here
'whatlinkshere'       => 'Paggene ca cullegano a chesta',
'whatlinkshere-title' => 'Paggene ca cullegano a $1',
'nolinkshere'         => "Nisciuna paggena cuntene jonte ca mpuntano a '''[[:$1]]'''.",

# Block/unblock
'blockip'            => 'Ferma utelizzatóre',
'ipadressorusername' => 'Nnerizzo IP o nomme utente',
'ipboptions'         => '2 ore:2 hours,1 juorno:1 day,3 juorne:3 days,1 semmana:1 week,2 semmane:2 weeks,1 mise:1 month,3 mese:3 months,6 mese:6 months,1 anno:1 year,infinito:infinite',
'blockipsuccesssub'  => 'Blocco aseguito',
'blocklink'          => 'ferma',
'blocklogpage'       => 'Blocche',
'blocklogentry'      => 'ha fermato "[[$1]]" pe\' nu mumento \'e $2 $3',
'blocklogtext'       => "Chesta è 'a lista d''e azzione 'e blocco e sblocco utente.  'E nnerizze IP bloccate automaticamente nun nce so'. Addumannà 'a [[Special:BlockList|lista IP bloccate]] pp' 'a lista d''e nnerizze e nomme utente 'o ca blocco nce sta.",

# Move page
'movearticle'             => "Spusta 'a paggena",
'newtitle'                => 'Titulo nuovo:',
'movepagebtn'             => "Spusta 'a paggena",
'articleexists'           => "Na paggena cu chisto nomme asiste già, o pure 'o nomme scegliuto nun è buono.  Scegliere n'ato titulo.",
'movedto'                 => 'spustata a',
'movereason'              => 'Raggióne',
'delete_and_move'         => 'Scancèlla e spusta',
'delete_and_move_confirm' => "Sì, suprascrivi 'a paggena asistente",

# Export
'export' => "Spurta 'e ppaggene",

# Namespace 8 related
'allmessages'        => "'Mmasciate d''o sistema",
'allmessagesname'    => 'Nomme',
'allmessagescurrent' => "Testo 'e mo",

# Special:Import
'import'                  => 'Mpurta paggene',
'import-interwiki-submit' => 'Mpurta',

# Import log
'import-logentry-upload' => 'ha mpurtato [[$1]] trammeto upload',

# Tooltip help for the actions
'tooltip-pt-logout' => 'Jésce (logout)',
'tooltip-minoredit' => 'Rénne chìsto cagnamiénto cchiù ppiccirìllo.',
'tooltip-save'      => "Sàrva 'e cagnamiénte.",
'tooltip-preview'   => "Primma 'e sarvà, vìre primma chille ca hê cagnàte!",

# Attribution
'others' => 'ate',

# Special:NewFiles
'noimages' => "Nun nc'è nind' 'a veré.",
'ilsubmit' => 'Truova',

'exif-xyresolution-i' => '$1 punte pe pollice (dpi)',

'exif-meteringmode-0'   => 'Scanusciuto',
'exif-meteringmode-255' => 'Ato',

'exif-lightsource-0'  => 'Scanusciuta',
'exif-lightsource-10' => "'Ntruvulato",
'exif-lightsource-11' => 'Aumbruso',

'exif-gaincontrol-0' => 'Nisciuno',

'exif-subjectdistancerange-0' => 'Scanusciuta',

# External editor support
'edit-externally-help' => "Pe piglià cchiù nfromma veré 'e [//www.mediawiki.org/wiki/Manual:External_editors struzione] ('n ngrese)",

# 'all' in various places, this might be different for inflected languages
'namespacesall' => 'Tutte',

# E-mail address confirmation
'confirmemail_needlogin' => "Abbesognate $1 pe cunfirmà 'o nnerizzo 'e e-mail d''o vuosto.",
'confirmemail_loggedin'  => "'O nnerizzo 'e e-mail è vàleto",

# Delete conflict
'deletedwhileediting' => 'Attenziòne: quaccherùno have scancellàto chesta pàggena prìmma ca tu accuminciàste â scrìvere!',

# Auto-summaries
'autoredircomment' => 'Redirect â paggena [[$1]]',
'autosumm-new'     => 'Paggena nuova: $1',

# Special:SpecialPages
'specialpages' => 'Paggene speciale',

);
