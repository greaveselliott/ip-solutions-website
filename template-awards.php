<?php
/**
 * The template for blog posts,
 * Currently used on page template: Blog
 */
?>
<article class="background-grey opacity-25 padding template-post">
    <div class="image-position-container">
        <div class="image-position">
            <div class="force-aspect-ratio-container">
                <figure class="force-aspect-ratio">
                <?php echo eemjii_get_featured_image_url( get_the_ID(), 'template-post', array('class'=>'width-100-tablet-up height-auto-tablet-up') ); ?>
                </figure>
            </div>
        </div>
    </div>
    <h3 class="text-grey h4"><?php the_title(); ?></h3>
    <p class="text-grey"><?php echo get_the_excerpt(); ?></p>
    <a href="<?php the_permalink(); ?>" title="<?php the_title();?>" class="btn btn-orange">Continue reading</a>
</article>