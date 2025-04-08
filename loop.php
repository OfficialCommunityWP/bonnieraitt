<?php // If there are no posts to display, such as an empty archive page ?>

<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h2 class="entry-title">Not Found</h2>
		<section class="entry-content">
			<p>Apologies, but no results were found for the requested archive.</p>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>

<?php // if there are posts, Start the Loop. ?>

<?php while ( have_posts() ) : the_post(); ?>

<article class="news-landing-page-post">       
	<h3 class="title">
		<a href="<?php the_permalink();?>" class="excerpt-title"><?php the_title(); ?></a>
	</h3>
	<p class="date"><?php echo get_the_date(); ?></p> 
	<div class="clearfix">
		<?php the_content();  ?>
	</div>
	<a href="<?php the_permalink();?>" class="read-more button-style-1">Link To Article</a>
</article>

<?php endwhile; ?>


<?php if (  $wp_query->max_num_pages > 1 ) : ?>
<div class="pagination-wrapper">
	<div class="pagination-detail">
		<?php 
			$archiveYear = get_the_date('Y');
			$current_page = get_query_var( 'paged' );
			global $wp_query;
			$pages = $wp_query->max_num_pages;
			if($current_page == 0):
			echo ($archiveYear. ' News Archive: Page 1 of ' . $pages);
			else: 
			echo ($archiveYear. ' News Archive: Page ' . $current_page . ' of ' . $pages);
			endif;
		?>
	</div>
	<!-- pagination-detail -->

	<div class="pagination-links">
		<?php
		the_posts_pagination( array(
			'mid_size'  => 2,
			'prev_text' => '<span class="screen-reader-text">Previous Posts</span> <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-8" role="img" aria-label-="Previous" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M231.293 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L70.393 256 251.092 74.87c4.686-4.686 4.686-12.284 0-16.971L231.293 38.1c-4.686-4.686-12.284-4.686-16.971 0L4.908 247.515c-4.686 4.686-4.686 12.284 0 16.971L214.322 473.9c4.687 4.686 12.285 4.686 16.971-.001z"></path></svg>',
			'next_text' => '<span class="screen-reader-text">Next Posts</span><svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-8" role="img" aria-label="Next" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z"></path></svg><span class="screen-reader-text">',
		) );
	?>
	</div>
	<!-- pagination-links -->
</div>
<!-- pagination-wrapper -->
	
<?php endif; ?>
