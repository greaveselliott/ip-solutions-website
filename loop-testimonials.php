<!-- Testimonials / Clients -->
<div class="background-white padding-top padding-bottom">
    <article class="container">
        <div class="row display-none">
            <div class="col-12-sm">
                <h2 class="h1 margin-top-0 margin-bottom">IP Solutions Testimonials</h2>
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