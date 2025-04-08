<?php 
/*
  Template Name: News Category Archive
*/
get_header();  ?>

<main class="main" id="main" role="main">
  <div class="container">
    <h2 class="content-title"><?php echo get_the_archive_title( '', false ); ?></h2>

    <div class="news-wrapper">
      <div class="news-main">
       
          <?php // Start the loop ?>
          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

          <article class="news-landing-page-post">       
            <h3 class="title">
              <a href="<?php the_permalink();?>" class="excerpt-title"><?php the_title(); ?></a>
            </h3>
            <p class="date"><?php echo get_the_date(); ?></p> 
            <div class="clearfix">
              <?php the_content();  ?>
            </div>
            <a href="<?php the_permalink();?>" class="read-more button-style-1">Link To Article</a>
          </article>

          <?php endwhile; // end the loop?>
      </div>
      <!-- news-main -->

      <div class="news-sidebar">
        <div class="archives-nav">
          <h3>News Archives</h3>
          <nav role="navigation" aria-label="archives of news posts by year">
            <ul>
              <?php wp_get_archives('type=yearly'); ?>
            </ul>
          </nav>
        </div>
        <!-- archives nav -->
      </div>
      <!-- news sidebar -->
    </div>
    <!-- news-wrapper -->
  </div> 
  <!-- container -->
</main> 

<?php get_footer(); ?>