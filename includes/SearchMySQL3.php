<?php
# Copyright (C) 2004 Brion Vibber <brion@pobox.com>
# http://www.mediawiki.org/
# 
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or 
# (at your option) any later version.
# 
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
# GNU General Public License for more details.
# 
# You should have received a copy of the GNU General Public License along
# with this program; if not, write to the Free Software Foundation, Inc.,
# 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
# http://www.gnu.org/copyleft/gpl.html

/**
 * Search engine hook for MySQL 3.23.x
 * @package MediaWiki
 * @subpackage Search
 */

/** */
require_once( 'SearchEngine.php' );

/**
 * @package MediaWiki
 * @subpackage Search
 */
class SearchMySQL3 extends SearchEngine {
	function SearchMySQL3( &$db ) {
		$this->db =& $db;
	}
	
	function getIndexField( $fulltext ) {
		return $fulltext ? 'si_text' : 'si_title';
	}
	
	function parseQuery( $filteredText, $fulltext ) {
		global $wgDBminWordLen, $wgContLang;
		
		$field = $this->getIndexField( $fulltext );

		# on non mysql4 database: get list of words we don't want to search for
		require_once( 'FulltextStoplist.php' );

		$lc = SearchEngine::legalSearchChars() . '()';
		$q = preg_replace( "/([()])/", " \\1 ", $filteredText );
		$q = preg_replace( "/\\s+/", " ", $q );
		$w = explode( ' ', trim( $q ) );

		$last = $cond = '';
		foreach ( $w as $word ) {
			$word = $wgContLang->stripForSearch( $word );
			if ( 'and' == $word || 'or' == $word || 'not' == $word
			  || '(' == $word || ')' == $word ) {
				$cond .= ' ' . strtoupper( $word );
				$last = '';
			} else if ( strlen( $word ) < $wgDBminWordLen ) {
				continue;
			} else if ( FulltextStoplist::inList( $word ) ) {
				continue;
			} else {
				if ( '' != $last ) { $cond .= ' AND'; }
				$cond .= " (MATCH ($field) AGAINST ('" .
				  $this->db->strencode( $word ). "'))";
				$last = $word;
				$this->searchTerms[] = "\\b" . preg_quote( $word, '/' ) . "\\b";
			}
		}
		if ( 0 == count( $this->searchTerms ) ) {
			# No searchable terms remaining.
			# We have to return a term for the query or we get an SQL error.
			return "0";
		}

		return '(' . $cond . ' )';
	}

	function queryMain( $filteredTerm, $fulltext ) {
		$match = $this->parseQuery( $filteredTerm, $fulltext );
		$page = $this->db->tableName( 'page' );
		$text = $this->db->tableName( 'text' );
		$searchindex = $this->db->tableName( 'searchindex' );
		return 'SELECT page_id, page_namespace, page_title, old_flags, old_text ' .
			"FROM $page,$text,$searchindex " .
			'WHERE page_id=si_page AND page_latest=old_id AND ' . $match;
	}

	function update( $id, $title, $text ) {
		$dbw=& wfGetDB(DB_MASTER);
                $dbw->replace( 'searchindex', array(array('si_page')),
                        array(
                                'si_page' => $id,
                                'si_title' => $title,
                                'si_text' => $text
                        ), 'SearchMySQL3::update' );
	}

	function updateTitle($id,$title) {
		$dbw=& wfGetDB(DB_MASTER);
		$lowpri=$dbw->lowPriorityOption();
		$searchindex = $dbw->tableName( 'searchindex' );

		$sql = "UPDATE $lowpri $searchindex SET si_title='" .
                          $dbw->strencode( $title ) .
                          "' WHERE si_page={$id}";

		$dbw->query( $sql, "SearchMySQL3::updateTitle" );
	}
}

?>
