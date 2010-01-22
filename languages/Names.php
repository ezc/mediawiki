<?php
/**
  * These determine things like interwikis, language selectors, and so on.
  * Safe to change without running scripts on the respective sites.
  *
  * @ingroup Language
  */
/* private */ $wgLanguageNames = array(
	'aa' => 'Qafár af',	# Afar
	'ab' => 'Аҧсуа',	# Abkhaz, should possibly add ' бысжѡа'
	'ace' => 'Acèh',	# Aceh
	'af' => 'Afrikaans',	# Afrikaans
	'ak' => 'Akan',		# Akan
	'aln' => 'Gegë',	# Gheg Albanian
	'als' => 'Alemannisch',	# Alemannic -- not a valid code, for compatibility. See gsw.
	'am' => 'አማርኛ',	# Amharic
	'an' => 'Aragonés',	# Aragonese
	'ang' => 'Anglo-Saxon',	# Old English
	'ar' => 'العربية',	# Arabic
	'arc' => 'ܐܪܡܝܐ',	# Aramaic
	'arn' => 'Mapudungun',	# Mapuche, Mapudungu, Araucanian (Araucano)
	'arz' => 'مصرى',	# Egyptian Spoken Arabic
	'as' => 'অসমীয়া',	# Assamese
	'ast' => 'Asturianu',	# Asturian
	'av' => 'Авар',	# Avar
	'avk' => 'Kotava', # Kotava
	'ay' => 'Aymar aru',	# Aymara
	'az' => 'Azərbaycan',	# Azerbaijani
	'ba' => 'Башҡорт',	# Bashkir
	'bar' => 'Boarisch',	# Bavarian (Austro-Bavarian and South Tyrolean)
	'bat-smg' => 'Žemaitėška', # Samogitian
	'bcc' => 'بلوچی مکرانی', # Southern Balochi
	'bcl' => 'Bikol Central', # Bikol: Central Bicolano language
	'be' => 'Беларуская',	#  Belarusian normative
	'be-tarask' => 'Беларуская (тарашкевіца)',	# Belarusian in Taraskievica orthography
	'be-x-old' => 'Беларуская (тарашкевіца)',	# Belarusian in Taraskievica orthography; compat link
	'bg' => 'Български',	# Bulgarian
	'bh' => 'भोजपुरी',	# Bhojpuri
	'bi' => 'Bislama',		# Bislama
	'bm' => 'Bamanankan',	# Bambara
	'bn' => 'বাংলা',	# Bengali
	'bo' => 'བོད་ཡིག',	# Tibetan
	'bpy' => 'ইমার ঠার/বিষ্ণুপ্রিয়া মণিপুরী',	# Bishnupriya Manipuri
	'bqi' => 'بختياري',	# Bakthiari
	'br' => 'Brezhoneg',	# Breton
	'bs' => 'Bosanski',		# Bosnian
	'bug' => 'ᨅᨔ ᨕᨘᨁᨗ',	# Bugis
	'bxr' => 'Буряад',	# Buryat (Russia)
	'ca' => 'Català',	# Catalan
	'cbk-zam' => 'Chavacano de Zamboanga',	# Zamboanga Chavacano
	'cdo' => 'Mìng-dĕ̤ng-ngṳ̄',	# Min Dong
	'ce' => 'Нохчийн',	# Chechen
	'ceb' => 'Cebuano',     # Cebuano
	'ch' => 'Chamoru',		# Chamorro
	'cho' => 'Choctaw',		# Choctaw
	'chr' => 'ᏣᎳᎩ', # Cherokee
	'chy' => 'Tsetsêhestâhese',	# Cheyenne
	'ckb' => 'Soranî / کوردی',	# Sorani
	'ckb-latn' => "\xE2\x80\xAASoranî (latînî)\xE2\x80\xAC", # Central Kurdish Latin script
	'ckb-arab' => "\xE2\x80\xABکوردی (عەرەبی)\xE2\x80\xAC", # Central Kurdish Arabic script
	'co' => 'Corsu',		# Corsican
	'cps' => 'Capiceño', # Capiznon
	'cr' => 'Nēhiyawēwin / ᓀᐦᐃᔭᐍᐏᐣ',		# Cree
	'crh' => 'Qırımtatarca',   # Crimean Tatar
	'crh-latn' => "\xE2\x80\xAAQırımtatarca (Latin)\xE2\x80\xAC",       # Crimean Tatar (Latin)
	'crh-cyrl' => "\xE2\x80\xAAКъырымтатарджа (Кирилл)\xE2\x80\xAC",       # Crimean Tatar (Cyrillic)
	'cs' => 'Česky',	# Czech
	'csb' => 'Kaszëbsczi',	# Cassubian
	'cu' => 'Словѣ́ньскъ / ⰔⰎⰑⰂⰡⰐⰠⰔⰍⰟ',	# Old Church Slavonic (ancient language)
	'cv' => 'Чӑвашла',	# Chuvash
	'cy' => 'Cymraeg',		# Welsh
	'da' => 'Dansk',		# Danish
	'de' => 'Deutsch',		# German ("Du")
	'de-at' => 'Österreichisches Deutsch',		# Austrian German
	'de-ch' => 'Schweizer Hochdeutsch',		# Swiss Standard German
	'de-formal' => 'Deutsch (Sie-Form)',		# German - formal address ("Sie")
	'diq' => 'Zazaki',		# Zazaki
	'dk' => 'Dansk (deprecated:da)',		# Unused code currently falls back to Danish, 'da' is correct for the language
	'dsb' => 'Dolnoserbski', # Lower Sorbian
	'dv' => 'ދިވެހިބަސް',		# Dhivehi
	'dz' => 'ཇོང་ཁ',		# Bhutani
	'ee' => 'Eʋegbe',	# Éwé
	'el' => 'Ελληνικά',	# Greek
	'eml' => 'Emiliàn e rumagnòl',	# Emiliano-Romagnolo / Sammarinese
	'en' => 'English',		# English
	'en-gb' => 'British English',		# British English
	'eo' => 'Esperanto',	# Esperanto
	'es' => 'Español',	# Spanish
	'et' => 'Eesti',		# Estonian
	'eu' => 'Euskara',		# Basque
	'ext' => 'Estremeñu', # Extremaduran
	'fa' => 'فارسی',	# Persian
	'ff' => 'Fulfulde',		# Fulfulde, Maasina
	'fi' => 'Suomi',		# Finnish
	'fiu-vro' => 'Võro',    # Võro (deprecated code, 'vro' in ISO 639-3 since 2009-01-16)
	'fj' => 'Na Vosa Vakaviti',	# Fijian
	'fo' => 'Føroyskt',	# Faroese
	'fr' => 'Français',	# French
	'frc' => 'Français cadien', # Cajun French
	'frp' => 'Arpetan',	# Franco-Provençal/Arpitan
	'frr' => 'Frasch',	# North Frisian
	'fur' => 'Furlan',		# Friulian
	'fy' => 'Frysk',		# Frisian
	'ga' => 'Gaeilge',		# Irish
	'gag' => 'Gagauz',		# Gagauz
	'gan' => '贛語',		# Gan
	'gan-hans' => '赣语(简体)',	# Gan (Simplified Han)
	'gan-hant' => '贛語(繁體)',	# Gan (Traditional Han)
	'gd' => 'Gàidhlig',	# Scots Gaelic
	'gl' => 'Galego',		# Galician
	'glk' => 'گیلکی',	# Gilaki
	'gn' => 'Avañe\'ẽ',	# Guaraní, Paraguayan
	'got' => '𐌲𐌿𐍄𐌹𐍃𐌺',	# Gothic
	'grc' => 'Ἀρχαία ἑλληνικὴ', # Ancient Greek
	'gsw' => 'Alemannisch',	# Alemannic
	'gu' => 'ગુજરાતી',	# Gujarati
	'gv' => 'Gaelg',		# Manx
	'ha' => 'هَوُسَ',	# Hausa
	'hak' => 'Hak-kâ-fa',	# Hakka
	'haw' => 'Hawai`i',		# Hawaiian
	'he' => 'עברית',	# Hebrew
	'hi' => 'हिन्दी',	# Hindi
	'hif' => 'Fiji Hindi',	# Fijian Hindi (falls back to hif-latn)
	'hif-deva' => 'फ़ीजी हिन्दी',	# Fiji Hindi (devangari)
	'hif-latn' => 'Fiji Hindi',	# Fiji Hindi (latin)
	'hil' => 'Ilonggo',	# Hiligaynon
	'ho' => 'Hiri Motu',	# Hiri Motu
	'hr' => 'Hrvatski',		# Croatian
	'hsb' => 'Hornjoserbsce',	# Upper Sorbian
	'ht'  => 'Kreyòl ayisyen',		# Haitian Creole French
	'hu' => 'Magyar',		# Hungarian
	'hy' => 'Հայերեն',	# Armenian
	'hz' => 'Otsiherero',	# Herero
	'ia' => 'Interlingua',	# Interlingua (IALA)
	'id' => 'Bahasa Indonesia',	# Indonesian
	'ie' => 'Interlingue',	# Interlingue (Occidental)
	'ig' => 'Igbo',			# Igbo
	'ii' => 'ꆇꉙ',	# Sichuan Yi
	'ik' => 'Iñupiak',	# Inupiak (Inupiatun, Northwest Alaska / Inupiatun, North Alaskan)
	'ike-cans' => 'ᐃᓄᒃᑎᑐᑦ',	# Inuktitut, Eastern Canadian/Eastern Canadian "Eskimo"/"Eastern Arctic Eskimo"/Inuit (Unified Canadian Aboriginal Syllabics)
	'ike-latn' => 'inuktitut',	# Inuktitut, Eastern Canadian (Latin script)
	'ilo' => 'Ilokano',	# Ilokano
	'inh' => 'ГІалгІай Ğalğaj',    # Ingush
	'io' => 'Ido',			# Ido
	'is' => 'Íslenska',	# Icelandic
	'it' => 'Italiano',		# Italian
	'iu' => 'ᐃᓄᒃᑎᑐᑦ/inuktitut',	# Inuktitut (macro language - do no localise, see ike/ikt - falls back to ike-cans)
	'ja' => '日本語',	# Japanese
	'jbo' => 'Lojban',		# Lojban
	'jut' => 'Jysk',	# Jutish / Jutlandic
	'jv' => 'Basa Jawa',	# Javanese
	'ka' => 'ქართული',	# Georgian
	'kaa' => 'Qaraqalpaqsha',	# Karakalpak
	'kab' => 'Taqbaylit',	# Kabyle
	'kg' => 'Kongo',		# Kongo, (FIXME!) should probaly be KiKongo or KiKoongo
	'ki' => 'Gĩkũyũ',	# Gikuyu
	'kiu' => 'Kırmancki',	# Kirmanjki
	'kj' => 'Kwanyama',		# Kwanyama
	'kk' => 'Қазақша',	# Kazakh
	'kk-arab' => "\xE2\x80\xABقازاقشا (تٴوتە)\xE2\x80\xAC",	# Kazakh Arabic
	'kk-cyrl' => "\xE2\x80\xAAҚазақша (кирил)\xE2\x80\xAC",	# Kazakh Cyrillic
	'kk-latn' => "\xE2\x80\xAAQazaqşa (latın)\xE2\x80\xAC",	# Kazakh Latin
	'kk-cn' => "\xE2\x80\xABقازاقشا (جۇنگو)\xE2\x80\xAC",	# Kazakh (China)
	'kk-kz' => "\xE2\x80\xAAҚазақша (Қазақстан)\xE2\x80\xAC",	# Kazakh (Kazakhstan)
	'kk-tr' => "\xE2\x80\xAAQazaqşa (Türkïya)\xE2\x80\xAC",	# Kazakh (Turkey)
	'kl' => 'Kalaallisut',	# Inuktitut, Greenlandic/Greenlandic/Kalaallisut (kal)
	'km' => 'ភាសាខ្មែរ',	# Khmer, Central
	'kn' => 'ಕನ್ನಡ',	# Kannada
	'ko' => '한국어',	# Korean
	'ko-kp' => '한국어 (조선)',	# Korean (DPRK)
	'koi' => 'Перем Коми', # Komi-Permyak
	'kr' => 'Kanuri',		# Kanuri, Central
	'krc' => 'Къарачай-Малкъар', # Karachay-Balkar
	'kri' => 'Krio', # Krio
	'krj' => 'Kinaray-a', # Kinaray-a
	'ks' => 'कश्मीरी - (كشميري)',	# Kashmiri
	'ksh' => 'Ripoarisch',	# Ripuarian 
	'ku'  => 'Kurdî',	# Kurdish
	'ku-latn' => "\xE2\x80\xAAKurdî (latînî)\xE2\x80\xAC",	# Northern Kurdish Latin script
	'ku-arab' => "\xE2\x80\xABكوردي (عەرەبی)\xE2\x80\xAC",	# Northern Kurdish Arabic script
	'kv' => 'Коми',	# Komi-Zyrian, cyrillic is common script but also written in latin script
	'kw' => 'Kernowek',		# Cornish
	'ky' => 'Кыргызча',	# Kirghiz
	'la' => 'Latina',		# Latin
	'lad' => 'Ladino',	# Ladino
	'lb' => 'Lëtzebuergesch',	# Luxemburguish
	'lbe' => 'Лакку',	# Lak
	'lez' => 'Лезги',	# Lezgi
	'lfn' => 'Lingua Franca Nova',	# Lingua Franca Nova
	'lg' => 'Luganda',		# Ganda
	'li' => 'Limburgs',	# Limburgian
	'lij' => 'Líguru',	# Ligurian
	'lmo' => 'Lumbaart',	# Lombard
	'ln' => 'Lingála',		# Lingala
	'lo' => 'ລາວ',# Laotian
	'loz' => 'Silozi', # Lozi
	'lt' => 'Lietuvių',	# Lithuanian
	'ltg' => 'Latgaļu',	# Latgalian
	'lv' => 'Latviešu',	# Latvian
	'lzh' => '文言',	# Literary Chinese -- (bug 8217) lzh instead of zh-classical, http://www.sil.org/iso639-3/codes.asp?order=639_3&letter=l
	'mai' => 'मैथिली', # Maithili
	'map-bms' => 'Basa Banyumasan', # Banyumasan 
	'mdf' => 'Мокшень',		# Moksha
	'mg' => 'Malagasy',		# Malagasy
	'mh' => 'Ebon',			# Marshallese
	'mhr' => 'Олык Марий',	# Eastern Mari
	'mi' => 'Māori',	# Maori
	'mk' => 'Македонски',	# Macedonian
	'ml' => 'മലയാളം',	# Malayalam
	'mn' => 'Монгол',	# Halh Mongolian (Cyrillic) (ISO 639-3: khk)
	'mo' => 'Молдовеняскэ',	# Moldovan
	'mr' => 'मराठी',	# Marathi
	'mrj' => 'Кырык мары',	# Hill Mari
	'ms' => 'Bahasa Melayu',	# Malay
	'mt' => 'Malti',	# Maltese
	'mus' => 'Mvskoke',	# Muskogee/Creek
	'mwl' => 'Mirandés',	# Mirandese
	'my' => 'မြန်မာဘာသာ',		# Burmese
	'myv' => 'Эрзянь',	# Erzya
	'mzn' => 'مازِرونی',		# Mazanderani
	'na' => 'Dorerin Naoero',		# Nauruan
	'nah' => 'Nāhuatl',		# Nahuatl, en:Wikipedia writes Nahuatlahtolli, while another form is Náhuatl
	'nan' => 'Bân-lâm-gú', # Min-nan -- (bug 8217) nan instead of zh-min-nan, http://www.sil.org/iso639-3/codes.asp?order=639_3&letter=n
	'nap' => 'Nnapulitano',	# Neapolitan
	'nb' => "\xE2\x80\xAANorsk (bokmål)\xE2\x80\xAC",		# Norwegian (Bokmal)
	'nds' => 'Plattdüütsch',	# Low German ''or'' Low Saxon
	'nds-nl' => 'Nedersaksisch',	# Dutch Low Saxon
	'ne' => 'नेपाली',	# Nepali
	'new' => 'नेपाल भाषा',		# Newar / Nepal Bhasa
	'ng' => 'Oshiwambo',		# Ndonga
	'niu' => 'Niuē',	# Niuean
	'nl' => 'Nederlands',	# Dutch
	'nn' => "\xE2\x80\xAANorsk (nynorsk)\xE2\x80\xAC",	# Norwegian (Nynorsk)
	'no' => "\xE2\x80\xAANorsk (bokmål)\xE2\x80\xAC",		# Norwegian
	'nov' => 'Novial',		# Novial
	'nrm' => 'Nouormand',	# Norman
	'nso' => 'Sesotho sa Leboa',	# Northern Sotho
	'nv' => 'Diné bizaad',	# Navajo
	'ny' => 'Chi-Chewa',	# Chichewa
	'oc' => 'Occitan',		# Occitan
	'om' => 'Oromoo',		# Oromo
	'or' => 'ଓଡ଼ିଆ',		# Oriya
	'os' => 'Иронау', # Ossetic
	'pa' => 'ਪੰਜਾਬੀ', # Eastern Punjabi (pan)
	'pag' => 'Pangasinan',	# Pangasinan
	'pam' => 'Kapampangan',   # Pampanga
	'pap' => 'Papiamentu',	# Papiamentu
	'pcd' => 'Picard',	# Picard
	'pdc' => 'Deitsch',	# Pennsylvania German
	'pdt' => 'Plautdietsch',	# Plautdietsch/Mennonite Low German
	'pfl' => 'Pfälzisch',	# Palatinate German
	'pi' => 'पािऴ',	# Pali
	'pih' => 'Norfuk / Pitkern', # Norfuk/Pitcairn/Norfolk
	'pl' => 'Polski',		# Polish
	'pms' => 'Piemontèis',	# Piedmontese
	'pnb' => 'پنجابی',	# Western Punjabi
	'pnt' => 'Ποντιακά',	# Pontic/Pontic Greek
	'prg' => 'Prūsiskan',	# Prussian
	'ps' => 'پښتو',	# Pashto, Northern/Paktu/Pakhtu/Pakhtoo/Afghan/Pakhto/Pashtu/Pushto/Yusufzai Pashto
	'pt' => 'Português',	# Portuguese
	'pt-br' => 'Português do Brasil',	# Brazilian Portuguese
	'qu' => 'Runa Simi',	# Quechua
	'rgn' => 'Rumagnôl',	# Romagnol
	'rif' => 'Tarifit',	# Tarifit
	'rm' => 'Rumantsch',	# Raeto-Romance
	'rmy' => 'Romani',	# Vlax Romany
	'rn' => 'Kirundi',		# Rundi/Kirundi/Urundi
	'ro' => 'Română',	# Romanian
	'roa-rup' => 'Armãneashce', # Aromanian
	'roa-tara' => 'Tarandíne',	# Tarantino
	'ru' => 'Русский',	# Russian
	'ruq' => 'Vlăheşte',	# Megleno-Romanian (falls back to ruq-latn)
	'ruq-cyrl' => 'Влахесте',	# Megleno-Romanian (Cyrillic script)
	#'ruq-grek' => 'Βλαεστε',	# Megleno-Romanian (Greek script)
	'ruq-latn' => 'Vlăheşte',	# Megleno-Romanian (Latin script)
	'rw' => 'Kinyarwanda',	# Kinyarwanda, should possibly be Kinyarwandi
	'sa' => 'संस्कृत',	# Sanskrit
	'sah' => 'Саха тыла', # Sakha
	'sc' => 'Sardu',		# Sardinian
	'scn' => 'Sicilianu',	# Sicilian
	'sco' => 'Scots',       # Scots
	'sd' => 'سنڌي',	# Sindhi
	'sdc' => 'Sassaresu',	# Sassarese
	'se' => 'Sámegiella',	# Northern Sami
	'sei' => 'Cmique Itom',	# Seri
	'sg' => 'Sängö',		# Sango/Sangho
	'sh' => 'Srpskohrvatski / Српскохрватски', # Serbocroatian
	'shi' => 'Tašlḥiyt',    # Tachelhit
	'si' => 'සිංහල',	# Sinhalese
	'simple' => 'Simple English',	# Simple English
	'sk' => 'Slovenčina',	# Slovak
	'sl' => 'Slovenščina',	# Slovenian
	'sli' => 'Schläsch',	# Lower Selisian
	'sm' => 'Gagana Samoa',	# Samoan
	'sma' => 'Åarjelsaemien',	# Southern Sami
	'sn' => 'chiShona',		# Shona
	'so' => 'Soomaaliga',	# Somali
	'sq' => 'Shqip',		# Albanian
	'sr' => 'Српски / Srpski',	# Serbian
	'sr-ec' => 'Српски (ћирилица)',	# Serbian Cyrillic ekavian
	'sr-el' => 'Srpski (latinica)',	# Serbian Latin ekavian
	'srn' => 'Sranantongo',		# Sranan Tongo
	'ss' => 'SiSwati',		# Swati
	'st' => 'Sesotho',		# Southern Sotho
	'stq' => 'Seeltersk',		# Saterland Frisian
	'su' => 'Basa Sunda',	# Sundanese
	'sv' => 'Svenska',		# Swedish
	'sw' => 'Kiswahili',	# Swahili
	'szl' => 'Ślůnski',	# Silesian
	'ta' => 'தமிழ்',	# Tamil
	'tcy' => 'ತುಳು', # Tulu
	'te' => 'తెలుగు',	# Telugu
	'tet' => 'Tetun',	# Tetun
	'tg' => 'Тоҷикӣ',	# Tajiki (falls back to tg-cyrl)
	'tg-cyrl' => 'Тоҷикӣ',	# Tajiki (Cyrllic script) (default)
	'tg-latn' => 'tojikī',	# Tajiki (Latin script)
	'th' => 'ไทย',	# Thai
	'ti' => 'ትግርኛ',		# Tigrinya
	'tk' => 'Türkmençe',	# Turkmen
	'tl' => 'Tagalog',		# Tagalog
	'tn' => 'Setswana',		# Setswana
	'to' => 'lea faka-Tonga',		# Tonga (Tonga Islands)
	'tokipona' => 'Toki Pona',      # Toki Pona
	'tp' => 'Toki Pona (deprecated:tokipona)',	# Toki Pona - non-standard language code
	'tpi' => 'Tok Pisin',	# Tok Pisin
	'tr' => 'Türkçe',	# Turkish
	'ts' => 'Xitsonga',		# Tsonga
	'tt' => 'Татарча/Tatarça',	# Tatar (multiple scripts - defaults to Cyrillic)
	'tt-cyrl' => 'Татарча',	# Tatar (Cyrillic script)
	'tt-latn' => 'Tatarça',	# Tatar (Latin script)
	'tum' => 'chiTumbuka',  # Tumbuka
	'tw' => 'Twi',			# Twi, (FIXME!)
	'ty' => 'Reo Mā`ohi',	# Tahitian
	'tyv' => 'Тыва дыл',	# Tyvan
	'udm' => 'Удмурт',	# Udmurt
	'ug' => 'Uyghurche‎ / ئۇيغۇرچە',	# Uyghur (multiple scripts - defaults to Latin)
	'ug-arab' => 'ئۇيغۇرچە', # Uyghur (Arabic script)
	'ug-latn' => 'Uyghurche‎', # Uyghur (Latin script - default)
	'uk' => 'Українська',	# Ukrainian
	'ur' => 'اردو',	# Urdu
	'uz' => 'O\'zbek',	# Uzbek
	've' => 'Tshivenda',		# Venda
	'vec' => 'Vèneto',	# Venetian
	'vep' => 'Vepsan kel\'',	# Veps
	'vi' => 'Tiếng Việt',	# Vietnamese
	'vls' => 'West-Vlams', # West Flemish
	'vo' => 'Volapük',	# Volapük
	'vot' => 'Vaďďa',	# Vod/Votian
	'vro' => 'Võro',    # Võro
	'wa' => 'Walon',		# Walloon
	'war' => 'Winaray', # Waray-Waray
	'wo' => 'Wolof',		# Wolof
	'wuu' => '吴语',		# Wu Chinese
	'xal' => 'Хальмг',		# Kalmyk-Oirat (Kalmuk, Kalmuck, Kalmack, Qalmaq, Kalmytskii Jazyk, Khal:mag, Oirat, Volga Oirat, European Oirat, Western Mongolian)
	'xh' => 'isiXhosa',		# Xhosan
	'xmf' => 'მარგალური',	# Mingrelian
	'yi' => 'ייִדיש',	# Yiddish
	'yo' => 'Yorùbá',	# Yoruba
	'yue' => '粵語',	# Cantonese -- (bug 8217) yue instead of zh-yue, http://www.sil.org/iso639-3/codes.asp?order=639_3&letter=y
	'za' => 'Vahcuengh',	# Zhuang
	'zea' => 'Zeêuws',	# Zeeuws/Zeaws
	'zh' => '中文',						# (Zhōng Wén) - Chinese
	'zh-classical' => '文言',			# Classical Chinese/Literary Chinese -- (see bug 8217)
	'zh-cn' => "\xE2\x80\xAA中文(中国大陆)\xE2\x80\xAC",	# Chinese (PRC)
	'zh-hans' => "\xE2\x80\xAA中文(简体)\xE2\x80\xAC",	# Chinese written using the Simplified Chinese script
	'zh-hant' => "\xE2\x80\xAA中文(繁體)\xE2\x80\xAC",	# Chinese written using the Traditional Chinese script
	'zh-hk' => "\xE2\x80\xAA中文(香港)\xE2\x80\xAC",	# Chinese (Hong Kong)
	'zh-min-nan' => 'Bân-lâm-gú',				# Min-nan -- (see bug 8217)
	'zh-mo' => "\xE2\x80\xAA中文(澳門)\xE2\x80\xAC",	# Chinese (Macau)
	'zh-my' => "\xE2\x80\xAA中文(马来西亚)\xE2\x80\xAC",	# Chinese (Malaysia)
	'zh-sg' => "\xE2\x80\xAA中文(新加坡)\xE2\x80\xAC",	# Chinese (Singapore)
	'zh-tw' => "\xE2\x80\xAA中文(台灣)\xE2\x80\xAC",	# Chinese (Taiwan)
	'zh-yue' => '粵語',					# Cantonese -- (see bug 8217)
	'zu' => 'isiZulu'		# Zulu
);
