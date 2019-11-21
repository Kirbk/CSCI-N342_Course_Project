<?php
  session_start();
  if ($_SESSION['aid'] == NULL)
    Header ("Location:login.php");
  include 'header.php';

  require_once "config.php";

  $stmt = $con->prepare("select count(*) as c from Proj_DEVICE where Inactive = 0 and Surplus = 0");
  $stmt->execute();

  $row = $stmt->fetch(PDO::FETCH_OBJ);
  $active = $row->c;

  $stmt = $con->prepare("select count(*) as c from Proj_DEVICE where Inactive = 1");
  $stmt->execute();

  $row = $stmt->fetch(PDO::FETCH_OBJ);
  $inactive = $row->c;
  
  $stmt = $con->prepare("select count(*) as c from Proj_DEVICE where Surplus = 1");
  $stmt->execute();

  $row = $stmt->fetch(PDO::FETCH_OBJ);
  $surplus = $row->c;
?>

<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.20/datatables.min.js"></script>
  <script>
    var table;

    function verify(serial) {
      var xmlhttp;
      if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
      }
      else
      {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }

      xmlhttp.open("GET","verify.php?q="+serial,true);
    xmlhttp.send();

    table.draw();
  }

    $(document).ready(function() {
      table = $('#dataTable').DataTable( {
        "columnDefs": [
          {
            "targets": 3,
            "render": function ( data, type, row, meta ) {
              //var str = "<a href='change.php?a="
              return '<a href="change.php?a=' + data + '">' + data + '</a>';
            }
          },
          {
            "targets": 6,
            "data": null,
            "defaultContent": "",
            "render": function ( data, type, row, meta ) {
              return '<button id="' + data[3] + '" onClick="verify(this.id)">Verify</button>';
            }
          }
        ],

        "processing": true,
        "serverSide": true,

        "ajax": "./tables_server_proc.php",
        "order": [4, 'asc']
      } );
    } );
  </script>

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
            Assets</div>
          <div class="card-body">
          <p class="text-center">There are <?php echo "<a href='verify.php'>" . $active; ?> active</a> devices, <?php echo "<a href='inactive.php'>" . $inactive;?> inactive devices</a>, and <?php echo "<a href='surplus.php'>" . $surplus ?> surplused</a> devices.</p>
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
