<?php
/**
 * File for magic words
 * @package MediaWiki
 * @subpackage Parser
 */

/**
 * private
 */
$wgMagicFound = false;

/**
 * To add magic words in an extension, use the LanguageGetMagic hook. For 
 * magic words which are also Parser variables, add a MagicWordwgVariableIDs
 * hook. Use string keys. Do use the interface immediately below, 
 * MagicWordMagicWords. It is deprecated.
 */

$magicWords = array();
if ( ! defined( 'MEDIAWIKI_INSTALL' ) )
	wfRunHooks( 'MagicWordMagicWords', array( &$magicWords ) );

for ( $i = 0; $i < count( $magicWords ); ++$i )
	define( $magicWords[$i], $magicWords[$i] );


$wgVariableIDs = array(
	'currentmonth',
	'currentmonthname',
	'currentmonthnamegen',
	'currentmonthabbrev',
	'currentday',
	'currentday2',
	'currentdayname',
	'currentyear',
	'currenttime',
	'numberofarticles',
	'numberoffiles',
	'sitename',
	'server',
	'servername',
	'scriptpath',
	'pagename',
	'pagenamee',
	'fullpagename',
	'fullpagenamee',
	'namespace',
	'namespacee',
	'currentweek',
	'currentdow',
	'revisionid',
	'subpagename',
	'subpagenamee',
	'displaytitle',
	'talkspace',
	'talkspacee',
	'subjectspace',
	'subjectspacee',
	'talkpagename',
	'talkpagenamee',
	'subjectpagename',
	'subjectpagenamee',
	'numberofusers',
	'rawsuffix',
	'newsectionlink',
	'numberofpages',
	'currentversion',
	'basepagename',
	'basepagenamee',
	'urlencode',
	'currenttimestamp',
	'directionmark',
	'language',
	'contentlanguage',
	'pagesinnamespace',
	'numberofadmins',
);
if ( ! defined( 'MEDIAWIKI_INSTALL' ) )
	wfRunHooks( 'MagicWordwgVariableIDs', array( &$wgVariableIDs ) );

/**
 * This class encapsulates "magic words" such as #redirect, __NOTOC__, etc.
 * Usage:
 *     if (MagicWord::get( 'redirect' )->match( $text ) )
 *
 * Possible future improvements:
 *   * Simultaneous searching for a number of magic words
 *   * $wgMagicWords in shared memory
 *
 * Please avoid reading the data out of one of these objects and then writing
 * special case code. If possible, add another match()-like function here.
 *
 * @package MediaWiki
 */
class MagicWord {
	/**#@+
	 * @private
	 */
	var $mId, $mSynonyms, $mCaseSensitive, $mRegex;
	var $mRegexStart, $mBaseRegex, $mVariableRegex;
	var $mModified;
	/**#@-*/

	function MagicWord($id = 0, $syn = '', $cs = false) {
		$this->mId = $id;
		$this->mSynonyms = (array)$syn;
		$this->mCaseSensitive = $cs;
		$this->mRegex = '';
		$this->mRegexStart = '';
		$this->mVariableRegex = '';
		$this->mVariableStartToEndRegex = '';
		$this->mModified = false;
	}

	/**
	 * Factory: creates an object representing an ID
	 * @static
	 */
	static function &get( $id ) {
		global $wgMagicWords;

		if ( !is_array( $wgMagicWords ) ) {
			throw new MWException( "Incorrect initialisation order, \$wgMagicWords does not exist\n" );
		}
		if (!array_key_exists( $id, $wgMagicWords ) ) {
			$mw = new MagicWord();
			$mw->load( $id );
			$wgMagicWords[$id] = $mw;
		}
		return $wgMagicWords[$id];
	}

	# Initialises this object with an ID
	function load( $id ) {
		global $wgContLang;
		$this->mId = $id;
		$wgContLang->getMagic( $this );
	}

	/**
	 * Preliminary initialisation
	 * @private
	 */
	function initRegex() {
		#$variableClass = Title::legalChars();
		# This was used for matching "$1" variables, but different uses of the feature will have
		# different restrictions, which should be checked *after* the MagicWord has been matched,
		# not here. - IMSoP
		
		$escSyn = array();
		foreach ( $this->mSynonyms as $synonym )
			// In case a magic word contains /, like that's going to happen;)
			$escSyn[] = preg_quote( $synonym, '/' );
		$this->mBaseRegex = implode( '|', $escSyn );
		
		$case = $this->mCaseSensitive ? '' : 'i';
		$this->mRegex = "/{$this->mBaseRegex}/{$case}";
		$this->mRegexStart = "/^(?:{$this->mBaseRegex})/{$case}";
		$this->mVariableRegex = str_replace( "\\$1", "(.*?)", $this->mRegex );
		$this->mVariableStartToEndRegex = str_replace( "\\$1", "(.*?)",
			"/^(?:{$this->mBaseRegex})$/{$case}" );
	}

	/**
	 * Gets a regex representing matching the word
	 */
	function getRegex() {
		if ($this->mRegex == '' ) {
			$this->initRegex();
		}
		return $this->mRegex;
	}

