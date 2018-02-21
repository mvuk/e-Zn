<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>

	<link rel="stylesheet" href="https://use.typekit.net/ind6pcp.css">
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>


</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content',
		'understrap' ); ?></a>

		<div class="container header">
			<div class="row">
				<div class="col-md-3 logoCol">
					<a href="/" class="logoA">
						<img src="/wp-content/uploads/2018/02/e-zn-logo-f3f3f3.png" alt="">
						<span class="logoText">Metalizing electricity for storage</span>
					</a>
				</div>
				<div class="col-md-9 linksCol">
					<div class="links">
						<!-- <a href="/benefits-of-zinc/">Benefits of Zinc</a> -->
						<a href="/">Home</a>
						<a href="/company/">Company</a>
						<a href="/technology/">Technology</a>
						<a href="/product-application/">Product/Application</a>
						<a href="/careers/">Careers</a>
						<!-- <a href="/contact/">Contact</a> -->
					</div>
				</div>
			</div>
		</div>

	</div><!-- .wrapper-navbar end -->
