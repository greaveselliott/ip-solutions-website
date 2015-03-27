<?php
/*
    Template Name: Resources
*/
?>
<!-- Resources -->

<?php get_header(); ?>
<?php
    $resource_query = new Eemjii_WP_Query(array(
        '_post_type'             => 'eemjii_resources',
        '_post_template_prefix'  => 'template',
        '_post_template_part'    => 'resources',
        '_posts_per_page'        => 10,
        '_posts_per_row'         => 4
    ));
?>
<?php get_footer(); ?>