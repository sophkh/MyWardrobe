<?php
error_reporting(0);
session_start();
	if($_SESSION["uid"]==""){
		echo "<script language='javascript'>document.location.href='login-page.php';</script>";
	}


include("includes/db_connect.php");   
  $id=$_POST["id"];   
  $sqlUser = "select * from  build_suit WHERE serial='".$id."'";
  $result = mysql_query($sqlUser) or die(mysql_error());
  $row=mysql_fetch_array($result); 	
?>

<div class="row" id="showResult">
	<div class="col-md-12">
	<form method="post" >
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
					<input type="hidden" id="id" name="id" value="<?php echo $id; ?>"/>
					<h3>Fabric</h3>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="w2-email">Fabric</label>
							<div class="col-sm-8">
								<select class="form-control" id="fabric" name="fabric" required>
								<?php $sqlFabric = "select * from fabric";
								$resfabric = mysql_query($sqlFabric) or die(mysql_error());
								while($rowFabric = mysql_fetch_assoc($resfabric)){?>
									<option value="<?php echo $rowFabric['name'];?>" 
									<?php if($row['fabric'] == $rowFabric['name']){echo " selected='selected' ";}?>><?php echo $rowFabric['description'];?></option>
										
								<?php }?>
								</select>
							</div>
						</div>
						<hr/>
						<h3>Jacket</h3>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="w2-email">Type</label>
							<div class="col-sm-8">
								<select class="form-control" id="type_button" name="type_button" required>
								<?php $sqlFabric = "select * from jacket_type";
										$resfabric = mysql_query($sqlFabric) or die(mysql_error());
										while($rowFabric = mysql_fetch_assoc($resfabric)){?>
											<option value="<?php echo $rowFabric['jacket_type'];?>" 
											<?php if($row['type_button'] == $rowFabric['jacket_type']){echo " selected='selected' ";}?>><?php echo $rowFabric['jacket_type'];?></option>
								<?php }?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="w2-email">Lapel Type</label>
							<div class="col-sm-8">
								<select class="form-control" id="lapel_type" name="lapel_type" required>
								<?php $sqlFabric = "select * from jacket_lapel_type";
										$resfabric = mysql_query($sqlFabric) or die(mysql_error());
										while($rowFabric = mysql_fetch_assoc($resfabric)){?>
											<option value="<?php echo $rowFabric['jacket_lapel_type'];?>" 
											<?php if($row['lapel_type'] == $rowFabric['jacket_lapel_type']){echo " selected='selected' ";}?>><?php echo $rowFabric['jacket_lapel_type'];?></option>
								<?php }?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="w2-email">Lapel Size</label>
							<div class="col-sm-8">
								<select class="form-control" id="lapel_size" name="lapel_size" required>
								<?php $sqlFabric = "select * from jacket_lapel_size";
										$resfabric = mysql_query($sqlFabric) or die(mysql_error());
										while($rowFabric = mysql_fetch_assoc($resfabric)){?>
											<option value="<?php echo $rowFabric['jacket_lapel_size'];?>" 
											<?php if($row['lapel_size'] == $rowFabric['jacket_lapel_size']){echo " selected='selected' ";}?>><?php echo $rowFabric['jacket_lapel_size'];?></option>
								<?php }?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="w2-email">Vent</label>
							<div class="col-sm-8">
								<select class="form-control" id="vent" name="vent" required>
								<?php $sqlFabric = "select * from jacket_vent";
										$resfabric = mysql_query($sqlFabric) or die(mysql_error());
										while($rowFabric = mysql_fetch_assoc($resfabric)){?>
											<option value="<?php echo $rowFabric['jacket_vent'];?>" 
											<?php if($row['vent'] == $rowFabric['jacket_vent']){echo " selected='selected' ";}?>><?php echo $rowFabric['jacket_vent'];?></option>
								<?php }?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="w2-email">Breast Pockets</label>
							<div class="col-sm-8">
								<select class="form-control" id="brest_pockets" name="brest_pockets" required>
								<?php $sqlFabric = "select * from jacket_breast_pocket";
										$resfabric = mysql_query($sqlFabric) or die(mysql_error());
										while($rowFabric = mysql_fetch_assoc($resfabric)){?>
											<option value="<?php echo $rowFabric['jacket_breast_pocket'];?>" 
											<?php if($row['brest_pockets'] == $rowFabric['jacket_breast_pocket']){echo " selected='selected' ";}?>><?php echo $rowFabric['jacket_breast_pocket'];?></option>
								<?php }?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="w2-email">Side Pockets</label>
							<div class="col-sm-8">
								<select class="form-control" id="side_pockets" name="side_pockets" required>
								<?php $sqlFabric = "select * from jacket_side_pocket";
										$resfabric = mysql_query($sqlFabric) or die(mysql_error());
										while($rowFabric = mysql_fetch_assoc($resfabric)){?>
											<option value="<?php echo $rowFabric['jacket_side_pocket'];?>" 
											<?php if($row['side_pockets'] == $rowFabric['jacket_side_pocket']){echo " selected='selected' ";}?>><?php echo $rowFabric['jacket_side_pocket'];?></option>
								<?php }?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="w2-email">Hacking Pockets</label>
							<div class="col-sm-8">
								<select class="form-control" id="hacking_pockets" name="hacking_pockets" required>
								<?php $sqlFabric = "select * from jacket_hacking_pockets";
										$resfabric = mysql_query($sqlFabric) or die(mysql_error());
										while($rowFabric = mysql_fetch_assoc($resfabric)){?>
											<option value="<?php echo $rowFabric['jacket_hacking_pockets'];?>" 
											<?php if($row['hacking_pockets'] == $rowFabric['jacket_hacking_pockets']){echo " selected='selected' ";}?>><?php echo $rowFabric['jacket_hacking_pockets'];?></option>
								<?php }?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="w2-email">Ticket Pockets</label>
							<div class="col-sm-8">
								<select class="form-control" id="ticket_pockets" name="ticket_pockets" required>
								<?php $sqlFabric = "select * from jacket_ticket_pockets";
										$resfabric = mysql_query($sqlFabric) or die(mysql_error());
										while($rowFabric = mysql_fetch_assoc($resfabric)){?>
											<option value="<?php echo $rowFabric['jacket_ticket_pockets'];?>" 
											<?php if($row['ticket_pockets'] == $rowFabric['jacket_ticket_pockets']){echo " selected='selected' ";}?>><?php echo $rowFabric['jacket_ticket_pockets'];?></option>
								<?php }?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="w2-email">Button Types</label>
							<div class="col-sm-8">
								<select class="form-control" id="button_types" name="button_types" required>
								<?php $sqlFabric = "select * from jacket_button_type";
										$resfabric = mysql_query($sqlFabric) or die(mysql_error());
										while($rowFabric = mysql_fetch_assoc($resfabric)){?>
											<option value="<?php echo $rowFabric['jacket_button_type'];?>" 
											<?php if($row['button_types'] == $rowFabric['jacket_button_type']){echo " selected='selected' ";}?>><?php echo $rowFabric['jacket_button_type'];?></option>
								<?php }?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="w2-email">Button Styles</label>
							<div class="col-sm-8">
								<select class="form-control" id="button_styles" name="button_styles" required>
								<?php $sqlFabric = "select * from jacket_button_style";
										$resfabric = mysql_query($sqlFabric) or die(mysql_error());
										while($rowFabric = mysql_fetch_assoc($resfabric)){?>
											<option value="<?php echo $rowFabric['jacket_button_style'];?>" 
											<?php if($row['button_styles'] == $rowFabric['jacket_button_style']){echo " selected='selected' ";}?>><?php echo $rowFabric['description'];?></option>
								<?php }?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="w2-email">Stiching</label>
							<div class="col-sm-8">
								<select class="form-control" id="stitching" name="stitching" required>
								<?php $sqlFabric = "select * from jacket_stitching";
										$resfabric = mysql_query($sqlFabric) or die(mysql_error());
										while($rowFabric = mysql_fetch_assoc($resfabric)){?>
											<option value="<?php echo $rowFabric['jacket_stitching'];?>" 
											<?php if($row['stitching'] == $rowFabric['jacket_stitching']){echo " selected='selected' ";}?>><?php echo $rowFabric['jacket_stitching'];?></option>
								<?php }?>
								</select>
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
			<select class="form-control" id="pleat" name="pleat" required>
								<?php $sqlFabric = "select * from pant_pleat";
										$resfabric = mysql_query($sqlFabric) or die(mysql_error());
										while($rowFabric = mysql_fetch_assoc($resfabric)){?>
											<option value="<?php echo $rowFabric['pant_pleat'];?>" 
											<?php if($row['pleat'] == $rowFabric['pant_pleat']){echo " selected='selected' ";}?>><?php echo $rowFabric['pant_pleat'];?></option>
								<?php }?>
								</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Side Pocket</label>
		<div class="col-sm-8">
			<select class="form-control" id="pant_side_pockets" name="pant_side_pockets" required>
								<?php $sqlFabric = "select * from pant_side_pocket";
										$resfabric = mysql_query($sqlFabric) or die(mysql_error());
										while($rowFabric = mysql_fetch_assoc($resfabric)){?>
											<option value="<?php echo $rowFabric['pant_side_pocket'];?>" 
											<?php if($row['pant_side_pockets'] == $rowFabric['pant_side_pocket']){echo " selected='selected' ";}?>><?php echo $rowFabric['pant_side_pocket'];?></option>
								<?php }?>
								</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Back Pocket</label>
		<div class="col-sm-8">
			<select class="form-control" id="pant_back_pockets" name="pant_back_pockets" required>
								<?php $sqlFabric = "select * from pant_back_pocket";
										$resfabric = mysql_query($sqlFabric) or die(mysql_error());
										while($rowFabric = mysql_fetch_assoc($resfabric)){?>
											<option value="<?php echo $rowFabric['pant_back_pocket'];?>" 
											<?php if($row['pant_back_pockets'] == $rowFabric['pant_back_pocket']){echo " selected='selected' ";}?>><?php echo $rowFabric['pant_back_pocket'];?></option>
								<?php }?>
								</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Cuff</label>
		<div class="col-sm-8">
			<select class="form-control" id="pant_cuff" name="pant_cuff" required>
								<?php $sqlFabric = "select * from pant_cuff";
										$resfabric = mysql_query($sqlFabric) or die(mysql_error());
										while($rowFabric = mysql_fetch_assoc($resfabric)){?>
											<option value="<?php echo $rowFabric['pant_cuff'];?>" 
											<?php if($row['pant_cuff'] == $rowFabric['pant_cuff']){echo " selected='selected' ";}?>><?php echo $rowFabric['pant_cuff'];?></option>
								<?php }?>
								</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Leg Break</label>
		<div class="col-sm-8">
			<select class="form-control" id="leg_break" name="leg_break" required>
								<?php $sqlFabric = "select * from pant_leg_break";
										$resfabric = mysql_query($sqlFabric) or die(mysql_error());
										while($rowFabric = mysql_fetch_assoc($resfabric)){?>
											<option value="<?php echo $rowFabric['pant_leg_break'];?>" 
											<?php if($row['leg_break'] == $rowFabric['pant_leg_break']){echo " selected='selected' ";}?>><?php echo $rowFabric['pant_leg_break'];?></option>
								<?php }?>
								</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Waist Closure</label>
		<div class="col-sm-8">
			<select class="form-control" id="waist_closure" name="waist_closure" required>
								<?php $sqlFabric = "select * from pant_waist_closure";
										$resfabric = mysql_query($sqlFabric) or die(mysql_error());
										while($rowFabric = mysql_fetch_assoc($resfabric)){?>
											<option value="<?php echo $rowFabric['pant_waist_closure'];?>" 
											<?php if($row['waist_closure'] == $rowFabric['pant_waist_closure']){echo " selected='selected' ";}?>><?php echo $rowFabric['pant_waist_closure'];?></option>
								<?php }?>
								</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Belt Loops</label>
		<div class="col-sm-8">
			<select class="form-control" id="belt_loops" name="belt_loops" required>
								<?php $sqlFabric = "select * from pant_belt_loop";
										$resfabric = mysql_query($sqlFabric) or die(mysql_error());
										while($rowFabric = mysql_fetch_assoc($resfabric)){?>
											<option value="<?php echo $rowFabric['pant_belt_loop'];?>" 
											<?php if($row['belt_loops'] == $rowFabric['pant_belt_loop']){echo " selected='selected' ";}?>><?php echo $rowFabric['pant_belt_loop'];?></option>
								<?php }?>
								</select>
		</div>
	</div>
	<hr/>
	<h3>Vest Coat</h3>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Type</label>
		<div class="col-sm-8">
			<select class="form-control" id="vest_coat_type" name="vest_coat_type" required>
								<?php $sqlFabric = "select * from vest_coat_type";
										$resfabric = mysql_query($sqlFabric) or die(mysql_error());
										while($rowFabric = mysql_fetch_assoc($resfabric)){?>
											<option value="<?php echo $rowFabric['vest_coat_type'];?>" 
											<?php if($row['vest_coat_type'] == $rowFabric['vest_coat_type']){echo " selected='selected' ";}?>><?php echo $rowFabric['vest_coat_type'];?></option>
								<?php }?>
								</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Buttons</label>
		<div class="col-sm-8">
			<select class="form-control" id="vest_coat_buttons" name="vest_coat_buttons" required>
								<?php $sqlFabric = "select * from vest_coat_button";
										$resfabric = mysql_query($sqlFabric) or die(mysql_error());
										while($rowFabric = mysql_fetch_assoc($resfabric)){?>
											<option value="<?php echo $rowFabric['vest_coat_button'];?>" 
											<?php if($row['vest_coat_buttons'] == $rowFabric['vest_coat_button']){echo " selected='selected' ";}?>><?php echo $rowFabric['vest_coat_button'];?></option>
								<?php }?>
								</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Pocket Number</label>
		<div class="col-sm-8">
			<select class="form-control" id="vest_coat_pocket_number" name="vest_coat_pocket_number" required>
								<?php $sqlFabric = "select * from vest_coat_pocket_number";
										$resfabric = mysql_query($sqlFabric) or die(mysql_error());
										while($rowFabric = mysql_fetch_assoc($resfabric)){?>
											<option value="<?php echo $rowFabric['vest_coat_pocket_number'];?>" 
											<?php if($row['vest_coat_pocket_number'] == $rowFabric['vest_coat_pocket_number']){echo " selected='selected' ";}?>><?php echo $rowFabric['vest_coat_pocket_number'];?></option>
								<?php }?>
								</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Pocket Type</label>
		<div class="col-sm-8">
			<select class="form-control" id="vest_coat_pocket_type" name="vest_coat_pocket_type" required>
								<?php $sqlFabric = "select * from vest_coat_pocket_type";
										$resfabric = mysql_query($sqlFabric) or die(mysql_error());
										while($rowFabric = mysql_fetch_assoc($resfabric)){?>
											<option value="<?php echo $rowFabric['vest_coat_pocket_type'];?>" 
											<?php if($row['vest_coat_pocket_type'] == $rowFabric['vest_coat_pocket_type']){echo " selected='selected' ";}?>><?php echo $rowFabric['vest_coat_pocket_type'];?></option>
								<?php }?>
								</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Back Style</label>
		<div class="col-sm-8">
			<select class="form-control" id="vest_coat_back_style" name="vest_coat_back_style" required>
								<?php $sqlFabric = "select * from vest_coat_back_style";
										$resfabric = mysql_query($sqlFabric) or die(mysql_error());
										while($rowFabric = mysql_fetch_assoc($resfabric)){?>
											<option value="<?php echo $rowFabric['vest_coat_back_style'];?>" 
											<?php if($row['vest_coat_back_style'] == $rowFabric['vest_coat_back_style']){echo " selected='selected' ";}?>><?php echo $rowFabric['vest_coat_back_style'];?></option>
								<?php }?>
								</select>
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
			<select class="form-control" id="label" name="label" required>
								<?php $sqlFabric = "select * from label";
										$resfabric = mysql_query($sqlFabric) or die(mysql_error());
										while($rowFabric = mysql_fetch_assoc($resfabric)){?>
											<option value="<?php echo $rowFabric['label'];?>" 
											<?php if($row['label'] == $rowFabric['label']){echo " selected='selected' ";}?>><?php echo $rowFabric['label'];?></option>
								<?php }?>
								</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Under Collar Fabric</label>
		<div class="col-sm-8">
			<select class="form-control" id="under_collar_fabric" name="under_collar_fabric" required>
								<?php $sqlFabric = "select * from label_under_collar_fabric";
										$resfabric = mysql_query($sqlFabric) or die(mysql_error());
										while($rowFabric = mysql_fetch_assoc($resfabric)){?>
											<option value="<?php echo $rowFabric['label_under_collar_fabric'];?>" 
											<?php if($row['under_collar_fabric'] == $rowFabric['label_under_collar_fabric']){echo " selected='selected' ";}?>><?php echo $rowFabric['label_under_collar_fabric'];?></option>
								<?php }?>
								</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Lapel Eyelet Color</label>
		<div class="col-sm-8">
			<select class="form-control" id="lapel_eyelet_color" name="lapel_eyelet_color" required>
								<?php $sqlFabric = "select * from lapel_eyelet_color";
										$resfabric = mysql_query($sqlFabric) or die(mysql_error());
										while($rowFabric = mysql_fetch_assoc($resfabric)){?>
											<option value="<?php echo $rowFabric['lapel_eyelet_color'];?>" 
											<?php if($row['lapel_eyelet_color'] == $rowFabric['lapel_eyelet_color']){echo " selected='selected' ";}?>><?php echo $rowFabric['lapel_eyelet_color'];?></option>
								<?php }?>
								</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Cuff Type</label>
		<div class="col-sm-8">
			<select class="form-control" id="cuff_type" name="cuff_type" required>
								<?php $sqlFabric = "select * from label_cuff_type";
										$resfabric = mysql_query($sqlFabric) or die(mysql_error());
										while($rowFabric = mysql_fetch_assoc($resfabric)){?>
											<option value="<?php echo $rowFabric['jacket_cuff_type'];?>" 
											<?php if($row['cuff_type'] == $rowFabric['jacket_cuff_type']){echo " selected='selected' ";}?>><?php echo $rowFabric['jacket_cuff_type'];?></option>
								<?php }?>
								</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Lining Style</label>
		<div class="col-sm-8">
			<select class="form-control" id="linig_style" name="linig_style" required>
								<?php $sqlFabric = "select * from label_linig_style";
										$resfabric = mysql_query($sqlFabric) or die(mysql_error());
										while($rowFabric = mysql_fetch_assoc($resfabric)){?>
											<option value="<?php echo $rowFabric['label_linig_style'];?>" 
											<?php if($row['linig_style'] == $rowFabric['label_linig_style']){echo " selected='selected' ";}?>><?php echo $rowFabric['label_linig_style'];?></option>
								<?php }?>
								</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Piping & Saddle Stitch</label>
		<div class="col-sm-8">
			<select class="form-control" id="piping_saddle_stitch" name="piping_saddle_stitch" required>
								<?php $sqlFabric = "select * from label_piping_saddle";
										$resfabric = mysql_query($sqlFabric) or die(mysql_error());
										while($rowFabric = mysql_fetch_assoc($resfabric)){?>
											<option value="<?php echo $rowFabric['label_piping_saddle'];?>" 
											<?php if($row['piping_saddle_stitch'] == $rowFabric['label_piping_saddle']){echo " selected='selected' ";}?>><?php echo $rowFabric['label_piping_saddle'];?></option>
								<?php }?>
								</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Watch Pockets</label>
		<div class="col-sm-8">
			<select class="form-control" id="watch_pockets" name="watch_pockets" required>
								<?php $sqlFabric = "select * from label_watch_pockets";
										$resfabric = mysql_query($sqlFabric) or die(mysql_error());
										while($rowFabric = mysql_fetch_assoc($resfabric)){?>
											<option value="<?php echo $rowFabric['label_watch_pockets'];?>" 
											<?php if($row['watch_pockets'] == $rowFabric['label_watch_pockets']){echo " selected='selected' ";}?>><?php echo $rowFabric['label_watch_pockets'];?></option>
								<?php }?>
								</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="w2-email">Suspender Buttons</label>
		<div class="col-sm-8">
			<select class="form-control" id="suspender_buttons" name="suspender_buttons" required>
								<?php $sqlFabric = "select * from label_suspender";
										$resfabric = mysql_query($sqlFabric) or die(mysql_error());
										while($rowFabric = mysql_fetch_assoc($resfabric)){?>
											<option value="<?php echo $rowFabric['label_suspender'];?>" 
											<?php if($row['suspender_buttons'] == $rowFabric['label_suspender']){echo " selected='selected' ";}?>><?php echo $rowFabric['label_suspender'];?></option>
								<?php }?>
								</select>
		</div>
	</div>

					</div>
				</div>
			</div>
		</div>
		<div class="actions-continue">	
			<div class="form-group">
				<div class="col-sm-6">
					<button  class="btn btn-primary mr-xs mb-sm" style="margin-left:78%;" onclick="editWishListValues();">Update</button>
					
				</div>
				<div class="col-sm-6">
					<button  class="btn btn-primary mr-xs mb-sm" style="margin-left:78%;"  onclick="cancelWishList();">Cancel</button>
				</div>
			</div>
		</div>
     </form>
	</div>
</div>
