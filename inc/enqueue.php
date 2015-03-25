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