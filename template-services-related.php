<a href="<?php echo get_permalink($post->ID); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo $post->post_title; ?>" class="display-inline-block padding-2 padding-left-0">
    <div class="border-radius-1 border-2-white padding-2">
        <img src="<?php echo get_field('featured_image',$post->ID); ?>" alt="<?php echo $post->post_name ?>" class="related-service-icon"/>
    </div>
</a>