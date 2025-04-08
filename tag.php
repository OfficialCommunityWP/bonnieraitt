<?php get_header(); ?>

<main class="main" id="main" role="main">
  <div class="container">
    <div class="content">
      <h2>Tag Archives: <?php single_tag_title(); ?></h2>
      <?php get_template_part( 'loop', 'tag' ); ?>
    </div> 
    <!-- content -->
  </div>
  <!-- container -->
</main>

<?php get_footer(); ?>