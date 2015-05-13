<?php
/*
 * Theme Custom taxonomies
*/


if ( ! function_exists( 'custom_taxonomy_department' ) ) {

// Register Custom Taxonomy
    function custom_taxonomy_department() {

        $labels = array(
            'name'                       => _x( 'Departments', 'Taxonomy General Name', 'twentyfifteen' ),
            'singular_name'              => _x( 'Department', 'Taxonomy Singular Name', 'twentyfifteen' ),
            'menu_name'                  => __( 'Department', 'twentyfifteen' ),
            'all_items'                  => __( 'All Departments', 'twentyfifteen' ),
            'parent_item'                => __( 'Parent Department', 'twentyfifteen' ),
            'parent_item_colon'          => __( 'Parent Department:', 'twentyfifteen' ),
            'new_item_name'              => __( 'New Department Name', 'twentyfifteen' ),
            'add_new_item'               => __( 'Add New Department', 'twentyfifteen' ),
            'edit_item'                  => __( 'Edit Department', 'twentyfifteen' ),
            'update_item'                => __( 'Update Department', 'twentyfifteen' ),
            'separate_items_with_commas' => __( 'Separate Department with commas', 'twentyfifteen' ),
            'search_items'               => __( 'Search Departments', 'twentyfifteen' ),
            'add_or_remove_items'        => __( 'Add or remove Departments', 'twentyfifteen' ),
            'choose_from_most_used'      => __( 'Choose from the most used Departments', 'twentyfifteen' ),
            'not_found'                  => __( 'Department Not Found', 'twentyfifteen' ),
        );
        $rewrite = array(
            'slug'                       => 'departments',
            'with_front'                 => true,
            'hierarchical'               => false,
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => false,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
            'rewrite'                    => $rewrite,
        );
        register_taxonomy( 'department', array( 'eemjii_team' ), $args );

    }

// Hook into the 'init' action
    add_action( 'init', 'custom_taxonomy_department', 0 );

}

// Register Custom Taxonomy
function eemjii_resource_type() {

    $labels = array(
        'name'                       => _x( 'Resource Types', 'Taxonomy General Name', 'twentyten' ),
        'singular_name'              => _x( 'Resource Type', 'Taxonomy Singular Name', 'twentyten' ),
        'menu_name'                  => __( 'Resource Type', 'twentyten' ),
        'all_items'                  => __( 'All Resource Types', 'twentyten' ),
        'parent_item'                => __( 'Parent Item', 'twentyten' ),
        'parent_item_colon'          => __( 'Resource Type:', 'twentyten' ),
        'new_item_name'              => __( 'New Resource Type', 'twentyten' ),
        'add_new_item'               => __( 'Add Resource Type', 'twentyten' ),
        'edit_item'                  => __( 'Edit Resource Type', 'twentyten' ),
        'update_item'                => __( 'Update Resource Type', 'twentyten' ),
        'view_item'                  => __( 'View Resource Type', 'twentyten' ),
        'separate_items_with_commas' => __( 'Separate Resource Types with commas', 'twentyten' ),
        'add_or_remove_items'        => __( 'Add or remove Resource Types', 'twentyten' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'twentyten' ),
        'popular_items'              => __( 'Popular Resource Types', 'twentyten' ),
        'search_items'               => __( 'Search Resource Types', 'twentyten' ),
        'not_found'                  => __( 'Resource Type Not Found', 'twentyten' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'resource_type', array( 'eemjii_resources' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'eemjii_resource_type', 0 );