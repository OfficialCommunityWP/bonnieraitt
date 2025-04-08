<?php 
/*
Template Name: Discography Single Page
*/
get_header();  ?>

<main class="main music-single" id="main" role="main">
    <div class="container">
        <nav class="menu-sub-pages" role="navigation">
      <?php wp_nav_menu( array(
          'container' => false,
          'theme_location' => 'music-sub'
        )); ?>
    </nav>
    <div class="single-album">
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                <div class="left-single-album">
                    
                    <?php 
                        $image = get_field('album_cover');
                        echo wp_get_attachment_image($image, 'gallery', false, ["loading" => "lazy", "class" => "album-cover"]); 
                        $label = get_field('label');
                       
                    ?>
                    <h3 class="mobile-only content-title"><?php the_title(); ?></h3> 
                    <?php
                        if( have_rows('buy_buttons') ): ?>
                            <button class="discography-buttons-toggle dropdown" aria-haspopup="true" aria-expanded="false">Buy 
                                <span aria-hidden="true">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" class="svg-inline--fa fa-caret-down fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" aria-label="triangle pointing down"><path d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path></svg>
                                </span>
                            </button>

                            <ul class="buy-links discography-button-list dropdown-content">
                            <?php while ( have_rows('buy_buttons') ) : the_row();
                                $icon = get_sub_field('icon');
                                $buttonText = get_sub_field('button_text');
                                $buttonLink = get_sub_field('button_link'); 
                            ?>
                            <li>
                                <a href="<?php echo $buttonLink; ?>" target="_blank" class="buy-listen-button">

                                <?php if ($icon === '1cd'): 
                                    echo 
                                    '<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="compact-disc" class="svg-inline--fa fa-compact-disc fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" aria-label="CD"><path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zM88 256H56c0-105.9 86.1-192 192-192v32c-88.2 0-160 71.8-160 160zm160 96c-53 0-96-43-96-96s43-96 96-96 96 43 96 96-43 96-96 96zm0-128c-17.7 0-32 14.3-32 32s14.3 32 32 32 32-14.3 32-32-14.3-32-32-32z"></path></svg>';
                                endif; 

                                if ($icon === '2cd'): 
                                    echo 
                                    '<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="compact-disc" class="svg-inline--fa fa-compact-disc fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" aria-label="CD"><path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zM88 256H56c0-105.9 86.1-192 192-192v32c-88.2 0-160 71.8-160 160zm160 96c-53 0-96-43-96-96s43-96 96-96 96 43 96 96-43 96-96 96zm0-128c-17.7 0-32 14.3-32 32s14.3 32 32 32 32-14.3 32-32-14.3-32-32-32z"></path></svg>
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="compact-disc" class="svg-inline--fa fa-compact-disc fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" aria-label="CD"><path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zM88 256H56c0-105.9 86.1-192 192-192v32c-88.2 0-160 71.8-160 160zm160 96c-53 0-96-43-96-96s43-96 96-96 96 43 96 96-43 96-96 96zm0-128c-17.7 0-32 14.3-32 32s14.3 32 32 32 32-14.3 32-32-14.3-32-32-32z"></path></svg>';
                                endif; 

                                if ($icon === '1record'): 
                                    echo 
                                    '<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="scrubber" class="svg-inline--fa fa-scrubber fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" aria-label="Vinyl Record"><path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 312c-35.3 0-64-28.7-64-64s28.7-64 64-64 64 28.7 64 64-28.7 64-64 64z"></path></svg>';
                                endif; 

                                if ($icon === '2record'): 
                                    echo 
                                    '<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="scrubber" class="svg-inline--fa fa-scrubber fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" aria-label="Vinyl Record"><path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 312c-35.3 0-64-28.7-64-64s28.7-64 64-64 64 28.7 64 64-28.7 64-64 64z"></path></svg>
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="scrubber" class="svg-inline--fa fa-scrubber fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" aria-label="Vinyl Record"><path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 312c-35.3 0-64-28.7-64-64s28.7-64 64-64 64 28.7 64 64-28.7 64-64 64z"></path></svg>';
                                endif;

                                if ($icon === 'boxset'): 
                                    echo 
                                    '<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="gift" class="svg-inline--fa fa-gift fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" aria-label="Box with a ribbon tied around it"><path d="M32 448c0 17.7 14.3 32 32 32h160V320H32v128zm256 32h160c17.7 0 32-14.3 32-32V320H288v160zm192-320h-42.1c6.2-12.1 10.1-25.5 10.1-40 0-48.5-39.5-88-88-88-41.6 0-68.5 21.3-103 68.3-34.5-47-61.4-68.3-103-68.3-48.5 0-88 39.5-88 88 0 14.5 3.8 27.9 10.1 40H32c-17.7 0-32 14.3-32 32v80c0 8.8 7.2 16 16 16h480c8.8 0 16-7.2 16-16v-80c0-17.7-14.3-32-32-32zm-326.1 0c-22.1 0-40-17.9-40-40s17.9-40 40-40c19.9 0 34.6 3.3 86.1 80h-86.1zm206.1 0h-86.1c51.4-76.5 65.7-80 86.1-80 22.1 0 40 17.9 40 40s-17.9 40-40 40z"></path></svg>';
                                endif; 
                                echo $buttonText; ?>

                                </a>
                            </li>

                        <?php endwhile;
                     echo  '</ul>';
                    else :
                        // no rows found
                    endif;
                    ?>

                    <?php
                        if( have_rows('stream_buttons') ): ?>
                            <button class="discography-buttons-toggle dropdown" aria-haspopup="true" aria-expanded="false">Stream 
                                <span aria-hidden="true">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" class="svg-inline--fa fa-caret-down fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" aria-label="triangle pointing down"><path d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path></svg>
                                </span>
                            </button>

                            <ul class="stream-links discography-button-list dropdown-content">
                            <?php while ( have_rows('stream_buttons') ) : the_row();
                                $icon = get_sub_field('icon');
                                $buttonText = get_sub_field('button_text');
                                $buttonLink = get_sub_field('button_link'); 
                            ?>
                            <li>
                                <a href="<?php echo $buttonLink; ?>" target="_blank" class="buy-listen-button">

                                <?php if ($icon === 'apple'): 
                                    echo 
                                    '<svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="itunes-note" class="svg-inline--fa fa-itunes-note fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" aria-label="i Tunes/ Apple Music"><path d="M381.9 388.2c-6.4 27.4-27.2 42.8-55.1 48-24.5 4.5-44.9 5.6-64.5-10.2-23.9-20.1-24.2-53.4-2.7-74.4 17-16.2 40.9-19.5 76.8-25.8 6-1.1 11.2-2.5 15.6-7.4 6.4-7.2 4.4-4.1 4.4-163.2 0-11.2-5.5-14.3-17-12.3-8.2 1.4-185.7 34.6-185.7 34.6-10.2 2.2-13.4 5.2-13.4 16.7 0 234.7 1.1 223.9-2.5 239.5-4.2 18.2-15.4 31.9-30.2 39.5-16.8 9.3-47.2 13.4-63.4 10.4-43.2-8.1-58.4-58-29.1-86.6 17-16.2 40.9-19.5 76.8-25.8 6-1.1 11.2-2.5 15.6-7.4 10.1-11.5 1.8-256.6 5.2-270.2.8-5.2 3-9.6 7.1-12.9 4.2-3.5 11.8-5.5 13.4-5.5 204-38.2 228.9-43.1 232.4-43.1 11.5-.8 18.1 6 18.1 17.6.2 344.5 1.1 326-1.8 338.5z"></path></svg>';
                                endif; 

                                if ($icon === 'amazon'):  
                                    echo 
                                    '<svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="amazon" class="svg-inline--fa fa-amazon fa-w-14" aria-label="Amazon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M257.2 162.7c-48.7 1.8-169.5 15.5-169.5 117.5 0 109.5 138.3 114 183.5 43.2 6.5 10.2 35.4 37.5 45.3 46.8l56.8-56S341 288.9 341 261.4V114.3C341 89 316.5 32 228.7 32 140.7 32 94 87 94 136.3l73.5 6.8c16.3-49.5 54.2-49.5 54.2-49.5 40.7-.1 35.5 29.8 35.5 69.1zm0 86.8c0 80-84.2 68-84.2 17.2 0-47.2 50.5-56.7 84.2-57.8v40.6zm136 163.5c-7.7 10-70 67-174.5 67S34.2 408.5 9.7 379c-6.8-7.7 1-11.3 5.5-8.3C88.5 415.2 203 488.5 387.7 401c7.5-3.7 13.3 2 5.5 12zm39.8 2.2c-6.5 15.8-16 26.8-21.2 31-5.5 4.5-9.5 2.7-6.5-3.8s19.3-46.5 12.7-55c-6.5-8.3-37-4.3-48-3.2-10.8 1-13 2-14-.3-2.3-5.7 21.7-15.5 37.5-17.5 15.7-1.8 41-.8 46 5.7 3.7 5.1 0 27.1-6.5 43.1z"></path></svg>';
                                endif; 

                                if ($icon === 'googleplay'):  
                                    echo 
                                    '<svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google-play" class="svg-inline--fa fa-google-play fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" aria-label="Google Play"><path d="M325.3 234.3L104.6 13l280.8 161.2-60.1 60.1zM47 0C34 6.8 25.3 19.2 25.3 35.3v441.3c0 16.1 8.7 28.5 21.7 35.3l256.6-256L47 0zm425.2 225.6l-58.9-34.1-65.7 64.5 65.7 64.5 60.1-34.1c18-14.3 18-46.5-1.2-60.8zM104.6 499l280.8-161.2-60.1-60.1L104.6 499z"></path></svg>';
                                endif; 

                                if ($icon === 'spotify'): 
                                    echo 
                                    '<svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="spotify" class="svg-inline--fa fa-spotify fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" aria-label="Spotify"><path d="M248 8C111.1 8 0 119.1 0 256s111.1 248 248 248 248-111.1 248-248S384.9 8 248 8zm100.7 364.9c-4.2 0-6.8-1.3-10.7-3.6-62.4-37.6-135-39.2-206.7-24.5-3.9 1-9 2.6-11.9 2.6-9.7 0-15.8-7.7-15.8-15.8 0-10.3 6.1-15.2 13.6-16.8 81.9-18.1 165.6-16.5 237 26.2 6.1 3.9 9.7 7.4 9.7 16.5s-7.1 15.4-15.2 15.4zm26.9-65.6c-5.2 0-8.7-2.3-12.3-4.2-62.5-37-155.7-51.9-238.6-29.4-4.8 1.3-7.4 2.6-11.9 2.6-10.7 0-19.4-8.7-19.4-19.4s5.2-17.8 15.5-20.7c27.8-7.8 56.2-13.6 97.8-13.6 64.9 0 127.6 16.1 177 45.5 8.1 4.8 11.3 11 11.3 19.7-.1 10.8-8.5 19.5-19.4 19.5zm31-76.2c-5.2 0-8.4-1.3-12.9-3.9-71.2-42.5-198.5-52.7-280.9-29.7-3.6 1-8.1 2.6-12.9 2.6-13.2 0-23.3-10.3-23.3-23.6 0-13.6 8.4-21.3 17.4-23.9 35.2-10.3 74.6-15.2 117.5-15.2 73 0 149.5 15.2 205.4 47.8 7.8 4.5 12.9 10.7 12.9 22.6 0 13.6-11 23.3-23.2 23.3z"></path></svg>';
                                endif;  
                                if ($icon === 'youtube'): 
                                    echo 
                                    '<svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="youtube" class="svg-inline--fa fa-youtube fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg>';
                                endif;  
                                echo $buttonText; ?>
                                </a>
                            </li>

                        <?php endwhile;
                     echo  '</ul>';
                    else :
                        // no rows found
                    endif;
                    ?>

                    <?php if(get_field('album_credits')): ?>
                        <div class="credits">
                        <button class="discography-buttons-toggle dropdown" aria-haspopup="true" aria-expanded="false">Album Credits 
                                <span aria-hidden="true">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" class="svg-inline--fa fa-caret-down fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" aria-label="triangle pointing down"><path d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path></svg>
                                </span>
                            </button>
                            
                            <div class="dropdown-content">
                                <?php the_field('album_credits'); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if(get_field('release_date')): ?>
                        <p class="released">Released: <?php the_field('release_date');?></p>
                    <?php endif; ?>

                    <img class="label" src="<?php echo $label; ?>">
                </div>
                <!-- left-single-album -->

                <div class="right-single-album">
                    <h3 class="content-title album-title-desktop"><?php echo the_title(); ?></h3>
                    <!--Disc name-->                     
                    <?php
                    if( have_rows('disc') ): ?>
                        <?php while ( have_rows('disc') ) : the_row(); ?>
                            <!--Disc name-->
                            <?php if(get_sub_field('disc_number')): ?>
                                <h4 class="disc-number">
                                    <?php the_sub_field('disc_number'); ?>
                                </h4>
                            <?php endif; ?>
                    <div class="tracks">
                        <?php
                        if( have_rows('tracks') ): ?>
                        <ul class="track-list">
                        <?php while ( have_rows('tracks') ) : the_row(); ?>
                        <li class="each-track">
                            <div class="first-three">
                                <div class="track-streaming">
                                        <?php
                                    if( have_rows('track_streaming') ): ?>

                                        <ul>
                                        <?php while ( have_rows('track_streaming') ) : the_row();
                                            $icon = get_sub_field('icon');
                                            $buttonLink = get_sub_field('button_link'); 
                                        ?> 
                                            <li>
                                                <a href="<?php echo $buttonLink; ?>" target="_blank" class="buy-listen-button">
                                                <?php if ($icon === 'apple'): ?>
                                                        <?php echo 
                                                            '<svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="itunes-note" class="svg-inline--fa fa-itunes-note fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" aria-label="i Tunes/ Apple Music"><path d="M381.9 388.2c-6.4 27.4-27.2 42.8-55.1 48-24.5 4.5-44.9 5.6-64.5-10.2-23.9-20.1-24.2-53.4-2.7-74.4 17-16.2 40.9-19.5 76.8-25.8 6-1.1 11.2-2.5 15.6-7.4 6.4-7.2 4.4-4.1 4.4-163.2 0-11.2-5.5-14.3-17-12.3-8.2 1.4-185.7 34.6-185.7 34.6-10.2 2.2-13.4 5.2-13.4 16.7 0 234.7 1.1 223.9-2.5 239.5-4.2 18.2-15.4 31.9-30.2 39.5-16.8 9.3-47.2 13.4-63.4 10.4-43.2-8.1-58.4-58-29.1-86.6 17-16.2 40.9-19.5 76.8-25.8 6-1.1 11.2-2.5 15.6-7.4 10.1-11.5 1.8-256.6 5.2-270.2.8-5.2 3-9.6 7.1-12.9 4.2-3.5 11.8-5.5 13.4-5.5 204-38.2 228.9-43.1 232.4-43.1 11.5-.8 18.1 6 18.1 17.6.2 344.5 1.1 326-1.8 338.5z"></path></svg>';
                                                        ?>
                                                    <?php endif; ?>

                                                    <?php if ($icon === 'amazon'): ?>
                                                        <?php echo 
                                                            '<svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="amazon" class="svg-inline--fa fa-amazon fa-w-14" aria-label="Amazon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M257.2 162.7c-48.7 1.8-169.5 15.5-169.5 117.5 0 109.5 138.3 114 183.5 43.2 6.5 10.2 35.4 37.5 45.3 46.8l56.8-56S341 288.9 341 261.4V114.3C341 89 316.5 32 228.7 32 140.7 32 94 87 94 136.3l73.5 6.8c16.3-49.5 54.2-49.5 54.2-49.5 40.7-.1 35.5 29.8 35.5 69.1zm0 86.8c0 80-84.2 68-84.2 17.2 0-47.2 50.5-56.7 84.2-57.8v40.6zm136 163.5c-7.7 10-70 67-174.5 67S34.2 408.5 9.7 379c-6.8-7.7 1-11.3 5.5-8.3C88.5 415.2 203 488.5 387.7 401c7.5-3.7 13.3 2 5.5 12zm39.8 2.2c-6.5 15.8-16 26.8-21.2 31-5.5 4.5-9.5 2.7-6.5-3.8s19.3-46.5 12.7-55c-6.5-8.3-37-4.3-48-3.2-10.8 1-13 2-14-.3-2.3-5.7 21.7-15.5 37.5-17.5 15.7-1.8 41-.8 46 5.7 3.7 5.1 0 27.1-6.5 43.1z"></path></svg>';
                                                        ?>
                                                    <?php endif; ?>

                                                

                                                    <?php if ($icon === 'spotify'): ?>
                                                        <?php echo 
                                                            '<svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="spotify" class="svg-inline--fa fa-spotify fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" aria-label="Spotify"><path d="M248 8C111.1 8 0 119.1 0 256s111.1 248 248 248 248-111.1 248-248S384.9 8 248 8zm100.7 364.9c-4.2 0-6.8-1.3-10.7-3.6-62.4-37.6-135-39.2-206.7-24.5-3.9 1-9 2.6-11.9 2.6-9.7 0-15.8-7.7-15.8-15.8 0-10.3 6.1-15.2 13.6-16.8 81.9-18.1 165.6-16.5 237 26.2 6.1 3.9 9.7 7.4 9.7 16.5s-7.1 15.4-15.2 15.4zm26.9-65.6c-5.2 0-8.7-2.3-12.3-4.2-62.5-37-155.7-51.9-238.6-29.4-4.8 1.3-7.4 2.6-11.9 2.6-10.7 0-19.4-8.7-19.4-19.4s5.2-17.8 15.5-20.7c27.8-7.8 56.2-13.6 97.8-13.6 64.9 0 127.6 16.1 177 45.5 8.1 4.8 11.3 11 11.3 19.7-.1 10.8-8.5 19.5-19.4 19.5zm31-76.2c-5.2 0-8.4-1.3-12.9-3.9-71.2-42.5-198.5-52.7-280.9-29.7-3.6 1-8.1 2.6-12.9 2.6-13.2 0-23.3-10.3-23.3-23.6 0-13.6 8.4-21.3 17.4-23.9 35.2-10.3 74.6-15.2 117.5-15.2 73 0 149.5 15.2 205.4 47.8 7.8 4.5 12.9 10.7 12.9 22.6 0 13.6-11 23.3-23.2 23.3z"></path></svg>';
                                                        ?>
                                                    <?php endif; ?>
                                                
                                                </a>
                                            </li>


                                    <?php endwhile;
                                echo  '</ul>';
                                else :
                                    // no rows found
                                endif;
                                ?>
                                </div>
                                <div class="number-title">
                                    <p class="track-number"><?php the_sub_field('track_number');?>.</p>
                                    <p class="track-name"><?php the_sub_field('track_name');?></p>
                                </div>
                            </div>
                            <div class="track-lyrics">
                                <?php $i++; ?>
                                <?php if( get_sub_field('track_lyrics') ): ?>
                                <button class="lyrics-header dropdown" title="Lyrics for <?php the_sub_field('track_name');?>" aria-expanded="false" id="lyrics-header<?php echo $i; ?>" aria-controls="lyrics-content<?php echo $i; ?>">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="book" class="book-closed" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" aria-label="Book"><path d="M448 360V24c0-13.3-10.7-24-24-24H96C43 0 0 43 0 96v320c0 53 43 96 96 96h328c13.3 0 24-10.7 24-24v-16c0-7.5-3.5-14.3-8.9-18.7-4.2-15.4-4.2-59.3 0-74.7 5.4-4.3 8.9-11.1 8.9-18.6zM128 134c0-3.3 2.7-6 6-6h212c3.3 0 6 2.7 6 6v20c0 3.3-2.7 6-6 6H134c-3.3 0-6-2.7-6-6v-20zm0 64c0-3.3 2.7-6 6-6h212c3.3 0 6 2.7 6 6v20c0 3.3-2.7 6-6 6H134c-3.3 0-6-2.7-6-6v-20zm253.4 250H96c-17.7 0-32-14.3-32-32 0-17.6 14.4-32 32-32h285.4c-1.9 17.1-1.9 46.9 0 64z"></path></svg>
                                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="readme" class="book-open" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" aria-label="Read more"><path d="M528.3 46.5H388.5c-48.1 0-89.9 33.3-100.4 80.3-10.6-47-52.3-80.3-100.4-80.3H48c-26.5 0-48 21.5-48 48v245.8c0 26.5 21.5 48 48 48h89.7c102.2 0 132.7 24.4 147.3 75 .7 2.8 5.2 2.8 6 0 14.7-50.6 45.2-75 147.3-75H528c26.5 0 48-21.5 48-48V94.6c0-26.4-21.3-47.9-47.7-48.1zM242 311.9c0 1.9-1.5 3.5-3.5 3.5H78.2c-1.9 0-3.5-1.5-3.5-3.5V289c0-1.9 1.5-3.5 3.5-3.5h160.4c1.9 0 3.5 1.5 3.5 3.5v22.9zm0-60.9c0 1.9-1.5 3.5-3.5 3.5H78.2c-1.9 0-3.5-1.5-3.5-3.5v-22.9c0-1.9 1.5-3.5 3.5-3.5h160.4c1.9 0 3.5 1.5 3.5 3.5V251zm0-60.9c0 1.9-1.5 3.5-3.5 3.5H78.2c-1.9 0-3.5-1.5-3.5-3.5v-22.9c0-1.9 1.5-3.5 3.5-3.5h160.4c1.9 0 3.5 1.5 3.5 3.5v22.9zm259.3 121.7c0 1.9-1.5 3.5-3.5 3.5H337.5c-1.9 0-3.5-1.5-3.5-3.5v-22.9c0-1.9 1.5-3.5 3.5-3.5h160.4c1.9 0 3.5 1.5 3.5 3.5v22.9zm0-60.9c0 1.9-1.5 3.5-3.5 3.5H337.5c-1.9 0-3.5-1.5-3.5-3.5V228c0-1.9 1.5-3.5 3.5-3.5h160.4c1.9 0 3.5 1.5 3.5 3.5v22.9zm0-60.9c0 1.9-1.5 3.5-3.5 3.5H337.5c-1.9 0-3.5-1.5-3.5-3.5v-22.8c0-1.9 1.5-3.5 3.5-3.5h160.4c1.9 0 3.5 1.5 3.5 3.5V190z"></path></svg>
                                    Lyrics
                                    <span class="screen-reader-text"> for <?php the_sub_field('track_name');?></span>
                                </button> 
                                <div class="lyrics dropdownContent" id="lyrics-content<?php echo $i; ?>"><?php the_sub_field('track_lyrics');?></div>
                                <?php endif; ?>
                            </div>
                        </li>
                        <?php endwhile; ?>     
                    </ul>
                    <?php endif;?>
                </div> 
                    <!-- tracks -->
            <?php endwhile; ?>
            <?php endif;?>
            <!-- / disc name -->   
        </div> 
        <!-- right-single-album -->
    <?php endwhile; ?>
        </div> 
        <!-- single-album -->
    </div> 
    <!-- container -->
</main>

<?php get_footer(); ?>