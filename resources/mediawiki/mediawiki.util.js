/**
 * Implements mediaWiki.util library
 */
( function ( $, mw ) {
"use strict";

	// Local cache and alias
	var util = {

		/**
		 * Initialisation
		 * (don't call before document ready)
		 */
		init: function() {
			var	profile = $.client.profile(),
				$tocTitle = $( '#toctitle' ),
				$tocToggleLink = $( '#togglelink' ),
				hideTocCookie;

			/* Set up $.messageBox */
			$.messageBoxNew( {
				id: 'mw-js-message',
				parent: '#content'
			} );

			/* Set tooltipAccessKeyPrefix */

			// Opera on any platform
			if ( profile.name === 'opera' ) {
				util.tooltipAccessKeyPrefix = 'shift-esc-';

			// Chrome on any platform
			} else if ( profile.name === 'chrome' ) {
				// Chrome on Mac or Chrome on other platform ?
				util.tooltipAccessKeyPrefix = ( profile.platform === 'mac'
					? 'ctrl-option-' : 'alt-' );

			// Non-Windows Safari with webkit_version > 526
			} else if ( profile.platform !== 'win'
				&& profile.name === 'safari'
				&& profile.layoutVersion > 526 ) {
				util.tooltipAccessKeyPrefix = 'ctrl-alt-';

			// Safari/Konqueror on any platform, or any browser on Mac
			// (but not Safari on Windows)
			} else if ( !( profile.platform === 'win' && profile.name === 'safari' )
							&& ( profile.name === 'safari'
							|| profile.platform === 'mac'
							|| profile.name === 'konqueror' ) ) {
				util.tooltipAccessKeyPrefix = 'ctrl-';

			// Firefox 2.x and later
			} else if ( profile.name === 'firefox' && profile.versionBase > '1' ) {
				util.tooltipAccessKeyPrefix = 'alt-shift-';
			}

			/* Fill $content var */
			if ( $( '#bodyContent' ).length ) {
				// Vector, Monobook, Chick etc.
				util.$content = $( '#bodyContent' );

			} else if ( $( '#mw_contentholder' ).length ) {
				// Modern
				util.$content = $( '#mw_contentholder' );

			} else if ( $( '#article' ).length ) {
				// Standard, CologneBlue
				util.$content = $( '#article' );

			} else {
				// #content is present on almost all if not all skins. Most skins (the above cases)
				// have #content too, but as an outer wrapper instead of the article text container.
				// The skins that don't have an outer wrapper do have #content for everything
				// so it's a good fallback
				util.$content = $( '#content' );
			}

			// Table of contents toggle
			// Only add it if there is a TOC and there is no toggle added already
			if ( $( '#toc' ).length && $tocTitle.length && !$tocToggleLink.length ) {
				hideTocCookie = $.cookie( 'mw_hidetoc' );
					$tocToggleLink = $( '<a href="#" class="internal" id="togglelink"></a>' )
						.text( mw.msg( 'hidetoc' ) )
						.click( function( e ) {
							e.preventDefault();
							util.toggleToc( $(this) );
						} );
				$tocTitle.append(
					$tocToggleLink
						.wrap( '<span class="toctoggle"></span>' )
						.parent()
							.prepend( '&nbsp;[' )
							.append( ']&nbsp;' )
				);

				if ( hideTocCookie === '1' ) {
					util.toggleToc( $tocToggleLink );
				}
			}
		},

		/* Main body */

		/**
		 * Encode the string like PHP's rawurlencode
		 *
		 * @param str string String to be encoded
		 */
		rawurlencode: function( str ) {
			str = String( str );
			return encodeURIComponent( str )
				.replace( /!/g, '%21' ).replace( /'/g, '%27' ).replace( /\(/g, '%28' )
				.replace( /\)/g, '%29' ).replace( /\*/g, '%2A' ).replace( /~/g, '%7E' );
		},

		/**
		 * Encode page titles for use in a URL
		 * We want / and : to be included as literal characters in our title URLs
		 * as they otherwise fatally break the title
		 *
		 * @param str string String to be encoded
		 */
		wikiUrlencode: function( str ) {
			return this.rawurlencode( str )
				.replace( /%20/g, '_' ).replace( /%3A/g, ':' ).replace( /%2F/g, '/' );
		},

		/**
		 * Get the link to a page name (relative to wgServer)
		 *
		 * @param str string Page name to get the link for.
		 * @return string Location for a page with name of 'str' or boolean false on error.
		 */
		wikiGetlink: function( str ) {
			return mw.config.get( 'wgArticlePath' ).replace( '$1',
				this.wikiUrlencode( str || mw.config.get( 'wgPageName' ) ) );
		},

		/**
		 * Get address to a script in the wiki root.
		 * For index.php use mw.config.get( 'wgScript' )
		 *
		 * @param str string Name of script (eg. 'api'), defaults to 'index'
		 * @return string Address to script (eg. '/w/api.php' )
		 */
		wikiScript: function( str ) {
			return mw.config.get( 'wgScriptPath' ) + '/' + ( str || 'index' ) +
				mw.config.get( 'wgScriptExtension' );
		},

		/**
		 * Append a new style block to the head
		 *
		 * @param text string CSS to be appended
		 * @return CSSStyleSheet
		 */
		addCSS: function( text ) {
			var s = document.createElement( 'style' );
			s.type = 'text/css';
			s.rel = 'stylesheet';
			// Insert into document before setting cssText (bug 33305)
			document.getElementsByTagName('head')[0].appendChild( s );
			if ( s.styleSheet ) {
				s.styleSheet.cssText = text; // IE
			} else {
				// Safari sometimes borks on null
				s.appendChild( document.createTextNode( text + '' ) );
			}
			return s.sheet || s;
		},

		/**
		 * Hide/show the table of contents element
		 *
		 * @param $toggleLink jQuery A jQuery object of the toggle link.
		 * @param callback function Function to be called after the toggle is
		 * completed (including the animation) (optional)
		 * @return mixed Boolean visibility of the toc (true if it's visible)
		 * or Null if there was no table of contents.
		 */
		toggleToc: function( $toggleLink, callback ) {
			var $tocList = $( '#toc ul:first' );

			// This function shouldn't be called if there's no TOC,
			// but just in case...
			if ( $tocList.length ) {
				if ( $tocList.is( ':hidden' ) ) {
					$tocList.slideDown( 'fast', callback );
					$toggleLink.text( mw.msg( 'hidetoc' ) );
					$( '#toc' ).removeClass( 'tochidden' );
					$.cookie( 'mw_hidetoc', null, {
						expires: 30,
						path: '/'
					} );
					return true;
				} else {
					$tocList.slideUp( 'fast', callback );
					$toggleLink.text( mw.msg( 'showtoc' ) );
					$( '#toc' ).addClass( 'tochidden' );
					$.cookie( 'mw_hidetoc', '1', {
						expires: 30,
						path: '/'
					} );
					return false;
				}
			} else {
				return null;
			}
		},

		/**
		 * Grab the URL parameter value for the given parameter.
		 * Returns null if not found.
		 *
		 * @param param string The parameter name.
		 * @param url string URL to search through (optional)
		 * @return mixed Parameter value or null.
		 */
		getParamValue: function( param, url ) {
			url = url || document.location.href;
			// Get last match, stop at hash
			var	re = new RegExp( '^[^#]*[&?]' + $.escapeRE( param ) + '=([^&#]*)' ),
				m = re.exec( url );
			if ( m && m.length > 1 ) {
				// Beware that decodeURIComponent is not required to understand '+'
				// by spec, as encodeURIComponent does not produce it.
				return decodeURIComponent( m[1].replace( /\+/g, '%20' ) );
			}
			return null;
		},

		/**
		 * @var string
		 * Access key prefix. Will be re-defined based on browser/operating system
		 * detection in mw.util.init().
		 */
		tooltipAccessKeyPrefix: 'alt-',

		/**
		 * @var RegExp
		 * Regex to match accesskey tooltips.
		 */
		tooltipAccessKeyRegexp: /\[(ctrl-)?(alt-)?(shift-)?(esc-)?(.)\]$/,

		/**
		 * Add the appropriate prefix to the accesskey shown in the tooltip.
		 * If the nodeList parameter is given, only those nodes are updated;
		 * otherwise, all the nodes that will probably have accesskeys by
		 * default are updated.
		 *
		 * @param $nodes {Array|jQuery} [optional] A jQuery object, or array
		 * of elements to update.
		 */
		updateTooltipAccessKeys: function( $nodes ) {
			if ( !$nodes ) {
				// Rather than going into a loop of all anchor tags, limit to few elements that
				// contain the relevant anchor tags.
				// Input and label are rare enough that no such optimization is needed
				$nodes = $( '#column-one a, #mw-head a, #mw-panel a, #p-logo a, input, label' );
			} else if ( !( $nodes instanceof $ ) ) {
				$nodes = $( $nodes );
			}

			$nodes.attr( 'title', function( i, val ) {
				if ( val && util.tooltipAccessKeyRegexp.exec( val ) ) {
					return val.replace( util.tooltipAccessKeyRegexp,
						'[' + util.tooltipAccessKeyPrefix + '$5]' );
				}
				return val;
			} );
		},

		/*
		 * @var jQuery
		 * A jQuery object that refers to the page-content element
		 * Populated by init().
		 */
		$content: null,

		/**
		 * Add a link to a portlet menu on the page, such as:
		 *
		 * p-cactions (Content actions), p-personal (Personal tools),
		 * p-navigation (Navigation), p-tb (Toolbox)
		 *
		 * The first three paramters are required, the others are optional and
		 * may be null. Though providing an id and tooltip is recommended.
		 *
		 * By default the new link will be added to the end of the list. To
		 * add the link before a given existing item, pass the DOM node
		 * (document.getElementById( 'foobar' )) or the jQuery-selector
		 * ( '#foobar' ) of that item.
		 *
		 * @example mw.util.addPortletLink(
		 *	 'p-tb', 'http://mediawiki.org/',
		 *	 'MediaWiki.org', 't-mworg', 'Go to MediaWiki.org ', 'm', '#t-print'
		 * )
		 *
		 * @param portlet string ID of the target portlet ( 'p-cactions' or 'p-personal' etc.)
		 * @param href string Link URL
		 * @param text string Link text
		 * @param id string ID of the new item, should be unique and preferably have
		 * the appropriate prefix ( 'ca-', 'pt-', 'n-' or 't-' )
		 * @param tooltip string Text to show when hovering over the link, without accesskey suffix
		 * @param accesskey string Access key to activate this link (one character, try
		 * to avoid conflicts. Use $( '[accesskey=x]' ).get() in the console to
		 * see if 'x' is already used.
		 * @param nextnode mixed DOM Node or jQuery-selector string of the item that the new
		 * item should be added before, should be another item in the same
		 * list, it will be ignored otherwise
		 *
		 * @return mixed The DOM Node of the added item (a ListItem or Anchor element,
		 * depending on the skin) or null if no element was added to the document.
		 */
		addPortletLink: function( portlet, href, text, id, tooltip, accesskey, nextnode ) {
			var $item, $link, $portlet, $ul;

			// Check if there's atleast 3 arguments to prevent a TypeError
			if ( arguments.length < 3 ) {
				return null;
			}
			// Setup the anchor tag
			$link = $( '<a>' ).attr( 'href', href ).text( text );
			if ( tooltip ) {
				$link.attr( 'title', tooltip );
			}

			// Some skins don't have any portlets
			// just add it to the bottom of their 'sidebar' element as a fallback
			switch ( mw.config.get( 'skin' ) ) {
			case 'standard' :
			case 'cologneblue' :
				$( '#quickbar' ).append( $link.after( '<br/>' ) );
				return $link[0];
			case 'nostalgia' :
				$( '#searchform' ).before( $link ).before( ' &#124; ' );
				return $link[0];
			default : // Skins like chick, modern, monobook, myskin, simple, vector...

				// Select the specified portlet
				$portlet = $( '#' + portlet );
				if ( $portlet.length === 0 ) {
					return null;
				}
				// Select the first (most likely only) unordered list inside the portlet
				$ul = $portlet.find( 'ul' );

				// If it didn't have an unordered list yet, create it
				if ( $ul.length === 0 ) {
					// If there's no <div> inside, append it to the portlet directly
					if ( $portlet.find( 'div:first' ).length === 0 ) {
						$portlet.append( '<ul></ul>' );
					} else {
						// otherwise if there's a div (such as div.body or div.pBody)
						// append the <ul> to last (most likely only) div
						$portlet.find( 'div' ).eq( -1 ).append( '<ul></ul>' );
					}
					// Select the created element
					$ul = $portlet.find( 'ul' ).eq( 0 );
				}
				// Just in case..
				if ( $ul.length === 0 ) {
					return null;
				}

				// Unhide portlet if it was hidden before
				$portlet.removeClass( 'emptyPortlet' );

				// Wrap the anchor tag in a list item (and a span if $portlet is a Vector tab)
				// and back up the selector to the list item
				if ( $portlet.hasClass( 'vectorTabs' ) ) {
					$item = $link.wrap( '<li><span></span></li>' ).parent().parent();
				} else {
					$item = $link.wrap( '<li></li>' ).parent();
				}

				// Implement the properties passed to the function
				if ( id ) {
					$item.attr( 'id', id );
				}
				if ( accesskey ) {
					$link.attr( 'accesskey', accesskey );
					tooltip += ' [' + accesskey + ']';
					$link.attr( 'title', tooltip );
				}
				if ( accesskey && tooltip ) {
					this.updateTooltipAccessKeys( $link );
				}

				// Where to put our node ?
				// - nextnode is a DOM element (was the only option before MW 1.17, in wikibits.js)
				if ( nextnode && nextnode.parentNode === $ul[0] ) {
					$(nextnode).before( $item );

				// - nextnode is a CSS selector for jQuery
				} else if ( typeof nextnode === 'string' && $ul.find( nextnode ).length !== 0 ) {
					$ul.find( nextnode ).eq( 0 ).before( $item );

				// If the jQuery selector isn't found within the <ul>,
				// or if nextnode was invalid or not passed at all,
				// then just append it at the end of the <ul> (this is the default behaviour)
				} else {
					$ul.append( $item );
				}


				return $item[0];
			}
		},

		/**
		 * Add a little box at the top of the screen to inform the user of
		 * something, replacing any previous message.
		 * Calling with no arguments, with an empty string or null will hide the message
		 *
		 * @param message {mixed} The DOM-element, jQuery object or HTML-string to be put inside the message box.
		 * @param className {String} Used in adding a class; should be different for each call
		 * to allow CSS/JS to hide different boxes. null = no class used.
		 * @return {Boolean} True on success, false on failure.
		 */
		jsMessage: function( message, className ) {
			if ( !arguments.length || message === '' || message === null ) {
				$( '#mw-js-message' ).empty().hide();
				return true; // Emptying and hiding message is intended behaviour, return true

			} else {
				// We special-case skin structures provided by the software. Skins that
				// choose to abandon or significantly modify our formatting can just define
				// an mw-js-message div to start with.
				var $messageDiv = $( '#mw-js-message' );
				if ( !$messageDiv.length ) {
					$messageDiv = $( '<div id="mw-js-message"></div>' );
					if ( util.$content.parent().length ) {
						util.$content.parent().prepend( $messageDiv );
					} else {
						return false;
					}
				}

				if ( className ) {
					$messageDiv.prop( 'class', 'mw-js-message-' + className );
				}

				if ( typeof message === 'object' ) {
					$messageDiv.empty();
					$messageDiv.append( message );
				} else {
					$messageDiv.html( message );
				}

				$messageDiv.slideDown();
				return true;
			}
		},

		/**
		 * Validate a string as representing a valid e-mail address
		 * according to HTML5 specification. Please note the specification
		 * does not validate a domain with one character.
		 *
		 * @todo FIXME: should be moved to or replaced by a JavaScript validation module.
		 *
		 * @param mailtxt string E-mail address to be validated.
		 * @return mixed Null if mailtxt was an empty string, otherwise true/false
		 * is determined by validation.
		 */
		validateEmail: function( mailtxt ) {
			if( mailtxt === '' ) {
				return null;
			}

			/**
			 * HTML5 defines a string as valid e-mail address if it matches
			 * the ABNF:
			 *	1 * ( atext / "." ) "@" ldh-str 1*( "." ldh-str )
			 * With:
			 * - atext	: defined in RFC 5322 section 3.2.3
			 * - ldh-str : defined in RFC 1034 section 3.5
			 *
			 * (see STD 68 / RFC 5234 http://tools.ietf.org/html/std68):
			 */

			/**
			 * First, define the RFC 5322 'atext' which is pretty easy :
			 * atext = ALPHA / DIGIT / ; Printable US-ASCII
						 "!" / "#" /	 ; characters not including
						 "$" / "%" /	 ; specials. Used for atoms.
						 "&" / "'" /
						 "*" / "+" /
						 "-" / "/" /
						 "=" / "?" /
						 "^" / "_" /
						 "`" / "{" /
						 "|" / "}" /
						 "~"
			*/
			var	rfc5322_atext = "a-z0-9!#$%&'*+\\-/=?^_`{|}~",

			/**
			 * Next define the RFC 1034 'ldh-str'
			 *	<domain> ::= <subdomain> | " "
			 *	<subdomain> ::= <label> | <subdomain> "." <label>
			 *	<label> ::= <letter> [ [ <ldh-str> ] <let-dig> ]
			 *	<ldh-str> ::= <let-dig-hyp> | <let-dig-hyp> <ldh-str>
			 *	<let-dig-hyp> ::= <let-dig> | "-"
			 *	<let-dig> ::= <letter> | <digit>
			 */
				rfc1034_ldh_str = "a-z0-9\\-",

				HTML5_email_regexp = new RegExp(
					// start of string
					'^'
					+
					// User part which is liberal :p
					'[' + rfc5322_atext + '\\.]+'
					+
					// 'at'
					'@'
					+
					// Domain first part
					'[' + rfc1034_ldh_str + ']+'
					+
					// Optional second part and following are separated by a dot
					'(?:\\.[' + rfc1034_ldh_str + ']+)*'
					+
					// End of string
					'$',
					// RegExp is case insensitive
					'i'
				);
			return (null !== mailtxt.match( HTML5_email_regexp ) );
		},

		/**
		 * Note: borrows from IP::isIPv4
		 *
		 * @param address string
		 * @param allowBlock boolean
		 * @return boolean
		 */
		isIPv4Address: function( address, allowBlock ) {
			if ( typeof address !== 'string' ) {
				return false;
			}

			var	block = allowBlock ? '(?:\\/(?:3[0-2]|[12]?\\d))?' : '',
				RE_IP_BYTE = '(?:25[0-5]|2[0-4][0-9]|1[0-9][0-9]|0?[0-9]?[0-9])',
				RE_IP_ADD = '(?:' + RE_IP_BYTE + '\\.){3}' + RE_IP_BYTE;

			return address.search( new RegExp( '^' + RE_IP_ADD + block + '$' ) ) !== -1;
		},

		/**
		 * Note: borrows from IP::isIPv6
		 *
		 * @param address string
		 * @param allowBlock boolean
		 * @return boolean
		 */
		isIPv6Address: function( address, allowBlock ) {
			if ( typeof address !== 'string' ) {
				return false;
			}

			var	block = allowBlock ? '(?:\\/(?:12[0-8]|1[01][0-9]|[1-9]?\\d))?' : '',
				RE_IPV6_ADD =
			'(?:' + // starts with "::" (including "::")
			':(?::|(?::' + '[0-9A-Fa-f]{1,4}' + '){1,7})' +
			'|' + // ends with "::" (except "::")
			'[0-9A-Fa-f]{1,4}' + '(?::' + '[0-9A-Fa-f]{1,4}' + '){0,6}::' +
			'|' + // contains no "::"
			'[0-9A-Fa-f]{1,4}' + '(?::' + '[0-9A-Fa-f]{1,4}' + '){7}' +
			')';

			if ( address.search( new RegExp( '^' + RE_IPV6_ADD + block + '$' ) ) !== -1 ) {
				return true;
			}

			RE_IPV6_ADD = // contains one "::" in the middle (single '::' check below)
				'[0-9A-Fa-f]{1,4}' + '(?:::?' + '[0-9A-Fa-f]{1,4}' + '){1,6}';

			return address.search( new RegExp( '^' + RE_IPV6_ADD + block + '$' ) ) !== -1
				&& address.search( /::/ ) !== -1 && address.search( /::.*::/ ) === -1;
		}
	};

	mw.util = util;

} )( jQuery, mediaWiki );
