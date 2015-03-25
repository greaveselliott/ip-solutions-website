<?php
/*
    Template Name: Home
*/
?>

<?php get_header(); ?>


<?php

    $home_args = array(
        '_post_type'             => 'eemjii_resources',
        '_post_template_part'    => 'resources',
        '_post_per_page'         => 0,
        '_posts_per_row'         =>
    );
    $home_query = new Eemjii_WP_Query($home_args);
?>
<?php
    $home_query->loop();
?>


<?php get_footer(); ?>