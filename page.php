<?php get_header();  ?>

<main class="main legal-page" id="main" role="main">
  <div class="container">
    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <h2 class="content-title"><?php the_title(); ?></h2>
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