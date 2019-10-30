<?php
	include 'header.php';
?>
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Verify</a>
          </li>
          <li class="breadcrumb-item active">Add Assets</li>
        </ol>


        <!-- DataTables Example -->
	<form class="addasset" novalidate>
  <div class="form-row">
    <div class="col-md-2 mb-3">
      <label for="Category"><font color="white">Category</font></label>
			<select class="custom-select mr-sm-2" id="Category">
				<option selected>Choose...</option>
				<option value="Laptop">Laptop</option>
				<option value="Tablet">Tablet</option>
				<option value="Printer">Printer</option>
				<option value="Desktop">Desktop</option>
				<option value="Camera">Camera</option>
			</select>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-2 mb-3">
      <label for="Manufacturer"><font color="white">Manufacturer</font></label>
			<select class="custom-select mr-sm-2" id="Manufacturer">
				<option selected>Choose...</option>
				<option value="Apple">Apple</option>
				<option value="Dell">Dell</option>
				<option value="Canon">Canon</option>
				<option value="HP">HP</option>
				<option value="Samsung">Samsung</option>
				<option value="Lenovo">Lenovo</option>
				<option value="Microsoft">Microsoft</option>
				<option value="Cisco">Cisco</option>
				<option value="Logitech">Logitech</option>
			</select>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

	<div class="col-md-4 mb-3">
		<label for="Model"><font color="white">Model</font></label>
		<input type="text" class="form-control" id="model" placeholder="Please enter the model of the device..." required>
		<div class="invalid-feedback">
			Please provide model infomation.
				</div>
			</div>
		</div>
  	<div class="form-row">
		<div class="col-md-5 mb-3">
			<label for="SerialNumber"><font color="white">Serial Number</font></label>
			<input type="text" class="form-control" id="Serialnumber" placeholder="Please enter the serial number of the device..." required>
			<div class="invalid-feedback">
					Please provide models serial number.
				</div>
			</div>
		</div>
		<div class="form-row">
	     <div class="col-md-4 mb-3">
	       <label for="Firstname"><font color="white">First name</font></label>
	       <input type="text" class="form-control" id="firstname" placeholder="Please enter users first name..." required>
	       <div class="invalid-feedback">
	         Please provide first name .
	       </div>
	     </div>
	    <div class="col-md-4 mb-3">
	 	   <label for="Lastname"><font color="white">Last name</font></label>
	 	    <input type="text" class="form-control" id="lastname" placeholder="Please enter users last name..." required>
	 	    <div class="invalid-feedback">
	 	         Please provide last name .
	 	       </div>
	 	     </div>

	     <div class="col-md-6 mb-3">
		   <label for="Location"><font color="white">Location</font></label>
		    <input type="text" class="form-control" id="loaction" placeholder="Please choose the location of this new device..." required>
		    <div class="invalid-feedback">
		 	         Please provide last name .
		 	       </div>
		 	     </div>
				 </div>
				<div class="form-row">
				 <div class="form-group">
    <label for="notes"><font color="white">Additional notes</font></label>
    <textarea class="form-control" id="notes" rows="4"></textarea>
  	</div>
	</div>
</form>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>

  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
