
<?php include 'dashboard-header.php';?>
<?php include 'dashboard-sidebar.php';?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">  Admin <strong class="text-white"><?php echo $_SESSION['fname'].' '.$_SESSION['lname'];?></strong></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <a href="admin-profile.php" class="btn btn-sm btn-outline-secondary">Admin Profile</a>
            <a href="dashboard-about.php" class="btn btn-sm btn-outline-secondary">Manage Members</a>
          </div>
        </div>
      </div>

<!-- Feedback Message -->
<?php 
                    if(isset($_SESSION['status']) && ($_SESSION['type'] == "success"))
                    {
                        ?>
                            <div class="alert alert-success alert-dismissible fade show fw-bold fst-italic mt-3" role="alert">
                            <strong>Admin <?php echo $_SESSION['fname']; ?></strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                         unset($_SESSION['status']);
                    }else if (isset($_SESSION['status']) && ($_SESSION['type'] == "error")){
                        
                    ?>
                    
                    <div class="alert alert-danger alert-dismissible fade show fw-bold fst-italic" role="alert">
                            <strong>Admin <?php echo $_SESSION['fname']; ?></strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                    <?php
                         unset($_SESSION['status']);
                    }     
                ?>

<!-- Settings Summary -->
<div class="row">
<div class="col-md-12">
<div class="my-3">
    <div class="row p-4 pb-0 pe-lg-3 align-items-center rounded-3 border shadow-lg">
      <div class="p-3 pt-lg-3">
      <h6 class="display-6 fw-bold lh-2">Dashboard </h6>
    <div class="row row-cols-1 align-items-stretch g-4 py-5">
  <div class="row text-center">
<div class="col-md-3">
	<div class="panel panel-default">
		<div class="panel-heading">
    <div class="well well-sm text-center fst-italic bg-dark" style="color:#fff;padding:8px;font-weight:bold;">
			Gallery
		</div>
    </div>
		<div class="panel-body fw-bold" style="color:darkblue">
    <span class="content-box-icon text-center text-dark"> <i class="fas fa-users"></i></span>
    <?php
                  require '../includes/config.php';
                   echo $conn->query(  
                   
                  // selection all students from database matching credentials
                  $sql = "select * from tblgallery")->num_rows;
              ?>
		</div>
<div class="panel-footer py-3 bg-dark" style="color:#fff;padding:10px;font-weight:bold;"></div>
	</div>
</div>
 
<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
    <div class="well well-sm text-center fst-italic bg-dark" style="color:#fff;padding:8px;font-weight:bold;">
			Blog Posts
		</div>
		<div class="panel-body fw-bold" style="color:darkblue">
    <span class="content-box-icon text-dark"> <i class="fas fa-university"></i></span>
    <?php 
                   require '../includes/config.php';
                   echo $conn->query(  
                   $sql ="SELECT * FROM tblblog")->num_rows;?>
				   </div>
		<div class="panel-footer py-3 bg-dark" style="color:#fff;padding:10px;font-weight:bold;"></div>
		</div>
	</div>
</div>

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
    <div class="well well-sm text-center fst-italic bg-dark" style="color:#fff;padding:8px;font-weight:bold;">
			About
		</div>
		<div class="panel-body fw-bold" style="color:darkblue">
    <span class="content-box-icon text-dark"> <i class="fas fa-th-list"></i></span>
    <?php 
                   require '../includes/config.php';
                   echo $conn->query(
                    $sql = "SELECT * FROM tblabout"
                   )->num_rows; ?>
				   </div>
		<div class="panel-footer py-3 bg-dark" style="color:#fff;padding:10px;font-weight:bold;"></div>
		</div>
	</div>
</div>

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
    <div class="well well-sm text-center fst-italic bg-dark" style="color:#fff;padding:8px;font-weight:bold;">
			Contact
		</div>
		<div class="panel-body fw-bold" style="color:darkblue">
    <span class="content-box-icon text-dark"> <i class="fas fa-scroll"></i> </span>
    <?php 
                   require '../includes/config.php';
                   echo $conn->query( $sql = "SELECT * FROM tblcontact")->num_rows; ?>
				   </div>
		<div class="panel-footer py-3 bg-dark" style="color:#fff;padding:10px;font-weight:bold;"></div>
	
</div>
</div><!-- first row ends -->
      </div>
    </div>
  </div>
</div>
</div>

</div><!-- row ends -->

<!-- Members Summary -->

<div class="row">
<div class="col-md-12">
<div class="my-5">
    <div class="row p-4 pb-0 pe-lg-3 align-items-center rounded-3 border shadow-lg">
      <div class="p-3 pt-lg-3">
  
        <h6 class="display-6 fw-bold lh-2">Members</h6> 
    <div class="row row-cols-1 align-items-stretch g-4 py-5">

        <div class="row row-cols-1 row-cols-md-4 g-4">
<?php 
include '../includes/config.php';
 $query = "SELECT * FROM tblmembers";
 $queryrun = mysqli_query($conn, $query);
 $rowcount = mysqli_num_rows($queryrun);
 if ($rowcount > 0){
     while($row = mysqli_fetch_assoc($queryrun)){ ?>
          <div class="col">
            <div class="card">
              <img class="card-img-top" src="../<?php echo $row['profile'];?>" width="100%" height="180" >

              <div class="card-body text-center">
                <h5 class="card-title fw-bold"><?php echo $row['fname'].' '.$row['lname'];?></h5>
                <p class="card-text fw-bold bg-success rounded text-light"><?php echo $row['position'];?></p>
              </div>
            </div>
          </div>
          <?php 
}  
 }
 ?>
                   </div>
       <!-- card ends -->







     
      </div>
    </div>
  </div>
</div>
</div>

</div><!-- row ends -->

    </main>
  </div>
</div>

<?php include 'dashboard-footer.php';?>