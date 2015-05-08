<section class="border-3-grey">
    <h3 class="display-none"><?php echo $post->post_title;?></h3>
    <a href="<?php echo get_permalink($post->ID); ?>" class="display-block">
        <figure class="padding">
            <?php
                $featured_image = has_post_thumbnail($post->ID) ?          // CONDITION: This post thumbnail has a featured image?
                   get_the_post_thumbnail($post->ID,'large',array('class'=>'width-100 height-auto')) :    // TRUE: save the post thumnail
                    "http://placehold.it/300x180";                // FALSE: use the default image
            ?>
            <?php echo $featured_image; ?>
            <figcaption class="text-orange h4"><?php echo $post->post_title;?></figcaption>

        </figure>

    </a>
</section>
<hr class="border-3-orange width-100">