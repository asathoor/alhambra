<?php
/**
 * file: functions.php
 * purpose: add functionality
 */

/** include stylesheets */
function themeslug_enqueue_style() {
	wp_enqueue_style( 'petj-theme-styles', 
    get_template_directory_uri() 
    . '/style.css', 
    false );
}
add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );