<?php get_header();
$eemjii_post_ID = get_the_ID();
$related_services = eemjii_simple_post_query('eemjii_services', 6);
// get: query SOLUTIONS related to this post
$related_solutions = eemjii_reverse_post_query('eemjii_solutions', 'related_services', $eemjii_post_ID );
// get: query resources related to this post
$related_resources = eemjii_get_related_posts('eemjii_resources', 'related_resources');
?>

    <!-- Background Image / Carousel -->
    <div class="height-auto-important-tablet-portrait">
        <?php get_template_part('template','carousel'); ?>
    </div>
    <!-- Service Icons-->
    <nav class="starting-point background-blue opacity-90 width-100 padding-top">
        <h2 class="display-none">Services Navigation</h2>
        <div class="container">
            <div class="row">
                <?php
                    eemjii_post_command($related_services,'template-services-navigation.php');
                ?>
            </div>
        </div>
    </nav>
<?php if (!empty($related_solutions)): ?>
<!-- Related Solution -->
<section class="background-blue opacity-90">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 padding-0-tablet-portrait">
                <h3 class="text-white h4 margin-0 padding-2 background-green opacity-90">Related Solutions</h3>
            </div>
        </div>
    </div>
    <div class="starting-point background-green opacity-90 width-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <?php
                    // set: display ALL resources relating to this post
                    eemjii_post_command($related_solutions,'template-solutions-related.php');
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
</div><!-- End .featured-image-container tag -->
<article class="container">
    <div class="row padding-top padding-bottom">
        <div class="col-sm-3 display-none-tablet-portrait">
            <img src="<?php echo get_field('featured_image_rolled_over', get_the_ID() ); ?>" width="70%" class="display-none-phone width-100 height-auto">
        </div>
        <div class="col-sm-9">
            <h2 class="text-blue text-align-center text-decoration-underline"><?php the_title(); ?></h2>
            <p class="text-blue"><?php the_field('service_content_top'); ?></p>
        </div>
    </div>
    <div class="row">
        <!-- Main Content -->
        <div class="<?php echo !empty($related_resources) ? 'col-sm-8 margin-bottom-tablet-portrait' : 'col-sm-12' ?>">
            <?php if( have_rows('service_content') ):?>
                <div class="row">
                    <div class="col-sm-4">
                <ul class="tabs_controll padding-0">
                    <?php while ( have_rows('service_content') ) : the_row();?>
                        <li>
                            <a><?php the_sub_field('section_heading') ?></a>
                        </li>
                    <?php endwhile;?>
                </ul>
                    </div>
                    <div class="col-sm-8">
                <div class="service-tabs border-3-orange">
                <?php
                // loop through the rows of data
                while ( have_rows('service_content') ) : the_row();?>
                    <div class="service-tab-single">
                        <div class="padding-2">
                            <section>
                                <div class="text-align-center-tablet-portrait background-none-tablet-portrait background-blue padding-top padding-bottom" style="background: url(<?php echo get_sub_field('section_icon',get_the_ID()); ?>) right center no-repeat #0078ae">
                                    <h5 class="text-white margin-top-0 h4 padding-2"><?php the_sub_field('section_heading') ?></h5>
                                </div>
                                <?php the_sub_field('section_content'); ?>
                            </section>
                        </div>
                    </div>
                <?php endwhile;?>
                </div>
                </div>
            </div>
            <?php endif;?>
        </div>
        <!-- Sidebar: Related Resources -->
        <?php
            if ( !empty($related_resources) ): ?>
        <aside class="col-md-4">
            <h3 class="text-orange margin-top-0">Resources</h3>
            <?php

                // set: display ALL resources relating to this post
                eemjii_post_command($related_resources,'template-resources-related.php');
            ?>
        </aside>
        <?php endif; ?>
        </div>
    </article>
    <hr class="border-3-blue width-100 margin-top margin-bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 margin-bottom text-align-center">
                <h3 class="text-orange margin-top-0"><?php the_field('service_content_bottom_title'); ?></h3>
                <?php the_field('service_content_bottom'); ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>