<?php

/* This defines autoloading handler for whole MediaWiki framework */
function __autoload($class_name) {
	$classes = array(
		'AjaxDispatcher' => 'AjaxDispatcher.php',
		'AjaxCachePolicy' => 'AjaxFunctions.php',
		'Article' => 'Article.php',
		'AuthPlugin' => 'AuthPlugin.php',
		'BagOStuff' => 'BagOStuff.php',
		'HashBagOStuff' => 'BagOStuff.php',
		'SqlBagOStuff' => 'BagOStuff.php',
		'MediaWikiBagOStuff' => 'BagOStuff.php',
		'TurckBagOStuff' => 'BagOStuff.php',
		'APCBagOStuff' => 'BagOStuff.php',
		'eAccelBagOStuff' => 'BagOStuff.php',
		'Block' => 'Block.php',
		'CacheManager' => 'CacheManager.php',
		'CategoryPage' => 'CategoryPage.php',
		'Categoryfinder' => 'Categoryfinder.php',
		'RCCacheEntry' => 'ChangesList.php',
		'ChangesList' => 'ChangesList.php',
		'OldChangesList' => 'ChangesList.php',
		'EnhancedChangesList' => 'ChangesList.php',
		'DBObject' => 'Database.php',
		'Database' => 'Database.php',
		'DatabaseMysql' => 'Database.php',
		'ResultWrapper' => 'Database.php',
		'OracleBlob' => 'DatabaseOracle.php',
		'DatabaseOracle' => 'DatabaseOracle.php',
		'DatabasePgsql' => 'DatabasePostgreSQL.php',
		'DatabasePostgreSQL' => 'DatabasePostgreSQL.php',
		'DateFormatter' => 'DateFormatter.php',
		'DifferenceEngine' => 'DifferenceEngine.php',
		'_DiffOp' => 'DifferenceEngine.php',
		'_DiffOp_Copy' => 'DifferenceEngine.php',
		'_DiffOp_Delete' => 'DifferenceEngine.php',
		'_DiffOp_Add' => 'DifferenceEngine.php',
		'_DiffOp_Change' => 'DifferenceEngine.php',
		'_DiffEngine' => 'DifferenceEngine.php',
		'Diff' => 'DifferenceEngine.php',
		'MappedDiff' => 'DifferenceEngine.php',
		'DiffFormatter' => 'DifferenceEngine.php',
		'DjVuImage' => 'DjVuImage.php',
		'_HWLDF_WordAccumulator' => 'DifferenceEngine.php',
		'WordLevelDiff' => 'DifferenceEngine.php',
		'TableDiffFormatter' => 'DifferenceEngine.php',
		'EditPage' => 'EditPage.php',
		'MWException' => 'Exception.php',
		'Exif' => 'Exif.php',
		'FormatExif' => 'Exif.php',
		'WikiExporter' => 'Export.php',
		'XmlDumpWriter' => 'Export.php',
		'DumpOutput' => 'Export.php',
		'DumpFileOutput' => 'Export.php',
		'DumpPipeOutput' => 'Export.php',
		'DumpGZipOutput' => 'Export.php',
		'DumpBZip2Output' => 'Export.php',
		'Dump7ZipOutput' => 'Export.php',
		'DumpFilter' => 'Export.php',
		'DumpNotalkFilter' => 'Export.php',
		'DumpNamespaceFilter' => 'Export.php',
		'DumpLatestFilter' => 'Export.php',
		'DumpMultiWriter' => 'Export.php',
		'ExternalEdit' => 'ExternalEdit.php',
		'ExternalStore' => 'ExternalStore.php',
		'ExternalStoreDB' => 'ExternalStoreDB.php',
		'ExternalStoreHttp' => 'ExternalStoreHttp.php',
		'FakeTitle' => 'FakeTitle.php',
		'FeedItem' => 'Feed.php',
		'ChannelFeed' => 'Feed.php',
		'RSSFeed' => 'Feed.php',
		'AtomFeed' => 'Feed.php',
		'FileStore' => 'FileStore.php',
		'FSException' => 'FileStore.php',
		'FSTransaction' => 'FileStore.php',
		'ReplacerCallback' => 'GlobalFunctions.php',
		'HTMLForm' => 'HTMLForm.php',
		'HistoryBlob' => 'HistoryBlob.php',
		'ConcatenatedGzipHistoryBlob' => 'HistoryBlob.php',
		'HistoryBlobStub' => 'HistoryBlob.php',
		'HistoryBlobCurStub' => 'HistoryBlob.php',
		'HTMLCacheUpdate' => 'HTMLCacheUpdate.php',
		'HTMLCacheUpdateJob' => 'HTMLCacheUpdate.php',
		'Image' => 'Image.php',
		'ThumbnailImage' => 'Image.php',
		'ImageGallery' => 'ImageGallery.php',
		'ImagePage' => 'ImagePage.php',
		'ImageHistoryList' => 'ImagePage.php',
		'ImageRemote' => 'ImageRemote.php',
		'Job' => 'JobQueue.php',
		'Licenses' => 'Licenses.php',
		'License' => 'Licenses.php',
		'LinkBatch' => 'LinkBatch.php',
		'LinkCache' => 'LinkCache.php',
		'LinkFilter' => 'LinkFilter.php',
		'Linker' => 'Linker.php',
		'LinksUpdate' => 'LinksUpdate.php',
		'LoadBalancer' => 'LoadBalancer.php',
		'LogPage' => 'LogPage.php',
		'MacBinary' => 'MacBinary.php',
		'MagicWord' => 'MagicWord.php',
		'MathRenderer' => 'Math.php',
		'MessageCache' => 'MessageCache.php',
		'MimeMagic' => 'MimeMagic.php',
		'Namespace' => 'Namespace.php',
		'FakeMemCachedClient' => 'ObjectCache.php',
		'ObjectCacheManager' => 'ObjectCache.php',
		'MemCachedClientforWiki' => 'ObjectCache.php',
		'OutputPage' => 'OutputPage.php',
		'PageHistory' => 'PageHistory.php',
		'Parser' => 'Parser.php',
		'ParserOutput' => 'Parser.php',
		'ParserOptions' => 'Parser.php',
		'ParserCache' => 'ParserCache.php',
		'element' => 'ParserXML.php',
		'xml2php' => 'ParserXML.php',
		'ParserXML' => 'ParserXML.php',
		'ProfilerSimple' => 'ProfilerSimple.php',
		'ProfilerSimpleUDP' => 'ProfilerSimpleUDP.php',
		'Profiler' => 'Profiling.php',
		'ProxyTools' => 'ProxyTools.php',
		'ProtectionForm' => 'ProtectionForm.php',
		'QueryPage' => 'QueryPage.php',
		'PageQueryPage' => 'QueryPage.php',
		'RawPage' => 'RawPage.php',
		'RecentChange' => 'RecentChange.php',
		'Revision' => 'Revision.php',
		'Sanitizer' => 'Sanitizer.php',
		'SearchEngine' => 'SearchEngine.php',
		'SearchResultSet' => 'SearchEngine.php',
		'SearchResult' => 'SearchEngine.php',
		'SearchEngineDummy' => 'SearchEngine.php',
		'SearchMySQL' => 'SearchMySQL.php',
		'MySQLSearchResultSet' => 'SearchMySQL.php',
		'SearchMySQL4' => 'SearchMySQL4.php',
		'SearchTsearch2' => 'SearchTsearch2.php',
		'SearchUpdate' => 'SearchUpdate.php',
		'SearchUpdateMyISAM' => 'SearchUpdate.php',
		'SiteConfiguration' => 'SiteConfiguration.php',
		'SiteStatsUpdate' => 'SiteStatsUpdate.php',
		'Skin' => 'Skin.php',
		'MediaWiki_I18N' => 'SkinTemplate.php',
		'SkinTemplate' => 'SkinTemplate.php',
		'QuickTemplate' => 'SkinTemplate.php',
		'SpecialAllpages' => 'SpecialAllpages.php',
		'AncientPagesPage' => 'SpecialAncientpages.php',
		'IPBlockForm' => 'SpecialBlockip.php',
		'BookSourceList' => 'SpecialBooksources.php',
		'BrokenRedirectsPage' => 'SpecialBrokenRedirects.php',
		'CategoriesPage' => 'SpecialCategories.php',
		'EmailConfirmation' => 'SpecialConfirmemail.php',
		'ContribsFinder' => 'SpecialContributions.php',
		'DeadendPagesPage' => 'SpecialDeadendpages.php',
		'DisambiguationsPage' => 'SpecialDisambiguations.php',
		'DoubleRedirectsPage' => 'SpecialDoubleRedirects.php',
		'EmailUserForm' => 'SpecialEmailuser.php',
		'WikiRevision' => 'SpecialImport.php',
		'WikiImporter' => 'SpecialImport.php',
		'ImportStringSource' => 'SpecialImport.php',
		'ImportStreamSource' => 'SpecialImport.php',
		'IPUnblockForm' => 'SpecialIpblocklist.php',
		'ListredirectsPage' => 'SpecialListredirects.php',
		'ListUsersPage' => 'SpecialListusers.php',
		'DBLockForm' => 'SpecialLockdb.php',
		'LogReader' => 'SpecialLog.php',
		'LogViewer' => 'SpecialLog.php',
		'LonelyPagesPage' => 'SpecialLonelypages.php',
		'LongPagesPage' => 'SpecialLongpages.php',
		'MIMEsearchPage' => 'SpecialMIMEsearch.php',
		'MostcategoriesPage' => 'SpecialMostcategories.php',
		'MostimagesPage' => 'SpecialMostimages.php',
		'MostlinkedPage' => 'SpecialMostlinked.php',
		'MostlinkedCategoriesPage' => 'SpecialMostlinkedcategories.php',
		'MostrevisionsPage' => 'SpecialMostrevisions.php',
		'MovePageForm' => 'SpecialMovepage.php',
		'NewPagesPage' => 'SpecialNewpages.php',
		'SpecialPage' => 'SpecialPage.php',
		'UnlistedSpecialPage' => 'SpecialPage.php',
		'IncludableSpecialPage' => 'SpecialPage.php',
		'PopularPagesPage' => 'SpecialPopularpages.php',
		'PreferencesForm' => 'SpecialPreferences.php',
		'SpecialPrefixindex' => 'SpecialPrefixindex.php',
		'RevisionDeleteForm' => 'SpecialRevisiondelete.php',
		'RevisionDeleter' => 'SpecialRevisiondelete.php',
		'SpecialSearch' => 'SpecialSearch.php',
		'ShortPagesPage' => 'SpecialShortpages.php',
		'UncategorizedCategoriesPage' => 'SpecialUncategorizedcategories.php',
		'UncategorizedPagesPage' => 'SpecialUncategorizedpages.php',
		'PageArchive' => 'SpecialUndelete.php',
		'UndeleteForm' => 'SpecialUndelete.php',
		'DBUnlockForm' => 'SpecialUnlockdb.php',
		'UnusedCategoriesPage' => 'SpecialUnusedcategories.php',
		'UnusedimagesPage' => 'SpecialUnusedimages.php',
		'UnusedtemplatesPage' => 'SpecialUnusedtemplates.php',
		'UnwatchedpagesPage' => 'SpecialUnwatchedpages.php',
		'UploadForm' => 'SpecialUpload.php',
		'UploadFormMogile' => 'SpecialUploadMogile.php',
		'LoginForm' => 'SpecialUserlogin.php',
		'UserrightsForm' => 'SpecialUserrights.php',
		'SpecialVersion' => 'SpecialVersion.php',
		'WantedCategoriesPage' => 'SpecialWantedcategories.php',
		'WantedPagesPage' => 'SpecialWantedpages.php',
		'WhatLinksHerePage' => 'SpecialWhatlinkshere.php',
		'SquidUpdate' => 'SquidUpdate.php',
		'Title' => 'Title.php',
		'User' => 'User.php',
		'MailAddress' => 'UserMailer.php',
		'EmailNotification' => 'UserMailer.php',
		'WatchedItem' => 'WatchedItem.php',
		'WebRequest' => 'WebRequest.php',
		'FauxRequest' => 'WebRequest.php',
		'MediaWiki' => 'Wiki.php',
		'WikiError' => 'WikiError.php',
		'WikiErrorMsg' => 'WikiError.php',
		'WikiXmlError' => 'WikiError.php',
		'ZhClient' => 'ZhClient.php',
		'memcached' => 'memcached-client.php',
		'UtfNormal' => 'normal/UtfNormal.php'
	);
	if (array_key_exists($class_name, $classes)) {
		require($classes[$class_name]);
	} else {
		return false;
	}
}

?>
