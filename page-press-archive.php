<?php

/*
	Template Name: Press Archive
*/

get_header();  ?>

<main class="main" id="main" role="main">
  <div class="container">
      <h2 class="content-title"><?php echo get_the_title( '', false ); ?></h2>

     <div class="archive-container">
         <ul>
             <li><a href="/news/press-archive/press-archive-1970s/"><img src="<?php echo home_url( '/' ); ?>wp-content/themes/bonnieraitt/images/OC_Bonnie Raitt_1970s.jpg" /></a></li>
             <li><a href="/news/press-archive/press-archive-1980s/"><img src="<?php echo home_url( '/' ); ?>wp-content/themes/bonnieraitt/images/OC_Bonnie Raitt_1980s.jpg" /></a></li>
             <li><a href="/news/press-archive/press-archive-1990s/"><img src="<?php echo home_url( '/' ); ?>wp-content/themes/bonnieraitt/images/OC_Bonnie Raitt_1990s.jpg" /></a></li>
             <li><a href="/news/press-archive/press-archive-2000s/"><img src="<?php echo home_url( '/' ); ?>wp-content/themes/bonnieraitt/images/OC_Bonnie Raitt_2000s.jpg" /></a></li>
             <li><a href="/news/press-archive/2010s/"><img src="<?php echo home_url( '/' ); ?>wp-content/themes/bonnieraitt/images/OC_Bonnie Raitt_2010s.jpg" /></a></li>
             <li><a href="/news/press-archive/press-archive-2020s/"><img src="<?php echo home_url( '/' ); ?>wp-content/themes/bonnieraitt/images/OC_Bonnie Raitt_2020s.jpg" /></a></li>
         </ul>
     </div>

  </div> 
  <!-- container -->
</main>

<?php get_footer(); ?>

