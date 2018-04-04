<?php require_once('header.php');

 $serial = $_POST['id'];

$sqlUser = "select * from build_suit Where
									 serial = '".$serial."' ";
$result = mysql_query($sqlUser) or die(mysql_error());
?>


<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row" id="content">
			<div class="col-lg-12" >
				<h1 class="page-header">View Order Details</h1>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
	</div>
	
	
	<!--Inner Content -->
	<?php $row = mysql_fetch_assoc($result);?>

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
				
				<input type="hidden" value="<?php echo $row['serial']; ?>" name="uid" id="uid" />
					<div class="row">
						<div class="col-lg-6">
							<h3>Fabric</h3>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="w2-email">Fabric</label>
								<div class="col-sm-8">
								<input type="text" class="form-control input-sm" name="fabric" id="fabric" value="<?php echo $row['fabric']; ?>"  required>
								</div>
								</div>
						</div>
						<div class="col-lg-6">
							<h3>Deliver Date</h3>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="w2-email">Date</label>
								<div class="col-sm-8">
								<input type="text" class="form-control input-sm" name="deliver_date" id="deliver_date" value="<?php echo $row['deliver_date']; ?>"  required>
								</div>
								</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">	
							<h3>Jacket</h3>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="w2-email">Type</label>
								<div class="col-sm-8">
									<input type="text" class="form-control input-sm" name="type_button" id="type_button" value="<?php echo $row['type_button']; ?>"  required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="w2-email">Lapel Type</label>
								<div class="col-sm-8">
									<input type="text" class="form-control input-sm" name="lapel_type" id="lapel_type" value="<?php echo $row['lapel_type']; ?>"  required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="w2-email">Lapel Size</label>
								<div class="col-sm-8">
									<input type="text" class="form-control input-sm" name="lapel_size" id="lapel_size" value="<?php echo $row['lapel_size']; ?>"  required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="w2-email">Vent</label>
								<div class="col-sm-8">
									<input type="text" class="form-control input-sm" name="vent" id="vent" value="<?php echo $row['vent']; ?>"  required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="w2-email">BREAST POCKETS</label>
								<div class="col-sm-8">
									<input type="text" class="form-control input-sm" name="brest_pockets" id="brest_pockets" value="<?php echo $row['brest_pockets']; ?>"  required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="w2-email">SIDE POCKETS</label>
								<div class="col-sm-8">
									<input type="text" class="form-control input-sm" name="side_pockets" id="side_pockets" value="<?php echo $row['side_pockets']; ?>"  required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="w2-email">Hacking Pockets</label>
								<div class="col-sm-8">
									<input type="text" class="form-control input-sm" name="hacking_pockets" id="hacking_pockets" value="<?php echo $row['hacking_pockets']; ?>"  required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="w2-email">Ticket Pockets</label>
								<div class="col-sm-8">
									<input type="text" class="form-control input-sm" name="ticket_pockets" id="ticket_pockets" value="<?php echo $row['ticket_pockets']; ?>"  required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="w2-email">Button Types</label>
								<div class="col-sm-8">
									<input type="text" class="form-control input-sm" name="button_types" id="button_types" value="<?php echo $row['button_types']; ?>"  required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="w2-email">Button Styles</label>
								<div class="col-sm-8">
									<input type="text" class="form-control input-sm" name="button_styles" id="button_styles" value="<?php echo $row['button_styles']; ?>"  required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="w2-email">Stiching</label>
								<div class="col-sm-8">
									<input type="text" class="form-control input-sm" name="stitching" id="stitching" value="<?php echo $row['stitching']; ?>"  required>
								</div>
							</div>
						</div>	
						<div class="col-lg-6">		
							<h3>Label</h3>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="w2-email">Label</label>
								<div class="col-sm-8">
									<input type="text" class="form-control input-sm" name="label" id="label" value="<?php echo $row['label']; ?>"  required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="w2-email">Under Colllar Fabric</label>
								<div class="col-sm-8">
									<input type="text" class="form-control input-sm" name="under_collar_fabric" id="under_collar_fabric" value="<?php echo $row['under_collar_fabric']; ?>"   required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="w2-email">Lapel Eyelet Color</label>
								<div class="col-sm-8">
									<input type="text" class="form-control input-sm" name="lapel_eyelet_color" id="lapel_eyelet_color" value="<?php echo $row['lapel_eyelet_color']; ?>"  required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="w2-email">Cuff Type</label>
								<div class="col-sm-8">
									<input type="text" class="form-control input-sm" name="cuff_type" id="cuff_type" value="<?php echo $row['cuff_type']; ?>"  required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="w2-email">Lining Style</label>
								<div class="col-sm-8">
									<input type="text" class="form-control input-sm" name="linig_style" id="linig_style" value="<?php echo $row['linig_style']; ?>"  required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="w2-email">Piping & Saddle Stitch</label>
								<div class="col-sm-8">
									<input type="text" class="form-control input-sm" name="piping_saddle_stitch" id="piping_saddle_stitch" value="<?php echo $row['piping_saddle_stitch']; ?>"  required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="w2-email">Watch Pockets</label>
								<div class="col-sm-8">
									<input type="text" class="form-control input-sm" name="watch_pockets" id="watch_pockets" value="<?php echo $row['watch_pockets']; ?>"  required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="w2-email">Suspender Buttons</label>
								<div class="col-sm-8">
									<input type="text" class="form-control input-sm" name="suspender_buttons" id="suspender_buttons" value="<?php echo $row['suspender_buttons']; ?>"   required>
								</div>
							</div>
						</div>
					
					</div>
					<div class="row">
						<div class="col-lg-6">
							<h3>Pant</h3>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="w2-email">Pleat</label>
								<div class="col-sm-8">
									<input type="text" class="form-control input-sm" name="pleat" id="pleat" value="<?php echo $row['pleat']; ?>"  required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="w2-email">Side Pocket</label>
								<div class="col-sm-8">
									<input type="text" class="form-control input-sm" name="pant_side_pockets" id="pant_side_pockets" value="<?php echo $row['pant_side_pockets']; ?>"  required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="w2-email">Back Pocket</label>
								<div class="col-sm-8">
									<input type="text" class="form-control input-sm" name="pant_back_pockets" id="pant_back_pockets" value="<?php echo $row['pant_back_pockets']; ?>"  required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="w2-email">Cuff</label>
								<div class="col-sm-8">
									<input type="text" class="form-control input-sm" name="pant_cuff" id="pant_cuff" value="<?php echo $row['pant_cuff']; ?>"  required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="w2-email">Leg Break</label>
								<div class="col-sm-8">
									<input type="text" class="form-control input-sm" name="leg_break" id="leg_break" value="<?php echo $row['leg_break']; ?>"  required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="w2-email">Waist Closure</label>
								<div class="col-sm-8">
									<input type="text" class="form-control input-sm" name="waist_closure" id="waist_closure" value="<?php echo $row['waist_closure']; ?>"  required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="w2-email">Belt Loops</label>
								<div class="col-sm-8">
									<input type="text" class="form-control input-sm" name="belt_loops" id="belt_loops" value="<?php echo $row['belt_loops']; ?>"  required>
								</div>
							</div>
						</div>
						<div class="col-lg-6">		
							<h3>Vest Coat</h3>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="w2-email">Vest Coat Type</label>
								<div class="col-sm-8">
									<input type="text" class="form-control input-sm" name="vest_coat_type" id="vest_coat_type" value="<?php echo $row['vest_coat_type']; ?>"  required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="w2-email">Side Pocket</label>
								<div class="col-sm-8">
									<input type="text" class="form-control input-sm" name="vest_coat_side_pockets" id="vest_coat_side_pockets" value="<?php echo $row['vest_coat_side_pockets']; ?>"  required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="w2-email">Back Pocket</label>
								<div class="col-sm-8">
									<input type="text" class="form-control input-sm" name="vest_coat_back_pockets" id="vest_coat_back_pockets" value="<?php echo $row['vest_coat_back_pockets']; ?>"  required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="w2-email">Cuff</label>
								<div class="col-sm-8">
									<input type="text" class="form-control input-sm" name="vest_coat_cuff" id="vest_coat_cuff" value="<?php echo $row['vest_coat_cuff']; ?>"  required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="w2-email">Leg Break</label>
								<div class="col-sm-8">
									<input type="text" class="form-control input-sm" name="vest_coat_leg_break" id="vest_coat_leg_break" value="<?php echo $row['vest_coat_leg_break']; ?>"  required>
								</div>
							</div>
							
						</div>
					</div>	
					<div class="row">
						<div class="col-lg-6">							
							<div class="form-group">
								<div class="col-sm-12">
									<button  class="btn btn-default" style="margin-left:80%;"  onclick="cancelDetailOrder();">Back</button>
								</div>
							</div>
						</div>
						<div class="col-lg-6">							
							<div class="form-group">
								<div class="col-sm-12">
									<button  class="btn btn-default"    onclick="setFormValues();">Update</button>
								</div>
							</div>
						</div>
					</div>
				</form>
						</div>
				</div>		
			</div>
			<!-- /.col-lg-6 (nested) -->
		</div>
		<!-- /.row (nested) -->
		</div>
		<!-- /.panel-body -->
		</div>
</div>
<!-- /#page-wrapper -->