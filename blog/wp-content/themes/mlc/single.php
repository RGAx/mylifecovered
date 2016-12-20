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
 	        	<?php
 	        	// SHOW YOAST PRIMARY CATEGORY, OR FIRST CATEGORY
 	        	$category = get_the_category();
 	        	$useCatLink = true;
 	        	// If post has a category assigned.
 	        	if ($category){
 	        		$category_display = '';
 	        		$category_link = '';
 	        		if ( class_exists('WPSEO_Primary_Term') )
 	        		{
 	        			// Show the post's 'Primary' category, if this Yoast feature is available, & one is set
 	        			$wpseo_primary_term = new WPSEO_Primary_Term( 'category', get_the_id() );
 	        			$wpseo_primary_term = $wpseo_primary_term->get_primary_term();
 	        			$term = get_term( $wpseo_primary_term );
 	        			if (is_wp_error($term)) {
 	        				// Default to first category (not Yoast) if an error is returned
 	        				$category_display = $category[0]->name;
 	        				$category_link = get_category_link( $category[0]->term_id );
 	        			} else {
 	        				// Yoast Primary category
 	        				$category_display = $term->name;
 	        				$category_link = get_category_link( $term->term_id );
 	        			}
 	        		}
 	        		else {
 	        			// Default, display the first category in WP's list of assigned categories
 	        			$category_display = $category[0]->name;
 	        			$category_link = get_category_link( $category[0]->term_id );
 	        		}
 	        		// Display category
 	        		if ( !empty($category_display) ){
 	        		    if ( $useCatLink == true && !empty($category_link) ){
 	        			echo '<h1 class="category-title">';
 	        			echo '<a href="'.$category_link.'">'.($category_display).'</a>';
 	        			echo '</h1>';
 	        		    } else {
 	        			echo '<h1 class="category-title">'.($category_display).'</h1>';
 	        		    }
 	        		}
 	        	}
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
 	        			<div class="entry">
 	        				<?=the_content(); ?>
 	        			</div>
 	        			<div class="tag-links-container">
 	        				<?php
 	        					$posttags = get_the_tags();
 	        					if ($posttags) {
 	        						foreach (get_the_tags() as $tag) {
 	        							echo "<a class='tag-link' href=\"";
 	        							echo get_tag_link($tag->term_id);
 	        							echo "\">".$tag->name."</a>";
 	        						}
 	        					}
 	        				?>
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