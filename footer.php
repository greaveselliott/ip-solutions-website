<?php
/**
 * The template for displaying the footer
 */
$the_sidebars   = wp_get_sidebars_widgets();

?>
<footer>
    <div class="background-navy-blue padding-bottom">
			<div class="container">
				<div class="row">
                    <div class="col-lg-3 col-md-2">
                        <figure class="width-100" role="banner" aria-label="<?php echo bloginfo('name'); ?> Logo">
                            <a href="<?php echo home_url();?>" class="display-block width-100" title="Navigate to the Official <?php echo bloginfo('name'); ?> Home Page">
                                <img class="display-block width-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/ipsolutions-white.png" alt="<?php echo bloginfo('name'); ?> Logo"></a>
                        </figure>
                    </div>
                    <div class="col-lg-2 col-md-2 text-white">
                        <h4>Contact us</h4>
                        <div class="footer-company-info"><?php echo eemjii_option_address() ;?></div>
                        <div>
                            <span class="footer-company-info">Company No. </span><span class="footer-company-info"><?php eemjii_option_company_no() ?></span>
                        </div>
                        <div>
                            <span class="footer-company-info">Tel. </span><span class="footer-company-info"><?php eemjii_option_tel() ?></span>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-4">
                        <?php if( is_active_sidebar( 'footer-site-map' ) ) :
                            $side_bar_count = count( $the_sidebars['footer-site-map'] );
                            ?>
                            <nav>
                                <h1 class="hide"><?php bloginfo('name');?>&nbsp;<?php bloginfo('description');?>&#58;&nbsp;Site Map</h1>
                                <div class="block-grid-lg-<?php echo $side_bar_count; ?> block-grid-md-<?php echo $side_bar_count; ?> block-grid-sm-<?php echo $side_bar_count; ?> block-grid-xs-1">
                                    <?php dynamic_sidebar( 'footer-site-map' ); ?>
                                </div>
                            </nav>
                        <?php else: ?>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3>Hey! You haven't set a site-map widget yet. Why not set when in your WordPress Admin panel?</h3>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-2 col-md-4 padding-top">
                        <nav class="display-inline-block social-sidebar-horizontal margin-bottom">
                            <ul>
                                <li class="twitter"><a href="https://twitter.com/IPSolutionsUK" target="_blank" title="Follow IP Solutions on twitter" class="text-white"><i class="fa fa-twitter"></i></a></li>
                                <li class="linkedin"><a href="https://www.linkedin.com/company/ip-solutions-uk-ltd" target="_blank" title="Connect with IP Solutions on Linked-in" class="text-white"><i class="fa fa-linkedin"></i></a></li>
                                <li class="facebook"><a href="https://www.facebook.com/ipsolutionsuk" target="_blank" title="Friend us on Facebook!" class="text-white"><i class="fa fa-facebook"></i></a></li>
                                <li class="email"><a href="mailto:info@ipsolutions.co.uk" class="text-white"><i class="fa fa-envelope"></i></a></li>
                            </ul>
                        </nav>
                        <a href="http://www.ipsolutions.co.uk/customer-login/" title="IP Solutions Customer login" class="text-align-right text-white">Customer Login</a>
                    </div>
				</div>
			</div>
        </div>
    </footer>
<?php
	/*
	* Always have wp_footer() just before the closing </body>
	* tag of your theme, or you will break many plugins, which
	* generally use this hook to reference JavaScript files.
	 * Reference: https://codex.wordpress.org/Function_Reference/wp_footer
	*/
	wp_footer();
?>
</body>
</html>
