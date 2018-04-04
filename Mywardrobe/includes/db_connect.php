<?php
	error_reporting(0);
	$hostName="localhost";		// Machine on which MySQL Database is running
	$userName="root";		// Database User Login
	$password="";			// Database User Password
	$database ="mysuit";	// Database name
/* END: For local server */
		
	$portal=mysql_connect($hostName,$userName,$password);
	
	mysql_select_db($database,$portal);
	if (!$portal) {
    	die('Could not connect: ' . mysql_error());
	}
	//echo 'Connected successfully';

	
	function close_mysql() 
	{
		global $portal;
		mysql_close($portal);
	}
?>

	
	