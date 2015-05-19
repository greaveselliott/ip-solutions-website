<?php
if ( have_posts() ) {
while ( have_posts() ) {
    the_post();
?>
    <div class="block-grid-item single-client <?php echo $client_class; ?>">
        <img src="<?php echo get_field('client_logo', $post->ID);?>" title="<?php echo $post->post_name?>" class="width-100 height-auto">
    </div>

<?php
    } // end while
} // end if
?>