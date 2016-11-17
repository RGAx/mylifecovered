<?php
/**
* @package WordPress
* @subpackage HTML5-Reset-WordPress-Theme
* @since HTML5 Reset 2.0
*/
get_header(); ?>
<div id="blog_search" class="blog-wrap background-wrap">
 	<div class="container">
 	    <div class="row">
 	        <div class="col-md-8">
	 			<h1 class="category-title">'<?php echo esc_html( get_search_query( false ) ); ?>'</h1>
 	        	<?php get_search_form(); ?>
				<div class="other-articles">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article class="standard-post" id="post-<?php the_ID(); ?>">
						<h2 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
						<p class='publish-details'>
 	        				<?php
 	        					echo get_the_date();
								$author = get_field( 'author' );
								if ($author) {
							?>
								Author: <?=$author;?>
							<?php
								}
							?>
 	        			</p>
						<div class="entry excerpt">
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