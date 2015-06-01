<?php get_header();
$eemjii_the_ID = get_the_ID();
?>
<div class="header-offset"></div>
<div class="container-fluid padding-0">
    <div class="row">
        <div class="col-sm-12">
            <iframe src="<?php echo get_field('file_attachments',$eemjii_the_ID); ?>" width="100%" height="700" frameborder="0"></iframe>
        </div>
    </div>
</div>

<?php get_footer(); ?>