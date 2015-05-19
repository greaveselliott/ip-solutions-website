<?php
/*
    Template Name: Blog
*/
get_header(); ?>
<?php
    /* Note:
     * There is no featured image on this template, this is just closing the featured image tag opening in header.php
    */
?>
<!-- Featured Image -->
</div>
<!-- End .featured-image-container tag -->
<section class="width-100 position-relative">
    <div class="header-offset-tablet-portrait"></div>
    <div class="container">
        <!-- Title -->
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <h1 class="h2 display-none-tablet-up text-align-center text-orange margin-top-0"><?php echo the_title(); ?></h1>
                <figure class="speech-bubble display-none-tablet-portrait"><img src="<?php echo get_stylesheet_directory_uri() . '/images/blog-speech-bubbles.png'; ?>" class="width-100 height-auto">
                    <figcaption class="h2 h3-tablet-landscape-desktop"><?php echo the_title(); ?> </figcaption>
                </figure>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 padding border-1-left-white-tablet-up border-1-top-white-tablet-up border-1-right-white-tablet-up">
                <div class="slick-blog margin-0">
                    <?php
                        $post_query = new Eemjii_WP_Query(array(
                            '_post_type'             => 'post',
                            '_post_template_prefix'  => 'template',
                            '_post_template_part'    => 'post',
                            '_posts_per_page'        => 0,
                            '_loop_wrapper'          => false,
                            '_row_wrapper'           => false
                        ));
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="position-absolute background-blue top-0 speech-bubble-background width-100 height-60"></div>
</section>
<?php get_footer(); ?>