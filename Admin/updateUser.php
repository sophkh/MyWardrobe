<?php
include("connection/connection_ljcp.php");  
 
 
  $user_id=$_POST["uid"]; 
  $username=$_POST["username"];
  $email=$_POST["email"];
  $password=$_POST["password"];
  $contact=$_POST["contact"];
  $address=$_POST["address"];
  $role=$_POST["role"];


	 $sql = "UPDATE users SET 
								username = '".$username."',
								email ='".$email."',
								password = '".$password."',
								address ='".$address."',
								role ='".$role."',
								contact ='".$contact."' 
								WHERE serial='".$user_id."'";
	  $resInsert = mysql_query($sql) or die(mysql_error());

 //$query=mysql_query($sql);
 //echo mysql_query($query);
/*	if($resInsert){
		echo "user updated Successfully";
	} else {
		echo "Failed to update user";
	}*/

?>
<script type="text/javascript">
         window.location = "viewUser.php";
</script>