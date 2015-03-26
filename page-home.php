<?php
/*
    Template Name: Home
*/
?>

<?php get_header(); ?>


<?php
    $home_query = new Eemjii_WP_Query(array(
	    '_post_type'             => 'eemjii_resources',
	    '_post_template_prefix'  => 'template',
	    '_post_template_part'    => 'testimonials',
	    '_posts_per_page'        => 5,
	    '_posts_per_row'         => 2
    ));
?>
<?php
    $home_query->loop();
?>
<?php get_footer(); ?>