<a href="<?php echo get_permalink($post->ID); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo $post->post_title; ?>" class="display-inline-block padding-2 padding-right-0">
    <div class="border-radius-1 border-2-orange">
        <img src="<?php echo eemjii_get_featured_image_url($post->ID); ?>" width="40px" height="40px">
    </div>
</a>