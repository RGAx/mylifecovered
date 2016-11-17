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
 	        	<?php
		       global $wp_query;
               $current_page = max(1, get_query_var('paged'));
               if($current_page == 1) {
 	        	?>
				<?php } ?>
				<?php $counter = 0; ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php
					++$counter;
					if($counter == 1) {
		 	        	$featured_post_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post ), 'full' );
		 	        	?>
						<article class="featured-post" id="post-<?=$post->ID; ?>">
							<img src="<?=$featured_post_img[0];?>">
							<div class="content-wrapper">
								<h2 class="title"><a href="<?=get_the_permalink($post->ID) ?>"><?=$post->post_title;?></a></h2>
								<div class="entry">
									<?=the_excerpt(); ?>
								</div>
								<a class="btn btn-primary" href="<?=get_the_permalink($post->ID) ?>">Read More</a>
							</div>
						</article>
					<?php } else {
						if($counter == 2) echo "<div class='other-articles'>"; ?>
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
					<?php } ?>
				<?php endwhile; ?>
				<?php endif; ?>
				</div>
			</div>
			<div class="col-md-4">
				<?php require_once('side.php'); ?>
			</div>
			<div class="col-md-8">
				<?php post_navigation(); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>