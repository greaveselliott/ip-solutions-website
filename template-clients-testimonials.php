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
                <section class="slick-testimonial-home">
                    <?php
                    $related_testimonials = eemjii_simple_post_query('eemjii_clients');
                    eemjii_post_command($related_testimonials,'template-testimonials-related.php');
                    ?>
                </section>
            </div>
        </div>
    </article>
</div>