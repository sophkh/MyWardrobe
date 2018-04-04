<?php
include("includes/db_connect.php");  
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




  // Generating Password
//$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
//$password = substr( str_shuffle( $chars ), 0, 6 );
//$password ="admin";
  
$sqlInsert = "UPDATE users
								set
									arm ='".$arm."',
									chest ='".$chest."',
									overarm = '".$overarm."',
									waist ='".$waist."',
									seat ='".$seat."',
									thigh ='".$thigh."',
									outseam ='".$outseam."',
									pant ='".$pant."'  
									WHERE serial = '".$serial."'";
																			
	$resInsert = mysql_query($sqlInsert) or die(mysql_error());											
 	
//send email
//$to = $_POST['email'];
//$subject = "Registration Confirmation";
//$message = "<p>Thank you for registering at LJCP.</p>";
//$headers = 'From: webmaster@example.com';
	
/*$retval = mail($to, $subject, $message, $headers);
         
         if( $retval == true )
         {
            echo "Message sent successfully...";?><script>window.location.href = 'viewUser.php?msg=1';</script><?php 
         }
         else
         {
            echo "Message could not be sent...";?><script>window.location.href = 'viewUser.php?msg=1';</script><?php
         }*/
  
?>

<script type="text/javascript">
         window.location = "profile.php";
</script>