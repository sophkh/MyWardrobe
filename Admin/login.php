<?php
	//------login.php--------------
	/*This page login after checking username and passwor submitted by index.php also start user session and sotres uid and username in session. If user loged in successfully if opens home.php otherwise index.php*/
	session_start();

	$username=$_POST['username'];
	$password =$_POST['password'];
	include("connection/connection_ljcp.php");
	
	$query = "select * from users where username='".$username."' and password='".$password."'";
	$result = mysql_query($query);
	$row=mysql_fetch_array($result);
	
	if((mysql_num_rows($result)==1))
		{	
		$_SESSION["uid"]=$row["serial"];
		$_SESSION["role"]=$row["role"];
		$_SESSION["name"]=$row["username"];
		$_SESSION["pseudoName"]=$row["username"];
		$_SESSION["full_name"] = $row["username"];
		//sheader("Location:home.php");
		if($_SESSION["role"]==1)
			{
			echo "<script language='javascript'>document.location.href='dashboard.php';</script>";
			}
		else{
			echo "<script language='javascript'>document.location.href='index.php?msg=Invalid user name or password';</script>";
			}
		} 
	else{
		
		echo "<script language='javascript'>document.location.href='index.php?msg=Invalid user name or password';</script>";	
		}
?>








