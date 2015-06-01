
<div class="border-3-black padding-2 margin margin-left-0 margin-top-0 margin-right-0">
    <div class="display-inline-block" style="width:30%;">
    <?php $thumbnail = get_the_post_thumbnail($post->ID,'thumbnail', array('class'=>'width-100 height-auto','style'=>'vertical-align:bottom') );
        echo $thumbnail ? $thumbnail : '<img width="100%" height="auto" src="http://placehold.it/150x150" alt="oak furniture" style="vertical-align: bottom;">';
    ?>
    </div>
    <div class="display-inline-block" style="width: 60%; vertical-align: top;">
        <p><?php echo $post->post_title; ?></p>
        <a class="btn btn-orange" href="<?php echo $post->guid;?>">Find out more</a>
    </div>
</div>
