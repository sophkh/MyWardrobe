<?php
error_reporting(0);
session_start();
	if($_SESSION["uid"]==""){
		echo "<script language='javascript'>document.location.href='login-page.php';</script>";
	}


include("includes/db_connect.php");  
 
  //$user_id=$_POST["name"];
  
  $fabric=$_POST["fabric"];
  $_SESSION["fabric"]=$fabric;
  $type_button=$_POST["type_button"];
  $_SESSION["type_button"]=$type_button;
  $lapel_type=$_POST["lapel_type"];
  $_SESSION["lapel_type"]=$lapel_type;
  $lapel_size=$_POST["lapel_size"];
  $_SESSION["lapel_size"]=$lapel_size;
  $vent=$_POST["vent"];
  $_SESSION["vent"]=$vent;
  $brest_pockets=$_POST["brest_pockets"];
  $_SESSION["brest_pockets"]=$brest_pockets;
  $side_pockets=$_POST["side_pockets"];
  $_SESSION["side_pockets"]=$side_pockets;
  $hacking_pockets=$_POST["hacking_pockets"];
  $_SESSION["hacking_pockets"]=$hacking_pockets;
  $ticket_pockets=$_POST["ticket_pockets"];
  $_SESSION["ticket_pockets"]=$ticket_pockets;
  $button_types=$_POST["button_types"];
  $_SESSION["button_types"]=$button_types;
  $button_styles=$_POST["button_styles"];
  $_SESSION["button_styles"]=$button_styles;
  $stitching=$_POST["stitching"];
  $_SESSION["stitching"]=$stitching;
  $pleat=$_POST["pleat"];
  $_SESSION["pleat"]=$pleat;
  $pant_side_pockets=$_POST["pant_side_pockets"];
  $_SESSION["pant_side_pockets"]=$pant_side_pockets;
  $pant_back_pockets=$_POST["pant_back_pockets"];
  $_SESSION["pant_back_pockets"]=$pant_back_pockets;
  $pant_cuff=$_POST["pant_cuff"];
  $_SESSION["pant_cuff"]=$pant_cuff;
  $leg_break=$_POST["leg_break"];
  $_SESSION["leg_break"]=$leg_break;
  $waist_closure=$_POST["waist_closure"];
  $_SESSION["waist_closure"]=$waist_closure;
  $belt_loops=$_POST["belt_loops"];
  $_SESSION["belt_loops"]=$belt_loops;
  $vest_coat_type=$_POST["vest_coat_type"];
  $_SESSION["vest_coat_type"]=$vest_coat_type;
  $vest_coat_buttons=$_POST["vest_coat_buttons"];
  $_SESSION["vest_coat_buttons"]=$vest_coat_buttons;
  $vest_coat_pocket_number=$_POST["vest_coat_pocket_number"];
  $_SESSION["vest_coat_pocket_number"]=$vest_coat_pocket_number;
  $vest_coat_pocket_type=$_POST["vest_coat_pocket_type"];
  $_SESSION["vest_coat_pocket_type"]=$vest_coat_pocket_type;
  $vest_coat_back_style=$_POST["vest_coat_back_style"];
  $_SESSION["vest_coat_back_style"]=$vest_coat_back_style;
  $label=$_POST["label"];
  $_SESSION["label"]=$label;
  $under_collar_fabric=$_POST["under_collar_fabric"];
  $_SESSION["under_collar_fabric"]=$under_collar_fabric;
  $lapel_eyelet_color=$_POST["lapel_eyelet_color"];
  $_SESSION["lapel_eyelet_color"]=$lapel_eyelet_color;
  $cuff_type=$_POST["cuff_type"];
  $_SESSION["cuff_type"]=$cuff_type;
  $linig_style=$_POST["linig_style"];
  $_SESSION["linig_style"]=$linig_style;
  $piping_saddle_stitch=$_POST["piping_saddle_stitch"];
  $_SESSION["piping_saddle_stitch"]=$piping_saddle_stitch;
  $watch_pockets=$_POST["watch_pockets"];
  $_SESSION["watch_pockets"]=$watch_pockets;
  $suspender_buttons=$_POST["suspender_buttons"];
  $_SESSION["suspender_buttons"]=$suspender_buttons;
  $_SESSION["cart_price"]="500";
  $_SESSION["shipping"]="20";
											
 	
