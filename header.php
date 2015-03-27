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
<header id="header-main" class="background-white opacity-80">
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
            <div class="pull-right">
                <div class="icon-links display-inline-block">
                    <i class="fa fa-phone green"></i><span class="blue"><?php eemjii_option_tel() ?></span>
                </div>
                <a href="#" title="Customer Login Section">Customer Login</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" role="navigation" aria-label="Main Website Navigation">
	<div class="row">
                    <!-- Logo -->
                    <div class="col-sm-5">
                        <h1 class="hidden"><?php echo bloginfo('name'); ?> | <?php echo bloginfo('description');?></h1>
                        <figure class="eemjii-logo" role="banner" aria-label="<?php echo bloginfo('name'); ?> Logo">
                            <a href="<?php echo home_url();?>" class="display-inline-block" title="Navigate to the Official <?php echo bloginfo('name'); ?> Home Page"><img class="display-block" src="http://placehold.it/200x60" alt="<?php echo bloginfo('name'); ?> Logo"></a>
                            <figcaption class="h4 display-inline-block eemjii-slogan blue"><?php echo bloginfo('description'); ?></figcaption>
                        </figure>
                    </div>
                    <!-- Navigation -->
                     <div class="col-sm-7 ">
					    <nav class="pull-right">
                            <h2 class="hidden"><?php echo bloginfo('name'); ?> | Website Navigation</h2>
                            <?php
                            wp_nav_menu( array(
                                    'menu'              => 'primary',
                                    'theme_location'    => 'primary',
                                    'depth'             => 2,
                                    'container'         => 'div',
                                    'container_class'   => 'collapse navbar-collapse',
                                    'container_id'      => 'bs-example-navbar-collapse-1',
                                    'menu_class'        => 'nav navbar-nav',
                                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                    'walker'            => new wp_bootstrap_navwalker())
                            );
                            ?>
					    </nav>
                    </div>
				</div>
			</div>
</header>