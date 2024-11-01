<?php defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
/**
 * @package Welcome Home
 * @version 1.0
 */
/*
Plugin Name: Welcome Home
Description: Join ACNURs Welcome Home initiative and donate your webs homepage to help more than 12 million refugees.
Author: ACNUR
Version: 1.0
Author URI: http://welcomehome.eacnur.org
*/

add_action( 'wp_enqueue_scripts', 'welcome_home_init' );

function welcome_home_init()
{
	if ( is_front_page() ) {
		wp_enqueue_script( 'welcome_home', plugins_url( '/welcome-home/js/loader.js' ));
	}
}

?>
