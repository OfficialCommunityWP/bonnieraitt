<?php

/*
	Template Name: Latest Release
*/

get_header();  ?>

<main class="main" id="main" role="main">
  <div class="container">
    <?php 
      $title = get_field('title');
      $text = get_field('text');
      $background_image = get_field('background_image');
    ?>
    <div class="section-intro" style="background-image: url(<?php echo $background_image ?>;">
      <div class="content">
        <h2 class="content-title"><?php echo $title; ?></h2>
        <img src="<?php echo get_template_directory_uri()?>/images/divider.png">
        <p><?php echo $text; ?></p>
      </div>
    </div>
    <!-- end section intro -->
    <nav class="menu-sub-pages" role="navigation">
      <?php wp_nav_menu( array(
          'container' => false,
          'theme_location' => 'music-sub'
        )); ?>
    </nav>

    <?php 
      $image = get_field('image');
      $label = get_field('label');
      $text = get_field('text_copy');
    ?>
    <?php wp_reset_postdata() ?>
    
      <div class="latest-release">
        <div class="latest-release-image">
          <img src="<?php echo $image; ?>">
          <img class="label" src="<?php echo $label; ?>">
        </div>
        <div class="latest-release-text">
        <?php echo $text; ?>
        </div>
        <?php wp_reset_postdata() ?>
      </div>
    
<?php wp_reset_postdata() ?>
  </div> 
  <!-- container -->
</main>

<?php get_footer(); ?>

