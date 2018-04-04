<?php
	//------login.php--------------
	/*This page login after checking username and passwor submitted by index.php also start user session and sotres uid and username in session. If user loged in successfully if opens home.php otherwise index.php*/
	session_start();
error_reporting(0);
include("includes/db_connect.php");

	$email=$_POST['email'];
	$password =$_POST['password'];
	
   $query = "select * from users where email='".$email."' and password='".$password."'";
	$result = mysql_query($query);
	$row=mysql_fetch_array($result);
	
	if((mysql_num_rows($result)==1))
		{	
		$_SESSION["uid"]=$row["serial"];
		$_SESSION["name"]=$row["username"];
		$_SESSION["role"]=$row["role"];
		$_SESSION["email"]=$row["email"];
		//sheader("Location:home.php");
		if($_SESSION["role"]==1)
			{
			echo "<script language='javascript'>document.location.href='profile.php';</script>";
			}
		else{
			echo "<script language='javascript'>document.location.href='profile.php';</script>";
			//echo "authentication pass";
			}
		} 
	else{
		
		echo "<script language='javascript'>document.location.href='login-page.php?msg=Invalid user name or password';</script>";	
		}
?>






