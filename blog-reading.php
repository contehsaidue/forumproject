
<?php 
session_start();
include 'includes/config.php';

// user write comment 
if(isset($_POST['postcomment'])){
  $postid = $_POST['postid'];
  $visitorname = $_POST['name'];
  $comment = $_POST['comment'];
  $date_commented = date("Y-m-d");

  $commentinsertquery = "INSERT INTO tblcomments (postid,visitorname, comment, date_commented) VALUES ('$postid','$visitorname','$comment','$date_commented')";
  $commentinsertqueryrun = mysqli_query($conn, $commentinsertquery);

  if($commentinsertqueryrun){
	$_SESSION['status'] = "Comment successfully submitted!";
	$_SESSION['type'] = "success";
  }else{
	$_SESSION['status'] = "Failed to submit comment!";
	$_SESSION['type'] = "error";  
  }




}





?>

 <!-- Main Blog Area -->
 
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
<!-- Feedback Message -->
<?php 
                    if(isset($_SESSION['status']) && ($_SESSION['type'] == "success"))
                    {
                        ?>
                            <div class="alert alert-success alert-dismissible fade show fw-bold fst-italic mt-3" role="alert">
                            <strong><?php echo $_SESSION['fname']; ?></strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                         unset($_SESSION['status']);
                    }else if (isset($_SESSION['status']) && ($_SESSION['type'] == "error")){
                        
                    ?>
                    
                    <div class="alert alert-danger alert-dismissible fade show fw-bold fst-italic" role="alert">
                            <strong><?php echo $_SESSION['fname']; ?></strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                    <?php
                         unset($_SESSION['status']);
                    }     
                ?>
	<!-- Post Preview Area -->		
	<div class="container row mt-3 mb-4">
		<?php
		include 'includes/config.php';
		if(isset($_GET['postid'])){
			$postid = $_GET['postid'];
			$postshow = "SELECT * FROM tblblog where postid = '$postid'";
			$queryrun = mysqli_query($conn, $postshow);
 			$row = mysqli_fetch_assoc($queryrun);?>

<div class="col-md-6">
	<!-- Author -->
	<div class="feature-text">
<h3><?php echo $row['author'];?></h3>
</div>
<img class="img-responsive rounded" src="../<?php echo $row['postimage'];?>" alt="">
</div>

<div class="col-md-6 pt-3">
	<!-- Post Title -->
<div class="feature-text text-center">
<h3><?php echo $row['title'];?></h3>
   </div>
<!-- Post Content -->
<div class="feature-text text-center">
<p><?php echo $row['posttext'];?></p>
   </div>

				</div>
</div><!-- row ends -->
<?php }?>
</div>
	

<!--Comment Section Starts-->
 <div class="container row mt-3 pt-5">
 		
 <div class="col-md-6">
 <form action="" method="POST">
	 <input type="hidden" value="<?php echo $row['postid'];?>" name="postid">
 <div class="form-group mb-3">
	 <input class="form-control" placeholder="Enter your name..." name="name">
				</div>
 <div class="form-group mb-3">
     <textarea class="form-control fst-italic rounded fw-bold" placeholder="say something here..." required name="comment"  cols="5">
</textarea>
</div>
<div class="form-group">
<button type="submit" class="btn btn-primary btn-sm rounded-2" name="postcomment">Send Comments<i class="fas fa-comments"></i></button>
</div>
 </form>
 </div>
 <hr>
 <!-- Comment show starts -->
 <div class="col-md-6">
	<div class="row container">
	<?php 
include 'includes/config.php';
$postid = $_GET['postid'];
 $query = "SELECT * FROM tblcomments WHERE postid = '$postid'";
 $queryrun = mysqli_query($conn, $query);
 $rowcount = mysqli_num_rows($queryrun);
 if ($rowcount > 0){
     while($row = mysqli_fetch_assoc($queryrun)){ ?>
	 <!-- Commenter name -->
	 <h3><?php echo $row['visitorname'];?></h3>
<!-- Commenter comment -->
    <p><?php echo $row['comment'];?></p>
   </div>
   <?php }
 }?>
		</div>
				</div>
				</div>

<?php include 'includes/footer.php';?>
