<?php

define("__DEVELOPMENT_MODE__", true);

// General Theme Configuration
include_once('inc/theme-configuration.php');

// Enqueue Scripts
include_once('inc/enqueue.php');

// WordPress utility
include_once('inc/wordpress-utility.php');

// Image Sizes
include_once('inc/image-size.php');

// Custom Post Types
include_once('inc/custom-post-types.php');

// Theme Navigation
include_once('inc/navigation.php');

// Custom Taxonomies
include_once('inc/custom-taxonomies.php');

// Theme Options Page
include_once('inc/customize.php');

// Plugin: Advanced Custom Field
include_once('inc/plugin-config-acf.php');

// Register Theme Widgets
include_once( 'inc/widgets.php' );

// Eemjii-WP-Query Class
include_once('inc/eemjii-wp-query/eemjii-wp-query.php');
include_once('inc/eemjii-wp-query/eemjii-wp-taxonomy-query.php');

// Custom Navigation Walker
include_once('inc/wp-bootstrap-navwalker/wp_bootstrap_navwalker.php');

// Getter Setter Functions
include_once('inc/getters_setters.php');

// Imported from Theme: Lingonberry Comments
include_once('inc/lingonberry-comments.php');

