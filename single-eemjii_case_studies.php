<?php
    $related_client = eemjii_get_related_posts('eemjii_clients', 'related_client', get_the_ID() );
    $related_services = eemjii_get_related_posts('eemjii_services', 'related_services', get_the_ID() );

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
                    <h3 class="h2 text-white">Case Study</h3>
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
                <div class="col-sm-10 col-sm-offset-1 text-green">
                    <?php echo get_field('testimonial', $related_client[0]->ID); ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
<div class="border-3-bottom-grey">
    <div class="container">
        <div class="row padding-bottom">
            <div class="col-sm-6 text-blue">
                <h3 class="text-orange">Background</h3>
                <?php the_field('background'); ?>
                <hr class="width-100 border-3-bottom-grey">
                <h3 class="text-orange">The Challenge</h3>
                <?php the_field('the_challenge'); ?>
            </div>
            <div class="col-sm-6 padding-bottom text-blue">
                <h3 class="text-orange">The Solution</h3>
                <div class="background-grey opacity-10 margin-bottom padding">
                    <?php the_field('the_solution'); ?>
                </div>
                <h3 class="text-orange">Results</h3>
                <div class="background-grey opacity-10 padding">
                    <?php the_field('result'); ?>
                </div>
                <!-- Related Services -->
                <div class="background-orange padding margin-top">
                    <div class="display-inline-block"><h4 class="text-white h5 padding-right">Discover how IP Solutions can help you</h4></div>
                    <div class="display-inline-block"><?php eemjii_post_command($related_services,'template-services-related.php'); ?></div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Related Case Studies -->
<div class="container">
    <div class="row">
        <div class="col-sm-12 text-align-center padding-top padding-bottom">
            <h3 class="text-orange margin-top-0"><?php the_field('footer_textbox_title');?></h3>
            <div class="display-inline-block">
                <?php the_field('footer_textbox'); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>