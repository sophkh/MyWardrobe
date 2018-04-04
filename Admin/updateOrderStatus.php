<?php
include("connection/connection_ljcp.php");  
  $serial=$_POST["id"]; 
  $status=$_POST["status"];

	if($status==0){
		$status='Pending';
	}else{
		$status='Delivered';
	}

 echo $sql = "UPDATE build_suit SET 
 									delivered='".$status."' 
									WHERE serial= '".$serial."'";

  $resInsert = mysql_query($sql) or die(mysql_error());
 //$query=mysql_query($sql);
 //echo mysql_query($query);


?>