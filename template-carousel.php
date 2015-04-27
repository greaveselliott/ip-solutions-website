<?php
/*
 * Template creates a carousel using Eliot Condons Advanced Custom Field Plugin with and SlickJS
 *
 */
?>
<!-- slide wrapper -->
    <div class="acf-slickjs-carousel">
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
                    <div class="col-sm-12">
                        <h2 class="h6-tablet-portrait text-white bold" style="color:<?php echo explode(":",get_sub_field('slide_text_color'))[0]; ?> !important;"><span class="text-x2"><?php the_sub_field('slide_title'); ?></span></h2>
                        <p class="h3-tablet-up text-white" style="color:<?php echo explode(":",get_sub_field('slide_text_color'))[0]; ?> !important;"><span class="text-x2"><?php the_sub_field('slide_paragraph'); ?></span></p>
                        <a class="btn btn-orange h4 margin-bottom-tablet-portrait" href="<?php the_permalink(); ?>">Find out more</a>
                    </div>
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
        <div class="acf-slickjs-carousel-background">
    <?php
        while ( have_rows('slickjs_carousel') ) : the_row();?>
        <div class="" style="background-image: url('<?php the_sub_field('slide_background_image')?>'); z-index: -10; background-size: cover;"></div>
    <?php
    endwhile;
endif; ?>
        </div>
    </div>