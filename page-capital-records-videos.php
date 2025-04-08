<?php 
/*
  Template Name: Capital Records Video
*/
get_header();  ?>

<main class="main video-archive-page" role="main" id="main">
  <div class="container">
    <nav class="menu-sub-pages" role="navigation">
      <?php wp_nav_menu( array(
          'container' => false,
          'theme_location' => 'video-sub'
        )); ?>
    </nav>

    <ul class="archive-video">
      <?php $video_query = new WP_Query(array(
        'post_type' => 'videos',
        'posts_per_page' => -1,
        'category__in' => '71'
      )); ?>

      <?php while ( $video_query->have_posts() ) :
        $video_query->the_post(); ?>

        <li class="single-youtube">    
          <a class="one-video-link" href="<?php the_permalink(); ?>" title="Play the video <?php the_title(); ?>">   
            <div class="youtube-player youtube-player-preview" data-id="<?php the_field('videoID') ?>" data-title="<?php the_title(); ?>"></div>
            <h3><?php the_title(); ?></h3>
          </a>
        </li>

      <?php endwhile; ?>
    </ul>
  </div> 
  <!-- container -->
</main> 

<?php get_footer(); ?>