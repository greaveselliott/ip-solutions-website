<?php
/*
 * Widget Registration / Un-registration.
 */

function eemjii_widgets() {
    // Unregister some of the TwentyTen sidebars
    unregister_sidebar( 'first-footer-widget-area' );
    unregister_sidebar( 'second-footer-widget-area' );
    unregister_sidebar( 'third-footer-widget-area' );
    unregister_sidebar( 'fourth-footer-widget-area' );
    unregister_sidebar( 'primary-widget-area' );
    unregister_sidebar( 'secondary-widget-area' );

    // Footer Sitemap
	register_sidebar( array(
		'name'          => 'Footer Site Map',
		'id'            => 'footer-site-map',
		'before_widget' => '<div class="block-grid-item text-align-left text-white  padding-top-0">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="h5 text-white margin-top-0">',
		'after_title'   => '</h2>',
	) );
    // Social Media Sharing
    register_sidebar( array(
        'name'          => 'Social Media Sharing',
        'id'            => 'social-media-sharing',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
    // Twitter
    register_sidebar( array(
        'name'          => 'Twitter Feed',
        'id'            => 'twitter-feed',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
    // Request Quote
    register_sidebar ( array(
        'name'          => 'Request a Quote',
        'id'            => 'request-quote',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="margin-top-0">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'eemjii_widgets' );