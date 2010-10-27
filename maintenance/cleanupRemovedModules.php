<?php
/**
 * Maintenance script to create an account and grant it administrator rights
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @ingroup Maintenance
 * @author Rob Church <robchur@gmail.com>
 */

require_once( dirname( __FILE__ ) . '/Maintenance.php' );

class CleanupRemovedModules extends Maintenance {

	public function __construct() {
		parent::__construct();
		$this->mDescription = 'Remove cache entries for removed ResourceLoader modules from the database';
		$this->addOption( 'batchsize', 'Delete rows in batches of this size. Default: 500', false, true );
		$this->addOption( 'max-slave-lag', 'If the slave lag exceeds this many seconds, wait until it drops below this value. Default: 5', false, true );
	}

	public function execute() {
		$dbw = wfGetDB( DB_MASTER );
		$rl = new ResourceLoader();
		$moduleNames = array_keys( $rl->getModules() );
		$moduleList = implode( ', ', array_map( array( $dbw, 'addQuotes' ), $moduleNames ) );
		$limit = min( 1, intval( $this->getOption( 'batchsize', 500 ) ) );
		$maxlag = intval( $this->getOption( 'max-slave-lag', 5 ) );
		
		$this->output( "Cleaning up module_deps table...\n" );
		$i = 1;
		do {
			// $dbw->delete() doesn't support LIMIT :(
			$dbw->query( "DELETE FROM module_deps WHERE md_module NOT IN ($moduleList) LIMIT $limit", __METHOD__ );
			$numRows = $dbw->affectedRows();
			$this->output( "Batch $i: $numRows rows\n" );
			$i++;
			wfWaitForSlaves( $maxlag );
		} while( $dbw->affectedRows() > 0 );
		$this->output( "done\n" );
		
		$this->output( "Cleaning up msg_resource table...\n" );
		$i = 1;
		do {
			// $dbw->delete() doesn't support LIMIT :(
			$dbw->query( "DELETE FROM msg_resource WHERE mr_resource NOT IN ($moduleList) LIMIT $limit", __METHOD__ );
			$numRows = $dbw->affectedRows();
			$this->output( "Batch $i: $numRows rows\n" );
			$i++;
			wfWaitForSlaves( $maxlag );
		} while( $dbw->affectedRows() > 0 );
		$this->output( "done\n" );
		
		$this->output( "Cleaning up msg_resource_links table...\n" );
		$i = 1;
		do {
			// $dbw->delete() doesn't support LIMIT :(
			$dbw->query( "DELETE FROM msg_resource_links WHERE mrl_resource NOT IN ($moduleList) LIMIT $limit", __METHOD__ );
			$numRows = $dbw->affectedRows();
			$this->output( "Batch $i: $numRows rows\n" );
			$i++;
			wfWaitForSlaves( $maxlag );
		} while( $dbw->affectedRows() > 0 );
		$this->output( "done\n" );
	}
}

$maintClass = "CleanupRemovedModules";
require_once( DO_MAINTENANCE );