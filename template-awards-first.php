<?php
// Template Post
?>
<div class="row">
    <div class="col-sm-12">
            <?php
                if ( has_post_thumbnail() ) :
                    the_post_thumbnail( 'full');
                    $award_post_has_thumbnail = true;
                endif;
            ?>
        <h4 class="text-white"><?php the_title(); ?></h4>
        <hr>
    </div>
</div>

