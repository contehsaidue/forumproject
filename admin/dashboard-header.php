<?php session_start(); ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Forum4CD</title>

<!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
<!--custom css-->
<link href="../assets/css/dashboard.css" rel="stylesheet">
<!-- Font Awesome icons (free version)-->
<script src="../assets/js/all.js"></script>

<style>
  .account-section{
  padding:.5rem;
  color:#fff;
  float:right;
}
</style>
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 text-uppercase fw-bold d-none d-md-inline" href="#"><img src="../assets/images/logo.jpg" style="width: 60px; height: 50px;" class="me-2 rounded text-uppercase">Forum for community development</a>
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 text-uppercase fw-bold d-md-none" href="#"><img src="../assets/images/logo.jpg" style="width: 60px; height: 50px;" class="me-2 rounded text-uppercase">Forum4CDt</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 d-md-none" type="text" placeholder="Search" aria-label="Search">
  <div class="dropdown bg-success account-section rounded me-4">
    <a href="#" class="d-flex align-items-center link-light text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
    <img src="../<?php echo $_SESSION['photo'];?>" width="32" height="32" class="rounded-circle me-2">
        <strong class="text-white"><?php echo $_SESSION['fname'].' '.$_SESSION['lname'];?></strong>
      </a>
      <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
        <li><a class="dropdown-item" href="admin-profile.php">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="logout.php" onclick="return confirm('Admin do you want to log out?')";>Sign out</a></li>
      </ul>
    </div>

</header>