<?php
$description = get_field('description',$post->ID);
?>
<div class="border-3-grey padding-2 margin margin-left-0 margin-top-0 margin-right-0 single-related-content">
    <div class="display-inline-block single-related-content-featured-image">
    <?php $thumbnail = get_the_post_thumbnail($post->ID,'thumbnail', array('class'=>'width-100 height-auto','style'=>'vertical-align:bottom') );
        echo $thumbnail ? $thumbnail : '<img width="100%" height="auto" src="http://placehold.it/150x150" alt="oak furniture" style="vertical-align: bottom;">';
    ?>
    </div>
    <div class="display-inline-block single-related-content-content">
        <p><?php echo $post->post_title; ?></p>
        <?php if ($description) : ?>
            <p class="h6"><?php echo $description?></p>
        <?php endif; ?>
        <a class="btn btn-orange" href="<?php echo get_permalink($post->ID);?>" title="<?php echo $post->post_name;?>">Find out more</a>
    </div>
</div>
