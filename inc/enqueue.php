<?php
/*
 * enqueue.php
 * Does what it says on the tin - enqueues all scripts / stylesheets
 */

function eemjii_enqueue () {
    wp_register_style (
	    'eemjii-theme-stylesheet',
	    get_stylesheet_directory_uri() . '/style.css'
    );

	wp_enqueue_style (
		'eemjii-theme-stylesheet'
	);

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

    // GSAP
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

    // Jquery WayPoints
    wp_register_script(
        'polyfill-ubermenu',
        get_stylesheet_directory_uri() . '/javascripts/polyfill-uber-menu.js',
        array('jquery'),
        '',
        true
    );
    wp_enqueue_script ('polyfill-ubermenu');

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

    // Lightbox
    wp_register_script(
        'lightbox',
        get_stylesheet_directory_uri() . '/javascripts/lightbox/dist/ekko-lightbox.min.js',
        array('jquery'),
        '',
        true
    );
    wp_enqueue_script ('swipebox');

    // Lightbox config
    wp_register_script(
        'lightbox-config',
        get_stylesheet_directory_uri() . '/javascripts/lightbox/lightbox.config.js',
        array('jquery','lightbox'),
        '',
        true
    );
    wp_enqueue_script ('lightbox-config');

    // request-quote
    wp_register_script(
        'eemjii-request-quote',
        get_stylesheet_directory_uri() . '/javascripts/request-quote/jquery-ui.request-quote.js',
        array('jquery','jquery-ui-widget'),
        '',
        true
    );
    // include wordpress inclded jqueryUI widget script required by the request-quote-script
    wp_enqueue_script('jquery-ui-widget');
    wp_enqueue_script ('eemjii-request-quote');

    // request-quote config
    wp_register_script (
        'eemjii-request-quote-config',
        get_stylesheet_directory_uri() . '/javascripts/request-quote/jquery-ui.request-quote.config.js',
        array('jquery','jquery-ui-widget','eemjii-request-quote'),
        '',
        true
    );
    wp_enqueue_script('eemjii-request-quote-config');

}
add_action('wp_enqueue_scripts','eemjii_enqueue');