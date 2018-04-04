<?php
include("includes/db_connect.php");  
error_reporting(0);
  session_start();
 $uid=$_SESSION["uid"];
 
  //$user_id=$_POST["name"];
  $type=$_POST["type"];
  $location=$_POST["location"];
  $name=$_POST["name"];
  $email=$_POST["email"];
  $date=$_POST["date"];  
  $time=$_POST["time"];
  $phone=$_POST["phone"];
  $comment=$_POST["comment"];
  
  if($uid==''){
  
 $sqlInsert = "insert into appointments
  										set
											name = '".$name."',
											user_id = '0',
											email = '".$email."',
											status ='active',
											appointment_date= '".$date."',
											type = '".$type."',
											location = '".$location."',
											appointment_time = '".$time."',
											phone ='".$phone."',
											comment = '".$comment."'";
	}
	else{
	$sqlInsert = "insert into appointments
  										set
											name = '".$name."',
											user_id = '".$uid."',
											email = '".$email."',
											status ='active',
											appointment_date= '".$date."',
											type = '".$type."',
											location = '".$location."',
											appointment_time = '".$time."',
											phone ='".$phone."',
											comment = '".$comment."'";
	
	}
	
																													
  $resInsert = mysql_query($sqlInsert) or die(mysql_error());											
  if( $resInsert == true )
         {
            ?>
			<script>
			alert("You'r request has been Forwaded");
			window.location.href = 'index.php';</script>
			
			<?php 
         }
         else
         {
           ?>
			<script>
			alert("You have invalid request");
			window.location.href = 'Appointment.php';</script>
			<?php
         }
 
 	
?>

