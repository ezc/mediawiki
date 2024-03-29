<?php
/** Chechen (Нохчийн)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Chechenka
 * @author Comp1089
 * @author Girdi
 * @author Mega programmer
 * @author Sasan700
 */

$fallback = 'ru';

$namespaceNames = array(
	NS_MEDIA            => 'Медиа',
	NS_SPECIAL          => 'Белхан',
	NS_TALK             => 'Дийцаре',
	NS_USER             => 'Декъашхо',
	NS_USER_TALK        => 'Декъашхон_дийцаре',
	NS_PROJECT_TALK     => '{{GRAMMAR:genitive|$1}}_дийцаре',
	NS_FILE             => 'Хlум',
	NS_FILE_TALK        => 'Хlуман_дийцаре',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki_дийцаре',
	NS_TEMPLATE         => 'Куцкеп',
	NS_TEMPLATE_TALK    => 'Куцкеп_дийцаре',
	NS_HELP             => 'Гlо',
	NS_HELP_TALK        => 'Гlон_дийцаре',
	NS_CATEGORY         => 'Кадегар',
	NS_CATEGORY_TALK    => 'Кадегар_дийцаре',
);

$namespaceAliases = array(
	'Медйа'            => NS_MEDIA,
	'Башхо'            => NS_SPECIAL,
	'Дийца'            => NS_TALK,
	'Юзер'             => NS_USER,
	'Юзери_дийца'      => NS_USER_TALK,
	'Дийцаре_декъашхо' => NS_USER_TALK,
	'$1_Дийца'         => NS_PROJECT_TALK,
	'Дийцаре_{{GRAMMAR:genitive|$1}}' => NS_PROJECT_TALK,
	'Сурт'             => NS_FILE,
	'Сурти_дийца'      => NS_FILE_TALK,
	'Дийцаре_хlуман'   => NS_FILE_TALK,
	'МедйаВики'        => NS_MEDIAWIKI,
	'МедйаВики_дийца'  => NS_MEDIAWIKI_TALK,
	'MediaWiki_Дийцаре' => NS_MEDIAWIKI_TALK,
	'Дакъан'           => NS_TEMPLATE,
	'Дакъан_дийца'     => NS_TEMPLATE_TALK,
	'ГІо'              => NS_HELP,
	'ГІодан_дийца'     => NS_HELP_TALK,
	'Тоба'             => NS_CATEGORY,
	'Тобан_дийца'      => NS_CATEGORY_TALK
);

// Remove Russian aliases
$namespaceGenderAliases = array();

