<?php
// php deleteImageMemcached.php --until "2003-09-04 04:40:00" --wait 500
$optionsWithArgs = array( 'until', 'sleep', 'report' );

require_once 'commandLine.inc';

class DeleteImageCache {
	var $until, $sleep, $report;

	function DeleteImageCache( $until, $sleep, $report ) {
		$this->until = $until;
		$this->sleep = $sleep;
		$this->report = $report;
	}
	
	function main() {
		global $wgMemc, $wgDBname;
		$fname = 'DeleteImageCache::main';
		
		$dbr =& wfGetDB( DB_SLAVE );
		
		$res = $dbr->select( 'image',
			array( 'img_name' ),
			array( "img_timestamp < {$this->until}" ),
			$fname
		);

		$i = 0;
		$total = $this->getImageCount();

		while ( $row = $dbr->fetchObject( $res ) ) {
			if ($i % $this->report == 0)
				printf("%s: %13s done (%s)\n", $wgDBname, "$i/$total", wfPercent( $i / $total * 100 ));
			$md5 = md5( $row->img_name );
			$wgMemc->delete( "$wgDBname:Image:$md5" );
			
			if ($this->sleep != 0)
				usleep( $this->sleep );

			++$i;
		}
	}
	
	function getImageCount() {
		$fname = 'DeleteImageCache::getImageCount';

		$dbr =& wfGetDB( DB_SLAVE );
		return $dbr->selectField( 'image', 'COUNT(*)', array(), $fname );
	}
}

$until = preg_replace( "/[^\d]/", '', $options['until'] );
$sleep = (int)$options['sleep'] * 1000; // milliseconds
$report = (int)$options['report'];

$dic = new DeleteImageCache( $until, $sleep, $report );
$dic->main();
