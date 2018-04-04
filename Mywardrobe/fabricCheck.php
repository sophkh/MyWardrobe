<?php 
error_reporting(0);
if(isset($_POST["fabric"])){ 
    $_SESSION['fabric'] = $_POST["fabric"]; 
    $fabric = $_SESSION['fabric'] ; 
    echo $fabric; exit;

}

?>