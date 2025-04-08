<?php 
/*
  Template Name: Video Single Page
*/
get_header();  ?>

<main class="main video-single-page" id="main" role="main">

  <div class="container">
  <nav class="menu-sub-pages" role="navigation">
      <?php wp_nav_menu( array(
          'container' => false,
          'theme_location' => 'video-sub'
        )); ?>
    </nav>

    <h2 class="content-title"><?php echo the_title(); ?></h2>

    <div class="single-video">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

            <div class="single-youtube">       
              <div class="youtube-player youtube-player-single" data-title="Play the video <?php the_title(); ?>" data-id="<?php the_field('videoID') ?>"></div>
            </div>

      <?php endwhile; // end the loop?>
    </div> 
    <!-- single-video -->
  </div> 
  <!-- container -->
</main>

<?php get_footer(); ?>