<?php
/*
    Template Name: Home
*/
?>

<?php get_header(); ?>
    <div class="height-auto-important-tablet-portrait">
            <?php get_template_part('template','carousel'); ?>
        </div>
        <!-- Choose your starting point -->
        <article class="starting-point background-blue opacity-90 width-100">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="text-align-center text-white h1 margin-top margin-bottom">Choose your starting point</h2>
                    </div>
                </div>
                <div class="row">
                    <section class="col-sm-3 col-xs-6 padding-bottom">
                        <div class="flip-container">
                            <div class="front border-1-orange">
                                <div class="padding text-align-center">
                                    <img src="<?php echo get_stylesheet_directory_uri() .'/images/home-cta-icon-01.png'; ?>" width="70%" class="display-none-phone">
                                    <h4 class="text-white uppercase h5">Reduce your<br>comms costs</h4>
                                </div>
                            </div>
                            <div class="back background-orange padding text-align-center">
                                <p class="text-white">Discover how to curb excessive spending, apportion costs, and  the best tariffs to suit your needs.</p>
                                <a href="#" class="btn btn-white">Read more</a>
                            </div>
                        </div>
                    </section>
                    <section class="col-sm-3 col-xs-6 padding-bottom">
                        <div class="flip-container">
                            <div class="front border-1-orange">
                                <div class="padding text-align-center">
                                    <img src="<?php echo get_stylesheet_directory_uri() .'/images/home-cta-icon-02.png'; ?>" width="70%" class="display-none-phone">
                                    <h4 class="text-white uppercase h5">Boost your<br>customer service</h4>
                                </div>
                            </div>
                            <div class="back background-orange padding text-align-center">
                                <p class="text-white">Learn how call reporting and call recording can help you deliver higher levels of customer satisfaction.</p>
                                <a href="#" class="btn btn-white">Read more</a>
                            </div>
                        </div>
                    </section>
                    <section class="col-sm-3 col-xs-6 padding-bottom">
                        <div class="flip-container">
                            <div class="front border-1-orange">
                                <div class="padding text-align-center">
                                    <img src="<?php echo get_stylesheet_directory_uri() .'/images/home-cta-icon-03.png'; ?>" width="70%" class="display-none-phone">
                                    <h4 class="text-white uppercase h5">Improve your<br>office move</h4>
                                </div>
                            </div>
                            <div class="back background-orange padding text-align-center">
                                <p class="text-white">Grab the opportunity to not just replace an outdated comms infrastructure – but to stay ahead of the curve forever.</p>
                                <a href="#" class="btn btn-white">Read more</a>
                            </div>
                        </div>
                    </section>
                    <section class="col-sm-3 col-xs-6 padding-bottom">
                        <div class="flip-container">
                            <div class="front border-1-orange">
                                <div class="padding text-align-center">
                                    <img src="<?php echo get_stylesheet_directory_uri() .'/images/home-cta-icon-04.png'; ?>" width="70%" class="display-none-phone">
                                    <h4 class="text-white uppercase h5">Improve how your<br>workforce works</h4>
                                </div>
                            </div>
                            <div class="back background-orange padding text-align-center">
                                <p class="text-white">Better, quicker, and more adaptable – discover how you can achieve a flexible, collaborative working environment.</p>
                                <a href="#" class="btn btn-white">Read more</a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </article>
    </div>
</div>
<!-- Featured Image -->
<?php if (has_post_thumbnail( $post->ID ) ): ?>
</div><!-- End .featured-image-container tag -->
<?php endif; ?>
<!-- Transform your business with IP Solutions -->
<div class="background-orange padding-top padding-bottom">
    <div class="container">
        <div class="row">
            <article class="col-sm-6">
                <h2 class="text-white h5"><span class="text-x2">Transform your business with IP Solutions</span></h2>
                <p class="text-white">Cloud-based solutions are the future, now – allowing telephony, video, data, email, messaging and more to be unified into one umbrella solution that is both agile and cost-effective.</p>
                <p class="text-white">From virtual contact centres, to cloud-based virtual desktops and servers, we’re not just experts in comms technology, we’re experts in applying it too. Find out more about how we deliver flexible and intuitive solutions that deliver real results to the bottom line.</p>
                <div class="embed-responsive embed-responsive-16by9 margin-top">
                    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/92117864" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="https://vimeo.com/92117864">IP Solutions: Communications, Sorted</a> from <a href="https://vimeo.com/user26771751">IP Solutions</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
                </div>
            </article>

            <!-- Award winning experts -->
            <article class="col-sm-6">
                <div class="border-2-left-white padding-left">
                    <h2 class="text-white h3 margin-top-0 margin-bottom">Award winning providers</h2>
                    <?php
                        $awards_query = new Eemjii_WP_Query(array(
                            '_post_type'             => 'post',
                            '_post_template_prefix'  => 'template',
                            '_post_template_part'    => array(
                                array('awards-first','first'),
                                array('awards','default')
                            ),
                            '_posts_per_page'        => 3,
                            '_posts_per_row'         => 3,
                            '_loop_wrapper'          => false,
                            '_row_wrapper'           => false
                        ));
                    ?>
                    <a href="#" class="btn btn-white h4">Find out why people choose us</a>
                </div>
            </article>
        </div>
    </div>
</div>
<!-- Testimonials / Clients -->
<div class="background-white padding-top padding-bottom">
    <article class="container">
        <div class="row display-none">
            <div class="col-12-sm">
                <h2 class="h1 margin-top-0 margin-bottom">IP Solutions Testimonials</h2>
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
<div class="background-blue padding-top padding-bottom">
    <article class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-white text-center h1 margin-top-0 margin-bottom">Our latest thinking</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
               <section class="row margin-bottom">
                   <div class="col-sm-4">
                       <div class="force-aspect-ratio-container">
                           <img class="force-aspect-ratio" src="<?php echo get_stylesheet_directory_uri() . "/images/numbers-01.jpg"; ?>">
                       </div>
                   </div>
                   <div class="col-sm-8">
                       <h3 class="text-green margin-top-0">What’s in a number?</h3>
                       <p class="text-white">Contact Centres have changed; or, more precisely, they’re continuing to evolve. Whilst change is inevitable, it’s also a challenge to Contact Centre managers to offer the high levels of flexibility, responsiveness and customer service that people have come to expect, without incurring significant costs.</p>
                       <a class="btn btn-orange" href="#">Read more</a>
                   </div>
               </section>
            </div>
            <div class="col-sm-6">
                <section class="row margin-bottom">
                    <div class="col-sm-4">
                        <div class="force-aspect-ratio-container">
                            <img class="force-aspect-ratio" src="<?php echo get_stylesheet_directory_uri() . "/images/latest-thinking.jpg"; ?>">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <h3 class="text-green margin-top-0">Inbound Innovation</h3>
                        <p class="text-white">Generating interest in your product or service is less than half the battle. If you’re operating an inbound contact centre, having done everything you can to encourage inbound enquiries, you have to make sure you deliver an excellent customer experience.</p>
                        <a class="btn btn-orange" href="#">Read more</a>
                    </div>
                </section>
            </div>
        </div>
    </article>
</div>
<?php get_footer(); ?>