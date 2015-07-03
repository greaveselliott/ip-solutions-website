<?php
/**
 * The template for blog posts,
 * Currently used on page template: Blog
 */
?>
<article class="background-light-grey padding template-post awards-height">
    <div class="text-align-center">
        <div class="display-inline-block">
            <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail('original');
            } else {}
            ?>
        </div>
    </div>
    <h3 class="text-grey h4"><?php the_title(); ?></h3>
    <p class="text-grey"><?php the_field('short_description'); ?></p>
    <a href="<?php the_permalink(); ?>" title="<?php the_title();?>" class="btn btn-orange">Continue reading</a>
</article>