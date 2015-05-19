<?php /* Template Name: Clients */ ?>
<?php get_header(); ?>
    <div class="height-auto-important-tablet-portrait">
        <div class="header-offset"></div>
        <?php get_template_part('template','carousel'); ?>
    </div>
</div>
<!-- End .featured-image-container tag -->

<?php get_template_part('template', 'clients-testimonials'); ?>
<article class="background-white">
    <h1 class="hide"><?php the_title(); ?></h1>
    <div class="container">
        <div class="row">
            <div class="block-grid-lg-4 block-grid-md-4 block-grid-sm-4 block-grid-xs-2">
                <?php
                // get: query SOLUTIONS related to this post
                $clients = eemjii_simple_post_query('eemjii_clients');
                eemjii_post_command($clients,'template-clients.php');
                ?>
            </div>
        </div>
    </div>
    <div class="border-3-top-blue">
    <section class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 text-align-center">
                <h3 class="text-orange"><?php the_field('text_area_title') ?></h3>
                <p><?php the_field('text_area_paragraph') ?></p>
            </div>
        </div>
    </section>
    </div>
</article>
<?php get_footer(); ?>