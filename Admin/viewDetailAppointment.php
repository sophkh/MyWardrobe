<?php require_once('header.php');

 session_start();
 $uid=$_SESSION["uid"];

 $serial = $_POST['id'];

$sqlUser = "select * from appointments Where
									 serial = '".$serial."' ";
$result = mysql_query($sqlUser) or die(mysql_error());
$row = mysql_fetch_assoc($result);


echo $sql = "select * from users Where serial = '".$row['user_id']."'";
$res = mysql_query($sql) or die(mysql_error());
?>


<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row" id="content">
			<div class="col-lg-10" >
				<h1 class="page-header">View Appointment Details</h1>
			</div>
			<div class="col-lg-2" >
					<a  class="btn btn-primary page-header" href="javascript:void(0)" onClick="cancelDetailAppointment()"> Back to List </a>
                    </div>
		</div>
		<!-- /.row -->
	</div>
	
	
	<!--Inner Content -->
	

		<div class="panel panel-default" id="content">
		<div class="panel-heading">
			Requested Appointment Detail
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-primary">
						<div class="panel-heading">
						<form class="form-horizontal" novalidate method="post">
							<div class="row">
								<div class="col-lg-12">	
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Customer ID</label>
										<div class="col-sm-8">
										<input type="text" class="form-control input-sm" name="fabric" id="fabric" value="<?php echo $row['user_id']; ?>" readonly required>
										</div>
										</div>
										<hr/>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Name</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="type_button" id="type_button" value="<?php echo $row['name']; ?>" readonly required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Email</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="lapel_type" id="lapel_type" value="<?php echo $row['email']; ?>" readonly required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Appointment Date</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="lapel_size" id="lapel_size" value="<?php echo $row['appointment_date']; ?>" readonly required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Appointment Time</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="vent" id="vent" value="<?php echo $row['appointment_time']; ?>" readonly required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Type</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="brest_pockets" id="brest_pockets" value="<?php echo $row['type']; ?>" readonly required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Location</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="side_pockets" id="side_pockets" value="<?php echo $row['location']; ?>" readonly required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Phone</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" name="hacking_pockets" id="hacking_pockets" value="<?php echo $row['phone']; ?>" readonly required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="w2-email">Comment</label>
										<div class="col-sm-8">
											<textarea class="form-control input-sm" name="ticket_pockets" id="ticket_pockets" readonly required><?php echo $row['comment']; ?></textarea>
										</div>
									</div>
								</div>	
							</div>	
						</form>
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