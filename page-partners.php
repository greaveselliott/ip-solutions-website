<?php
/*
	Template name: Partners
*/
?>

<?php get_header(); ?>
<div class="height-auto-important-tablet-portrait">
    <div class="header-offset"></div>
    <?php get_template_part('template','clients-carousel'); ?>
</div>
</div>

<div class="container">
    <div class="row padding-top padding-bottom">
        <div class="col-sm-8 col-sm-offset-2">
            <?php
            // TO SHOW THE PAGE CONTENTS
            while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->

                <?php the_content(); ?> <!-- Page Content -->

            <?php
            endwhile; //resetting the page loop
            wp_reset_query(); //resetting the page query
            ?>
        </div>
    </div>
    <div class="row">
        <div class="block-grid-lg-4 block-grid-md-4 block-grid-sm-3 block-grid-xs-2">
            <?php
            // get: query SOLUTIONS related to this post
            $clients = eemjii_simple_post_query('eemjii_partners');
            eemjii_post_command($clients,'template-partners.php');
            ?>
        </div>
    </div>
</div>

<?php get_footer();  ?>
