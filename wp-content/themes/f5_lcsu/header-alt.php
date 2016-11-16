<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Local Network. National Impact.</title>
		<meta name="description" content="LSCU & CUNA provide member credit unions visible action on the local, state & national stages./>

		<!-- Twitter Card data -->
		<meta name="twitter:title" content=" Get Action in Advocacy with LSCU and CUNA ">
		<meta name="twitter:description" content=" LSCU & CUNA provide member credit unions visible action on the local, state & national stages.">
		<meta name="twitter:image" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lscu-twitter.png">

		<!-- Open Graph data -->
		<meta property="og:title" content="Get Action in Advocacy with LSCU and CUNA" />
		<meta property="og:type" content="article" />
		<meta property="og:url" content="http://custrong.com/">
		<meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lscu-fb.png" />
		<meta property="og:description" content="LSCU & CUNA provide member credit unions visible action on the local, state & national stages." /> 
		<meta property="og:site_name" content="LSCU & CUNA" />
		<meta property="fb:admins" content="Facebook numeric ID" />


		<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-144x144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-precomposed.png">

		<?php wp_head(); ?>
		<script src="//load.sumome.com/" data-sumo-site-id="e7d6ed8255624e03d6572d01a41ccd50b48e17676de558f678824e34605ea168" async="async"></script>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>

	<div class="off-canvas-wrap" data-offcanvas>
	<div class="inner-wrap">
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<?php

		if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) :
		get_template_part( 'parts/off-canvas-menu' );
		endif;
	?>

	<?php get_template_part( 'parts/top-bar' ); ?>

<section class="container" role="document">
	<?php do_action( 'foundationpress_after_header' ); ?>
