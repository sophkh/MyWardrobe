<?php 
include("includes/db_connect.php");
error_reporting(0);
 session_start();
$uid=$_SESSION["uid"];
$sqlUser = "select * from users WHERE serial = '".$uid."' ";
$result = mysql_query($sqlUser) or die(mysql_error());
$row = mysql_fetch_assoc($result);
?>

<script>
			function passwordMatch() {
			  var pass1 = document.getElementById('password');
			  var pass2 = document.getElementById('pass2');			  
			  var message = document.getElementById('confirmMessage');
			 
			  var goodColor = "#66cc66";
			  var badColor = "#FF9797";
			  
			  if(pass1.value == pass2.value){				  
				  pass2.style.backgroundColor = goodColor;
				  message.style.color = goodColor;
				  message.innerHTML = "Passwords Match!"
			  }else{				  
				  pass2.style.backgroundColor = badColor;
				  message.style.color = badColor;
				  message.innerHTML = "Passwords Do Not Match!" }
			}
		</script>
<section class="panel" id="content">
				<div class="panel-body">
									<form class="form-horizontal form-bordered" method="post" action="editPersonalInfo.php" data-toggle="validator">
										
										<div class="form-group">
											<label class="col-md-3 control-label" for="inputDefault">User Name</label>
											<div class="col-md-6">
												<input type="text" class="form-control" id="username" name="username" value="<?php echo $row['username']?>" placeholder="Your Full Name" required>
											</div>
										</div>
																		
										<div class="form-group">
											<label class="col-md-3 control-label" for="inputDefault">Email</label>
											<div class="col-md-6">
												<input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']?>" placeholder="esophia.sag27@gmail.com" required>
											</div>
										</div>
										
										<div class="form-group">
											<label class="col-md-3 control-label" for="inputDefault">Password</label>
											<div class="col-md-6">
												<input type="password" class="form-control" id="password" name="password" value="<?php echo $row['password']?>" placeholder="Enter Your Password" required>
											</div>

										</div>
										<div class="form-group">
											<label class="col-md-3 control-label" for="inputDefault">Confirm Password</label>
											<div class="col-md-6">
												<input type="password" class="form-control" id="pass2" name="password2" value="<?php echo $row['password']?>" placeholder="Please re-type your Password" onkeyup="passwordMatch();" required> <span id="confirmMessage" class="confirmMessage"></span></div>
										</div>
										
										<div class="form-group">
											<label class="col-md-3 control-label" for="inputDefault">Address</label>
											<div class="col-md-6">
												<input type="text" class="form-control" id="address" name="address" value="<?php echo $row['address']?>" placeholder="Your Address" required>
											</div>
										</div>
										
										<div class="form-group">
											<label class="col-md-3 control-label" for="inputDefault">Contact</label>
											<div class="col-md-6">
												<input type="text" class="form-control" id="contact" name="contact" value="<?php echo $row['contact']?>" 
                                                pattern="^(?:(?:\+?1\s*(?:[.-]\s*)?)?(?:\(\s*([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9])\s*\)|([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9]))\s*(?:[.-]\s*)?)?([2-9]1[02-9]|[2-9][02-9]1|[2-9][02-9]{2})\s*(?:[.-]\s*)?([0-9]{4})(?:\s*(?:#|x\.?|ext\.?|extension)\s*(\d+))?$"
                                                placeholder="Please enter your phone number in US format" required>
                                                <p></p>
                                                <div class="col-md-6">
												<input type="submit" value="Save" class="btn btn-primary" data-loading-text="Loading...">
												<a href="dashboardPage.php" class="btn btn-primary" >Cancel</a>
											</div>

											</div>
										</div>

											
					
									</form>
								</div>				
</section>