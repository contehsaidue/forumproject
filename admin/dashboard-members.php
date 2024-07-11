
<?php include 'dashboard-header.php';?>
<?php include 'dashboard-sidebar.php';?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <div class="btn-group me-2">
            <button  class="btn btn-sm btn-dark fw-bold"  data-bs-toggle="modal" data-bs-target="#adminMember">Add Members <i class="fas fa-users"></i> </button>
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


  
<!--Admin Add Member Modal -->
<div class="modal fade" id="adminMember">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title text-uppercase"><img src="../assets/images/logo.jpg" style="width: 65px; height: 55px;" class="me-2"><strong> Forum For Community Development MEMBERS</strong></h5>
		</div>
		<form action="controller.php" method="POST" enctype="multipart/form-data">
		<div class="modal-body">
            <div class="row">
                <div class="col-md-6">
				<div class="form-group mb-3">
				  <input type="text" class="form-control" placeholder="First Name" name="fname">
				</div>
        <div class="form-group mb-3">
				  <input type="text" class="form-control" placeholder="Last Name" name="lname">
				</div>
				<div class="form-group mb-3">
				  <input type="file" class="form-control" name="profile">
				</div>
</div> <!-- col 1 ends -->
<div class="col-md-6">
				<div class="form-group mb-3">
				  <input type="text" class="form-control" placeholder="Member Position" name="position">
				</div>
        <div class="form-group mb-3">
				  <input type="email" class="form-control" placeholder="Email" name="email">
				</div>
        <div class="form-group mb-3">
				  <input type="text" class="form-control" placeholder="Phone Number" name="phone">
				</div>
</div> <!-- col 2 ends -->
</div> <!-- row ends -->

		</div>
		<div class="modal-footer">
			<button type="submit" class="btn btn-success fw-bold" name="adminaddmember">Add Member</button>
		  <button type="button" class="btn btn-danger fw-bold" data-bs-dismiss="modal">Close</button>
		</div>
		</form>
	  </div>
	</div>
  </div>

