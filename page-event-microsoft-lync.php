<?php
/*
 Template Name: Event - Microsoft Lync
*/
$rootDir = get_stylesheet_directory_uri();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
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
    <style>
        .gform_wrapper {
            margin: 0 !important;
        }
        .gform_heading {
            display: none;
        }
    </style>
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

<?php if (have_rows('sponser_logos') ):?>
    <div class="container">
        <header class="row">
            <div class="col-sm-12">
                <!-- header -->
                <div class="float-left">
                    <div id="logos" class="padding-top-10 margin-bottom-10">
                    <?php
                        while (have_rows('sponser_logos')): the_row();

                           // echo '<div></div>'. get_the_post_thumbnail(get_sub_field('event_sponser_logo'), 'event-logos',array('class'=>'width-100 height-auto'));
                            $logo_ID = get_sub_field('event_sponser_logo');
                            echo '<div class="display-inline-block padding-right padding-bottom">'.wp_get_attachment_image($logo_ID, 'event-logos').'
                            </div>';
                        endwhile;
                    ?>
                    </div>
                </div>
            </div>
        </header>
    </div>
<?php endif;?>
<!-- row 1: -->
<div class="width-100 position-relative" id="row1">
    <section class="container padding-top">
        <div class="row margin-top">
            <div class="col-sm-8 col-sm-offset-2 border-radius-1" style="background-color: rgba(242,242,242,0.7);">
                <!-- FORM START -->
                <div class="row">
                    <div class="large-12 columns">
                        <h3 class="h1 text-center text-blue"><?php the_field('row_one_title') ?></h3>
                    </div>
                </div>
                <div class="row">
                    <!-- Title -->
                    <div class="col-sm-6 border-1-right-white">
                        <div class="padding-bottom padding-left padding-right">
                            <h3 class="text-blue heading-line-height h3 margin-0"><?php the_field('row_one_first_paragraph'); ?></h3>
                            <h5 class="text-blue h4"><?php the_field('row_one_second_paragraph'); ?></h5>
                        </div>
                    </div>
                    <!-- Sign up -->
                    <div class="col-sm-6 no-border-left-small">
                        <?php the_field('the_form_area'); ?>
                    </div>
                </div>
                <!-- FORM END -->
            </div>
        </div>
        <!-- Background -->
    </section>
    <div class="height-60 width-100 z-index--10 display-block position-absolute top-0 left-0 <?php echo has_post_thumbnail() ? '" style="background-image: url(\''. wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'xlarge' )[0] .'\'); background-size: cover; background-repeat: no-repeat; background-position: center;' : ' background-grey opacity-10';?>"></div>
</div>
<!-- row 2: Agenda
     - grey background
-->
<section class="container">
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3 col-sm-8 col-sm-offset-2">
            <h2 class="text-align-center text-green"><?php the_field('row_two_title'); ?></h2>
            <table class="text-grey table table-hover">
                <?php
                    if (have_rows('schedule') ):
                        while (have_rows('schedule')): the_row();
                        ?>
                            <tr>
                                <td class="text-bold ips-green"><?php the_sub_field('line_item_time');?></td><td><?php the_sub_field('line_item_description'); ?></td>
                            </tr>
                        <?
                        endwhile;
                    endif;
                ?>
            </table>
        </div>
    </div>
</section>
<!-- row 3: Location -->
<div class="background-blue">
<section class="container">
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3 col-sm-8 col-sm-offset-2">
            <h2 class="text-align-center text-white"><?php the_field('row_three_title') ?></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3 col-sm-8 col-sm-offset-2">
            <figure class="margin-bottom width-100">
                <?php
                $location = get_field('map_location');
                if( !empty($location) ):?>
                    <div class="acf-map position-relative-important">
                        <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php  echo $location['lng']; ?>"></div>
                    </div>
                <?php else: ?>
                    <div class="container"><div class="row"><div class="sm-col-12">
                        <pre>Why not add your offices google maps location on this page?</pre></div></div></div>
                <?php endif; ?>
            </figure>
            <div class="text-white">
                <?php the_field('address'); ?>
            </div>
        </div>
    </div>
</section>
</div>
<!--
    row 4: Sign up today
    - background image
-->
<section class="container margin-top">
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3 col-sm-8 col-sm-offset-2 ">
        <!-- FORM START -->
            <!-- Title -->
            <div class="table-center-container background-grey opacity-25">
                <div class="table-center-cell">
                    <div class="padding margin">
                        <h3 class="h1 text-upper-case margin-0 text-blue text-center">Register today to attend</h3>
                        <!-- Sign up -->
                        <a href="#row1" class="btn btn-orange h3">Register now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- FORM END -->
    </div>
    <!-- background -->
</section>
<!--
    row 5: Connect with us
-->
<section class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h3 class="text-upper-case display-inline-block hide-for-small ips-white">Connect with us</h3>
            <nav class="display-inline-block social-sidebar-horizontal">
                <ul>
                    <li class="twitter"><a href="https://twitter.com/IPSolutionsUK" target="_blank" title="Follow IP Solutions on twitter" class="text-white"><i class="fa fa-twitter"></i></a></li>
                    <li class="linkedin"><a href="https://www.linkedin.com/company/ip-solutions-uk-ltd" target="_blank" title="Connect with IP Solutions on Linked-in" class="text-white"><i class="fa fa-linkedin"></i></a></li>
                    <li class="facebook"><a href="https://www.facebook.com/ipsolutionsuk" target="_blank" title="Friend us on Facebook!" class="text-white"><i class="fa fa-facebook"></i></a></li>
                    <li class="email"><a href="mailto:info@ipsolutions.co.uk" class="text-white"><i class="fa fa-envelope"></i></a></li>
                </ul>
            </nav>
        </div>
    </div>
</section>
<?php
/*
* Always have wp_footer() just before the closing </body>
* tag of your theme, or you will break many plugins, which
* generally use this hook to reference JavaScript files.
 * Reference: https://codex.wordpress.org/Function_Reference/wp_footer
*/
wp_footer();
?>
</body>
</html>
