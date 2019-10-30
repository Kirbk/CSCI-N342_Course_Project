<?php
  session_start();
  require_once "inc/util.php";
  include("config.php");

  $user = "";
  $pass = "";

  if (isset($_POST['submit']))
  {
    $user = trim($_POST['user']);
    $pass = md5(trim($_POST['password']));

    $stmt = $con->prepare("select count(*) as c from Proj_ADMIN where User = ? and Pass = ?");
    $stmt->execute(array($user, $pass));
    $row = $stmt->fetch(PDO::FETCH_OBJ);
    
    $count = $row->c;
    
    if ($count == 1)
					{
						$stmt = $con->prepare("Select AID from Proj_ADMIN where username = ? and password = ?");
						$stmt->execute(array($user, $pass));
						$row = $stmt->fetch(PDO::FETCH_OBJ);
					
						$aid = $row->AID;
						

						/************************************************************************************************
						*Session variables are variables that belong to the session scope. 
						*They exit when a new session starts, and they are destroyed either when a session is killed or expired.
						*Instructions and concerns on using sessions can be found at http://www.php.net/manual/en/book.session.php.
						*User defined session variables can be used to pass data from one page to another. 
						*/
						$_SESSION['aid'] = $aid;
						$_SESSION['uname'] = $user;
						Header ("Location:index.php");

					}
					else $msg = "The information entered does not match with the records in our database.";
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">
<h1 style="text-align:center; margin-top: 30px; color: white;">IUPUI School of Education<br /> Asset Manager</h1>
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form action="login.php" method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="user" name="user" class="form-control" placeholder="Username" required="required" autofocus="autofocus">
              <label for="inputEmail">Username</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <input type="submit" name="submit" class="btn btn-primary btn-block" value="Login">
          <!--<a class="btn btn-primary btn-block" href="index.html">Login</a>-->
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
