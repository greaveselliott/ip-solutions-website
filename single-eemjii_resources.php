<?php get_header();

$eemjii_the_ID = get_the_ID();

function set_resource ($ID) {
    echo '<div class="container"><div class="row"><div class="col-sm-12"><iframe src="' . get_field('file_attachments',$ID) . '" width="100%" height="700" frameborder="0"></iframe></div></div></div>';
}
if ( is_active_sidebar('resource-email-collection-form') && get_field('require_users_email',$eemjii_the_ID) == true ) :
?>

<article style="background-image: url(<?php echo get_stylesheet_directory_uri() .'/images/skydivers.jpg'?>); background-size: cover; background-position: center; min-height: 600px;">
    <?php
    else: ?>
<article style="min-height: 600px;">
    <?php endif;
    ?>
    <div class="header-offset"></div>
    <h1 class="display-none"><?php the_title(); ?></h1>
    <?php
    if ( is_active_sidebar('resource-email-collection-form') && get_field('require_users_email',$eemjii_the_ID) == true ) :
        if ( !cookie_exists('IPSolutions_clientEmailProvided') ) : ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="padding padding-bottom-2 margin background-white opacity-75">
                        <h2 class="margin-top-0 text-navy-blue">One Last Step</h2>
                        <h3 class="text-navy-blue">Your Resource is on its way...</h3>
                    <?php dynamic_sidebar('resource-email-collection-form');?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        else:
            set_resource($eemjii_the_ID);
        endif;
    else :
        set_resource($eemjii_the_ID);
    endif;
    ?>
</article>
<?php get_footer(); ?>