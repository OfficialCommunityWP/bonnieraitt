<?php

/*
	Template Name: Tour Archives
*/

get_header();  ?>

<main class="main legal-page" id="main" role="main">
  <div class="container">
    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <h2 class="content-title"><?php the_title(); ?></h2>
        <nav class="menu-sub-pages" role="navigation">
            <?php wp_nav_menu( array(
                'container' => false,
                'theme_location' => 'tour-history-sub'
            )); ?>
        </nav>
        <div class="clearfix">
          <?php the_content(); ?>
        </div>
      <?php endwhile; // end the loop?>
    </div> 
    <!-- content -->
  </div> 
  <!-- container -->
</main> 

<?php get_footer(); ?>