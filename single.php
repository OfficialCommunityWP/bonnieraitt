<?php get_header(); ?>

<main class="main single-article-main news-type-page" id="main" role="main">
  <div class="container">
    <div class="news-wrapper">
      
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <article class="news-single-page-post">
          <?php the_post_thumbnail('large'); ?>
            <div class="news-single-content">
              <h2 class="title"><?php the_title(); ?></h2>
              <img src="<?php echo get_template_directory_uri()?>/images/news-divider.png">
              <p class="date"><?php echo get_the_date(); ?></p>
              <div class="clearfix">
                <?php the_content(); ?>
              </div>
            </div>
            <!-- clearfix -->
          </article>
          <a href="/news/latest-news/">&#60;&#60; Back to Latest News</a>

          
          <?php endwhile; ?>
        </div>
        <!-- #post-ID -->
    </div>
    <!-- news-wrapper -->
  </div> 
  <!-- container -->
</main> 

<?php get_footer(); ?>