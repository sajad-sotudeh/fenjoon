<?php 
//////////////////////////////////////////////////
//** Project's Status which shown to Customer **//
/////////////////////////////////////////////////

		$progress_str = get_post_meta(get_the_ID(),'progress_str',1);
		$progress_arr = explode( '+', $progress_str );
		$project_str = get_post_meta(get_the_ID(),'project_str',1);
		$project_arr = explode( '+', $project_str );
		$done_str = get_post_meta(get_the_ID(),'done_str',1);
		$done_arr = explode( '+', $done_str );

		$prg_set_arr = array();
		$done_set_arr = array();
		$prj_set_arr = array();

		$args = array('post_type' => array('sitetypes','modules', 'features', 'attributes', 'standards'));
	    $the_query = new WP_Query($args);
 ?>
<?php  while( have_posts() ) : the_post();
		?><div>
			<li><?php the_title(); ?> </li>
					<p><?php the_content(); ?></p>
							<?php while ( $the_query->have_posts() ){
									$the_query->the_post();
										if( in_array(get_the_ID(),$progress_arr) ){
											    array_push($prg_set_arr,get_the_title()); 
										} 
										else if(in_array(get_the_ID(),$done_arr)){
												array_push($done_set_arr,get_the_title()); 
										}
										else if(in_array(get_the_ID(),$project_arr)){
												array_push($prj_set_arr,get_the_title()); 
										}
										
				}?> <br>
				
			<p>  Done items: </p>
				<?php foreach( $done_set_arr as $value ){?>
						<li> <?php echo ($value); ?> </li><?php
				} ?>
				
			<p>  In progress items: </p>
				<?php foreach( $prg_set_arr as $value ){?>
						<br><li> <?php echo ($value); ?> </br></li><?php
				} ?>
				
			<p>  remaining items: </p>
				<?php foreach( $prj_set_arr as $value){?>
						<br><li> <?php echo ($value); ?> </br></li><?php
				}?>
			<?php wp_reset_postdata() ?>
				
			<br><p> DAYS Spent on PROJECT </p>
				<?php 
				    $post_time_str = get_the_time('Y/m/d',get_the_ID());
					$cur_time_str = current_time('Y/m/d');
					
					$post_time_arr = explode('/',$post_time_str);
					$cur_time_arr = explode ('/',$cur_time_str);?>
					
					<li><?php echo($cur_time_arr[0]-$post_time_arr[0]); ?>y/ <?php 
					          echo($cur_time_arr[1]-$post_time_arr[1]); ?>m/ <?php
 							  echo($cur_time_arr[2]-$post_time_arr[2]); ?>d/ </li>
								
	</div>
	<?php endwhile; ?>