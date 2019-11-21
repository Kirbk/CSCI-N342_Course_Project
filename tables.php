<?php
session_start();
  if ($_SESSION['aid'] == NULL)
    Header ("Location:login.php");
  include 'header.php';
  require_once "config.php";
  
  if (isset($_POST['cat'])) {
    if (strcmp($_POST['Category'], "NewCategory") == 0) {
      $stmt = $con->prepare("insert into Proj_CATEGORY (CID, Name) VALUES (NULL, ?)");
      $stmt->execute(array($_POST['addcateg']));
      echo "<a style='color:white'>Successfully added!</a>";
    }
    else {
      $stmt = $con->prepare("update Proj_CATEGORY set Name = ? where CID = ?");
      $stmt->execute(array($_POST['addcateg'], $_POST['Category']));
      echo "<a style='color:white'>Successfully updated!</a>";
    }
    
  }
  if (isset($_POST['manu'])) {
    if (strcmp($_POST['Manufacturer'], "NewManufacturer") == 0) {
      $stmt = $con->prepare("insert into Proj_MANUFACTURER (MID, Name) VALUES (NULL, ?)");
      $stmt->execute(array($_POST['addmanu']));
      echo "<a style='color:white'>Successfully added!</a>";
    }
    else {
      $stmt = $con->prepare("update Proj_MANUFACTURER set Name = ? where MID = ?");
      $stmt->execute(array($_POST['addmanu'], $_POST['Manufacturer']));
      echo "<a style='color:white'>Successfully updated!</a>";
    }
  }
  if (isset($_POST['network'])) {
    if (strcmp($_POST['Network'], "NewNetwork") == 0) {
      $stmt = $con->prepare("insert into Proj_NETWORK (NID, Name) VALUES (NULL, ?)");
      $stmt->execute(array($_POST['addnetwork']));
      echo "<a style='color:white'>Successfully added!</a>";
    }
    else {
      $stmt = $con->prepare("update Proj_NETWORK set Name = ? where NID = ?");
      $stmt->execute(array($_POST['addnetwork'], $_POST['Network']));
      echo "<a style='color:white'>Successfully updated!</a>";
    }
  }
  if (isset($_POST['person'])) {
    if (strcmp($_POST['User'], "NewUser") == 0) {
      $stmt = $con->prepare("insert into Proj_USER (UID, FirstName, LastName) VALUES (NULL, ?, ?)");
      $stmt->execute(array($_POST['addpersonfirst'], $_POST['addpersonlast']));
      echo "<a style='color:white'>Successfully added!</a>";
    }
    else {
      $stmt = $con->prepare("update Proj_USER set FirstName = ?, LastName = ? where UID = ?");
      $stmt->execute(array($_POST['addpersonfirst'], $_POST['addpersonlast'], $_POST['User']));
      echo "<a style='color:white'>Successfully updated!</a>";
    }
  }
  if (isset($_POST['room'])) {
    if (strcmp($_POST['Location'], "NewLocation") == 0) {
      $stmt = $con->prepare("insert into Proj_LOCATION (LID, NAME) VALUES (NULL, ?)");
      $stmt->execute(array($_POST['addroom']));
      echo "<a style='color:white'>Successfully added!</a>";
    }
    else {
      $stmt = $con->prepare("update Proj_LOCATION set Name = ? where LID = ?");
      $stmt->execute(array($_POST['addroom'], $_POST['Location']));
      echo "<a style='color:white'>Successfully updated!</a>";
    }
  }
?>
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Add Assets</a>
          </li>
          <li class="breadcrumb-item active">Add an Option</li>
        </ol>


                <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Add</th>
                    <th>Name</th>
		    <th>Submit</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Add</th>
                    <th>Name</th>
		    <th>Submit</th>
                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td>Category</td>
                    <td><form action="" method="post"><select class="custom-select mr-sm-2" id="Category" name="Category">
			    	<option value="NewCategory" selected>New...</option>
				<?php
					$stmt = $con->prepare("select CID as cid, Name as name from Proj_CATEGORY");
					$stmt->execute();
					
					while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
						$id = $row->cid;
						$name = $row->name;
						echo "<option value='" . $id . "'>" . $name . "</option>";
					}
				?>
			</select><input type="text" name="addcateg" required><button type="reset" value="Reset">Delete</button></td>
 		    <td><input type="submit" value="Submit" name="cat" id="cat"></form></td>
                  </tr>
                  <tr>
                    <td>Manufacturer</td>
		    <td><form action="" method="post"><select class="custom-select mr-sm-2" id="Manufacturer" name="Manufacturer">
			    	<option value="NewManufacturer" selected>New...</option>
				<?php
					$stmt = $con->prepare("select MID as mid, Name as name from Proj_MANUFACTURER");
					$stmt->execute();
					
					while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
						$id = $row->mid;
						$name = $row->name;
						echo "<option value='" . $id . "'>" . $name . "</option>";
					}
				?>
				<input type="text" name="addmanu" required><button type="reset" value="Reset">Delete</button></td>
 		    <td><input type="submit" value="Submit" name="manu" id="manu"></form></td>
                  </tr>
                  <tr>
                    <td>Network</td>
		    <td><form action="" method="post"><select class="custom-select mr-sm-2" id="Network" name="Network">
			    	<option value="NewNetwork" selected>New...</option>
				<?php
					$stmt = $con->prepare("select NID as nid, Name as name from Proj_NETWORK");
					$stmt->execute();
					
					while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
						$id = $row->nid;
						$name = $row->name;
						echo "<option value='" . $id . "'>" . $name . "</option>";
					}
				?>
				<form action="" method="post"><input type="text" name="addnetwork" required><button type="reset" value="Reset">Delete</button></td>
 		    <td><input type="submit" value="Submit" name="network" id="network"></form></td>
                  </tr>
                  <tr>
                    <td>User</td>
		    <td><form action="" method="post"><select class="custom-select mr-sm-2" id="User" name="User">
			    	<option value="NewUser" selected>New...</option>
				<?php
					$stmt = $con->prepare("select UID as uid, FirstName as first, LastName as last from Proj_USER");
					$stmt->execute();
					
					while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
						$id = $row->uid;
            $first = $row->first;
            $last = $row->last;
						echo "<option value='" . $id . "'>" . $first . " " . $last . "</option>";
					}
				?>
				<input type="text" name="addpersonfirst" required><input type="text" name="addpersonlast" required><button type="reset" value="Reset">Delete</button></td>
 		    <td><input type="submit" value="Submit" id="person" name="person"></form></td>
                  </tr>
                  <tr>
                    <td>Location</td>
		    <td><form action="" method="post"><select class="custom-select mr-sm-2" id="Location" name="Location" required>
			    	<option value="NewLocation" selected>New...</option>
				<?php
					$stmt = $con->prepare("select LID as lid, Name as name from Proj_LOCATION");
					$stmt->execute();
					
					while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
						$id = $row->lid;
						$name = $row->name;
						echo "<option value='" . $id . "'>" . $name . "</option>";
					}
				?>
			</select><input type="text" name="addroom" required><button type="reset" value="Reset">Delete</button></td>
 		    <td><input type="submit" value="Submit" name="room" id="room"></form></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted"></div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
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