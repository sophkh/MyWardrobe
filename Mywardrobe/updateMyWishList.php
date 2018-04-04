<?php
session_start();
	if($_SESSION["uid"]==""){
		echo "<script language='javascript'>document.location.href='login-page.php';</script>";
	}


include("includes/db_connect.php");  
 
  $serial=$_POST["id"]; 
  
  $fabric=$_POST["fabric"];
  $type_button=$_POST["type_button"];
  $lapel_type=$_POST["lapel_type"];
  $lapel_size=$_POST["lapel_size"];
  $vent=$_POST["vent"];
  $brest_pockets=$_POST["brest_pockets"];
  $side_pockets=$_POST["side_pockets"];
  $hacking_pockets=$_POST["hacking_pockets"];
  $ticket_pockets=$_POST["ticket_pockets"];
  $button_types=$_POST["button_types"];
  $button_styles=$_POST["button_styles"];
  $stitching=$_POST["stitching"];
  $pleat=$_POST["pleat"];
  $pant_side_pockets=$_POST["pant_side_pockets"];
  $pant_back_pockets=$_POST["pant_back_pockets"];
  $pant_cuff=$_POST["pant_cuff"];
  $leg_break=$_POST["leg_break"];
  $waist_closure=$_POST["waist_closure"];
  $belt_loops=$_POST["belt_loops"];
  $vest_coat_type=$_POST["vest_coat_type"];
  $vest_coat_buttons=$_POST["vest_coat_buttons"];
  $vest_coat_pocket_number=$_POST["vest_coat_pocket_number"];
  $vest_coat_pocket_type=$_POST["vest_coat_pocket_type"];
  $vest_coat_back_style=$_POST["vest_coat_back_style"];
  $label=$_POST["label"];
  $under_collar_fabric=$_POST["under_collar_fabric"];
  $lapel_eyelet_color=$_POST["lapel_eyelet_color"];
  $cuff_type=$_POST["cuff_type"];
  $linig_style=$_POST["linig_style"];
  $piping_saddle_stitch=$_POST["piping_saddle_stitch"];
  $watch_pockets=$_POST["watch_pockets"];
  $suspender_buttons=$_POST["suspender_buttons"];
											
   $sqlInsert = "Update build_suit
  										set
											fabric = '".$fabric."',
											type_button = '".$type_button."',
											lapel_type ='".$lapel_type."',
											lapel_size = '".$lapel_size."',
											vent = '".$vent."',
											brest_pockets = '".$brest_pockets."',
											side_pockets = '".$side_pockets."',
											hacking_pockets ='".$hacking_pockets."',
											ticket_pockets = '".$ticket_pockets."',
											button_types = '".$button_types."',
											button_styles = '".$button_styles."',
											stitching = '".$stitching."',
											pleat ='".$pleat."',
											pant_side_pockets = '".$pant_side_pockets."',
											pant_back_pockets = '".$pant_back_pockets."',
											pant_cuff = '".$pant_cuff."',
											leg_break = '".$leg_break."',
											waist_closure ='".$waist_closure."',
											belt_loops = '".$belt_loops."',
											vest_coat_type = '".$vest_coat_type."',
											vest_coat_buttons = '".$vest_coat_buttons."',
											vest_coat_pocket_number = '".$vest_coat_pocket_number."',
											vest_coat_pocket_type ='".$vest_coat_pocket_type."',
											vest_coat_back_style = '".$vest_coat_back_style."',
											label = '".$label."',
											under_collar_fabric = '".$under_collar_fabric."',
											lapel_eyelet_color = '".$lapel_eyelet_color."',
											cuff_type ='".$cuff_type."',
											linig_style = '".$linig_style."',
											piping_saddle_stitch = '".$piping_saddle_stitch."',
											watch_pockets = '".$watch_pockets."',
											suspender_buttons = '".$suspender_buttons."' 
											Where serial='".$serial."'";
  $resInsert = mysql_query($sqlInsert) or die(mysql_error());											
 	
?>

<script>window.location.href='myWhishListPage.php';</script>