<?php
	include("connection/connection_ljcp.php"); 

  $serial=$_POST["uid"]; 
  $fabric=$_POST["fabric"];
  $deliver_date=$_POST["deliver_date"];
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
  $vest_coat_side_pockets=$_POST["vest_coat_side_pockets"];
  $vest_coat_back_pockets=$_POST["vest_coat_back_pockets"];
  $vest_coat_cuff=$_POST["vest_coat_cuff"];
  $vest_coat_leg_break=$_POST["vest_coat_leg_break"];
  $label=$_POST["label"];
  $under_collar_fabric=$_POST["under_collar_fabric"];
  $lapel_eyelet_color=$_POST["lapel_eyelet_color"];
  $cuff_type=$_POST["cuff_type"];
  $linig_style=$_POST["linig_style"];
  $piping_saddle_stitch=$_POST["piping_saddle_stitch"];
  $watch_pockets=$_POST["watch_pockets"];
  $suspender_buttons=$_POST["suspender_buttons"];
 $token_number="#wardrobe".$uid.ROUND(((9 - 1) * RAND() + @Lower), 0);

  
 $sqlInsert = "UPDATE build_suit
  										SET
											fabric = '".$fabric."',
											deliver_date = '".$deliver_date."',
											token_number = '".$token_number."',
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
											vest_coat_side_pockets = '".$vest_coat_side_pockets."',
											vest_coat_back_pockets = '".$vest_coat_back_pockets."',
											vest_coat_cuff ='".$vest_coat_cuff."',
											vest_coat_leg_break = '".$vest_coat_leg_break."',
											label = '".$label."',
											under_collar_fabric = '".$under_collar_fabric."',
											lapel_eyelet_color = '".$lapel_eyelet_color."',
											cuff_type ='".$cuff_type."',
											linig_style = '".$linig_style."',
											piping_saddle_stitch = '".$piping_saddle_stitch."',
											watch_pockets = '".$watch_pockets."',
											suspender_buttons = '".$suspender_buttons."' 
											WHERE serial='".$serial."'";
															
  $resInsert = mysql_query($sqlInsert) or die(mysql_error());											
 	
?>

<script type="text/javascript">
         window.location = "viewOrder.php";
</script>
