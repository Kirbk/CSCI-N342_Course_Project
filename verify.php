<?php session_start(); //this must be the very first line on the php page, to register this page to use session variables
      
	
	//if this is a page that requires login always perform this session verification
	//require_once "inc/sessionVerify.php";



	require_once "config.php";




$q=$_REQUEST["q"];

// Fill up array with names

$stmt = $con->prepare("update Proj_DEVICE set LastChecked = ? where SerialNum = ?");
$stmt->execute(array(date("Y-m-d"), $q));

?>