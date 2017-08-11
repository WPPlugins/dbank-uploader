<?php
/*
Plugin Name: DBank uploader
Plugin URI: http://pipa.tk
Version: 0.1
Author: pipa
Description: upload attachments to dbank.com and copy the url to current post.
*/

class wp_dbank {
	function wp_dbank() {
		global $wp_version;
		
		// The current version
		define('dbank_VERSION', '0.1');
		
		// Check for WP2.6 installation
		if (!defined ('IS_WP26'))
			define('IS_WP26', version_compare($wp_version, '2.6', '>=') );
		
		//This works only in WP2.6 or higher
		if ( IS_WP26 == FALSE) {
			add_action('admin_notices', create_function('', 
			    'echo \'<div id="message" class="error fade"><p><strong>Sorry, dbank uploader works only under WordPress 2.6 or higher</strong></p></div>\';'));
			return;
		} else {
      // define URL
      define('dbank_ABSPATH', WP_PLUGIN_DIR.'/'.plugin_basename( dirname(__FILE__) ).'/' );
      define('dbank_URLPATH', WP_PLUGIN_URL.'/'.plugin_basename( dirname(__FILE__) ).'/' );
      include_once (dirname (__FILE__)."/tinymce/tinymce.php");

		}
	}
}

add_action( 'plugins_loaded', create_function( '', 'global $wp_dbank; $wp_dbank = new wp_dbank();' ) );