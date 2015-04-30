<?php
/*
    Template Name: Clients
*/
?>

<?php get_header(); ?>
    <div class="height-auto-important-tablet-portrait">
        <div class="header-offset"></div>
        <?php get_template_part('template','clients-carousel'); ?>
    </div>
</div>
<!-- End .featured-image-container tag -->

<?php get_template_part('template', 'clients-testimonials'); ?>
<?php
$services_query = new Eemjii_WP_Query(array(
    '_post_type'             => 'eemjii_clients',
    '_post_template_prefix'  => 'template',
    '_post_template_part'    => 'clients',
    '_posts_per_page'        => 10,
    '_posts_per_row'         => 3
));
?>
<?php get_footer(); ?>