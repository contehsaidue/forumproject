
<?php include 'dashboard-header.php';?>
<?php include 'dashboard-sidebar.php';?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <div class="btn-group me-2">
            <button  class="btn btn-sm btn-success fw-bold"  data-bs-toggle="modal" data-bs-target="#adminUpdate">Update Details  <i class="fas fa-marker"></i></button>
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
           
<!-- Student profile starts -->
<div class="row">
<div class="col-md-12">
<div class="my-3">
    <div class="row p-4 pb-0 pe-lg-3 align-items-center rounded-3 border shadow-lg">
      <div class="p-3 pt-lg-3">
  
        <h6 class="display-6 fw-bold lh-2">My Profile </h6> 
    <div class="row row-cols-1  align-items-stretch g-4 py-5">
 
    <div class="row">
    <div class="col-md-4">
    <div class="panel panel-default border-rounded"> 
    <div class="panel-body">
      <img class="figure-img img-fluid rounded profile-image" width="400" height="60" role="img" src="../<?php echo $_SESSION['photo'];?>">
         </div>
        </div>
        </div>
        <div class="col-md-8">
        <div class="panel panel-default border-rounded"> 
    <div class="panel-body">
    
      <table class="table table-striped table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0">
        
          <tbody class="text-center">
          <tr>
            <th scope="row">Username</th>
            <td><?php echo $_SESSION['username'];?></td>
          </tr>
          <tr>
            <th scope="row">First Name</th>
            <td><?php echo $_SESSION['fname'];?></td>
          </tr>
          <tr>
            <th scope="row">Last Name</th>
            <td><?php echo $_SESSION['lname'];?></td>
          </tr>
       

          </tbody>
        </table>
        </div>
        </div>
        </div>
        </div> <!-- row ends --->
    </main>
  </div>
</div>

<?php include 'dashboard-footer.php';?>


<!--Admin Update Modal -->
<div class="modal fade" id="adminUpdate">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title text-uppercase"><img src="../assets/images/logo.jpg" style="width: 65px; height: 55px;" class="me-2"><strong> Forum For Community Development Admin Details</strong></h5>
		</div>
		<form action="controller.php" method="POST" enctype="multipart/form-data">
		<div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                <input type="hidden" name="adminid" value="<?php echo $_SESSION['adminid'];?>">
				<div class="form-group mb-3">
				  <input type="text" class="form-control" placeholder="First Name" name="fname">
				</div>
				<div class="form-group mb-3">
				  <input type="text"  placeholder="Last Name" class="form-control" name="lname">
				</div>
        <div class="form-group mb-3">
				  <input type="file" class="form-control" name="photo">
				</div>
         
</div> <!-- col 1 ends -->
<div class="col-md-6">
<div class="form-group mb-3">
				  <input type="text" class="form-control" placeholder="Username" name="username">
				</div>
				<div class="form-group mb-3">
				  <input type="password" class="form-control" placeholder="Password" name="password">
				</div>
</div> <!-- col 2 ends -->
</div> <!-- row ends -->

		</div>
		<div class="modal-footer">
			<button type="submit" class="btn btn-success fw-bold" name="adminupdate">Update Details</button>
		  <button type="button" class="btn btn-danger fw-bold" data-bs-dismiss="modal">Close</button>
		</div>
		</form>
	  </div>
	</div>
  </div>

