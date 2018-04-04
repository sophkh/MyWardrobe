<?php
	session_start();
	error_reporting(0);
	if($_SESSION["uid"]==""){
		echo "<script language='javascript'>document.location.href='index.php';</script>";
	}
	//$uid = $_POST['id'];

	
	include("includes/db_connect.php");
	$sql="delete from build_suit where serial=".$_POST['id'];
 	$query=mysql_query($sql);
		//echo "helloo".$uid;exit;
?>
