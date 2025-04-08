<?php

/*
	Template Name: Benefit History
*/

get_header();  ?>

<main class="main legal-page" id="main" role="main">
  <div class="container">
    
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <h2 class="content-title"><?php the_title(); ?></h2>
        <nav class="menu-sub-pages" role="navigation">
      <?php wp_nav_menu( array(
          'container' => false,
          'theme_location' => 'benefit-history-sub'
        )); ?>
    </nav>
        <div class="clearfix">
          <?php the_content(); ?>
        </div>
      <?php endwhile; // end the loop?>
      <button onclick="topFunction()" id="myBtn" class="button-style-1" title="Go to top">&#8593; Back To Top</button>

  </div> 
  <!-- container -->
</main> 

<script>
  mybutton = document.getElementById("myBtn");
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
      </script>

<?php get_footer(); ?>