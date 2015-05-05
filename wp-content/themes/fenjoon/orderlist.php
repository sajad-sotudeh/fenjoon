<?php
/*
Template Name: Order List
*/
get_header(); 
	 $cur_user = get_current_user_ID();?>
	<p> Owner</p>
	<p>This post was written by <?php echo ( the_author_meta('display_name', 1)); ?></p>
		<a href="http://www.google.com">Create a new order</a>
 
<?php
		//this query displays the orders of the current user that have publish status
		$args = array( 'post_type' => orders , 'author' => $cur_user ,'post_status' => publish);
		$query1 = new WP_Query( $args );

		if($cur_user!=0){ //if ths visitor is a guset we dont show him any orders
			while ( $query1->have_posts() ){
			$query1->the_post(); ?>
			<li><?php echo(get_the_title() ."&nbsp;&nbsp;&nbsp;&nbsp". get_the_author() ."&nbsp;&nbsp;&nbsp;&nbsp". get_the_date()."&nbsp;&nbsp;&nbsp;&nbsp".get_the_time()."&nbsp;&nbsp;&nbsp;&nbsp".get_the_excerpt()) ;?></li>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
	<?php 	} 
		}?>

<?php get_footer();?>