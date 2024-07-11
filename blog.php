
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
	<html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Forum4CD</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div class="header-top">
			<div class="container">
				<div class="row">
				<?php 
include 'includes/config.php';
 $query = "SELECT * FROM tblcontact";
 $queryrun = mysqli_query($conn, $query);
 $row = mysqli_fetch_assoc($queryrun);?>
					<div class="col-md-6 col-sm-6 text-left fh5co-link">
						<strong><p><i class="icon-phone2"></i> <?php echo $row['phone'];?> </p></strong>
					</div>
					<div class="col-md-6 col-sm-6 text-right fh5co-social">
						<a href="#" class="grow"><i class="icon-facebook2"></i></a>
						<a href="#" class="grow"><i class="icon-twitter2"></i></a>
						<a href="#" class="grow"><i class="icon-instagram2"></i></a>
						<button class="btn btn-sm btn-light" data-toggle="modal" data-target="#adminModal">Login <i class="icon-user"></i></button>
					</div>
				</div>
			</div>
		</div>
		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><img src="assets/images/logo.jpg" style="width: 65px; height: 55px;" class="me-2"><a href="index.html">Forum For Community Development</a></h1>
					<h1 class="fh5co-logo"><img src="assets/images/logo.jpg" style="width: 65px; height: 55px;" class="me-2"><a href="index.html">Forum For C-D</a></h1>
					<!-- START #fh5co-menu-wrap navigation menu -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active">
								<a href="index.php">Home</a>
							</li>
							<li><a href="about.php">About</a></li>
							<li>
								<a href="gallery.php">Gallery</a>
				
							</li>
							<li><a href="blog.php">Blog</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<?php 
include 'includes/config.php';
 $query = "SELECT * FROM tblblogsettings";
 $queryrun = mysqli_query($conn, $query);
 $row = mysqli_fetch_assoc($queryrun);?>
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image:url(<?php echo $row['bgimage'];?>);">
				<div class="desc animate-box">
					<h2><strong><?php echo $row['bgtext'];?></strong></h2>
					<span><a class="btn btn-primary btn-lg" href="contact.php">Share with us</a></span>
				</div>
			</div>

		</div>
		
		<div id="fh5co-blog-section" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Read. Learn. Share</h3>
						<p>On this blog section we walk you through our journey</P>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row row-bottom-padded-md">
				<?php 
include 'includes/config.php';
 $query = "SELECT * FROM tblblog";
 $queryrun = mysqli_query($conn, $query);
 $rowcount = mysqli_num_rows($queryrun);
 if ($rowcount > 0){
     while($row = mysqli_fetch_assoc($queryrun)){ ?>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive"src="../<?php echo $row['postimage'];?>" alt=""></a>
							<div class="blog-text">
								<div class="prod-title">
									<h3><a href=""#><?php echo $row['title'];?></a></h3>
									<span class="posted_by"><?php echo $row['author'];?></span>
									<span class="comment"><a href=""> <?php
                  require 'includes/config.php';
				  $postid = $row['postid'];
                   echo $conn->query($sql = "select * from tblcomments where postid = '$postid'")->num_rows;?><i class="icon-bubble2"></i></a></span>
									<p><?php echo $row['posttext'];?></p>
									<p><a href="blog-reading.php?postid=<?php echo $row['postid'];?>">Learn More...</a></p>
								</div>
							</div> 
						</div>
					</div>
		<?php }
 }?>
				</div>

				<div class="row">
					<div class="col-md-4 col-md-offset-4 text-center animate-box">
						<a href="#" class="btn btn-primary btn-lg">Our Blog</a>
					</div>
				</div>

			</div>
		</div>
		<!-- fh5co-blog-section -->

	<?php include 'includes/footer.php';?>
