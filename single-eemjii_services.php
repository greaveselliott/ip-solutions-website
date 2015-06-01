<?php get_header();
$eemjii_post_ID = get_the_ID();
$related_services = eemjii_simple_post_query('eemjii_services', 6);
// get: query SOLUTIONS related to this post
//$related_solutions = eemjii_get_related_posts('eemjii_solutions', 'related_solutions', $eemjii_post_ID );
// get: query resources related to this post

?>

    <div class="header-offset"></div>
    <div class="position-absolute z-index--10 width-100 height-100 top-0 left-0" style="background: url('<?php echo get_field('background_image')['url']; ?>') center no-repeat;background-size: cover;"></div>
    <!-- Service Icons-->
    <nav class="starting-point background-navy-blue opacity-90 width-100 padding-top">
        <h1 class="display-none h2">Services Navigation</h1>
        <div class="container">
            <div class="row">
                <?php
                    eemjii_post_command($related_services,'template-services-navigation.php');
                ?>
            </div>
        </div>
    </nav>

</div><!-- End .featured-image-container tag -->
<?php $service_top_additional_text = get_field('use_text_instead');?>
<div class="container padding-top padding-bottom">
    <div class="row">
        <div class="col-sm-12"><h2 class="text-navy-blue margin-top-0 line-height-h2"><?php the_title(); ?></h2></div>
    </div>
    <div class="row">
        <div class="<?php echo $service_top_additional_text ? 'col-sm-6' : 'col-sm-8';?>">
            <?php the_field('service_content_top'); ?>
        </div>
        <?php
        // Is the top service content using an image?
        if(!$service_top_additional_text):
            // True: Show the image
        ?>
        <div class="col-sm-4 display-none-tablet-portrait padding-2 padding-top-0 padding-left-0 padding-right-0">
            <?php $image =  get_field('services_content_top_image',$eemjii_post_ID);?>
            <img src="<?php echo $image ? $image['url'] : "http://placehold.it/75x75"; ?>" alt="<?php echo $image['alt']; ?>" class="display-none-phone width-100 height-auto">
        </div>
        <?php
        elseif($service_top_additional_text && have_rows('service_additional_content')):
            // False: Show the Content
            $counter = 0;
            // Count the number of rows
            while(have_rows('service_additional_content')): the_row();
                $counter++;
            endwhile;
            // Get the column width for the additional content
            $column_width = 12 / $counter;
            ?>
            <div class="col-sm-6">
                <div class="row">
                    <?php while(have_rows('service_additional_content')): the_row();?>
                        <div class="col-lg-<?php echo $column_width?> height-100 margin-bottom-desktop-down">
                            <div class="background-navy-blue padding-1_5">
                                <h4 class="text-white margin-top-0"><?php the_sub_field('title'); ?></h4>
                                <p class="text-white"><?php the_sub_field('paragraph'); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php
        endif;
        ?>
    </div>
</div>
<?php if( have_rows('service_content') ):?>
<div class="background-navy-blue margin-bottom">
    <div class="container">
        <div class="service-tabs-heading">
            <?php while ( have_rows('service_content') ) : the_row();?>
                    <div>
                        <div class="padding-top padding-bottom text-align-center-desktop-up" style="background: url('<?php echo get_sub_field('section_icon',get_the_ID())['url']; ?>') center center no-repeat; background-size: auto 80%;">
                        <h5 class="text-white margin-0 h4"><?php the_sub_field('section_heading') ?></h5></div>
                    </div>
            <?php endwhile;?>
        </div>
    </div>
</div>
<div class="container">
    <div class="row padding-bottom">
        <!-- Main Content -->
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-3">
                    <ul class="tabs_controll padding-0">
                        <?php while ( have_rows('service_content') ) : the_row();?>
                            <li>
                                <a><?php the_sub_field('section_heading') ?></a>
                            </li>
                        <?php endwhile;?>
                    </ul>
                </div>
                <div class="col-sm-9">
                    <div class="service-tabs background-light-grey opacity-50">
                    <?php
                    // loop through the rows of data
                    while ( have_rows('service_content') ) : the_row();?>
                        <div class="service-tab-single">
                            <div class="padding">
                                <section>
                                    <?php the_sub_field('section_content'); ?>
                                </section>
                            </div>
                        </div>
                    <?php endwhile;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif;?>
    </div>
<?php get_template_part('template','related-content'); ?>
    <div class="container padding-top">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 margin-bottom text-align-center">
                <h3 class="text-orange margin-top-0"><?php the_field('service_content_bottom_title'); ?></h3>
                <?php the_field('service_content_bottom'); ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>