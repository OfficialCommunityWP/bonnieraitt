<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<main class="main" id="main" role="main">
  <div class="container">
    <div class="content">
    		<?php get_template_part( 'loop', 'index' );	?>
    </div> 
    <!--content -->
  </div> 
  <!-- container -->
</main>

<?php get_footer(); ?>