<?php
include("includes/db_connect.php"); 
error_reporting(0); 
 session_start();
 $serial=$_SESSION["uid"];
  $arm=$_POST["arm"];
  $chest=$_POST["chest"];
  $overarm=$_POST["overarm"];
  $waist=$_POST["waist"];
  $pant=$_POST["pant"];
  $seat=$_POST["seat"];
  $thigh=$_POST["thigh"];
  $outseam=$_POST["outseam"];
  $suitWaist=$_POST["suitWaist"];

  
 $sqlInsert = "UPDATE users
								set
									arm ='".$arm."',
									chest ='".$chest."',
									overarm = '".$overarm."',
									waist ='".$waist."',
									seat ='".$seat."',
									thigh ='".$thigh."',
									outseam ='".$outseam."',
									suitWaist ='".$suitWaist."',
									pant ='".$pant."'  
									WHERE serial = '".$serial."'";
																			
	$resInsert = mysql_query($sqlInsert) or die(mysql_error());											
  
?>
<script>window.location.href = 'measurementPage.php';</script>										
