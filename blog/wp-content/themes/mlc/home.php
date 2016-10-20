<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>
 <div id="blog_landing" class="background-wrap">
 	<div class="container">
 	    <div class="row">
 	        <div class="col-md-8">
 	        	<?php
 	        	$featured_posts = get_posts(array("posts_per_page"=>1,"post_type"=>"post", "post_status"=>"published", "meta_key"=>"featured_field", "meta_value"=>"1"));
 	        	$featured_post = $featured_posts[0];

 	        	//For sidebar
 	        	// $featured_posts = get_posts(array("posts_per_page"=>2,"offset"=>1, "post_type"=>"post", "post_status"=>"published", "meta_key"=>"featured_field", "meta_value"=>"1"));
 	        	// foreach($featured_posts as $featured) {
 	        		
 	        	// }

 	        	?>
				<article id="post-<?php $featured_post->ID; ?>">
					<h2><a href="<?php get_the_permalink($featured_post->ID) ?>"><?=$featured_post->post_title;?></a></h2>
					<div class="entry">
						<?php wpautop($featured_post->post_content); ?>
					</div>
				</article>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
						<?php posted_on(); ?>
						<div class="entry">
							<?php the_content(); ?>
						</div>
					</article>
				<?php endwhile; ?>
				<?php post_navigation(); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>