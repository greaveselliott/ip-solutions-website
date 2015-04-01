<?php
// Template Post
?>
<div class="row">
    <div class="col-sm-6">
            <?php
            if ( has_post_thumbnail() ) : // check if the post has a Post Thumbnail assigned to it.
                the_post_thumbnail( 'full', array( 'class' => 'width-100' ) );
            endif ?>
    </div>
    <div class="col-sm-6">
        <h4 class="text-white"><?php the_title(); ?></h4>
    </div>
</div>

