<?php 
/*
  Template Name: News Page
*/
get_header();  ?>

<main class="main news-type-page" id="main" role="main">
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
          'theme_location' => 'news-sub'
        )); ?>
    </nav>
    <div class="news-wrapper">
      <div class="news-main">
        <?php
        //  NOTE this doesn't filter by any category. We do include the category of 'news' on posts in order to have the nice url /news/post-title-here/ on a single post.
        //  
        //  The permalink structure will need to be set to the custom structure /%category%/%postname%/ in the admin.
          ?>
      
        <?php 
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array( 
            'post_type' => 'post', 
            'posts_per_page' => 12, 
            'paged' => $paged,
            'category__not_in' => array( 73, 74, 75, 76 ),
            'ignore_sticky_posts' => 1 
            //Show all posts in order of post date, removes the priority ordering of sticky posts
          );
          $wp_query = new WP_Query($args);
        while ( have_posts() ) : the_post(); ?>

            <article class="news-landing-page-post">
              <?php the_post_thumbnail('large'); ?>
              <h3 class="title">
                <a href="<?php the_permalink();?>" class="excerpt-title"><?php the_title(); ?></a>
              </h3>
              <p class="date"><?php echo get_the_date(); ?></p> 
              
              <div class="news-button">
              <a href="<?php the_permalink();?>" class="read-more button-style-1">Read More<span class="screen-reader-text"> <?php the_title(); ?></span></a></div>
            </article>
        <?php endwhile; ?>

        <div class="pagination-wrapper">
          <!-- <div class="pagination-detail">
            <?php 
              $current_page = get_query_var( 'paged' );
              global $wp_query;
              $pages = $wp_query->max_num_pages;
              if($current_page == 0):
              echo ('News: Page 1 of ' . $pages);
              else: 
              echo ('News: Page ' . $current_page . ' of ' . $pages);
              endif;
            ?>
          </div> -->
          <!-- pagination-detail -->
          <div class="pagination-links">
            <?php
            the_posts_pagination( array(
              'mid_size'  => 1,
              'prev_text' => __( '<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-8" role="img" aria-label-="Previous" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M231.293 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L70.393 256 251.092 74.87c4.686-4.686 4.686-12.284 0-16.971L231.293 38.1c-4.686-4.686-12.284-4.686-16.971 0L4.908 247.515c-4.686 4.686-4.686 12.284 0 16.971L214.322 473.9c4.687 4.686 12.285 4.686 16.971-.001z"></path></svg><span class="screen-reader-text">Previous Posts</span>', 'textdomain' ),
              'next_text' => __( '<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-8" role="img" aria-label="Next" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z"></path></svg><span class="screen-reader-text">Next Posts</span>', 'textdomain' ),
            ) );
            ?>
          </div>
          <!-- pagination-links -->
        </div>
        <!-- pagination-wrapper -->
      </div>
      <!-- news main -->

    </div>
    <!-- news wrapper -->
  </div> 
  <!-- container -->
</main> 

<?php get_footer(); ?>