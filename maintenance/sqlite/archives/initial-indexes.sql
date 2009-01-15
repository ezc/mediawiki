-- Correct for the total lack of indexes in the MW 1.13 SQLite schema
--
-- Unique indexes need to be handled with INSERT SELECT since just running
-- the CREATE INDEX statement will fail if there are duplicate values.
--
-- Ignore duplicates, several tables will have them (e.g. bug 16966) but in 
-- most cases it's harmless to discard them. We'll keep the old tables with 
-- duplicates in so that the user can recover them in case of disaster.

--------------------------------------------------------------------------------
-- Drop temporary tables from aborted runs
--------------------------------------------------------------------------------

DROP TABLE IF EXISTS /*_*/user_tmp;
DROP TABLE IF EXISTS /*_*/user_groups_tmp;
DROP TABLE IF EXISTS /*_*/page_tmp;
DROP TABLE IF EXISTS /*_*/revision_tmp;
DROP TABLE IF EXISTS /*_*/pagelinks_tmp;
DROP TABLE IF EXISTS /*_*/templatelinks_tmp;
DROP TABLE IF EXISTS /*_*/imagelinks_tmp;
DROP TABLE IF EXISTS /*_*/categorylinks_tmp;
DROP TABLE IF EXISTS /*_*/category_tmp;
DROP TABLE IF EXISTS /*_*/langlinks_tmp;
DROP TABLE IF EXISTS /*_*/site_stats_tmp;
DROP TABLE IF EXISTS /*_*/ipblocks_tmp;
DROP TABLE IF EXISTS /*_*/watchlist_tmp;
DROP TABLE IF EXISTS /*_*/math_tmp;
DROP TABLE IF EXISTS /*_*/interwiki_tmp;
DROP TABLE IF EXISTS /*_*/page_restrictions_tmp;
DROP TABLE IF EXISTS /*_*/protected_titles_tmp;
DROP TABLE IF EXISTS /*_*/page_props_tmp;

--------------------------------------------------------------------------------
-- Create new tables
--------------------------------------------------------------------------------

CREATE TABLE /*_*/user_tmp (
  user_id int unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
  user_name varchar(255) binary NOT NULL default '',
  user_real_name varchar(255) binary NOT NULL default '',
  user_password tinyblob NOT NULL,
  user_newpassword tinyblob NOT NULL,
  user_newpass_time binary(14),
  user_email tinytext NOT NULL,
  user_options blob NOT NULL,
  user_touched binary(14) NOT NULL default '',
  user_token binary(32) NOT NULL default '',
  user_email_authenticated binary(14),
  user_email_token binary(32),
  user_email_token_expires binary(14),
  user_registration binary(14),
  user_editcount int
);
CREATE UNIQUE INDEX user_name ON /*_*/user_tmp (user_name);
CREATE INDEX user_email_token ON /*_*/user_tmp (user_email_token);


CREATE TABLE /*_*/user_groups_tmp (
  ug_user int unsigned NOT NULL default 0,
  ug_group varbinary(16) NOT NULL default ''
);

CREATE UNIQUE INDEX ug_user_group ON /*_*/user_groups_tmp (ug_user,ug_group);
CREATE INDEX ug_group ON /*_*/user_groups_tmp (ug_group);

CREATE TABLE /*_*/page_tmp (
  page_id int unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
  page_namespace int NOT NULL,
  page_title varchar(255) binary NOT NULL,
  page_restrictions tinyblob NOT NULL,
  page_counter bigint unsigned NOT NULL default 0,
  page_is_redirect tinyint unsigned NOT NULL default 0,
  page_is_new tinyint unsigned NOT NULL default 0,
  page_random real unsigned NOT NULL,
  page_touched binary(14) NOT NULL default '',
  page_latest int unsigned NOT NULL,
  page_len int unsigned NOT NULL
);

CREATE UNIQUE INDEX name_title ON /*_*/page_tmp (page_namespace,page_title);
CREATE INDEX page_random ON /*_*/page_tmp (page_random);
CREATE INDEX page_len ON /*_*/page_tmp (page_len);


