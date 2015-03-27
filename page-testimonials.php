<?php
/*
    Template Name: Testimonials
*/
?>
<?php get_header(); ?>
<?php
$services_query = new Eemjii_WP_Query(array(
    '_post_type'             => 'eemjii_testimonials',
    '_post_template_prefix'  => 'template',
    '_post_template_part'    => 'testimonials',
    '_posts_per_page'        => 10,
    '_posts_per_row'         => 4
));
?>
<?php get_footer(); ?>