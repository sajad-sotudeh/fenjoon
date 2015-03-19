<?php
//******************************************
//Basic Setup
//******************************************
function fenjoon_setup(){
	// Make fenjoon available for translation.
	load_theme_textdomain('fenjoon', get_template_directory().'/lang');
	// Add support for thumbnails
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'fenjoon_setup' );
//******************************************
//CPT - Site Type
//******************************************
function cpt_sitetype(){
	$labels = array(
		'name'                => _x( 'Sitetypes', 'fenjoon' ),
		'singular_name'       => _x( 'Sitetype', 'fenjoon' ),
		'menu_name'           => __( 'Sitetypes', 'fenjoon' ),
		'parent_item_colon'   => __( 'Parent Sitetype', 'fenjoon' ),
		'all_items'           => __( 'All Sitetypes', 'fenjoon' ),
		'view_item'           => __( 'View Sitetypes', 'fenjoon' ),
		'add_new_item'        => __( 'Add New Sitetype', 'fenjoon' ),
		'add_new'             => __( 'Add New', 'fenjoon' ),
		'edit_item'           => __( 'Edit Sitetype', 'fenjoon' ),
		'update_item'         => __( 'Update Sitetype', 'fenjoon' ),
		'search_items'        => __( 'Search Sitetype', 'fenjoon' ),
		'not_found'           => __( 'Not found', 'fenjoon' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'fenjoon' ),
	);
	$args = array(
		'label'               => __( 'sitetypes', 'fenjoon' ),
		'description'         => __( 'Different site types, our team may design and develop', 'fenjoon' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'excerpt', 'editor', 'thumbnail' ),
		'taxonomies'          => array( 'post_tag' ),
		'hierarchical'        => false,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'						=> 'dashicons-welcome-widgets-menus',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'sitetype', $args );
}
// Hook into the 'init' action
add_action( 'init', 'cpt_sitetype', 0 );

//******************************************
//CPT - Attributes
//******************************************
function cpt_attributes(){
	$labels = array(
		'name'                => _x( 'Attributes', 'fenjoon' ),
		'singular_name'       => _x( 'Attributes', 'fenjoon' ),
		'menu_name'           => __( 'Attributes', 'fenjoon' ),
		'parent_item_colon'   => __( 'Parent Sitetype', 'fenjoon' ),
		'all_items'           => __( 'All Sitetypes', 'fenjoon' ),
		'view_item'           => __( 'View Sitetypes', 'fenjoon' ),
		'add_new_item'        => __( 'Add New Sitetype', 'fenjoon' ),
		'add_new'             => __( 'Add New', 'fenjoon' ),
		'edit_item'           => __( 'Edit Sitetype', 'fenjoon' ),
		'update_item'         => __( 'Update Sitetype', 'fenjoon' ),
		'search_items'        => __( 'Search Sitetype', 'fenjoon' ),
		'not_found'           => __( 'Not found', 'fenjoon' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'fenjoon' ),
	);
	$args = array(
		'label'               => __( 'Attributes', 'fenjoon' ),
		'description'         => __( 'Different Attributes, our team may design and develop', 'fenjoon' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'excerpt', 'editor', 'thumbnail' ),
		'taxonomies'          => array( 'post_tag' ),
		'hierarchical'        => false,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'						=> 'dashicons-welcome-widgets-menus',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'Attributes', $args );
}
// Hook into the 'init' action
add_action( 'init', 'cpt_attributes', 0 );

//******************************************
//CPT - Features
//******************************************
function cpt_features(){
	$labels = array(
		'name'                => _x( 'Features', 'fenjoon' ),
		'singular_name'       => _x( 'Features', 'fenjoon' ),
		'menu_name'           => __( 'Features', 'fenjoon' ),
		'parent_item_colon'   => __( 'Parent Sitetype', 'fenjoon' ),
		'all_items'           => __( 'All Sitetypes', 'fenjoon' ),
		'view_item'           => __( 'View Sitetypes', 'fenjoon' ),
		'add_new_item'        => __( 'Add New Sitetype', 'fenjoon' ),
		'add_new'             => __( 'Add New', 'fenjoon' ),
		'edit_item'           => __( 'Edit Sitetype', 'fenjoon' ),
		'update_item'         => __( 'Update Sitetype', 'fenjoon' ),
		'search_items'        => __( 'Search Sitetype', 'fenjoon' ),
		'not_found'           => __( 'Not found', 'fenjoon' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'fenjoon' ),
	);
	$args = array(
		'label'               => __( 'Features', 'fenjoon' ),
		'description'         => __( 'Different Features, our team may design and develop', 'fenjoon' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'excerpt', 'editor', 'thumbnail' ),
		'taxonomies'          => array( 'post_tag' ),
		'hierarchical'        => false,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'						=> 'dashicons-welcome-widgets-menus',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'Features', $args );
}
// Hook into the 'init' action
add_action( 'init', 'cpt_features', 0 );
?>