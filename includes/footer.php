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

