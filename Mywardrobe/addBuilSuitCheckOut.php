<?php

error_reporting(0);
include("includes/db_connect.php");  
 session_start();
 $uid=$_SESSION["uid"];
 
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
 
 
  $payment=$_POST["payment"];
  $accountNumber=$_POST["accountNumber"];
  $user_paid_amount=$_POST["user_paid_amount"];
  $currency=$_POST["currency"];
  
  $fabric=$_SESSION["fabric"];
  $type_button=$_SESSION["type_button"];
  $lapel_type=$_SESSION["lapel_type"];
  $lapel_size=$_SESSION["lapel_size"];
  $vent=$_SESSION["vent"];
  $brest_pockets=$_SESSION["brest_pockets"];
  $side_pockets=$_SESSION["side_pockets"];
  $hacking_pockets=$_SESSION["hacking_pockets"];
  $ticket_pockets=$_SESSION["ticket_pockets"];
  $button_types=$_SESSION["button_types"];
  $button_styles=$_SESSION["button_styles"];
  $stitching=$_SESSION["stitching"];
  $pleat=$_SESSION["pleat"];
  $pant_side_pockets=$_SESSION["pant_side_pockets"];
  $pant_back_pockets=$_SESSION["pant_back_pockets"];
  $pant_cuff=$_SESSION["pant_cuff"];
  $leg_break=$_SESSION["leg_break"];
  $waist_closure=$_SESSION["waist_closure"];
  $belt_loops=$_SESSION["belt_loops"];
  $vest_coat_type=$_SESSION["vest_coat_type"];
  $vest_coat_buttons=$_SESSION["vest_coat_buttons"];
  $vest_coat_pocket_number=$_SESSION["vest_coat_pocket_number"];
  $vest_coat_pocket_type=$_SESSION["vest_coat_pocket_type"];
  $vest_coat_back_style=$_SESSION["vest_coat_back_style"];
  $label=$_SESSION["label"];
  $under_collar_fabric=$_SESSION["under_collar_fabric"];
  $lapel_eyelet_color=$_SESSION["lapel_eyelet_color"];
  $cuff_type=$_SESSION["cuff_type"];
  $linig_style=$_SESSION["linig_style"];
  $piping_saddle_stitch=$_SESSION["piping_saddle_stitch"];
  $watch_pockets=$_SESSION["watch_pockets"];
  $suspender_buttons=$_SESSION["suspender_buttons"];
  $cart_price=$_SESSION["cart_price"]="500";
  $shipping=$_SESSION["shipping"]="20";
 $token_number="#wardrobe".$uid.ROUND(((9 - 1) * RAND() + @Lower), 0);  
 $sqlInsert = "insert into build_suit
  										set
											user_id = '". $uid."',
											status ='active',
											cart_price ='500',
											shipping ='20',
											delivered ='Pending',
											payment ='".$payment."',
											accountNumber ='".$accountNumber."',
											user_paid_amount ='".$user_paid_amount."',
											currency ='".$currency."',
											deliver_date= DATE_ADD(NOW(),INTERVAL 10 DAY),
											created_date= NOW(),
											fabric = '".$fabric."',
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
											suspender_buttons = '".$suspender_buttons."'";
  $resInsert = mysql_query($sqlInsert) or die(mysql_error());	
  
  if($reInsert==1){
    $_SESSION["fabric"]="";
    $_SESSION["type_button"]="";
    $_SESSION["lapel_type"]="";
    $_SESSION["lapel_size"]="";
    $_SESSION["vent"]="";
    $_SESSION["brest_pockets"]="";
    $_SESSION["side_pockets"]="";
    $_SESSION["hacking_pockets"]="";
    $_SESSION["ticket_pockets"]="";
    $_SESSION["button_types"]="";
    $_SESSION["button_styles"]="";
    $_SESSION["stitching"]="";
    $_SESSION["pleat"]="";
    $_SESSION["pant_side_pockets"]="";
    $_SESSION["pant_back_pockets"]="";
    $_SESSION["pant_cuff"]="";
    $_SESSION["leg_break"]="";
    $_SESSION["waist_closure"]="";
    $_SESSION["belt_loops"]="";
    $_SESSION["vest_coat_type"]="";
    $_SESSION["vest_coat_buttons"]="";
    $_SESSION["vest_coat_pocket_number"]="";
    $_SESSION["vest_coat_pocket_type"]="";
    $_SESSION["vest_coat_back_style"]="";
    $_SESSION["label"]="";
    $_SESSION["under_collar_fabric"]="";
    $_SESSION["lapel_eyelet_color"]="";
    $_SESSION["cuff_type"]="";
    $_SESSION["linig_style"]="";
    $_SESSION["piping_saddle_stitch"]="";
    $_SESSION["watch_pockets"]="";
    $_SESSION["cart_price"]="";
	$_SESSION["shipping"]="";
  }										
 	
?>

<script>
alert("Your Requested Order has been Placed");
window.location.href='myOrdersPage.php';</script>


