<?php include("includes/db_connect.php");
$serial = $_POST['id']; 
error_reporting(0);
 $sqlUser = "select * from build_suit WHERE serial='".$serial."'"; 
$result = mysql_query($sqlUser) or die(mysql_error());
$row = mysql_fetch_assoc($result);

?>

<div class="row" id="content">	
	<div class="row">
	
        <div class="col-md-6" style="overflow: scroll; height:400px; overflow-x:hidden;">				
			<form class="form-horizontal" novalidate method="post" >
					<h3>Fabric</h3>
					<div class="form-group">
						<label class="col-sm-4" style="text-align:right;">Fabric</label>
						<div class="col-sm-8">								
								<?php 
								$fabricname = $row['fabric'];
								$sqlFabric = "select * from fabric WHERE name='".$fabricname."'";
								$resfabric = mysql_query($sqlFabric) or die(mysql_error());
								$rowFabric = mysql_fetch_assoc($resfabric); ?>
								<?php echo $rowFabric['description'];?>                                
						</div>
					</div>
					<h3>Jacket</h3>
					<div class="form-group">
						<label class="col-sm-4" style="text-align:right;">Type</label>
						<div class="col-sm-8">
							<?php echo $row['type_button']; ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4" style="text-align:right;">Lapel Type</label>
						<div class="col-sm-8">
							<?php echo $row['lapel_type']; ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4" style="text-align:right;">Lapel Size</label>
						<div class="col-sm-8">
							<?php echo $row['lapel_size']; ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4" style="text-align:right;">Vent</label>
						<div class="col-sm-8">
							<?php echo $row['vent']; ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4" style="text-align:right;">Breast Pockets</label>
						<div class="col-sm-8">
							<?php echo $row['brest_pockets']; ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4" style="text-align:right;">Side Pockets</label>
						<div class="col-sm-8">
							<?php echo $row['side_pockets']; ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4" style="text-align:right;">Hacking Pockets</label>
						<div class="col-sm-8">
							<?php echo $row['hacking_pockets']; ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4" style="text-align:right;">Ticket Pockets</label>
						<div class="col-sm-8">
							<?php echo $row['ticket_pockets']; ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4" style="text-align:right;">Button Types</label>
						<div class="col-sm-8">
							<?php echo $row['button_types']; ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4" style="text-align:right;">Button Styles</label>
						<div class="col-sm-8">
							<?php 
								$buttonstyle = $row['button_styles'];
								$sqlButton = "select * from jacket_button_style WHERE jacket_button_style='".$buttonstyle."'";
								$resbutton = mysql_query($sqlButton) or die(mysql_error());
								$rowButton = mysql_fetch_assoc($resbutton); ?>
								<?php echo $rowButton['description'];?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4" style="text-align:right;">Stiching</label>
						<div class="col-sm-8">
							<?php echo $row['stitching']; ?>
						</div>
					</div>
					<h3>Pant</h3>
					<div class="form-group">
						<label class="col-sm-4" style="text-align:right;">Pleat</label>
						<div class="col-sm-8">
							<?php echo $row['pleat']; ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4" style="text-align:right;">Side Pocket</label>
						<div class="col-sm-8">
							<?php echo $row['pant_side_pockets']; ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4" style="text-align:right;">Back Pocket</label>
						<div class="col-sm-8">
							<?php echo $row['pant_back_pockets']; ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4" style="text-align:right;">Cuff</label>
						<div class="col-sm-8">
							<?php echo $row['pant_cuff']; ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4" style="text-align:right;">Leg Break</label>
						<div class="col-sm-8">
							<?php echo $row['leg_break']; ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4" style="text-align:right;">Waist Closure</label>
						<div class="col-sm-8">
							<?php echo $row['waist_closure']; ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4" style="text-align:right;">Belt Loops</label>
						<div class="col-sm-8">
							<?php echo $row['belt_loops']; ?>
						</div>
					</div>
					<h3>Vest Coat</h3>
					<div class="form-group">
						<label class="col-sm-4" style="text-align:right;">Type</label>
						<div class="col-sm-8">
							<?php echo $row['vest_coat_type']; ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4" style="text-align:right;">Buttons</label>
						<div class="col-sm-8">
							<?php echo $row['vest_coat_buttons']; ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4" style="text-align:right;">Pocket Number</label>
						<div class="col-sm-8">
							<?php echo $row['vest_coat_pocket_number']; ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4" style="text-align:right;">Pocket Type</label>
						<div class="col-sm-8">
							<?php echo $row['vest_coat_pocket_type']; ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4" style="text-align:right;">Back Style</label>
						<div class="col-sm-8">
							<?php echo $row['vest_coat_back_style']; ?>
						</div>
					</div>
					<h3>Label</h3>
					<div class="form-group">
						<label class="col-sm-4" style="text-align:right;">Label</label>
						<div class="col-sm-8">
							<?php echo $row['label']; ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4" style="text-align:right;">Under Colllar Fabric</label>
						<div class="col-sm-8">
							<?php echo $row['under_collar_fabric']; ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4" style="text-align:right;">Lapel Eyelet Color</label>
						<div class="col-sm-8">
							<?php echo $row['lapel_eyelet_color']; ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4" style="text-align:right;">Cuff Type</label>
						<div class="col-sm-8">
							<?php echo $row['cuff_type']; ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4" style="text-align:right;">Lining Style</label>
						<div class="col-sm-8">
							<?php echo $row['linig_style']; ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4" style="text-align:right;">Piping & Saddle Stitch</label>
						<div class="col-sm-8">
							<?php echo $row['piping_saddle_stitch']; ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4" style="text-align:right;">Watch Pockets</label>
						<div class="col-sm-8">
							<?php echo $row['watch_pockets']; ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4" style="text-align:right;">Suspender Buttons</label>
						<div class="col-sm-8">
							<?php echo $row['suspender_buttons']; ?>
						</div>
					</div>
					
				</form>
		</div>
		<div class="col-md-6">	
			<div class="row lightbox mt-xl" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
								<div class="col-md-12">
									<a class="img-thumbnail" href="img/1.jpg" data-plugin-options='{"type":"image"}'>
										<img class="img-responsive" src="img/1.jpg" alt="Office">
										<span class="zoom">
											<i class="fa fa-search"></i>
										</span>
									</a>
								</div>
								
							</div>
		</div>
        <div class="row">
        	<div class="col-md-6">
        		<a  class="btn btn-default mr-xs mb-sm" style="margin-left:78%;" href="myOrdersPage.php">Back</a>
            </div>
        </div>
	</div>			
</div>									