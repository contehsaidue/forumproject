
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
		<!-- Header Overlay Text Starts -->	
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(assets/images/coverbg.jpg);">
				<div class="desc animate-box">
					<h2 class="fst-italic"><strong>We're a youth lead social enterprise</strong></h2>
					<span><a class="btn btn-primary btn-lg" href="about.php">Our Mission</a></span>
				</div>
			</div>
		</div>
				<!-- Header Overlay Text Ends -->	

		<div id="fh5co-features">
			<div class="container">
				<div class="row">
					<div class="col-md-4">

						<div class="feature-left">
							<span class="icon">
								<i class="icon-profile-male"></i>
							</span>
							<div class="feature-copy">
								<h3>Become a volunteer</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								
							</div>
						</div>

					</div>

					<div class="col-md-4">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-users"></i>
							</span>
							<div class="feature-copy">
								<h3>Youth Empowerment</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								
							</div>
						</div>

					</div>
					<div class="col-md-4">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-happy"></i>
							</span>
							<div class="feature-copy">
								<h3>Community Services</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<!-- Recent Work Images -->
		<div id="fh5co-feature-product" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center heading-section">
						<h3>Our Core Values.</h3>
						<p>There's no limit to what we you can achieve when you put your mind to it</p>
					</div>
				</div>
				<?php 
include 'includes/config.php';
 $query = "SELECT * FROM tblgallery ORDER BY RAND() LIMIT 3";
 $queryrun = mysqli_query($conn, $query);
 $row = mysqli_fetch_assoc($queryrun); ?>

				<div class="row row-bottom-padded-md">
					<div class="col-md-12 text-center animate-box">
						<p><img src="<?php echo $row['image'];?>" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
			<?php 
include 'includes/config.php';
 $query = "SELECT * FROM tblgallery ORDER BY RAND() LIMIT 2";
 $queryrun = mysqli_query($conn, $query);
 $rowcount = mysqli_num_rows($queryrun);
 if ($rowcount > 0){
     while($row = mysqli_fetch_assoc($queryrun)){ ?>	
					<div class="col-md-6 text-center animate-box">
						<p><img src="<?php echo $row['image'];?>" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
					<?php }
 }?>
				</div>

				<!-- Feature Text -->
				<div class="row">
					<div class="col-md-3">
						<div class="feature-text">
							<h3>Education</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="feature-text">
							<h3>Entrepreneurship</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="feature-text">
							<h3>Youth Advocacy</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="feature-text">
							<h3>Small Scale Loan</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
				</div>

				
			</div>
		</div>

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
		<?php 
include 'includes/config.php';
 $query = "SELECT * FROM tblgallery ORDER BY RAND() LIMIT 4";
 $queryrun = mysqli_query($conn, $query);
 $rowcount = mysqli_num_rows($queryrun);
 if ($rowcount > 0){
     while($row = mysqli_fetch_assoc($queryrun)){ ?>
							<li class="one-half animate-box" data-animate-effect="fadeIn" style="background-image: url(<?php echo $row['image'];?>);); ">
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
						</ul>		
					</div>
				</div>

				<div class="row">
					<div class="col-md-4 col-md-offset-4 text-center animate-box">
						<a href="gallery.php" class="btn btn-primary btn-lg">See Gallery</a>
					</div>
				</div>

				
			</div>
		</div>

		<!-- Projects Section Starts -->
		<div id="fh5co-services-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Our Projects. Support Us</h3>
						<p>Below is a preview of some of our ongoing or semi-finished projects<br>
							You can be part of this change - call us now!.</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row text-center">
					<div class="col-md-4 col-sm-4">
						<div class="services animate-box">
							<span><i class="icon-laptop"></i></span>
							<h3>Microsoft Office Training <br> for youths</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="services animate-box">
							<span><i class="icon-users"></i></span>
							<h3>Boarding School Project</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="services animate-box">
							<span><i class="icon-heart"></i></span>
							<h3>Shelter Giving</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
					
				</div>
			</div>
		</div>

		<!-- END What we do - projects -->

<!-- Blog Section starts -->

		<div id="fh5co-blog-section" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Recent Blog Posts</h3>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row row-bottom-padded-md">
					
				<?php 
include 'includes/config.php';
 $query = "SELECT * FROM tblblog  ORDER BY RAND() LIMIT 4";
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
						<a href="blog.php" class="btn btn-primary btn-lg">Our Blog</a>
					</div>
				</div>

			</div>
		</div>
		<!-- blog-section ends -->
		<!-- Footer Section Starts -->
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
							<p> © <?php echo date('Y');?> <br> <a href="index.php" class="text-decoration-none">Forum for Community Development</a> <br> All Rights Reserved.</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	
	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>


<!--Admin Login Modal -->
<div class="modal fade" id="adminModal">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title text-uppercase"><img src="assets/images/logo.jpg" style="width: 65px; height: 55px;" class="me-2"><strong> Forum For Community Development </strong></h5>
		</div>
		<form action="admin/controller.php" method="POST">
		<div class="modal-body">
				<div class="form-group mb-3">
				  <input type="text" class="form-control" placeholder="Enter Admin Username" name="username">
				</div>
				<div class="form-group">
				  <input type="password" class="form-control" placeholder="Password" name="password">
				</div>
				<div class="form-check">
				  <input type="checkbox" class="form-check-input" id="exampleCheck1">
				  <label class="form-check-label" for="exampleCheck1">Keep me signed in</label>
				</div>
		</div>
		<div class="modal-footer">
			<button type="submit" class="btn btn-primary" name="adminlogin">Login</button>
		  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		</div>
		</form>
	  </div>
	</div>
  </div>

