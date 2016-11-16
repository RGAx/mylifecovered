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
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Core Meta Data -->
	<meta name="author" content="My Life Covered">

	<!-- Open Graph Meta Data -->
	<meta property="og:title" content="<?php wp_title( '|', true, 'right' ); ?>">
	<?php
	if(is_single()) {
		$image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full' );
		if($image[0] != '') $image = $image[0];
		else $image = of_get_option('meta_app_fb_image');
		if ( have_posts() ) : while ( have_posts() ) : the_post();
		$excerpt = get_the_excerpt();
		endwhile; endif;
	} else {
		$image = of_get_option('meta_app_fb_image');
		$excerpt = of_get_option('meta_app_fb_description');
	}
	?>
	<meta property="og:description" content="<?=$excerpt;?>">
	<meta property="og:image" content="<?=$image;?>">
	<meta property="og:url" content="<?=the_permalink();?>">
	<meta property="og:site_name" content="Ultra Modern Pool & Patio">
	<meta property="og:type" content="website">

	<!-- Twitter Card Meta Data -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="<?php wp_title( '|', true, 'right' ); ?>">
	<?php
	if(is_single()) {
		$image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full' );
		if($image[0] != '') $image = $image[0];
		else $image = of_get_option('meta_app_twt_image');
		if ( have_posts() ) : while ( have_posts() ) : the_post();
		$excerpt = get_the_excerpt();
		endwhile; endif;
	} else {
		$image = of_get_option('meta_app_twt_image');
		$excerpt = of_get_option('meta_app_twt_description');
	}
	?>
	<meta name="twitter:description" content="<?=$excerpt;?>">
	<meta name="twitter:image" content="<?=$image;?>">
	<meta name="twitter:image:alt" content="<?php wp_title( '|', true, 'right' ); ?>">
	<meta name="twitter:site" content="<?=site_url();?>">
	<meta name="twitter:creator" content="@<?=of_get_option('meta_app_twt_creator');?>">

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
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/_/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/_/css/myLifeCoveredRGility.css">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/_/css/mylifecovered-metcon.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/_/css/xperience.css?v=2.2.2">
    <!--[if IE 9]>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/_/css/ie9.css">
        <![endif]-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <!-- <script src="https://use.typekit.net/qns3hng.js"></script> -->
    <script src="https://use.typekit.net/cws2ybo.js"></script>
    <script>
    try {
        Typekit.load({
            async: false
        });
    } catch (e) {}
    </script>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div id="body_wrapper">
        <div id="wOverlayId" class="whiteOverlay"></div>
        <div id="loading" class="loading"><img src="<?php echo get_template_directory_uri(); ?>/_/images/loading_spinner.svg" width="70" height="70" alt="Loading"></div>
        <section id="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <a id="#myLifeCoveredHeader" href="https://www.mylifecovered.net/" class="open-home-page-copy">
    						<img class="logo" src="<?php echo get_template_directory_uri(); ?>/_/images/logo.svg" alt="">
    						<span class="logo-phno">866-248-6037</span>
    					</a>
                        <ul id="top_nav_menu">
                            <li>
                                <a href="https://www.mylifecovered.net/myLifeCovered/basics.do">Insurance Basics</a>
                            </li>
                            <li>
                                <a href="https://www.mylifecovered.net/myLifeCovered/misconceptions.do">12 Common Misconceptions</a>
                            </li>
                            <li>
                                <a href="/category/fitness-for-life">Fitness for Life</a>
                            </li>
                            <li>
                                <a href="/category/life-prepared">Life Prepared</a>
                            </li>
                        </ul>
                        <a href="#" id="open_menu">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </a>
                        <a href="#" id="close_menu">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>