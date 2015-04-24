<?php
/*
Template Name: order
*/

get_header(); ?>

<script>
	function get_string(){
			var checkboxes = document.getElementsByClassName('checkbox');
			var string = '';
			var array = new Array();
			for(var j=0;j<checkboxes.length;j++){
				if (checkboxes[j].checked) array.push(checkboxes[j].value);
			}
			string = array.join('+');
			return string;
	}
	window.onload = function(){
			var checkboxes = document.getElementsByClassName('checkbox');
			var string = get_string();
			for(var i=0;i<checkboxes.length;i++){
				checkboxes[i].onclick = function(){
					string = get_string();
					document.getElementsByName('string')[0].setAttribute('value', string);
				}
			}
	}
</script>

<?php if ( is_user_logged_in() ) 
	$current_user = wp_get_current_user();
echo 'Welcome,'. $current_user->user_login . '<br />';

$args = array( 'post_type' => array( 'sitetypes', 'modules', 'features', 'attributes', 'standards' ), 'orderby' => 'menu_order', 'posts_per_page' => -1 );
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) {
		wp_nonce_field(basename( __FILE__ ), 'save_order');
		$order_str = get_post_meta( $post->ID, 'order_str', 1 );
		$order_arr = array();
		$progress_arr = array();
		if( !empty( $order_str ) ) $order_arr = explode( '+', $order_str );
		if( !empty( $order_arr ) ){
			$project_id = get_post_meta( $post->ID, 'project_id', 1 );
			if( !empty( $project_id ) ){
				$progress_str = get_post_meta( $project_id, 'progress_str', 1 );
				if( !empty( $progress_str ) ) $progress_arr = explode( '+', $progress_str );
			}
	
	}
	
	}
	while ( $the_query->have_posts() ) {
			$the_query->the_post();?>
			<input class="checkbox" type="checkbox" name="post-<?php the_ID();?>" value="<?php echo the_ID();?>" <?php echo (in_array( get_the_ID(), $order_arr ) ? 'checked' : '');echo (in_array( get_the_ID(), $progress_arr ) ? ' disabled' : ''); ?> /><?php the_title();?><br/>
<?php	}?>
                        
	<form action="" method="post">		
	<input type="hidden" name="string" value="<?php echo $order_str;?>"/>			
	<input type="submit">
	</form>

 <?php

	function new_order_post() {

		$post_id = wp_insert_post(
			array(
				'comment_status'	=>	'closed',
				'ping_status'		=>	'closed',
				'post_author'		=>	$current_user->user_login,
				'post_name'			=>	$user_ID ,
				'post_title'		=>	$user_ID ,
				'post_status'		=>	'publish',
				'post_type'			=>	'orders'
			)
			);

	}
add_filter( 'template_redirect', 'new_order_post' );
var_dump (new_order_post());

?>

<div id="content" class="widecolumn">
    <?php if (have_posts()) : while (have_posts()) : the_post();?>
    <div class="post">
        <h2 id="post-<?php the_ID(); ?>"><?php the_title();?></h2>
        <div class="entrytext">
            <?php
                global $more;	// hack to use Read More in Pages
                $more = 0;
                the_content('<p class="serif">Read the rest of this page �</p>'); 
            ?>
        </div>
    </div>
    <?php endwhile; endif; ?>
<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
</div>


<?php get_footer(); ?>