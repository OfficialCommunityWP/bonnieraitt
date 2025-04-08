<?php get_header(); ?>

<main class="main news-type-page" role="main" id="main">
  <div class="container">

    <?php if ( have_posts() ) the_post(); ?>

    <h2 class="content-title">
        <?php if ( is_day() ) : ?>
          Daily Archives: <?php the_date(); ?>
        <?php elseif ( is_month() ) : ?>
          News Archives: <?php the_date('F Y'); ?>
        <?php elseif ( is_year() ) : ?>
          News Archives: <?php the_date('Y'); ?>
        <?php else : ?>
          Blog Archives
        <?php endif; ?>
    </h2>

    <div class="news-wrapper">
      <div class="news-main">
        <?php
        rewind_posts();
        get_template_part( 'loop', 'archive' );
        ?>
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
        <!-- archives-nav -->
      </div>
      <!-- news-sidebar -->
    </div>
    <!-- news-wrapper -->
  </div> 
  <!-- container -->
</main>

<?php get_footer(); ?>