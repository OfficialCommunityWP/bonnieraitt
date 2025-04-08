<?php

/*
	Template Name: Single Gallery
*/

get_header();  ?>

<div class="gallery-modal" role="dialog" aria-hidden="true">
  <button class="gallery-modal-close" aria-label="Close The Image Gallery Modal">
      <span class="screen-reader-text">CLOSE</span>
      <svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" aria-label="close"><path d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg>
  </button>
  
  <div class="modal-wrapper">
    <div class="main-carousel">
      <button class="slider-prev slider-button" aria-label="Previous Slide" title="Previous Slide">
        <svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" aria-label="Previous"><path d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
        <span class="screen-reader-text">Previous Slide</span>
      </button>

      <button class="slider-next slider-button" aria-label="Next Slide" title="Next Slide">
        <svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" aria-label="Next"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
        <span class="screen-reader-text">Next Slide</span>
      </button>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); 
        $images = get_field('basic_gallery', false, false);
        if( $images ): 
          foreach( $images as $index=>$image ): ?>
                <div class="one-modal-img fade" id="<?php echo $index ?>">
                  <?php echo wp_get_attachment_image($image, 'containerWidth', false, ["loading" => "lazy"]); ?>
                  <figcaption><?php echo wp_get_attachment_caption( $image ); ?></figcaption>
                </div>
              <?php endforeach; ?>
        <?php endif; ?>
      <?php endwhile; ?>
      <?php wp_reset_postdata() ?>
    </div>
    <!-- main-carousel -->
  </div>
  <!-- modal-wrapper -->
</div>
<!-- gallery-modal -->

<main class="main gallery-page" id="main" role="main">
  <div class="container">
    <!-- <h2 class="content-title"><?php the_title(); ?></h2>  -->
    <h2 class="content-title">Gallery</h2> 
    <div class="single-gallery">        
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php 
        $images = get_field('basic_gallery');
        if( $images ): ?>
          <ul class="gallery-images">

            <?php foreach( $images as $index=>$image ): ?>

              <li>
                <button class="preview-link" data-index="<?php echo $index ?>">
                  <?php echo wp_get_attachment_image($image, 'containerWidthHalf', false, ["loading" => "lazy"]); ?>
                  <span class="screen-reader-text">
                    open the modal to view 
                    <?php 
                      $alt_text = get_post_meta($image, '_wp_attachment_image_alt', true); 
                      echo $alt_text; 
                    ?>
                  </span>
                </button>
              </li>

            <?php endforeach; ?>
            
          </ul>

        <?php endif; ?>
    </div> 
    <!-- single-gallery -->

    <?php endwhile; // end the loop ?>
    <?php wp_reset_postdata() ?>
  </div>
  <!-- container -->
</main>

<?php get_footer(); ?>