CREATE TABLE /*_*/revision_tmp (
  rev_id int unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
  rev_page int unsigned NOT NULL,
  rev_text_id int unsigned NOT NULL,
  rev_comment tinyblob NOT NULL,
  rev_user int unsigned NOT NULL default 0,
  rev_user_text varchar(255) binary NOT NULL default '',
  rev_timestamp binary(14) NOT NULL default '',
  rev_minor_edit tinyint unsigned NOT NULL default 0,
  rev_deleted tinyint unsigned NOT NULL default 0,
  rev_len int unsigned,
  rev_parent_id int unsigned default NULL
);
CREATE UNIQUE INDEX rev_page_id ON /*_*/revision_tmp (rev_page, rev_id);
CREATE INDEX rev_timestamp ON /*_*/revision_tmp (rev_timestamp);
CREATE INDEX page_timestamp ON /*_*/revision_tmp (rev_page,rev_timestamp);
CREATE INDEX user_timestamp ON /*_*/revision_tmp (rev_user,rev_timestamp);
CREATE INDEX usertext_timestamp ON /*_*/revision_tmp (rev_user_text,rev_timestamp);

CREATE TABLE /*_*/pagelinks_tmp (
  pl_from int unsigned NOT NULL default 0,
  pl_namespace int NOT NULL default 0,
  pl_title varchar(255) binary NOT NULL default ''
);

CREATE UNIQUE INDEX pl_from ON /*_*/pagelinks_tmp (pl_from,pl_namespace,pl_title);
CREATE INDEX pl_namespace_title ON /*_*/pagelinks_tmp (pl_namespace,pl_title,pl_from);


CREATE TABLE /*_*/templatelinks_tmp (
  tl_from int unsigned NOT NULL default 0,
  tl_namespace int NOT NULL default 0,
  tl_title varchar(255) binary NOT NULL default ''
);

CREATE UNIQUE INDEX tl_from ON /*_*/templatelinks_tmp (tl_from,tl_namespace,tl_title);
CREATE INDEX tl_namespace_title ON /*_*/templatelinks_tmp (tl_namespace,tl_title,tl_from);


CREATE TABLE /*_*/imagelinks_tmp (
  il_from int unsigned NOT NULL default 0,
  il_to varchar(255) binary NOT NULL default ''
) /*$wgDBTableOptions*/;
CREATE UNIQUE INDEX il_from ON /*_*/imagelinks_tmp (il_from,il_to);
CREATE INDEX il_to ON /*_*/imagelinks_tmp (il_to,il_from);


CREATE TABLE /*_*/categorylinks_tmp (
  cl_from int unsigned NOT NULL default 0,
  cl_to varchar(255) binary NOT NULL default '',
  cl_sortkey varchar(70) binary NOT NULL default '',
  cl_timestamp timestamp NOT NULL
);
CREATE UNIQUE INDEX cl_from ON /*_*/categorylinks_tmp (cl_from,cl_to);
CREATE INDEX cl_sortkey ON /*_*/categorylinks_tmp (cl_to,cl_sortkey,cl_from);
CREATE INDEX cl_timestamp ON /*_*/categorylinks_tmp (cl_to,cl_timestamp);


CREATE TABLE /*_*/category_tmp (
  cat_id int unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
  cat_title varchar(255) binary NOT NULL,
  cat_pages int signed NOT NULL default 0,
  cat_subcats int signed NOT NULL default 0,
  cat_files int signed NOT NULL default 0,
  cat_hidden tinyint unsigned NOT NULL default 0
);
CREATE UNIQUE INDEX cat_title ON /*_*/category_tmp (cat_title);
CREATE INDEX cat_pages ON /*_*/category_tmp (cat_pages);

CREATE TABLE /*_*/langlinks_tmp (
  ll_from int unsigned NOT NULL default 0,
  ll_lang varbinary(20) NOT NULL default '',
  ll_title varchar(255) binary NOT NULL default ''
);

CREATE UNIQUE INDEX ll_from ON /*_*/langlinks_tmp (ll_from, ll_lang);
CREATE INDEX ll_lang_title ON /*_*/langlinks_tmp (ll_lang, ll_title);


