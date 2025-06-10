<?php

/** Tell WordPress to run theme_setup() when the 'after_setup_theme' hook is run. */

if ( ! function_exists( 'theme_setup' ) ):

function theme_setup() {

	/* This theme uses post thumbnails (aka "featured images")
	*  all images will be cropped to thumbnail size (below), as well as
	*  a square size (also below). You can add more of your own crop
	*  sizes with add_image_size. */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size(120, 90, true);
	add_image_size('gallery', 400, 400, true);
	add_image_size('square', 150, 150, true);
	add_image_size('homeHero', 1600, false);
	add_image_size('containerWidth', 1070, false);
	add_image_size('containerWidthHalf', 535, false);


	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// add option to upload logo in theme customizer
	add_theme_support( 'custom-logo' );


	/* This theme uses wp_nav_menu() in one location.
	* You can allow clients to create multiple menus by
  * adding additional menus to the array. */
	register_nav_menus( array(
		'primary-left' => 'Primary-left',
		'primary-right' => 'Primary-right',
		'footer' => 'Footer',
		'news-sub' => 'News Sub Nav',
		'music-sub' => 'Music Sub Nav',
		'bio-sub' => 'Bio Sub Nav',
		'benefit-sub' => 'Benefit Sub Nav',
		'benefit-history-sub' => 'Benefit History Nav',
		'guest-discography-sub' => 'Guest Discography Sub',
		'tour-history-sub' => 'Tour History Sub',
		'video-sub' => 'Video Sub'
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
}
endif;

add_action( 'after_setup_theme', 'theme_setup' );

/* Add all our CSS files here.
We'll let WordPress add them to our templates automatically instead
of writing our own link tags in the header. */

function theme_styles(){
	
	wp_enqueue_style('typekit', 'https://use.typekit.net/lec1ntr.css', array(), null);
	wp_enqueue_style('style', get_stylesheet_uri(), array(), null );
}

add_action( 'wp_enqueue_scripts', 'theme_styles');
/* Add all our JavaScript files here.
We'll let WordPress add them to our templates automatically instead
of writing our own script tags in the header and footer. */

function theme_scripts() {

	//Don't use WordPress' local copy of jquery, load our own version from a CDN instead
	wp_deregister_script('jquery');
  wp_enqueue_script(
  	'jquery',
  	"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js",
  	false, //dependencies
  	null, //version number
  	false //load in footer
  );

  wp_enqueue_script(
	'jquery-cookies',
	"https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js",
	false, //dependencies
	null, //version number
	false //load in footer
);

wp_enqueue_script(
	'ocm', //handle
	get_template_directory_uri() . '/js/working-js/occ.membership.js', //source
	false, //dependencies
	null, // version number
	true //load in footer
	);
  wp_enqueue_script( 
    'scripts', //handle
    get_template_directory_uri() . '/js/compiled-js/main.min.js', //source
    array( 'jquery', ), //dependencies
    null, // version number
    true //load in footer
  );
  
  // Enqueue our custom OCC2Widget helper
  wp_enqueue_script(
    'occ2-widget-helper',
    get_template_directory_uri() . '/js/working-js/occ2-widget-helper.js',
    array('jquery'),
    filemtime(get_template_directory() . '/js/working-js/occ2-widget-helper.js'),
    true
  );
  
  // Don't load the original widget.js file that's trying to use a global OCC2Widget
  // wp_enqueue_script(
  //   'occ2-widget-vanilla',
  //   get_template_directory_uri() . '/js/working-js/widget.js',
  //   array('jquery'),
  //   null,
  //   true
  // );
}

add_action( 'wp_enqueue_scripts', 'theme_scripts');

function enqueue_occ2_widget() {
    // Enqueue the OCC2Widget CSS file
    wp_enqueue_style(
        'occ2-widget-styles',
        get_template_directory_uri() . '/css/occ2-widget.css',
        array(),
        filemtime(get_template_directory() . '/css/occ2-widget.css'),
        'all'
    );
    
    // Enqueue our bundled script that includes React
    wp_enqueue_script(
        'occ2-widget-bundle',
        get_template_directory_uri() . '/dist/bundle.js',
        array(),
        filemtime(get_template_directory() . '/dist/bundle.js'),
        true
    );

    // Enqueue vendor chunks if they exist
    wp_enqueue_script(
        'occ2-widget-vendors-1',
        get_template_directory_uri() . '/dist/338.bundle.js',
        array('occ2-widget-bundle'),
        filemtime(get_template_directory() . '/dist/338.bundle.js'),
        true
    );
    
    wp_enqueue_script(
        'occ2-widget-vendors-2',
        get_template_directory_uri() . '/dist/494.bundle.js',
        array('occ2-widget-bundle'),
        filemtime(get_template_directory() . '/dist/494.bundle.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'enqueue_occ2_widget');


/* Custom Options Page */
if( function_exists('acf_add_options_page') ) {

/* General Theme Custom Fields to live here */	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}


/* Custom Title Tags */

function offcomm_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() ) {
		return $title;
	}

	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}

	// Add a page number if necessary.
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		$title = "$title $sep " . sprintf( __( 'Page %s', 'offcomm' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'offcomm_wp_title', 10, 2 );

/*
  Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 */
function offcomm_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'offcomm_page_menu_args' );


/*
 * Sets the post excerpt length to 40 characters.
 */
function offcomm_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'offcomm_excerpt_length' );

/*
 * Returns a "Continue Reading" link for excerpts
 */
function offcomm_continue_reading_link() {
	return ' <br><a class="button-style-2" href="'. get_permalink() . '">Continue Reading</a>';
}

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and offcomm_continue_reading_link().
 */
function offcomm_auto_excerpt_more( $more ) {
	return '&nbsp;&hellip;' . offcomm_continue_reading_link();
}
add_filter( 'excerpt_more', 'offcomm_auto_excerpt_more' );


/*
 * Register a single widget area.
 * You can register additional widget areas by using register_sidebar again
 * within offcomm_widgets_init.
 * Display in your template with dynamic_sidebar()
 */
function offcomm_widgets_init() {
	// Area 1, located at the top of the sidebar.
	register_sidebar( array(
		'name' => 'Primary Widget Area',
		'id' => 'primary-widget-area',
		'description' => 'The primary widget area',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

}

add_action( 'widgets_init', 'offcomm_widgets_init' );

/**
 * Removes the default styles that are packaged with the Recent Comments widget.
 */
function offcomm_remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}
add_action( 'widgets_init', 'offcomm_remove_recent_comments_style' );


if ( ! function_exists( 'offcomm_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post—date/time and author.
 */
function offcomm_posted_on() {
	printf('<span class="%1$s">Posted on:</span> %2$s  %3$s',
		'meta-prep meta-prep-author',
		sprintf( '<span class="entry-date">%3$s</span>',
			get_permalink(),
			esc_attr( get_the_time() ),
			get_the_date()
		),
		sprintf( '',
			get_author_posts_url( get_the_author_meta( 'ID' ) ),
			sprintf( esc_attr( 'View all posts by %s'), get_the_author() ),
			get_the_author()
		)
	);
}
endif;

if ( ! function_exists( 'offcomm_posted_in' ) ) :
/**
 * Prints HTML with meta information for the current post (category, tags and permalink).
 */
function offcomm_posted_in() {
	// Retrieves tag list of current post, separated by commas.
	$tag_list = get_the_tag_list( '', ', ' );
	if ( $tag_list ) {
		$posted_in = 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.';
	} elseif ( is_object_in_taxonomy( get_post_type(), 'category' ) ) {
		$posted_in = 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.';
	} else {
		$posted_in = 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.';
	}
	// Prints the string, replacing the placeholders.
	printf(
		$posted_in,
		get_the_category_list( ', ' ),
		$tag_list,
		get_permalink(),
		the_title_attribute( 'echo=0' )
	);
}
endif;


/* Automatically set the image Title, Alt-Text, Caption & Description upon upload */
add_action( 'add_attachment', 'my_set_image_meta_upon_image_upload' );
function my_set_image_meta_upon_image_upload( $post_ID ) {

	// Check if uploaded file is an image, else do nothing

	if ( wp_attachment_is_image( $post_ID ) ) {

		$my_image_title = get_post( $post_ID )->post_title;

		// Sanitize the title:  remove hyphens, underscores & extra spaces:
		$my_image_title = preg_replace( '%\s*[-_\s]+\s*%', ' ',  $my_image_title );

		// Sanitize the title:  capitalize first letter of every word (other letters lower case):
		$my_image_title = ucwords( strtolower( $my_image_title ) );

		// Create an array with the image meta (Title, Caption, Description) to be updated
		// Note:  comment out the Excerpt/Caption or Content/Description lines if not needed
		$my_image_meta = array(
			'ID'		=> $post_ID,			// Specify the image (ID) to be updated
			'post_title'	=> $my_image_title,		// Set image Title to sanitized title
			'post_excerpt'	=> $my_image_title,		// Set image Caption (Excerpt) to sanitized title
			'post_content'	=> $my_image_title,		// Set image Description (Content) to sanitized title
		);

		// Set the image Alt-Text
		update_post_meta( $post_ID, '_wp_attachment_image_alt', $my_image_title );

		// Set the image meta (e.g. Title, Excerpt, Content)
		wp_update_post( $my_image_meta );

	} 
}

/* Removes Category:, Tag:, Archive: from archive_title() */
add_filter( 'get_the_archive_title', function ($title) {

    if ( is_category() ) {

            $title = single_cat_title( '', false );

        } elseif ( is_tag() ) {

            $title = single_tag_title( '', false );

        } elseif ( is_author() ) {

            $title = '<span class="vcard">' . get_the_author() . '</span>' ;

        }

    return $title;

});

/* Get rid of junk! - Gets rid of all the stuff in the header that you dont need */

function clean_stuff_up() {
	// windows live
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	// wordpress gen tag
	remove_action('wp_head', 'wp_generator');
	// comments RSS
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	remove_action( 'wp_head', 'feed_links', 3 );
	// REMOVE WP EMOJI
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('wp_print_styles', 'print_emoji_styles');

	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
}

add_action('init', 'clean_stuff_up');


/* Here are some utility helper functions for use in your templates! */

/* pre_r() - makes for easy debugging. <?php pre_r($post); ?> */
function pre_r($obj) {
	echo "<pre>";
	print_r($obj);
	echo "</pre>";
}

/* is_blog() - checks various conditionals to figure out if you are currently within a blog page */
function is_blog () {
	global  $post;
	$posttype = get_post_type($post );
	return ( ((is_archive()) || (is_author()) || (is_category()) || (is_home()) || (is_single()) || (is_tag())) && ( $posttype == 'post')  ) ? true : false ;
}

// pagination for landing page of past tour dates (page-tour-archive.php)
function custom_pagination($numpages = '', $pagerange = '', $paged='') {
    if (empty($pagerange)) {
        $pagerange = 2;
    }
    global $paged;
    if (empty($paged)) {
        $paged = 1;
    }
    if ($numpages == '') {
        global $wp_query;
        $numpages = $wp_query->max_num_pages;
        if(!$numpages) {
            $numpages = 1;
        }
    }
 
    $pagination_args = array(
        'base'            => get_pagenum_link(1) . '%_%',
        'format'          => 'page/%#%',
        'total'           => $numpages,
        'current'         => $paged,
        'show_all'        => False,
        'end_size'        => 1,
        'mid_size'        => $pagerange,
        'prev_next'       => True,
        'prev_text'       => __('<span class="screen-reader-text">Previous Posts</span> <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-8" role="img" aria-label-="Previous" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M231.293 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L70.393 256 251.092 74.87c4.686-4.686 4.686-12.284 0-16.971L231.293 38.1c-4.686-4.686-12.284-4.686-16.971 0L4.908 247.515c-4.686 4.686-4.686 12.284 0 16.971L214.322 473.9c4.687 4.686 12.285 4.686 16.971-.001z"></path></svg>'),
        'next_text'       => __('<span class="screen-reader-text">Next Posts</span><svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-8" role="img" aria-label="Next" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z"></path></svg><span class="screen-reader-text">'),
        'type'            => 'plain',
        'add_args'        => false,
        'add_fragment'    => '',
        'post_type'       => 'tour_archive' 
    );
 
    $paginate_links = paginate_links($pagination_args);
 
    if ($paginate_links) {
        echo "<div class='pagination-detail'>Tour Archive: Page " . $paged . " of " . $numpages . "</div><!-- pagination-detail --> ";
        echo "<div class='pagination-links'><nav class='navigation pagination' aria-label='Navigation to previous and next pages of results'><div class='nav-links'>" . $paginate_links . "</div><!-- nav-links --></nav></div><!-- pagination-links --> ";
    }
}

// pagination for yearly archives of past tour dates (archive-tour_archive.php)
//
//NOTE if creating a custom post type, that post type's "has archive" MUST be set to true in order for this pagination to work
//
add_action( 'pre_get_posts' ,'occ_query_post_type_tour_archive', 1, 1 );
function occ_query_post_type_tour_archive( $query )
{
    if ( ! is_admin() && is_post_type_archive( 'tour_archive' ) && $query->is_main_query() )
    {
        $query->set( 'posts_per_page', 25 ); //set query arg ( key, value )
	}
}

//DISABLE GRAVITY FORMS EMAIL NOTIFICATION 
add_filter( 'gform_disable_notification', 'disable_notification', 10, 4 );
function disable_notification( $is_disabled, $notification, $form, $entry ) {
	return true;
}

//Exclude node modules from all in one plugin migration
add_filter('ai1wm_exclude_content_from_export', function($exclude_filters) {
	$exclude_filters[] = 'themes/bonnieraitt/node_modules';
	return $exclude_filters;
});

function occ_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'occ_add_woocommerce_support' );

// RESTRICT THE ADDRESS1 AND ADDRESS2 FIELDS IN CHECKOUT TO 64 CHARACTERS
add_filter('woocommerce_default_address_fields','custom_default_address_fields');
function custom_default_address_fields($fields){
	$fields['address_1']['custom_attributes'] = array(
	'maxlength' => 50
	);
	$fields['address_2']['custom_attributes'] = array(
	'maxlength' => 50
	);
	return $fields;
}
