<?php

/*
	Template Name: Bio - The Band
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
    <!-- <div class="section-intro <?php echo $alignment ?>" style="background-image: url(<?php echo $background_image ?>;">
      <div class="content">
        <h2 class="content-title"><?php echo $title; ?></h2>
        <img src="<?php echo get_template_directory_uri()?>/images/divider.png">
        <p><?php echo $text; ?></p>
        <?php wp_reset_postdata() ?>
      </div>
    </div> -->
    <!-- end section intro -->
    <nav class="menu-sub-pages" role="navigation">
      <?php wp_nav_menu( array(
          'container' => false,
          'theme_location' => 'bio-sub'
        )); ?>
    </nav>

    <?php
	// Check rows exists.
	if( have_rows('band_member') ):

		// Loop through rows.
		while( have_rows('band_member') ) : the_row();

			// Get our variables
			$name = get_sub_field('name');
			$image = get_sub_field('band_photo');
      $text = get_sub_field('about');
			$alignment = get_sub_field('alignment');
		?>
			
			<div class="<?php echo $alignment ?>">
					<div class="content">
            <div class="bio-text">
              <h3 class="band-name"><?php echo $name; ?></h3>
						  <p><?php echo $text; ?></p>
            </div>
            <div class="bio-image">
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

