<?php
/**
 * file: functions.php
 * purpose: add functionality
 */

/** Here we include stylesheets */
function themeslug_enqueue_style() {
	wp_enqueue_style( 'petj-theme-styles', 
    get_template_directory_uri() 
    . '/style.css', 
    false );
}
/**
 * wp_enqueue_scripts: will add the script to the header
 * via the function we defined as: themeslug_enqueue_style()
 */
add_action( 
    'wp_enqueue_scripts', 
    'themeslug_enqueue_style' 
);

/** Do not add an end PHP tag at the end of this file! */