<?php
/*
    Template Name: Solutions
*/
?>
<?php get_header(); ?>
<?php
$services_query = new Eemjii_WP_Query(array(
    '_post_type'             => 'eemjii_solutions',
    '_post_template_prefix'  => 'template',
    '_post_template_part'    => 'services-and-solutions',
    '_posts_per_page'        => 10,
    '_posts_per_row'         => 4,
));
?>
<?php get_footer(); ?>