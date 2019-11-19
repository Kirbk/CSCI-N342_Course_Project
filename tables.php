<?php
session_start();
  if ($_SESSION['aid'] == NULL)
    Header ("Location:login.php");
  include 'header.php';

  require_once "config.php";
  
  if (isset($_POST['cat'])) {
    $stmt = $con->prepare("insert into Proj_CATEGORY (CID, Name) VALUES (NULL, ?)");
    $stmt->execute(array($_POST['addcateg']));
    echo "<a style='color:white'>Successfully added!</a>";
  }

  if (isset($_POST['manu'])) {
    $stmt = $con->prepare("insert into Proj_MANUFACTURER (MID, Name) VALUES (NULL, ?)");
    $stmt->execute(array($_POST['addmanu']));
    echo "<a style='color:white'>Successfully added!</a>";
  }

  if (isset($_POST['network'])) {
    $stmt = $con->prepare("insert into Proj_NETWORK (NID, Name) VALUES (NULL, ?)");
    $stmt->execute(array($_POST['addnetwork']));
    echo "<a style='color:white'>Successfully added!</a>";
  }

  if (isset($_POST['person'])) {
    $stmt = $con->prepare("insert into Proj_USER (UID, FirstName, LastName) VALUES (NULL, ?, ?)");
    $stmt->execute(array($_POST['addpersonfirst'], $_POST['addpersonlast']));
    echo "<a style='color:white'>Successfully added!</a>";
  }

  if (isset($_POST['room'])) {
    $stmt = $con->prepare("insert into Proj_LOCATION (LID, NAME) VALUES (NULL, ?)");
    $stmt->execute(array($_POST['addroom']));
    echo "<a style='color:white'>Successfully added!</a>";
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
                    <td><select class="custom-select mr-sm-2" id="Category" name="Category">
				<option selected>Choose...</option>
				<?php
					$stmt = $con->prepare("select CID as cid, Name as name from Proj_CATEGORY");
					$stmt->execute();
					
					while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
						$id = $row->cid;
						$name = $row->name;
						echo "<option value='" . $id . "'>" . $name . "</option>";
					}
				?>
			</select>			<form action="/"><input type="text" name="addcateg"></td>
 		    <td><input type="submit" value="Submit"></form></td>
                  </tr>
                  <tr>
                    <td>Manufacturer</td>
		    <td><select class="custom-select mr-sm-2" id="Manufacturer" name="Manufacturer">
				<option selected>Choose...</option>
				<?php
					$stmt = $con->prepare("select MID as mid, Name as name from Proj_MANUFACTURER");
					$stmt->execute();
					
					while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
						$id = $row->mid;
						$name = $row->name;
						echo "<option value='" . $id . "'>" . $name . "</option>";
					}
				?>
				<form action="/"><input type="text" name="addmanu"></td>
 		    <td><input type="submit" value="Submit"></form></td>
                  </tr>
                  <tr>
                    <td>Network</td>
		    <td><select class="custom-select mr-sm-2" id="Category" name="Category">
				<option selected>Choose...</option>
				<?php
					$stmt = $con->prepare("select NID as nid, Name as name from Proj_NETWORK");
					$stmt->execute();
					
					while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
						$id = $row->nid;
						$name = $row->name;
						echo "<option value='" . $id . "'>" . $name . "</option>";
					}
				?>
				<form action="/"><input type="text" name="addnetwork"></td>
 		    <td><input type="submit" value="Submit"></form></td>
                  </tr>
                  <tr>
                    <td>User</td>
		    <td><select class="custom-select mr-sm-2" id="Category" name="Category">
				<option selected>Choose...</option>
				<?php
					$stmt = $con->prepare("select UID as uid, Name as name from Proj_USER");
					$stmt->execute();
					
					while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
						$id = $row->uid;
						$name = $row->name;
						echo "<option value='" . $id . "'>" . $name . "</option>";
					}
				?>
				<form action="/"><input type="text" name="addperson"></td>
 		    <td><input type="submit" value="Submit"></form></td>
                  </tr>
                  <tr>
                    <td>Location</td>
		    <td><select class="custom-select mr-sm-2" id="Location" name="Location" required>
				<option selected>Choose...</option>
				<?php
					$stmt = $con->prepare("select LID as lid, Name as name from Proj_LOCATION");
					$stmt->execute();
					
					while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
						$id = $row->lid;
						$name = $row->name;
						echo "<option value='" . $id . "'>" . $name . "</option>";
					}
				?>
			</select><form action="/"><input type="text" name="addroom"></td>
 		    <td><input type="submit" value="Submit"></form></td>
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
