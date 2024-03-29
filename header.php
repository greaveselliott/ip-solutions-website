<!DOCTYPE html>
<?php
    $eemjii_request_quote = is_active_sidebar('request-quote');
    $eemjii_book_a_demo = is_active_sidebar('book-a-demo');
    $eemjii_book_a_meeting = is_active_sidebar('book-a-meeting');
?>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Icon -->
    <?php $eemjii_stylesheet_dir = get_stylesheet_directory_uri() .'/images/icons'; ?>
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $eemjii_stylesheet_dir; ?>/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $eemjii_stylesheet_dir; ?>/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $eemjii_stylesheet_dir; ?>/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $eemjii_stylesheet_dir; ?>/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $eemjii_stylesheet_dir; ?>/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $eemjii_stylesheet_dir; ?>/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $eemjii_stylesheet_dir; ?>/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $eemjii_stylesheet_dir; ?>/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $eemjii_stylesheet_dir; ?>/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $eemjii_stylesheet_dir; ?>/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $eemjii_stylesheet_dir; ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $eemjii_stylesheet_dir; ?>/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $eemjii_stylesheet_dir; ?>/favicon-16x16.png">
    <link rel="manifest" href="<?php echo $eemjii_stylesheet_dir; ?>/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo $eemjii_stylesheet_dir; ?>/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Icon End -->
    <title><?php wp_title(''); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    <script type="text/javascript" src="http://aws.predictiveresponse.net/http/trac.js"> </script>
    <script type="text/javascript"> trackPredictive(); </script>
</head>
<!--
    Added the_slug() to the body_class() function
    so the page title is added as a class to the <body> tag.
    This class is used to style page specific styles,
    specifically on the services template
-->
<body <?php body_class( the_slug(false)); ?>>
<?php /*Added by Elliot Tume start*/ ?>
<?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>
<?php /*Added by Elliot Tume begin*/ ?>
<div class="social-sidebar display-none-important-tablet-portrait">
    <ul>
        <li class="twitter"><a href="https://twitter.com/IPSolutionsUK" target="_blank" title="Follow IP Solutions on twitter" class="text-white"><i class="fa fa-twitter"></i></a></li>
        <li class="linkedin"><a href="https://www.linkedin.com/company/ip-solutions-uk-ltd" target="_blank" title="Connect with IP Solutions on Linked-in" class="text-white"><i class="fa fa-linkedin"></i></a></li>
        <li class="facebook"><a href="https://www.facebook.com/ipsolutionsuk" target="_blank" title="Friend us on Facebook!" class="text-white"><i class="fa fa-facebook"></i></a></li>
        <li class="email"><a href="mailto:info@ipsolutions.co.uk" class="text-white"><i class="fa fa-envelope"></i></a></li>
    </ul>
</div>
<?php if ( $eemjii_request_quote || $eemjii_book_a_demo || $eemjii_book_a_meeting) : ?>
<div class="off-canvas-trigger">
    <?php if ($eemjii_request_quote) :?>
        <div class="off-canvas-trigger-inner margin-bottom" data-transition="ease" data-off-canvas-tab="1">
            <div class="front padding-2">
                <div class="table-center-container">
                    <div class="table-center-cell">Request a Quote</div>
                </div>
            </div>
            <div class="back padding-2">
                <div class="table-center-container">
                    <div class="table-center-cell">
                        <span class="h2"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
        </div>
    <?php
    endif;
    if ($eemjii_book_a_demo) :
        ?>
        <div class="off-canvas-trigger-inner margin-bottom" data-transition="ease" data-off-canvas-tab="2">
            <div class="front padding-2">
                <div class="table-center-container">
                    <div class="table-center-cell">Book a Demo</div>
                </div>
            </div>
            <div class="back padding-2">
                <div class="table-center-container">
                    <div class="table-center-cell">
                        <span class="h2"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
        </div>
    <?php
    endif;
    if ($eemjii_book_a_meeting) :
        ?>
        <div class="off-canvas-trigger-inner" data-transition="ease" data-off-canvas-tab="3">
            <div class="front padding-2">
                <div class="table-center-container">
                    <div class="table-center-cell">Book a Meeting</div>
                </div>
            </div>
            <div class="back padding-2">
                <div class="table-center-container">
                    <div class="table-center-cell">
                        <span class="h2"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php endif; ?>
