<?php
/*
 * Template creates a carousel using Eliot Condons Advanced Custom Field Plugin with and SlickJS
 *
 */
?>
<div class="header-offset"></div>
<!-- slide wrapper -->
    <div class="acf-slickjs-carousel acf-slickjs-carousel-background">
<?php
// check if the repeater field has rows of data
if( have_rows('slickjs_carousel') ):

    // loop through the rows of data
    while ( have_rows('slickjs_carousel') ) : the_row();
        ?>
        <!--slide -->
        <div class="width-100 height-100">
            <div class="container">
                <div class="row carousel-text">
                    <div class="col-md-6">
                        <h2 class="h3 h6-tablet-portrait text-white bold" style="color:<?php echo explode(":",get_sub_field('slide_text_color'))[0]; ?> !important;"><span class="text-x2"><?php the_sub_field('slide_title'); ?></span></h2>
                        <p class="h3-tablet-up text-white" style="color:<?php echo explode(":",get_sub_field('slide_text_color'))[0]; ?> !important;"><span class="text-x2"><?php the_sub_field('slide_paragraph'); ?></span></p>
                        <?php if ( get_sub_field('slide_link') ): ?>
                        <a class="btn btn-orange h4 margin-bottom-tablet-portrait" href="<?php the_sub_field('slide_link'); ?>" title="<?php the_sub_field('slide_title');?>">Find out more</a>
                        <?php endif; ?>
                    </div>
                    <!-- Slide featured image -->
                    <?php
                    $slide_featured_image = get_sub_field('slide_featured_image');
                    if ($slide_featured_image) : ?>
                    <div class="col-md-6 padding-top">
                        <img src="<?php echo wp_get_attachment_image_src( $slide_featured_image, 'full')[0]; ?>" class="width-100 height-auto">
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php
// display a sub field value
        the_sub_field('sub_field_name');
    endwhile;
    ?>
    </div>
    <div class="width-100 height-100 position-absolute top-0 left-0" style="z-index: -10;">
        <div class="acf-slickjs-carousel-background2">
    <?php

        while ( have_rows('slickjs_carousel') ) : the_row();
            ?>
        <div style="background-image: url(' <?php echo wp_get_attachment_image_src(get_sub_field('slide_background_image'), 'full')[0];?>'); z-index: -10; background-size: cover; background-position: center;"></div>
    <?php
    endwhile;
endif; ?>
        </div>
    </div>