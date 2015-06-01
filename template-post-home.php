<?php
    $eemjii_the_ID = get_the_ID();
    $thumbnail = get_the_post_thumbnail($eemjii_the_ID, 'resources', array('class'=>'width-100 height-auto'));
?>
<div class="col-sm-12 template-post-home">
    <section class="row margin-bottom">
        <div class="col-sm-4 padding-0">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="display-block">
                <?php
                if ( $thumbnail ) :
                    echo $thumbnail;
                else :
                    echo '<img src="'.get_stylesheet_directory_uri().'/images/resource-placeholder.jpg" class="width-100 height-auto">';
                endif;
                ?>
            </a>
        </div>
        <div class="col-sm-8 padding-left">
            <h3 class="text-navy-blue margin-top-0"><?php the_title(); ?></h3>
            <p class="text-navy-blue"><?php the_excerpt(); ?></p>
            <a class="btn btn-orange" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Read more</a>
        </div>
    </section>
</div>