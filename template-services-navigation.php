<section class="col-sm-2 col-xs-6 padding-bottom">
    <a href="<?php echo get_permalink($post->ID); ?>" class="padding text-align-center display-block border-radius-1 border-1-<?php echo $post->ID == get_the_ID() ? 'green' : 'orange'?>">
        <img src="<?php echo get_stylesheet_directory_uri() .'/images/home-cta-icon-01.png'; ?>" width="70%" class="display-none-phone">
        <h4 class="text-white uppercase h5"><?php echo $post->post_title; ?></h4>
    </a>
</section>