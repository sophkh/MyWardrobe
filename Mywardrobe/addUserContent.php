<?php
include("includes/db_connect.php");  
 error_reporting(0);
 $username=$_POST["username"];
  $email=$_POST["email"];
  $password=$_POST["password"];
  // Generating Password
//$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
//$password = substr( str_shuffle( $chars ), 0, 6 );
  
 $sqlInsert = "insert into users
								set
									date= NOW(),
									username = '".$username."',
									password ='".$password."',
									status ='active',
									role =2,
									email = '".$email."'";
																			
	$resInsert = mysql_query($sqlInsert) or die(mysql_error());											
 	
	$query = "select * from users where email='".$email."' and password='".$password."'";
	$result = mysql_query($query);
	if((mysql_num_rows($result)==1)){
	    $row=mysql_fetch_array($result);
		session_start();
  		$_SESSION["uid"]=$row["serial"];
		$_SESSION["name"]=$row["username"];
		$_SESSION["role"]=$row["role"];
		$_SESSION["email"]=$row["email"];
	}else{
	
	echo "<script language='javascript'>document.location.href='login.php';</script>";
	exit;
	}
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