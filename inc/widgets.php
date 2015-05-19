<?php
/*
 * Widget Areas Registration / Unregistration.
 */

// Removing twentyten widgets
function remove_some_widgets(){
	// Unregister some of the TwentyTen sidebars
	unregister_sidebar( 'first-footer-widget-area' );
	unregister_sidebar( 'second-footer-widget-area' );
	unregister_sidebar( 'third-footer-widget-area' );
	unregister_sidebar( 'fourth-footer-widget-area' );
	unregister_sidebar( 'primary-widget-area' );
	unregister_sidebar( 'secondary-widget-area' );
}
add_action( 'widgets_init', 'remove_some_widgets', 11 );

// Footer Sitemap Widget
function footer_sitemap_widget() {

	register_sidebar( array(
		'name'          => 'Footer Site Map',
		'id'            => 'footer-site-map',
		'before_widget' => '<div class="block-grid-item text-align-left text-white">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="h5 text-white margin-top-0">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'footer_sitemap_widget' );

// Social Media Bar
function social_media_sharing_widget() {

    register_sidebar( array(
        'name'          => 'Social Media Sharing',
        'id'            => 'social-media-sharing',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'social_media_sharing_widget' );

// Social Media Bar
function twitter_feed() {

    register_sidebar( array(
        'name'          => 'Twitter Feed',
        'id'            => 'twitter-feed',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'twitter_feed' );