<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?=$page_title;?></title>
		<meta charset="UTF-8" />
		<!-- TODO: Remove robots meta tag when site is launched and meta data is prepared -->
		<meta name="robots" content="noindex" />
		<meta name="description" content="<?=$meta_description;?>" />
		<meta name="keywords" content="<?=$meta_keywords;?>" />
		<meta name="author" content="Richard Toner - www.richardtoner.com" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="css/bootstrap.css" rel="stylesheet" media="screen" />
		<link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen" />
		<link href="css/blueimp-gallery.min.css" rel="stylesheet" media="screen" />
		<link href="css/gwyn.css" rel="stylesheet" media="screen" />
		<?php 
			if ($_SERVER['HTTP_HOST'] == 'www.tygwynfishguard.com') {
				include_once("partials/google-analytics.php"); 
			}
		?>
	</head>
	<body>
		<div class="navbar navbar-fixed-top container">
			<div class="visible-desktop phone">
				<i class="icon-phone"></i> (+44) 07964 612941
			</div>
			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<h1><a href="/">Ty Gwyn</a></h1>
			<div class="nav-collapse collapse">
				<ul class="nav">
					<li><a href="the-cottage-and-garden">The Cottage &amp; Garden</a></li>
					<li><a href="gallery">Gallery</a></li>
					<li><a href="things-to-do">Things to Do</a></li>
					<li><a href="prices-availability">Prices &amp; Availability</a></li>
					<li><a href="testimonials">Testimonials</a></li>
					<li><a href="contact-us">Contact Us</a></li>
				</ul>
			</div>
		</div>
		<div class="container page-container">
