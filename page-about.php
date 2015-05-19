<?php
    /*
     * Template name: About
     */

    get_header(); ?>
    <h1 class="hidden"><?php the_title(); ?></h1>
    <div class="height-auto-important-tablet-portrait">
        <!-- <div class="header-offset"></div> -->
        <?php get_template_part('template','carousel'); ?>
    </div>
    </div>
    <?php while(have_posts()) : the_post();?>
    <article class="container">
        <div class="row padding-top padding-bottom border-3-bottom-blue">
            <div class="col-sm-5">
                <?php echo eemjii_get_featured_image_url(get_the_ID(), 'large', array('class'=>'width-100 height-auto')); ?>
            </div>
            <div class="col-sm-7 text-blue">
                <?php the_field('text_area_1');?>
            </div>
        </div>
        <div class="row padding-top padding-bottom">
            <div class="col-sm-12 text-blue">
                <?php the_field('text_area_2'); ?>
            </div>
        </div>
    </article>
    <?php endwhile; ?>
<?php get_footer(); ?>