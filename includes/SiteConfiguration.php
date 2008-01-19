<?php

/**
 * The include paths change after this file is included from commandLine.inc,
 * meaning that require_once() fails to detect that it is including the same
 * file again. We use DIY C-style protection as a workaround.
 */
if (!defined('SITE_CONFIGURATION')) {
define('SITE_CONFIGURATION', 1);

/**
 * This is a class used to hold configuration settings, particularly for multi-wiki sites.
 *
 */
class SiteConfiguration {
	var $suffixes = array();
	var $wikis = array();
	var $settings = array();
	var $localVHosts = array();

	/** */
	function get( $setting, $wiki, $suffix, $params = array() ) {
		if ( array_key_exists( $setting, $this->settings ) ) {
			if ( array_key_exists( $wiki, $this->settings[$setting] ) ) {
				$retval = $this->settings[$setting][$wiki];
			} elseif ( array_key_exists( $suffix, $this->settings[$setting] ) ) {
				$retval = $this->settings[$setting][$suffix];
			} elseif ( array_key_exists( 'default', $this->settings[$setting] ) ) {
				$retval = $this->settings[$setting]['default'];
			} else {
				$retval = NULL;
			}
		} else {
			$retval = NULL;
		}

		if ( !is_null( $retval ) && count( $params ) ) {
			foreach ( $params as $key => $value ) {
				$retval = $this->doReplace( '$' . $key, $value, $retval );
			}
		}
		return $retval;
	}
	
	/** Type-safe string replace; won't do replacements on non-strings */
	function doReplace( $from, $to, $in ) {
		if( is_string( $in ) ) {
			return str_replace( $from, $to, $in );
		} elseif( is_array( $in ) ) {
			foreach( $in as $key => $val ) {
				$in[$key] = $this->doReplace( $from, $to, $in );
			}
			return $in;
		} else {
			return $in;
		}
	}

	/** */
	function getAll( $wiki, $suffix, $params ) {
		$localSettings = array();
		foreach ( $this->settings as $varname => $stuff ) {
			$value = $this->get( $varname, $wiki, $suffix, $params );
			if ( !is_null( $value ) ) {
				$localSettings[$varname] = $value;
			}
		}
		return $localSettings;
	}

	/** */
	function getBool( $setting, $wiki, $suffix ) {
		return (bool)($this->get( $setting, $wiki, $suffix ));
	}

	/** */
	function &getLocalDatabases() {
		return $this->wikis;
	}

	/** */
	function initialise() {
	}

	/** */
	function extractVar( $setting, $wiki, $suffix, &$var, $params ) {
		$value = $this->get( $setting, $wiki, $suffix, $params );
		if ( !is_null( $value ) ) {
			$var = $value;
		}
	}

	/** */
	function extractGlobal( $setting, $wiki, $suffix, $params ) {
		$value = $this->get( $setting, $wiki, $suffix, $params );
		if ( !is_null( $value ) ) {
			$GLOBALS[$setting] = $value;
		}
	}

	/** */
	function extractAllGlobals( $wiki, $suffix, $params ) {
		foreach ( $this->settings as $varName => $setting ) {
			$this->extractGlobal( $varName, $wiki, $suffix, $params );
		}
	}

	/**
	 * Work out the site and language name from a database name
	 * @param $db
	 */
	function siteFromDB( $db ) {
		$site = NULL;
		$lang = NULL;
		foreach ( $this->suffixes as $suffix ) {
			if ( substr( $db, -strlen( $suffix ) ) == $suffix ) {
				$site = $suffix == 'wiki' ? 'wikipedia' : $suffix;
				$lang = substr( $db, 0, strlen( $db ) - strlen( $suffix ) );
				break;
			}
		}
		$lang = str_replace( '_', '-', $lang );
		return array( $site, $lang );
	}

	/** */
	function isLocalVHost( $vhost ) {
		return in_array( $vhost, $this->localVHosts );
	}
}
}


