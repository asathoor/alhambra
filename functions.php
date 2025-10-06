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

// Tilføj AOS CSS og JS via CDN
function petj_enqueue_aos_assets() {
    // AOS CSS
    wp_enqueue_style(
        'aos-css',
        'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css',
        array(),
        '2.3.4'
    );

    // AOS JS
    wp_enqueue_script(
        'aos-js',
        'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js',
        array(),
        '2.3.4',
        true // placeret i footer
    );

    // Initialiser AOS
    wp_add_inline_script(
        'aos-js',
        'AOS.init();'
    );
}
add_action('wp_enqueue_scripts', 'petj_enqueue_aos_assets');


/** Do not add an end PHP tag at the end of this file! */