<?php
	session_start();
    include("includes/db_connect.php");
	error_reporting(0);
	if($_SESSION["uid"]==""){
		echo "<script language='javascript'>document.location.href='index.php';</script>";
	}
	$username=$_POST["username"];
 	$email=$_POST["email"];
 	$contact=$_POST["contact"];
 	$address=$_POST["address"];
 
	 if($username!=""){
	
	 $userUpdate = "UPDATE users
									set
										username = '".$username."',
										email ='".$email."',
										contact ='".$contact."',
										address ='".$address."'  
										WHERE serial = '".$uid."'"; 
	 $result1 = mysql_query($userUpdate) or die(mysql_error());	
	 }
 
 
	  $serial = $_POST['serial'];
	  $payment=$_POST["payment"];
	  $accountNumber=$_POST["accountNumber"];
	  $user_paid_amount=$_POST["user_paid_amount"];
	  $currency=$_POST["currency"];


  $sql="UPDATE build_suit set status ='active',payment ='".$payment."',accountNumber ='".$accountNumber."',user_paid_amount ='".$user_paid_amount."',currency ='".$currency."',deliver_date= DATE_ADD(`created_date`,INTERVAL 10 DAY)  
									WHERE serial = '".$serial."'";
									
	$result = mysql_query($sql) or die(mysql_error());
	
?>
<script>
document.location.href='myOrdersPage.php';
</script>