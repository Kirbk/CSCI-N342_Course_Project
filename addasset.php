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
          <li class="breadcrumb-item active">Assets Due for Check</li>
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
                    <th>Category</th>
                    <th>Manufacturer</th>
                    <th>Model</th>
                    <th>Serial Number</th>
                    <th>Date Last Verified</th>
                    <th>Room Number</th>
                    <th>Verify</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Category</th>
                    <th>Manufacturer</th>
                    <th>Model</th>
                    <th>Serial Number</th>
                    <th>Date Last Verified</th>
                    <th>Room Number</th>
                    <th>Verify</th>
                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td>Laptop</td>
                    <td>HP</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td></td>
                    <td><div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          </div></td>
                  </tr>
                  <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>2011/07/25</td>
                    <td></td>
                    <td><div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          </div></td>
                  </tr>
                  <tr>
                    <td>Ashton Cox</td>
                    <td>Junior Technical Author</td>
                    <td>San Francisco</td>
                    <td>66</td>
                    <td>2009/01/12</td>
                    <td></td>
                    <td><div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          </div></td>
                  </tr>
                  <tr>
                    <td>Cedric Kelly</td>
                    <td>Senior Javascript Developer</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>2012/03/29</td>
                    <td></td>
                    <td><div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          </div></td>
                  </tr>
                  <tr>
                    <td>Airi Satou</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>33</td>
                    <td>2008/11/28</td>
                    <td></td>
                    <td><div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          </div></td>
                  </tr>
                  <tr>
                    <td>Brielle Williamson</td>
                    <td>Integration Specialist</td>
                    <td>New York</td>
                    <td>61</td>
                    <td>2012/12/02</td>
                    <td></td>
                    <td><div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          </div></td>
                  </tr>
                  <tr>
                    <td>Herrod Chandler</td>
                    <td>Sales Assistant</td>
                    <td>San Francisco</td>
                    <td>59</td>
                    <td>2012/08/06</td>
                    <td></td>
                    <td><div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          </div></td>
                  </tr>
                  <tr>
                    <td>Rhona Davidson</td>
                    <td>Integration Specialist</td>
                    <td>Tokyo</td>
                    <td>55</td>
                    <td>2010/10/14</td>
                    <td></td>
                    <td><div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          </div></td>
                  </tr>
                  <tr>
                    <td>Colleen Hurst</td>
                    <td>Javascript Developer</td>
                    <td>San Francisco</td>
                    <td>39</td>
                    <td>2009/09/15</td>
                    <td></td>
                    <td><div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          </div></td>
                  </tr>
                  <tr>
                    <td>Sonya Frost</td>
                    <td>Software Engineer</td>
                    <td>Edinburgh</td>
                    <td>23</td>
                    <td>2008/12/13</td>
                    <td></td>
                    <td><div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          </div></td>
                  </tr>
                  <tr>
                    <td>Jena Gaines</td>
                    <td>Office Manager</td>
                    <td>London</td>
                    <td>30</td>
                    <td>2008/12/19</td>
                    <td></td>
                    <td><div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          </div></td>
                  </tr>
                  <tr>
                    <td>Quinn Flynn</td>
                    <td>Support Lead</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>2013/03/03</td>
                    <td></td>
                    <td><div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          </div></td>
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
