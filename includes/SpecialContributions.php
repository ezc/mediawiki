<?php
/**
 * @package MediaWiki
 * @subpackage SpecialPage
 */

class contribs_finder {
	var $username, $offset, $limit, $namespace, $invert;
	var $dbr;

	function contribs_finder($username) {
		$this->username = $username;
		$this->dbr =& wfGetDB(DB_SLAVE);
	}

	function set_limit($limit) {
		$this->limit = $limit;
	}

	function set_offset($offset) {
		$this->offset = $offset;
	}

	function set_namespace($namespace, $invert = false) {
		$this->namespace = $namespace;
		$this->invert = $invert;
	}

	function set_hide_minor($hm) {
		$this->hide_minor = $hm;
	}

	function get_edit_limits() {
		$sql =	"SELECT MIN(rev_timestamp) as earliest, MAX(rev_timestamp) as latest " .
			"FROM revision " .
			"WHERE rev_user_text = " . $this->dbr->addQuotes($this->username);
		$res = $this->dbr->query($sql, "contribs_finder::get_edit_limits");
		$row = $this->dbr->fetchObject($res);
		if (!$row)
			return array(null, null);
		$this->dbr->freeResult($res);
		return array($row->earliest, $row->latest);
	}

	function get_previous_offset_for_paging() {
		$sql =	"SELECT rev_timestamp FROM revision " .
			"WHERE rev_timestamp > " . $this->offset . " AND " .
			"rev_user_text = " . $this->dbr->addQuotes($this->username) .
			" ORDER BY rev_timestamp ASC LIMIT " . $this->limit;
		$res = $this->dbr->query($sql);
		$rows = array();
		while ($obj = $this->dbr->fetchObject($res))
			$rows[] = $obj;
		$this->dbr->freeResult($res);
		return $rows[count($rows) - 1]->rev_timestamp;
	}

	/* private */ function make_sql() {
		$userCond = $condition = $index = $minorQuery = $nsQuery
			= $offsetQuery = $limitQuery = $nsinvert = "";

		if ($this->username == 'newbies') {
			$max = $this->dbr->selectField('user', 'max(user_id)', false, "make_sql");
			$userCond = '>' . ($max - $max / 100);
			$id = 0;
		}

		if ($this->hide_minor)
			$minorQuery = 'AND rev_minor_edit=0';

		if ($this->invert)
			$nsinvert = "!";

		if (!is_null($this->namespace))
			$nsQuery .= "AND page_namespace {$nsinvert}= {$this->namespace}";

		extract($this->dbr->tableNames('page', 'revision'));
		if ($userCond == "") {
			$condition = "rev_user_text=" . $this->dbr->addQuotes($this->username);
			$index = 'usertext_timestamp';
		} else {
			$condition = "rev_user {$userCond}";
			$index = 'user_timestamp';
		}

		$limitQuery = "LIMIT {$this->limit}";
		if ($this->offset)
			$offsetQuery = "AND rev_timestamp < {$this->offset}";

		$use_index = $this->dbr->useIndexClause($index);
		$sql = "SELECT
			page_namespace,page_title,page_is_new,page_latest,
			rev_id,rev_timestamp,rev_comment,rev_minor_edit,rev_user_text,
			rev_deleted
			FROM $page,$revision $use_index
			WHERE page_id=rev_page AND $condition $minorQuery $nsQuery $offsetQuery
		 	ORDER BY rev_timestamp DESC $limitQuery";
		return $sql;
	}

	function find() {
		$contribs = array();
		$res = $this->dbr->query($this->make_sql(), "contribs_finder::find");
		while ($c = $this->dbr->fetchObject($res))
			$contribs[] = $c;
		$this->dbr->freeResult($res);
		return $contribs;
	}
};

/**
 * Special page "user contributions".
 * Shows a list of the contributions of a user.
 *
 * @return	none
 * @param	string	$par	(optional) user name of the user for which to show the contributions
 */
