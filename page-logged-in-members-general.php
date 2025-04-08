<?php /* Template Name: Members Only General Content */ ?>

<?php get_header();  ?>

<main class="main members-page" id="main" role="main">
  <div class="container">
    <div class="content">
		<h2 class="content-title"><?php the_title(); ?></h2>
		<div class="members-content membership-logged-in" style="display: block;">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div class="clearfix">
					<?php the_content(); ?>
				</div> 
			<?php endwhile; ?>
		</div>
		<!-- membership-cover -->
	</div> 
	<!-- content -->
  </div> 
  <!-- container -->
</main>

<?php get_footer(); ?>