// Exif metadata display for MediaWiki file uploads
//
// Add an expand/collapse link and collapse by default if set to
// (with JS disabled, user will see all items)
//

$( document ).ready( function() {
	var showText = mw.msg( 'metadata-expand' );
	var hideText = mw.msg( 'metadata-collapse' );

	var $table = $( '#mw_metadata' );
	var $tbody = $table.find( 'tbody' );
	if ( !$tbody.length ) {
		return;
	}

	var $row = $( '<tr></tr>' );
	var $col = $( '<td colspan="2"></td>' );

	var $link = $( '<a></a>', {
		'text': showText,
		'href': '#'
	}).click(function() {
		if ( $table.is( '.collapsed' ) ) {
			$( this ).text( hideText );
		} else {
			$( this ).text( showText );
		}
		$table.toggleClass( 'expanded, collapsed' );
		return false;
	});

	$col.append( $link );
	$row.append( $col );
	$tbody.append( $row );

	// And collapse!
	$table.addClass( 'collapsed' );
} );