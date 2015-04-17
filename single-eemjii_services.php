<?php get_header(); ?>
    <!-- Background Image / Carousel -->
    <div class="height-auto-important-tablet-portrait">
        <?php get_template_part('template','carousel'); ?>
    </div>
    <!-- Service Icons-->
    <nav class="starting-point background-blue opacity-90 width-100 padding-top">
        <h2 class="display-none">Services Navigation</h2>
        <div class="container">
            <div class="row">
                <!-- Single Service Icon -->
                <section class="col-sm-2 col-xs-6 padding-bottom">
                    <div class="border-1-orange">
                        <div class="padding text-align-center">
                            <img src="<?php echo get_stylesheet_directory_uri() .'/images/home-cta-icon-01.png'; ?>" width="70%" class="display-none-phone">
                            <h4 class="text-white uppercase h5">Reduce your<br>comms costs</h4>
                        </div>
                    </div>
                </section>
                <!-- Single Service Icon -->
                <section class="col-sm-2 col-xs-6 padding-bottom">
                    <div class="border-1-orange">
                        <div class="padding text-align-center">
                            <img src="<?php echo get_stylesheet_directory_uri() .'/images/home-cta-icon-01.png'; ?>" width="70%" class="display-none-phone">
                            <h4 class="text-white uppercase h5">Reduce your<br>comms costs</h4>
                        </div>
                    </div>
                </section>
                <!-- Single Service Icon -->
                <section class="col-sm-2 col-xs-6 padding-bottom">
                    <div class="border-1-orange">
                        <div class="padding text-align-center">
                            <img src="<?php echo get_stylesheet_directory_uri() .'/images/home-cta-icon-01.png'; ?>" width="70%" class="display-none-phone">
                            <h4 class="text-white uppercase h5">Reduce your<br>comms costs</h4>
                        </div>
                    </div>
                </section>
                <!-- Single Service Icon -->
                <section class="col-sm-2 col-xs-6 padding-bottom">
                    <div class="border-1-orange">
                        <div class="padding text-align-center">
                            <img src="<?php echo get_stylesheet_directory_uri() .'/images/home-cta-icon-01.png'; ?>" width="70%" class="display-none-phone">
                            <h4 class="text-white uppercase h5">Reduce your<br>comms costs</h4>
                        </div>
                    </div>
                </section>
                <!-- Single Service Icon -->
                <section class="col-sm-2 col-xs-6 padding-bottom">
                    <div class="border-1-orange">
                        <div class="padding text-align-center">
                            <img src="<?php echo get_stylesheet_directory_uri() .'/images/home-cta-icon-01.png'; ?>" width="70%" class="display-none-phone">
                            <h4 class="text-white uppercase h5">Reduce your<br>comms costs</h4>
                        </div>
                    </div>
                </section>
                <!-- Single Service Icon -->
                <section class="col-sm-2 col-xs-6 padding-bottom">
                    <div class="border-1-orange">
                        <div class="padding text-align-center">
                            <img src="<?php echo get_stylesheet_directory_uri() .'/images/home-cta-icon-01.png'; ?>" width="70%" class="display-none-phone">
                            <h4 class="text-white uppercase h5">Reduce your<br>comms costs</h4>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </nav>
<!-- Related Services -->
<section class="background-blue opacity-90">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 background-green opacity-90">
                <h3 class="text-white text-center h4">Related Services</h3>
            </div>
        </div>
    </div>
    <div class="starting-point background-green opacity-90 width-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <img src="http://placehold.it/40x40" class="display-inline-block">
                    <img src="http://placehold.it/40x40" class="display-inline-block">
                    <img src="http://placehold.it/40x40" class="display-inline-block">
                </div>
            </div>
        </div>
    </div>
</section>
</div><!-- End .featured-image-container tag -->
<div class="container">
    <div class="row">
        <!-- Main Content -->
        <article class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-orange"><?php the_field('service_content_top_title'); ?></h3>
                    <p><?php the_field('service_content_top'); ?></p>
                </div>
            </div>
            <hr class="border-3-orange width-100 margin-top margin-bottom">
            <div class="row">
                <div class="col-md-12">
                    <div class="pwstabs">
                       <?php
                            if( have_rows('service_content') ):
                                // loop through the rows of data
                                $i = 0;
                                while ( have_rows('service_content') ) : the_row();
                                ?>
                                    <div
                                        data-pws-tab="tab-<?php echo $i?>"
                                        data-pws-tab-name="<?php the_sub_field('section_heading') ?>">
                                        <section>
                                            <h3 class="text-orange margin-top-0"><?php the_sub_field('section_heading') ?></h3>
                                            <p><?php the_sub_field('section_content'); ?></p>
                                        </section>
                                    </div>
                                <?
                                $i++;
                                endwhile;
                            endif;
                       ?>
                    </div>
                </div>
            </div>
        </article>
        <!-- Sidebar: Related Resources -->
        <aside class="col-md-4">
            <h3 class="text-orange">Resources</h3>
            <figure>
                <img src="http://placehold.it/300x180" class="width-100">
                <figcaption class="text-orange h4">Some title text...</figcaption>
            </figure>
            <hr class="border-3-orange width-100">
            <figure>
                <img src="http://placehold.it/300x180" class="width-100">
                <figcaption class="text-orange h4">Some title text...</figcaption>
            </figure>
        </aside>
    </div>
    <hr class="border-3-blue width-100 margin-top margin-bottom">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <h3 class="text-orange text-align-center"><?php the_field('service_content_bottom_title'); ?></h3>
            <p class="text-align-center"><?php the_field('service_content_bottom'); ?></p>
        </div>
    </div>
</div>
<?php get_footer(); ?>