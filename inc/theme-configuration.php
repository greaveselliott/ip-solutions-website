<?php

add_theme_support( 'post-thumbnails' );

add_action('get_header', 'my_filter_head');

function my_filter_head() {
remove_action('wp_head', '_admin_bar_bump_cb');
}

function custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );