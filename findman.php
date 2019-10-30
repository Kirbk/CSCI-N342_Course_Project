<?php session_start(); //this must be the very first line on the php page, to register this page to use session variables
      
	
	//if this is a page that requires login always perform this session verification
	//require_once "inc/sessionVerify.php";



	require_once "config.php";




$q=$_REQUEST["q"];

// Fill up array with names

$stmt = $con->prepare("select Name from Proj_MANUFACTURER where MID = ?");
$stmt->execute(array($q));
$row = $stmt->fetch(PDO::FETCH_OBJ);
$name = $row->Name;

print $name;

?>