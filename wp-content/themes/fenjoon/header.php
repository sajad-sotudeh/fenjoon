<html>
<head>
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
	<div id="wrapper">
		<div id="header"><h1>HEADER</h1></div>
		<?php 
		$workforce_values = fjn_workers_by_free_time( );
		var_dump($workforce_values);
		?>