$magicWords = array(
	'redirect'                => array( '0', '#дlасахьажайар\'', '\'#хьажайо\'', '\'#REDIRECT', '#перенаправление', '#перенапр', '#REDIRECT' ),
	'notoc'                   => array( '0', '__БАЦ_ЧУЛАЦАМ__', '__БАЦ_ЧУЛ__', '__БЕЗ_ОГЛАВЛЕНИЯ__', '__БЕЗ_ОГЛ__', '__NOTOC__' ),
	'nogallery'               => array( '0', '__ЙАЦ_УЧЕ__', '__БЕЗ_ГАЛЕРЕИ__', '__NOGALLERY__' ),
	'forcetoc'                => array( '0', '__ТlЕДУЬЛЛУ_ЧУЛАЦАМБАР__', '__ТlЕДУЬЛ_ЧУЛ__', '__ОБЯЗАТЕЛЬНОЕ_ОГЛАВЛЕНИЕ__', '__ОБЯЗ_ОГЛ__', '__FORCETOC__' ),
	'toc'                     => array( '0', '__ЧУЛАЦАМ__', '__ЧУЛ__', '__ОГЛАВЛЕНИЕ__', '__ОГЛ__', '__TOC__' ),
	'noeditsection'           => array( '0', '__ЦАМЕГ_РЕДАККХА_АГlОН__', '__БЕЗ_РЕДАКТИРОВАНИЯ_РАЗДЕЛА__', '__NOEDITSECTION__' ),
	'noheader'                => array( '0', '__КОЬРТА_ЙОЦАШ__', '__БЕЗ_ЗАГОЛОВКА__', '__NOHEADER__' ),
	'currentmonth'            => array( '1', 'КАРАРА_БУТТ', 'КАРАРА_БУТТ_2', 'ТЕКУЩИЙ_МЕСЯЦ', 'ТЕКУЩИЙ_МЕСЯЦ_2', 'CURRENTMONTH', 'CURRENTMONTH2' ),
	'currentmonth1'           => array( '1', 'КАРАРА_БУТТ_1', 'ТЕКУЩИЙ_МЕСЯЦ_1', 'CURRENTMONTH1' ),
	'currentmonthname'        => array( '1', 'КАРАРАЧУ_БЕТТА_ЦlЕ', 'НАЗВАНИЕ_ТЕКУЩЕГО_МЕСЯЦА', 'CURRENTMONTHNAME' ),
	'currentmonthnamegen'     => array( '1', 'КАРАРАЧУ_БЕТТА_ЦlЕ_МУХ', 'НАЗВАНИЕ_ТЕКУЩЕГО_МЕСЯЦА_РОД', 'CURRENTMONTHNAMEGEN' ),
	'currentmonthabbrev'      => array( '1', 'КАРАРАЧУ_БЕТТА_ЦlЕ_АБР', 'НАЗВАНИЕ_ТЕКУЩЕГО_МЕСЯЦА_АБР', 'CURRENTMONTHABBREV' ),
	'currentday'              => array( '1', 'КАРАРА_ДЕ', 'ТЕКУЩИЙ_ДЕНЬ', 'CURRENTDAY' ),
	'currentday2'             => array( '1', 'КАРАРА_ДЕ_2', 'ТЕКУЩИЙ_ДЕНЬ_2', 'CURRENTDAY2' ),
	'currentdayname'          => array( '1', 'КАРАРАЧУ_ДЕ_ЦlЕ', 'НАЗВАНИЕ_ТЕКУЩЕГО_ДНЯ', 'CURRENTDAYNAME' ),
	'currentyear'             => array( '1', 'КАРАРА_ШО', 'ТЕКУЩИЙ_ГОД', 'CURRENTYEAR' ),
	'currenttime'             => array( '1', 'КАРАРА_ХАН', 'ТЕКУЩЕЕ_ВРЕМЯ', 'CURRENTTIME' ),
	'currenthour'             => array( '1', 'КАРАРА_САХЬТ', 'ТЕКУЩИЙ_ЧАС', 'CURRENTHOUR' ),
	'localmonth'              => array( '1', 'МЕТТИГАН_БУТТ', 'МЕСТНЫЙ_МЕСЯЦ_2', 'МЕСТНЫЙ_МЕСЯЦ', 'LOCALMONTH', 'LOCALMONTH2' ),
	'localmonth1'             => array( '1', 'МЕТТИГАН_БУТТ_1', 'МЕСТНЫЙ_МЕСЯЦ_1', 'LOCALMONTH1' ),
	'localmonthname'          => array( '1', 'МЕТТИГАН_БЕТТА_ЦlЕ', 'НАЗВАНИЕ_МЕСТНОГО_МЕСЯЦА', 'LOCALMONTHNAME' ),
	'localmonthnamegen'       => array( '1', 'МЕТТИГАН_БЕТТА_ЦlЕ_МУХ', 'НАЗВАНИЕ_МЕСТНОГО_МЕСЯЦА_РОД', 'LOCALMONTHNAMEGEN' ),
	'localmonthabbrev'        => array( '1', 'МЕТТИГАН_БЕТТА_ЦlЕ_АБР', 'НАЗВАНИЕ_МЕСТНОГО_МЕСЯЦА_АБР', 'LOCALMONTHABBREV' ),
	'localday'                => array( '1', 'МЕТТИГАН_ДЕ', 'МЕСТНЫЙ_ДЕНЬ', 'LOCALDAY' ),
	'localday2'               => array( '1', 'МЕТТИГАН_ДЕ_2', 'МЕСТНЫЙ_ДЕНЬ_2', 'LOCALDAY2' ),
	'localdayname'            => array( '1', 'МЕТТИГАН_ДЕ_ЦlЕ', 'НАЗВАНИЕ_МЕСТНОГО_ДНЯ', 'LOCALDAYNAME' ),
	'localyear'               => array( '1', 'МЕТТИГАН_ШО', 'МЕСТНЫЙ_ГОД', 'LOCALYEAR' ),
	'localtime'               => array( '1', 'МЕТТИГАН_ХАН', 'МЕСТНОЕ_ВРЕМЯ', 'LOCALTIME' ),
	'localhour'               => array( '1', 'МЕТТИГАН_САХЬТ', 'МЕСТНЫЙ_ЧАС', 'LOCALHOUR' ),
	'numberofpages'           => array( '1', 'АГlОНИЙ_ДУКХАЛЛА', 'КОЛИЧЕСТВО_СТРАНИЦ', 'NUMBEROFPAGES' ),
	'numberofarticles'        => array( '1', 'ЯЗЗАМАШИ_ДУКХАЛЛА', 'КОЛИЧЕСТВО_СТАТЕЙ', 'NUMBEROFARTICLES' ),
	'numberoffiles'           => array( '1', 'ХlУМНИЙ_ДУКХАЛЛА', 'КОЛИЧЕСТВО_ФАЙЛОВ', 'NUMBEROFFILES' ),
	'numberofusers'           => array( '1', 'ДЕКЪАШХОЙ_ДУКХАЛЛА', 'КОЛИЧЕСТВО_УЧАСТНИКОВ', 'NUMBEROFUSERS' ),
	'numberofactiveusers'     => array( '1', 'ДУКХАЛЛА_ЖИГАРА_ДЕКЪАШХОЙ', 'КОЛИЧЕСТВО_АКТИВНЫХ_УЧАСТНИКОВ', 'NUMBEROFACTIVEUSERS' ),
	'numberofedits'           => array( '1', 'НИСДАРШИЙ_ДУКХАЛЛА', 'КОЛИЧЕСТВО_ПРАВОК', 'NUMBEROFEDITS' ),
	'numberofviews'           => array( '1', 'ХЬАЖАРИЙ_ДУКХАЛЛА', 'КОЛИЧЕСТВО_ПРОСМОТРОВ', 'NUMBEROFVIEWS' ),
	'pagename'                => array( '1', 'АГlОН_ЦlЕ', 'НАЗВАНИЕ_СТРАНИЦЫ', 'PAGENAME' ),
	'pagenamee'               => array( '1', 'АГlОН_ЦlЕ_2', 'НАЗВАНИЕ_СТРАНИЦЫ_2', 'PAGENAMEE' ),
	'namespace'               => array( '1', 'ЦlЕРИ_АНА', 'ПРОСТРАНСТВО_ИМЁН', 'NAMESPACE' ),
	'namespacee'              => array( '1', 'ЦlЕРИ_АНА_2', 'ПРОСТРАНСТВО_ИМЁН_2', 'NAMESPACEE' ),
	'talkspace'               => array( '1', 'ДИЙЦАРШИ_АНА', 'ПРОСТРАНСТВО_ОБСУЖДЕНИЙ', 'TALKSPACE' ),
	'talkspacee'              => array( '1', 'ДИЙЦАРШИ_АНА_2', 'ПРОСТРАНСТВО_ОБСУЖДЕНИЙ_2', 'TALKSPACEE' ),
	'subjectspace'            => array( '1', 'ЯЗЗАМАШИ_АНА', 'ПРОСТРАНСТВО_СТАТЕЙ', 'SUBJECTSPACE', 'ARTICLESPACE' ),
	'subjectspacee'           => array( '1', 'ЯЗЗАМАШИ_АНА_2', 'ПРОСТРАНСТВО_СТАТЕЙ_2', 'SUBJECTSPACEE', 'ARTICLESPACEE' ),
	'fullpagename'            => array( '1', 'ЮЬЗЗИНА_АГlОН_ЦlЕ', 'ПОЛНОЕ_НАЗВАНИЕ_СТРАНИЦЫ', 'FULLPAGENAME' ),
	'fullpagenamee'           => array( '1', 'ЮЬЗЗИНА_АГlОН_ЦlЕ_2', 'ПОЛНОЕ_НАЗВАНИЕ_СТРАНИЦЫ_2', 'FULLPAGENAMEE' ),
	'subpagename'             => array( '1', 'АГlОН_КlЕЛАРА_ЦlЕ', 'НАЗВАНИЕ_ПОДСТРАНИЦЫ', 'SUBPAGENAME' ),
	'subpagenamee'            => array( '1', 'АГlОН_КlЕЛАРА_ЦlЕ_2', 'НАЗВАНИЕ_ПОДСТРАНИЦЫ_2', 'SUBPAGENAMEE' ),
	'basepagename'            => array( '1', 'АГlОН_ЦlЕРА_БУХ', 'ОСНОВА_НАЗВАНИЯ_СТРАНИЦЫ', 'BASEPAGENAME' ),
	'basepagenamee'           => array( '1', 'АГlОН_ЦlЕРА_БУХ_2', 'ОСНОВА_НАЗВАНИЯ_СТРАНИЦЫ_2', 'BASEPAGENAMEE' ),
	'talkpagename'            => array( '1', 'ДИЙЦАРЕ_АГlОН_ЦlЕ', 'НАЗВАНИЕ_СТРАНИЦЫ_ОБСУЖДЕНИЯ', 'TALKPAGENAME' ),
	'talkpagenamee'           => array( '1', 'ДИЙЦАРЕ_АГlОН_ЦlЕ_2', 'НАЗВАНИЕ_СТРАНИЦЫ_ОБСУЖДЕНИЯ_2', 'TALKPAGENAMEE' ),
	'subjectpagename'         => array( '1', 'АГlОН_ЯЗЗАМАН_ЦlЕ', 'НАЗВАНИЕ_СТРАНИЦЫ_СТАТЬИ', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ),
	'subjectpagenamee'        => array( '1', 'АГlОН_ЯЗЗАМАН_ЦlЕ_2', 'НАЗВАНИЕ_СТРАНИЦЫ_СТАТЬИ_2', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ),
	'msg'                     => array( '0', 'ХААМ:', 'СООБЩЕНИЕ:', 'СООБЩ:', 'MSG:' ),
	'subst'                   => array( '0', 'ХlОТТОР:', 'ХlОТТ:', 'ПОДСТАНОВКА:', 'ПОДСТ:', 'SUBST:' ),
	'msgnw'                   => array( '0', 'ВИКИ_ХААМ_БОЦАШ:', 'СООБЩ_БЕЗ_ВИКИ:', 'MSGNW:' ),
	'img_thumbnail'           => array( '1', 'жима', 'жимо', 'мини', 'миниатюра', 'thumbnail', 'thumb' ),
	'img_manualthumb'         => array( '1', 'жима=$1', 'жимо=$1', 'мини=$1', 'миниатюра=$1', 'thumbnail=$1', 'thumb=$1' ),
	'img_right'               => array( '1', 'бакъхьа', 'справа', 'right' ),
	'img_left'                => array( '1', 'харцхьа', 'слева', 'left' ),
	'img_none'                => array( '1', 'йоцуш', 'без', 'none' ),
	'img_width'               => array( '1', '$1цинт', '$1пкс', '$1px' ),
	'img_center'              => array( '1', 'юккъ', 'центр', 'center', 'centre' ),
	'img_framed'              => array( '1', 'гурабе', 'обрамить', 'framed', 'enframed', 'frame' ),
	'img_frameless'           => array( '1', 'гурабоцаш', 'безрамки', 'frameless' ),
	'img_page'                => array( '1', 'агlо=$1', 'агlо_$1', 'page_$1', 'страница=$1', 'страница $1', 'page=$1', 'page $1' ),
	'img_upright'             => array( '1', 'бакъхьалакхо', 'бакъхьалакхо=$1', 'бакъхьалакхо_$1', 'upright_$1', 'сверхусправа', 'сверхусправа=$1', 'сверхусправа $1', 'upright', 'upright=$1', 'upright $1' ),
	'img_border'              => array( '1', 'доза', 'граница', 'border' ),
	'img_baseline'            => array( '1', 'бух', 'основание', 'baseline' ),
	'img_sub'                 => array( '1', 'буха', 'под', 'sub' ),
	'img_super'               => array( '1', 'тlе', 'над', 'super', 'sup' ),
	'img_top'                 => array( '1', 'лакхахь', 'сверху', 'top' ),
	'img_text_top'            => array( '1', 'лакххьара-йоза', 'текст-сверху', 'text-top' ),
	'img_middle'              => array( '1', 'юккъе', 'посередине', 'middle' ),
	'img_bottom'              => array( '1', 'бухар', 'снизу', 'bottom' ),
	'img_text_bottom'         => array( '1', 'бухара-йоза', 'текст-снизу', 'text-bottom' ),
	'img_link'                => array( '1', 'хьажориг=$1', 'ссылка=$1', 'link=$1' ),
	'img_alt'                 => array( '1', 'альт=$1', 'alt=$1' ),
	'int'                     => array( '0', 'ЧУЬРА:', 'ВНУТР:', 'INT:' ),
	'sitename'                => array( '1', 'МЕТТИГ_ЦlЕ', 'НАЗВАНИЕ_САЙТА', 'SITENAME' ),
	'ns'                      => array( '0', 'БО:', 'ПИ:', 'NS:' ),
	'nse'                     => array( '0', 'БОХЬ:', 'ПИК:', 'NSE:' ),
	'localurl'                => array( '0', 'ХlОТТАЕЛЛА_МЕТТИГ:', 'ЛОКАЛЬНЫЙ_АДРЕС:', 'LOCALURL:' ),
	'localurle'               => array( '0', 'ХlОТТАЕЛЛА_МЕТТИГ_2:', 'ЛОКАЛЬНЫЙ_АДРЕС_2:', 'LOCALURLE:' ),
	'server'                  => array( '0', 'ГlУЛКХДИРИГ', 'СЕРВЕР', 'SERVER' ),
	'servername'              => array( '0', 'ГlУЛКХДЕЧУЬНА_ЦlЕ', 'НАЗВАНИЕ_СЕРВЕРА', 'SERVERNAME' ),
	'scriptpath'              => array( '0', 'НЕКЪ_ОЦ_МЕТТАКЕПА', 'ПУТЬ_К_СКРИПТУ', 'SCRIPTPATH' ),
	'stylepath'               => array( '0', 'ЙОМАНХАТl', 'ПУТЬ_К_СТИЛЮ', 'STYLEPATH' ),
	'grammar'                 => array( '0', 'ДОЖАР:', 'ПАДЕЖ:', 'GRAMMAR:' ),
	'gender'                  => array( '0', 'ВУ_ЙУ:', 'GENDER', 'ПОЛ:', 'GENDER:' ),
	'notitleconvert'          => array( '0', '__ХИЙЦАР_ДОЦУШ_КОЬРТЕ__', '__БЕЗ_ПРЕОБРАЗОВАНИЯ_ЗАГОЛОВКА__', '__NOTITLECONVERT__', '__NOTC__' ),
	'nocontentconvert'        => array( '0', '__ЙОЗА_ХИЙЦАР_ДОЦУШ__', '__БЕЗ_ПРЕОБРАЗОВАНИЯ_ТЕКСТА__', '__NOCONTENTCONVERT__', '__NOCC__' ),
	'currentweek'             => array( '1', 'КАРАРА_КlИР', 'ТЕКУЩАЯ_НЕДЕЛЯ', 'CURRENTWEEK' ),
	'currentdow'              => array( '1', 'КАРАРА_КlИРАН_ДЕ', 'ТЕКУЩИЙ_ДЕНЬ_НЕДЕЛИ', 'CURRENTDOW' ),
	'localweek'               => array( '1', 'МЕТТИГЕРА_КlИРА', 'МЕСТНАЯ_НЕДЕЛЯ', 'LOCALWEEK' ),
	'localdow'                => array( '1', 'МЕТТИГАН_КlИРАН_ДЕ', 'МЕСТНЫЙ_ДЕНЬ_НЕДЕЛИ', 'LOCALDOW' ),
	'revisionid'              => array( '1', 'ЦУЬНА_БАШХО', 'ИД_ВЕРСИИ', 'REVISIONID' ),
	'revisionday'             => array( '1', 'ДЕ_БАШХО', 'ДЕНЬ_ВЕРСИИ', 'REVISIONDAY' ),
	'revisionday2'            => array( '1', 'ДЕ_БАШХО_2', 'ДЕНЬ_ВЕРСИИ_2', 'REVISIONDAY2' ),
	'revisionmonth'           => array( '1', 'БЕТТА_БАШХО', 'МЕСЯЦ_ВЕРСИИ', 'REVISIONMONTH' ),
	'revisionyear'            => array( '1', 'ШО_БАШХО', 'ГОД_ВЕРСИИ', 'REVISIONYEAR' ),
	'revisiontimestamp'       => array( '1', 'КЪАСТАМ_ХЕНА_БАШХО', 'ОТМЕТКА_ВРЕМЕНИ_ВЕРСИИ', 'REVISIONTIMESTAMP' ),
	'revisionuser'            => array( '1', 'ДЕКЪАШХОН_БАШХО', 'ВЕРСИЯ_УЧАСНИКА', 'REVISIONUSER' ),
	'plural'                  => array( '0', 'ДУКХАЛЛИН_ТЕРАХЬ:', 'МНОЖЕСТВЕННОЕ_ЧИСЛО:', 'PLURAL:' ),
	'fullurl'                 => array( '0', 'МАЙАРРА_МЕТТИГ:', 'ПОЛНЫЙ_АДРЕС:', 'FULLURL:' ),
	'fullurle'                => array( '0', 'МАЙАРРА_МЕТТИГ_2:', 'ПОЛНЫЙ_АДРЕС_2:', 'FULLURLE:' ),
	'lcfirst'                 => array( '0', 'ХЬАЛХАР_ЭЛП_ЖИМА:', 'ПЕРВАЯ_БУКВА_МАЛЕНЬКАЯ:', 'LCFIRST:' ),
	'ucfirst'                 => array( '0', 'ХЬАЛХАР_ЭЛП_ДОККХА:', 'ПЕРВАЯ_БУКВА_БОЛЬШАЯ:', 'UCFIRST:' ),
	'lc'                      => array( '0', 'КЕГИЙЧУ_ЭЛПАШЦА:', 'МАЛЕНЬКИМИ_БУКВАМИ:', 'LC:' ),
	'uc'                      => array( '0', 'ДАККХИЙЧУ_ЭЛПАШЦА:', 'БОЛЬШИМИ_БУКВАМИ:', 'UC:' ),
	'raw'                     => array( '0', 'ТАЙАНЗА:', 'НЕОБРАБ:', 'RAW:' ),
	'displaytitle'            => array( '1', 'ГАЙТА_КОЬРТАМОГl', 'ПОКАЗАТЬ_ЗАГОЛОВОК', 'DISPLAYTITLE' ),
	'rawsuffix'               => array( '1', 'Т', 'Н', 'R' ),
	'newsectionlink'          => array( '1', '__ХЬАЖОРИГ_ОЦ_КЕРЛАЧУ_ДЕКЪАН__', '__ССЫЛКА_НА_НОВЫЙ_РАЗДЕЛ__', '__NEWSECTIONLINK__' ),
	'nonewsectionlink'        => array( '1', '__ЙОЦАШ_ХЬАЖОРИГ_ОЦ_КЕРЛАЧУ_ДЕКЪАН__', '__БЕЗ_ССЫЛКИ_НА_НОВЫЙ_РАЗДЕЛ__', '__NONEWSECTIONLINK__' ),
	'currentversion'          => array( '1', 'ЙОЛШЙОЛУ_БАШХО', 'ТЕКУЩАЯ_ВЕРСИЯ', 'CURRENTVERSION' ),
	'urlencode'               => array( '0', 'ИШАРЙИНА_МЕТТИГ:', 'ЗАКОДИРОВАННЫЙ_АДРЕС:', 'URLENCODE:' ),
	'anchorencode'            => array( '0', 'ИШАРЙАР_МЕТТИГАН', 'КОДИРОВАТЬ_МЕТКУ', 'ANCHORENCODE' ),
	'currenttimestamp'        => array( '1', 'КЪАСТАМ_ЙОЛУЧУ_ХАННА', 'ОТМЕТКА_ТЕКУЩЕГО_ВРЕМЕНИ', 'CURRENTTIMESTAMP' ),
	'localtimestamp'          => array( '1', 'КЪАСТАМ_МЕТТИГА_ХАННА', 'ОТМЕТКА_МЕСТНОГО_ВРЕМЕНИ', 'LOCALTIMESTAMP' ),
	'directionmark'           => array( '1', 'ХЬАЖОЧЕ_ХААМ', 'НАПРАВЛЕНИЕ_ПИСЬМА', 'DIRECTIONMARK', 'DIRMARK' ),
	'language'                => array( '0', '#МОТТ', '#ЯЗЫК:', '#LANGUAGE:' ),
	'contentlanguage'         => array( '1', 'МОТТ_ЧУЛАЦАМ', 'ЯЗЫК_СОДЕРЖАНИЯ', 'CONTENTLANGUAGE', 'CONTENTLANG' ),
	'pagesinnamespace'        => array( '1', 'АГlОНАШ_ОЦ_ЦlЕРАШКАХЬ:', 'СТРАНИЦ_В_ПРОСТРАНСТВЕ_ИМЁН:', 'PAGESINNAMESPACE:', 'PAGESINNS:' ),
	'numberofadmins'          => array( '1', 'АДМАНКУЬГАЛХОЙ_ДУКХАЛЛА', 'КОЛИЧЕСТВО_АДМИНИСТРАТОРОВ', 'NUMBEROFADMINS' ),
	'formatnum'               => array( '0', 'ТЕРАХЬАН_БАРАМХlОТТОР', 'ФОРМАТИРОВАТЬ_ЧИСЛО', 'FORMATNUM' ),
	'padleft'                 => array( '0', 'ЙУЗА_ХАРЦЕ', 'ЗАПОЛНИТЬ_СЛЕВА', 'PADLEFT' ),
	'padright'                => array( '0', 'ЙУЗА_БАКЪЕ', 'ЗАПОЛНИТЬ_СПРАВА', 'PADRIGHT' ),
	'special'                 => array( '0', 'белхан', 'гlуллакхан', 'служебная', 'special' ),
	'defaultsort'             => array( '1', 'ЛИСТАР_ЦАХЬЕХОР', 'ДОГlА_ЛИСТАРАН', 'СОРТИРОВКА_ПО_УМОЛЧАНИЮ', 'КЛЮЧ_СОРТИРОВКИ', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ),
	'filepath'                => array( '0', 'ОЦ_ХlУМАНТlЕ_НЕКЪ:', 'ПУТЬ_К_ФАЙЛУ:', 'FILEPATH:' ),
	'tag'                     => array( '0', 'къастам', 'къасто', 'къаст', 'метка', 'тег', 'тэг', 'tag' ),
	'hiddencat'               => array( '1', '__КЪАЙЛАХЙОЛУ_КАДЕГАР__', '__СКРЫТАЯ_КАТЕГОРИЯ__', '__HIDDENCAT__' ),
	'pagesincategory'         => array( '1', 'АГlОНАШ_ОЦУ_КАДЕГАРШЧОХЬ', 'СТРАНИЦ_В_КАТЕГОРИИ', 'PAGESINCATEGORY', 'PAGESINCAT' ),
	'pagesize'                => array( '1', 'АГlОН_БАРАМ', 'РАЗМЕР_СТРАНИЦЫ', 'PAGESIZE' ),
	'index'                   => array( '1', '__МЕТТИГТЕРАХЬ__', '__ИНДЕКС__', '__INDEX__' ),
	'noindex'                 => array( '1', '__МЕТТИГТЕРАХЬ_ЙОЦАШ__', '__БЕЗ_ИНДЕКСА__', '__NOINDEX__' ),
	'numberingroup'           => array( '1', 'ТЕРАХЬ_ОЦ_ТОБАНЦА', 'ЧИСЛО_В_ГРУППЕ', 'NUMBERINGROUP', 'NUMINGROUP' ),
	'staticredirect'          => array( '1', '__БУХЕХЬДЕРГ_ДlАСХЬАЖАЙАР__', '__СТАТИЧЕСКОЕ_ПЕРЕНАПРАВЛЕНИЕ__', '__STATICREDIRECT__' ),
	'protectionlevel'         => array( '1', 'ГlАРОЛЛИ_БАРАМ', 'УРОВЕНЬ_ЗАЩИТЫ', 'PROTECTIONLEVEL' ),
	'formatdate'              => array( '0', 'терахьибарам', 'форматдаты', 'formatdate', 'dateformat' ),
	'url_path'                => array( '0', 'ЙОМА', 'ПУТЬ', 'PATH' ),
	'url_wiki'                => array( '0', 'ЧЕХКА', 'ВИКИ', 'WIKI' ),
);

