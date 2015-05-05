<?php get_header(); ?>
    <!-- Background Image / Carousel -->
    <div class="height-auto-important-tablet-portrait">
        <div class="header-offset"></div>
        <?php get_template_part('template','services-carousel'); ?>
    </div>
    <!-- Service Icons-->
    <nav class="starting-point background-blue opacity-90 width-100 padding-top">
        <h2 class="display-none">Services Navigation</h2>
        <div class="container">
            <div class="row">
                <?php
                    $related_services = eemjii_simple_post_query('eemjii_services', 6);
                    eemjii_post_command($related_services,'template-services-navigation.php');
                ?>
            </div>
        </div>
    </nav>
<!-- Related Services -->
<section class="background-blue opacity-90">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <h3 class="text-white h4 margin-0 padding-2 background-green opacity-90">Related Solutions</h3>
            </div>
        </div>
    </div>
    <div class="starting-point background-green opacity-90 width-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <?php
                    // get: query SOLUTIONS related to this post
                    $related_solutions = eemjii_reverse_post_query('eemjii_solutions', 'related_services', get_the_ID() );
                    // set: display ALL resources relating to this post
                    eemjii_post_command($related_solutions,'template-solutions-related.php');
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
</div><!-- End .featured-image-container tag -->
<article class="container">
    <div class="row padding-top padding-bottom">
        <div class="col-md-3">
            <img src="<?php echo eemjii_get_acf_image_url('featured_image'); ?>" width="70%" class="display-none-phone width-100 height-auto">
        </div>
        <div class="col-md-9">
            <h2 class="text-blue text-align-center text-decoration-underline"><?php the_title(); ?></h2>
            <p class="text-blue"><?php the_field('service_content_top'); ?></p>
        </div>
    </div>
    <div class="row">
        <!-- Main Content -->
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <div class="pwstabs">
                       <?php
                            if( have_rows('service_content') ):
                                // loop through the rows of data
                                $i = 0;
                                while ( have_rows('service_content') ) : the_row();
                                ?>
                                    <div data-pws-tab="tab-<?php echo $i?>" data-pws-tab-name="<?php the_sub_field('section_heading') ?>">
                                        <div class="padding-2 border-3-orange">
                                        <section>
                                            <div class="background-blue padding-top padding-bottom">
                                                <h5 class="text-white margin-top-0 h4 padding-2"><?php the_sub_field('section_heading') ?></h5>
                                            </div>
                                            <p class="text-blue"><?php the_sub_field('section_content'); ?></p>
                                        </section>
                                        </div>
                                    </div>
                                <?
                                $i++;
                                endwhile;
                            endif;
                       ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar: Related Resources -->
        <aside class="col-md-4">
            <h3 class="text-orange margin-top-0">Resources</h3>
            <?php
                // get: query resources related to this post
                $related_resources = eemjii_reverse_post_query('eemjii_resources', 'related_services', get_the_ID() );
                // set: display ALL resources relating to this post
                eemjii_post_command($related_resources,'template-resources-related.php');
            ?>
        </aside>
    </article>
    <hr class="border-3-blue width-100 margin-top margin-bottom">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 margin-bottom">
            <h3 class="text-orange text-align-center margin-top-0"><?php the_field('service_content_bottom_title'); ?></h3>
            <p class="text-align-center"><?php the_field('service_content_bottom'); ?></p>
        </div>
    </div>
</div>
<?php get_footer(); ?>