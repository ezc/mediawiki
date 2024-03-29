<?php
/**
 * Sqlite-specific updater.
 *
 * @file
 * @ingroup Deployment
 */

/**
 * Class for handling updates to Sqlite databases.
 *
 * @ingroup Deployment
 * @since 1.17
 */
class SqliteUpdater extends DatabaseUpdater {

	protected function getCoreUpdateList() {
		return array(
			// 1.14
			array( 'addField', 'site_stats',    'ss_active_users',  'patch-ss_active_users.sql' ),
			array( 'doActiveUsersInit' ),
			array( 'addField', 'ipblocks',      'ipb_allow_usertalk', 'patch-ipb_allow_usertalk.sql' ),
			array( 'sqliteInitialIndexes' ),

			// 1.15
			array( 'addTable', 'change_tag',                        'patch-change_tag.sql' ),
			array( 'addTable', 'tag_summary',                       'patch-change_tag.sql' ),
			array( 'addTable', 'valid_tag',                         'patch-change_tag.sql' ),

			// 1.16
			array( 'addTable', 'user_properties',                   'patch-user_properties.sql' ),
			array( 'addTable', 'log_search',                        'patch-log_search.sql' ),
			array( 'addField', 'logging',       'log_user_text',    'patch-log_user_text.sql' ),
			array( 'doLogUsertextPopulation' ), # listed separately from the previous update because 1.16 was released without this update
			array( 'doLogSearchPopulation' ),
			array( 'addTable', 'l10n_cache',                        'patch-l10n_cache.sql' ),
			array( 'addTable', 'external_user',                     'patch-external_user.sql' ),
			array( 'addIndex', 'log_search',    'ls_field_val',     'patch-log_search-rename-index.sql' ),
			array( 'addIndex', 'change_tag',    'change_tag_rc_tag', 'patch-change_tag-indexes.sql' ),
			array( 'addField', 'redirect',      'rd_interwiki',     'patch-rd_interwiki.sql' ),
			array( 'doUpdateTranscacheField' ),
			array( 'sqliteSetupSearchindex' ),

			// 1.17
			array( 'addTable', 'iwlinks',                           'patch-iwlinks.sql' ),
			array( 'addIndex', 'iwlinks',   'iwl_prefix_title_from', 'patch-rename-iwl_prefix.sql' ),
			array( 'addField', 'updatelog', 'ul_value',             'patch-ul_value.sql' ),
			array( 'addField', 'interwiki',     'iw_api',           'patch-iw_api_and_wikiid.sql' ),
			array( 'dropIndex', 'iwlinks', 'iwl_prefix',            'patch-kill-iwl_prefix.sql' ),
			array( 'dropIndex', 'iwlinks', 'iwl_prefix_from_title', 'patch-kill-iwl_pft.sql' ),
			array( 'addField', 'categorylinks', 'cl_collation',     'patch-categorylinks-better-collation.sql' ),
			array( 'doCollationUpdate' ),
			array( 'addTable', 'msg_resource',                      'patch-msg_resource.sql' ),
			array( 'addTable', 'module_deps',                       'patch-module_deps.sql' ),
			array( 'dropIndex', 'archive', 'ar_page_revid',         'patch-archive_kill_ar_page_revid.sql' ),
			array( 'addIndex', 'archive', 'ar_revid',               'patch-archive_ar_revid.sql' ),

			// 1.18
			array( 'addIndex', 'user',          'user_email',       'patch-user_email_index.sql' ),
			array( 'addTable', 'uploadstash',                       'patch-uploadstash.sql' ),
			array( 'addTable', 'user_former_groups',                'patch-user_former_groups.sql'),

			// 1.19
			array( 'addTable', 'config',                            'patch-config.sql' ),
			array( 'addIndex', 'logging',       'type_action',      'patch-logging-type-action-index.sql'),
			array( 'doMigrateUserOptions' ),
			array( 'dropField', 'user',         'user_options', 'patch-drop-user_options.sql' ),
			array( 'addField', 'revision',      'rev_sha1',         'patch-rev_sha1.sql' ),
			array( 'addField', 'archive',       'ar_sha1',          'patch-ar_sha1.sql' ),
			array( 'addIndex', 'page', 'page_redirect_namespace_len', 'patch-page_redirect_namespace_len.sql' ),
			array( 'modifyField', 'user', 'ug_group', 'patch-ug_group-length-increase.sql' ),
			array( 'addField',	'uploadstash',	'us_chunk_inx',		'patch-uploadstash_chunk.sql' ),
			array( 'addfield', 'job',           'job_timestamp',    'patch-jobs-add-timestamp.sql' ),
		);
	}

	protected function sqliteInitialIndexes() {
		// initial-indexes.sql fails if the indexes are already present, so we perform a quick check if our database is newer.
		if ( $this->updateRowExists( 'initial_indexes' ) || $this->db->indexExists( 'user', 'user_name', __METHOD__ ) ) {
			$this->output( "...have initial indexes\n" );
			return;
		}
		$this->output( "Adding initial indexes..." );
		$this->applyPatch( 'initial-indexes.sql' );
		$this->output( "done\n" );
	}

	protected function sqliteSetupSearchindex() {
		$module = DatabaseSqlite::getFulltextSearchModule();
		$fts3tTable = $this->updateRowExists( 'fts3' );
		if ( $fts3tTable &&  !$module ) {
			$this->output( '...PHP is missing FTS3 support, downgrading tables...' );
			$this->applyPatch( 'searchindex-no-fts.sql' );
			$this->output( "done\n" );
		} elseif ( !$fts3tTable && $module == 'FTS3' ) {
			$this->output( '...adding FTS3 search capabilities...' );
			$this->applyPatch( 'searchindex-fts3.sql' );
			$this->output( "done\n" );
		} else {
			$this->output( "...fulltext search table appears to be in order.\n" );
		}
	}
}
