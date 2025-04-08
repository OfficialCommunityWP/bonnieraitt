<?php

/*
	Template Name: Past Shows Landing Page
*/

get_header();  ?>

<?php 
    //This is the landing page template for showing all past shows.
    //
    //Also see template: archive-tour_archive.php for the archive by year functionality
?>

<main id="main" role="main" class="main past-shows-landing">
    <div class="container">
        <h2 class="content-title"><?php the_title(); ?></h2> 

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
                        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                        $tour_archives_query = new WP_Query(array(
                            'post_type' => 'tour_archive',
                            'posts_per_page' => 25,
                            'paged' => $paged,
                            'orderby' => 'post_date'
                    )); ?>

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

                <?php if (function_exists('custom_pagination')) { ?>
                    <div class="pagination-wrapper">
                        <?php custom_pagination($tour_archives_query->max_num_pages, "", $paged); ?>
                    </div>
                    <!-- pagination-wrapper -->
                <?php } ?>
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