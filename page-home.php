<?php
/*
    Template Name: Home
*/
?>

    <?php get_header(); ?>
        <div class="height-auto-important-tablet-portrait position-relative-tablet-portrait">
            <?php get_template_part('template','carousel'); ?>
        </div>
        <!-- Choose your starting point -->
        <article class="starting-point background-blue opacity-90 width-100">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="text-align-center text-white margin-top margin-bottom">Choose your starting point</h2>
                    </div>
                    <?php get_template_part('template', 'starting-point'); ?>
                </div>
            </div>
        </article>
<!-- Featured Image -->
</div><!-- End .featured-image-container tag -->
<!-- Transform your business with IP Solutions -->
<div class="position-relative">
<div class="padding-top padding-bottom position-relative">
    <div class="container">
        <div class="row">
            <article class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12 padding-0-tablet-up">
                        <h2 class="text-white margin-top-0 text-align-center margin-bottom">Transform your business</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 col-md-offset-1 padding-right-0-tablet-up text-align-center-tablet-portrait">

                        <p class="text-blue h3 line-height-h3 margin-top-0">We’re comms technology experts - and deliver a range of flexible and intuitive solutions.</p><p class="text-white h4"> From virtual contact centres, desktops and servers, to cloud-based solutions that unify telephony, video, data, email and more – bringing real results to your business and your bottom line.</p>
                    </div>
                    <div class="col-md-5 padding-0-tablet-portrait">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="https://player.vimeo.com/video/127074788" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </article>

<!--            <!-- Award winning experts -->
<!--            <article class="col-sm-6">-->
<!--                <div class="padding-left text-align-center">-->
<!--                    <h2 class="text-white h3 margin-top-0 margin-bottom">Award winning providers</h2>-->
<!--                    --><?php
//                        $awards_query = new Eemjii_WP_Query(array(
//                            '_post_type'             => 'eemjii_awards',
//                            '_post_template_prefix'  => 'template',
//                            '_post_template_part'    => array(
//                                array('awards-home-first','first'),
//                                array('awards-home-last','last'),
//                                array('awards-home','default')
//                            ),
//                            '_posts_per_page'        => 3,
//                            '_posts_per_row'         => 3,
//                            '_loop_wrapper'          => false,
//                            '_row_wrapper'           => false
//                        ));
//                    ?>
<!--                    <a href="#" class="btn btn-orange h4">Read more</a>-->
<!--                </div>-->
<!--            </article>-->
        </div>
    </div>
</div>
    <div class="position-absolute container-fluid height-100 width-100 top-0 left-0" style="z-index: -10;">
        <div class="row height-100">
            <div class="col-sm-12 height-100 background-green"></div>
        </div>
    </div>
</div>
<!-- recent blog posts -->
<div class="background-white padding-top padding-bottom">
    <article class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-blue text-center margin-top-0 margin-bottom">Our latest thinking</h2>
            </div>
        </div>
        <div class="row">
            <?php
                $post_query = new Eemjii_WP_Query(array(
                    '_post_type'             => 'post',
                    '_post_template_prefix'  => 'template',
                    '_post_template_part'    => 'post-home',
                    '_posts_per_page'        => 2,
                    '_posts_per_row'         => 2,
                    '_loop_wrapper'          => false,
                    '_row_wrapper'           => false
                ));
            ?>
        </div>
    </article>
</div>
<?php get_footer(); ?>