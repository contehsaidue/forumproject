
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
<!-- Gallery Section Starts -->
    <div id="fh5co-portfolio">
			<div class="container">

				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center heading-section animate-box">
						<h3>Our Gallery</h3>
					</div>
				</div>

				
				<div class="row row-bottom-padded-md">
					<div class="col-md-12">
						<ul id="fh5co-portfolio-list">
						<tr>
						<?php 
include 'includes/config.php';
 $query = "SELECT * FROM tblgallery";
 $queryrun = mysqli_query($conn, $query);
 $rowcount = mysqli_num_rows($queryrun);
 if ($rowcount > 0){
     while($row = mysqli_fetch_assoc($queryrun)){ ?>
							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(<?php echo $row['image'];?>); ">
								<a href="#" class="color-3">
									<div class="case-studies-summary">
										<span><?php echo $row['imageslogan'];?></span>
										<h2><?php echo $row['imagetext'];?></h2>
									</div>
								</a>
							</li>
			<?php 
}  
 }
 ?>
 </tr>
						</ul>		
					</div>
				</div>

				
			</div>
		</div>
		
        <?php include 'includes/footer.php';?>