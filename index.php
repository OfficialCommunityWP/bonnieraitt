<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<main class="main" id="main" role="main">
  <div class="container">
    <!-- Add the widget container div here -->
    <div id="occ2-widget-root"></div>

    <div class="content">
    		<?php get_template_part( 'loop', 'index' );	?>
    </div> 
    <!--content -->
  </div> 
  <!-- container -->
</main>

<?php get_footer(); ?>