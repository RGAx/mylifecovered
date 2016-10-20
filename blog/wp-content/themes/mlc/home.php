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
 	        	<h1>Fitness For Life</h1>
 	        	<?php
 	        	$featured_posts = get_posts(array("posts_per_page"=>1,"post_type"=>"post", "post_status"=>"published", "meta_key"=>"featured", "meta_value"=>true));
 	        	$featured_post = $featured_posts[0];
 	        	$image_array = wp_get_attachment_image_src( get_post_thumbnail_id( $featured_post ), 'full' );
 	        	?>
				<article class="featured-post" id="post-<?=$featured_post->ID; ?>">
					<img src="<?=$image_array[0];?>">
					<div class="content-wrapper">
						<h2><a href="<?=get_the_permalink($featured_post->ID) ?>"><?=$featured_post->post_title;?></a></h2>
						<div class="entry">
							<?=the_excerpt(); ?>
						</div>
						<a class="btn btn-primary" href="<?=get_the_permalink($featured_post->ID) ?>">Read More</a>
					</div>
				</article>
				<div class="other-articles">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article class="standard-post" id="post-<?php the_ID(); ?>">
						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
						<p class='publish-details'><?php echo get_the_date(); ?> Author: <a class="" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></p>
						<div class="entry">
							<?=the_excerpt(); ?>
						</div>
					</article>
				<?php endwhile; ?>
				<?php endif; ?>
				</div>
			</div>
			<div class="col-md-4">
				<?php
				$sidebar_posts = get_posts(array("posts_per_page"=>2,"offset"=>1, "post_type"=>"post", "post_status"=>"published", "meta_key"=>"featured", "meta_value"=>true));
				foreach($sidebar_posts as $sidebar) {
				?>
					<article class="featured-post" id="post-<?=$sidebar->ID; ?>">
						<h2><a href="<?=get_the_permalink($sidebar->ID) ?>"><?=$sidebar->post_title;?></a></h2>
						<div class="entry">
							<?=the_excerpt(); ?>
						</div>
					</article>
				<?php
				}
				?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>