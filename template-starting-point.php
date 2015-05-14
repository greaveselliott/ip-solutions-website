
<div class="row margin-0-tablet-portrait">
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <div class="row margin-0-tablet-portrait">
            <?php while ( have_rows('starting_point') ) : the_row();?>
            <section class="col-sm-3 col-xs-6 padding-bottom">
                <a href="<?php the_sub_field('starting_point_url');?>">
                    <div class="flip-container-tablet-up">
                        <!-- Front -->
                        <div class="front border-1-orange border-radius-1-tablet-up">
                            <!--Force Square Aspect Ratio -->
                            <div class="padding-2 text-align-center force-aspect-ratio-container-tablet-up height-100-tablet-portrait">
                                <div class="force-aspect-ratio-tablet-up height-100-tablet-portrait">
                                    <!-- Center Content inside box -->
                                    <div class="table-center-container">
                                        <div class="table-center-cell">
                                            <!-- Finally.. the content -->
                                            <img src="<?php echo eemjii_get_acf_image_url('starting_point_icon', true);?>" width="70%" class="display-none-tablet-portrait">
                                            <h4 class="text-white uppercase h5 h6-tablet-portrait margin-0-tablet-portrait"><?php the_sub_field('starting_point_title'); ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Back -->
                        <div class="back background-orange padding-2-tablet-landscape-desktop text-align-center display-none-tablet-portrait border-radius-1-tablet-up">
                            <!-- Center Content inside box -->
                            <div class="table-center-container">
                                <div class="table-center-cell">
                                    <!-- The back content -->
                                    <div class="padding-1_5">
                                        <p class="text-white padding-bottom-2"><?php echo get_sub_field('starting_point_text'); ?></p>
                                        <button class="btn btn-white display-none-tablet-portrait">Read more</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </section>
            <?php endwhile; ?>
        </div>
    </div>
</div>