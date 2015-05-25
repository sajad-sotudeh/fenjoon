<?php get_header();

$args = array(
		'post_type' => 'homeinfo',
		'tax_query' => array(
		'relation' => 'AND',
		array(
			'homeinfo_type' => 'about',
		),
		array(
			'homeinfo_type' => 'Our deference from the competitors',
		),
		array(
			'homeinfo_type' => 'Services we dont supply',
		),
		array(
			'homeinfo_type' => 'public responsible',
		),
		array(
			'homeinfo_type' => 'services we supply',
		),
		
	),
);

$prefix_posts = new WP_Query($args);
	if ($prefix_posts->have_posts()){	
		while ($prefix_posts->have_posts()){
			$prefix_posts->the_post(); 
			if (pa_in_taxonomy('homeinfo_type', 'about')) {;
			?>
	<section>
			<article>
					<h2><?php the_title(); ?></h2>
					<p> <?php the_content(); ?></p>
					<?php }
			 }}?>
			</article>
	</section>
		
<?php rewind_posts(); 
	
			if ($prefix_posts->have_posts()){	
		while ($prefix_posts->have_posts()){
			$prefix_posts->the_post(); 
			if (pa_in_taxonomy('homeinfo_type', 'Our deference from the competitors')) {;
			?>
	<section>
			<article>
					<h2><?php the_title(); ?></h2>
					<p> <?php the_content(); ?></p>
					<?php }
			 }}?>
			</article>
	</section>
		
<?php rewind_posts(); ?>
		
		<section>
			<h3> Our works in Progress </h3>
				<section>
					<article>
						<img src="work1.gif" height="100" width="100">
						<p> Content of first work </p>
					</article>
				</section>
				<section>
					<article>
						<img src="work2.gif" height="100" width="100">
						<p> Content of second work </p>
					</article>			
				</section>
				<section>
					<article>
						<img src="work3.gif" height="100" width="100">
						<p> Content of third work </p>
					</article>			
				</section>
		</section>

			<section>
			
		<?php	if ($prefix_posts->have_posts()){	
		while ($prefix_posts->have_posts()){
			$prefix_posts->the_post(); 
			if (pa_in_taxonomy('homeinfo_type', 'services we supply')) {;
			?>
	<section>
			<article>
					<h3><?php the_title(); ?></h3>
					<img src="service3.gif" height="150" width="150">
					<p> <?php the_content(); ?></p>
					<a href="">Link to submit new Order</a>
			</article>
	</section>
		
				<?php }
	}
}
 rewind_posts(); ?>
				
			</section>
			
	<?php	if ($prefix_posts->have_posts()){	
				while ($prefix_posts->have_posts()){
					$prefix_posts->the_post(); 
						if (pa_in_taxonomy('homeinfo_type', 'Services we dont supply')) {;
			?>
	<section>
			<article>
					<h2><?php the_title(); ?></h2>
					<p> <?php the_content(); ?></p>
					<?php }
			 }}?>
			</article>
	</section>
		
<?php rewind_posts(); ?>

			<section>
				<h2>statistics of fenjoon group<h2>			
			</section>

			<section>
			<h2>templates<h2>
				<section>
					<article>
						<img src="work1.gif" height="50" width="50">
						<p> content </p>
					</article>
				</section>
				<section>
					<article>
						<img src="work2.gif" height="50" width="50">
						<p> content </p>
					</article>
				</section>
				<section>
					<article>
						<img src="work3.gif" height="50" width="50">
						<p> content  </p>
					</article>
				</section>
			
			</section>
			
			<section>			
			<h2>customers feedback<h2>
			</section>

<?php if ($prefix_posts->have_posts()){	
		while ($prefix_posts->have_posts()){
			$prefix_posts->the_post(); 
			if (pa_in_taxonomy('homeinfo_type', 'public responsible')) {;
			?>
	<section>
			<article>
					<h2><?php the_title(); ?></h2>
					<p> <?php the_content(); ?></p>
					<?php }
			 }}?>
			</article>
	</section>		
<?php rewind_posts();

get_footer();
?>