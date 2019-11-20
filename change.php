<?php
	session_start();
	if ($_SESSION['aid'] == NULL)
		Header("Location:login.php");
	include 'header.php';

	require_once "config.php";

	if (isset($_POST['submit'])) {
		echo "<a style='color:white'>Successfully updated!</a><br /><br />";

		$stmt = $con->prepare("update Proj_DEVICE set SerialNum = ?, Category = ?, Manufacturer = ?, ModelNum = ?, Location = ?, User = ?, Network = ?, PurchaseDate = ?, WarrantyDate = ?, LastChecked = ?, Surplus = ?, Notes = ? where SerialNum = ?");
		$stmt->execute(array($_POST['SerialNum'], $_POST['Category'], $_POST['Manufacturer'], $_POST['model'], $_POST['Location'], $_POST['User'], 1, $_POST['PurchaseDate'], $_POST['Warranty'], $_POST['PurchaseDate'], 0, $_POST['notes'], $_GET['a']));
	}

	$serialnum = "";
	if (isset($_POST['SerialNum'])) {
		$serialnum = $_POST['SerialNum'];
	}
	else {
		$serialnum = $_GET['a'];
	}

	$statement = $con->prepare("SELECT * FROM `Proj_DEVICE` where SerialNum = ?");
	$statement->execute(array($serialnum));

	$row = $statement->fetch(PDO::FETCH_OBJ);

	$category = $row->Category;
	$manufacturer = $row->Manufacturer;
	$model = $row->ModelNum;
	$serial = $row->SerialNum;
	$purchasedate = $row->PurchaseDate;
	$user = $row->User;
	$location = $row->Location;
	$warranty = $row->WarrantyDate;
	$notes = $row->Notes;
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

	<form class="addasset" action="change.php?a=<?php echo $serialnum; ?>" method="post">
  <div class="form-row">
    <div class="col-md-2 mb-3">
      <label for="Category"><font color="white">Category</font></label>
			<select class="custom-select mr-sm-2" id="Category" name="Category">
				<?php
					$stmt = $con->prepare("select CID as cid, Name as name from Proj_CATEGORY");
					$stmt->execute();

					while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
						$id = $row->cid;
						$name = $row->name;

						if ($id == $category) {
							echo "<option value='" . $id . "' selected>" . $name . "</option>";
						}
						else {
							echo "<option value='" . $id . "'>" . $name . "</option>";
						}
					}
				?>
			</select>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-2 mb-3">
      <label for="Manufacturer"><font color="white">Manufacturer</font></label>
			<select class="custom-select mr-sm-2" id="Manufacturer" name="Manufacturer" required>
				<?php
					$stmt = $con->prepare("select MID as cid, Name as name from Proj_MANUFACTURER");
					$stmt->execute();

					while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
						$id = $row->cid;
						$name = $row->name;

						if ($id == $manufacturer) {
							echo "<option value='" . $id . "' selected>" . $name . "</option>";
						}
						else {
							echo "<option value='" . $id . "'>" . $name . "</option>";
						}
					}
				?>
			</select>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

	<div class="col-md-4 mb-3">
		<label for="Model"><font color="white">Model</font></label>
		<input type="text" class="form-control" id="model" name="model" value="<?php echo $model; ?>" placeholder="Enter the model of the device..." required>
		<div class="invalid-feedback">
			Please provide model infomation.
				</div>
			</div>
		</div>
  	<div class="form-row">
		<div class="col-md-5 mb-3">
			<label for="SerialNum"><font color="white">Serial Number</font></label>
			<input type="text" class="form-control" id="SerialNum" name="SerialNum" value="<?php echo $serial; ?>" placeholder="Enter the serial number of the device..." required>
			<div class="invalid-feedback">
					Provide models serial number.
				</div>
			</div>
			<div class="col-md-2 mb-3">
			<label for="PurchaseDate"><font color="white">Purchase Date</font></label>
      <input type="date" name="PurchaseDate" id="PurchaseDate" name="PurchaseDate" value="<?php echo $purchasedate; ?>">
		</div>
	</div>

	<div class="col-md-4 mb-3">
	<label for="User"><font color="white">User</font></label>
	<select class="custom-select mr-sm-2" id="User" name="User" required>
	 <option selected>Choose...</option>
	 <?php
		 $stmt = $con->prepare("select UID as uid, FirstName as first, LastName as last from Proj_USER");
		 $stmt->execute();

		 while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
			 $id = $row->uid;
			 $first = $row->first;
			 $last = $row->last;

			if ($id == $user) {
				echo "<option value='" . $id . "' selected>" . $first . " " . $last . "</option>";
			}
			else {
				echo "<option value='" . $id . "'>" . $first . " " . $last . "</option>";
			}
		 }
	 ?>
 </select>
			</div>

	     <div class="col-md-4 mb-3">
		   <label for="Location"><font color="white">Location</font></label>
		   <select class="custom-select mr-sm-2" id="Location" name="Location" required>
				<option selected>Choose...</option>
				<?php
					$stmt = $con->prepare("select LID as lid, Name as name from Proj_LOCATION");
					$stmt->execute();

					while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
						$id = $row->lid;
						$name = $row->name;

						if ($id == $location) {
							echo "<option value='" . $id . "' selected>" . $name . "</option>";
						}
						else {
							echo "<option value='" . $id . "'>" . $name . "</option>";
						}
					}
				?>
			</select>
		 	     </div>
					<div class="col-md-3 mb-3">
					 <div class="form-row">
				<label for="Warranty"><font color="white">Warranty Date</font></label>
				<div class="col-10">
				<input type="date" name="Warranty" id="Warranty" name="Warranty" value="<?php echo $warranty; ?>">
			 </div>
		 </div>
	 </div>
				<div class="form-row">
				 <div class="form-group">
    <label for="notes"><font color="white">Additional notes</font></label>
    <textarea class="form-control" id="notes" name="notes" rows="4"><?php echo $notes; ?></textarea>
  	</div>
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
