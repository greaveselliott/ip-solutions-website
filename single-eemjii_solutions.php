<?php get_header(); ?>


<?php
// get: query services related to this solution
$related_services = eemjii_reverse_post_query('eemjii_services', 'related_solutions', get_the_ID() );
// get: query resources related to this solution
$related_resources = eemjii_reverse_post_query('eemjii_resources', 'related_services', get_the_ID() );
?>
    <div class="height-auto-important-tablet-portrait position-relative-tablet-portrait">
        <?php get_template_part('template','carousel'); ?>
    </div>
    <!-- Choose your starting point -->
    <article class="starting-point background-blue opacity-90 width-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="text-align-center text-white margin-top margin-bottom h2">Choose your starting point</h1>
                </div>
                <?php get_template_part('template', 'starting-point'); ?>
            </div>
        </div>
    </article>
    <!-- Featured Image -->
    <!-- Related Services -->
    <?php if (!empty($related_services)): ?>
    <section class="background-blue opacity-90">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <h3 class="text-white h4 margin-0 padding-2 background-green opacity-90">Related Services</h3>
                </div>
            </div>
        </div>
        <div class="starting-point background-green opacity-90 width-100">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <?php
                        eemjii_post_command($related_services,'template-solutions-related.php');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    </div><!-- End .featured-image-container tag -->
    <!-- Transform your business with IP Solutions -->
    <div class="container">
        <div class="row text-align-center text-blue">
            <div class="col-sm-12">
                <h3><?php the_field('textbox_top_title'); ?></h3>
                <?php the_field('textbox_top'); ?>
            </div>
        </div>
        <div class="row">
            <div class="<?php echo !empty($related_resources) ? 'col-sm-8' : 'col-sm-12' ?>">
                <div class="row margin-bottom-large">
                    <div class="col-sm-4 col-sm-offset-4">
                        <figure class="table-center-container">
                            <div class="table-center-cell">
                                <h3 class="text-white template-solution-heading-cloud"><?php the_field('subheading_inside_cloud'); ?></h3>
                                <img src="<?php echo get_stylesheet_directory_uri() . '/images/cloud-blue-large.png'; ?>" alt="A big blue cloud icon" class="width-100">
                            </div>
                        </figure>
                        <div class="circle-bottom-green"></div>
                    </div>
                </div>
                <?php
                // check if the repeater field has rows of data
                if( have_rows('the_solution') ):
                    // loop through the rows of data
                    while ( have_rows('the_solution') ) : the_row();
                        ?>
                        <div class="row margin-bottom-large position-relative text-blue">

                            <div class="col-sm-12">
                                <div class="corner-image">
                                    <img src="<?php the_sub_field('image'); ?>" alt="An Icon relating to this this solution">
                                </div>
                                <div class="circle-bottom-green"></div>
                                <div class="padding border-1-green">
                                    <div class="padding-top">
                                        <?php the_sub_field('solution_content');?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    else :

                    // no rows found

                    endif;?>
            </div>
            <?php if ( !empty($related_resources) ): ?>
            <aside class="col-sm-4">
                <h3 class="text-orange margin-top-0">Resources</h3>

                <pre>
                    <?php print_r($related_resources); ?>
                </pre>
                <?php
                // set: display ALL resources relating to this post
                eemjii_post_command($related_resources,'template-resources.php');
                ?>
            </aside>
            <?php endif; ?>
        </div>
        <!-- contact us -->
        <div class="row">
            <div class="col-md-2 col-sm-4 col-md-offset-5 col-sm-offset-4">
                <a href="<?php the_field('contact_us_link'); ?>" title="Contact IP Solutions">
                    <figure class="table-center-container">
                        <div class="table-center-cell">
                            <h3 class="h4 text-white template-solution-heading-cloud">Contact Us</h3>
                            <img src="<?php echo get_stylesheet_directory_uri() . '/images/cloud-blue-large.png'; ?>" alt="A big blue cloud icon" class="width-100">
                        </div>
                    </figure>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 text-align-center padding-top padding-bottom">
                <h3 class="text-orange margin-top-0"><?php the_field('footer_textbox_title');?></h3>
                <div class="display-inline-block">
                    <?php the_field('footer_textbox'); ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>