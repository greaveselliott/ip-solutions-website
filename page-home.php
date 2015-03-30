<?php
/*
    Template Name: Home
*/
?>

<?php get_header(); ?>
<div class="full-screen background-blue opacity-30">
    <div class="position-relative width-100 height-100">
        <!-- Choose your starting point -->
        <article class="starting-point background-blue position-absolute bottom-0 width-100 padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="text-align-center text-white">Choose your starting point</h2>
                    </div>
                </div>
                <div class="row">
                    <section class="col-sm-3">
                        <div class="flip-container">
                            <div class="front border-1-orange">

                            </div>
                            <div class="back background-orange"></div>
                        </div>
                    </section>
                    <section class="col-sm-3">
                        <div class="flip-container">
                            <div class="front border-1-orange"></div>
                            <div class="back background-orange"></div>
                        </div>
                    </section>
                    <section class="col-sm-3">
                        <div class="flip-container">
                            <div class="front border-1-orange"></div>
                            <div class="back background-orange"></div>
                        </div>
                    </section>
                    <section class="col-sm-3">
                        <div class="flip-container">
                            <div class="front border-1-orange"></div>
                            <div class="back background-orange"></div>
                        </div>
                    </section>
                </div>
            </div>
        </article>
    </div>
</div>
<!-- End Fullscreen -->
<!-- Transform your business with IP Solutions -->
<div class="background-grey opacity-10">
    <article class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>Transform your business with IP Solutions</h2>
                <p>We're not just experts in comms technology, we're experts in applying it too. Find out more about how we deliver agile, flexible and intuitive solutions - delivering real results to hte button line.</p>
            </div>
            <div class="col-sm-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/92117864" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="https://vimeo.com/92117864">IP Solutions: Communications, Sorted</a> from <a href="https://vimeo.com/user26771751">IP Solutions</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
                </div>
            </div>
        </div>
    </article>
</div>
<!-- Award winning experts -->
<div class="background-orange">
    <article class="container">
        <div class="row">
            <div class="col-sm-12"><h2 class="text-align-center text-white">Awards winning experts</h2></div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="force-aspect-ratio-container">
                            <img src="http://placehold.it/250x250" class="force-aspect-ratio">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?php
                        $awards_query = new Eemjii_WP_Query(array(
                            '_post_type'             => 'post',
                            '_post_template_prefix'  => 'template',
                            '_post_template_part'    => 'post',
                            '_posts_per_page'        => 3,
                            '_loop_wrapper'          => false,
                            '_row_wrapper'          => false
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </article>
</div>
<!-- Testimonials / Clients -->
<div class="background-grey opacity-10">
    <article class="container">
        <div class="row display-none">
            <div class="col-12-sm">
                <h2>IP Solutions Testimonials</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12-sm">
                <div class="slick-testimonial-home">
                    <?php
                        $services_query = new Eemjii_WP_Query(array(
                            '_post_type'             => 'eemjii_testimonials',
                            '_post_template_prefix'  => 'template',
                            '_post_template_part'    => 'testimonials',
                            '_loop_wrapper'          => false,
                            '_row_wrapper'          => false
                        ));
                    ?>
                </div>
            </div>
        </div>

    </article>
</div>
<?php get_footer(); ?>