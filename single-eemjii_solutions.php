<?php get_header();
$background_image =  get_field('background_image');
?>

    <div class="header-offset"></div>
    <div class="position-absolute z-index--10 width-100 height-100 top-0 left-0" style="background: url('<?php echo $background_image ? $background_image['url'] :''; ?>') center no-repeat;background-size: cover;"></div>
    <!-- Choose your starting point -->
    <article class="starting-point background-navy-blue opacity-90 width-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="text-align-center text-white margin-top margin-bottom h2">Choose your starting point</h3>
                </div>
                <?php get_template_part('template', 'starting-point'); ?>
            </div>
        </div>
    </article>
    <!-- Featured Image -->
    </div><!-- End .featured-image-container tag -->
    <!-- Transform your business with IP Solutions -->
    <div class="container">
        <div class="row text-align-center margin-bottom">
            <div class="col-sm-10 col-sm-offset-1">
                <h1 class="h3"><?php the_field('textbox_top_title'); ?></h1>
                <?php the_field('textbox_top'); ?>
            </div>
        </div>
    </div>
    <?php
    // check if the repeater field has rows of data
    if( have_rows('the_solution') ):
        // loop through the rows of data
        $counter = 0;
        ?>
        <?php
        while ( have_rows('the_solution') ) : the_row();
            if ($counter % 2 != 0) :
            ?>
            <div class="background-white padding-top padding-bottom">
                <div class="container">
                    <div class="row position-relative">
                        <div class="col-sm-3 col-sm-offset-2">
                            <img src="<?php echo get_sub_field('image')['url']; ?>" alt="An Icon relating to this this solution" class="width-100 height-auto">
                        </div>
                        <div class="col-sm-5">
                            <h3><?php the_sub_field('title'); ?></h3>
                            <?php the_sub_field('solution_content');?>
                        </div>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <div class="background-light-grey opacity-50 padding-top padding-bottom">
                <div class="container">
                    <div class="row position-relative">
                        <div class="col-sm-5 col-sm-offset-2">
                            <h3><?php the_sub_field('title'); ?></h3>
                            <?php the_sub_field('solution_content');?>
                        </div>
                        <div class="col-sm-3">
                            <img src="<?php echo get_sub_field('image')['url']; ?>" alt="An Icon relating to this this solution" class="width-100 height-auto">
                        </div>
                    </div>
                </div>
            </div>
        <?php
            endif;
            $counter++;
        endwhile;
        endif;?>

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
            <?php get_template_part('template','related-content'); ?>

<div class="container">
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