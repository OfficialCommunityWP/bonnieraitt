<?php 
/*
  Template Name: Video Archive Page
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
  <?php 
      $title = get_field('title');
      $text = get_field('text');
      $background_image = get_field('background_image');
      $alignment = get_field('alignment');
      $full_width_image = get_field('full_width_image');
      $full_width_image_link = get_field('full_width_image_link');
    ?>
    <?php if ($alignment = "full") { ?>
      <div class="section-intro-full-width">
        <a href="<?php echo $full_width_image_link; ?>"><img src="<?php echo $full_width_image; ?>"></a>
      </div>
    <?php } else { ?>
    <div class="section-intro <?php echo $alignment ?>" style="background-image: url(<?php echo $background_image ?>;">
      <div class="content">
        <h2 class="content-title"><?php echo $title; ?></h2>
        <img src="<?php echo get_template_directory_uri()?>/images/divider.png">
        <p><?php echo $text; ?></p>
      </div>
    </div>
    <?php } ?>
    <!-- end section intro -->

   

    <ul class="archive-video">
      <?php $video_query = new WP_Query(array(
        'post_type' => 'videos',
        'posts_per_page' => -1,
        'category__not_in' => '71'
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