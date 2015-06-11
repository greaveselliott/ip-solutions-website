<?php
$eemjii_the_ID = get_the_ID();
$related_resources = eemjii_get_related_posts('eemjii_resources', 'related_resources',$eemjii_the_ID);
?>
<?php get_header(); ?>
    <div class="height-auto-important-tablet-portrait">
        <!--    <div class="header-offset"></div>-->
        <?php get_template_part('template','carousel'); ?>
    </div>
    </div>
    <div class="container padding-top">
        <div class="row">

            <div class="block-grid-lg-3 block-grid-md-3 block-grid-sm-3 block-grid-xs-1">
            <?php eemjii_post_command($related_resources, 'template-resources-related-block-grid.php'); ?>
                </div>
    </div>
    </div>
<?php get_footer(); ?>