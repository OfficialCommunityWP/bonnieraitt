<?php

/*
	Template Name: Discography Archive Page
*/

get_header();  ?>

<main class="main music-page" id="main" role="main">
  <div class="container">
  <nav class="menu-sub-pages" role="navigation">
      <?php wp_nav_menu( array(
          'container' => false,
          'theme_location' => 'music-sub'
        )); ?>
    </nav>
    <ul class="all-albums">

      <?php 

      $args = array(
        'posts_per_page'   => -1,
        'post_type'     => 'discography',
        'orderby'       => 'date',
        'order'         => 'ASC'
      );

      $discography_query = new WP_Query( $args );

      ?>
      <?php if( $discography_query->have_posts() ): ?>
  
        <?php while( $discography_query->have_posts() ) : $discography_query->the_post(); ?>
            <li class="one-album">
                <a href="<?php the_permalink(); ?>" class="eachAlbum" title="Details about the album <?php the_title(); ?>">
                  <div class="image-wrapper">
                    <?php 
                      $image = get_field('album_cover');
                      echo wp_get_attachment_image($image, 'gallery', false, ["loading" => "lazy", "class" => "eachAlbumCover"]); 
                    ?>
                  </div>
                  <h3><?php the_title(); ?></h3>
                </a> 
            </li>
        <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_query(); ?>
    </ul> 
    <!--  all albums -->
  </div>
  <!-- container -->
</main> 

<?php get_footer(); ?>