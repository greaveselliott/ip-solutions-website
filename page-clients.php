<?php
/*
    Template Name: Clients
*/
?>

<?php get_header(); ?>
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