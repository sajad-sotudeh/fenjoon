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
		'menu_icon'			  => 'dashicons-welcome-widgets-menus',
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
		'parent_item_colon'   => __( 'Parent Attribute', 'fenjoon' ),
		'all_items'           => __( 'All Attributes', 'fenjoon' ),
		'view_item'           => __( 'View Attributes', 'fenjoon' ),
		'add_new_item'        => __( 'Add New Attribute', 'fenjoon' ),
		'add_new'             => __( 'Add New', 'fenjoon' ),
		'edit_item'           => __( 'Edit Attribute', 'fenjoon' ),
		'update_item'         => __( 'Update Attributes', 'fenjoon' ),
		'search_items'        => __( 'Search Attributes', 'fenjoon' ),
		'not_found'           => __( 'Not found', 'fenjoon' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'fenjoon' ),
	);
	$args = array(
		'label'               => __( 'Attributes', 'fenjoon' ),
		'description'         => __( 'Different Attributes, our team may design and develop', 'fenjoon' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'excerpt', 'editor', 'thumbnail','page-attributes' ),
		'taxonomies'          => array( 'post_tag' ),
		'hierarchical'        => true,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'			  => 'dashicons-welcome-widgets-menus',
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
		'parent_item_colon'   => __( 'Parent Feature', 'fenjoon' ),
		'all_items'           => __( 'All Features', 'fenjoon' ),
		'view_item'           => __( 'View Features', 'fenjoon' ),
		'add_new_item'        => __( 'Add New Feature', 'fenjoon' ),
		'add_new'             => __( 'Add New', 'fenjoon' ),
		'edit_item'           => __( 'Edit Feature', 'fenjoon' ),
		'update_item'         => __( 'Update Feature', 'fenjoon' ),
		'search_items'        => __( 'Search Feature', 'fenjoon' ),
		'not_found'           => __( 'Not found', 'fenjoon' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'fenjoon' ),
	);
	$args = array(
		'label'               => __( 'Features', 'fenjoon' ),
		'description'         => __( 'Different Features, our team may design and develop', 'fenjoon' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'excerpt', 'editor', 'thumbnail' ,'page-attributes'),
		'taxonomies'          => array( 'post_tag' ),
		'hierarchical'        => true,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'			  => 'dashicons-welcome-widgets-menus',
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


//******************************************
//CPT - Modules
//******************************************
function cpt_modules(){
	$labels = array(
		'name'                => _x( 'Modules', 'fenjoon' ),
		'singular_name'       => _x( 'Modules', 'fenjoon' ),
		'menu_name'           => __( 'Modules', 'fenjoon' ),
		'parent_item_colon'   => __( 'Parent Module', 'fenjoon' ),
		'all_items'           => __( 'All Modules', 'fenjoon' ),
		'view_item'           => __( 'View Modules', 'fenjoon' ),
		'add_new_item'        => __( 'Add New Module', 'fenjoon' ),
		'add_new'             => __( 'Add New', 'fenjoon' ),
		'edit_item'           => __( 'Edit Module', 'fenjoon' ),
		'update_item'         => __( 'Update Module', 'fenjoon' ),
		'search_items'        => __( 'Search Module', 'fenjoon' ),
		'not_found'           => __( 'Not found', 'fenjoon' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'fenjoon' ),
	);
	$args = array(
		'label'               => __( 'Modules', 'fenjoon' ),
		'description'         => __( 'Different Modules, our team may design and develop', 'fenjoon' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'excerpt', 'editor', 'thumbnail' ,'page-attributes'),
		'taxonomies'          => array( 'post_tag' ),
		'hierarchical'        => true,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'			  => 'dashicons-welcome-widgets-menus',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'Modules', $args );
}
// Hook into the 'init' action
add_action( 'init', 'cpt_modules', 0 );


// Get the children of each parent post
function get_post_children(){
	global $post;
	$children= get_children(array('post_type'=> $post->post_type,'post_parent' => null));
	$parent=array();
	foreach($children as $child):
	if($child->post_parent!=0):
		if(isset($parent[$child->post_parent])) :
			$subparent=$parent[$child->post_parent];
			array_push($subparent,$child->ID);
			$parent[$child->post_parent]=$subparent;
		else:
			$parent[$child->post_parent]=array($child->ID);
		endif;
			$child_name[$child->ID]=$child->post_name;
	endif;
	endforeach;
	return array('id'=>$parent,'name'=>$child_name);
	
}
// Create metabox for parent posts
function child_selection() {
	global $post;
	$parent=get_post_children();
	$parent_name=$parent['name'];
	$parent_id=$parent['id'];
	$children=$parent_id[$post->ID];
	if(isset($children)):
		add_meta_box( 
				'custom-post-meta',
				 __('Select subposts'),
				 'child_selection_callback',
				 $post->post_type,'side','core',
				 array('children'=>$children,'name'=>$parent_name)
				 );	
	endif;
}
add_action( 'add_meta_boxes','child_selection',0 );

function child_selection_callback($post,$metabox) {
	$children=$metabox['args']['children'];
	$parent_name=$metabox['args']['name'];
	for($i=0;$i<sizeof($children);$i++):   
      echo '<input type="checkbox" id="subpost" name="subpost" value='.get_post_meta.'/>'.$parent_name[$children[$i]].'<br/>';
    endfor;
}


