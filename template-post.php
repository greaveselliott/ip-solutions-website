<div class="col-sm-6">
    <section class="row margin-bottom">
        <div class="col-sm-4 padding-0">
            <div class="force-aspect-ratio-container-tablet-up">
                <div class="force-aspect-ratio-tablet-up">
                    <?php echo eemjii_get_featured_image_url( get_the_ID(), 'thumbnail', array('class'=>'width-100-tablet-up') ); ?>
                </div>
            </div>
        </div>
        <div class="col-sm-8 padding-left">
            <h3 class="text-green margin-top-0"><?php the_title(); ?></h3>
            <p class="text-blue"><?php the_excerpt(); ?></p>
            <a class="btn btn-orange" href="<?php the_permalink(); ?>">Read more</a>
        </div>
    </section>
</div>