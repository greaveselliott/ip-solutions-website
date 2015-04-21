<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<!--
    Added the_slug() to the body_class() function
    so the page title is added as a class to the <body> tag.
    This class is used to style page specific styles,
    specifically on the services template
-->
<body <?php body_class( the_slug(false)); ?>>
<div class="social-sidebar display-none-important-tablet-portrait">
    <ul>
        <li class="twitter"><i class="fa fa-twitter"></i></i></li>
        <li class="facebook"><i class="fa fa-facebook"></i></li>
        <li class="linkedin"><i class="fa fa-linkedin"></i></li>
        <li class="email"><i class="fa fa-envelope"></i></i></li>
    </ul>
</div>
<?php //if (has_post_thumbnail( $post->ID ) ): ?>
    <div class="featured-image-container position-relative">
    <!-- The .featured-image-container's closing tag exists in the page template file for example page-home.php -->
<?php //endif; ?>
    <div id="header-main-container" class="width-100">
        <header id="header-main" class="background-white opacity-80">
            <div class="container-fluid">
                <div class="row padding-top-2 padding-bottom-2">
                    <div class="col-sm-12">
                        <div class="pull-right float-none-tablet-portrait text-align-center-tablet-portrait">
                            <div class="icon-links display-inline-block padding-right padding-right-0-tablet-portrait text-align-center-tablet-portrait">
                                <span class="h3"><i class="fa fa-phone text-green"></i>&nbsp;</span><span class="text-blue h4 font-family-default display-inline-block"><?php eemjii_option_tel() ?></span>
                            </div>
                            <a href="#" title="Customer Login Section" class="display-none-important-tablet-portrait">Customer Login</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid" role="navigation" aria-label="Main Website Navigation">
                <div class="row border-3-top-blue-opacity">
                    <!-- Logo -->
                    <div class="col-sm-5">
                        <h1 class="hidden"><?php echo bloginfo('name'); ?> | <?php echo bloginfo('description');?></h1>
                        <figure class="eemjii-logo display-table padding-right padding-0-tablet-portrait margin-0-auto-tablet-portrait" role="banner" aria-label="<?php echo bloginfo('name'); ?> Logo">
                            <a href="<?php echo home_url();?>" class="display-inline-block padding-right-2" title="Navigate to the Official <?php echo bloginfo('name'); ?> Home Page"><img class="display-block main-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/ipsolutions.png" alt="<?php echo bloginfo('name'); ?> Logo"></a>
                        </figure>
                    </div>
                    <!-- Navigation -->
                     <div class="col-sm-7 padding-right-0">
                            <h2 class="hidden"><?php echo bloginfo('name'); ?> | Website Navigation</h2>
                            <?php ubermenu( 'main' , array( 'theme_location' => 'primary' ) ); ?>
                    </div>
                </div>
            </div>
        </header>
    </div>