CREATE TABLE /*_*/site_stats_tmp (
  ss_row_id int unsigned NOT NULL,
  ss_total_views bigint unsigned default 0,
  ss_total_edits bigint unsigned default 0,
  ss_good_articles bigint unsigned default 0,
  ss_total_pages bigint default '-1',
  ss_users bigint default '-1',
  ss_active_users bigint default '-1',
  ss_admins int default '-1',
  ss_images int default 0
);
CREATE UNIQUE INDEX ss_row_id ON /*_*/site_stats_tmp (ss_row_id);


CREATE TABLE /*_*/ipblocks_tmp (
  ipb_id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  ipb_address tinyblob NOT NULL,
  ipb_user int unsigned NOT NULL default 0,
  ipb_by int unsigned NOT NULL default 0,
  ipb_by_text varchar(255) binary NOT NULL default '',
  ipb_reason tinyblob NOT NULL,
  ipb_timestamp binary(14) NOT NULL default '',
  ipb_auto bool NOT NULL default 0,

  -- If set to 1, block applies only to logged-out users
  ipb_anon_only bool NOT NULL default 0,
  ipb_create_account bool NOT NULL default 1,
  ipb_enable_autoblock bool NOT NULL default '1',
  ipb_expiry varbinary(14) NOT NULL default '',
  ipb_range_start tinyblob NOT NULL,
  ipb_range_end tinyblob NOT NULL,
  ipb_deleted bool NOT NULL default 0,
  ipb_block_email bool NOT NULL default 0,
  ipb_allow_usertalk bool NOT NULL default 0
);
CREATE UNIQUE INDEX ipb_address ON /*_*/ipblocks_tmp (ipb_address(255), ipb_user, ipb_auto, ipb_anon_only);
CREATE INDEX ipb_user ON /*_*/ipblocks_tmp (ipb_user);
CREATE INDEX ipb_range ON /*_*/ipblocks_tmp (ipb_range_start(8), ipb_range_end(8));
CREATE INDEX ipb_timestamp ON /*_*/ipblocks_tmp (ipb_timestamp);
CREATE INDEX ipb_expiry ON /*_*/ipblocks_tmp (ipb_expiry);


CREATE TABLE /*_*/watchlist_tmp (
  wl_user int unsigned NOT NULL,
  wl_namespace int NOT NULL default 0,
  wl_title varchar(255) binary NOT NULL default '',
  wl_notificationtimestamp varbinary(14)
);

CREATE UNIQUE INDEX wl_user_namespace_title ON /*_*/watchlist_tmp (wl_user, wl_namespace, wl_title);
CREATE INDEX namespace_title ON /*_*/watchlist_tmp (wl_namespace, wl_title);


CREATE TABLE /*_*/math_tmp (
  math_inputhash varbinary(16) NOT NULL,
  math_outputhash varbinary(16) NOT NULL,
  math_html_conservativeness tinyint NOT NULL,
  math_html text,
  math_mathml text  
);

CREATE UNIQUE INDEX math_inputhash ON /*_*/math_tmp (math_inputhash);


CREATE TABLE /*_*/interwiki_tmp (
  iw_prefix varchar(32) NOT NULL,
  iw_url blob NOT NULL,
  iw_local bool NOT NULL,
  iw_trans tinyint NOT NULL default 0
);

CREATE UNIQUE INDEX iw_prefix ON /*_*/interwiki_tmp (iw_prefix);


CREATE TABLE /*_*/page_restrictions_tmp (
  pr_page int NOT NULL,
  pr_type varbinary(60) NOT NULL,
  pr_level varbinary(60) NOT NULL,
  pr_cascade tinyint NOT NULL,
  pr_user int NULL,
  pr_expiry varbinary(14) NULL,
  pr_id int unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT
);

CREATE UNIQUE INDEX pr_pagetype ON /*_*/page_restrictions_tmp (pr_page,pr_type);
CREATE UNIQUE INDEX pr_typelevel ON /*_*/page_restrictions_tmp (pr_type,pr_level);
CREATE UNIQUE INDEX pr_level ON /*_*/page_restrictions_tmp (pr_level);
CREATE UNIQUE INDEX pr_cascade ON /*_*/page_restrictions_tmp (pr_cascade);