function wfSpecialContributions( $par = null ) {
	global $wgUser, $wgOut, $wgLang, $wgContLang, $wgRequest, $wgTitle;
	$fname = 'wfSpecialContributions';

	$target = isset($par) ? $par : $wgRequest->getVal( 'target' );
	if (!strlen($target)) {
		$wgOut->errorpage('notargettitle', 'notargettext');
		return;
	}

	$nt = Title::newFromURL( $target );
	if (!$nt) {
		$wgOut->errorpage( 'notargettitle', 'notargettext' );
		return;
	}
	$nt =& Title::makeTitle(NS_USER, $nt->getDBkey());

	$namespace = $wgRequest->getIntOrNull('namespace');
	$invert = $wgRequest->getBool('invert');
	$hideminor = $wgRequest->getBool('hideminor');
	$limit = min($wgRequest->getInt('limit', 50), 500);
	$offset = $wgRequest->getText('offset');
	/* Offset must be an integral. */
	if (!strlen($offset) || !preg_match("/^[0-9]+$/", $offset))
		$offset = 0;

	$title = Title::newFromText($wgContLang->specialpage("Contributions"));
	$urlbits = "hideminor=$hideminor&namespace=$namespace&invert=$invert&target=" . wfUrlEncode($target);
	$myurl = $title->escapeLocalURL($urlbits);

	$finder = new contribs_finder($nt->getText());

	$finder->set_namespace($namespace, $invert);
	$finder->set_hide_minor($hideminor);
	$finder->set_limit($limit);
	$finder->set_offset($offset);

	if ($wgRequest->getText('go') == "prev") {
		$prevts = $finder->get_previous_offset_for_paging();
		$prevurl = $title->getLocalURL($urlbits . "&offset=$prevts&limit=$limit");
		$wgOut->redirect($prevurl);
		return;
	}

	$sk = $wgUser->getSkin();

	$id = User::idFromName($nt->getText());

	if ( 0 == $id ) {
		$ul = $nt->getText();
	} else {
		$ul = $sk->makeLinkObj( $nt, htmlspecialchars( $nt->getText() ) );
		$userCond = '=' . $id;
	}
	$talk = $nt->getTalkPage();
	if( $talk ) {
		$ul .= ' (' . $sk->makeLinkObj( $talk, $wgLang->getNsText( NS_TALK ) ) . ')';
	}

	if ($target == 'newbies') {
		$ul = wfMsg ('newbies');
	}

	$wgOut->setSubtitle( wfMsgHtml( 'contribsub', $ul ) );

	$contribsPage = Title::makeTitle( NS_SPECIAL, 'Contributions' );
	$mlink = $sk->makeKnownLinkObj( $contribsPage,
		$hideminor ? wfMsgHtml( 'show' ) : wfMsgHtml( 'hide' ),
		wfArrayToCGI( array(
			'target' => $nt->getPrefixedDbKey(),
			'offset' => $offset,
			'limit' => $limit,
			'hideminor' => $hideminor ? 0 : 1,
			'namespace' => $namespace ) ) );

	$contribs = $finder->find();

	if (count($contribs) == 0) {
		$wgOut->addWikiText( wfMsg( "nocontribs" ) );
		return;
	}

	list($early, $late) = $finder->get_edit_limits();
	$lastts = count($contribs) ? $contribs[count($contribs) - 1]->rev_timestamp : 0;
	$atstart = (!count($contribs) || $late == $contribs[0]->rev_timestamp);
	$atend = (!count($contribs) || $early == $lastts);
wfdebug("early=$early late=$late lastts=$lastts\n");
	$wgOut->addHTML(ucNamespaceForm($target, $hideminor, $namespace, $invert));

	$prevtext = wfMsg("prevn", $limit);
	if ($atstart)
		$prevlink = $prevtext;
	else
		$prevlink = "<a href=\"$myurl&offset=$offset&limit=$limit&go=prev\">$prevtext</a>";

	$nexttext = wfMsg("nextn", $limit);
	if ($atend)
		$nextlink = $nexttext;
	else
		$nextlink = "<a href=\"$myurl&offset=$lastts&limit=$limit\">$nexttext</a>";

	$urls = array();
	foreach (array(20, 50, 100, 250, 500) as $num)
		$urls[] = "<a href=\"$myurl&offset=$offset&limit={$num}\">".$wgLang->formatNum($num)."</a>";
	$bits = implode($urls, ' | ');

	$prevnextbits = wfMsgHtml("viewprevnext", $prevlink, $nextlink, $bits);

	$shm = wfMsgHtml( "showhideminor", $mlink );
	$wgOut->addHTML( "<br />{$prevnextbits} ($shm)</p>\n");

	$wgOut->addHTML( "<ul>\n" );

	foreach ($contribs as $contrib)
		$wgOut->addHTML(ucListEdit($sk, $contrib));

	$wgOut->addHTML( "</ul>\n" );
	$wgOut->addHTML( "<br />{$prevnextbits} ($shm)\n");
}


/**
 * Generates each row in the contributions list.
 *
 * Contributions which are marked "top" are currently on top of the history.
 * For these contributions, a [rollback] link is shown for users with sysop
 * privileges. The rollback link restores the most recent version that was not
 * written by the target user.
 *
 * If the contributions page is called with the parameter &bot=1, all rollback
 * links also get that parameter. It causes the edit itself and the rollback
 * to be marked as "bot" edits. Bot edits are hidden by default from recent
 * changes, so this allows sysops to combat a busy vandal without bothering
 * other users.
 *
 * @todo This would probably look a lot nicer in a table.
 */
