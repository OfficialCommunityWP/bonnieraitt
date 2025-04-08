<?php get_header(); ?>

<section class="columns twelve" >
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  
  <!-- article -->
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="columns twelve">
      <h2>Videos <small class="right"> <a href="/videos/"><i class="icon-th icon-large"></i></a></small> </h2>
      <h4>
        <?php the_title(); ?>
      </h4>
      
      <!--  Embedded Video -->
      <div class="video-container"><?php the_content();  ?></div>
      
      <!-- Video Caption -->
      <p>
        <?php
          global $wp_query;
          $postid = $wp_query->post->ID;
          echo get_post_meta($postid, 'videocaption_meta', true);
          wp_reset_query();
      ?>
      </p>
    </div>
  </article>
  <!-- /article -->
  
  <?php endwhile; ?>
  <?php else: ?>
  
  <!-- article -->
  <article>
    <h1>
      <?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?>
    </h1>
  </article>
  <!-- /article -->
  
  <?php endif; ?>
</section>
<!-- /section -->

<?php get_footer(); ?>
