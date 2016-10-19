<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?><!doctype html>

<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head id="<?php echo of_get_option('meta_headid'); ?>" data-template-set="html5-reset-wordpress-theme">

	<meta charset="<?php bloginfo('charset'); ?>">

	<!-- Always force latest IE rendering engine (even in intranet) -->
	<!--[if IE ]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->

	<?php
		if (is_search())
			echo '<meta name="robots" content="noindex, nofollow" />';
	?>

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">

	<!--Google will often use this as its description of your page/site. Make it good.-->
	<meta name="description" content="<?php bloginfo('description'); ?>" />

	<!-- Behavioral Meta Data -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- Core Meta Data -->
	<meta name="author" content="Switzer Creative">
	<meta name="keywords" content="henderson, trucking, earl henderson, freight, truck driver, drivers, driving">

	<!-- Open Graph Meta Data -->
	<meta property="og:description" content="<?=of_get_option('meta_app_fb_description');?>">
	<meta property="og:image" content="<?=of_get_option('meta_app_fb_image');?>">
	<meta property="og:site_name" content="<?php wp_title( '|', true, 'right' ); ?>">
	<meta property="og:title" content="<?=of_get_option('meta_app_fb_title');?>">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?=site_url();?>">

	<!-- Twitter Card Meta Data -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="<?=of_get_option('meta_app_twt_site');?>">
	<meta name="twitter:creator" content="@ryan_haider">
	<meta name="twitter:title" content="<?=of_get_option('meta_app_twt_title');?>">
	<meta name="twitter:description" content="<?=of_get_option('meta_app_twt_description');?>">
	<meta name="twitter:image" content="<?=of_get_option('meta_app_twt_image');?>">

	<!-- Favicon -->


	<?php
		if (true == of_get_option('meta_author'))
			echo '<meta name="author" content="' . of_get_option("meta_author") . '" />';

		if (true == of_get_option('meta_google'))
			echo '<meta name="google-site-verification" content="' . of_get_option("meta_google") . '" />';
	?>

	<meta name="Copyright" content="Copyright &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. All Rights Reserved.">

	<!-- concatenate and minify for production -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
	<link rel="stylesheet" href="<?=get_template_directory_uri(); ?>/_/css/styles.css" />

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- not needed? up to you: http://camendesign.com/code/developpeurs_sans_frontieres -->
	<div id="wrapper">

		<header id="header" role="banner">
			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<div class="description"><?php bloginfo( 'description' ); ?></div>
		</header>

		<nav id="nav" role="navigation">
			<?php wp_nav_menu( array('menu' => 'primary') ); ?>
		</nav>

