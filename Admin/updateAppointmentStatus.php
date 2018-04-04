<?php
include("connection/connection_ljcp.php");  
  $user_id=$_POST["id"]; 
  $status=$_POST["status"];

	if($status==0){
		$status='inactive';
	}else{
		$status='active';
	}

 echo $sql = "UPDATE appointments SET 
 									status='".$status."' 
									WHERE serial= ".$user_id;

  $resInsert = mysql_query($sql) or die(mysql_error());
 //$query=mysql_query($sql);
 //echo mysql_query($query);


?>