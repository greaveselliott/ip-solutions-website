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
            'slug'                => 'our-clients',
            'with_front'          => true,
            'pages'               => true,
            'feeds'               => true,
        );
        $args = array(
            'label'               => __( 'eemjii_clients', 'twentyfifteen' ),
            'description'         => __( 'List of clients', 'twentyfifteen' ),
            'labels'              => $labels,
            'supports'            => array('title','revisions'),
            //'taxonomies'          => array( 'category', 'post_tag' ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 4,
            'menu_icon'           => get_stylesheet_directory_uri() .'/images/admin/admin-post-type-icons-04.png',
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

// Case Studies
if ( ! function_exists('custom_post_type_case_studies') ) {

// Register Custom Post Type
    function custom_post_type_case_studies() {

        $labels = array(
            'name'                => _x( 'Case Studies', 'Post Type General Name', 'twentyfifteen' ),
            'singular_name'       => _x( 'Case Study', 'Post Type Singular Name', 'twentyfifteen' ),
            'menu_name'           => __( 'Case Studies', 'twentyfifteen' ),
            'parent_item_colon'   => __( 'Parent Case Studies:', 'twentyfifteen' ),
            'all_items'           => __( 'All Case Studies', 'twentyfifteen' ),
            'view_item'           => __( 'View Case Studies', 'twentyfifteen' ),
            'add_new_item'        => __( 'Add New Case Study', 'twentyfifteen' ),
            'add_new'             => __( 'Add New Case Study', 'twentyfifteen' ),
            'edit_item'           => __( 'Edit Case Study', 'twentyfifteen' ),
            'update_item'         => __( 'Update Case Study', 'twentyfifteen' ),
            'search_items'        => __( 'Search Case Studies', 'twentyfifteen' ),
            'not_found'           => __( 'Not found', 'twentyfifteen' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'twentyfifteen' ),
        );
        $rewrite = array(
            'slug'                => 'our-case-studies',
            'with_front'          => true,
            'pages'               => true,
            'feeds'               => true,
        );
        $args = array(
            'label'               => __( 'eemjii_case_studies', 'twentyfifteen' ),
            'description'         => __( 'Post Type Description', 'twentyfifteen' ),
            'labels'              => $labels,
            'supports'            => array('title','revisions'),
            //'taxonomies'          => array( 'category', 'post_tag' ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'menu_icon'           => get_stylesheet_directory_uri() .'/images/admin/admin-post-type-icons-01.png',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => true,
            'publicly_queryable'  => true,
            'rewrite'             => $rewrite,
            'capability_type'     => 'page',
        );
        register_post_type( 'eemjii_case_studies', $args );

    }

// Hook into the 'init' action
    add_action( 'init', 'custom_post_type_case_studies', 0 );

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
            'slug'                => 'our-services',
            'with_front'          => true,
            'pages'               => true,
            'feeds'               => true,
        );
        $args = array(
            'label'               => __( 'eemjii_services', 'twentyfifteen' ),
            'description'         => __( 'Services', 'twentyfifteen' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'thumbnail','revisions'),
            //'taxonomies'          => array( 'category', 'post_tag' ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'menu_icon'           => get_stylesheet_directory_uri() .'/images/admin/admin-post-type-icons-02.png',
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
            'slug'                => 'our-solutions',
            'with_front'          => true,
            'pages'               => true,
            'feeds'               => true,
        );
        $args = array(
            'label'               => __( 'eemjii_solutions', 'twentyfifteen' ),
            'description'         => __( 'Solutions', 'twentyfifteen' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'thumbnail','revisions'),
            //'taxonomies'          => array( 'category', 'post_tag' ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'menu_icon'           => get_stylesheet_directory_uri() .'/images/admin/admin-post-type-icons-03.png',
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

// Awards
if ( ! function_exists('custom_post_type_awards') ) {

// Register Custom Post Type
    function custom_post_type_awards() {

        $labels = array(
            'name'                => _x( 'Awards', 'Post Type General Name', 'twenty_fifteeen' ),
            'singular_name'       => _x( 'Awards', 'Post Type Singular Name', 'twenty_fifteeen' ),
            'menu_name'           => __( 'Awards', 'twenty_fifteeen' ),
            'parent_item_colon'   => __( 'Parent Awards:', 'twenty_fifteeen' ),
            'all_items'           => __( 'All Awards', 'twenty_fifteeen' ),
            'view_item'           => __( 'View Awards', 'twenty_fifteeen' ),
            'add_new_item'        => __( 'Add New Award', 'twenty_fifteeen' ),
            'add_new'             => __( 'Add New Award', 'twenty_fifteeen' ),
            'edit_item'           => __( 'Edit Award', 'twenty_fifteeen' ),
            'update_item'         => __( 'Update Award', 'twenty_fifteeen' ),
            'search_items'        => __( 'Search Awards', 'twenty_fifteeen' ),
            'not_found'           => __( 'Not found', 'twenty_fifteeen' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'twenty_fifteeen' ),
        );
        $rewrite = array(
            'slug'                => 'awards',
            'with_front'          => true,
            'pages'               => true,
            'feeds'               => true,
        );
        $args = array(
            'label'               => __( 'eemjii_awards', 'twenty_fifteeen' ),
            'description'         => __( 'Awards', 'twenty_fifteeen' ),
            'labels'              => $labels,
            'supports'            => array('title', 'editor', 'thumbnail','revisions'),
            //'taxonomies'          => array( 'category', 'post_tag' ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 4,
            'menu_icon'           => get_stylesheet_directory_uri() .'/images/admin/admin-post-type-icons-05.png',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'rewrite'             => $rewrite,
            'capability_type'     => 'page',
        );
        register_post_type( 'eemjii_awards', $args );

    }

// Hook into the 'init' action
    add_action( 'init', 'custom_post_type_awards', 0 );

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
            'slug'                => 'our-resources',
            'with_front'          => true,
            'pages'               => true,
            'feeds'               => true,
        );
        $args = array(
            'label'               => __( 'eemjii_resources', 'text_domain' ),
            'description'         => __( 'Resources', 'text_domain' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'excerpt', 'thumbnail','editor','revisions'),
            'taxonomies'          => array( 'category' ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'menu_icon'           => get_stylesheet_directory_uri() .'/images/admin/admin-post-type-icons-06.png',
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