CREATE TABLE /*_*/protected_titles_tmp (
  pt_namespace int NOT NULL,
  pt_title varchar(255) binary NOT NULL,
  pt_user int unsigned NOT NULL,
  pt_reason tinyblob,
  pt_timestamp binary(14) NOT NULL,
  pt_expiry varbinary(14) NOT NULL default '',
  pt_create_perm varbinary(60) NOT NULL
);
CREATE UNIQUE INDEX pt_namespace_title ON /*_*/protected_titles_tmp (pt_namespace,pt_title);
CREATE INDEX pt_timestamp ON /*_*/protected_titles_tmp (pt_timestamp);

CREATE TABLE /*_*/page_props_tmp (
  pp_page int NOT NULL,
  pp_propname varbinary(60) NOT NULL,
  pp_value blob NOT NULL
);
CREATE UNIQUE INDEX pp_page_propname ON /*_*/page_props_tmp (pp_page,pp_propname);

--------------------------------------------------------------------------------
-- Populate the new tables using INSERT SELECT
--------------------------------------------------------------------------------

INSERT OR IGNORE INTO /*_*/user_tmp SELECT * FROM /*_*/user;
INSERT OR IGNORE INTO /*_*/user_groups_tmp SELECT * FROM /*_*/user_groups;
INSERT OR IGNORE INTO /*_*/page_tmp SELECT * FROM /*_*/page;
INSERT OR IGNORE INTO /*_*/revision_tmp SELECT * FROM /*_*/revision;
INSERT OR IGNORE INTO /*_*/pagelinks_tmp SELECT * FROM /*_*/pagelinks;
INSERT OR IGNORE INTO /*_*/templatelinks_tmp SELECT * FROM /*_*/templatelinks;
INSERT OR IGNORE INTO /*_*/imagelinks_tmp SELECT * FROM /*_*/imagelinks;
INSERT OR IGNORE INTO /*_*/categorylinks_tmp SELECT * FROM /*_*/categorylinks;
INSERT OR IGNORE INTO /*_*/category_tmp SELECT * FROM /*_*/category;
INSERT OR IGNORE INTO /*_*/langlinks_tmp SELECT * FROM /*_*/langlinks;
INSERT OR IGNORE INTO /*_*/site_stats_tmp SELECT * FROM /*_*/site_stats;
INSERT OR IGNORE INTO /*_*/ipblocks_tmp SELECT * FROM /*_*/ipblocks;
INSERT OR IGNORE INTO /*_*/watchlist_tmp SELECT * FROM /*_*/watchlist;
INSERT OR IGNORE INTO /*_*/math_tmp SELECT * FROM /*_*/math;
INSERT OR IGNORE INTO /*_*/interwiki_tmp SELECT * FROM /*_*/interwiki;
INSERT OR IGNORE INTO /*_*/page_restrictions_tmp SELECT * FROM /*_*/page_restrictions;
INSERT OR IGNORE INTO /*_*/protected_titles_tmp SELECT * FROM /*_*/protected_titles;
INSERT OR IGNORE INTO /*_*/page_props_tmp SELECT * FROM /*_*/page_props;

--------------------------------------------------------------------------------
-- Do the table renames
--------------------------------------------------------------------------------