	/**
	 * Gets the regexp case modifier to use, i.e. i or nothing, to be used if
	 * one is using MagicWord::getBaseRegex(), otherwise it'll be included in
	 * the complete expression
	 */
	function getRegexCase() {
		if ( $this->mRegex === '' )
			$this->initRegex();

		return $this->mCaseSensitive ? '' : 'i';
	}

	/**
	 * Gets a regex matching the word, if it is at the string start
	 */
	function getRegexStart() {
		if ($this->mRegex == '' ) {
			$this->initRegex();
		}
		return $this->mRegexStart;
	}

	/**
	 * regex without the slashes and what not
	 */
	function getBaseRegex() {
		if ($this->mRegex == '') {
			$this->initRegex();
		}
		return $this->mBaseRegex;
	}

	/**
	 * Returns true if the text contains the word
	 * @return bool
	 */
	function match( $text ) {
		return preg_match( $this->getRegex(), $text );
	}

	/**
	 * Returns true if the text starts with the word
	 * @return bool
	 */
	function matchStart( $text ) {
		return preg_match( $this->getRegexStart(), $text );
	}

	/**
	 * Returns NULL if there's no match, the value of $1 otherwise
	 * The return code is the matched string, if there's no variable
	 * part in the regex and the matched variable part ($1) if there
	 * is one.
	 */
	function matchVariableStartToEnd( $text ) {
		$matches = array();
		$matchcount = preg_match( $this->getVariableStartToEndRegex(), $text, $matches );
		if ( $matchcount == 0 ) {
			return NULL;
		} else {
			# multiple matched parts (variable match); some will be empty because of
			# synonyms. The variable will be the second non-empty one so remove any
			# blank elements and re-sort the indices.
			# See also bug 6526

			$matches = array_values(array_filter($matches));

			if ( count($matches) == 1 ) { return $matches[0]; }
			else { return $matches[1]; }
		}
	}


	/**
	 * Returns true if the text matches the word, and alters the
	 * input string, removing all instances of the word
	 */
	function matchAndRemove( &$text ) {
		global $wgMagicFound;
		$wgMagicFound = false;
		$text = preg_replace_callback( $this->getRegex(), 'pregRemoveAndRecord', $text );
		return $wgMagicFound;
	}

	function matchStartAndRemove( &$text ) {
		global $wgMagicFound;
		$wgMagicFound = false;
		$text = preg_replace_callback( $this->getRegexStart(), 'pregRemoveAndRecord', $text );
		return $wgMagicFound;
	}


	/**
	 * Replaces the word with something else
	 */
	function replace( $replacement, $subject, $limit=-1 ) {
		$res = preg_replace( $this->getRegex(), wfRegexReplacement( $replacement ), $subject, $limit );
		$this->mModified = !($res === $subject);
		return $res;
	}

	/**
	 * Variable handling: {{SUBST:xxx}} style words
	 * Calls back a function to determine what to replace xxx with
	 * Input word must contain $1
	 */
	function substituteCallback( $text, $callback ) {
		$res = preg_replace_callback( $this->getVariableRegex(), $callback, $text );
		$this->mModified = !($res === $text);
		return $res;
	}

	/**
	 * Matches the word, where $1 is a wildcard
	 */
	function getVariableRegex()	{
		if ( $this->mVariableRegex == '' ) {
			$this->initRegex();
		}
		return $this->mVariableRegex;
	}

	/**
	 * Matches the entire string, where $1 is a wildcard
	 */
	function getVariableStartToEndRegex() {
		if ( $this->mVariableStartToEndRegex == '' ) {
			$this->initRegex();
		}
		return $this->mVariableStartToEndRegex;
	}

	/**
	 * Accesses the synonym list directly
	 */
	function getSynonym( $i ) {
		return $this->mSynonyms[$i];
	}

	function getSynonyms() {
		return $this->mSynonyms;
	}

	/**
	 * Returns true if the last call to replace() or substituteCallback()
	 * returned a modified text, otherwise false.
	 */
	function getWasModified(){
		return $this->mModified;
	}

	/**
	 * $magicarr is an associative array of (magic word ID => replacement)
	 * This method uses the php feature to do several replacements at the same time,
	 * thereby gaining some efficiency. The result is placed in the out variable
	 * $result. The return value is true if something was replaced.
	 * @static
	 **/
	function replaceMultiple( $magicarr, $subject, &$result ){
		$search = array();
		$replace = array();
		foreach( $magicarr as $id => $replacement ){
			$mw = MagicWord::get( $id );
			$search[] = $mw->getRegex();
			$replace[] = $replacement;
		}

		$result = preg_replace( $search, $replace, $subject );
		return !($result === $subject);
	}

	/**
	 * Adds all the synonyms of this MagicWord to an array, to allow quick
	 * lookup in a list of magic words
	 */
	function addToArray( &$array, $value ) {
		foreach ( $this->mSynonyms as $syn ) {
			$array[$syn] = $value;
		}
	}

	function isCaseSensitive() {
		return $this->mCaseSensitive;
	}
}

/**
 * Used in matchAndRemove()
 * @private
 **/
function pregRemoveAndRecord( $match ) {
	global $wgMagicFound;
	$wgMagicFound = true;
	return '';
}

?>
