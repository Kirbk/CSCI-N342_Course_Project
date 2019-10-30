<?php
	session_start();
	if ($_SESSION['aid'] == NULL)
		Header("Location:login.php");
	include 'header.php';


	if (isset($_POST['submit'])) {
		echo "<a style='color:white'>Successfully added!</a>";
		require_once "config.php";

		$stmt = $con->prepare("insert into Proj_DEVICE (SerialNum, Category, Manufacturer, ModelNum, Location, User, Network, PurchaseDate, WarrantyDate, LastChecked, Surplus, Notes) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->execute(array($_POST['SerialNum'], $_POST['Category'], $_POST['Manufacturer'], $_POST['model'], 1, 1, 1, $_POST['PurchaseDate'], 0, $_POST['PurchaseDate'], 0, $_POST['notes']));
	}
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

	<form class="addasset" action="addasset.php" method="post">
  <div class="form-row">
    <div class="col-md-2 mb-3">
      <label for="Category"><font color="white">Category</font></label>
			<select class="custom-select mr-sm-2" id="Category" name="Category">
				<option selected>Choose...</option>
				<option value="2">Laptop</option>
				<option value="3">Tablet</option>
				<option value="5">Printer</option>
				<option value="1">Desktop</option>
				<option value="4">Camera</option>
				<option value="6">Video Conferencing</option>
			</select>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-2 mb-3">
      <label for="Manufacturer"><font color="white">Manufacturer</font></label>
			<select class="custom-select mr-sm-2" id="Manufacturer" name="Manufacturer">
				<option selected>Choose...</option>
				<option value="1">Apple</option>
				<option value="4">Dell</option>
				<option value="2">Canon</option>
				<option value="5">HP</option>
				<option value="7">Samsung</option>
				<option value="8">Lenovo</option>
				<option value="9">Microsoft</option>
				<option value="3">Cisco</option>
				<option value="6">Logitech</option>
				<option value="10">Ricoh</option>
			</select>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

	<div class="col-md-4 mb-3">
		<label for="Model"><font color="white">Model</font></label>
		<input type="text" class="form-control" id="model" name="model" placeholder="Enter the model of the device..." required>
		<div class="invalid-feedback">
			Please provide model infomation.
				</div>
			</div>
		</div>
  	<div class="form-row">
		<div class="col-md-5 mb-3">
			<label for="SerialNum"><font color="white">Serial Number</font></label>
			<input type="text" class="form-control" id="SerialNum" name="SerialNum" placeholder="Enter the serial number of the device..." required>
			<div class="invalid-feedback">
					Provide models serial number.
				</div>
			</div>
			<div class="col-md-2 mb-3">
			<label for="PurchaseDate"><font color="white">Purchase Date</font></label>
      <input type="date" name="PurchaseDate" id="PurchaseDate" name="PurchaseDate">
		</div>
	</div>
		<div class="form-row">
	     <div class="col-md-4 mb-3">
	       <label for="Firstname"><font color="white">First name</font></label>
	       <input type="text" class="form-control" id="firstname" placeholder="Enter users first name..." required>
	       <div class="invalid-feedback">
	         Provide first name .
	       </div>
	     </div>
	    <div class="col-md-4 mb-3">
	 	   <label for="Lastname"><font color="white">Last name</font></label>
	 	    <input type="text" class="form-control" id="lastname" placeholder="Enter users last name..." required>
	 	    <div class="invalid-feedback">
	 	        Provide last name .
	 	       </div>
	 	     </div>

	     <div class="col-md-6 mb-3">
		   <label for="Location"><font color="white">Location</font></label>
		    <input type="text" class="form-control" id="location" placeholder="Choose the location of this new device..." required>
		    <div class="invalid-feedback">
		 	         Provide last name .
		 	       </div>
		 	     </div>
				 </div>
				<div class="form-row">
				 <div class="form-group">
    <label for="notes"><font color="white">Additional notes</font></label>
    <textarea class="form-control" id="notes" name="notes" rows="4"></textarea>
  	</div>
	</div>
	<input type='submit' id='submit' name="submit" />
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
