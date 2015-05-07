<?php
?>
<pre>
    <?php print_r($post); ?>
</pre
    >
<?php
$case_study_related_client = eemjii_get_related_posts('eemjii_case_studies', 'related_client', $post->ID );

?>
<pre>
<?php print_r($case_study_related_client); ?>
</pre>
<?php
?>
<a href="<?php echo $post->guid; ?>" title="Read <?php echo $post->post_title ?>'s case study">
<img src="<?php echo get_field('client_logo', $case_study_related_client[0]->ID); ?>" alt="<?php echo $case_study_related_client[0]->post_name ?>"/>
</a>