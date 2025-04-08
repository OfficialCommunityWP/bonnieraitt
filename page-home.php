<?php

/*
	Template Name: Home Page
*/

get_header();  ?>

<main class="main home-page" id="main" role="main">

	<?php $home_slider_query = new WP_Query(array( 'post_type' => 'home-hero', 'posts_per_page' => -1)); ?>
	<?php if ($home_slider_query->have_posts()): ?>

	<section class="slider-container">
		<div class="container">
		<div class="play-pause">
			<button class="pause-slideshow slider-button" aria-label="Stop automatic slide show" title="Stop Automatic Slideshow"
			>
				<svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" aria-label="Pause">
					<path d="M144 479H48c-26.5 0-48-21.5-48-48V79c0-26.5 21.5-48 48-48h96c26.5 0 48 21.5 48 48v352c0 26.5-21.5 48-48 48zm304-48V79c0-26.5-21.5-48-48-48h-96c-26.5 0-48 21.5-48 48v352c0 26.5 21.5 48 48 48h96c26.5 0 48-21.5 48-48z"
					></path>
				</svg>
				<span class="screen-reader-text">Stop Automatic Slide Show</span>
			</button>

			<button class="play-slideshow slider-button" aria-label="Play automatic slide show" title="Play Automatic Slideshow">
				<svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" aria-label="Play">
					<path d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z"
					></path>
				</svg>
				<span class="screen-reader-text">Play Automatic Slide Show</span>
			</button>
		</div>
		<!-- play-pause -->

		<button class="slider-prev slider-button" aria-label="Previous Slide" title="Previous Slide">
			<svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" aria-label="Previous"><path d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
			<span class="screen-reader-text">Previous Slide</span>
		</button>

		<button class="slider-next slider-button" aria-label="Next Slide" title="Next Slide">
			<svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" aria-label="Next"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
			<span class="screen-reader-text">Next Slide</span>
		</button>
		<div class="slider">
		<?php while ( $home_slider_query->have_posts() ) : $home_slider_query->the_post(); ?>

			<div class="hero-slides fade">
				<div class="home-slide">
				<?php 
					$image = get_field('image');
					$link = get_field('slide_link');
					$linkType = get_field('link_type_selector');
				?>

				<?php if (strlen($link)>0): ?>
					
					<?php 
					//  Show the image in an external link 
					if($linkType == 'external'): ?>
						<a href="<?php echo $link; ?>" target="_blank">
							<?php echo wp_get_attachment_image($image, 'homeHero', false, ["loading" => "lazy"]); ?>
						</a>
					<?php endif; ?>
			
					<?php 
					//Show the image in an internal link 
					if($linkType == 'internal'): ?>
						<a href="<?php echo $link; ?>">
							<?php echo wp_get_attachment_image($image, 'homeHero', false, ["loading" => "lazy"]); ?>
						</a>
					<?php endif; ?>

					<?php 
					// Just show the image if no link entered 
					else: ?>
					<?php echo wp_get_attachment_image($image, 'homeHero', false, ["loading" => "lazy"]); ?>
				<?php endif; ?>
				</div>
				<!-- home-slide -->
			</div>
			<!-- hero-slides -->
			<?php endwhile; ?>
		</div>
		<!-- slider -->
		<?php endif; ?>
		<?php wp_reset_postdata() ?>
		</div>
	</section>

	<!-- tour section, dates are pulled automatically from leap -->
	<section class="home-tour">
		<div class="container">
			<div class="tour-widget">
			<a href="https://tour.BonnieRaitt.com/" class="tour-banner-link"><img src="<?php echo home_url( '/' ); ?>wp-content/themes/bonnieraitt/images/bonnie-live.png"></a>
				<div class="dates">
					<h2 class="content-title">Upcoming Tour Dates</h2>
					<ul id="tourDates" class="tour-dates"></ul>
					<a href="https://tour.BonnieRaitt.com/" class="tour-text-link">Check out the Tour page for all upcoming dates</a>
					<div id="noDates" class="no-events" style="display: none;">
						<p>No upcoming events. Please check back again later.</p>
					</div>
				</div>
			</div>
			<!-- no-events -->
			<!-- <a class="button-style-1" href="">All Events</a> -->
		</div>
		<!-- container -->
	</section>
	<!-- tour section ends -->

	<!-- home page sections are added via home page in wp admin -->

	<?php
	// Check rows exists.
	if( have_rows('section') ):

		// Loop through rows.
		while( have_rows('section') ) : the_row();

			// Get our variables
			$name = get_sub_field('name');
			$background_image = get_sub_field('background_image');
			$title = get_sub_field('title');
			$blurb = get_sub_field('blurb');
			$button_link = get_sub_field('button_link');
			$alignment = get_sub_field('alignment');
		?>
			
			<section class="custom-section <?php echo $alignment ?> <?php echo $name ?>">
			<div class="container">
				<div class="custom-background" style="background-image: url(<?php echo $background_image ?>;">
					<div class="content">
						<h2><?php echo $title ?></h2>
						<img src="<?php echo get_template_directory_uri()?>/images/divider.png">
						<p><?php echo $blurb ?></p>
						<a href="<?php echo $button_link['url']; ?>" class="button-style-1"><?php echo $button_link['title']; ?></a>
					</div>
				</div>
			</div>

			</section>
			
		<?php
		// End loop.
		endwhile;

	// No value.
	else :
		// Do something...
	endif;

	?>

	<!-- full width images -->

	<?php
	// Check rows exists.
	if( have_rows('full_width_images') ):

		// Loop through rows.
		while( have_rows('full_width_images') ) : the_row();

			// Get our variables
			$image = get_sub_field('image');
			$url = get_sub_field('url');
		?>
			
			<section class="full-width-images">
			<div class="container">
				<a href="<?php echo $url; ?>" target="_blank"><img src="<?php echo $image; ?>" /></a>
			</div>

			</section>
			
		<?php
		// End loop.
		endwhile;

	// No value.
	else :
		// Do something...
	endif;

	?>

	<section class="members">
		<div class="container">
			<div class="home-members-content">
				<div class="member-box">
					<h2>Become a Member</h2>
					<img src="<?php echo get_template_directory_uri()?>/images/member-divider.png">
					<p>Sign In or Register with Bonnie Raitt's Member's Area for access to our members-only ticket pre-sales and more.</p>
					<div class="buttons">
						<a href="https://www.bonnieraitt.com/members/" class="button-style-2">Sign In</a>
						<a href="https://members.bonnieraitt.com/Identity/Account/Register" class="button-style-2">Join Now</a>
					</div>
				</div>

			</div>
		</div>
	</section>




</main> 
<!-- main -->

<?php get_footer(); ?>
