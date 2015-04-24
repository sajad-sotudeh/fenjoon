<?php 
//////////////////////////////////////////////////
//** Project's Status which shown to Customer**//
/////////////////////////////////////////////////

		$progress_str = get_post_meta(get_the_ID(),'progress_str',1);
		$progress_arr = explode( '+', $progress_str );
		$project_str = get_post_meta(get_the_ID(),'project_str',1);
		$project_arr = explode( '+', $project_str );
		$started_str = get_post_meta(get_the_ID(),'started_str',1);
		$started_arr = explode( '+', $started_str );

		$prg_set_arr = array();
		$st_set_arr = array();
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
										else if(in_array(get_the_ID(),$started_arr)){
												array_push($st_set_arr,get_the_title()); 
										}
										else if(in_array(get_the_ID(),$project_arr)){
												array_push($prj_set_arr,get_the_title()); 
										}
										
				}?> <br>
				
			<p>  Done items: </p>
				<?php foreach( $prg_set_arr as $value ){?>
						<li> <?php echo ($value); ?> </li><?php
				} ?>
				
			<p>  In progress items: </p>
				<?php foreach( $st_set_arr as $value ){?>
						<br><li> <?php echo ($value); ?> </br></li><?php
				} ?>
				
			<p>  remaining items: </p>
				<?php foreach( $prj_set_arr as $value){?>
						<br><li> <?php echo ($value); ?> </br></li><?php
				}?>
			<?php wp_reset_postdata() ?>
				
			<p> DAYS Spent on PROJECT </p>
				<?php 
						 $now = new DateTime(current_time('Y-m-d'));
						 $ref = new DateTime(get_the_time('Y-m-d',get_the_ID()));
					     $diff = $now->diff($ref);?>
							<li>Years: <?php echo( $diff->y ) ?></li>
							<li>Months: <?php echo( $diff->m ) ?></li>
							<li>Days: <?php echo( $diff->d ) ?></li>
                        						
	</div>
	<?php endwhile; ?>