<?php
    $related_client = eemjii_get_related_posts('eemjii_clients', 'related_client', get_the_ID() );
    $related_services = eemjii_get_related_posts('eemjii_services', 'related_services', get_the_ID() );
    $heading_colour = get_field('heading_color');

?>
<?php
get_header();
?>
<?php
echo eemjii_get_featured_image_url( get_the_ID(), 'wide-1000-3-1', array('class'=>'width-100 height-auto wide-featured-image z-index--20 position-relative') ); ?>
    <!-- Featured Image -->
    <div class="position-absolute bottom-0 width-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <h1 class="h2 text-white drop-heading-position-tablet-portrait" <?php echo $heading_colour ? 'style="color:'.$heading_colour.' !important";':"";?>>Case Study:&nbsp;<?php the_title(); ?></h1>
                </div>
                <!-- Client Logo inside cloud -->
                <div class="col-sm-5 display-none-tablet-portrait">
                    <figure class="table-center-container">
                        <div class="table-center-cell">
                            <img src="<?php echo get_field('client_logo', $related_client[0]->ID); ?>" alt="<?php echo $related_client[0]->post_name ?>"/>
                            <img src="<?php echo get_stylesheet_directory_uri() . '/images/cloud-white-large.png'; ?>" alt="A big white cloud icon" class="cloud">
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End .featured-image-container tag -->
    <div class="background-white border-3-bottom-orange">
        <div class="container padding-top padding-bottom">
            <!-- Testimonial -->
            <?php if(get_field('toggled_testimonial', $related_client[0]->ID) ) : ?>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 text-orange">
                    <?php echo get_field('testimonial', $related_client[0]->ID); ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
<div class="border-3-bottom-grey">
    <div class="container">
        <div class="row padding-bottom">
            <div class="col-sm-6 text-dark-grey">
                <h3 class="text-dark-grey">Background</h3>
                <?php the_field('background'); ?>
                <hr class="width-100 border-3-bottom-grey">
                <h3 class="text-dark-grey">The Challenge</h3>
                <?php the_field('the_challenge'); ?>
            </div>
            <div class="col-sm-6 padding-bottom text-dark-grey">
                <h3 class="text-dark-grey">The Solution</h3>
                <div class="background-grey opacity-10 margin-bottom padding">
                    <?php the_field('the_solution'); ?>
                </div>
                <h3 class="text-dark-grey">Results</h3>
                <div class="background-grey opacity-10 padding">
                    <?php the_field('result'); ?>
                </div>
                <!-- Related Services -->
            </div>
        </div>
    </div>
</div>
    <section class="container padding-top">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <h3>Discover more about our services</h3>
            </div>
        </div>
        <div class="row">
            <!--        <div class="col-sm-10 col-sm-offset-1">-->
            <div class="col-lg-8 col-md-10 col-sm-12 col-lg-offset-2 col-md-offset-1">
                <div class="row">
                    <?php
                    $related_services = eemjii_simple_post_query('eemjii_services', 6);
                    eemjii_post_command($related_services,'template-services-navigation-solutions.php');
                    ?>
                    <!--        </div>-->
                </div>
            </div>
        </div>
    </section>
<!-- Related Case Studies -->
<div class="container">
    <div class="row">
        <div class="col-sm-12 text-align-center padding-top padding-bottom">
            <h3 class="text-dark-grey margin-top-0"><?php the_field('footer_textbox_title');?></h3>
            <div class="display-inline-block">
                <?php the_field('footer_textbox'); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>