?>
<div class="row" id="showResult">
	<div class="col-md-12">
		<div class="panel-group" id="accordion">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
							Fabric & Jacket
						</a>
					</h4>
				</div>
				<div id="collapseOne" class="accordion-body collapse in">
					<div class="panel-body">
					<h3>Fabric</h3>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Fabric</label>
		<div class="col-sm-8">
			<input type="text" class="form-control input-sm" name="fabric" id="fabric" value="<?php echo $fabric; ?>" required readonly>
		</div>
	</div>
	<hr/>
						<h3>Jacket</h3>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Type</label>
		<div class="col-sm-8">
			<input type="text" class="form-control input-sm" name="type_button" id="type_button" value="<?php echo $type_button; ?>" required readonly>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Lapel Type</label>
		<div class="col-sm-8">
			<input type="text" class="form-control input-sm" name="lapel_type" id="lapel_type" value="<?php echo $lapel_type; ?>" required readonly>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Lapel Size</label>
		<div class="col-sm-8">
			<input type="text" class="form-control input-sm" name="lapel_size" id="lapel_size" value="<?php echo $lapel_size; ?>" required readonly>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Vent</label>
		<div class="col-sm-8">
			<input type="text" class="form-control input-sm" name="vent" id="vent" value="<?php echo $vent; ?>" required readonly>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">BREAST POCKETS</label>
		<div class="col-sm-8">
			<input type="text" class="form-control input-sm" name="brest_pockets" id="brest_pockets" value="<?php echo $brest_pockets; ?>" required readonly>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">SIDE POCKETS</label>
		<div class="col-sm-8">
			<input type="text" class="form-control input-sm" name="side_pockets" id="side_pockets" value="<?php echo $side_pockets; ?>" required readonly>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Hacking Pockets</label>
		<div class="col-sm-8">
			<input type="text" class="form-control input-sm" name="hacking_pockets" id="hacking_pockets" value="<?php echo $hacking_pockets; ?>" required readonly>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Ticket Pockets</label>
		<div class="col-sm-8">
			<input type="text" class="form-control input-sm" name="ticket_pockets" id="ticket_pockets" value="<?php echo $ticket_pockets; ?>" required readonly>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Button Types</label>
		<div class="col-sm-8">
			<input type="text" class="form-control input-sm" name="button_types" id="button_types" value="<?php echo $button_types; ?>" required readonly>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Button Styles</label>
		<div class="col-sm-8">
			<input type="text" class="form-control input-sm" name="button_styles" id="button_styles" value="<?php echo $button_styles; ?>" required readonly>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Stiching</label>
		<div class="col-sm-8">
			<input type="text" class="form-control input-sm" name="stitching" id="stitching" value="<?php echo $stitching; ?>" required readonly>
		</div>
	</div>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
							Pant & Vest Coat
						</a>
					</h4>
				</div>
				<div id="collapseTwo" class="accordion-body collapse">
					<div class="panel-body">
						<h3>Pant</h3>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Pleat</label>
		<div class="col-sm-8">
			<input type="text" class="form-control input-sm" name="pleat" id="pleat" value="<?php echo $pleat; ?>" required readonly>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Side Pocket</label>
		<div class="col-sm-8">
			<input type="text" class="form-control input-sm" name="pant_side_pockets" id="pant_side_pockets" value="<?php echo $pant_side_pockets; ?>" required readonly>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Back Pocket</label>
		<div class="col-sm-8">
			<input type="text" class="form-control input-sm" name="pant_back_pockets" id="pant_back_pockets" value="<?php echo $pant_back_pockets; ?>" required readonly>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Cuff</label>
		<div class="col-sm-8">
			<input type="text" class="form-control input-sm" name="pant_cuff" id="pant_cuff" value="<?php echo $pant_cuff; ?>" required readonly>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Leg Break</label>
		<div class="col-sm-8">
			<input type="text" class="form-control input-sm" name="leg_break" id="leg_break" value="<?php echo $leg_break; ?>" required readonly>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Waist Closure</label>
		<div class="col-sm-8">
			<input type="text" class="form-control input-sm" name="waist_closure" id="waist_closure" value="<?php echo $waist_closure; ?>" required readonly>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Belt Loops</label>
		<div class="col-sm-8">
			<input type="text" class="form-control input-sm" name="belt_loops" id="belt_loops" value="<?php echo $belt_loops; ?>" required readonly>
		</div>
	</div>
	<hr/>
	<h3>Vest Coat</h3>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Vest Coat Type</label>
		<div class="col-sm-8">
			<input type="text" class="form-control input-sm" name="vest_coat_type" id="vest_coat_type" value="<?php echo $vest_coat_type; ?>" required readonly>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Vest Coat Buttons</label>
		<div class="col-sm-8">
			<input type="text" class="form-control input-sm" name="vest_coat_buttons" id="vest_coat_buttons" value="<?php echo $vest_coat_buttons; ?>" required readonly>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Vest Coat Pocket Number</label>
		<div class="col-sm-8">
			<input type="text" class="form-control input-sm" name="vest_coat_pocket_number" id="vest_coat_pocket_number" value="<?php echo $vest_coat_pocket_number; ?>" required readonly>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Vest Coat Pocket Type</label>
		<div class="col-sm-8">
			<input type="text" class="form-control input-sm" name="vest_coat_pocket_type" id="vest_coat_pocket_type" value="<?php echo $vest_coat_pocket_type; ?>" required readonly>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Vest Coat Back Style</label>
		<div class="col-sm-8">
			<input type="text" class="form-control input-sm" name="vest_coat_back_style" id="vest_coat_back_style" value="<?php echo $vest_coat_back_style; ?>" required readonly>
		</div>
	</div>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
							Label
						</a>
					</h4>
				</div>
				<div id="collapseThree" class="accordion-body collapse">
					<div class="panel-body">
									<h3>Label</h3>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Label</label>
		<div class="col-sm-8">
			<input type="text" class="form-control input-sm" name="label" id="label" value="<?php echo $label; ?>" required readonly> 
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Under Colllar Fabric</label>
		<div class="col-sm-8">
			<input type="text" class="form-control input-sm" name="under_collar_fabric" id="under_collar_fabric" value="<?php echo $under_collar_fabric; ?>" required readonly>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Lapel Eyelet Color</label>
		<div class="col-sm-8">
			<input type="text" class="form-control input-sm" name="lapel_eyelet_color" id="lapel_eyelet_color" value="<?php echo $lapel_eyelet_color; ?>" required readonly>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Cuff Type</label>
		<div class="col-sm-8">
			<input type="text" class="form-control input-sm" name="cuff_type" id="cuff_type" value="<?php echo $cuff_type; ?>" required readonly>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Lining Style</label>
		<div class="col-sm-8">
			<input type="text" class="form-control input-sm" name="linig_style" id="linig_style" value="<?php echo $linig_style; ?>" required readonly>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Piping & Saddle Stitch</label>
		<div class="col-sm-8">
			<input type="text" class="form-control input-sm" name="piping_saddle_stitch" id="piping_saddle_stitch" value="<?php echo $piping_saddle_stitch; ?>" required readonly> 
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Watch Pockets</label>
		<div class="col-sm-8">
			<input type="text" class="form-control input-sm" name="watch_pockets" id="watch_pockets" value="<?php echo $watch_pockets; ?>" required readonly>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Suspender Buttons</label>
		<div class="col-sm-8">
			<input type="text" class="form-control input-sm" name="suspender_buttons" id="suspender_buttons" value="<?php echo $suspender_buttons; ?>" required readonly>
		</div>
	</div>


					</div>
				</div>
			</div>
         	<hr/>
		<div class="panel-heading">
			<h5 class="panel-title">Cart Amount</h5>
				<input type="text" class="form-control input-sm" name="cart_amount" id="cart_amount" value="$500" readonly>
		</div>
        	
		</div>
		<div class="actions-continue">	
        <hr/>
			<div class="form-group">
				<div class="col-sm-4">
					<a  class="btn btn-primary mr-xs mb-sm" style="margin-left:78%;"  href="addBuilSuit.php">Wish List</a>
				</div>
				<div class="col-sm-4">
					<a  class="btn btn-primary mr-xs mb-sm" style="margin-left:78%;" href="checkoutPage.php" >Check Out</a>
				</div>
				<div class="col-sm-4">
					<button  class="btn btn-primary mr-xs mb-sm" style="margin-left:78%;"  onclick="cancelBuildSuit();">Previous</button>
				</div>
			</div>
		</div>

	</div>
</div>