$messages = array(
# User preference toggles
'tog-underline'               => 'Кlел сиз хьака хьажориган:',
'tog-highlightbroken'         => 'Гайта йоцуш йолу хьажоригаш <a href="" class="new">ишта</a> (йа ишта<a href="" class="internal">?</a>).',
'tog-justify'                 => 'Нисде йоза шораллий агlонца',
'tog-hideminor'               => 'Къайладаха кигийра нисдарш оц могlама керла хийцамехь',
'tog-hidepatrolled'           => 'Къайладаха гlаролладина нисдарш оц могlама керла нисдашкахь',
'tog-newpageshidepatrolled'   => 'Къайлайаха гlароллайина агlонаш оц могlама керла агlонашкахь',
'tog-extendwatchlist'         => 'Шорбина тlехьажарна могlам, ша беригге а хийцамаш чубогlуш, тlяхьабина боцурш а',
'tog-usenewrc'                => 'Лелабе дика могlам керла чу хийцамашна (оьшу JavaScript)',
'tog-numberheadings'          => 'Ша шех хlитто терахь корташна',
'tog-showtoolbar'             => 'Гайта лакхара гlирсан дакъа нисйеш аттон оц редаккхар чохь (JavaScript)',
'tog-editondblclick'          => 'Нисйе агlонаш шозза тlетаlийча (JavaScript)',
'tog-editsection'             => 'Гайта хьажориг «нисйе» аьлла хlора агlона',
'tog-editsectiononrightclick' => 'Нисде дакъа шозза бакъехьар дахка тlетаlийча оцу кортан (JavaScript)',
'tog-showtoc'                 => 'Гойти коьртнаш (оцу агlонашна лаххара 3 коьртнашца)',
'tog-rememberpassword'        => 'Даглаца сан дlавазвалар хlокху гlулкхдечу гlирса тlяхь (цхьан $1 {{PLURAL:$1|де|ден|динахь}})',
'tog-watchcreations'          => 'Тlетоха ас кхоллина агlонаш тергаме могlам чу',
'tog-watchdefault'            => 'Тlетоха ас нисйина агlонаш тергаме могlам чу',
'tog-watchmoves'              => 'Тlетоха ас цlераш хийцина агlонаш тергаме могlам чу',
'tog-watchdeletion'           => 'Тlетоха ас дlайайина агlонаш тергаме могlам чу',
'tog-minordefault'            => 'Къастам бе нисйиначарн хlумцадеш кегийра долушсанна',
'tog-previewontop'            => 'Чуяккха хьалххьажар рéдоккхучу кора хьалха',
'tog-previewonfirst'          => 'Гайта хьалххьажар рéдоккхуче дехьа волуш',
'tog-nocache'                 => 'Ма латае гойтучун къайлаха латториг',
'tog-enotifwatchlistpages'    => 'Хаам бо зlе чухул, тергаме могlаман хийцамах лаьцна',
'tog-enotifusertalkpages'     => 'Хаам бо зlе чухул, долахь йолу дийцаре агlон хийцамах лаьцна',
'tog-enotifminoredits'        => 'Хаам бо зlе чухул, цхьа жимма а хийцамаш биняхь',
'tog-enotifrevealaddr'        => 'Гайта сан зlе оцу хаамаш барехь',
'tog-shownumberswatching'     => 'Гайта декъашхойн терахь, агlо латийна болу шай тергаме могlам юкъа',
'tog-oldsig'                  => 'Хьалххьажар долучу куьгтаlорна:',
'tog-fancysig'                => 'Шен вики-къастаман куьгтаlдар (ша шех хьажориг йоцуш)',
'tog-externaleditor'          => 'Лелайан арахьара рéдаккхар (гlулкхдириг леррина нисйина хила йеза, [//www.mediawiki.org/wiki/Manual:External_editors кхин дlа.])',
'tog-externaldiff'            => 'Лелабан арахьара диллагlарам башхо тарйо гlирс (гlулкхдириг леррина нисйина хила йеза, [//www.mediawiki.org/wiki/Manual:External_editors кхин дlа.])',
'tog-showjumplinks'           => 'Латайе гlодарна хьажоригаш «дехьа вала оцу»',
'tog-uselivepreview'          => 'Лелайа чехка хьалха хьажа (JavaScript, муха ю хьажарна)',
'tog-forceeditsummary'        => 'Дага даийта, нагахь нисйарх лаьцна чохь язъйина язахь',
'tog-watchlisthideown'        => 'Къайлаяха ас нисйинарш оцу тергаме могlам чура',
'tog-watchlisthidebots'       => 'Къайладаха шаболх бечо нисдинарш оцу тергаме могlам чура',
'tog-watchlisthideminor'      => 'Къайладаха кегийра нисдарш оцу тергаме могlам чура',
'tog-watchlisthideliu'        => 'Къайладаха вовзийтина болу декъашхойн нисдарш оцу тергаме могlам чура',
'tog-watchlisthideanons'      => 'Къайладаха къайлаха болу декъашхойн нисдарш оцу тергаме могlам чура',
'tog-watchlisthidepatrolled'  => 'Къайладаха хьаьжина волу нисдарш оцу тергаме могlам чура',
'tog-nolangconversion'        => 'Хаамаш кхуллу гlирс дlабайа',
'tog-ccmeonemails'            => 'Дlадахьийта суна исанна кехат, аса дохьуьйтуш долу кхечу декъашхошна.',
'tog-diffonly'                => 'Ма гайта агlон чулацам шина башхонца цхьатерра йолуш',
'tog-showhiddencats'          => 'Гайта къайлаха йолу кадегарш',
'tog-noconvertlink'           => 'Хааман хьажориг кхуллу гlирс дlабайа',
'tog-norollbackdiff'          => 'Йух яккхиначул тlаьхьа ма гайта къастаман башхо',

'underline-always'  => 'Даимна',
'underline-never'   => 'Цкъа а',
'underline-default' => 'Лелайа хьажгlодириг нисйарца',

# Font style option in Special:Preferences
'editfont-style'     => 'Рéдоккхучохь долу йозан тайп:',
'editfont-default'   => 'Йоза оцу хьажгlодириг нисйинчура',
'editfont-monospace' => 'Цхьатерра доцу йоза',
'editfont-sansserif' => 'Аьтта доцу йоза',
'editfont-serif'     => 'Аьтта долу йоза',

# Dates
'sunday'        => 'кlиран де',
'monday'        => 'Оршот',
'tuesday'       => 'Шинара',
'wednesday'     => 'Кхаара',
'thursday'      => 'Еара',
'friday'        => 'Пlераска',
'saturday'      => 'Шот',
'sun'           => 'Кlи',
'mon'           => 'Ор',
'tue'           => 'Ши',
'wed'           => 'Кх',
'thu'           => 'Еа',
'fri'           => 'Пle',
'sat'           => 'Шот',
'january'       => 'нажи бутт',
'february'      => 'мархи бутт',
'march'         => 'биэкарг бутт',
'april'         => 'тушоли бутт',
'may_long'      => 'сели бутт',
'june'          => 'мангал бутт',
'july'          => 'мятсел бутт',
'august'        => 'эгиш бутт',
'september'     => 'тав бутт',
'october'       => 'ардар бутт',
'november'      => 'эрх бутт',
'december'      => 'огой бутт',
'january-gen'   => 'нажи бутт',
'february-gen'  => 'мархи бутт',
'march-gen'     => 'биэкарг бутт',
'april-gen'     => 'тушоли бутт',
'may-gen'       => 'сели бутт',
'june-gen'      => 'мангал бутт',
'july-gen'      => 'мятсел бутт',
'august-gen'    => 'эгиш бутт',
'september-gen' => 'тав бутт',
'october-gen'   => 'ардар бутт',
'november-gen'  => 'эрх бутт',
'december-gen'  => 'огой бутт',
'jan'           => 'нажи бутт',
'feb'           => 'мархи бутт',
'mar'           => 'биэкарг бутт',
'apr'           => 'тушоли бутт',
'may'           => 'сели бутт',
'jun'           => 'мангал бутт',
'jul'           => 'мятсел бутт',
'aug'           => 'эгиш бутт',
'sep'           => 'тав бутт',
'oct'           => 'ардар бутт',
'nov'           => 'эрх бутт',
'dec'           => 'огой бутт',

# Categories related messages
'pagecategories'                 => '{{PLURAL:$1|Кадегар|Кадегарш}}',
'category_header'                => 'Агlонаш оц кадегаршчохь «$1»',
'subcategories'                  => 'Бухаркадегарш',
'category-media-header'          => 'Хlумнаш оцу кадегар чохь «$1»',
'category-empty'                 => "''Хlара кадегар хlинца йаьсса ю.''",
'hidden-categories'              => '{{PLURAL:$1|Къайлаха кадегар|Къайлаха йолу кадегарш}}',
'hidden-category-category'       => 'Къайлаха йолу кадегарш',
'category-subcat-count'          => '{{PLURAL:$2|Хlокх кадегар чохь ю хlокхуьна бухар кадегар.|{{PLURAL:$1|Гойташ $1 бухар кадегар|Гойту $1 бухар кадегар|Гойту $1 бухар кадегар}} оцу $2.}}',
'category-subcat-count-limited'  => 'Хlокх кадегар чохь {{PLURAL:$1|$1 бухар кадегар|$1 бухар кадегарша|$1 бухар кадегарш}}.',
'category-article-count'         => '{{PLURAL:$2|Хlокх кадегар чохь яц цхьа агlо бе.|{{PLURAL:$1|Гойташ $1 агlо|Гойту $1 агlонаш|Гойту $1 агlонаш}} хlокх кадегарца кху $2.}}',
'category-article-count-limited' => 'Хlокх кадегар чохь {{PLURAL:$1|$1 агlо|$1 агlонаш|$1 агlонаш}}.',
'category-file-count'            => '{{PLURAL:$2|Хlокх кадегар чохь цхьа хlум бе яц.|{{PLURAL:$1|Гойта $1 хlум|Гойту $1 хlума|Гойту $1 хlумнаш}} хlокх кадегарца кху $2.}}',
'category-file-count-limited'    => 'Хlокх кадегар чохь {{PLURAL:$1|$1 хlум|$1 хlума|$1 хlумнаш}}.',
'listingcontinuesabbrev'         => '(кхин дlа)',
'index-category'                 => 'Меттигтерахьйо агlонаш',
'noindex-category'               => 'Дlахьушйоцу агlонаш',

'linkprefix' => '/^(.*?)([a-zA-Z\\x80-\\xff]+)$/sD',

'about'         => 'Цуьнах лаьцна',
'article'       => 'Яззам',
'newwindow'     => '(керлачу корехь)',
'cancel'        => 'Цаоьшу',
'moredotdotdot' => 'Кхин дlа…',
'mypage'        => 'Долахь йолу агlо',
'mytalk'        => 'Сан дийцаре агlо',
'anontalk'      => 'Дийцаре хlара IP-долуметтиг',
'navigation'    => 'Шавигар',
'and'           => '&#32;а',

# Cologne Blue skin
'qbfind'         => 'Лаха',
'qbbrowse'       => 'Хьажар',
'qbedit'         => 'Нисйé',
'qbpageoptions'  => 'Агlо нисйар',
'qbpageinfo'     => 'Агlонах болу бовзам',
'qbmyoptions'    => 'Хьан нисдарш',
'qbspecialpages' => 'Леррина агlонаш',
'faq'            => 'СиХХ',
'faqpage'        => 'Project:СиХХ',

# Vector skin
'vector-action-addsection'       => 'Тlетоха хьедар',
'vector-action-delete'           => 'Дlадайá',
'vector-action-move'             => 'Цlе хийца',
'vector-action-protect'          => 'Гlаролла дé',
'vector-action-undelete'         => 'Меттахlоттадé',
'vector-action-unprotect'        => 'Гlароллех къаста',
'vector-simplesearch-preference' => 'Шуьйра лахаран хьехар лата де (декъа «Хьушйерг» кечйарца)',
'vector-view-create'             => 'Кхоллар',
'vector-view-edit'               => 'Нисйé',
'vector-view-history'            => 'Хьажа исторе',
'vector-view-view'               => 'Éшар',
'vector-view-viewsource'         => 'Билглонашка хьажа',
'actions'                        => 'Дийраш',
'namespaces'                     => 'Цlерийн ана',
'variants'                       => 'Кепараш',

'errorpagetitle'    => 'Гlалат',
'returnto'          => 'Юхагlо оцу агlоне $1.',
'tagline'           => 'Гlирс хlокхуьна бу {{grammar:genitive|{{SITENAME}}}}',
'help'              => 'Нисвохаам',
'search'            => 'Лаха',
'searchbutton'      => 'Лаха',
'go'                => 'Дехьа вала',
'searcharticle'     => 'Дехьа вала',
'history'           => 'Исторе',
'history_short'     => 'Исторе',
'updatedmarker'     => 'Керла яккхина со чуваьллачултlаьхьа',
'printableversion'  => 'Зорба туху варси',
'permalink'         => 'Даиман йолу хьажориг',
'print'             => 'Зорба тоха',
'view'              => 'Хьажа',
'edit'              => 'Нисйé',
'create'            => 'Кхолла',
'editthispage'      => 'Нисйé хlара агlо',
'create-this-page'  => 'Кхолла хlара агlо',
'delete'            => 'Дlадайá',
'deletethispage'    => 'Дlайайá хlара агlо',
'undelete_short'    => 'Меттахlоттайé $1 {{PLURAL:$1|нисйинарг|нисйинарш|нисйинарш}}',
'viewdeleted_short' => 'Хьажар {{PLURAL:$1|$1 дlадаьккхина нийсдар|$1 дlадаьхна нийсдарш|$1 дlадаьхна нийсдарш}}',
'protect'           => 'Гlаролла дé',
'protect_change'    => 'хийца',
'protectthispage'   => 'Гlаролла дé хlокху агlон',
'unprotect'         => 'Гlароллех къаста',
'unprotectthispage' => 'Гlароллех къаста',
'newpage'           => 'Керла агlо',
'talkpage'          => 'Дийцаре йила хlара агlо',
'talkpagelinktext'  => 'Дийцаре',
'specialpage'       => 'Белха агlо',
'personaltools'     => 'Долахь болу гlирсаш',
'postcomment'       => 'Керла дакъа',
'articlepage'       => 'Хьажа яззаме',
'talk'              => 'Дийцаре',
'views'             => 'Хьажарш',
'toolbox'           => 'Гlирсаш',
'userpage'          => 'Хьажа декъашхочуьна агlоне',
'projectpage'       => 'Хьажа кхолламан агlоне',
'imagepage'         => 'Хьажа хlуман агlоне',
'mediawikipage'     => 'Хьагайта хааман агlо',
'templatepage'      => 'Хьажа куцкепа агlоне',
'viewhelppage'      => 'Схьаэца нисвохаам',
'categorypage'      => 'Хьажа кадегарши агlоне',
'viewtalkpage'      => 'Хьажа дийцаре',
'otherlanguages'    => 'Кхечу маттахь дерш',
'redirectedfrom'    => '(Дlасахьажийна кху $1)',
'redirectpagesub'   => 'Агlо-дlасахьажайар',
'lastmodifiedat'    => 'Хlокху агlон тlаьххьаралера хийцам: $2, $1.',
'viewcount'         => 'Хlокху агlонга хьойсина $1 {{PLURAL:$1|за|за|за}}.',
'protectedpage'     => 'Гlароллийца йолу агlо',
'jumpto'            => 'Дехьавала оцу:',
'jumptonavigation'  => 'шавигар',
'jumptosearch'      => 'лаха',
'view-pool-error'   => 'Бехк цабиллар доьха, хlинц гlулкхдириг йоьттина йу.
Каьчна дуккха дехарш хlокху агlонтlе хьажарца.
Дехар до, собардеш а йуха хьажа хlокху агlонтlе жим тlаьхьо.

$1',
'pool-timeout'      => 'Сацо веза хан тlех йаьлла',
'pool-queuefull'    => 'Дехаршан чоь йуззина йу',
'pool-errorunknown' => 'Дойзаш доцу гlалат',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'            => '{{grammar:genitive|{{SITENAME}}}} лаьцна',
'aboutpage'            => 'Project:Цуьнах лаьцна',
'copyright'            => 'Чулацам лело мега догlуш хиларца оцу $1.',
'copyrightpage'        => '{{ns:project}}:Куьг де бакъо',
'currentevents'        => 'Хlинцлера хилларш',
'currentevents-url'    => 'Project:Хlинцлера хилларш',
'disclaimers'          => 'Бехк тlе ца эцар',
'disclaimerpage'       => 'Project:Бяхк тlецалацар',
'edithelp'             => 'Нисвохаам оцу редаккхарна',
'edithelppage'         => 'Help:Нисвохаам оцу редаккхарна',
'helppage'             => 'Help:Чулацам',
'mainpage'             => 'Коьрта агlо',
'mainpage-description' => 'Коьрта агlо',
'policy-url'           => 'Project:Бакъо',
'portal'               => 'Юкъаралла',
'portal-url'           => 'Project:Юкъараллин ков',
'privacy'              => 'Балалютта къайлаха',
'privacypage'          => 'Project:Балалютта къайлаха',

'badaccess'        => 'Тlекхачарехь гlалат',
'badaccess-group0' => 'Шуьга кхочуш далур дац дехарца деш дерг',
'badaccess-groups' => 'Дехарца деш дерг кхочуш далундерш бу хlара декъашхой оцу {{PLURAL:$2|тобанашах|тобанах}} $1.',

'versionrequired'     => 'Оьшу MediaWiki тайпанара $1',
'versionrequiredtext' => 'Болх бан хlоку агlонца оьшу MediaWiki тайпан $1. Хьажа. [[Special:Version|лелочу тайпанара башхонах лаьцна хаам]].',

'ok'                      => 'Хlаъ',
'pagetitle'               => '$1 — {{SITENAME}}',
'pagetitle-view-mainpage' => '{{SITENAME}}',
'retrievedfrom'           => 'Хьост — «$1»',
'youhavenewmessages'      => 'Хьуна кхечи $1 ($2).',
'newmessageslink'         => 'керла хаамаш',
'newmessagesdifflink'     => 'тlаьххьара хийцамаш',
'youhavenewmessagesmulti' => 'Хьуна кхаьчна керла хаам оцу $1',
'editsection'             => 'нисйé',
'editsection-brackets'    => '[$1]',
'editold'                 => 'нисйé',
'viewsourceold'           => 'хьажа йолш йолучу ишаре',
'editlink'                => 'нисйé',
'viewsourcelink'          => 'хьажа йолш йолучу ишаре',
'editsectionhint'         => 'Нисде даакъа: $1',
'toc'                     => 'Чулацам',
'showtoc'                 => 'гайта',
'hidetoc'                 => 'дlайаккха',
'collapsible-collapse'    => 'къайла яккха',
'collapsible-expand'      => 'хьайаста',
'thisisdeleted'           => 'Хьажа йа меттахlоттайé $1?',
'viewdeleted'             => 'Хьалххьожи $1?',
'restorelink'             => '{{PLURAL:$1|$1 дlайайина йолу нисйинарг|$1 дlайайина йолу нисйинарш|$1 дlайайина йолу нисйинарш}}',
'feedlinks'               => 'Оцу хатlаьхь:',
'feed-invalid'            => 'Тайпан нийсадоцу талол оцу куьгтаlорна.',
'feed-unavailable'        => 'Хаитарца йолу асанаш тlекхочучехь яц',
'site-rss-feed'           => '$1 — RSS-аса',
'site-atom-feed'          => '$1 — Atom-аса',
'page-rss-feed'           => '«$1» — RSS-аса',
'page-atom-feed'          => '«$1» — Atom-аса',
'feed-atom'               => 'Атом',
'feed-rss'                => 'RSS',
'red-link-title'          => '$1 (ишта агlо йоцуш йу)',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main'      => 'Яззам',
'nstab-user'      => 'Декъашхо',
'nstab-special'   => 'Белха агlо',
'nstab-project'   => 'Кхолламех',
'nstab-image'     => 'Хlум',
'nstab-mediawiki' => 'Хаам',
'nstab-template'  => 'Куцкеп',
'nstab-help'      => 'Нисвохаам',
'nstab-category'  => 'Кадегар',

# Main script and global functions
'nosuchaction'      => 'Ишта дийриг дац',
'nosuchspecialpage' => 'Ишта белха агlо йац',

# General errors
'error'               => 'Гlалат',
'databaseerror'       => 'Гlалат хаамийн бухера',
'readonly'            => 'Сацийна дlайаздар хаамийн бухе',
'missing-article'     => 'Хlокху чохь кароезаш йолу хьан дехарца йозан агlонаш цакарийна «$1» $2.

Иштнарг наггахь хуьлу хьажориг дlайаьккхина йалхь йа хийцам бина тиша хьажоригца дехьа вала гlоьртича.

Нагахьсан гlулкх цуьнах доьзна дацахь, хьуна карийна гlирс латточехь гlалат.
Дехар до, хаам бе оцуьнах [[Special:ListUsers/sysop|адаманкуьйгалхога]], гойтуш URL.',
'missingarticle-rev'  => '(варси № $1)',
'missingarticle-diff' => '(тейп тайпнара: $1, $2)',
'internalerror'       => 'Чоьхьара гlалат',
'internalerror_info'  => 'Чоьхьара гlалат: $1',
'badtitle'            => 'Цамегаш йолу цlе',
'badtitletext'        => 'Дехарца йолу агlонан цlе нийса яц, йаьсса ю, хила мега нийса ца хlоттийна меттаюкъар йа юкъарвики цlе. Хила мега, цlарца цамагош йолу саберг.',
'viewsource'          => 'Хьажар',
'protectedpagetext'   => 'Хlара агlо дlакъойлина йу рé цадаккхийта.',
'viewsourcetext'      => 'Хьоьга далундерг хьажар а дезахь хlокху агlон чура йоза хьаэцар:',
'protectedinterface'  => 'Хlара схьгайтарна гlирса хаамаш латтош йолу агlо йу. Гlуо лелачаьрга гал ца яккхийта, оцун хийцам ба магийна дац.',

# Login and logout pages
'yourname'                => 'Декъашхон цlе:',
'yourpassword'            => 'Ишар:',
'yourpasswordagain'       => 'Юха язъйе ишар:',
'remembermypassword'      => 'Даглаца сан дlавазвалар хlокху гlулкхдечу гlирса тlяхь (цхьан $1 {{PLURAL:$1|ден|динахь|динахь}})',
'yourdomainname'          => 'Хьан машан меттиг:',
'login'                   => 'Вовзийта хьой гlирсан',
'nav-login-createaccount' => 'Вовзийта хьой / дlавазло',
'loginprompt'             => 'Ахьа бакъо йала йеза оцу «cookies» хьайна вовзийта лаахь гlирсан.',
'userlogin'               => 'Чу вала йа дlавазло',
'userloginnocreate'       => 'Вовзийта хьой',
'logout'                  => 'Ара валар',
'userlogout'              => 'Ара валар',
'notloggedin'             => 'Хьо вовзита веза гlирсан',
'nologin'                 => "Хlинца дlа вазвин вац? '''$1'''.",
'nologinlink'             => 'Кхолла керла дlавазвалар',
'createaccount'           => 'Дlавазве керла декъашхо',
'gotaccount'              => "Дlавазвелла вуй хьо? '''$1'''.",
'gotaccountlink'          => 'Вовзийта хьой',
'createaccountmail'       => 'хааман зlене хула',
'loginerror'              => 'Гlалат ду декъашхо вовзарехь',
'nocookiesforlogin'       => '{{int:nocookieslogin}}',
'loginsuccesstitle'       => 'Хьо вовзар хаз чакхдели',
'loginsuccess'            => 'Хlинца ахьа болх бó оцу цlарца $1.',
'nosuchuser'              => 'Декъашхо цlарца $1 воцаш ву.
Декъашхой цlераш хаалуш йу дlайазвалрца элраш.
Нийса юьй хьажа цlе йа [[Special:UserLogin/signup|дlайазвалар кхолла керла]].',
'wrongpassword'           => 'Ахьа язъйина йолу ишар нийса яц. Хьажа йуху цхьаъз.',
'mailmypassword'          => 'Схьаэца керла ишар',
'accountcreated'          => 'Дlавазвар кхоллина дели',
'accountcreatedtext'      => 'Кхоллина декъашхо дlавазвар $1.',
'loginlanguagelabel'      => 'Мотт: $1',

# Change password dialog
'resetpass'                 => 'Ишар хийца',
'resetpass_text'            => '<!-- Кхузахь язъде хьай йоза -->',
'resetpass_header'          => 'Жамlаш дlаязвеллачуьна ишар хийцар',
'oldpassword'               => 'Шираелла ишар:',
'newpassword'               => 'Керла ишар:',
'retypenew'                 => 'Юха язъйе керла ишар:',
'resetpass-submit-loggedin' => 'Хийца ишар',
'resetpass-submit-cancel'   => 'Цаоьшу',

# Edit page toolbar
'bold_sample'     => 'Дерстино до йоза',
'bold_tip'        => 'Дерстино до йоза',
'italic_sample'   => 'Курсеттан до йоза',
'italic_tip'      => 'Курсеттан до йоза',
'link_sample'     => 'Хьажориган коьрта могlа',
'link_tip'        => 'Чоьхьа хьажориг',
'extlink_sample'  => 'http://www.example.com хьажориг корта',
'extlink_tip'     => 'Арахьа хьажориг (йиц ма йе хlотталушерг http://)',
'headline_sample' => 'Йозан корта',
'headline_tip'    => 'Корта 2-гlа локхаллийца',
'nowiki_sample'   => 'Чудиллийша кхузе барамхlоттонза йоза.',
'nowiki_tip'      => 'Тергал ца бо вики-бáрамхlоттор',
'image_sample'    => 'Example.jpg',
'image_tip'       => 'Чохь йолу хlум',
'media_sample'    => 'Example.ogg',
'media_tip'       => 'Хьажориг оцу медиа-хlуман',
'sig_tip'         => 'Хьан куьгтаlор аъ хlоттина хан',
'hr_tip'          => 'Ана сиз (сих сиха ма леладайша)',

# Edit pages
'summary'                          => 'Хийцамех лаьцна:',
'subject'                          => 'Дlахьедар/коьрта могlа:',
'minoredit'                        => 'Жим хийцам',
'watchthis'                        => 'Латайе хlара агlо тергаме могlам юкъа',
'savearticle'                      => 'Дlайазъé агlо',
'preview'                          => 'Хьалха муха ю хьажа',
'showpreview'                      => 'Хьалха муха ю хьажар',
'showdiff'                         => 'Хlоттина болу хийцам',
'anoneditwarning'                  => "'''Тергам бе''': Ахьа хьо вовзитина вац гlирсан. Хьан IP-долу меттиг дlаязйина хира ю хlокху агlон исторе чу.",
'summary-preview'                  => 'Цуьнах лаьцна хирду:',
'blockedtitle'                     => 'Декъашхо сацийна',
'accmailtitle'                     => 'Ишар дlаяхьийтина.',
'accmailtext'                      => "Ишар декъашхочуьна [[User talk:$1|$1]], йина ша шех хитта делла чу элпашах, дlаяхийтина хьокху хааман зlен чу $2.

Дlаязвинчултlяхьа, кху гlирса чохь шуьга хийцалур ю ''[[Special:ChangePassword|шай ишар]]''.",
'newarticle'                       => '(Kерла)',
'newarticletext'                   => "Хьо веана хьажоригци хlокху агlон тlе, хlара агlо хlинца йоцаш ю.
Нагахь иза кхолла лаахь, хlотта де лахо гуш долу корехь йоза (мадарра хьажа. [[{{MediaWiki:Helppage}}|гlон агlон чу]]).
Нагахь гlалат даьлла нисвелляхь кхузе, атта тlе тlаlа йе '''юха йоккхуриг''' хьай гlирса тlяхь.",
'anontalkpagetext'                 => "----''Хlара дийцаре агIо къайлаха волу декъашхочуьна  ю, хlинца дlавазвина воцуш, йа лелош воцуш.
Цундела иза вовзийта лелош ду терахьца IP-долу метаг.
Иза терахь долу меттиг хила мега кхечу декъашхойчух терра.
Нагахь хьо къайлах волу декъашхо валахь хьайна хаам кхаьчна аьлла хеташн, хьуна хьажийна доцуш, дехар до, кхолла хьай меттиг кху чохь[[Special:UserLogin/signup|дlавазло]] йа [[Special:UserLogin|хьой вовзийта]],",
'noarticletext'                    => "Хlокх хан чохь кху агlонца йоза дац.
Шуьга далундерг [[Special:Search/{{PAGENAME}}|лахар ишта хьехош йолу цlе]] кхечу яззамашкахь,
<span class=\"plainlinks\">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} лахар кхечу тептаршкахь],
йа '''[{{fullurl:{{FULLPAGENAME}}|action=edit}} кхолла ишта цlе йолу агlо]'''</span>.",
'noarticletext-nopermission'       => 'Хlокх хан чохь кху агlонца йоза дац.
Шуьга далундерг [[Special:Search/{{PAGENAME}}|лахар ишта хьехош йолу цlе]] кхечу яззамашкахь,
йа <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} лаха оцуьнах терадерг кхечу тептаршкахь].</span>',
'userpage-userdoesnotexist'        => 'Ишта дlайазвар «<nowiki>$1</nowiki>» хlинца дац. Хьажа билгал, хьуна бакъалла лаьи кхолла йа хийцам ба хlокху агlон.',
'updated'                          => '(Карла йаькхина)',
'note'                             => "'''Билгалдаккхар:'''",
'previewnote'                      => "'''Хlара хьалх хьажар ду, йоза хlинца язданза ду!'''",
'editing'                          => 'Редаккхар: $1',
'editingsection'                   => 'Редаккхар $1 (даакъа)',
'editingcomment'                   => 'Редаккхар $1 (керла даакъа)',
'editconflict'                     => 'Редаккхарна дойнаш: $1',
'yourtext'                         => 'Хьан йоза',
'yourdiff'                         => 'Башхаллаш',
'copyrightwarning'                 => "Тергаме хьажа, массо яззаман чутухуш долу йозан хийцам хьажарехь бу, арахоьцушсанна оцу бакъойалар хьоляхь $2 (хьаж. $1).
Нагахь хьо лууш вацахь хьай йозанаш маьрша даржа а кхечаьрга хийцам байта, мадаха уьш кху чу.<br />
Ишта чlагlо йой ахьа, айхьа далош долучуьн хьо куьг да ву аьлла, йа хьаэцна цхьан
хьостера, хийцам ба а дlаса даржада а чулацам болуш.<br />
'''МАТОХИЙШ БАКЪО ЙОЦУ ГlИРСАШ КХУ ЧУ, КУЬГ ДЕ БАКЪО ЛАР ЙЕШ ЙОЛУ!'''",
'readonlywarning'                  => "'''ДlАХЬЕДО. Гlирса бух сацийна оьшуш долучу хьаштан, цундера хlинц хьоьга дlа ца йазло хийцам. 
Хила мега, ахьа lалаш дан дезаш хьайн йоза, йуха тlаьхьо леладан иза йоза.'''

Адаманкуьйгалхочо сацийна гlирса бух, цо битина кхетош хlара хаам: $1",
'protectedpagewarning'             => "'''Дlахьедар. Хlара агlо гlаролла дина ю хийцам цабайта, иза хийца йа нисйа а бакъо йолуш адаманкуьйгалла лелош болу декъашхой бе бац.'''
Лахахьа гойту хаамаш тlаьхьара бина болу хийцамна тептар чура:",
'cascadeprotectedwarning'          => "'''Дlахьедар:''' Хlокху агlонна редаккха бакъо йолуш хlара тоба йу «Адаманкуьйгалхой», хlунда аьлча иза латийна {{PLURAL:$1|кхечу агlонца|кхечу агlонашца}} хlоттделлачу гlароллийца:",
'templatesused'                    => '{{PLURAL:$1|Куцкеп, лелийна|Куцкепаш, лелош ду}} хlокху агlон башхонца:',
'templatesusedpreview'             => '{{PLURAL:$1|Куцкеп, лелошдолу|Куцкепаш, лелошдолу}} оцу хьалх хьожучу агlонца:',
'template-protected'               => '(гlароллийца)',
'template-semiprotected'           => '(дуьззина доцуш гlаролла)',
'hiddencategories'                 => 'Хlара агlо чуйогlуш ю оцу $1 {{PLURAL:$1|къайлаха кадегарчу|къайлаха кадегаршчу|къайлаха кадегаршчу}}:',
'edittools'                        => '<!-- Кхузе буха диллина йоза гуш хир ду редоккхуче бухахь а хlума чуйоккхуче бухахь. -->',
'permissionserrorstext'            => 'Хьан бакъо яц кхочуш хилийта хийцам оцу {{PLURAL:$1|шолгlа бахьанца|шолгlа бахьанашца}}:',
'permissionserrorstext-withaction' => "Хьан бакъо яц хlумда «'''$2'''» оцу {{PLURAL:$1|шолгlа бахьанца|шолгlа бахьанашца}}:",
'recreate-moveddeleted-warn'       => "'''Тидам бе. Хьо ву (ле йу) йуха кхолла гlерташ яззам, хьалхо дlадайина долу.'''

Хьажа, билгалла оьши хьуна хlара яззам йуха кхолла.
Лахахь далина ду дlадайарш тlяхь долу тептарш а хlокх яззам цlера бина хийцамаш.",
'moveddeleted-notice'              => 'Иза агlо дlайайина йара.
Хаийтарна лахахьа гойту, цуьнца долу дlаяздарш кху дlадайина тептар чура а цlе хийцарш а.',
'log-fulllog'                      => 'Хьажа деригге тептаре',

# Parser/template warnings
'parser-template-loop-warning'            => 'Карийна куцкепаш юкъахь хилла шад: [[$1]]',
'parser-template-recursion-depth-warning' => 'Дозанал хьалаваьлла кlоргенца йух йуха дина куцкеп ($1)',

# "Undo" feature
'undo-success' => 'Нисйинарг а тlе цалаца мега. Дехар до, хьажа цхьатерра йуй башхо, тешна хила, баккъалла иза хийцам буйте хьуна безарг, тlакха тlе таlайе «дlайазйе агlо», хийцам хlотта ба.',

# History pages
'viewpagelogs'           => 'Гайта хlокху агlонан тептар',
'currentrev-asof'        => 'Хlинцлера варси оцу $1',
'revisionasof'           => 'Варси $1',
'previousrevision'       => '← Хьалха йоьдург',
'nextrevision'           => 'Тlаьхьайогlург →',
'currentrevisionlink'    => 'Хlинцлера варси',
'cur'                    => 'карара.',
'next'                   => 'кхин',
'last'                   => 'хьалх.',
'page_first'             => 'хьалхара',
'page_last'              => 'тlаьххьара',
'histlegend'             => "Кхетор: (хlинцлера.) — йолучу башхон къастам; (хьалх.) — хьалхлерачу башхон къастам; '''ж''' — жимо бозалца болу хийцам.",
'history-fieldset-title' => 'Хьажа исцlарерачу',
'histfirst'              => 'къена',
'histlast'               => 'хьалхо',
'historyempty'           => '(йаьсса)',

# Revision feed
'history-feed-item-nocomment' => '$1 оцу $2',

# Revision deletion
'rev-delundel'               => 'гайта/къайла',
'rev-showdeleted'            => 'гайта',
'revdelete-show-file-submit' => 'Хlаъ',
'revdelete-radio-same'       => '(ма хийца)',
'revdelete-radio-set'        => 'Хlаъ',
'revdelete-radio-unset'      => 'Хlахlа',
'revdelete-log'              => 'Бахьан:',
'revdel-restore'             => 'Хийцам бе схьагарехь',
'revdelete-reasonotherlist'  => 'Кхин бахьан',

# History merging
'mergehistory-reason' => 'Бахьан:',

# Merge log
'revertmerge' => 'Йекъа',

# Diffs
'history-title'            => '$1 — хийцаман исторе',
'difference'               => '(Тайпанара юкъар башхалла)',
'lineno'                   => 'Могlа $1:',
'compareselectedversions'  => 'Хаьржиначуьна башхо муха ю хьажа',
'showhideselectedversions' => 'Гайта/къайлайаха хаьржина башхонаш',
'editundo'                 => 'цаоьшу',

# Search results
'searchresults'                    => 'Лахарна хилам',
'searchresults-title'              => 'Лаха «$1»',
'searchresulttext'                 => 'Хlокху кхолламан агlонаш чохь лахарх лаьцна кхетош хаам, хьажа. [[{{MediaWiki:Helppage}}|нисвохааман дакъанчу]].',
'searchsubtitle'                   => 'Дехарца йолу «[[:$1]]» ([[Special:Prefixindex/$1|агlонаш, дlайуьлалуш йу хlо цlарца]]{{int:pipe-separator}}[[Special:WhatLinksHere/$1|тlетовжуш йу хlо цlарна]])',
'searchsubtitleinvalid'            => 'Кху дехарца «$1»',
'notitlematches'                   => 'Агlонаши цlерашца цхьатера йогlуш яц',
'notextmatches'                    => 'Агlонаш чура йозанашца цхьатера йогlуш яц',
'prevn'                            => '{{PLURAL:$1|хьалхарниг $1|хьалхарнаш $1|хьалхарнаш $1}}',
'nextn'                            => '{{PLURAL:$1|тlаьхьйогlург $1|тlаьхьйогlурш $1|тlаьхьйогlурш $1}}',
'viewprevnext'                     => 'Хьажа ($1 {{int:pipe-separator}} $2) ($3)',
'searchmenu-legend'                => 'Лахарна гlирс нисба',
'searchmenu-exists'                => "'''Хlокху вики-кхолламашца йолуш ю ишта агlо «[[:$1]]»'''",
'searchmenu-new'                   => "'''Кхолла ишта агlо «[[:$1]]» хlокху вики-кхолламашчохь!'''",
'searchhelp-url'                   => 'Help:Чулацам',
'searchmenu-prefix'                => '[[Special:PrefixIndex/$1|Гайта агlонаш ишта хlоттам болуш]]',
'searchprofile-articles'           => 'Къаьстина агlонаш',
'searchprofile-project'            => 'Нисвохааман агlонаш а кхолламаш',
'searchprofile-images'             => 'Мялтомшхгl',
'searchprofile-everything'         => 'Массанхьа',
'searchprofile-advanced'           => 'Шуьйра',
'searchprofile-articles-tooltip'   => 'Лаха оцу $1',
'searchprofile-project-tooltip'    => 'Лаха оцу $1',
'searchprofile-images-tooltip'     => 'Хlумнаш лахар',
'searchprofile-everything-tooltip' => 'Лаха массо агlонашкахь (дийцаре агlонашцани)',
'searchprofile-advanced-tooltip'   => 'Лаха дехарца хlокху ана цlерашкахь',
'search-result-size'               => '$1 ({{PLURAL:$2|$2 дош|$2 дешнаш|$2 дешнаш}})',
'search-redirect'                  => '(дlасахьажийна $1)',
'search-section'                   => '(дакъа $1)',
'search-suggest'                   => 'Хила мега ахьа лоьхарг: $1',
'search-interwiki-caption'         => 'Гергара кхолламаш',
'search-interwiki-default'         => '$1 хилам.:',
'search-interwiki-more'            => '(кхин)',
'search-mwsuggest-enabled'         => 'хьехаршца',
'search-mwsuggest-disabled'        => 'хьехар доцуш',
'searcheverything-enable'          => 'Массо цIера анахь лахар',
'searchrelated'                    => 'хlоттаделларг',
'searchall'                        => 'массо',
'showingresults'                   => 'Лахахьа {{PLURAL:$1|гойта|гойту|гойту}} <strong>$1</strong> {{PLURAL:$1|хилам|хиламаш|хиламаш}}, дlаболало кху № <strong>$2</strong>.',
'showingresultsheader'             => "{{PLURAL:$5|Хилам '''$1''' кху '''$3'''|Хиламаш '''$1 — $2''' кху '''$3'''}} оцун '''$4'''",
'nonefound'                        => "'''Билгалдаккхар.''' Хlумма цадеш lад йитича массо цlеран энахь цалоху. Лела йе тlехуттург ''all:'', лахийта массо цlеран энахь (юкъадалош декъашхойн дийцарш а куцкепаш а кхин дерг.), йа хlотта йе оьшуш йолу цlеран эна.",
'search-nonefound'                 => 'Дехарар терра цхьа хlума цакарийна.',
'powersearch'                      => 'Шуьйра лахар',
'powersearch-legend'               => 'Шуьро лахар',
'powersearch-ns'                   => 'Цlераши анахь лахар:',
'powersearch-redir'                => 'Схьагайта дlасахьажийнарш',
'powersearch-field'                => 'Лаха',
'powersearch-toggleall'            => 'Массо',
'powersearch-togglenone'           => 'Хlумма цаоьшу',

# Preferences page
'preferences'         => 'Гlирс нисбан',
'mypreferences'       => 'Гlирс нисбан',
'changepassword'      => 'Хийцамба ишарна',
'skin-preview'        => 'Хьалха муха ю хьажа',
'prefs-beta'          => 'Гlоле таронаш',
'prefs-datetime'      => 'Терахь а хан',
'prefs-labs'          => 'Муха ю хьажарна таронаш',
'prefs-personal'      => 'Долахь болу хаамаш',
'prefs-rc'            => 'Керла нисдарш',
'prefs-watchlist'     => 'Тергаме могlам',
'prefs-misc'          => 'Кхин гlирсаш',
'prefs-resetpass'     => 'Хийца ишар',
'prefs-rendering'     => 'Арахьара хатl',
'saveprefs'           => 'lалашдан',
'prefs-editing'       => 'Редаккхар',
'searchresultshead'   => 'Лаха',
'timezonelegend'      => 'Сахьатан аса:',
'prefs-searchoptions' => 'Лахарна гlирс нисба',
'prefs-files'         => 'Хlумнаш',
'youremail'           => 'Кехат яздо зlе цlе:',
'username'            => 'Дlаязвиначуьна цlе:',
'yourrealname'        => 'Хьан бакъ цlе:',
'yourlanguage'        => 'Юкъардекъа мотт:',
'yourvariant'         => 'Метта башхо',
'yourgender'          => 'Ву/Йу:',
'gender-unknown'      => 'хlоттийна яц',
'gender-male'         => 'борша',
'gender-female'       => 'сте',
'prefs-help-email'    => 'Кехат яздо зlен цlе цахlоттийча аъ хlумма дац, амма иза оьшар ю, нагахь хьуна хьай ишар йицлахь.',
'prefs-diffs'         => 'Башхон варси',

# User rights
'userrights'  => 'Декъашхочуьн бакъона урхалладар',
'editinguser' => "Хийца декъашхочуьна бакъо '''[[User:$1|$1]]''' ([[User talk:$1|{{int:talkpagelinktext}}]]{{int:pipe-separator}}[[Special:Contributions/$1|{{int:contribslink}}]])",

# Groups
'group'            => 'Тоба:',
'group-user'       => 'Декъашхой',
'group-bot'        => 'Шаболххой',
'group-sysop'      => 'Адаманкуьйгалхой',
'group-bureaucrat' => 'Даржахой',
'group-suppress'   => 'Левисорхой',
'group-all'        => '(массо)',

'group-user-member'       => 'декъашхо',
'group-bot-member'        => 'шаболххо',
'group-sysop-member'      => 'адманкуьйгалхо',
'group-bureaucrat-member' => 'даржахо',
'group-suppress-member'   => 'левисорхо',

'grouppage-user'       => '{{ns:project}}:Декъашхой',
'grouppage-bot'        => '{{ns:project}}:Шаболххой',
'grouppage-sysop'      => '{{ns:project}}:Адаманкуьйгалхой',
'grouppage-bureaucrat' => '{{ns:project}}:Даржахой',
'grouppage-suppress'   => '{{ns:project}}:Левисорхой',

# User rights log
'rightslog' => 'Декъашхон бакъона тéптар',

# Associated actions - in the sentence "You do not have permission to X"
'action-edit' => 'нисйа хlара агlо',

# Recent changes
'nchanges'                       => '$1 {{PLURAL:$1|хийцам|хийцамаш|хийцамаш}}',
'recentchanges'                  => 'Керла нисдарш',
'recentchanges-legend'           => 'Гlирс нисбарна керла нисдарш',
'recentchanges-feed-description' => 'Тергам бе тlаьхьара вики хийцаман хlокху ларца.',
'recentchanges-label-newpage'    => 'Оцу нисдарца кхоллина керла агlо.',
'recentchanges-label-minor'      => 'Хlара нисдинарг къастийна жимо долушсан',
'rcnote'                         => "{{PLURAL:$1|Тlаьххьара '''$1''' хийцам|Тlаьххьара '''$1''' хийцамаш|Тlаьххьара '''$1''' хийцамаш}} за '''$2''' {{PLURAL:$2|де|дийнахь|дийнахь}}, оцу хан чохь $5 $4.",
'rclistfrom'                     => 'Гайта хийцам оцу $1.',
'rcshowhideminor'                => '$1 кегийра нисдарш',
'rcshowhidebots'                 => '$1 шабелхалой',
'rcshowhideliu'                  => '$1 вовзитар долу декъашхой',
'rcshowhideanons'                => '$1 хьулбелларш',
'rcshowhidemine'                 => '$1 айхьа нисдинарш',
'rclinks'                        => 'Гайта тlаьхьара $1 хийцамаш оцу $2 ден<br />$3',
'diff'                           => 'тейп тайпнара',
'hist'                           => 'исторе',
'hide'                           => 'Къайлаяккха',
'show'                           => 'Гайта',
'minoreditletter'                => 'ж',
'newpageletter'                  => 'К',
'boteditletter'                  => 'б',
'rc_categories_any'              => 'Муьлхаа',
'newsectionsummary'              => '/* $1 */ Керла хьедар',
'rc-enhanced-expand'             => 'Гайта ма дарра дерг (лелош ю JavaScript)',
'rc-enhanced-hide'               => 'Ма дарра дерг къайладаккха',

# Recent changes linked
'recentchangeslinked'         => 'Кхуьнца долу нисдарш',
'recentchangeslinked-feed'    => 'Кхуьнца долу нисдарш',
'recentchangeslinked-toolbox' => 'Кхуьнца долу нисдарш',
'recentchangeslinked-title'   => 'Кхуьнца долу нисдарш $1',
'recentchangeslinked-summary' => "Хlара хийцам биначу агlонашан могlам бу, тlетовжар долуш хьагучу агlон (йа хьагойтуш йолучу кадегарна).
Агlонаш юькъайогlуш йолу хьан [[Special:Watchlist|тергаме могlам чохь]] '''къастийна йу'''.",
'recentchangeslinked-page'    => 'Агlон цlе:',
'recentchangeslinked-to'      => 'Кхечу агlор, гайта хийцамаш агlонашца, хlоттийначу агlонтlе хьажориг йолуш',

# Upload
'upload'                    => 'Чуйаккха хlум',
'uploadbtn'                 => 'Чуйаккха хlум',
'uploadlogpage'             => 'Чуйахаран тéптар',
'uploadlogpagetext'         => 'Лахахьа гойтуш бу могlам тlаьххьара чуяхна хlумнаши. Ишта хьажа. [[Special:ImageList|хlумнаши могlам]] йа [[Special:NewImages|галеларе хlумнаши]].',
'filename'                  => 'Хlуман цlе',
'uploadwarning'             => 'Дlахьедар',
'uploadedimage'             => 'чуяккхина «[[$1]]»',
'filename-prefix-blacklist' => '#<!-- битийша хlара могlа ша мабарра --> <pre>
# Бухасиз шолгlа:
#  * Массо, саболчунтlийра йуьлалуш ерш «#» хуьлу хетаме дерг (могlа чекх балац)
#  * Хlора баьсса боцу могlа — хlман цlе лораш йу, терахьца сурт доккхучо луш ма хиллар
CIMG # Casio
DSC_ # Nikon
DSCF # Fuji
DSCN # Nikon
DUW # ишта цхьаболу лера гlирс а
IMG # еригге
JD # Jenoptik
MGP # Pentax
PICT # тайп тайпан
 #</pre> <!-- битийша хlара могlа ша мабарра -->',

'license' => 'Бакъойалар:',

# Special:ListFiles
'listfiles_search_for'  => 'Лаха хIуман цIарца:',
'imgfile'               => 'хlум',
'listfiles'             => 'Хlумнаши могlам',
'listfiles_name'        => 'Хlуман цlе',
'listfiles_user'        => 'Декъашхо',
'listfiles_size'        => 'Барам',
'listfiles_description' => 'Цуьнах лаьцна',

# File description page
'file-anchor-link'                  => ' Хlум',
'filehist'                          => 'Хlуман исторе',
'filehist-help'                     => 'Тlетаlаде терахь/хан, муха хилла хьажарна и хlум.',
'filehist-deleteall'                => 'дlадайá массо',
'filehist-deleteone'                => 'дlадайá',
'filehist-current'                  => 'карара',
'filehist-datetime'                 => 'Терахь/Хан',
'filehist-thumb'                    => 'Жима',
'filehist-thumbtext'                => 'Жимо башхо оцу $1',
'filehist-user'                     => 'Декъашхо',
'filehist-dimensions'               => 'Хlуман барам',
'filehist-comment'                  => 'Билгалдаккхар',
'imagelinks'                        => 'Хьажоригаш оцу хlуман',
'linkstoimage'                      => '{{PLURAL:$1|Тlаьхьайогlу $1 агlо тlетойжина|Тlаьхьайогlу $1 агlонаш тlетойжина|Тlаьхьайогlу $1 агlонаш тlетойжина}} хlокху хlуман:',
'sharedupload'                      => 'Хlара хlума оцун $1 чура ю иза хила мега лелош кхечу кхолламашкахь.',
'uploadnewversion-linktext'         => 'Чуяккха керла башхо хlокху хlуман',
'shared-repo-name-wikimediacommons' => 'Викидlайуллуче',

# File reversion
'filerevert-submit' => 'Юхаяккха',

# File deletion
'filedelete-legend'           => 'Дlайайá и хlум',
'filedelete-submit'           => 'Дlадайá',
'filedelete-otherreason'      => 'Кхин бахьан:',
'filedelete-reason-otherlist' => 'Кхин бахьан',

# MIME search
'mimesearch' => 'MIME хула лаха',

# Unwatched pages
'unwatchedpages' => 'Цхьамо тергам ца беш йолу агIонаш',

# List redirects
'listredirects' => 'ДIасахьажоран могIам',

# Unused templates
'unusedtemplates' => 'Лелош доцу куцкепаш',

# Random page
'randompage' => 'Цахуаш нисйелла агlо',

# Random redirect
'randomredirect' => 'Ца хууш нисделла дIасахьажор',

# Statistics
'statistics'                   => 'Бухехьдерг',
'statistics-header-pages'      => 'Агlонашан жамlа',
'statistics-header-edits'      => 'Нисдаран жамlа',
'statistics-header-users'      => 'Декъашхойн жамlа',
'statistics-articles'          => 'Яззамаш',
'statistics-pages'             => 'Агlонаш',
'statistics-pages-desc'        => 'Массо вики агlонаш, дийцаре агlонашцани, дlасахьаждарш а кхин дерш.',
'statistics-files'             => 'Чуйаьхна хlумнаш',
'statistics-edits'             => 'Нисдаран дукхалла {{grammar:genitive|{{SITENAME}}}} дlа йолайаларца',
'statistics-edits-average'     => 'Йукъера агlонан нисдаран терхь',
'statistics-users-active'      => 'Жигар декъашхой',
'statistics-users-active-desc' => 'Декъашхой, муьлха цхьа хlум дина болу, кху {{PLURAL:$1|тlаьххьара $1 динахь|тlаьххьара $1 дийнахь}}',

'disambiguations' => 'Дуккха маьIнаш долу хьажорца йолу агIонаш',

'doubleredirects'            => 'ШалгIа дIасахьажийнарш',
'double-redirect-fixed-move' => 'Агlон [[$1]] цlе хийцна, хlинца иза дlахьажийна оцу [[$2]]',

'brokenredirects'        => 'ДIахаьдна долу дIасахьажораш',
'brokenredirects-edit'   => 'нисйé',
'brokenredirects-delete' => 'дlадайá',

'withoutinterwiki'        => 'Кхечу меттанашан хьажориг йоцу агIонаш',
'withoutinterwiki-submit' => 'Гайта',

'fewestrevisions' => 'ЧIогIа кIезиг башхонаш йолу агIонаш',

# Miscellaneous special pages
'nbytes'                  => '$1 {{PLURAL:$1|цlинцl|цlинцlа|цlинацl}}',
'ncategories'             => '$1 {{PLURAL:$1|кадегар|кадегарш|кадегарш}}',
'nmembers'                => '$1 {{PLURAL:$1|хlум|хlума|хlумнаш}}',
'specialpage-empty'       => 'Дехаро хlумма ца елла.',
'lonelypages'             => 'Байлахь йисина агIонаш',
'uncategorizedpages'      => 'Кадегар йоцу агIонаш',
'uncategorizedcategories' => 'Кадегар йоцу кадегарш',
'uncategorizedimages'     => 'Кадегар йоцу хIумнаш',
'uncategorizedtemplates'  => 'Кадегар йоцу куцкепаш',
'unusedcategories'        => 'Йаьсса кадегарш',
'wantedcategories'        => 'Оьшуш йолу кадегарш',
'wantedpages'             => 'Оьшуш йолу агIонаш',
'wantedfiles'             => 'Оьшуш йолу хIумнаш',
'wantedtemplates'         => 'Оьшуш долу куцкепаш',
'mostlinked'              => 'Дуккха хьажоригаш тIе тоьхна йолу агIонаш',
'mostlinkedcategories'    => 'Дуккха тIе хьажораш йолу кадегарш',
'mostlinkedtemplates'     => 'Массарел дуккха а леладо куцкепаш',
'mostcategories'          => 'Дуккха кадегарш тIе тоьхна йолу агIонаш',
'mostimages'              => 'Массарел дуккха лелайо хlумнаш',
'mostrevisions'           => 'Сих сиха нисйина йолу агIонаш',
'prefixindex'             => 'Хьалха агlонашан цlераш хlотто йеза',
'shortpages'              => 'Боцоа яззамаш',
'longpages'               => 'Беха яззамаш',
'deadendpages'            => 'Дика йоцу агIонаш',
'protectedpages'          => 'ГIаролла дина агIонаш',
'protectedtitles'         => 'Ца магийна йолу цIераш',
'listusers'               => 'Декъашхой могlам',
'newpages'                => 'Керла агlонаш',
'newpages-username'       => 'Декъашхо:',
'ancientpages'            => 'Яззамаш оцу терахьца тяххьара редаккхар дина долу',
'move'                    => 'Цlе хийца',
'movethispage'            => 'Хlокху агlон цlе хийца',
'unusedimagestext'        => 'Дехар до, тидаме эца, кхин йолу дуьнана машан-меттигаш а лелош хила мега нисса йогlу хьажориг (URL) хlокху хlуман, хlокху могlаме йогlуш ялахь яцахь а иза хила мега жигара лелош.',
'pager-newer-n'           => '{{PLURAL:$1|алсамо керла|алсамо керланаш|алсамо керлачарех}} $1',
'pager-older-n'           => '{{PLURAL:$1|алсамо къена|алсамо къенанаш|алсамо къеначарех}} $1',

# Book sources
'booksources'               => 'Жайнан хьосташ',
'booksources-search-legend' => 'Жайнех лаьцна хаам лахар',
'booksources-go'            => 'Лаха',

# Special:Log
'specialloguserlabel'  => 'Декъашхо:',
'speciallogtitlelabel' => 'Корта:',
'log'                  => 'Тéптарш',
'all-logs-page'        => 'Деригге тléкхочучéхь долу тéптарш',
'alllogstext'          => 'Массо тéптар могlам. {{SITENAME}}.
Шуьга харжалур бу хилам оцу тептаре хьаьжжина, декъашхон цlе (дlаязвар диц а цадеш) йа иза хьакхавелла агlонаш (ишта дlаязвар а диц цадеш).',

# Special:AllPages
'allpages'         => 'Массо агlонаш',
'alphaindexline'   => 'оцу $1 кху $2',
'prevpage'         => 'Хьалхалера агlо ($1)',
'allpagesfrom'     => 'Гучé яха агlонаш, йуьлалуш йолу оцу:',
'allpagesto'       => 'Арайахар сацадé оцу:',
'allarticles'      => 'Массо агlонаш',
'allinnamespace'   => 'Массо агlонаш оцу цlери анахь «$1»',
'allpagesnext'     => 'Тlаьхьайогlурш',
'allpagessubmit'   => 'Кхочушдé',
'allpagesprefix'   => 'Лаха агlонаш, дlайуьлалуш йолу:',
'allpagesbadtitle' => 'Цамагош йолу агlон цlе. Коьрта могlан юкъах ю юкъарвики меттанашан юкъе тlечlагlйина йолу хьаьрк йа магийна доцу оцу коьрта моlанца сабол элп йа кхин.',
'allpages-bad-ns'  => '{{SITENAME}} кху чохь ана цlераш яц «$1».',

# Special:Categories
'categories' => 'Кадегарш',

# Special:DeletedContributions
'deletedcontributions'             => 'Декъашхочуьн дlабайина къинхьегам',
'sp-deletedcontributions-contribs' => 'къинхьегам',

# Special:LinkSearch
'linksearch'      => 'Арахьа хьажориг',
'linksearch-ok'   => 'Лаха',
'linksearch-line' => '$2 — хьажориг кху $1',

# Special:ListUsers
'listusers-submit' => 'Гайта',

# Special:ActiveUsers
'activeusers' => 'Жигар декъашхой могlам',

# Special:Log/newusers
'newuserlogpage' => 'Декъашхой дlабазбина тептар',

# Special:ListGroupRights
'listgrouprights'          => 'Декъашхойн тобанаши бакъонаш',
'listgrouprights-group'    => 'Тоба',
'listgrouprights-helppage' => 'Help:Тобан бакъонаш',
'listgrouprights-members'  => '(тобан могlам)',

# E-mail user
'emailuser'       => 'Декъашхочун хааман кехат',
'defemailsubject' => 'Хаам {{grammar:genitive|{{SITENAME}}}} чура бу',
'emailmessage'    => 'Хаам:',

# Watchlist
'watchlist'         => 'Тергаме могlам',
'mywatchlist'       => 'Тергаме могlам',
'watchnologin'      => 'Хьо вовзита веза гlирсан',
'addedwatchtext'    => 'Хlар агlо «[[:$1]]» тlетоьхна хьан [[Special:Watchlist|тидаме могlам чу]].
Тlаьхьабогlу хийцамаш хlокх агlонна а кхунца дозуш долу дийцаре агlо а дlаяздийра ду кху могlамашкахь, ишта къастина хирду уьш шуьрочу элпашца хlокх агlон чохь [[Special:RecentChanges|керла хийцаме могlамашкахь]], бгlаьран га атту болуш.',
'removedwatchtext'  => 'Агlо «[[:$1]]» дlаяккхина йара хьан [[Special:Watchlist|тергаме могlам юкъар]].',
'watch'             => 'Тидам бе',
'watchthispage'     => 'Тергам бé хlокху агlон',
'unwatch'           => 'Тергамах къаста',
'notanarticle'      => 'Бац яззам',
'watchlist-details' => 'Хьан тергаме могlамца $1 {{PLURAL:$1|агlо|агlонаш|агlонаш}} ю, дийцаре агlонаша йоцуш.',
'wlnote'            => 'Лахахьа {{PLURAL:$1|тlаьхьа богlу $1 хийцам|тlаьхьа богlу $1 хийцамаш|тlаьхьа богlу $1 хийцамаш}} хlокху {{PLURAL:$2|тlаьхьар|тlаьхьара|тlаьхьара}} <strong>$2</strong> {{plural:$2|сохьт|сохьатехь|сохьташкахь}}.',
'wlshowlast'        => 'Гайта тlаьххьара $1 сахьташ $2 денош $3',
'watchlist-options' => 'Тергаме могlаман гlирс нисбар',

# Displayed when you click the "watch" button and it is in the process of watching
'watching'   => 'Тергаме мlогаман юкъаяккха…',
'unwatching' => 'Тергаме мlогаман чура дlайаккха…',

'enotif_newpagetext' => 'Хlара керла агlо ю.',

# Delete
'deletepage'            => 'Дlайайá агlо',
'confirm'               => 'Къобалде',
'excontent'             => 'чуьраниг: «$1»',
'excontentauthor'       => 'чуьраниг: «$1» (дуьххьара кхоллина да вара иза [[Special:Contributions/$2|$2]])',
'exbeforeblank'         => 'чуьраниг дlацlанйале хьалха: «$1»',
'exblank'               => 'агlо йаьсса йара',
'delete-legend'         => 'Дlадайáр',
'confirmdeletetext'     => 'Хьан дехар ду хlара агlо ше бухци дlабайа аьлла (йа сурт) а массо цуьнан исторе оцу бух чура. Дехар до, бакъде, билгала хьайна иза лаахь, кхеташ хира ву хьо тlаьхьа хир долу чун, иза деш ду ахьа бакъонца догlуш, вахьа дехкина долучу дакъанца [[{{MediaWiki:Policy-url}}]].',
'actioncomplete'        => 'Дешдерг кхочушди',
'deletedtext'           => '«$1» дlаяккхина йара.
Хьажа. $2 хьажарна оцу тlаьхьара дlадайаран могlаме.',
'dellogpage'            => 'Дlадайарш долу тéптар',
'deletionlog'           => 'дlадайарш долу тéптар',
'deletecomment'         => 'Бахьан:',
'deleteotherreason'     => 'Кхин бахьан/тlетохар:',
'deletereasonotherlist' => 'Кхин бахьан',

# Rollback
'rollbacklink' => 'йухаяккха',
'revertpage'   => 'Нисдарш [[Special:Contributions/$2|$2]] ([[User talk:$2|дийцаре]]) йуха йаьхна башхаллийн [[User:$1|$1]]',

# Protect
'protectlogpage'              => 'Гlаролли тептар',
'protectedarticle'            => 'гlаролла дина агlо «[[$1]]»',
'modifiedarticleprotection'   => 'агlонан гlаролли локхалла хийцина «[[$1]]»',
'prot_1movedto2'              => '«[[$1]]» цlе хийцина оцу «[[$2]]»',
'protectcomment'              => 'Бахьан:',
'protectexpiry'               => 'Чекхйолу:',
'protect_expiry_invalid'      => 'Нийса йоцу хан гlаролла дlайаларехь.',
'protect_expiry_old'          => 'Хан чаккхе — хьалхалера.',
'protect-text'                => "Кхузéхь хьо хьажало хийцалуш гlаролли локхалла оцу агlонашна '''$1'''.",
'protect-locked-access'       => "Хьан дlаязваларéхь тоъал бакъо яц гlароллийн локхаллéхь агlон хийцам бá. Дlадоьлху хlоттийнарш оцу агlонна '''$1''':",
'protect-cascadeon'           => 'Хlара агlо гlароллийца ю, хlунд аьлча иза латийна {{PLURAL:$1|лахахьа гойтучу агlонца, цуьнца хlоттийна|лахахьа гойтучу агlоншца, цаьрца хlоттийна}} чахчарийца гlаролла. Хьога хийцалур ю гlаролли локхалла хlокху агlон, амма оцо хийцам бийра бац чахчарехь йолучу гlароллийна.',
'protect-default'             => 'Гlаролла йоцуш',
'protect-fallback'            => 'Бакъо оьшу «$1»',
'protect-level-autoconfirmed' => 'Гlаролла дé оцу керла а дlабазбина боцучу декъашхойх',
'protect-level-sysop'         => 'Адманкуьйгалхой бé',
'protect-summary-cascade'     => 'чахчареца',
'protect-expiring'            => 'чакхйолу $1 (UTC)',
'protect-expiry-indefinite'   => 'хан чаккхе йоцуш',
'protect-cascade'             => 'Гlаролла йé агlонаш, хlокху агlонца хlоттайелларш (чахчарé гlаролла)',
'protect-cantedit'            => 'Хьéга хийцам цабало хlокху агlон гlаролли локхалан, хlуд аьлча хьан бакъо яц оцун рéдаккха.',
'protect-otherreason-op'      => 'Кхин бахьан',
'restriction-type'            => 'Бакъо:',
'restriction-level'           => 'Тlевитарна локхалла:',

# Restrictions (nouns)
'restriction-upload' => 'Чуйолуш',

# Restriction levels
'restriction-level-all' => 'массо барам',

# Undelete
'undelete'               => 'ДIайайина йолу агIонашка хьажар',
'viewdeletedpage'        => 'ДIайайина йолу агIонашка хьажар',
'undeleterevdel'         => 'Метта хlоттор хира дац, нагахь иза дакъошкахь дlадайина далахь а тlаьххьара кисак башхо йа хlума.
Иштнарг хилча ахьа дlабаккха беза хlоттийна болу къастам йа хьагайта тlаьххьара дlайайина башхо.',
'undeletelink'           => 'хьажа/метта хlоттаде',
'undelete-search-submit' => 'Лаха',

# Namespace form on various pages
'namespace'      => 'Цlерийн ана:',
'invert'         => 'Хаьржинарг хилийта',
'blanknamespace' => '(Коьрта)',

# Contributions
'contributions'       => 'Декъашхон къинхьегам',
'contributions-title' => 'Декъашхочуьна къинхьегам $1',
'mycontris'           => 'Сан къинхьегам',
'contribsub2'         => 'Къинхьегам $1 ($2)',
'uctop'               => ' (тlаьхьара)',
'month'               => 'Беттаца (йа хьалхе):',
'year'                => 'Шерачохь (йа хьалхе):',

'sp-contributions-newbies'    => 'Гайта бекъ къинхьегам, керла дlабазбиначара бина болу',
'sp-contributions-blocklog'   => 'сацораш',
'sp-contributions-logs'       => 'тéптарш',
'sp-contributions-talk'       => 'дийцаре',
'sp-contributions-userrights' => 'декъашхочуьн бакъона урхалладар',
'sp-contributions-search'     => 'Къинхьегам лахар',
'sp-contributions-username'   => 'IP-долу меттиг йа декъашхон цlе:',
'sp-contributions-submit'     => 'Лаха',

# What links here
'whatlinkshere'            => 'Хьажоригаш кхузе',
'whatlinkshere-title'      => 'Агlонаш, хьажоригца оцу «$1»',
'whatlinkshere-page'       => 'Агlо:',
'linkshere'                => "Тlаьхьайогlу агlонаш хьажоригца ю оцу '''[[:$1]]''':",
'isredirect'               => 'агlо-дlасахьажайар',
'istemplate'               => 'лата йe',
'isimage'                  => 'Оцу суьртан хьажориг',
'whatlinkshere-prev'       => '{{PLURAL:$1|хьалхайодарг|хьалхайодарш|хьалхайодарш}} $1',
'whatlinkshere-next'       => '{{PLURAL:$1|тlаьхьайогlург|тlаьхьайогlурш|тlаьхьайогlурш}} $1',
'whatlinkshere-links'      => '← хьажоригаш',
'whatlinkshere-hideredirs' => '$1 дlасахьажйар',
'whatlinkshere-hidetrans'  => '$1 латораш',
'whatlinkshere-hidelinks'  => '$1 хьажоригаш',
'whatlinkshere-filters'    => 'Литтарш',

# Block/unblock
'blockip'                  => 'Сацаве',
'ipadressorusername'       => 'IP-долу меттиг йа декъашхон цlе:',
'ipbreasonotherlist'       => 'Кхин бахьан',
'ipboptions'               => '2 сахьат:2 hours,1 де:1 day,3 де:3 days,1 кlиран:1 week,2 кlиран:2 weeks,1 бутт:1 month,3 бутт:3 months,6 бутт:6 months,1 шо:1 year,цlкъа:infinite',
'blockipsuccesssub'        => 'Сацавар чакхдели',
'blockipsuccesstext'       => '[[Special:Contributions/$1|«$1»]] сацийна ву.<br />
Хьажа. [[Special:BlockList|могlам сацийна IP-долу меттигаш]].',
'ipb-blocklist-contribs'   => 'Декъашхон къинхьегам $1',
'unblocked'                => '[[User:$1|$1]] хьайаьстина.',
'ipblocklist'              => 'Сацийна IP-долу меттиг а дlалаьрра язбаларш',
'ipblocklist-submit'       => 'Лаха',
'blocklink'                => 'сацаве',
'unblocklink'              => 'хьаваста',
'change-blocklink'         => 'хийцам бе сацорна',
'contribslink'             => 'къинхьегам',
'blocklogpage'             => 'Сацораш долу тептар',
'blocklogentry'            => 'сацийна [[$1]] цхьана ханна $2 $3',
'unblocklogentry'          => 'схьаваьстина $1',
'block-log-flags-nocreate' => 'цамагдо дlаязвалар дlаязбаларшца',

# Move page
'move-page'                    => '$1 — цlе хийцар',
'movepagetext'                 => "Леладан лахар хатlаьхь, хьо агlон цlе хуьйцуш ву, цхьатерра дехьа а докхуш цуьнан хийцаман тептар.
Тиша цlе хира ю дlасахьажйарехь керлачун тlе хьажийна.
Хьега далур ду ша шех дlасахьажор керла яккхар, хьалхалерачуьна метта йиллина йолу.
Нагахь ахьа иза цадинехь, дехар до, хьажа йуйла [[Special:DoubleRedirects|шалгlа]] а [[Special:BrokenRedirects|хадийначу дlасахьажориш]].
Ахьа жоп лур ду кхин дlа а хьажориг хьажийна хилийта, хила йезаче.

Тергамбеш хила, иза агlо '''хира яц''' цlе хийцина, нагахь иза цlе йолуш керла агlо йалахь, цхьа йолу хенахь, нагахь иза йалахь цхьан тlе хьажийна йа йаьсса а нисйарца исторе йоцуш.
Иза бохург ду, хьега хийцалур ю оцу агlон цlе оцу цlарца, хlинц цуьна хилла йолу, нагахь ахьа гlалатонца цlе хийцанехь, йолуш йолу агlо цахууш йа мега хьа.

'''ДlАХЬЕДАР!'''
Цlе хийцарца хила тарло барамашкахь а цамётту хийцам ''гlар йойлачу'' агlонашна.
Дехар до, кхин дlа хьо вахале, дика ойла йе, хьо кхеташ хиларехь тlаьхьа хиндолучунах.",
'movepagetalktext'             => "Тlе хlоьттина йолу дийцаре агlо ишта цlе хийцина хира ю, '''цхьа йолу ханчохь, маца:'''

*Йаьсса йоцу дийцаре агlо йолуш ю оцу цlарца йа
*Ахьа къастаман харжам цабиняхь а къастам хlотточехь.

Ишта чу ханчохь, ахьа дехьа яккха йезар ю йа куьйга хlоттайар, нагахь иза хьашт йалахь.",
'movearticle'                  => 'Цle хийца хlокху агlон',
'newtitle'                     => 'Керла цlе',
'move-watch'                   => 'Латайé хlара агlо тергаме могlам юкъа',
'movepagebtn'                  => 'Агlон цlе хийца',
'pagemovedsub'                 => 'Агlон цlе хийцина',
'movepage-moved'               => "'''Агlон цlе «$1» хийцина хlокху «$2»'''",
'articleexists'                => 'Хlарасанна цlе йолу агlо йолуш ю йа ахьа гойтуш йолу цlе магош яц.
Дехар до, харжа кхин цlе.',
'talkexists'                   => "'''Агlон цlе хийцина йара, амма дийцаре агlон цlе хийца цало, хlунда аьльча иза санна цlе йолу агlо йолуш ю. Дехар до, куьйга хlотта уьш.'''",
'movedto'                      => 'цlе хийцина оцу',
'movetalk'                     => 'Цуьнца йогlуш йолу дийцаре агlон цlе хийцар',
'movelogpage'                  => 'Цlераш хийцаран тептар',
'movereason'                   => 'Бахьан:',
'revertmove'                   => 'йухаяккха',
'delete_and_move'              => 'Цle а хуьйцуш дlадайá',
'delete_and_move_confirm'      => 'Хlаъ, дlайайъа хlара агlо',
'protectedpagemovewarning'     => "'''Дlахьедар.''' Хlара агlо гlаролла йина йу; цlе хийца йа нисйа а бакъо йолуш адаманкуьйгалхой бе бац.
Лахахьа тептаро балийна тlаьхьаралера дlаязбина хаам:",
'semiprotectedpagemovewarning' => "'''Дlахьедо.''' Хlара агlо гlаролла йина йу; дlабазбиначу декъашхошка бе цlе хийцалуш яц.
Лахахьа тептаро балийна тlаьхьаралера дlаязбина хаам:",

# Export
'export'           => 'Яззамаш кхечу меттиган арадахар',
'exporttext'       => 'Шуьга далур ду кхечу меттера чудахарш, йоза а хийцаме тептарш билгалла йолу агlонаш йа гулдина йолу агlонаш хlокх XML барамца, йуха тlяхьа чура [[Special:Import|хьаэцалурдолш]] кхечу вики-хьалхен, болх беш йолу хlокху MediaWiki гlирсаца.

Кхечу меттера яззамаш чуйаха, чуязйе цlе редокхчу метте, цlхьа могlан цlе могlаршкахь, йуха харжа лаьи шуна Кхечу меттер чуйаха массо яззамашна исторе хийцамбарш йа тlяхьаралера яззамна башхо.

Шуьга кхи даландерг, лелаеш йолу меттиг къастаман машан хьажориг кхечу меттер чудаха тlяхьарлера башхон яззамаш. Массала оцу яззамна [[{{MediaWiki:Mainpage}}]] хlара хира йу хьажориг [[{{#Special:Export}}/{{MediaWiki:Mainpage}}]].',
'export-templates' => 'Латадé куцкепаш',

# Namespace 8 related
'allmessages'                   => 'Гlирса хаамаш',
'allmessagesname'               => 'Хаам',
'allmessagesdefault'            => 'Шаьшха йоза',
'allmessagescurrent'            => 'Карарчу хенан йоза',
'allmessages-filter-legend'     => 'Литтар',
'allmessages-filter'            => 'Литтар оцу хьола хийцамца:',
'allmessages-filter-unmodified' => 'Хийцан йоцурш',
'allmessages-filter-all'        => 'Массо',
'allmessages-filter-modified'   => 'Хийцнарш',
'allmessages-prefix'            => 'Литтар оцу дешахьалхе:',
'allmessages-language'          => 'Мотт:',
'allmessages-filter-submit'     => 'Дехьа вала',

# Thumbnails
'thumbnail-more' => 'Доккха де',

# Special:Import
'import'                     => 'Кхин яззам агlонаш чуяхар',
'import-interwiki-source'    => 'Вики-хьост/агlо:',
'import-interwiki-templates' => 'Лата де массо куцкепаш',
'import-upload-filename'     => 'Хlуман цlе:',

# Tooltip help for the actions
'tooltip-pt-userpage'             => 'Декъашхочуьна агlо',
'tooltip-pt-mytalk'               => 'Сан дийцаре агlо',
'tooltip-pt-preferences'          => 'Хьан гlирс нисбар',
'tooltip-pt-watchlist'            => 'Ахьа тергам бо агlонаши хийцаман могlам',
'tooltip-pt-mycontris'            => 'Хьан нисдаран могlам',
'tooltip-pt-login'                => 'Хlокху гlирса чохь дlавазвала мега, амма иза тlедожош дац.',
'tooltip-pt-logout'               => 'Дlадерзадо болх бар',
'tooltip-ca-talk'                 => 'Дийцаре агlон чулацам',
'tooltip-ca-edit'                 => 'Хlара агlо хийцалур ю. Лелайе, дехар до, хьалххьажар айхьа чутохале lалашан',
'tooltip-ca-addsection'           => 'Кхолла керла дакъа',
'tooltip-ca-viewsource'           => 'Хlара агlо хийцам цабайта гароллехь ю, хьоьга далундерг хьажар а дезахь чура йоза хьаэцар',
'tooltip-ca-history'              => 'Хlокху агlон хийцамаш болу тептар',
'tooltip-ca-protect'              => 'Гlаролла дé хlокху агlон хийцам цабайта',
'tooltip-ca-unprotect'            => 'Дlадаккха хlокху агlонна долу гаролла',
'tooltip-ca-delete'               => 'Дlайайá хlара агlо',
'tooltip-ca-move'                 => 'Агlон цlе хийца',
'tooltip-ca-watch'                => 'Тlетоха хlара агlо сан тергаме могlам юкъа',
'tooltip-ca-unwatch'              => 'Дlайаккха хlара агlо хьай тергаме могlам юкъар',
'tooltip-search'                  => 'Лаха иза дош',
'tooltip-search-go'               => 'Билгала и санна цlе йолучу агlон чу дехьа вала',
'tooltip-search-fulltext'         => 'Лаха агlонаш ше чулацамехь хlара йоза долуш',
'tooltip-p-logo'                  => 'Коьрта агIо',
'tooltip-n-mainpage'              => 'Дехьавалар коьрта агlончу',
'tooltip-n-mainpage-description'  => 'Дехьавалар коьрта агlончу',
'tooltip-n-portal'                => 'Оцу кхолламах, мичахь хlу йу лаьташ а хlудалур ду шуьга',
'tooltip-n-currentevents'         => 'Дlаоьхуш болу хаамашна могlам',
'tooltip-n-recentchanges'         => 'Тlаьххьаралера хийцаман могlам',
'tooltip-n-randompage'            => 'Хьажа цахууш нисйеллачу агlоне',
'tooltip-n-help'                  => 'Нисвохаамаш оцу кхолламца «{{SITENAME}}»',
'tooltip-t-whatlinkshere'         => 'Массо агlон могlам, хlокху агlонтlе хьажийна йолу',
'tooltip-t-recentchangeslinked'   => 'Тlаьхьарлера хийцамаш хlокху агlонашкахь, мичхьа хьажийна хlара агlо',
'tooltip-feed-rss'                => 'Хьагайтар оцу RSS цани хlокху агlон',
'tooltip-feed-atom'               => 'Хьагайтар оцу Atom цани хlокху агlон',
'tooltip-t-contributions'         => 'Хlокху декъашхочо хийцина йолу агlонашан могlам',
'tooltip-t-emailuser'             => 'Дlабахьийта хаам оцу декъашхона',
'tooltip-t-upload'                => 'Чудаха суьрташ йа шагойтуш йолу хlумнаш',
'tooltip-t-specialpages'          => 'Белха агlонаши могlам',
'tooltip-t-print'                 => 'Хlокху агlонна зорба туху башхо',
'tooltip-t-permalink'             => 'Даимна йолу хьажориг хlокху башха агlонна',
'tooltip-ca-nstab-main'           => 'Яззамна чулацам',
'tooltip-ca-nstab-user'           => 'Хlора декъашхон долахь йолу агlо',
'tooltip-ca-nstab-media'          => 'Медиа-хlум',
'tooltip-ca-nstab-special'        => 'Хlара белха агlо йу, хlара рéдаккхалуш яц',
'tooltip-ca-nstab-project'        => 'Кхолламан дакъа',
'tooltip-ca-nstab-image'          => 'Хlуман агlо',
'tooltip-ca-nstab-mediawiki'      => 'Хааман агlо MediaWiki',
'tooltip-ca-nstab-template'       => 'Куцкепа агlо',
'tooltip-ca-nstab-category'       => 'Кадегарши агlо',
'tooltip-minoredit'               => 'Къастам бé хlокху хийцамна кlеззиг боуш санна',
'tooltip-save'                    => 'Хьан хийцамаш lалашбой',
'tooltip-preview'                 => 'Дехар до, агlо lалаш йарал хьалха хьажа муха йу яз!',
'tooltip-diff'                    => 'Гайта долуш долу йозанах бина болу хийцам.',
'tooltip-compareselectedversions' => 'Хlокху шина хаьржина агlона башхо муха ю хьажа.',
'tooltip-watch'                   => 'Тlетоха хlара агlо сан тергаме могlам юкъа',
'tooltip-rollback'                => 'Цхьоз тlетаlийча дlабаккха кхечо бина болу тlаьххьара хийцам',
'tooltip-undo'                    => 'Дlабаккха бина болу хийцам а хьалхьажар гойтуш, дlайаккхарна бахьан гайта аьтту беш',

# Stylesheets
'common.css'   => '/** Чуйиллина йолу кхузе CSS хир йу лелош масхьа кечйечу чохь */',
'monobook.css' => '/* Чуйиллина йолу кхузе CSS хир йу лелош масхьа Monobook чохь */',
'print.css'    => '/* Чуйиллина йолу кхузе CSS хир йу лелош масхьа зорба тухучуче чохь */',
'handheld.css' => '/* Чуйиллина йолу кхузе CSS хир йу лелош масхьа койнаш чохь, дукхах ерг хатl нисдеш оцу $wgHandheldStyle */',

# Scripts
'common.js'   => '/* Чуйиллина йолу кхузе JavaScript ишар гучу ерайу массо декъашхошна оцара схьаелларца хlора агlо */',
'monobook.js' => '/* Кхузе чу яззийна йолу JavaScript ишар, чу йера йу, массо MonoBook хатl лелош болу декъашхошна */',

# Attribution
'siteuser'  => 'декъашхо {{grammar:genitive|{{SITENAME}}}} $1',
'others'    => 'кхин',
'siteusers' => '{{PLURAL:$2|декъашхо|декъашхой}} {{grammar:genitive|{{SITENAME}}}} $1',
'nocredits' => 'Бац декъашхойн могlам хlокху яззамца',

# Spam protection
'spamprotectiontitle' => 'Совбиларна литтар',

# Skin names
'skinname-standard' => 'Лела ма ярра',

# Browsing diffs
'previousdiff' => '← Хьалхдоьда нисдинарг',
'nextdiff'     => 'Тlяхьа догlа нисдинарг →',

# Media information
'widthheightpage' => '$1 × $2, $3 {{PLURAL:$3|агlо|агlонаш|агlонаш}}',
'file-info-size'  => '$1 × $2 сиртакх, хlуман барам: $3, MIME-тайп: $4',
'file-nohires'    => 'Кхи йоккха гlоле башхо яц.',
'svg-long-desc'   => 'SVG-хlума, хlоттамца $1 × $2 цинташ, хlуман барам: $3',
'show-big-image'  => 'Сурт цlанал лаккхара бакъонца',

# Special:NewFiles
'newimages'        => 'Керлачу хlумни галеларе',
'newimages-legend' => 'Литтар',
'ilsubmit'         => 'Лаха',

# Video information, used by Language::formatTimePeriod() to format lengths in the above messages
'seconds-abbrev' => '$1оцу',

# Bad image list
'bad_image_list' => 'Барам хила беза ишта:

Лораш хира йу могlамяхь йолу хlумнаш (могlийн, йола луш йолу сабол тlира *).
Дуьхьаралера хьажориг магlарши хила беза хьажориг кху цамагдо сурт дуьлаче.
Тlяхьа йогlуш йолу хьажориг оцу могlарехь хира йу магóш, билгалла аьлча яззамаш долуче, сурт хьаллаточехь.',

# Metadata
'metadata'          => 'Метахаамаш',
'metadata-help'     => 'Хlокху хlуманца кхин тlе хаам бу, даиман чуйоккхуш йолу терахьца чоьнашца йа тlейоккхучуьнца. Нагахь хlуман тlаьхьа хийцам биняхь, тlаккха цlхьаболу барам цlхьаьна ца ба мега хlинцлера суртаца.',
'metadata-expand'   => 'Гайта кхин тlе болу хаам',
'metadata-collapse' => 'Къайла баккха кхин тlе болу хаам',
'metadata-fields'   => 'Метахааман майда, хьахийна йолу хlокху могlамца, lад-йитича гойтур ю суьрти агlонца, йисинарш хира ю къайлаха.
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
'exif-datetime'         => 'Хlума хийцина терахь а хан',
'exif-datetimeoriginal' => 'Дуьххьарлера терахь а хан',

'exif-scenetype-1' => 'Сурт даьккхина нис дуьххьал',

# External editor support
'edit-externally'      => 'Рéдаккха хlокху хlуман, арахьара диллагlарам лелош',
'edit-externally-help' => '(мадарра хьажа. оцу [//www.mediawiki.org/wiki/Manual:External_editors куьйгалийца дlахlотторе])',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'массо',
'namespacesall' => 'массо',
'monthsall'     => 'массо',
'limitall'      => 'массо',

# Delete conflict
'confirmrecreate' => "Декъашхо [[User:$1|$1]] ([[User talk:$1|дийцаре]]) хlара агlо дlадайина, хьо иза нисда вола велча, дlадайарна бахьан:
: ''$2''
Дехар до, тешал де, хьо иза агlо метта хlотто лууш ву але.",

# Multipage image navigation
'imgmultipageprev' => '← хьалхара агlо',
'imgmultipagenext' => 'тlаьхьара агlо →',
'imgmultigo'       => 'Дехьавала!',
'imgmultigoto'     => 'Дехьавала агlончу $1',

# Table pager
'table_pager_next'         => 'Тlаьхьа йогlу агlо',
'table_pager_prev'         => 'Хьалха йоьду агlо',
'table_pager_first'        => 'Дуьххьаралера агlо',
'table_pager_last'         => 'Тlаьххьаралера агlо',
'table_pager_limit'        => 'Гайта $1 хlумнаш агlон тlаьхь',
'table_pager_limit_submit' => 'Кхочушдé',
'table_pager_empty'        => 'Цакарийна',

# Auto-summaries
'autosumm-blank' => 'Агlон чулацам дlабайина',
'autosumm-new'   => 'Керла агlо: «$1»',

# Live preview
'livepreview-loading' => 'Чуйолуш…',
'livepreview-ready'   => 'Чуйолуш… Кийча йу!',

# Watchlist editor
'watchlistedit-normal-submit' => 'Дlадайá язъдинарш',

# Watchlist editing tools
'watchlisttools-view' => 'Могlам чура агlонашан хийцамаш',
'watchlisttools-edit' => 'Хьажа/нисбé могlам',
'watchlisttools-raw'  => 'Йоза санна нисдé',

# Special:Version
'version' => 'Варси MediaWiki',

# Special:FilePath
'filepath'        => 'ХIуман тIе болу некъ',
'filepath-page'   => 'Хlум:',
'filepath-submit' => 'Дехьавала',

# Special:FileDuplicateSearch
'fileduplicatesearch'        => 'Лаха цхьатера йолу хIумнаш',
'fileduplicatesearch-submit' => 'Лаха',

# Special:SpecialPages
'specialpages'                   => 'Леррина агlонаш',
'specialpages-note'              => '----
* Гуттарлера белха агlонаш.
* <strong class="mw-specialpagerestricted">Кlеззиг таронаш йолу леррина агlонаш.</strong>',
'specialpages-group-maintenance' => 'Жамlаш гlирса хьашташ кхочушдар',
'specialpages-group-other'       => 'Кхин гlуллакхан агlонаш',
'specialpages-group-login'       => 'Хьой вовзийта / Дlавазло',
'specialpages-group-changes'     => 'Керла нисдарш а тéптарш',
'specialpages-group-media'       => 'Жамlаш оцу медиа-гlирсашан а чуяхарш',
'specialpages-group-users'       => 'Декъашхой а бакъонаш',
'specialpages-group-highuse'     => 'Уггаре дукха лелайо агlонаш',
'specialpages-group-pages'       => 'Агlонаши могlамаш',
'specialpages-group-pagetools'   => 'Гlирсаш оцу агlонашан',
'specialpages-group-wiki'        => 'Вики-баххаш а гlирсаш',
'specialpages-group-redirects'   => 'Дlасахьажош йолу гlуллакхан агlонаш',
'specialpages-group-spam'        => 'Гlирсаш совбиларна дуьхьал',

# Special:BlankPage
'blankpage' => 'Йаьсса агlо',

# Special:Tags
'tags'                 => 'Болш болу хийцаман къастам',
'tag-filter'           => 'Литтар [[Special:Tags|къастам]]:',
'tag-filter-submit'    => 'Литта',
'tags-hitcount-header' => 'Къастам бина нисдарш',
'tags-edit'            => 'нисйé',
'tags-hitcount'        => '$1 {{PLURAL:$1|хийцам|хийцамаш|хийцамаш}}',

# Database error messages
'dberr-header'    => 'Хlара вики ловш йу халона бала',
'dberr-problems'  => 'Бехк ма бил! Хlинц машан меттиган хилла гlирсаца халонаш.',
'dberr-again'     => 'Хьажа карла йаккха агlо массех минот йаьлча.',
'dberr-info'      => '(аьтто ца хили зlе хlотта гlулкхдечуьнца бухара хаамашца: $1)',
'dberr-usegoogle' => 'Цlачун хьо хьажа лаха гlонца Google.',
'dberr-outofdate' => 'Хьуна хаалахь, цуьна йолу меттиг хила мега тишйелла черахь.',

);
