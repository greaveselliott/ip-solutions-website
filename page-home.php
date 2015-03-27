<?php
/*
    Template Name: Home
*/
?>

<?php get_header(); ?>

<pre>
    <?php
       echo get_theme_mod('eemjii_option_telephone');
    echo get_theme_mod('eemjii_option_fax');
    echo get_theme_mod('eemjii_option_company_no');
    echo get_theme_mod('eemjii_option_vat_no');
    ?>
</pre>

<?php


    $home_query = new Eemjii_WP_Query(array(
	    '_post_type'             => 'eemjii_resources',
	    '_post_template_prefix'  => 'template',
	    '_post_template_part'    => 'clients',
	    '_posts_per_page'        => 10,
	    '_posts_per_row'         => 2
    ));
?>
<?php get_footer(); ?>