<?php
/*
 * Theme Custom Post Types
*/

// Clients
if ( ! function_exists('custom_post_type_clients') ) {

// Register Custom Post Type
    function custom_post_type_clients() {

        $labels = array(
            'name'                => _x( 'Clients', 'Post Type General Name', 'twentyfifteen' ),
            'singular_name'       => _x( 'Client', 'Post Type Singular Name', 'twentyfifteen' ),
            'menu_name'           => __( 'Clients', 'twentyfifteen' ),
            'parent_item_colon'   => __( 'Parent Client:', 'twentyfifteen' ),
            'all_items'           => __( 'All Clients', 'twentyfifteen' ),
            'view_item'           => __( 'View Client', 'twentyfifteen' ),
            'add_new_item'        => __( 'Add New Client', 'twentyfifteen' ),
            'add_new'             => __( 'Add Client', 'twentyfifteen' ),
            'edit_item'           => __( 'Edit Client', 'twentyfifteen' ),
            'update_item'         => __( 'Update Client', 'twentyfifteen' ),
            'search_items'        => __( 'Search Client', 'twentyfifteen' ),
            'not_found'           => __( 'Not found', 'twentyfifteen' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'twentyfifteen' ),
        );
        $rewrite = array(
            'slug'                => 'clients',
            'with_front'          => true,
            'pages'               => true,
            'feeds'               => true,
        );
        $args = array(
            'label'               => __( 'eemjii_clients', 'twentyfifteen' ),
            'description'         => __( 'List of clients', 'twentyfifteen' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'excerpt', 'thumbnail', ),
            'taxonomies'          => array( 'category', 'post_tag' ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'rewrite'             => $rewrite,
            'capability_type'     => 'page',
        );
        register_post_type( 'eemjii_clients', $args );

    }

// Hook into the 'init' action
    add_action( 'init', 'custom_post_type_clients', 0 );

}

// Testimonials
if ( ! function_exists('custom_post_type_testimonials') ) {

// Register Custom Post Type
    function custom_post_type_testimonials() {

        $labels = array(
            'name'                => _x( 'Testimonial', 'Post Type General Name', 'twentyfifteen' ),
            'singular_name'       => _x( 'Testimonials', 'Post Type Singular Name', 'twentyfifteen' ),
            'menu_name'           => __( 'Testimonial', 'twentyfifteen' ),
            'parent_item_colon'   => __( 'Parent Testimonial:', 'twentyfifteen' ),
            'all_items'           => __( 'All Testimonials', 'twentyfifteen' ),
            'view_item'           => __( 'View Testimonial', 'twentyfifteen' ),
            'add_new_item'        => __( 'Add New Testimonial', 'twentyfifteen' ),
            'add_new'             => __( 'Add New Testimonial', 'twentyfifteen' ),
            'edit_item'           => __( 'Edit Testimonial', 'twentyfifteen' ),
            'update_item'         => __( 'Update Testimonial', 'twentyfifteen' ),
            'search_items'        => __( 'Search Testimonial', 'twentyfifteen' ),
            'not_found'           => __( 'Not found', 'twentyfifteen' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'twentyfifteen' ),
        );
        $rewrite = array(
            'slug'                => 'testimonial',
            'with_front'          => true,
            'pages'               => true,
            'feeds'               => true,
        );
        $args = array(
            'label'               => __( 'eemjii_testimonials', 'twentyfifteen' ),
            'description'         => __( 'Post Type Description', 'twentyfifteen' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'excerpt', 'thumbnail', ),
            'taxonomies'          => array( 'category', 'post_tag' ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => true,
            'publicly_queryable'  => true,
            'rewrite'             => $rewrite,
            'capability_type'     => 'page',
        );
        register_post_type( 'eemjii_testimonials', $args );

    }

// Hook into the 'init' action
    add_action( 'init', 'custom_post_type_testimonials', 0 );

}

// Services
if ( ! function_exists('custom_post_type_services') ) {

// Register Custom Post Type
    function custom_post_type_services() {

        $labels = array(
            'name'                => _x( 'Services', 'Post Type General Name', 'twentyfifteen' ),
            'singular_name'       => _x( 'Service', 'Post Type Singular Name', 'twentyfifteen' ),
            'menu_name'           => __( 'Services', 'twentyfifteen' ),
            'parent_item_colon'   => __( 'Parent Services:', 'twentyfifteen' ),
            'all_items'           => __( 'All Services', 'twentyfifteen' ),
            'view_item'           => __( 'View Service', 'twentyfifteen' ),
            'add_new_item'        => __( 'Add New Service', 'twentyfifteen' ),
            'add_new'             => __( 'Add New Service', 'twentyfifteen' ),
            'edit_item'           => __( 'Edit Service', 'twentyfifteen' ),
            'update_item'         => __( 'Update Service', 'twentyfifteen' ),
            'search_items'        => __( 'Search Service', 'twentyfifteen' ),
            'not_found'           => __( 'Not found', 'twentyfifteen' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'twentyfifteen' ),
        );
        $rewrite = array(
            'slug'                => 'services',
            'with_front'          => true,
            'pages'               => true,
            'feeds'               => true,
        );
        $args = array(
            'label'               => __( 'eemjii_services', 'twentyfifteen' ),
            'description'         => __( 'Services', 'twentyfifteen' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'thumbnail', ),
            'taxonomies'          => array( 'category', 'post_tag' ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'rewrite'             => $rewrite,
            'capability_type'     => 'page',
        );
        register_post_type( 'eemjii_services', $args );

    }

// Hook into the 'init' action
    add_action( 'init', 'custom_post_type_services', 0 );
}

// Solution
if ( ! function_exists('custom_post_type_solutions') ) {

// Register Custom Post Type
    function custom_post_type_solutions() {

        $labels = array(
            'name'                => _x( 'Solutions', 'Post Type General Name', 'twentyfifteen' ),
            'singular_name'       => _x( 'Solution', 'Post Type Singular Name', 'twentyfifteen' ),
            'menu_name'           => __( 'Solutions', 'twentyfifteen' ),
            'parent_item_colon'   => __( 'Parent Solutions:', 'twentyfifteen' ),
            'all_items'           => __( 'All Solutions', 'twentyfifteen' ),
            'view_item'           => __( 'View Solution', 'twentyfifteen' ),
            'add_new_item'        => __( 'Add New Solution', 'twentyfifteen' ),
            'add_new'             => __( 'Add New Solution', 'twentyfifteen' ),
            'edit_item'           => __( 'Edit Solution', 'twentyfifteen' ),
            'update_item'         => __( 'Update Solution', 'twentyfifteen' ),
            'search_items'        => __( 'Search Solution', 'twentyfifteen' ),
            'not_found'           => __( 'Not found', 'twentyfifteen' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'twentyfifteen' ),
        );
        $rewrite = array(
            'slug'                => 'solutions',
            'with_front'          => true,
            'pages'               => true,
            'feeds'               => true,
        );
        $args = array(
            'label'               => __( 'eemjii_solutions', 'twentyfifteen' ),
            'description'         => __( 'Solutions', 'twentyfifteen' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'thumbnail', ),
            'taxonomies'          => array( 'category', 'post_tag' ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'rewrite'             => $rewrite,
            'capability_type'     => 'page',
        );
        register_post_type( 'eemjii_solutions', $args );

    }

// Hook into the 'init' action
    add_action( 'init', 'custom_post_type_solutions', 0 );

}

// team
if ( ! function_exists('custom_post_type_team') ) {

// Register Custom Post Type
    function custom_post_type_team() {

        $labels = array(
            'name'                => _x( 'Our Team', 'Post Type General Name', 'twenty_fifteeen' ),
            'singular_name'       => _x( 'Our Team', 'Post Type Singular Name', 'twenty_fifteeen' ),
            'menu_name'           => __( 'Our Team', 'twenty_fifteeen' ),
            'parent_item_colon'   => __( 'Parent Team:', 'twenty_fifteeen' ),
            'all_items'           => __( 'All Team Members', 'twenty_fifteeen' ),
            'view_item'           => __( 'View Team Member', 'twenty_fifteeen' ),
            'add_new_item'        => __( 'Add New Team Member', 'twenty_fifteeen' ),
            'add_new'             => __( 'Add New Team Member', 'twenty_fifteeen' ),
            'edit_item'           => __( 'Edit Team Member', 'twenty_fifteeen' ),
            'update_item'         => __( 'Update Item Member', 'twenty_fifteeen' ),
            'search_items'        => __( 'Search Team Members', 'twenty_fifteeen' ),
            'not_found'           => __( 'Not found', 'twenty_fifteeen' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'twenty_fifteeen' ),
        );
        $rewrite = array(
            'slug'                => 'our-team',
            'with_front'          => true,
            'pages'               => true,
            'feeds'               => true,
        );
        $args = array(
            'label'               => __( 'eemjii_team', 'twenty_fifteeen' ),
            'description'         => __( 'Team', 'twenty_fifteeen' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'thumbnail', ),
            'taxonomies'          => array( 'category', 'post_tag' ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'rewrite'             => $rewrite,
            'capability_type'     => 'page',
        );
        register_post_type( 'eemjii_team', $args );

    }

// Hook into the 'init' action
    add_action( 'init', 'custom_post_type_team', 0 );

}

// Resources
if ( ! function_exists('custom_post_type_resources') ) {

// Register Custom Post Type
    function custom_post_type_resources() {

        $labels = array(
            'name'                => _x( 'Resources', 'Post Type General Name', 'text_domain' ),
            'singular_name'       => _x( 'Resource', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'           => __( 'Resource', 'text_domain' ),
            'parent_item_colon'   => __( 'Parent Resource:', 'text_domain' ),
            'all_items'           => __( 'All Resources', 'text_domain' ),
            'view_item'           => __( 'View Resource', 'text_domain' ),
            'add_new_item'        => __( 'Add New Resource', 'text_domain' ),
            'add_new'             => __( 'Add New Resource', 'text_domain' ),
            'edit_item'           => __( 'Edit Resource', 'text_domain' ),
            'update_item'         => __( 'Update Resource', 'text_domain' ),
            'search_items'        => __( 'Search Resources', 'text_domain' ),
            'not_found'           => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
        );
        $rewrite = array(
            'slug'                => 'resources',
            'with_front'          => true,
            'pages'               => true,
            'feeds'               => true,
        );
        $args = array(
            'label'               => __( 'eemjii_resources', 'text_domain' ),
            'description'         => __( 'Resources', 'text_domain' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'excerpt', ),
            'taxonomies'          => array( 'category', 'post_tag' ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'menu_icon'           => 'http://placehold.it/16x16',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'rewrite'             => $rewrite,
            'capability_type'     => 'page',
        );
        register_post_type( 'eemjii_resources', $args );

    }

// Hook into the 'init' action
    add_action( 'init', 'custom_post_type_resources', 0 );

}