<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'html5reset'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}
	
	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}

	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	$options = array();


// Standard Options Tab
	$options[] = array(
		'name' => __('Sharing Options', 'html5reset'),
		'type' => 'heading');

// App: Twitter
	$options[] = array(
		'name' => __('', 'html5reset'),
		'desc' => __("twitter:title (the site name)", 'html5reset'),
		'id' => 'meta_app_twt_title',
		'std' => '',
		'type' => 'text');
	$options[] = array(
		'name' => __('', 'html5reset'),
		'desc' => __("twitter:creator (the user's Twitter ID, or what comes after the @ symbol)", 'html5reset'),
		'id' => 'meta_app_twt_creator',
		'std' => '',
		'type' => 'text');
	$options[] = array(
		'name' => __('', 'html5reset'),
		'desc' => __('twitter:description (maximum 200 characters)', 'html5reset'),
		'id' => 'meta_app_twt_description',
		'std' => '',
		'type' => 'textarea');
	$options[] = array(
		'name' => __('', 'html5reset'),
		'desc' => __('twitter:image (image for sharing)', 'html5reset'),
		'id' => 'meta_app_twt_image',
		'std' => '',
		'type' => 'upload');

// App: Facebook
	$options[] = array(
		'name' => __('App: Facebook', 'html5reset'),
		'desc' => __('og:title', 'html5reset'),
		'id' => 'meta_app_fb_title',
		'std' => '',
		'type' => 'text');
	$options[] = array(
		'name' => __('', 'html5reset'),
		'desc' => __('og:description', 'html5reset'),
		'id' => 'meta_app_fb_description',
		'std' => '',
		'type' => 'textarea');
	$options[] = array(
		'name' => __('', 'html5reset'),
		'desc' => __('og:image', 'html5reset'),
		'id' => 'meta_app_fb_image',
		'std' => '',
		'type' => 'upload');


	return $options;

}