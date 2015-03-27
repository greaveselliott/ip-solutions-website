<?php
/*
 * enqueue.php
 * Does what it says on the tin - enqueues all scripts / stylesheets
 */




function enqueue_theme_stylesheet () {
    wp_register_style (
	    'eemjii-theme-stylesheet',
	    get_stylesheet_directory_uri() . '/style.css'
    );

	wp_enqueue_style (
		'eemjii-theme-stylesheet'
	);
}

add_action('wp_enqueue_scripts', 'enqueue_theme_stylesheet');

function enqueue_twitter_bootstrap_scripts () {
	// Bootstrap styles
	wp_register_script(
		'bootstrap',
		get_stylesheet_directory_uri() . '/javascripts/bootstrap.min.js',
		array('jquery'),
		'3.3.4',
		true
	);
	wp_enqueue_script ('bootstrap');
}
add_action('wp_enqueue_scripts','enqueue_twitter_bootstrap_scripts');

// Google Maps API Scripts
function enqueue_google_maps_scripts () {
    // Google Maps API
    wp_register_script(
        'google-maps',
        "https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false",
        array('jquery'),
        '',
        true
    );
    wp_enqueue_script ('google-maps');

    // Google Maps Config
    wp_register_script(
        'google-maps-config',
        get_stylesheet_directory_uri() . '/javascripts/google-maps.config.js',
        array('jquery','google-maps'),
        '',
        true
    );
    wp_enqueue_script ('google-maps-config');
}
add_action('wp_enqueue_scripts','enqueue_google_maps_scripts');

// Enqueue fullscreenjs
function enqueue_fullscreenjs_scripts () {
    // Google Maps API
    wp_register_script(
        'fullscreenjs',
        get_stylesheet_directory_uri() . '/javascripts/fullscreenjs/fullscreen.js',
        array('jquery'),
        '',
        true
    );
    wp_enqueue_script ('fullscreenjs');

    // Google Maps Config
    wp_register_script(
        'fullscreenjs-config',
        get_stylesheet_directory_uri() . '/javascripts/fullscreenjs/fullscreen.config.js',
        array('jquery','fullscreenjs'),
        '',
        true
    );
    wp_enqueue_script ('fullscreenjs-config');
}
add_action('wp_enqueue_scripts','enqueue_fullscreenjs_scripts');

// Enqueue Slick JS styles
function enqueue_slickjs_scripts () {
    // Google Maps API
    wp_register_script(
        'slick-js',
        get_stylesheet_directory_uri() . '/javascripts/slick/slick/slick.min.js',
        array('jquery'),
        '',
        true
    );
    wp_enqueue_script ('google-maps');

    // Google Maps Config
    wp_register_script(
        'full-screen-js-config',
        get_stylesheet_directory_uri() . '/javascripts/slick/slick/slick.config.js',
        array('jquery','slick-js'),
        '',
        true
    );
    wp_enqueue_script ('google-maps-config');
}
