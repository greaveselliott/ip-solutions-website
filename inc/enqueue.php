<?php
/*
 * enqueue.php
 * Does what it says on the tin - enqueues all scripts / stylesheets
 */

function enqueue_eemjii_wp_query_scripts () {
    wp_register_script(
        'eemjii-wp-query',
        get_stylesheet_directory_uri() . '/inc/eemjii-wp-query/js/eemjii-wp-query.js',
        array('jquery'),
        '',
        true
    );
    wp_localize_script(
        'eemjii-wp-query',
        'ajax_genre_params',
        array(
            'ajax_url' => admin_url( 'admin-ajax.php' )
        )
    );

    wp_enqueue_script('eemjii-wp-query');
}

add_action('wp_enqueue_scripts', 'enqueue_eemjii_wp_query_scripts');