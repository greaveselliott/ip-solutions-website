<a href="<?php echo get_permalink($post->ID); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo $post->post_title; ?>" class="display-inline-block padding-2 padding-left-0">
    <section class="border-radius-1 border-2-white padding-2">
        <h3 class="hide"><?php echo $post->post_name ?></h3>
        <img src="<?php echo get_field('featured_image',$post->ID); ?>" alt="<?php echo $post->post_name ?>" class="related-service-icon"/>
    </section>
</a>