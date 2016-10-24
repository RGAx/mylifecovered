<?php
/**
* @package WordPress
* @subpackage HTML5-Reset-WordPress-Theme
* @since HTML5 Reset 2.0
*/
get_header(); ?>
<div id="blog_archive" class="blog-wrap background-wrap">
 	<div class="container">
 	    <div class="row">
 	        <div class="col-md-8">
	 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
				<?php /* If this is a category archive */ if (is_category()) { ?>
					<h1 class="category-title">'<?php single_cat_title(); ?>'</h1>

				<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
					<h1 class="category-title">'<?php single_tag_title(); ?>'</h1>

				<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
					<h1 class="category-title">'<?php the_time('F jS, Y'); ?>'</h1>

				<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
					<h1 class="category-title">'<?php the_time('F, Y'); ?>'</h1>

				<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
					<h1 class="category-title">'<?php the_time('Y'); ?>'</h1>

				<?php /* If this is an author archive */ } elseif (is_author()) { ?>
					<h1 class="category-title">'<?php the_author(); ?>'</h1>

				<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
					<h1 class="category-title"><?php _e('Blog Archives','html5reset'); ?></h1>
				<?php } ?>
 	        	<?php get_search_form(); ?>
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
				<?php get_sidebar(); ?>
			</div>
			<div class="col-md-8">
				<?php post_navigation(); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>