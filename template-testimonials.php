<div class="padding">
    <h2 class="text-blue text-center margin-bottom margin-top-0">
        <span class="padding"><i class="fa fa-quote-left"></i></span><?php the_field('testimonial', false, false); ?><span class="padding"><i class="fa fa-quote-right"></i></span>
    </h2>
    <h4 class="text-center text-green padding-bottom"><?php echo get_field('author_name') . ', '
    . get_field('authors_job_role').', '.get_field('authors_company');?></h4>
    <span class="text-center display-block"><a class="btn btn-default btn-green text-green h4" href="#">Read Case Study</a></span>
    <!-- Image is used for the bullet thumbnail, using jQuery and the slickJS API, this image is inserted into the carousel -->
        <img width="100px" height="100px" class="display-none-important" src="<?php echo eemjii_get_acf_image_url('company_logo');?>" />

</div>