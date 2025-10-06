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

// Tilføj Font Awesome CDN til WordPress-temaet
function petj_enqueue_font_awesome() {
    wp_enqueue_style(
        'font-awesome-cdn',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
        array(),
        '6.5.0'
    );
}
add_action('wp_enqueue_scripts', 'petj_enqueue_font_awesome');

/** Do not add an end PHP tag at the end of this file! */