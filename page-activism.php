<?php

/*
	Template Name: Activism
*/

get_header();  ?>

<main class="main" id="main" role="main">
  <div class="container">
  <?php 
      $title = get_field('title');
      $text = get_field('text');
      $background_image = get_field('background_image');
      $alignment = get_field('alignment');
    ?>
    <?php wp_reset_postdata() ?>
    <div class="section-intro <?php echo $alignment ?>" style="background-image: url(<?php echo $background_image ?>;">
      <div class="content">
        <h2 class="content-title"><?php echo $title; ?></h2>
        <img src="<?php echo get_template_directory_uri()?>/images/divider.png">
        <p><?php echo $text; ?></p>
        <?php wp_reset_postdata() ?>
      </div>
    </div>
    <!-- end section intro -->
    <nav class="menu-sub-pages" role="navigation">
      <?php wp_nav_menu( array(
          'container' => false,
          'theme_location' => 'benefit-sub'
        )); ?>
    </nav>
    <?php
	// Check rows exists.
	if( have_rows('bio_block') ):

		// Loop through rows.
		while( have_rows('bio_block') ) : the_row();

			// Get our variables
			$text = get_sub_field('text');
			$image = get_sub_field('image');
			$alignment = get_sub_field('alignment');
		?>
			
			<div class="<?php echo $alignment ?>">
				<div class="activism-content">
                    <div class="benefit-text">
					    <p><?php echo $text ?></p>
                    </div>
                    <div class="benefit-image">
                        <img src="<?php echo $image; ?>">
                    </div>
                </div>
            </div>
			
		<?php
		// End loop.
		endwhile;

	// No value.
	else :
		// Do something...
	endif;

	?>
<?php wp_reset_postdata() ?>

  </div> 
  <!-- container -->
</main>

<?php get_footer(); ?>

