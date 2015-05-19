<?php
if ( have_posts() ) {
while ( have_posts() ) {
    the_post();
?>
<section class="block-grid-item single-partner <?php echo $post->post_name; ?>">
    <h3 class="hide"><?php echo $post->post_name; ?></h3>
    <?php

            $thumbnail = get_the_post_thumbnail($post->ID,'medium', array('class'=>'width-100 height-auto'));
        if ( $thumbnail) {
            echo $thumbnail;
        } else {
            echo '<img src="http://placehold.it/300x300" class="width-100 height-auto">';
        }
    ?>
</section>

<?php
    } // end while
} // end if
?>