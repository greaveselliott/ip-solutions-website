<?php get_header();
// get: query resources related to this post
$related_resources = eemjii_reverse_post_query('eemjii_resources', 'related_services', get_the_ID() );
?>
    <!-- Background Image / Carousel -->
    <div class="height-auto-important-tablet-portrait">
        <div class="header-offset"></div>
        <?php get_template_part('template','carousel'); ?>
    </div>
    </div><!-- End .featured-image-container tag -->
    <article class="container">
        <div class="row">
            <!-- Main Content -->
            <div class="<?php echo !empty($related_resources) ? 'col-sm-8 margin-bottom-tablet-portrait' : 'col-sm-12' ?>">
                <?php
                while(have_posts()) : the_post();
                    the_content();
                endwhile;
                ?>
            </div>
            <!-- Sidebar: Related Resources -->
            <?php if ( !empty($related_resources) ): ?>
                <aside class="col-md-4">
                    <h3 class="text-orange margin-top-0">Resources</h3>
                    <?php

                    // set: display ALL resources relating to this post
                    eemjii_post_command($related_resources,'template-resources.php');
                    ?>
                </aside>
            <?php endif; ?>
        </div>
    </article>
<?php get_footer(); ?>