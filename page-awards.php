<?php
/*
 * Template name: Awards
 */
get_header(); ?>
<h1 class="hide"><?php the_title(); ?></h1>
<div class="height-auto-important-tablet-portrait">
    <!--    <div class="header-offset"></div>-->
    <?php get_template_part('template','carousel'); ?>
</div>
</div>
<div class="container">
    <div class="row padding-top padding-bottom">
        <div class="col-sm-8 col-sm-offset-2 text-blue">
            <?php the_field('textfield_top'); ?>
        </div>
    </div>
</div>
<div class="container margin-bottom">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="slick-blog margin-0">
                <?php
                $awards_query = new Eemjii_WP_Query(array(
                    '_post_type'             => 'eemjii_awards',
                    '_post_template_prefix'  => 'template',
                    '_post_template_part'    => 'awards',
                    '_posts_per_page'        => 0,
                    '_loop_wrapper'          => false,
                    '_row_wrapper'           => false
                ));
                ?>
            </div>
        </div>
    </div>
</div>
<div class="border-3-top-grey">
    <div class="container padding-top">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 text-align-center">
                <div class="text-orange h4 line-height-h4 margin-top-0"><?php the_field('title_bottom'); ?></div>
                <div class="text-black"><?php the_field('textarea_bottom'); ?></div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>