<div class="off-canvas-wrapper">
<div class="off-canvas-inner">
<?php if ( $eemjii_request_quote || $eemjii_book_a_demo || $eemjii_book_a_meeting ) : ?>
<div class="off-canvas-content">
    <div class="request-quote-content padding-left padding padding-right-2 padding-top-2">
        <?php if ($eemjii_request_quote) :?>
            <div class="off-canvas-tab off-canvas-tab-1">
                <?php dynamic_sidebar('request-quote'); ?>
                <div class="off-canvas-trigger-internal display-block text-align-center text-grey"><span class="h2"><i class="fa fa-times"></i></span></div>
            </div>
        <?php
            endif;
            if ($eemjii_book_a_demo) :
        ?>
            <div class="off-canvas-tab off-canvas-tab-2">
                <?php dynamic_sidebar('book-a-demo'); ?>
                <div class="off-canvas-trigger-internal display-block text-align-center text-grey"><span class="h2"><i class="fa fa-times"></i></span></div>
            </div>
        <?php
            endif;
            if ($eemjii_book_a_meeting) :
        ?>
            <div class="off-canvas-tab off-canvas-tab-3">
                <?php dynamic_sidebar('book-a-meeting'); ?>
                <div class="off-canvas-trigger-internal display-block text-align-center text-grey"><span class="h2"><i class="fa fa-times"></i></span></div>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>
<div class="featured-image-container position-relative">
    <!-- The .featured-image-container's closing tag exists in the page template file for example page-home.php -->
    <div id="header-main-container" class="width-100">
        <header id="header-main" class="background-white opacity-80">
            <div class="container-fluid" role="navigation" aria-label="Main Website Navigation">
                <div id="header-main-height" class="row">
                    <!-- Logo -->
                    <div class="col-xs-6 col-md-4 col-sm-3 header-element display-inline-block">

                        <?php echo is_front_page() ? '<h1 class="display-none">': '<p class="display-none">'; echo bloginfo('name'); ?> | <?php echo bloginfo('description'); echo is_front_page() ? '</h1>': '</p>';?>
                        <figure class="eemjii-logo display-table padding-right padding-0-tablet-portrait height-auto" role="banner" aria-label="<?php echo bloginfo('name'); ?> Logo">
                            <a href="<?php echo home_url();?>" class="display-inline-block padding-right-2 header-element" title="Navigate to the Official <?php echo bloginfo('name'); ?> Home Page"><img class="display-block main-logo padding-top-2-tablet-up padding-bottom-2-tablet-up" src="<?php echo get_stylesheet_directory_uri(); ?>/images/ipsolutions.svg" alt="<?php echo bloginfo('name'); ?> Logo"></a>
                        </figure>
                    </div>
                    <div class="col-sm-6 col-md-8 col-sm-9 header-element display-block">
                        <div class="row padding-bottom-2 height-50 display-none-tablet-portrait">
                            <div class="col-sm-12">
                                <div class="float-right float-none-tablet-portrait text-align-center-tablet-portrait">
                                    <!-- Telephone Number -->
                                    <div class="icon-links display-inline-block padding-right padding-right-0-tablet-portrait text-align-center-tablet-portrait">
                                        <span class="h4"><i class="fa fa-phone text-green"></i>&nbsp;</span><span class="text-blue h4 font-family-default display-inline-block margin-bottom-0-desktop-down"><?php eemjii_option_tel() ?></span>
                                    </div>
                                    <!-- Customer Login Link -->
                                    <a href="http://www.ipsolutions.co.uk/customer-login/" title="IP Solutions Customer login" class="display-none-important-tablet-portrait text-navy-blue">Customer Login</a>
                                </div>
                            </div>
                        </div>
                        <!-- Navigation -->
                        <div class="row height-50">
                            <div class="col-sm-12 padding-right-0 padding-0-tablet-portrait height-100-important">
                                <h2 class="hidden"><?php echo bloginfo('name'); ?> | Website Navigation</h2>
                                <?php ubermenu( 'main' , array( 'theme_location' => 'primary' ) ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>