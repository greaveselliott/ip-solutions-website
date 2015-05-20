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

    wp_register_script(
        'bootstrap-config',
        get_stylesheet_directory_uri() . '/javascripts/bootstrap.config.js',
        array('jquery','bootstrap'),
        '3.3.4',
        true
    );
    wp_enqueue_script ('bootstrap-config');
}
add_action('wp_enqueue_scripts','enqueue_twitter_bootstrap_scripts');

// Custom Modernizr Script
function enqueue_custom_modernizr () {
    wp_register_script(
        'custom-modernzir',
        get_stylesheet_directory_uri() . '/javascripts/modernizr.custom.70730.js',
        array('jquery'),
        '',
        true
    );
    wp_enqueue_script ('custom-modernzir');
    wp_register_script(
        'custom-modernzir-svg',
        get_stylesheet_directory_uri() . '/javascripts/modernizr.svg.js',
        array('jquery'),
        '',
        true
    );
    wp_enqueue_script ('custom-modernzir-svg');
}
add_action('wp_enqueue_scripts','enqueue_custom_modernizr');


// Google Maps API Scripts
function enqueue_google_maps_scripts () {
    // Google Maps API
    wp_register_script(
        'google-maps',
        "https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false",
        array(),
        '',
        false
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
    // plugin
    wp_register_script(
        'slick-js',
        get_stylesheet_directory_uri() . '/javascripts/slick/slick/slick.min.js',
        array('jquery'),
        '',
        true
    );
    wp_enqueue_script ('slick-js');

    // config
    wp_register_script(
        'full-screen-js-config',
        get_stylesheet_directory_uri() . '/javascripts/slick/slick/slick.config.js',
        array('jquery','slick-js'),
        '',
        true
    );
    wp_enqueue_script ('full-screen-js-config');
}
add_action('wp_enqueue_scripts','enqueue_slickjs_scripts');


// GSAP
function enqueue_gsap_lite_scripts () {
    // CSS Plugin
    wp_register_script(
        'gsap-css-plugin',
        get_stylesheet_directory_uri() . '/javascripts/gsap/plugins/CSSPlugin.min.js',
        array('jquery'),
        '',
        true
    );
    wp_enqueue_script ('gsap-css-plugin');

    // Ease Pack
    wp_register_script(
        'gsap-ease-pack',
        get_stylesheet_directory_uri() . '/javascripts/gsap/easing/EasePack.min.js',
        array('jquery','gsap-css-plugin'),
        '',
        true
    );
    wp_enqueue_script ('gsap-ease-pack');

    // TweenLite
    wp_register_script(
        'gsap-tween-lite',
        get_stylesheet_directory_uri() . '/javascripts/gsap/TweenLite.min.js',
        array('jquery','gsap-css-plugin','gsap-ease-pack'),
        '',
        true
    );
    wp_enqueue_script ('gsap-tween-lite');
}
add_action('wp_enqueue_scripts','enqueue_gsap_lite_scripts');

// Waypoints
function enqueue_waypoints_scripts () {
    // Jquery WayPoints
    wp_register_script(
        'jquery-waypoints',
        get_stylesheet_directory_uri() . '/javascripts/waypoints/lib/jquery.waypoints.min.js',
        array('jquery'),
        '',
        true
    );
    wp_enqueue_script ('jquery-waypoints');
    // Jquery WayPoints Config
    wp_register_script(
        'jquery-waypoints-config',
        get_stylesheet_directory_uri() . '/javascripts/waypoints/lib/jquery.waypoints.config.js',
        array('jquery','jquery-waypoints'),
        '',
        true
    );
    wp_enqueue_script ('jquery-waypoints-config');
}
add_action('wp_enqueue_scripts','enqueue_waypoints_scripts');

// Polyfil - ubermenu
function enqueue_polyfill_uber_menu_scripts () {
    // Jquery WayPoints
    wp_register_script(
        'polyfill-ubermenu',
        get_stylesheet_directory_uri() . '/javascripts/polyfill-uber-menu.js',
        array('jquery'),
        '',
        true
    );
    wp_enqueue_script ('polyfill-ubermenu');
}
add_action('wp_enqueue_scripts','enqueue_polyfill_uber_menu_scripts');

// MixItUp
function enqueue_mixitup () {
    // MixItUp
    wp_register_script(
        'mixitup',
        get_stylesheet_directory_uri() . '/javascripts/mixitup/build/jquery.mixitup.min.js',
        array('jquery'),
        '',
        true
    );
    wp_enqueue_script ('mixitup');

    // MixItUp Config
    wp_register_script(
        'mixitup-config',
        get_stylesheet_directory_uri() . '/javascripts/mixitup/mixitup.config.js',
        array('jquery','mixitup'),
        '',
        true
    );
    wp_enqueue_script ('mixitup-config');

}
add_action('wp_enqueue_scripts','enqueue_mixitup');

// Lightbox
function enqueue_lightbox () {
    // MixItUp
    wp_register_script(
        'lightbox',
        get_stylesheet_directory_uri() . '/javascripts/lightbox/dist/ekko-lightbox.min.js',
        array('jquery'),
        '',
        true
    );
    wp_enqueue_script ('swipebox');

    // config
    wp_register_script(
        'lightbox-config',
        get_stylesheet_directory_uri() . '/javascripts/lightbox/lightbox.config.js',
        array('jquery','lightbox'),
        '',
        true
    );
    wp_enqueue_script ('lightbox-config');

}
add_action('wp_enqueue_scripts','enqueue_lightbox');