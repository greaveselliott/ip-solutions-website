<section class="col-md-2 col-sm-2 col-xs-4 margin-bottom service-nav-item">
    <a href="<?php echo get_permalink($post->ID); ?>" class=" padding-2 text-align-center display-block border-radius-1 background-navy-blue position-relative z-index-0">
        <div class="padding-2 text-align-center force-aspect-ratio-container height-100">
            <div class="force-aspect-ratio height-100">
                <div class="table-center-container">
                    <div class="table-center-cell">
                        <div class="padding-1_5 padding-top-0 padding-bottom-0 display-none-tablet-portrait">
                            <img src="<?php echo eemjii_get_acf_image_url('featured_image', false, $post->ID); ?>" width="70%" class="<?php echo $post->ID == $eemjii_the_ID ? 'display-none' : 'display-block';?> first-icon">
                            <img src="<?php echo eemjii_get_acf_image_url('featured_image_rolled_over', false, $post->ID); ?>" width="70%" class="<?php echo $post->ID == $eemjii_the_ID ? 'display-block' : 'display-none';?> second-icon">
                        </div>
                        <h4 class="text-white uppercase h7 z-index-20"><?php echo $post->post_title; ?></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-nav-gradient position-absolute top-0 left-0 width-100 height-100 border-radius-1 z-index--10"></div>
    </a>
</section>