function ucListEdit( $sk, $row ) {
	$fname = 'ucListEdit';
	wfProfileIn( $fname );

	global $wgLang, $wgOut, $wgUser, $wgRequest;
	static $messages;
	if( !isset( $messages ) ) {
		foreach( explode( ' ', 'uctop diff newarticle rollbacklink diff hist minoreditletter' ) as $msg ) {
			$messages[$msg] = wfMsg( $msg );
		}
	}

	$page =& Title::makeTitle( $row->page_namespace, $row->page_title );
	$link = $sk->makeKnownLinkObj( $page, '' );
	$difftext = $topmarktext = '';
	if( $row->rev_id == $row->page_latest ) {
		$topmarktext .= '<strong>' . $messages['uctop'] . '</strong>';
		if( !$row->page_is_new ) {
			$difftext .= $sk->makeKnownLinkObj( $page, '(' . $messages['diff'] . ')', 'diff=0' );
		} else {
			$difftext .= $messages['newarticle'];
		}

		if( $wgUser->isAllowed('rollback') ) {
			$extraRollback = $wgRequest->getBool( 'bot' ) ? '&bot=1' : '';
			$extraRollback .= '&token=' . urlencode(
				$wgUser->editToken( array( $page->getPrefixedText(), $row->rev_user_text ) ) );
			$topmarktext .= ' ['. $sk->makeKnownLinkObj( $page,
			  	$messages['rollbacklink'],
			  	'action=rollback&from=' . urlencode( $row->rev_user_text ) . $extraRollback ) .']';
		}

	}
	if( $row->rev_deleted && !$wgUser->isAllowed( 'undelete' ) ) {
		$difftext = '(' . $messages['diff'] . ')';
	} else {
		$difftext = $sk->makeKnownLinkObj( $page, '(' . $messages['diff'].')', 'diff=prev&oldid='.$row->rev_id );
	}
	$histlink='('.$sk->makeKnownLinkObj( $page, $messages['hist'], 'action=history' ) . ')';

	$comment = $sk->commentBlock( $row->rev_comment, $page );
	$d = $wgLang->timeanddate( $row->rev_timestamp, true );

	if( $row->rev_minor_edit ) {
		$mflag = '<span class="minor">' . $messages['minoreditletter'] . '</span> ';
	} else {
		$mflag = '';
	}

	$ret = "{$d} {$histlink} {$difftext} {$mflag} {$link} {$comment} {$topmarktext}";
	if( $row->rev_deleted ) {
		$ret = '<span class="deleted">' . $ret . '</span> ' . htmlspecialchars( wfMsg( 'deletedrev' ) );
	}
	$ret = "<li>$ret</li>\n";
	wfProfileOut( $fname );
	return $ret;
}

/**
 * Generates a form used to restrict display of contributions
 * to a specific namespace
 *
 * @return	none
 * @param	string	$target	target user to show contributions for
 * @param	string	$hideminor whether minor contributions are hidden
 * @param	string	$namespace currently selected namespace, NULL for show all
 * @param	bool    $invert  inverts the namespace selection on true (default null)
 */
function ucNamespaceForm ( $target, $hideminor, $namespace, $invert ) {
	global $wgContLang, $wgScript;

	$namespaceselect = "<select name='namespace' id='nsselectbox'>";
	$namespaceselect .= '<option value="" '.(is_null($namespace) ? ' selected="selected"' : '').'>'.wfMsgHtml( 'contributionsall' ).'</option>';
	$arr = $wgContLang->getFormattedNamespaces();
	foreach( $arr as $ns => $name ) {
		if( $ns < NS_MAIN )
			continue;
		$n = $ns === NS_MAIN ? wfMsgHtml( 'blanknamespace' ) : htmlspecialchars( $name );
		$sel = $namespace == $ns ? ' selected="selected"' : '';
		$namespaceselect .= "<option value='$ns'$sel>$n</option>";
	}
	$namespaceselect .= '</select>';

	$action = htmlspecialchars( $wgScript );
	$out = "<div class='namespaceselector'><form method='get' action=\"$action\">";
	$out .= '<input type="hidden" name="title" value="' . htmlspecialchars( $wgContLang->specialpage( 'Contributions' ) ) . '" />';
	$out .= '<input type="hidden" name="target" value="' . htmlspecialchars( $target ) . '" />';
	$out .= '<input type="hidden" name="hideminor" value="' . ( $hideminor ? 1 : 0 ) .'" />';
	$out .= "
<div id='nsselect' class='contributions'>
	<label for='nsselectbox'>" . wfMsgHtml('namespace') . "</label>
	$namespaceselect
	<input type='submit' value=\"" . wfMsgHtml( 'allpagessubmit' ) . "\" />
	<input type='checkbox' name='invert' value='1' id='nsinvert'" . ( $invert ? ' checked="checked"' : '' ) . " />
	<label for='nsinvert'>" . wfMsgHtml('invert') . "</label>
</div>";
	$out .= '</form></div>';
	return $out;
}
?>
