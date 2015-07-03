<?php

$eemjii_the_ID = get_the_ID();

?>
<section class="col-sm-3 col-xs-6 padding-bottom">
             <?php echo $post->ID == $eemjii_the_ID ? '':'<a href="'. get_permalink($post->ID) . '">'; ?>

                    <div class="flip-container-tablet-up">
                        <!-- Front -->
                        <div class="front <?php echo $post->ID == $eemjii_the_ID ? 'border-1-blue' : 'border-1-orange' ?> border-radius-1">
                            <!--Force Square Aspect Ratio -->
                            <div class="padding-2 text-align-center force-aspect-ratio-container-tablet-up height-100-tablet-portrait">
                                <div class="force-aspect-ratio-tablet-up height-100-tablet-portrait">
                                    <!-- Center Content inside box -->
                                    <div class="table-center-container">
                                        <div class="table-center-cell">
                                            <!-- Finally.. the content -->
                                            <img src="<?php echo eemjii_get_acf_image_url('featured_image', false, $post->ID); ?>" width="70%" class="<?php echo $post->ID == $eemjii_the_ID ? 'display-none' : '';?> first-icon display-none-tablet-portrait">
                                            <img src="<?php echo eemjii_get_acf_image_url('featured_image_rolled_over', false, $post->ID); ?>" width="70%" class="<?php echo $post->ID == $eemjii_the_ID ? '' : 'display-none';?> display-none-tablet-portrait">
                                            <h4 class="text-white uppercase h5 h6-tablet-portrait margin-0-tablet-portrait"><?php echo get_field('rotating_menu_text_front', $post->ID); ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Back -->
                        <div class="back background-orange padding-2-tablet-landscape-desktop text-align-center display-none-tablet-portrait border-radius-1">
                            <!-- Center Content inside box -->
                            <div class="table-center-container">
                                <div class="table-center-cell">
                                    <!-- The back content -->
                                    <div class="padding-1_5">
                                        <p class="text-white padding-bottom-2"><?php echo get_field('rotating_menu_text_back', $post->ID); ?></p>
                                        <?php echo $post->ID == $eemjii_the_ID ? '':'<button class="btn btn-white display-none-tablet-portrait outline-none">Read more</button>'; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php echo $post->ID == $eemjii_the_ID ? '':'</a>'; ?>
            </section>

