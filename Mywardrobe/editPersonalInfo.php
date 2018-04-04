<?php
include("includes/db_connect.php");  
error_reporting(0);
 session_start();
 $serial=$_SESSION["uid"];
 $username=$_POST["username"];
  $email=$_POST["email"];
  $password=$_POST["password"];
  $address=$_POST["address"];
  $contact=$_POST["contact"];
 



  // Generating Password
//$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
//$password = substr( str_shuffle( $chars ), 0, 6 );
//$password ="admin";
  
 $sqlInsert = "UPDATE users
								set
									username = '".$username."',
									email ='".$email."',
									password = '".$password."',
									address ='".$address."',
									contact ='".$contact."' 
									WHERE serial = '".$serial."'";
																			
	$resInsert = mysql_query($sqlInsert) or die(mysql_error());											

  
?>
<script>window.location.href = 'profile.php?msg=1';</script>