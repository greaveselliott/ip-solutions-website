<?php
/**
 * The template for displaying the footer
 */
$the_sidebars   = wp_get_sidebars_widgets();

?>
<footer>
    <div class="background-grey padding-top padding-bottom">
			<div class="container">
				<div class="row">
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
			</div>
        </div>
    <div class="padding-top padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <span class="footer-company-info"><?php eemjii_option_address() ;?></span>
                    </div>
                    <div class="col-sm-3">
                        <span class="footer-company-info">Company No. </span><span class="footer-company-info"><?php eemjii_option_company_no() ?></span>
                    </div>
                    <div class="col-sm-3">
                        <span class="footer-company-info">Tel. </span><span class="footer-company-info"><?php eemjii_option_tel() ?></span>
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
