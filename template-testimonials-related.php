<div class="padding">
    <p class="h2 text-blue text-center margin-bottom margin-top-0">
        <span class="padding"><i class="fa fa-quote-left"></i></span><?php the_field('testimonial', $post->ID, false); ?><span class="padding"><i class="fa fa-quote-right"></i></span>
    </p>
    <h4 class="text-center text-green padding-bottom">
        <?php echo get_field('author_name',$post->ID) .
                    ',&nbsp;&nbsp;' .
                    get_field('authors_job_role',$post->ID) .
                    ',&nbsp;&nbsp;' .
                    $post->post_title;?>
    </h4>
    <span class="text-center display-block"><a class="btn btn-default btn-green text-green h4" href="#">Read Case Study</a></span>
</div>