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
<h1 class="display-none"><?php the_title(); ?></h1>
<!-- END Google Maps -->
<div class="position-relative">
    <div class="container">
        <div class="row padding-bottom">
            <div class="col-sm-6 col-sm-offset-3 height-100">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="text-black text-align-center">
                            <span class="padding-right-2">
                                <i class="fa fa-map-marker"></i>
                            </span>Find us</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 text-align-right text-align-center-tablet-portrait">
                        <!-- Telephone Number -->
                        <div class="padding-bottom-2">
                            <span class="margin-0"><i class="fa fa-phone text-orange"></i></span>
                            <h5 class="display-inline text-orange">Tel.</h5>
                            <span class="text-blue font-family-default display-inline-block margin-0"><?php eemjii_option_tel('blue') ?></span>
                        </div>
                        <!-- Fax Number -->
                        <div class="padding-bottom-2">
                            <span class="margin-0"><i class="fa fa-fax text-orange"></i></span>
                            <h5 class="display-inline text-orange">Fax.</h5>
                            <span class="text-blue font-family-default display-inline-block margin-0"><?php eemjii_option_fax() ?></span>
                        </div>
                        <!-- VAT No. -->
                    </div>
                    <div class="col-sm-6 text-align-center-tablet-portrait">
                        <address class="text-blue">
                                <?php echo eemjii_option_address(array(
                                    'return_rows' => true,
                                    'explode_on' => ',',
                                    'before_row' => '',
                                    'after_row' => '<br>'
                                )); ?>
                        </address>
                    </div>
                </div>
                <div class="row">
                    <!-- Registered No. -->
                    <div class="col-sm-6 text-align-right text-align-center-tablet-portrait">
                        <span class="margin-0"><i class="fa fa-building-o text-grey"></i></span>
                        <h5 class="display-inline text-grey">Registered No.</h5>
                        <span class="text-grey font-family-default display-inline-block margin-0"><?php eemjii_option_company_no() ?></span>
                    </div>
                    <!-- VAT No. -->
                    <div class="col-sm-6 tex-align-left text-align-center-tablet-portrait">
                        <span class="margin-0"><i class="fa fa-building text-grey"></i></span>
                        <h5 class="display-inline text-grey">VAT No.</h5>
                        <span class="text-grey font-family-default display-inline-block margin-0"><?php eemjii_option_vat_no() ?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div>
                    <h2 class="text-black text-align-center"><span class="padding-right-2"><i class="fa fa-envelope"></i></span>Get in touch</h2>
                    <?php gravity_form( 1, $display_title = false, $display_description = true, $display_inactive = false, $field_values = null, $ajax = true); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>