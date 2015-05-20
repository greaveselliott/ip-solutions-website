<?php
/*
    Template Name: Home
*/
?>

    <?php get_header(); ?>
        <div class="height-auto-important-tablet-portrait position-relative-tablet-portrait">
            <?php get_template_part('template','carousel'); ?>
        </div>
        <!-- Choose your starting point -->
        <article class="starting-point background-navy-blue opacity-90 width-100">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text-white text-align-center">
                        <p class="h4 margin-top">We’re comms technology experts - and deliver a range of flexible and intuitive solutions.</p><p class="text-white h4"> From virtual contact centres, desktops and servers, to cloud-based solutions that unify telephony, video, data, email and more – bringing real results to your business and your bottom line.</p>
                        <h3><a data-toggle="lightbox" class="h3" title="Watch the IP Solutions promotional video" data-remote="https://player.vimeo.com/video/127074788">Discover how the cloud can transform your business
                           <span class="h1"><i class="fa fa-youtube-play" style="vertical-align: bottom;"></i></span></a></h3>
                        <hr class="border-bottom-white-1 margin-bottom-0">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="text-align-center text-white margin-top margin-bottom">Choose your starting point</h2>
                    </div>
                    <?php get_template_part('template', 'starting-point'); ?>
                </div>
            </div>
        </article>
<!-- Featured Image -->
</div><!-- End .featured-image-container tag -->
<!-- Transform your business with IP Solutions -->
<div class="padding-top padding-bottom position-relative background-light-grey">
    <div class="container">
        <div class="row">
            <article class="col-sm-12">
                <div class="row padding-top padding-bottom">
                    <div class="col-sm-6">
                        <div class="background-white opacity-50 padding margin-bottom-tablet-portrait">
                            <?php $heading_link = get_field('clients_heading_link'); ?>
                            <h4 class="text-align-center h3 text-navy-blue"><?php echo $heading_link ? '<a href="'.$heading_link.'" title="View IP Solutions clients" class="text-navy-blue h3">Clients</a>': 'Clients';?></h4>
                            <div class="block-grid-lg-2 block-grid-md-2 block-grid-sm-2 block-grid-xs-2">
                                <?php
                                // get: query SOLUTIONS related to this post
                                $clients = eemjii_simple_post_query('eemjii_clients', 4);
                                eemjii_post_command($clients,'template-clients.php');
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 margin-top-tablet-portrait">
                        <div class="background-white opacity-50 padding">
                            <?php $heading_link = get_field('partners_heading_link'); ?>
                            <h4 class="text-align-center h3 text-navy-blue"><?php echo $heading_link ? '<a href="'.$heading_link.'" title="View IP Solutions partners" class="text-navy-blue h3">Partners</a>': 'Partners';?></h4>
                            <div class="block-grid-lg-2 block-grid-md-2 block-grid-sm-2 block-grid-xs-2">
                                <?php
                                // get: query SOLUTIONS related to this post
                                $partners = eemjii_simple_post_query('eemjii_partners', 4);
                                eemjii_post_command($partners,'template-partners.php');
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>
<!-- recent blog posts -->
<div class="background-white padding-top padding-bottom">
    <article class="container">
        <div class="row">
            <div class="col-sm-6">
                <?php $heading_link = get_field('insights_heading_link'); ?>
                <h2 class="text-blue text-center margin-top-0 margin-bottom"><?php echo $heading_link ? '<a href="'.$heading_link.'" title="View IP Solutions latest news articles" class="text-navy-blue h3">Insights</a>': 'Insights';?></h2>

                    <?php
                    $post_query = new Eemjii_WP_Query(array(
                        '_post_type'             => 'post',
                        '_post_template_prefix'  => 'template',
                        '_post_template_part'    => 'post-home',
                        '_posts_per_page'        => 2,
                        '_posts_per_row'         => 1,
                        '_loop_wrapper'          => false,
                        '_row_wrapper'           => false
                    ));
                    ?>
            </div>
            <div class="col-sm-6">
                <h2 class="text-navy-blue text-center margin-top-0 margin-bottom h3">Social Media</h2>
                <?php if( is_active_sidebar( 'twitter-feed' ) ) :?>
                    <?php dynamic_sidebar( 'twitter-feed' ); ?>
                <?php else: ?>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>Hey! You haven't set a Twitter Feed widget yet. Why not set when in your WordPress Admin panel?</h3>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </article>
</div>
<?php get_footer(); ?>