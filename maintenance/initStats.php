<?php

/**
 * Maintenance script to re-initialise or update the site statistics table
 *
 * @package MediaWiki
 * @subpackage Maintenance
 * @author Brion Vibber
 * @author Rob Church <robchur@gmail.com>
 * @licence GNU General Public Licence 2.0 or later
 */
 
$options = array( 'help', 'update' );
require_once( 'commandLine.inc' );
echo( "Refresh Site Statistics\n\n" );
$dbr =& wfGetDB( DB_SLAVE );
$fname = 'initStats';

echo( "Counting total edits..." );
$edits = $dbr->selectField( 'revision', 'COUNT(*)', '', $fname );
echo( "{$edits}\nCounting number of articles..." );

$good  = $dbr->selectField( 'page', 'COUNT(*)', array( 'page_namespace' => 0, 'page_is_redirect' => 0, 'page_len > 0' ), $fname );
echo( "{$good}\nCounting total pages..." );

$pages = $dbr->selectField( 'page', 'COUNT(*)', '', $fname );
echo( "{$pages}\nCounting number of users..." );

$users = $dbr->selectField( 'user', 'COUNT(*)', '', $fname );
echo( "{$users}\nCounting number of admins..." );

$admin = $dbr->selectField( 'user_groups', 'COUNT(*)', array( 'ug_group' => 'sysop' ), $fname );
echo( "{$admin}\nCounting number of images..." );

$image = $dbr->selectField( 'image', 'COUNT(*)', '', $fname );
echo( "{$image}\n\nUpdating site statistics..." );

$dbw =& wfGetDB( DB_MASTER );
$values = array( 'ss_total_edits' => $edits,
				'ss_good_articles' => $good,
				'ss_total_pages' => $pages,
				'ss_users' => $users,
				'ss_admins' => $admin,
				'ss_images' => $image );
$conds = array( 'ss_row_id' => 1 );
$views = array( 'ss_total_views' => 0 );
				
if( isset( $options['update'] ) ) {
	$dbw->update( 'site_stats', $values, $conds, $fname );
} else {
	$dbw->delete( 'site_stats', $conds, $fname );
	$dbw->insert( 'site_stats', array_merge( $values, $conds, $views ), $fname );
}

echo( "done.\n\n" );

?>