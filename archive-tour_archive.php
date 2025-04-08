<?php 
/*
  Template Name:  Past Shows Archive By Year Page
*/
get_header();  ?>

<?php 
    //This is the yearly archive page template for showing all past shows according to their year.
    //
    //Also see template: page-tour-archive.php for the landing page showing all years
?>

<main class="main past-shows-archive" id="main">
  	<div class="container">
    	
        <?php if ( have_posts() ) the_post(); ?>
        <h2 class="content-title">
        <?php if ( is_day() ) : ?>
            Daily Archives: <?php the_date(); ?>
        <?php elseif ( is_month() ) : ?>
            Monthly Archives: <?php the_date('F Y'); ?>
        <?php elseif ( is_year() ) : ?>
            Tour Archive <span class="past-shows-year"><?php the_date('Y'); ?></span>
        <?php else : ?>
            Blog Archives
        <?php endif; ?>
        </h2>

        <div class="tour-archive-wrapper">
            <div class="tour-archive-main"> 
                <table class="tour-archive-table">
                    <thead>  
                        <tr>
                            <th class="date" scope="col">Date</th>
                            <th class="city" scope="col">City</th>
                            <th class="venue" scope="col">Venue</th>
                            <th class="set-list" scope="col">Setlist</th>
                        </tr>
                    </thead>

                    <?php
    
                        $archiveYear = get_the_date('Y');
                        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                       
                        $tour_archives_query = new WP_Query(array(
                            'post_type' => 'tour_archive',
                            'posts_per_page' => 25,
                            'paged' => $paged,
                            'orderby' => 'post_date',
                            'order' => 'ASC',
                            'year' => $archiveYear       
                        )); 
                    ?>

                    <?php $i = 0; ?>

                    <?php while ( $tour_archives_query->have_posts() ) :
                    $tour_archives_query->the_post(); ?>

                    <?php 
                        $setList = get_field('setlist');
                        $postDate = get_the_date();
                    ?>

                    <tr>
                        <td>
                            <?php echo($postDate);?>
                        </td>
                        <td>
                            <?php the_field('city'); ?>
                        </td>
                        <td>
                            <?php the_field('venue'); ?>
                        </td>
                        <td class="set-list-container">
                        <?php if($setList): ?>
                            <?php $i++; ?>
                            <button class="set-list-button dropdown button-style-1" title="Set List for <?php echo($postDate);?>" aria-label="Open the set list for <?php echo($postDate);?>" aria-expanded="false" aria-controls="setListContent<?php echo $i; ?>" id="setlistButton<?php echo $i; ?>" aria-haspopup="true">
                                View Set List
                                <span aria-hidden="true">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" class="svg-inline--fa fa-caret-down fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" aria-label="triangle pointing down"><path d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path></svg>
                                </span>
                            </button>
                            
                            <div class="set-list-content dropdown-content" id="setListContent<?php echo $i; ?>">
                                <?php the_field('setlist'); ?>
                            </div>
                        <?php endif; ?>
                        </td>
                    </tr>

                    <?php endwhile; ?>

                </table>

                <div class="pagination-wrapper">
                    <div class="pagination-detail">
                        <?php 
                            $current_page = get_query_var( 'paged' );
                            global $wp_query;
                            $pages = $wp_query->max_num_pages;
                            if($current_page == 0):
                            echo ($archiveYear. ' Tour Archive: Page 1 of ' . $pages);
                            else: 


                            echo ($archiveYear. ' Tour Archive: Page ' . $current_page . ' of ' . $pages);

                            endif;

                        ?>
                    </div>
                    <!-- pagination-detail -->
                    <div class="pagination-links">
                        <?php
                        the_posts_pagination( array(
                            'mid_size'  => 2,
                            'prev_text' => '<span class="screen-reader-text">Previous Posts</span> <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-8" role="img" aria-label-="Previous" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M231.293 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L70.393 256 251.092 74.87c4.686-4.686 4.686-12.284 0-16.971L231.293 38.1c-4.686-4.686-12.284-4.686-16.971 0L4.908 247.515c-4.686 4.686-4.686 12.284 0 16.971L214.322 473.9c4.687 4.686 12.285 4.686 16.971-.001z"></path></svg>',
                            'next_text' => '<span class="screen-reader-text">Next Posts</span><svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-8" role="img" aria-label="Next" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z"></path></svg><span class="screen-reader-text">',
                        ) );
                    ?>
                    </div>
                    <!-- pagination-links -->
               </div>
               <!-- pagination-wrapper -->
                
            </div>
            <!-- tour-archive-main -->

            <div class="tour-archive-sidebar">
                <div class="archives-nav">
                    <h3>Yearly Archives</h3>
                    <ul>
                        <nav role="navigation" aria-label="archives of past shows by year">
                            <?php wp_get_archives(array(
                                'type' => 'yearly',
                                'post_type' => 'tour_archive'
                            )); ?> 
                        </nav>
                    </ul>
                </div>
                <!-- archives-nav -->
            </div>
            <!-- tour-archive-sidebar -->
        </div>
        <!-- tour-archive-wrapper -->
    </div> 
    <!-- container -->
</main> 
<?php get_footer(); ?>