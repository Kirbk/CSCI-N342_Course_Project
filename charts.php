<?php
  session_start();

  require_once "config.php";
  
  if (isset($_GET['export'])) {
    $list = array();
    $stmt = $con->prepare("select cat, man, model, ser, lc, loc, sur from DEVICES");
    $stmt->execute();
    array_push($list, array("Category", "Manufacturer", "Model Number", "Serial Number", "Last Checked", "Location", "Surplus"));
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      array_push($list, array_values($row));
    }

    $fp = fopen("php://output", 'w');
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="export.csv"');
    foreach($list as $ferow) {
      fputcsv($fp, $ferow);
    }

    fclose($fp);
    exit();
  }

  if ($_SESSION['aid'] == NULL)
    Header ("Location:login.php");
  include 'header.php';
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
  function findCategory(catID, serial) {
    var xmlhttp;
      if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
      }
      else
      {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      var cat = "";
      xmlhttp.open("GET","findcat.php?q="+catID,true);
    xmlhttp.send();
      xmlhttp.onreadystatechange=function()
      {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
          var id = "CAT" + serial;
          document.getElementById(id).innerHTML=xmlhttp.responseText;
        }
      }
  }
  function joinTable() {
    var xmlhttp;
      if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
      }
      else
      {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.open("GET","join.php",true);
    xmlhttp.send();
    console.log(xmlhttp);
    return xmlhttp.responseText;
  }
  function findManufacturer(manID, serial) {
    var xmlhttp;
      if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
      }
      else
      {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      var cat = "";
      xmlhttp.open("GET","findman.php?q="+manID,true);
    xmlhttp.send();
      xmlhttp.onreadystatechange=function()
      {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
          var id = "MAN" + serial;
          document.getElementById(id).innerHTML=xmlhttp.responseText;
        }
      }
  }
  function findLocation(locID, serial) {
    var xmlhttp;
      if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
      }
      else
      {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      var cat = "";
      xmlhttp.open("GET","findloc.php?q="+locID,true);
      console.log(serial);
    xmlhttp.send();
      xmlhttp.onreadystatechange=function()
      {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
          var id = "LOC" + serial;
          document.getElementById(id).innerHTML=xmlhttp.responseText;
        }
      }
  }
    $(document).ready(function() {
      table = $('#dataTable').DataTable( {
        "columnDefs": [
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
            <a href="#">Reports</a>
          </li>
          <li class="breadcrumb-item active">Search by Category</li>
        </ol>


        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
          <p class="text-center"><a href='charts.php?export=1'>Export data to csv</a></p>
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
