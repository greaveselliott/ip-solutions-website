<?php
 $related_case_study = eemjii_reverse_post_query('eemjii_case_studies', 'related_client', $post->ID );

    $has_case_study     = !empty($related_case_study);

    $client_class       = !$has_case_study ? 'has-case-study' : 'no-case-study';
    $client_class      .= ' '; // The space between each class
    $client_class      .= get_field('toggled_testimonial', $post->ID) ? 'has-testimonial' : 'no-testimonial';
?>
<div class="block-grid-item single-client <?php echo $client_class; ?>">
    <img src="<?php echo get_field('client_logo', $post->ID);?>" title="<?php echo $post->post_name?>">
    <?php if ($has_case_study) : ?>
        <a href="<?php echo $related_case_study[0]->guid ?>" class="btn btn-orange">Read Case Study</a>
    <?php endif; ?>
</div>