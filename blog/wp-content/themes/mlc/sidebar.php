<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?>
<?php get_search_form(); ?>
    <div class="social-icons">
        <a href="https://www.facebook.com/MyLifeCovered/" target="_blank">
            <i class="fa fa-facebook"></i>
        </a>
        <a href="https://www.instagram.com/mylifecovered/" target="_blank">
            <i class="fa fa-instagram"></i>
        </a>
        <a href="https://feeds.feedburner.com/MyLifeCovered" target="_blank">
            <i class="fa fa-rss"></i>
        </a>
    </div>

 <aside id="sidebar">

    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
    
        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->

    	<?php get_search_form(); ?>
    
    	<h2><?php _e('Archives','html5reset'); ?></h2>
    	<ul>
    		<?php wp_get_archives('type=monthly'); ?>
    	</ul>
            
    	<h2><?php _e('Meta','html5reset'); ?></h2>
    	<ul>
    		<?php wp_register(); ?>
    		<li><?php wp_loginout(); ?></li>
    		<li><a href="http://wordpress.org/" title="<?php _e('Powered by WordPress, state-of-the-art semantic personal publishing platform.','html5reset'); ?>"><?php _e('WordPress','html5reset'); ?></a></li>
    		<?php wp_meta(); ?>
    	</ul>
    	
    	<h2><?php _e('Subscribe','html5reset'); ?></h2>
    	<ul>
    		<li><a href="<?php bloginfo('rss2_url'); ?>"><?php _e('Entries (RSS)','html5reset'); ?></a></li>
    		<li><a href="<?php bloginfo('comments_rss2_url'); ?>"><?php _e('Comments (RSS)','html5reset'); ?></a></li>
    	</ul>
	
	<?php endif; ?>

</aside>

    <?php
    $sidebar_posts = get_posts(array("posts_per_page"=>5,"offset"=>0, "post_type"=>"post", "post_status"=>"publish", "meta_key"=>"featured", "meta_value"=>true));
    foreach($sidebar_posts as $sidebar) {
        $featured_post_old_img = wp_get_attachment_image_src( get_post_thumbnail_id( $sidebar ), 'full' );
    ?>
        <article class="featured-post-old" id="post-<?=$sidebar->ID; ?>">
            <a href="<?=get_the_permalink($sidebar->ID) ?>">
                <h2 class="title"><?=$sidebar->post_title;?></h2>
                <img src="<?=$featured_post_old_img[0];?>">
            </a>
            <div class="entry">
                <?=wpautop(wp_trim_words($sidebar->post_content, 35, ' ... <a href="'. get_the_permalink($sidebar->ID) .'">READ MORE</a>'));?>
            </div>
        </article>
    <?php
    }
    ?>