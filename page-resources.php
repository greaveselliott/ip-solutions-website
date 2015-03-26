<?php
/*
    Template Name: Resources
*/
?>
<!-- Resources -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<?php
    $home_query = new Eemjii_WP_Query(array(
        '_post_type'             => 'eemjii_resources',
        '_post_template_prefix'  => 'template',
        '_post_template_part'    => 'testimonials',
        '_posts_per_page'        => 5,
        '_posts_per_row'         => 4
    ));
?>
<?php $home_query->loop(); ?>


<?php get_footer(); ?>