
<?php include 'dashboard-header.php';?>
<?php include 'dashboard-sidebar.php';?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 fw-bold">Contact Details</h1>
          <div class="btn-group me-2">
            <button  class="btn btn-sm btn-success fw-bold"  data-bs-toggle="modal" data-bs-target="#adminContact">Add Contact Details <i class="fas fa-phone"></i> </button>
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

      <table class="table table-striped table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0">
          <thead class="text-center">
            <tr>
              <th>#</th>
              <th>BG Text</th>
              <th>BG Image</th>
              <th>Email</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <tr>
<?php 
include '../includes/config.php';
 $query = "SELECT * FROM tblcontact";
 $queryrun = mysqli_query($conn, $query);
 $rowcount = mysqli_num_rows($queryrun);
 if ($rowcount > 0){
     while($row = mysqli_fetch_assoc($queryrun)){ ?>
    <td><?php echo $row['contactid'];?></td>
    <td><?php echo $row['bgtext'];?></td>
    <td><img class="img-profile" src="../<?php echo $row['bgimage'];?>" /></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['address'];?></td>
    <td><?php echo $row['phone'];?></td> 
<td>
  <a href="controller.php?deletecontact=<?php echo $row['contactid'];?>" class="text-white mr-2 text-decoration-none btn btn-danger btn-sm" onclick="return confirm('Do you want to remove this contact details?')";
    title="Delete"><i class="fas fa-trash"></i> </a>
</td>
</tr>
<?php 
}  
 }
 ?>
          </tbody>
        </table>
    </main>
  </div>
</div>

<?php include 'dashboard-footer.php';?>


<!--Admin Contact Modal -->
<div class="modal fade" id="adminContact">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title text-uppercase"><img src="../assets/images/logo.jpg" style="width: 65px; height: 55px;" class="me-2"><strong> Forum For Community Development Contacts</strong></h5>
		</div>
		<form action="controller.php" method="POST" enctype="multipart/form-data">
		<div class="modal-body">
            <div class="row">
                <div class="col-md-6">
				<div class="form-group mb-3">
				  <input type="text" class="form-control" placeholder="Enter Background Text" name="bgtext">
				</div>
				<div class="form-group mb-3">
				  <input type="file" class="form-control" name="bgimage">
				</div>
                <div class="form-group mb-3">
				  <input type="email" class="form-control" placeholder="Email" name="email">
				</div>
</div> <!-- col 1 ends -->
<div class="col-md-6">
				<div class="form-group mb-3">
				  <input type="text" class="form-control" placeholder="Address" name="address">
				</div>
				<div class="form-group mb-3">
				  <input type="text" class="form-control" placeholder="Phone" name="phone">
				</div>
</div> <!-- col 2 ends -->
</div> <!-- row ends -->

		</div>
		<div class="modal-footer">
			<button type="submit" class="btn btn-success fw-bold" name="admincontact">Submit Details</button>
		  <button type="button" class="btn btn-danger fw-bold" data-bs-dismiss="modal">Close</button>
		</div>
		</form>
	  </div>
	</div>
  </div>

