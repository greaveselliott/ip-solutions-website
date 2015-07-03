<?php
if ( have_posts() ) {
while ( have_posts() ) {
    the_post();
?>
<section class="block-grid-item single-partner <?php echo $post->post_name; ?>">
    <h3 class="hide"><?php echo $post->post_name; ?></h3>
        <div class="padding-left-tablet-up padding-right-tablet-up">
            <a href="<?php echo get_permalink($post->ID); ?>" class="width-100 height-100 display-block"  data-toggle="tooltip" data-placement="bottom" title="<?php echo 'View all ' . $post->post_title . ' resources.' ?>">
    <?php

        $thumbnail = get_the_post_thumbnail($post->ID,'medium', array('class'=>'width-100 height-auto'));
        if ( $thumbnail) {
            echo $thumbnail;
        } else {
            echo '<img src="http://placehold.it/300x300" class="width-100 height-auto">';
        }
    ?>
                </a>
       </div>

</section>

<?php
    } // end while
} // end if
?>