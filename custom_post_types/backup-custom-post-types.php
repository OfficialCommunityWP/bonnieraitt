<?php 

// READ THIS SECTION: 
//This is the backup php version of custom post types created for the starter theme. 
//
// TO IMPORT POST TYPES:
// SEE INSTEAD IN THIS THEME /custom_post_types/cpt-import-all.txt to import post types directly into the admin.
// (In the admin: CPT UI => Tools => paste contents of cpt-import-all.txt to import )
//
// If need be, the below php would be added to functions.php instead of importing the post types directly to the plugin CPT UI. 
//
// Latest version of plugin CPT UI will need to first be activated.
//
//If you are adding a new unique custom post type, please use the plugins CPT UI and ACF PRO to build what you need from scratch within the admin.

function cptui_register_my_cpts() {

	/**
	 * Post Type: Home Hero Slides.
	 */

	$labels = [
		"name" => __( "Home Hero Slides", "custom-post-type-ui" ),
		"singular_name" => __( "Home Hero Slide", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Home Hero Slides", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "home-hero", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-images-alt2",
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "home-hero", $args );

	/**
	 * Post Type: Discography Items.
	 */

	$labels = [
		"name" => __( "Discography Items", "custom-post-type-ui" ),
		"singular_name" => __( "Discography Item", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Discography Items", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "discography", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-format-audio",
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "discography", $args );

	/**
	 * Post Type: Videos.
	 */

	$labels = [
		"name" => __( "Videos", "custom-post-type-ui" ),
		"singular_name" => __( "Video", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Videos", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "videos", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-youtube",
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "videos", $args );

	/**
	 * Post Type: Galleries.
	 */

	$labels = [
		"name" => __( "Galleries", "custom-post-type-ui" ),
		"singular_name" => __( "Gallery", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Galleries", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "gallery", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-images-alt",
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "gallery", $args );

	/**
	 * Post Type: Tour Archives.
	 */

	$labels = [
		"name" => __( "Tour Archives", "custom-post-type-ui" ),
		"singular_name" => __( "Tour Archive", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Tour Archives", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "tour_archive", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-airplane",
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "tour_archive", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
