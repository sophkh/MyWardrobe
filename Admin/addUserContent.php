<?php
include("connection/connection_ljcp.php");  
 
   $username=$_POST["username"];
  $email=$_POST["email"];
  $password=$_POST["password"];
  $contact=$_POST["contact"];
  $address=$_POST["address"];
  $role=$_POST["role"];

  
 $sqlInsert = "insert into users
  										set
											username = '".$username."',
											email ='".$email."',
											password = '".$password."',
											address ='".$address."',
											role ='".$role."',
											date =NOW(),
											status ='active',
											contact ='".$contact."'";  
																			
	$resInsert = mysql_query($sqlInsert) or die(mysql_error());											
 	
	
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
         window.location = "viewUser.php";
</script>
