<?php
$author_name        = get_field('author_name',$post->ID);
$author_job_role    = get_field('authors_job_role',$post->ID);
$post_title         = $post->post_title;

// Does this client have a toggled testimonial?
if ( get_field('toggled_testimonial', $post->ID) ) : ?>
    <div class="padding">
        <p class="h2 h4-tablet-portrait text-blue text-center margin-bottom margin-top-0">
            <span class="padding"><i class="fa fa-quote-left"></i></span><?php the_field('testimonial', $post->ID, false); ?><span class="padding"><i class="fa fa-quote-right"></i></span>
        </p>
        <h4 class="text-center text-orange padding-bottom">
            <?php echo  $author_name ? $author_name : '';?>
            <?php echo  $author_job_role ? ($author_job_role &&  $author_name ? ',&nbsp;&nbsp;'.$author_job_role :$author_job_role): '';?>
            <?php echo  $post_title ? ($author_job_role && $post_title || $author_job_role && $author_name && !$author_job_role ? ',&nbsp;&nbsp;'.$post_title :$post_title) : '';?>
        </h4>
    </div>
<?php endif; ?>