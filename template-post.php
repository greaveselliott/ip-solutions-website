<?php
/**
 * The template for blog posts,
 * Currently used on page template: Blog
 */
?>
<article class="background-white padding template-post">
    <time class="text-orange h2 margin-bottom display-block margin-top-0 line-height-h2">
        <span><?php echo get_the_date('d') ?></span>
        <br>
        <span class="border-2-bottom-orange"><?php echo get_the_date('M') ?></span>
    </time>
    <div class="image-position-container">
        <div class="image-position">
            <div class="force-aspect-ratio-container">
                <figure class="force-aspect-ratio">
                <?php echo eemjii_get_featured_image_url( get_the_ID(), 'template-post', array('class'=>'width-100 height-auto') ); ?>
                </figure>
            </div>
        </div>
    </div>
    <h3 class="text-blue h4-tablet-landscape-desktop"><?php the_title(); ?></h3>
    <p class="text-blue"><?php echo get_the_excerpt(); ?></p>
    <a href="<?php the_permalink(); ?>" title="<?php the_title();?>" class="btn btn-orange">Continue reading</a>
</article>