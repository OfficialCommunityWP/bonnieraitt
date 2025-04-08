<?php

/*
	Template Name: Gallery Archive Masonry Layout
*/

get_header();  ?>

<?php 
 //NOTE: 
 //
 //Assign this page template to gallery landing page if many galleries exist. This will show a masonry style layout on the galleries landing page. 
 //
 //If only a few galleries exist, the masonry layout can look weird, and the alternative template "archive-gallery-even-layout" can be applied to the discography landing page instead, and the images will show as evenly spaced squares.
?>

<main class="main gallery-page" id="main" role="main">
  <div class="container">
    <h2 class="content-title">Galleries</h2>
    <div class="archive-gallery-masonry">
      <?php 

      $args = array(
        'posts_per_page'   => -1,
        'post_type'     => 'gallery'
      );

      $gallery_landing_query = new WP_Query( $args );

      if ( $gallery_landing_query->have_posts() ) while ( $gallery_landing_query->have_posts() ) : $gallery_landing_query->the_post(); ?>

        
            <?php 
              // Featured image
              $imageID = get_post_thumbnail_id($post->ID);
            ?>
            <a href="<?php the_permalink(); ?>" class="gallery-link">
                <?php echo wp_get_attachment_image($imageID, 'containerWidthHalf', false, ["loading" => "lazy"]); ?>
                <h3><?php the_title(); ?></h3>
            </a>

      <?php endwhile; // end the loop?>
    </div> 
    <!-- archive-gallery-masonry -->
  </div>
  <!-- container -->
</main> 
<?php get_footer(); ?>