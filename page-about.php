<?php

/*
	Template Name: About Page
*/

get_header();  ?>

<main class="main" id="main" role="main">
  <div class="container">
      <h2 class="content-title"><?php echo get_the_title( '', false ); ?></h2>

      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div class="clearfix">
          <?php the_content(); ?>
        </div>
      <?php endwhile; // end the loop?>

  </div> 
  <!-- container -->
</main>

<?php get_footer(); ?>

