<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */

	// Options Framework (https://github.com/devinsays/options-framework-plugin)
	if ( !function_exists( 'optionsframework_init' ) ) {
		define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/_/inc/' );
		require_once dirname( __FILE__ ) . '/_/inc/options-framework.php';
	}

	// Theme Setup (based on twentythirteen: http://make.wordpress.org/core/tag/twentythirteen/)
	function html5reset_setup() {
		load_theme_textdomain( 'html5reset', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'structured-post-formats', array( 'link', 'video' ) );
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'quote', 'status' ) );
		register_nav_menu( 'primary', __( 'Navigation Menu', 'html5reset' ) );
		add_theme_support( 'post-thumbnails' );
	}
	add_action( 'after_setup_theme', 'html5reset_setup' );

	// Scripts & Styles (based on twentythirteen: http://make.wordpress.org/core/tag/twentythirteen/)
	function html5reset_scripts_styles() {
		global $wp_styles;

		// Load Comments
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );

		// Load Stylesheets
//		wp_enqueue_style( 'html5reset-reset', get_template_directory_uri() . '/reset.css' );
//		wp_enqueue_style( 'html5reset-style', get_stylesheet_uri() );

		// Load IE Stylesheet.
//		wp_enqueue_style( 'html5reset-ie', get_template_directory_uri() . '/css/ie.css', array( 'html5reset-style' ), '20130213' );
//		$wp_styles->add_data( 'html5reset-ie', 'conditional', 'lt IE 9' );

		// Modernizr
		// This is an un-minified, complete version of Modernizr. Before you move to production, you should generate a custom build that only has the detects you need.
		// wp_enqueue_script( 'html5reset-modernizr', get_template_directory_uri() . '/_/js/modernizr-2.6.2.dev.js' );

	}
	add_action( 'wp_enqueue_scripts', 'html5reset_scripts_styles' );

	// WP Title (based on twentythirteen: http://make.wordpress.org/core/tag/twentythirteen/)
	function html5reset_wp_title( $title, $sep ) {
		global $paged, $page;

		if ( is_feed() )
			return $title;

//		 Add the site name.
		$title .= get_bloginfo( 'name' );

//		 Add the site description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			$title = "$title $sep $site_description";

//		 Add a page number if necessary.
		if ( $paged >= 2 || $page >= 2 )
			$title = "$title $sep " . sprintf( __( 'Page %s', 'html5reset' ), max( $paged, $page ) );

		return $title;
	}
	add_filter( 'wp_title', 'html5reset_wp_title', 10, 2 );




//OLD STUFF BELOW


	// Load jQuery
	if ( !function_exists( 'core_mods' ) ) {
		function core_mods() {
			if ( !is_admin() ) {
				wp_deregister_script( 'jquery' );
				wp_register_script( 'jquery', ( "http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ), false);
				wp_enqueue_script( 'jquery' );
			}
		}
		add_action( 'wp_enqueue_scripts', 'core_mods' );
	}

	// Clean up the <head>, if you so desire.
	//	function removeHeadLinks() {
	//    	remove_action('wp_head', 'rsd_link');
	//    	remove_action('wp_head', 'wlwmanifest_link');
	//    }
	//    add_action('init', 'removeHeadLinks');

	// Custom Menu
	register_nav_menu( 'primary', __( 'Navigation Menu', 'html5reset' ) );

	// Widgets
	if ( function_exists('register_sidebar' )) {
		function html5reset_widgets_init() {
			register_sidebar( array(
				'name'          => __( 'Sidebar Widgets', 'html5reset' ),
				'id'            => 'sidebar-primary',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			) );
		}
		add_action( 'widgets_init', 'html5reset_widgets_init' );
	}

	// Navigation - update coming from twentythirteen
	function post_navigation() {
       global $wp_query;

       $total_pages = $wp_query->max_num_pages;

       if($total_pages > 1) {
           echo "<div class='wp_pagination'>";
               $current_page = max(1, get_query_var('paged'));

               echo paginate_links(array(
                   'base' => get_pagenum_link(1) . '%_%',
                   'format' => 'page/%#%',
                   'current' => $current_page,
                   'total' => $total_pages,
                   'prev_text' => '<',
                   'next_text' => '>'
               ));
           echo "</div>";
       }
       // echo '<div class="navigation">';
       // echo '    <div class="next-posts">'.get_next_posts_link('&laquo; Older Entries').'</div>';
       // echo '    <div class="prev-posts">'.get_previous_posts_link('Newer Entries &raquo;').'</div>';
       // echo '</div>';
   }

	// Posted On
	function posted_on() {
		printf( __( '<span class="sep">Posted </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a> by <span class="byline author vcard">%5$s</span>', '' ),
			esc_url( get_permalink() ),
			esc_attr( get_the_time() ),
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_author() )
		);
	}


	function sc_dashboard_widgets() {

		wp_add_dashboard_widget(
	                 'sc_dashboard_widget',         // Widget slug.
	                 'Fauxgerty Site Management Tips',         // Title.
	                 'sc_dashboard_widget_function' // Display function.
	        );
	}
	add_action( 'wp_dashboard_setup', 'sc_dashboard_widgets' );

	/**
	 * Create the function to output the contents of our Dashboard Widget.
	 */
	function sc_dashboard_widget_function() {

		// Display whatever it is you want to show.
		?>
		<style>
		html body #dashboard-widgets h4 {
			border-bottom: 1px solid #222;
			padding-bottom: 5px;
			margin-top: 24px;
		}
		</style>
<!-- 		<h2>General Instructions</h2>
		<p>You can get anywhere you need to go in the backend by using the menu to your left. Most update to page copy will take place under the 'Pages' menu.</p>
		<h4>Collection Slides</h4>
		<p>The collection slide menu will allow you to control the vertical images displayed on the Primary Collection page (and any future collection you add). Use the 'Featured Image' on the bottom right of a slide to set the main image. Any text associated with that slide can go in the main editor towards the top. There are two input fields at the bottom to allow you to include a link in the copy. Finally, be sure to set which collection this slide is associated with in the middle right panel.</p>
 -->		<?php
	}

	function remove_menus(){
		// remove_menu_page( 'edit.php' );                   //Posts
		// remove_menu_page( 'upload.php' );                 //Media
		// remove_menu_page( 'edit-comments.php' );          //Comments
		// remove_menu_page( 'tools.php' );                  //Tools
	}
	add_action( 'admin_menu', 'remove_menus' );

	//Move yoast seo meta to bottom
	function yoasttobottom() {
		return 'low';
	}
	add_filter( 'wpseo_metabox_prio', 'yoasttobottom');

	add_action('pre_get_posts', 'exclude_featured_on_query', 10, 1);
	function exclude_featured_on_query($query) {
		if($query->is_main_query() && !is_admin() && !is_single() && !is_singular() && !is_post_type_archive() && !is_author()) {
			$meta_query = $query->get('meta_query');
			$meta_query[] = array(
		        'key'		=> "featured",
		        'value'		=> 0
		    );

			// update meta query
			$query->set('meta_query', $meta_query);
		}
		return $query;
	}

?>