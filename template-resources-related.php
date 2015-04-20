<section>
    <h3 class="display-none"><?php echo $post->post_title;?></h3>
    <a href="<?php echo get_permalink($post->ID); ?>" class="display-block">
        <figure>
            <?php
                $featured_image = has_post_thumbnail() ?          // CONDITION: This post thumbnail has a featured image?
                   get_the_post_thumbnail($post->ID,'large') :    // TRUE: save the post thumnail
                    "http://placehold.it/300x180";                // FALSE: use the default image
            ?>
            <img src="<?php echo $featured_image; ?>" class="width-100">
            <figcaption class="text-orange h4"><?php echo $post->post_title;?></figcaption>
            <hr class="border-3-orange width-100">
        </figure>
    </a>
</section>