<?php
/*
Template Name: Order List
*/


get_header(); ?>



<?php $cur_user = get_current_user_ID();?><!--thsi function get to current user id and return 0 if the visitor doesnt login to site-->

<p> owner</p>
<p>This post was written by <?php echo ( the_author_meta('display_name', 1)); ?></p>
<a href="http://www.google.com">creat a new order</a>
 

 
 
 <?php
 $args = array( 'post_type' => orders , 'author' => $cur_user ,'post_status' => publish);//thsi query display the orders of the current user that have publish status
 $query1 = new WP_Query( $args );


// The Loop
if($cur_user!=0){//if ths vistor is a guset we dont show him any orders
while ( $query1->have_posts() ) {
	$query1->the_post(); ?>
	<li><?php echo(get_the_title() ."&nbsp;&nbsp;&nbsp;&nbsp". get_the_author() ."&nbsp;&nbsp;&nbsp;&nbsp". get_the_date()."&nbsp;&nbsp;&nbsp;&nbsp".get_the_time()."&nbsp;&nbsp;&nbsp;&nbsp".get_the_excerpt()) ;?></li>
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a><!--use permalink function for creating link to pags that dont creat compltele-->
<?php } }?>





<?php get_footer();?>