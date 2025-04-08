<?php

/*
	Template Name: Press Archive Decade
*/

get_header();  ?>

<main class="main" id="main" role="main">
  <div class="container">
      <h2 class="content-title"><?php echo get_the_title( '', false ); ?></h2>

      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div class="clearfix">
          <?php the_content(); ?>
        </div>
        <a href="/news/press-archive/">&#60;&#60; Back to Archive</a>
      <?php endwhile; // end the loop?>

  </div> 
  <!-- container -->
</main>

<?php get_footer(); ?>

