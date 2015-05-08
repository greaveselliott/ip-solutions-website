<section class="col-md-2 col-sm-4 col-xs-6 margin-bottom">
    <a href="<?php echo get_permalink($post->ID); ?>" class=" padding-2 text-align-center display-block border-radius-1 border-1-<?php echo $post->ID == get_the_ID() ? 'green' : 'white'?>">
        <img src="<?php echo eemjii_get_acf_image_url('featured_image', false, $post->ID); ?>" width="70%" class="display-none-tablet-portrait <?php echo $post->ID == get_the_ID() ? 'display-none' : '';?>">
        <img src="<?php echo eemjii_get_acf_image_url('featured_image_rolled_over', false, $post->ID); ?>"
             width="70%" class="display-none-tablet-portrait <?php echo $post->ID == get_the_ID() ? '' : 'display-none';?> ">
        <h4 class="text-white uppercase h5"><?php echo $post->post_title; ?></h4>
    </a>
</section>