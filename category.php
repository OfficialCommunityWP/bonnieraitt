<?php get_header(); ?>

<main class="main" id="main" role="main">
  <div class="container">
    <div class="content">
      <h2 class="content-title">Category Archives: <?php single_cat_title(); ?></h2>
    	<?php
    		$category_description = category_description();
    		if ( ! empty( $category_description ) )
    			echo '' . $category_description . '';
    	   get_template_part( 'loop', 'category' );
        ?>

    </div> 
    <!-- content -->
  </div> 
  <!-- container -->
</main> 

<?php get_footer(); ?>