<?php session_start(); //this must be the very first line on the php page, to register this page to use session variables
      
	
	//if this is a page that requires login always perform this session verification
	//require_once "inc/sessionVerify.php";



	require_once "config.php";



// Fill up array with names

$stmt = $con->prepare("select Proj_CATEGORY.Name as cat, Proj_MANUFACTURER.Name as man, Proj_DEVICE.ModelNum as model, Proj_DEVICE.SerialNum as ser, Proj_DEVICE.LastChecked as lc, Proj_LOCATION.Name as loc, Proj_DEVICE.Surplus as sur from Proj_DEVICE, Proj_CATEGORY, Proj_MANUFACTURER, Proj_LOCATION where Proj_CATEGORY.CID = Proj_DEVICE.Category AND Proj_MANUFACTURER.MID = Proj_DEVICE.Manufacturer AND Proj_LOCATION.LID = Proj_DEVICE.Location");
$stmt->execute(Array());
$row = $stmt->fetch(PDO::FETCH_OBJ);

$data = $row->cat . " " . $row->man . " " . $row->model . " " . $row->ser . " " . $row->lc . " " . $row->loc . " " . $row->sur;

print $data;

?>