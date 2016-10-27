<?php
/**
* @package WordPress
* @subpackage HTML5-Reset-WordPress-Theme
* @since HTML5 Reset 2.0
*/
get_header(); ?>
<div id="blog_category" class="blog-wrap background-wrap">
 	<div class="container">
 	    <div class="row">
 	        <div class="col-md-8">
	 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
				<h1 class="category-title"><?php single_cat_title(); ?></h1>
 	        	<?php get_search_form(); ?>
 	        	<?php
				$category_id = get_query_var('cat');

 	        	$featured_posts = get_posts(array("posts_per_page"=>1,"post_type"=>"post", "post_status"=>"published", "meta_key"=>"featured", "meta_value"=>true, "category"=>$category_id));
 	        	$featured_post = $featured_posts[0];
 	        	$featured_post_img = wp_get_attachment_image_src( get_post_thumbnail_id( $featured_post ), 'full' );

		       global $wp_query;
               $current_page = max(1, get_query_var('paged'));
               if($current_page == 1) {
 	        	?>
				<article class="featured-post" id="post-<?=$featured_post->ID; ?>">
					<img src="<?=$featured_post_img[0];?>">
					<div class="content-wrapper">
						<h2 class="title"><a href="<?=get_the_permalink($featured_post->ID) ?>"><?=$featured_post->post_title;?></a></h2>
						<div class="entry">
							<?=the_excerpt(); ?>
						</div>
						<a class="btn btn-primary" href="<?=get_the_permalink($featured_post->ID) ?>">Read More</a>
					</div>
				</article>
				<?php } ?>
				<div class="other-articles">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article class="standard-post" id="post-<?php the_ID(); ?>">
						<h2 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
						<p class='publish-details'><?php echo get_the_date(); ?> Author: <a class="" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></p>
						<div class="entry">
							<?php $other_post_img = wp_get_attachment_image_src( get_post_thumbnail_id( ), 'full' ); ?>
							<?php
								if ($other_post_img) {
							?>
							<img src="<?=$other_post_img[0];?>">
							<?php } ?>
							<?=the_excerpt(); ?>
						</div>
					</article>
				<?php endwhile; ?>
				<?php endif; ?>
				</div>
			</div>
			<div class="col-md-4">
				<?php get_search_form(); ?>
				<?php
               	if($current_page == 1) $sidebar_posts = get_posts(array("posts_per_page"=>2,"offset"=>1, "post_type"=>"post", "post_status"=>"published", "meta_key"=>"featured", "meta_value"=>true, "category"=>$category_id));
               	else $sidebar_posts = get_posts(array("posts_per_page"=>2,"offset"=>0, "post_type"=>"post", "post_status"=>"published", "meta_key"=>"featured", "meta_value"=>true, "category"=>$category_id));
				foreach($sidebar_posts as $sidebar) {
					$featured_post_old_img = wp_get_attachment_image_src( get_post_thumbnail_id( $sidebar ), 'full' );
				?>
					<article class="featured-post-old" id="post-<?=$sidebar->ID; ?>">
						<a href="<?=get_the_permalink($sidebar->ID) ?>">
							<h2 class="title"><?=$sidebar->post_title;?></h2>
							<img src="<?=$featured_post_old_img[0];?>">
						</a>
						<div class="entry">
							<?=wpautop(wp_trim_words($sidebar->post_content, 35));?>
						</div>
					</article>
				<?php
				}
				?>
			</div>
			<div class="col-md-8">
				<?php post_navigation(); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>