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

<body <?php body_class(); ?>>
<div class="social-sidebar display-none-important-tablet-portrait">
    <ul>
        <li class="twitter"><i class="fa fa-twitter"></i></i></li>
        <li class="facebook"><i class="fa fa-facebook"></i></li>
        <li class="linkedin"><i class="fa fa-linkedin"></i></li>
        <li class="email"><i class="fa fa-envelope"></i></i></li>
    </ul>
</div>
<div class="autofix-header width-100">
<header id="header-main" class="background-white opacity-80">
<div class="container-fluid">
	<div class="row padding-top-2 padding-bottom-2">
		<div class="col-sm-12">
            <div class="pull-right">
                <div class="icon-links display-inline-block padding-right padding-right-0-tablet-portrait text-align-center-tablet-portrait">
                    <span class="h4"><i class="fa fa-phone text-green"></i>&nbsp;</span><span class="text-blue display-inline-block"><?php eemjii_option_tel() ?></span>
                </div>
                <a href="#" title="Customer Login Section" class="display-none-important-tablet-portrait">Customer Login</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" role="navigation" aria-label="Main Website Navigation">
	<div class="row border-2-top-blue-opacity">
                    <!-- Logo -->
                    <div class="col-sm-5">
                        <h1 class="hidden"><?php echo bloginfo('name'); ?> | <?php echo bloginfo('description');?></h1>
                        <figure class="eemjii-logo display-table padding-right" role="banner" aria-label="<?php echo bloginfo('name'); ?> Logo">
                            <a href="<?php echo home_url();?>" class="display-inline-block padding-right-2" title="Navigate to the Official <?php echo bloginfo('name'); ?> Home Page"><img class="display-block" src="<?php echo get_stylesheet_directory_uri(); ?>/images/ipsolutions.png" alt="<?php echo bloginfo('name'); ?> Logo"></a>
                            <figcaption class="h4 display-table-cell vertical-align-middle eemjii-slogan text-blue padding-left-2 border-2-left-blue-opacity white-space-nowrap display-none-phone"><?php echo bloginfo('description'); ?></figcaption>
                        </figure>
                    </div>
                    <!-- Navigation -->
                     <div class="col-sm-7 padding-right-0">
					    <nav class="pull-right">
                            <h2 class="hidden"><?php echo bloginfo('name'); ?> | Website Navigation</h2>

                            <?php
                        //                            wp_nav_menu( array(
                        //                                    'menu'              => 'primary',
                        //                                    'theme_location'    => 'primary',
                        //                                    'depth'             => 2,
                        //                                    'container'         => 'div',
                        //                                    'container_class'   => 'collapse navbar-collapse',
                        //                                    'container_id'      => 'bs-example-navbar-collapse-1',
                        //                                    'menu_class'        => 'nav navbar-nav',
                        //                                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        //                                    'walker'            => new wp_bootstrap_navwalker())
                        //                            );

                            ubermenu( 'main' , array( 'theme_location' => 'primary' ) ); ?>
					    </nav>
                    </div>
				</div>
			</div>
</header>
</div>