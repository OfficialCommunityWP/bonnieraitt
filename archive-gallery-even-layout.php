<?php

/*
	Template Name: Gallery Archive Even Layout
*/

get_header();  ?>

<?php 
 //NOTE: 
 //
 //Assign this page template to gallery landing page for an equal sized squares layout on the gallery landing page. 
 //
 //Alternative: if many galleries exist, the template archive-gallery-masonry-layout can be applied to gallery landing page for an uneven masonry style layout.
?>

<main class="main gallery-page" id="main" role="main">
    <div class="container">
        <h2 class="content-title">Galleries</h2>
        <div class="archive-gallery-even">
          <?php 

          $args = array(
            'posts_per_page'   => -1,
            'post_type'     => 'gallery'
          );

          $gallery_landing_query = new WP_Query( $args );

          if ( $gallery_landing_query->have_posts() ) while ( $gallery_landing_query->have_posts() ) : $gallery_landing_query->the_post(); ?>

            <div class="link-wrapper">  
                <?php 
                // Featured image
                $imageID = get_post_thumbnail_id($post->ID);
                $image = wp_get_attachment_image_src($imageID,'full', false, '')[0]; 
                $imageAlt = get_post_meta($imageID,'_wp_attachment_image_alt', true);
                ?>
                <a href="<?php the_permalink(); ?>" class="gallery-link">
                    <div class="gallery-category-img-wrapper" style="background-image: url(<?php echo $image; ?>);">
                        <h3><?php the_title(); ?></h3>
                    </div>
                </a>
            </div>
            <!-- link-wrapper -->
          <?php endwhile; // end the loop?>
        </div> 
        <!-- archive-gallery-even -->
    </div>
    <!-- container -->
</main> 
<?php get_footer(); ?>