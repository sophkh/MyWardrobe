<?php include("connection/connection_ljcp.php"); 

if(!empty($_POST["username"])) {
$result = mysql_query("SELECT count(*) FROM users WHERE username='" . $_POST["username"] . "'");
$row = mysql_fetch_row($result);
$user_count = $row[0];
if($user_count>0) echo "0";
else echo "1";
}

?>