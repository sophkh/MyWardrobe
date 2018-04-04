<?php
	session_start();
	if($_SESSION["uid"]==""){
		echo "<script language='javascript'>document.location.href='index.php';</script>";
	}
	//$uid = $_POST['id'];

	
	include('connection/connection_ljcp.php');
 	$query=mysql_query( "delete from users where serial=".$_POST['id']);
		//echo "helloo".$uid;exit;
	exit;
 	if($query){
		echo "Selected User deleted successfully";exit;
	} else {
		echo "Error";
	}
?>
