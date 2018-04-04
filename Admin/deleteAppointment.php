<?php
	session_start();
	if($_SESSION["uid"]==""){
		echo "<script language='javascript'>document.location.href='index.php';</script>";
	}
	//$uid = $_POST['id'];

	
	include('connection/connection_ljcp.php');
    $del="delete from appointments where serial=".$_POST['id'];
 	$query=mysql_query($del);
		//echo "helloo".$uid;exit;
 	if($query){
		echo "Selected Appointment deleted successfully";exit;
	} else {
		echo "Error";
	}
?>
