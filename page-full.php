<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>

<main class="main" id="main" role="main">
    <div class="container">
		<h2 class="content-title"><?php the_title(); ?></h2>
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div class="clearfix">
				<?php the_content(); ?>
			</div>
		<?php endwhile; ?>
	</div> 
	<!-- container -->
</main>

<?php get_footer(); ?>
