<?php
//******************************************
// Basic Setup
//******************************************
function fenjoon_setup(){
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'menus' );
}
add_action( 'after_setup_theme', 'fenjoon_setup' );

//******************************************
// Add Custom JS & CSS to Admin Post Edit Panel
//******************************************
function add_fenjoon_admin_js() {
	wp_enqueue_script( 'fenjoon_admin_js', admin_url() . 'js/fenjoon_admin.js', array(), '1.0', true );
}
add_filter('admin_head', 'add_fenjoon_admin_js');

function add_fenjoon_admin_css() {
	wp_register_style( 'fenjoon_admin_css', admin_url() . 'css/fenjoon_admin.css', false, '1.0' );
	wp_enqueue_style( 'fenjoon_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'add_fenjoon_admin_css' );
