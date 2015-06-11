<?php
$eemjii_the_ID = get_the_ID();
$related_resources = eemjii_get_related_posts('eemjii_resources', 'related_resources', false, 2, 'rand');
$related_case_studies = eemjii_get_related_posts('eemjii_case_studies', 'related_case_studies', false, 2, 'rand');
$recent_blog_posts = eemjii_simple_post_query('post',2);
?>

<div class="background-navy-blue opacity-90 position-relative padding-bottom">
    <div class="position-absolute z-index--10 width-100 height-100 top-0 left-0" style="background: url('<?php echo get_field('background_image')['url']; ?>') center no-repeat; background-size: cover;"></div>
    <div class="container">
        <div class="row padding-top">
                    <section class="col-sm-4">
                <div class="background-light-grey opacity-80 padding-1_5 border-radius-2 margin-bottom-tablet-portrait">
                    <h3 class="margin-top-0">Resources</h3>
                    <?php eemjii_post_command($related_resources,'template-related-content-post.php');?>
                </div>
            </section>
            <section class="col-sm-4">
                <div class="background-light-grey opacity-80 padding-1_5 border-radius-2 margin-bottom-tablet-portrait">
                    <h3 class="margin-top-0">Case Studies</h3>
                    <?php eemjii_post_command($related_case_studies,'template-related-content-post.php');?>
                </div>
            </section>
            <section class="col-sm-4">
                <div class="background-light-grey opacity-80 padding-1_5 border-radius-2">
                    <h3 class="margin-top-0">Insights</h3>
                    <?php eemjii_post_command($recent_blog_posts,'template-related-content-post.php');?>
                </div>
            </section>
        </div>
    </div>
</div>