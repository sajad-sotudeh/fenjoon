<html>
<head>
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">		
</head>
<body>
	<div id="wrapper">
		<div id="header"></div>
		<?php 
		$workforce_values = fjn_editors_by_free_time( );
	//	var_dump($workforce_values);
		?>
		
		<section>
			
				<img src="work1.gif" height="100" width="100">
				<p> logo </p>
			
		</section>

		<section>
			<form action="action_page.php">
				Search:
				<input type="search" name="search">
				<input type="submit">
			</form>
		
		
		</section>
		
		<h1> Title Of the Site </h1>
	
	<nav>
		<a href="/m1/">M1</a> |
		<a href="/m2/">M2</a> |
		<a href="/m3/">M3</a> |
		<a href="/m4/">M4</a>
	</nav>