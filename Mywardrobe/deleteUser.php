<?php
	session_start();
	error_reporting(0);
	if($_SESSION["uid"]==""){
		echo "<script language='javascript'>document.location.href='index.php';</script>";
	}

	include("includes/db_connect.php");
     $sql="delete from users where serial=".$_POST['id'];

 	$query=mysql_query($sql);
		//echo "helloo".$uid;exit;
?>