ALTER TABLE /*_*/user RENAME TO /*_*/user_old_13;
ALTER TABLE /*_*/user_tmp RENAME TO /*_*/user;
ALTER TABLE /*_*/user_groups RENAME TO /*_*/user_groups_old_13;
ALTER TABLE /*_*/user_groups_tmp RENAME TO /*_*/user_groups;
ALTER TABLE /*_*/page RENAME TO /*_*/page_old_13;
ALTER TABLE /*_*/page_tmp RENAME TO /*_*/page;
ALTER TABLE /*_*/revision RENAME TO /*_*/revision_old_13;
ALTER TABLE /*_*/revision_tmp RENAME TO /*_*/revision;
ALTER TABLE /*_*/pagelinks RENAME TO /*_*/pagelinks_old_13;
ALTER TABLE /*_*/pagelinks_tmp RENAME TO /*_*/pagelinks;
ALTER TABLE /*_*/templatelinks RENAME TO /*_*/templatelinks_old_13;
ALTER TABLE /*_*/templatelinks_tmp RENAME TO /*_*/templatelinks;
ALTER TABLE /*_*/imagelinks RENAME TO /*_*/imagelinks_old_13;
ALTER TABLE /*_*/imagelinks_tmp RENAME TO /*_*/imagelinks;
ALTER TABLE /*_*/categorylinks RENAME TO /*_*/categorylinks_old_13;
ALTER TABLE /*_*/categorylinks_tmp RENAME TO /*_*/categorylinks;
ALTER TABLE /*_*/category RENAME TO /*_*/category_old_13;
ALTER TABLE /*_*/category_tmp RENAME TO /*_*/category;
ALTER TABLE /*_*/langlinks RENAME TO /*_*/langlinks_old_13;
ALTER TABLE /*_*/langlinks_tmp RENAME TO /*_*/langlinks;
ALTER TABLE /*_*/site_stats RENAME TO /*_*/site_stats_old_13;
ALTER TABLE /*_*/site_stats_tmp RENAME TO /*_*/site_stats;
ALTER TABLE /*_*/ipblocks RENAME TO /*_*/ipblocks_old_13;
ALTER TABLE /*_*/ipblocks_tmp RENAME TO /*_*/ipblocks;
ALTER TABLE /*_*/watchlist RENAME TO /*_*/watchlist_old_13;
ALTER TABLE /*_*/watchlist_tmp RENAME TO /*_*/watchlist;
ALTER TABLE /*_*/math RENAME TO /*_*/math_old_13;
ALTER TABLE /*_*/math_tmp RENAME TO /*_*/math;
ALTER TABLE /*_*/interwiki RENAME TO /*_*/interwiki_old_13;
ALTER TABLE /*_*/interwiki_tmp RENAME TO /*_*/interwiki;
ALTER TABLE /*_*/page_restrictions RENAME TO /*_*/page_restrictions_old_13;
ALTER TABLE /*_*/page_restrictions_tmp RENAME TO /*_*/page_restrictions;
ALTER TABLE /*_*/protected_titles RENAME TO /*_*/protected_titles_old_13;
ALTER TABLE /*_*/protected_titles_tmp RENAME TO /*_*/protected_titles;
ALTER TABLE /*_*/page_props RENAME TO /*_*/page_props_old_13;
ALTER TABLE /*_*/page_props_tmp RENAME TO /*_*/page_props;

--------------------------------------------------------------------------------
-- Drop and create tables with unique indexes but no valuable data
--------------------------------------------------------------------------------


DROP TABLE IF EXISTS /*_*/searchindex;
CREATE TABLE /*_*/searchindex (
  si_page int unsigned NOT NULL,
  si_title varchar(255) NOT NULL default '',
  si_text mediumtext NOT NULL
);
CREATE UNIQUE INDEX si_page ON /*_*/searchindex (si_page);
CREATE INDEX si_title ON /*_*/searchindex (si_title);
CREATE INDEX si_text ON /*_*/searchindex (si_text);

DROP TABLE IF EXISTS /*_*/transcache;
CREATE TABLE /*_*/transcache (
  tc_url varbinary(255) NOT NULL,
  tc_contents text,
  tc_time int NOT NULL
) /*$wgDBTableOptions*/;
CREATE UNIQUE INDEX tc_url_idx ON /*_*/transcache (tc_url);

DROP TABLE IF EXISTS /*_*/querycache_info;
CREATE TABLE /*_*/querycache_info (
  qci_type varbinary(32) NOT NULL default '',
  qci_timestamp binary(14) NOT NULL default '19700101000000'
) /*$wgDBTableOptions*/;
CREATE UNIQUE INDEX qci_type ON /*_*/querycache_info (qci_type);

--------------------------------------------------------------------------------
-- Empty some cache tables to make the update faster
--------------------------------------------------------------------------------

