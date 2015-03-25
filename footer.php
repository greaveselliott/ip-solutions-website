<?php
/**
 * The template for displaying the footer
 */
$the_sidebars = wp_get_sidebars_widgets();
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
					<?php if( is_active_sidebar( 'footer-site-map' ) ) : ?>
						<nav>
							<h1 class="hide"><?php bloginfo('name');?>&nbsp;<?php bloginfo('description');?>&#58;&nbsp;Site Map</h1>
							<ul class="block-grid-<?php echo count( $the_sidebars['footer-site-map'] ); ?>-md">
								<?php dynamic_sidebar( 'footer-site-map' ); ?>
							</ul>
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
		</div>
	</div>
</div>
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
