<?php
	include 'header.php';
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
<<<<<<< HEAD
                  <tr>
                    <th>Add</th>
                    <th>Name</th>
		    <th>Submit</th>
=======
                   <tr>
                    <th>Category</th>
                    <th>Manufactures</th>
                    <th>Serialnumber</th>
                    <th>Laptop</th>
                    <th>Tablet</th>
                    <th>Printers</th>
                    <th>Users</th>
                    <th>Locat</th>
>>>>>>> a4e0aaa197d3d1dea89bf1ddfdcc1d31e4b7c6b9
                  </tr>
                </thead>
                <tfoot>
                  <tr>
<<<<<<< HEAD
                    <th>Add</th>
                    <th>Name</th>
		    <th>Submit</th>
                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td>Category</td>
                    <td><form action="/"><input type="text" name="addcateg"></td>
 		    <td><input type="submit" value="Submit"></form></td>
                  </tr>
                  <tr>
                    <td>Manufacturer</td>
		    <td><form action="/"><input type="text" name="addmanu"></td>
 		    <td><input type="submit" value="Submit"></form></td>
                  </tr>
                  <tr>
                    <td>Model</td>
		    <td><form action="/"><input type="text" name="addmodel"></td>
 		    <td><input type="submit" value="Submit"></form></td>
                  </tr>
                  <tr>
                    <td>Room Number</td>
		    <td><form action="/"><input type="text" name="addroom"></td>
 		    <td><input type="submit" value="Submit"></form></td>
                  </tr>
                </tbody>
=======
                    <th>Category</th>
                    <th>Manufactures</th>
                    <th>Serialnumber</th>
                    <th>Laptop</th>
                    <th>Tablet</th>
                    <th>Printers</th>
                    <th>Users</th>
                    <th>Locat</th>
                  </tr>
                </tfoot>
>>>>>>> a4e0aaa197d3d1dea89bf1ddfdcc1d31e4b7c6b9
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
