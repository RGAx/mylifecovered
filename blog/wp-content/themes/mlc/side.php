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
	<?php get_sidebar(); ?>
	<?php
	$sidebar_posts = get_posts(array("posts_per_page"=>3,"offset"=>0, "post_type"=>"post", "post_status"=>"publish", "meta_key"=>"featured", "meta_value"=>true));
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