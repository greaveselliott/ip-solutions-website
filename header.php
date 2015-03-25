<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="container">
				<div class="row">
					<!-- Logo & Slogan -->
					<div class="col-sm-6">
						<h1 class="hidden"><?php echo bloginfo('name'); ?> | <?php echo bloginfo('description');?></h1>
						<figure class="eemjii-logo" role="banner" aria-label="<?php echo bloginfo('name'); ?> Logo">
								<img class="display-inline-block" src="http://placehold.it/240x100" alt="<?php echo bloginfo('name'); ?> Logo">
							<figcaption class="display-inline-block eemjii-slogan"><?php echo bloginfo('description'); ?></figcaption>
						</figure>
					</div>
					<!-- Social Icons & Links -->
					<div class="col-sm-6">
						<div class="pull-right">
							<div class="icon-links display-inline-block">
								<a aria-label="Left Align"><i class="fa fa-phone"></i></a>
								<a aria-label="Left Align"><i class="fa fa-envelope"></i></a>
							</div>
							<a href="#" title="Customer Login Section">Customer Login</a>
							<div class="icon-links social-links display-inline-block">
								<a aria-label="Left Align"><i class="fa fa-facebook-square"></i></a>
								<a aria-label="Left Align"><i class="fa fa-twitter-square"></i></a>
								<a aria-label="Left Align"><i class="fa fa-linkedin-square"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- Navigation -->
<navigation class="container-fluid" role="navigation" aria-label="Main Website Navigation">
	<div class="row">
		<h2 class="hidden"><?php echo bloginfo('name'); ?> | Website Navigation</h2>
	</div>
</navigation>