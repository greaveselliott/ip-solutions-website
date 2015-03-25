<?php

define("__DEVELOPMENT_MODE__", true);

// General Theme Configuration
include_once('inc/theme-configuration.php');

// Enqueue Scripts
include_once('inc/enqueue.php');

// Custom Post Types
include_once('inc/custom-post-types.php');

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

