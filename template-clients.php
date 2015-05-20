<?php
 $related_case_study = eemjii_reverse_post_query('eemjii_case_studies', 'related_client', $post->ID );

    $has_case_study     = !empty($related_case_study);

    $client_class       = !$has_case_study ? 'has-case-study' : 'no-case-study';
    $client_class      .= ' '; // The space between each class
    $client_class      .= get_field('toggled_testimonial', $post->ID) ? 'has-testimonial' : 'no-testimonial';
?>
<section class="block-grid-item single-client <?php echo $client_class; ?>  text-align-center">
    <h3 class="hide"><?php echo $post->post_name; ?></h3>
    <?php if ( $has_case_study && is_page_template( 'page-home.php' )) :
   ?>
    <a href="<?php echo $related_case_study[0]->guid ?>" class="width-100 height-100 display-block"  data-toggle="tooltip" data-placement="bottom" title="<?php echo 'Read the ' . $related_case_study[0] -> post_title . ' Case Study.' ?>">
    <?php endif; ?>
    <img src="<?php echo get_field('client_logo', $post->ID);?>" alt="<?php echo $post->post_name?>" class="width-100 height-auto">
    <?php if ( $has_case_study && !is_page_template( 'page-home.php' ))  : ?>
        <a href="<?php echo $related_case_study[0]->guid ?>" class="btn btn-orange display-inline-block margin-top">Read Case Study</a>
    <?php else : ?>
        </a>
    <?php endif; ?>
</section>