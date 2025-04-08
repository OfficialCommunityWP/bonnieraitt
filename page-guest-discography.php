<?php

/*
	Template Name: Guest Discography
*/

get_header();  ?>

<main class="main" id="main" role="main">
  <div class="container">
    <nav class="menu-sub-pages" role="navigation">
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'music-sub'
      )); ?>
    </nav>
    <div class="guest-header">
      <img src="<?php echo home_url( '/' ); ?>wp-content/themes/bonnieraitt/images/guest-discography-banner.jpg" alt="" loading="lazy">
    </div>
    
    <span id="top"></span>

    <nav class="menu-sub-pages" role="navigation">
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'guest-discography-sub'
      )); ?>
    </nav>


    <?php
        // Check rows exists.
        if( have_rows('decade') ):
          // Loop through rows.
          while( have_rows('decade') ) : the_row();
            // Get our variables
            ?>
            <h3 id="<?php echo the_sub_field('decade_text'); ?>"><?php echo the_sub_field('decade_text'); ?></h3>
            <?php 
            
            
            echo '<div class="guest-discography">';
            echo '<div class="guest-header-labels">
                    <h3>Year</h3>
                    <h3>Album</h3>
                    <h3>Song</h3>
                    <h3>With</h3>
                    <h3>Label</h3>
                  </div>';

              if( have_rows('entry') ):
                // Loop through rows.
                while( have_rows('entry') ) : the_row();

                // Get our variables
                $year = get_sub_field('year');
                $album = get_sub_field('album');
                $song = get_sub_field('song');
                $with = get_sub_field('with');
                $label = get_sub_field('label');
                

          ?>
            
            <div class="guest-row">
              <div class="year">
                <p><?php echo $year ?></p>
              </div>
              <div class="album">
                <p><?php echo $album ?></p>
              </div>
              <div class="song">
                <p><?php echo $song ?></p>
              </div>
              <div class="with">
                <p><?php echo $with ?></p>
              </div>
              <div class="label">
                <p><?php echo $label ?></p>
              </div>
            </div>
            
            <?php
          // End loop.
        endwhile;
          echo '</div><a href="#top" class="back-to-top">Back to Top</a>';
        
        // No value.
        else :
          // Do something...
        endif;
	    ?>
      <?php
          // End loop.
          endwhile;

        // No value.
        else :
          // Do something...
        endif;
	    ?>

  </div> 
  <!-- container -->
</main>

<?php get_footer(); ?>

