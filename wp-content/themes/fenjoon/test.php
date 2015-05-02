<?php
/*
Template Name: Test
*/

global $wpdb;

$name = 'Toby';
$gender = 'boy';
$category1 = 1;
$category2 = 0;

$wpdb->insert('wp_names',
     array(
          'name'=>$name,
          'gender'=>$gender,
          'category1'=>$category1,
          'category2'=>$category2
     ),
     array( 
          '%s',
          '%s',
          '%d',
          '%d'
     )
);


$results = $wpdb->get_results("SELECT * FROM wp_names");
print_r($results);
?>