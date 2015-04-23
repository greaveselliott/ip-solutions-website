<?php
/*
    Template Name: Contact
*/
?>
<?php get_header(); ?>
<?php
$location = get_field('google_map_location');
if( !empty($location) ):?>
    <div class="acf-map">
        <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php  echo $location['lng']; ?>"></div>
    </div>
    <div class="acf-map-push-down"></div>
<?php else: ?>
    <div class="container"><div class="row"><div class="sm-col-12">
                <pre>Why not add your offices google maps location on this page?</pre></div></div></div>
<?php endif; ?>
    </div>
    <!-- Featured Image -->
</div><!-- End .featured-image-container tag -->


<!-- END Google Maps -->
<div class="position-relative">
    <div class="container">
        <div class="row padding-bottom">
            <div class="col-sm-4 col-sm-offset-2 height-100">
                <h2 class="text-orange">Find us</h2>
                <address class="text-blue">
                    <strong>IP Solutions UK Limited</strong><br>
                    Bury House<br>
                    31 Bury Street<br>
                    London<br>
                    EC3A 5AR<br>
                </address>

            </div>
            <div class="col-sm-4">
                <div>
                    <h2 class="text-orange">Get in touch</h2>
                    <?php gravity_form( 1, $display_title = true, $display_description = true, $display_inactive = false, $field_values = null, $ajax = true); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>