DELETE FROM /*_*/querycache;
DELETE FROM /*_*/objectcache;
DELETE FROM /*_*/querycachetwo;

--------------------------------------------------------------------------------
-- Add indexes to tables with no unique indexes
--------------------------------------------------------------------------------

CREATE INDEX un_user_id ON /*_*/user_newtalk (user_id);
CREATE INDEX un_user_ip ON /*_*/user_newtalk (user_ip);
CREATE INDEX name_title_timestamp ON /*_*/archive (ar_namespace,ar_title,ar_timestamp);
CREATE INDEX ar_usertext_timestamp ON /*_*/archive (ar_user_text,ar_timestamp);
CREATE INDEX el_from ON /*_*/externallinks (el_from, el_to(40));
CREATE INDEX el_to ON /*_*/externallinks (el_to(60), el_from);
CREATE INDEX el_index ON /*_*/externallinks (el_index(60));
CREATE INDEX img_usertext_timestamp ON /*_*/image (img_user_text,img_timestamp);
CREATE INDEX img_size ON /*_*/image (img_size);
CREATE INDEX img_timestamp ON /*_*/image (img_timestamp);
CREATE INDEX img_sha1 ON /*_*/image (img_sha1);
CREATE INDEX oi_usertext_timestamp ON /*_*/oldimage (oi_user_text,oi_timestamp);
CREATE INDEX oi_name_timestamp ON /*_*/oldimage (oi_name,oi_timestamp);
CREATE INDEX oi_name_archive_name ON /*_*/oldimage (oi_name,oi_archive_name(14));
CREATE INDEX oi_sha1 ON /*_*/oldimage (oi_sha1);
CREATE INDEX fa_name ON /*_*/filearchive (fa_name, fa_timestamp);
CREATE INDEX fa_group_key ON /*_*/filearchive (fa_storage_group, fa_storage_key);
CREATE INDEX fa_deleted_timestamp ON /*_*/filearchive (fa_deleted_timestamp);
CREATE INDEX fa_user_timestamp ON /*_*/filearchive (fa_user_text,fa_timestamp);
CREATE INDEX rc_timestamp ON /*_*/recentchanges (rc_timestamp);
CREATE INDEX rc_namespace_title ON /*_*/recentchanges (rc_namespace, rc_title);
CREATE INDEX rc_cur_id ON /*_*/recentchanges (rc_cur_id);
CREATE INDEX new_name_timestamp ON /*_*/recentchanges (rc_new,rc_namespace,rc_timestamp);
CREATE INDEX rc_ip ON /*_*/recentchanges (rc_ip);
CREATE INDEX rc_ns_usertext ON /*_*/recentchanges (rc_namespace, rc_user_text);
CREATE INDEX rc_user_text ON /*_*/recentchanges (rc_user_text, rc_timestamp);
CREATE INDEX qc_type_value ON /*_*/querycache (qc_type,qc_value);
CREATE INDEX oc_exptime ON /*_*/objectcache (exptime);
CREATE INDEX type_time ON /*_*/logging (log_type, log_timestamp);
CREATE INDEX user_time ON /*_*/logging (log_user, log_timestamp);
CREATE INDEX page_time ON /*_*/logging (log_namespace, log_title, log_timestamp);
CREATE INDEX times ON /*_*/logging (log_timestamp);
CREATE INDEX tb_page ON /*_*/trackbacks (tb_page);
CREATE INDEX job_cmd_namespace_title ON /*_*/job (job_cmd, job_namespace, job_title);
CREATE INDEX rd_ns_title ON /*_*/redirect (rd_namespace,rd_title,rd_from);
CREATE INDEX qcc_type ON /*_*/querycachetwo (qcc_type,qcc_value);
CREATE INDEX qcc_title ON /*_*/querycachetwo (qcc_type,qcc_namespace,qcc_title);
CREATE INDEX qcc_titletwo ON /*_*/querycachetwo (qcc_type,qcc_namespacetwo,qcc_titletwo);

INSERT INTO /*_*/updatelog VALUES ('initial_indexes');
