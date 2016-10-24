<?php
/**
* @package WordPress
* @subpackage HTML5-Reset-WordPress-Theme
* @since HTML5 Reset 2.0
*/
get_header(); ?>
<div id="blog_landing" class="blog-wrap background-wrap">
 	<div class="container">
 	    <div class="row">
 	        <div class="col-md-8">
 	        	<?php get_search_form(); ?>
 	        	<div class="other-articles">
 	        	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 	        		<article class="standard-post" id="post-<?php the_ID(); ?>">
 	        			<?php $other_post_img = wp_get_attachment_image_src( get_post_thumbnail_id( ), 'full' ); ?>
 	        			<?php
 	        				if ($other_post_img) {
 	        			?>
 	        			<img src="<?=$other_post_img[0];?>">
 	        			<?php } ?>
 	        			<h1 class="title"><?php the_title(); ?></h1>
 	        			<p class='publish-details'><?php echo get_the_date(); ?> Author: <a class="" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></p>
 	        			<div class="entry">
 	        				<?=the_content(); ?>
 	        			</div>
 	        		</article>
 	        	<?php endwhile; ?>
 	        	<?php endif; ?>
 	        	</div>
 	        </div>
 	        <div class="col-md-4">
 	        	<?php get_sidebar(); ?>
 	        </div>
 	    </div>
 	</div>
</div>
<?php get_footer(); ?>