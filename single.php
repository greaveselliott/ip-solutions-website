<?php
get_header();
?>
    <?php echo eemjii_get_featured_image_url( get_the_ID(), 'wide-1000-3-1', array('class'=>'width-100 height-auto wide-featured-image') ); ?>
    <!-- Featured Image -->
    <div class="background-purple">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="position-absolute bottom-0 padding padding-2-tablet-portrait border-1-white text-align-center margin-bottom">
                        <time class="text-white h3 h4-tablet-portrait line-height-h3 line-height-h4-tablet-portrait margin-0 display-block">
                            <span><?php echo get_the_date('d') ?></span>
                            <br class="display-none-tablet-portrait">
                            <span><?php echo get_the_date('M') ?></span>
                        </time>
                    </div>
                </div>
                <!-- Share Icons -->
                <div class="col-sm-5">
                    <div class="position-absolute bottom-0 margin-bottom width-100 text-align-right display-none-tablet-portrait">
                        <?php if( is_active_sidebar( 'social-media-sharing' ) ) : ?>
                            <h3 class="line-height-h3 margin-0 text-white display-inline-block">Share this post</h3>
                            <div class="display-inline-block">
                                <?php dynamic_sidebar( 'social-media-sharing' ); ?>
                            </div>
                        <?php else : ?>
                            <div class="alert alert-warning">You haven't added the Social Media Sharing widget yet. Why not pop over to the the WordPress admin panel and navigate to appearence > widgets options to add the social media widget?</div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End .featured-image-container tag -->

<div class="background-purple">
    <div class="container">
        <div class="row padding-2">
            <div class="col-sm-10 col-sm-offset-1 padding-top-tablet-up padding-bottom-tablet-up">
                <h2 class="text-white h1 h2-tablet-landscape-desktop h3-tablet-portrait margin-0 line-height-h2"><?php the_title(); ?></h2>
            </div>
        </div>
    </div>
</div>

<!--<div class="background-white border-3-bottom-orange">-->
<!--    <div class="container">-->
<!--        <div class="row padding-top padding-bottom">-->
<!--            <div class="col-sm-10 col-sm-offset-1">-->
<!--                --><?php //if( is_active_sidebar( 'social-media-sharing' ) ) : ?>
<!--                    <h3 class="line-height-h3 margin-0 text-grey display-inline-block">Share this post</h3>-->
<!--                    <div class="display-inline-block">-->
<!--                        --><?php //dynamic_sidebar( 'social-media-sharing' ); ?>
<!--                    </div>-->
<!--                --><?php //else : ?>
<!--                    <div class="alert alert-warning">You haven't added the Social Media Sharing widget yet. Why not pop over to the the WordPress admin panel and navigate to appearence > widgets options to add the social media widget?</div>-->
<!--                --><?php //endif; ?>
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<div class="background-white border-3-bottom-orange">
    <div class="container padding-top padding-bottom">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <?php
                while(have_posts()) : the_post();
                    the_content();
                endwhile;
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 col-sm-offset-1">
                <?php
                $prev_post = get_previous_post();
                if (!empty( $prev_post )): ?>

                    <a class="post-nav-older" title="<?php _e('Previous post:', 'twentyten'); echo ' ' . esc_attr(get_the_title($prev_post)); ?>" href="<?php echo get_permalink( $prev_post->ID ); ?>">&laquo; <?php echo get_the_title($prev_post); ?></a>

                <?php endif; ?>
            </div>
            <div class="col-sm-5 text-align-right">
                <?php
                $next_post = get_next_post();
                if (!empty( $next_post )): ?>
                    <a class="post-nav-newer" title="<?php _e('Next post:', 'lingonberry'); echo ' ' . esc_attr(get_the_title($next_post)); ?>" href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo get_the_title($next_post); ?> &raquo;</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="background-white">
    <div class="container padding-top padding-bottom">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <?php comments_template( '', true ); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>