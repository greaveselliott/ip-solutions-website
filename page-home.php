<?php
/*
    Template Name: Home
*/
?>

<?php get_header(); ?>
<div class="full-screen">
    <div class="position-relative width-100 height-100">
        <!-- Aim-high -->
        <div class="position-absolute width-100" style="top:20%;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                        <h2 class="h1 text-white bold"><span class="text-x2">Aim high</span></h2>
                        <h4 class="h3 text-white"><span class="text-x2">Find out why cloud-based services are<br>becoming the de-facto business solution</span></h4>
                </div>
            </div>
        </div>
            </div>
        <!-- Choose your starting point -->
        <article class="starting-point background-blue opacity-90 position-absolute bottom-0 width-100 padding-bottom">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="text-align-center text-white">Choose your starting point</h2>
                    </div>
                </div>
                <div class="row">
                    <section class="col-sm-3 col-xs-6">
                        <div class="flip-container">
                            <div class="front border-1-orange">
                                <div class="padding text-align-center">
                                    <img src="<?php echo get_stylesheet_directory_uri() .'/images/home-cta-icon-01.png'; ?>" width="70%" class="display-none-phone">
                                    <h4 class="text-white uppercase h5">Reduce your<br>comms costs</h4>
                                </div>
                            </div>
                            <div class="back background-orange padding text-align-center">
                                <p class="text-white">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. </p>
                                <a href="#" class="btn btn-white">Read more</a>
                            </div>
                        </div>
                    </section>
                    <section class="col-sm-3 col-xs-6">
                        <div class="flip-container">
                            <div class="front border-1-orange">
                                <div class="padding text-align-center">
                                    <img src="<?php echo get_stylesheet_directory_uri() .'/images/home-cta-icon-02.png'; ?>" width="70%" class="display-none-phone">
                                    <h4 class="text-white uppercase h5">Boost your<br>customer service</h4>
                                </div>
                            </div>
                            <div class="back background-orange padding text-align-center">
                                <p class="text-white">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. </p>
                                <a href="#" class="btn btn-white">Read more</a>
                            </div>
                        </div>
                    </section>
                    <section class="col-sm-3 col-xs-6">
                        <div class="flip-container">
                            <div class="front border-1-orange">
                                <div class="padding text-align-center">
                                    <img src="<?php echo get_stylesheet_directory_uri() .'/images/home-cta-icon-03.png'; ?>" width="70%" class="display-none-phone">
                                    <h4 class="text-white uppercase h5">Improve your<br>office move</h4>
                                </div>
                            </div>
                            <div class="back background-orange padding text-align-center">
                                <p class="text-white">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. </p>
                                <a href="#" class="btn btn-white">Read more</a>
                            </div>
                        </div>
                    </section>
                    <section class="col-sm-3 col-xs-6">
                        <div class="flip-container">
                            <div class="front border-1-orange">
                                <div class="padding text-align-center">
                                    <img src="<?php echo get_stylesheet_directory_uri() .'/images/home-cta-icon-04.png'; ?>" width="70%" class="display-none-phone">
                                    <h4 class="text-white uppercase h5">Improve how your<br>workforce works</h4>
                                </div>
                            </div>
                            <div class="back background-orange padding text-align-center">
                                <p class="text-white">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. </p>
                                <a href="#" class="btn btn-white">Read more</a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </article><?php if (has_post_thumbnail( $post->ID ) ): ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
            $image = $image[0]; ?>
        <?php else :
            $image = 'http://placehold.it/100x100'; ?>
        <?php endif; ?>
        <div class="width-100 height-100 position-absolute top-0 left-0" style="background-image: url('<?php echo $image; ?>'); z-index: -10; background-size: cover;"></div>
    </div>
</div>
<!-- End Fullscreen -->
<!-- Transform your business with IP Solutions -->
<div class="background-grey opacity-10 padding-top padding-bottom">
    <article class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2 class="text-grey h3"><span class="text-x2">Transform your business with IP Solutions</span></h2>
                <p class="text-blue h3">We're not just experts in comms technology, we're experts in applying it too. Find out more about how we deliver agile, flexible and intuitive solutions - delivering real results to hte button line.</p>
            </div>
            <div class="col-sm-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/92117864" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="https://vimeo.com/92117864">IP Solutions: Communications, Sorted</a> from <a href="https://vimeo.com/user26771751">IP Solutions</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
                </div>
            </div>
        </div>
    </article>
</div>
<!-- Award winning experts -->
<div class="background-orange padding-top padding-bottom">
    <article class="container">
        <div class="row">
            <div class="col-sm-12"><h2 class="text-align-center text-white">Award winning experts</h2></div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="force-aspect-ratio-container">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/images/reseller-award.jpg' ?>" class="force-aspect-ratio">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?php
                        $awards_query = new Eemjii_WP_Query(array(
                            '_post_type'             => 'post',
                            '_post_template_prefix'  => 'template',
                            '_post_template_part'    => 'post',
                            '_posts_per_page'        => 3,
                            '_loop_wrapper'          => false,
                            '_row_wrapper'          => false
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </article>
</div>
<!-- Testimonials / Clients -->
<div class="background-white padding-top padding-bottom">
    <article class="container">
        <div class="row display-none">
            <div class="col-12-sm">
                <h2>IP Solutions Testimonials</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12-sm">
                <div class="slick-testimonial-home">
                    <?php
                        $services_query = new Eemjii_WP_Query(array(
                            '_post_type'             => 'eemjii_testimonials',
                            '_post_template_prefix'  => 'template',
                            '_post_template_part'    => 'testimonials',
                            '_loop_wrapper'          => false,
                            '_row_wrapper'          => false
                        ));
                    ?>
                </div>
            </div>
        </div>

    </article>
</div>
<div class="background-blue">
    <article class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-white text-center">Our latest thinking</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
               <section class="row margin-bottom">
                   <div class="col-sm-4">
                       <div class="force-aspect-ratio-container">
                           <img class="force-aspect-ratio" src="<?php echo get_stylesheet_directory_uri() . "/images/numbers-01.jpg"; ?>">
                       </div>
                   </div>
                   <div class="col-sm-8">
                       <h3 class="text-green margin-top-0">Lorem Ipsum Icha Lorem</h3>
                       <p class="text-white">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean.</p>
                       <a class="btn btn-orange" href="#">Read more</a>
                   </div>
               </section>
                <section class="row margin-bottom">
                    <div class="col-sm-4">
                        <div class="force-aspect-ratio-container">
                            <img class="force-aspect-ratio" src="<?php echo get_stylesheet_directory_uri() . "/images/latest-thinking.jpg"; ?>">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <h3 class="text-green margin-top-0">Lorem Ipsum Icha Lorem</h3>
                        <p class="text-white">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean.</p>
                        <a class="btn btn-orange" href="#">Read more</a>
                    </div>
                </section>
            </div>
        </div>
    </article>
</div>
<?php get_footer(); ?>