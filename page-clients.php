<?php /* Template Name: Clients */ ?>
<?php get_header(); ?>
    <div class="height-auto-important-tablet-portrait">
        <div class="header-offset"></div>
        <?php get_template_part('template','clients-carousel'); ?>
    </div>
</div>
<!-- End .featured-image-container tag -->

<?php get_template_part('template', 'clients-testimonials'); ?>
<div class="background-white padding-top padding-bottom">
    <article class="container">
        <div class="row display-none">
            <div class="col-12-sm">
                <h2 class="h1 margin-top-0 margin-bottom">Clients</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12-sm">
                <?php
                // get: query SOLUTIONS related to this post



                $clients = eemjii_simple_post_query('eemjii_clients');
                eemjii_post_command($clients,'template-clients.php');
                ?>
            </div>
        </div>
    </article>
</div>
<?php get_footer(); ?>