<?php
error_reporting(0);
	session_start();
	if($_SESSION["uid"]==""){
		echo "<script language='javascript'>document.location.href='index.php';</script>";
	}
 $serial = $_POST['id'];
	
 $name=$_SESSION["name"];
 $uid=$_SESSION["uid"];
 $email=$_SESSION["email"];
 $role=$_SESSION["role"];

include("includes/db_connect.php");

 $sqlUser = "select * from users WHERE serial='".$uid."'"; 
 $result1 = mysql_query($sqlUser) or die(mysql_error());	
$row=mysql_fetch_array($result1);	

 $sqlUser1 = "select * from build_suit WHERE user_id='".$uid."' AND serial='".$serial."'";
$result = mysql_query($sqlUser1) or die(mysql_error());
$row1=mysql_fetch_array($result);
	
?>

<div role="main" class="main shop" id="check">

	<section class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active">Profile</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h1>Checkout</h1>
				</div>
			</div>
		</div>
	</section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<form action="check_In.php" id="frmCalculateShipping" method="post">
				<div class="panel-group" id="accordion">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
									Billing Address
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="accordion-body collapse in">
							<div class="panel-body">
									
									<div class="row">
										<div class="form-group">
											<div class="col-md-6">
												<label>Your Name</label>
												<input type="text" value="<?php echo $row["username"]; ?>" id="username" name="username" class="form-control" >
											</div>
											<div class="col-md-6">
												<label>Email</label>
												<input type="text" value="<?php echo $row["email"]; ?>" id="email" name="email" class="form-control" >
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-6">
												<label>Contact</label>
												<input type="text" value="<?php echo $row["contact"]; ?>" id="contact" name="contact" class="form-control" >
											</div>
											<div class="col-md-6">
											
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label>Address </label>
												<input type="text" value="<?php echo $row["address"]; ?>" id="address" name="address" class="form-control" >
											</div>
										</div>
									</div>
							</div>
						</div>
					</div>
					<div class="featured-boxes">
					<div class="row">
						<div class="col-sm-6">
							<div class="featured-box featured-box-primary align-left mt-xlg">
								<div class="box-content">
									<h4 class="heading-primary text-uppercase mb-md">Payment</h4>
										<div class="row">
										<input type="hidden" value="<?php echo $serial; ?>" id="serial" name="serial" class="form-control" >
											<div class="form-group">
												<div class="col-md-12">
													<label>Payment</label>
													<select class="form-control" id="payment" name="payment" required>
														<option value="">Select a Payment Through</option>
														<option value="Cheque">Cheque</option>
														<option value="PayPal">PayPal</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<div class="col-md-12">
													<label>Account Number</label>
													<input type="text" id="accountNumber" name="accountNumber" class="form-control" required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<div class="col-md-6">
													<label>Amount</label>
													<input type="text" id="user_paid_amount" name="user_paid_amount" class="form-control" required>
												</div>
												<div class="col-md-6">
													<label>Currency</label>
													<select class="form-control" id="currency" name="currency" required>
														<option value="">Select a Currency</option>
														<option value="Dollar">US-Dollar</option>
														<option value="Pounds">Pounds</option>
														<option value="Pakistani Rupees">Pakistani Rupees</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<input type="submit" value="Place Order" class="btn btn-primary mr-xs mb-sm" data-loading-text="Loading...">
											</div>
										</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="featured-box featured-box-primary align-left mt-xlg">
								<div class="box-content">
									<h4 class="heading-primary text-uppercase mb-md">Cart Totals</h4>
									<table class="cart-totals">
										<tbody>
											<tr class="cart-subtotal">
												<th>
													<strong>Cart Subtotal</strong>
												</th>
												<td>
													<strong><span class="amount">$<?php echo $row1["cart_price"]; ?></span></strong>
												</td>
											</tr>
											<tr class="shipping">
												<th>
													Shipping
												</th>
												<td>
													$<?php echo $row1["shipping"]; ?>
												</td>
											</tr>
											<tr class="total">
												<th>
													<strong>Order Total</strong>
												</th>
												<td>
													<strong><span class="amount">$<?php echo ($row1["cart_price"]+$row1["shipping"]); ?></span></strong>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					</div>
				</div>
				</form>
			</div>
			
		</div>

	</div>

</div>
