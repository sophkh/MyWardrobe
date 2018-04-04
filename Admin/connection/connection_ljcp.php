<?php
error_reporting(0);
	$hostName_rasant="localhost";		// Machine on which MySQL Database is running
	$userName_rasant="root";		// Database User Login
	$password_rasant="";			// Database User Password
	$database_rasant ="mysuit";	// Database name
/* END: For local server */
		
	$rasant_portal=mysql_connect($hostName_rasant,$userName_rasant,$password_rasant);
	mysql_select_db($database_rasant,$rasant_portal);
	if (!$rasant_portal) {
    	die('Could not connect: ' . mysql_error());
	}
	//echo 'Connected successfully';

	
	function close_mysql() 
	{
		global $rasant_portal;
		mysql_close($rasant_portal);
	}
?>

	
	