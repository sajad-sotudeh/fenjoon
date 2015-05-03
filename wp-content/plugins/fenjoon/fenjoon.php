<?php
/*
Plugin Name: fenjoon
Plugin URI: http://fenjoon.net
Description: Fenjoon Web Design Team
Version: 1.0.0
Author: Fenjoon
Author URI: http://fenjoon.net
Text Domain: fenjoon
Domain Path: /lang
*/
defined('FENJOON_DIR') or define('FENJOON_DIR',  dirname(__FILE__).DIRECTORY_SEPARATOR);
/* =================================================================== */

include FENJOON_DIR.'fenjoon-functions.php';

//******************************************
// Initialize
//******************************************
load_plugin_textdomain('fenjoon', false, basename(dirname(__FILE__)).'/lang');

//******************************************
// Add tasks table to database
//******************************************
function fjn_add_tasks_table_to_db(){
	global $wpdb;
	$table_name = $wpdb->prefix. "tasks";
	if($wpdb->get_var("SHOW TABLES LIKE '$table_name'" ) != $table_name){
			$sql= "CREATE TABLE $table_name (
						 id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
						 worker_id INT(6) ,
						 project_id INT(6),
						 work_id INT(6),
						 assign_date DATETIME,
						 seen_date DATETIME,
						 start_date DATETIME,
						 done_date DATETIME
						 );";
			require_once (ABSPATH. 'wp-admin/includes/upgrade.php' );
			dbDelta($sql);
	}
}
register_activation_hook(__FILE__, 'fjn_add_tasks_table_to_db');
?>