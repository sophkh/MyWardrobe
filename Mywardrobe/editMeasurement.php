<?php 
error_reporting(0);
include("includes/db_connect.php");
 session_start();
$uid=$_SESSION["uid"];
$sqlUser = "select * from users WHERE serial = '".$uid."' ";
$result = mysql_query($sqlUser) or die(mysql_error());
$row = mysql_fetch_assoc($result);
?>

<section class="panel" id="content">
	<div class="row">
		<div class="col-md-5">
			
				<form class="form-horizontal form-bordered" method="post">
									
									<div class="form-group">
                                    <p class="bg-info"> Please enter all the measurements in Inches.</p>
										<label class="col-md-5 control-label" for="inputDefault">Arm's Length</label>
										<div class="col-md-7">
											<input type="number" min="0" step="0.1" class="form-control" id="arm" name="arm" value="<?php echo $row['arm']?>" onFocus="getPicMeasurement(1);" placeholder="Your Arm Length" required>
										</div>
                                      
									</div>
									
									<div class="form-group">
										<label class="col-md-5 control-label" for="inputDefault">Chest</label>
										<div class="col-md-7">
											<input type="number" min="0" step="0.1" class="form-control" id="chest" name="chest" value="<?php echo $row['chest']?>" placeholder="Your Chest Size" onFocus="getPicMeasurement(2);" required>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-5 control-label" for="inputDefault">Front Length</label>
										<div class="col-md-7">
											<input type="number" min="0" step="0.1" class="form-control" id="overarm" name="overarm"  onFocus="getPicMeasurement(3);" value="<?php echo $row['overarm']?>" placeholder="Your Overarm Size" required>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-5 control-label" for="inputDefault">Waist</label>
										<div class="col-md-7">
											<input type="number" min="0" step="0.1" class="form-control" id="waist" name="waist" onFocus="getPicMeasurement(4);" value="<?php echo $row['waist']?>" placeholder="Your Waist Size" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-5 control-label" for="inputDefault">Inseam Length</label>
										<div class="col-md-7">
											<input type="number" min="0" step="0.1" class="form-control" id="pant" name="pant" onFocus="getPicMeasurement(5);" value="<?php echo $row['pant']?>" placeholder="Your Pant Length" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-5 control-label" for="inputDefault">Rise</label>
										<div class="col-md-7">
											<input type="number" min="0" step="0.1" class="form-control" id="seat" name="seat" onFocus="getPicMeasurement(6);" value="<?php echo $row['seat']?>" placeholder="Your Seat Size" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-5 control-label" for="inputDefault">Pant's Length</label>
										<div class="col-md-7">
											<input type="number" min="0" step="0.1" class="form-control" id="thigh" name="thigh" onFocus="getPicMeasurement(7);" value="<?php echo $row['thigh']?>" placeholder="Your Thigh Size" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-5 control-label" for="inputDefault">Shoulder's Length</label>
										<div class="col-md-7">
											<input type="number" min="0" step="0.1" class="form-control" id="outseam" name="outseam"  onFocus="getPicMeasurement(8);" value="<?php echo $row['outseam']?>" placeholder="Your Out Seam Size" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-5 control-label" for="inputDefault">Suit-waist</label>
										<div class="col-md-7">
											<input type="number" min="0" step="0.1" class="form-control" id="suitWaist" name="suitWaist"  onFocus="getPicMeasurement(9);" value="<?php echo $row['suitWaist']?>" placeholder="Your Out Seam Size" required>
										</div>
									</div>
									<div>
											<input type="submit" value="Save" class="col-md-3 btn btn-primary pull-right mb-xl" style="margin-right: 29px;" onclick="setMeasurements();" data-loading-text="Loading...">
											<div>
                                            <input type="button" value="Cancel" onclick="window.location.href='measurementPage.php'" style="margin-right: 29px;" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">
                                            </div>
									</div>
									
				
								</form>
			
		</div>
		<div class="col-md-7">
			<div id="measurement">	
				<img src="img/Measurement/1.jpg" class="img-rounded" width="100%" height="100%">
			</div>
		</div>	
	</div>			
</section>