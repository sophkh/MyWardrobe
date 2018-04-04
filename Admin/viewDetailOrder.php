<?php require_once('header.php');

 session_start();
 $uid=$_SESSION["uid"];

 $serial = $_POST['id'];

$sqlUser = "select * from build_suit Where
									 serial = '".$serial."' ";
$result = mysql_query($sqlUser) or die(mysql_error());
$row = mysql_fetch_assoc($result);

$cartPrice=" $".$row['cart_price'];
$shipingPrice=" $".$row['shipping'];
$totalPrice=" $".($row['cart_price']+$row['shipping']);


 $sql = "select * from users Where serial = '".$row['user_id']."'";
$res = mysql_query($sql) or die(mysql_error());
?>


<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row" id="content">
			<div class="col-lg-10" >
				<h1 class="page-header">View Order Details</h1>
			</div>
			<div class="col-lg-2" >
					<a  class="btn btn-primary page-header" href="javascript:void(0)" onClick="cancelDetailOrder()"> Back to List </a>
                    </div>
		</div>
		<!-- /.row -->
	</div>
	
	
	<!--Inner Content -->
	

		<div class="panel panel-default" id="content">
		<div class="panel-heading">
			Requested Order Detail
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-primary">
						<div class="panel-heading">
						<form class="form-horizontal" novalidate="novalidate" method="post">
							<div class="row">
								<div class="col-lg-6">	
									<h3><b>Fabric</b></h3>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Fabric</label>
										<div class="col-sm-8">
										<input type="text" class="form-control input-sm" name="fabric" id="fabric" value="<?php echo $row['fabric']; ?>" readonly required>
										</div>
										</div>
										<hr/>
									<h3><b>Jacket</b></h3>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Type</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="type_button" id="type_button" value="<?php echo $row['type_button']; ?>" readonly required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Lapel Type</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="lapel_type" id="lapel_type" value="<?php echo $row['lapel_type']; ?>" readonly required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Lapel Size</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="lapel_size" id="lapel_size" value="<?php echo $row['lapel_size']; ?>" readonly required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Vent</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="vent" id="vent" value="<?php echo $row['vent']; ?>" readonly required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">BREAST POCKETS</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="brest_pockets" id="brest_pockets" value="<?php echo $row['brest_pockets']; ?>" readonly required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">SIDE POCKETS</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="side_pockets" id="side_pockets" value="<?php echo $row['side_pockets']; ?>" readonly required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Hacking Pockets</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="hacking_pockets" id="hacking_pockets" value="<?php echo $row['hacking_pockets']; ?>" readonly required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Ticket Pockets</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="ticket_pockets" id="ticket_pockets" value="<?php echo $row['ticket_pockets']; ?>" readonly required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Button Types</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="button_types" id="button_types" value="<?php echo $row['button_types']; ?>" readonly required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Button Styles</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="button_styles" id="button_styles" value="<?php echo $row['button_styles']; ?>" readonly required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Stiching</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="stitching" id="stitching" value="<?php echo $row['stitching']; ?>" readonly required>
										</div>
									</div>
								</div>	
								<div class="col-lg-6">
									<h3><b>Pant</b></h3>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Pleat</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="pleat" id="pleat" value="<?php echo $row['pleat']; ?>" readonly required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Side Pocket</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="pant_side_pockets" id="pant_side_pockets" value="<?php echo $row['pant_side_pockets']; ?>" readonly required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Back Pocket</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="pant_back_pockets" id="pant_back_pockets" value="<?php echo $row['pant_back_pockets']; ?>" readonly required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Cuff</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="pant_cuff" id="pant_cuff" value="<?php echo $row['pant_cuff']; ?>" readonly required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Leg Break</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="leg_break" id="leg_break" value="<?php echo $row['leg_break']; ?>" readonly required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Waist Closure</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="waist_closure" id="waist_closure" value="<?php echo $row['waist_closure']; ?>" readonly required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Belt Loops</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="belt_loops" id="belt_loops" value="<?php echo $row['belt_loops']; ?>" readonly required>
										</div>
									</div>
									<hr/>
									<h3><b>Vest Coat</b></h3>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Vest Coat Type</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="vest_coat_type" id="vest_coat_type" value="<?php echo $row['vest_coat_type']; ?>" readonly required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Side Pocket</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="vest_coat_side_pockets" id="vest_coat_side_pockets" value="<?php echo $row['vest_coat_side_pockets']; ?>" readonly required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Back Pocket</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="vest_coat_back_pockets" id="vest_coat_back_pockets" value="<?php echo $row['vest_coat_back_pockets']; ?>" readonly required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Cuff</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="vest_coat_cuff" id="vest_coat_cuff" value="<?php echo $row['vest_coat_cuff']; ?>" readonly required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Leg Break</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="vest_coat_leg_break" id="vest_coat_leg_break" value="<?php echo $row['vest_coat_leg_break']; ?>" readonly required>
										</div>
									</div>
								</div>
							</div>
							<hr/>
							<div class="row">
								<div class="col-lg-6">		
									<h3><b>Label</b></h3>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Label</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="label" id="label" value="<?php echo $row['label']; ?>" readonly required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Under Colllar Fabric</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="under_collar_fabric" id="under_collar_fabric" value="<?php echo $row['under_collar_fabric']; ?>"  readonly required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Lapel Eyelet Color</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="lapel_eyelet_color" id="lapel_eyelet_color" value="<?php echo $row['lapel_eyelet_color']; ?>" readonly required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Cuff Type</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="cuff_type" id="cuff_type" value="<?php echo $row['cuff_type']; ?>" readonly required>
										</div>
									</div>
									
								</div>
								<div class="col-lg-6">
								<h3></h3>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Lining Style</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="linig_style" id="linig_style" value="<?php echo $row['linig_style']; ?>" readonly required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Piping & Saddle Stitch</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="piping_saddle_stitch" id="piping_saddle_stitch" value="<?php echo $row['piping_saddle_stitch']; ?>" readonly required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Watch Pockets</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="watch_pockets" id="watch_pockets" value="<?php echo $row['watch_pockets']; ?>" readonly required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Suspender Buttons</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="suspender_buttons" id="suspender_buttons" value="<?php echo $row['suspender_buttons']; ?>" readonly  required>
										</div>
									</div>
								</div>
							</div>	
						</form>
						</div>
					</div>
				</div>
			</div>
		<hr/>	
		<?php $row1=mysql_fetch_array($res); ?>
		<div class="row">
			<div class="col-md-5">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div class="row">
							<div class="col-md-12">
							<h3><b> Shipment Address</b></h3>
							<div class="form-group">
								<div class="row">
								<label class="col-sm-4 control-label" for="w2-email">Username</label>
								<div class="col-sm-8">
									<input type="text" class="form-control input-sm" name="username" id="username" value="<?php echo $row1['username']; ?>" readonly required>
								</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
								<label class="col-sm-4 control-label" for="w2-email">Email</label>
								<div class="col-sm-8">
									<input type="text" class="form-control input-sm" name="email" id="email" value="<?php echo $row1['email']; ?>" readonly required>
								</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
								<label class="col-sm-4 control-label" for="w2-email">Contact</label>
								<div class="col-sm-8">
									<input type="text" class="form-control input-sm" name="contact" id="contact" value="<?php echo $row1['contact']; ?>" readonly required>
								</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
								<label class="col-sm-4 control-label" for="w2-email">Address</label>
								<div class="col-sm-8">
									<textarea class="form-control input-sm" name="address" id="address" readonly required><?php echo $row1['address']; ?></textarea>
								</div>
								</div>
							</div>
							</div>
						</div>
						<br/>
						<div class="row">
							<div class="col-md-12">
								<h3><b> Payment Details</b></h3>
								<div class="form-group">
									<div class="row">
									<label class="col-sm-4 control-label" for="w2-email">Cart</label>
									<div class="col-sm-8">
										<input type="text" class="form-control input-sm" name="cart_price" id="cart_price" value="<?php echo $cartPrice; ?>" readonly required>
									</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<label class="col-sm-4 control-label" for="w2-email">Shipping</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="shipping" id="shipping" value="<?php echo $shipingPrice; ?>" readonly required>
										</div>
									</div>
								</div>
								<hr/>
								<div class="form-group">
									<div class="row">
										<label class="col-sm-4 control-label" for="w2-email">Total</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="shipping1" id="shipping1" value="<?php echo $totalPrice; ?>" readonly required>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                 </div>
			</div>
			<div class="col-md-7">
                <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12 text-right">
									<h3 style="text-align:left !important;"><b>Customer Measurement</b></h3>
									<br/>
                                    <div class="row">
										<div class="col-sm-3">
											<h3 style="text-align:center;">Arm</h3>
											<div class="alert alert-default" style="background-color:#FFFFFF;">
												<p style="text-align:center; color:#000000;"><?php echo $row1["arm"];?></p>
											</div>
										</div>
										<div class="col-sm-3">
											<h3 style="text-align:center;">Chest</h3>
											<div class="alert alert-default" style="background-color:#FFFFFF;">
												<p style="text-align:center; color:#000000;"><?php echo $row1["chest"];?></p>
											</div>
										</div>
										<div class="col-sm-3">
											<h3 style="text-align:center;">Overarm</h3>
											<div class="alert alert-default" style="background-color:#FFFFFF;">
												<p style="text-align:center; color:#000000;"><?php echo $row1["overarm"];?></p>
											</div>
										</div>
										<div class="col-sm-3">
											<h3 style="text-align:center;">Outseam</h3>
											<div class="alert alert-default" style="background-color:#FFFFFF;">
												<p style="text-align:center; color:#000000;"><?php echo $row1["outseam"];?></p>
											</div>
										</div>
									</div>
									  <br/>	
									<div class="row">
										<div class="col-sm-3">
											<h3 style="text-align:center;">Waist</h3>
											<div class="alert alert-default" style="background-color:#FFFFFF;">
												<p style="text-align:center; color:#000000;"><?php echo $row1["waist"];?></p>
											</div>
										</div>
										<div class="col-sm-3">
											<h3 style="text-align:center;">Pant</h3>
											<div class="alert alert-default" style="background-color:#FFFFFF;">
												<p style="text-align:center; color:#000000;"><?php echo $row1["pant"];?></p>
											</div>
										</div>
										<div class="col-sm-3">
											<h3 style="text-align:center;">Seat</h3>
											<div class="alert alert-default" style="background-color:#FFFFFF;">
												<p style="text-align:center; color:#000000;"><?php echo $row1["seat"];?></p>
											</div>
										</div>
										<div class="col-sm-3">
											<h3 style="text-align:center;">Thigh</h3>
											<div class="alert alert-default" style="background-color:#FFFFFF;">
												<p style="text-align:center; color:#000000;"><?php echo $row1["thigh"];?></p>
											</div>
										</div>
									</div>
									  <br/>	
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
		</div>
	
		<!-- /.row (nested) -->
		</div>
		<!-- /.panel-body -->
		</div>
</div>
<!-- /#page-wrapper -->