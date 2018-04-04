<?php
 include("includes/db_connect.php");
error_reporting(0);
  session_start();
 $name=$_SESSION["name"];
 $serial=$_SESSION["serial"];
 $role=$_SESSION["role"];
  $uid=$_SESSION["uid"];

//My Order Items
$sqlUser = "select * from  build_suit WHERE user_id='".$uid."' AND status='active'";
$result = mysql_query($sqlUser) or die(mysql_error());
$i=1;

//My Deliver Items
$sqlDeliv = "select * from  build_suit WHERE user_id='".$uid."' AND delivered='Delivered'";
$resultDeliv = mysql_query($sqlDeliv) or die(mysql_error());
$ii=1;

//My Wish List Item
$sqlWish = "select * from build_suit WHERE user_id='".$uid."' AND status='inactive'";
$resultWish = mysql_query($sqlWish) or die(mysql_error());

//Self Measuremnet
$sql = "select * from  users WHERE serial='".$uid."'";
$res = mysql_query($sql) or die(mysql_error());

//Previous Appoinment
$sqlNext = "select * from  appointments WHERE user_id='".$uid."'  AND Date(`appointment_date`) >=DATE(NOW())";
$resNext = mysql_query($sqlNext) or die(mysql_error());

//Next Appointment
$sqlPrev = "select * from  appointments WHERE user_id='".$uid."'  AND Date(`appointment_date`) < DATE(NOW())";
$resPrev = mysql_query($sqlPrev) or die(mysql_error());

?>
 
 
 
<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>My Closet</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.css">
		<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">
		<link rel="stylesheet" href="css/theme-animate.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/default.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.js"></script>

	</head>
	<body>

		<div class="body">
			<header id="header" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}'>
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-logo">
									<a href="index.php">
										<img alt="Porto" width="250" height="74" data-sticky-width="162" data-sticky-height="50" data-sticky-top="33" src="img/logo.png">									</a>								</div>
							</div>
							<div class="header-column">
								<div class="header-row">
									
								</div>
								<div class="header-row">
									<div class="header-nav">
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
											<i class="fa fa-bars"></i>										</button>
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
											<nav>
												<ul class="nav nav-pills" id="mainNav">
												
													<li>
														<a href="index.php">Home</a>													</li>
													<?php if($_SESSION["name"] != ""){ ?>
														<li>
														<a  href="profile.php">
															Profile														</a>													</li>
													<?php }?>
													<li >
														<a href="build-suit.php">
															Build Suit														</a>													</li>
													<li>
														<a  href="Appointment.php">
															Appointment														</a>													</li>
													<?php if($_SESSION["name"] != ""){ ?>
													<li  class="dropdown active">
														<a  href="my-closet.php">
															My Closet														</a>													</li>
													<?php }else{ ?>
													<li >
														<a  href="login-page.php">
															My Closet														</a>													</li>
													<?php } ?>		
													<li>
														<a href="contact-us.php">
															Contact Us														</a>													</li>
													<?php if($_SESSION["name"] != ""){ ?>
														<li>
														<a href="logout.php">
															Logout														</a>													</li>
													<?php }else{ ?>
														<li>
														<a href="login-page.php">
															Login														</a>													</li>
													<?php }?>		
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main shop">
			<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">My Closet</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>My Closet</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<h3>New Orders</h3>
						</div>
						<div class="col-md-4">
								<div class="call-to-action-btn" style="margin-left:62%;">
										<a href="build-suit.php" class="btn btn-3d btn-primary mr-xs mb-sm" >Place New Order</a>
									</div>
							</div>
					</div>
					<section class="call-to-action call-to-action-default mb-xl">
						</br>
							<div class="row" style="text-align:left;">
								<div class="col-md-12">	
									 <div class="box">
										<div class="box-body">
										  <table id="example1" class="table table-bordered table-striped">
											<thead>
											  <tr>
												<th>Serial</th>
												<th>Token Numbers</th>
												<th>Issue Date</th>
												<th>Deliver Date</th>
												<th>Status</th>
											  </tr>
											</thead>
											<tbody>
											  <?php 
											  while($row=mysql_fetch_array($result)){?>
												<tr class="odd gradeX"> 
													<td><?php echo $i; ?></td>
													<td><?php echo $row["token_number"];?></td>
													<td><?php echo $row["created_date"];?></td>
													<td><?php echo $row["deliver_date"];?></td>
													<td><?php echo $row["delivered"];?></td>
												</tr>
												
											  <?php $i++; 
											  }?> 
											</tbody>
										  </table>
										</div><!-- /.box-body -->
									</div><!-- /.box -->
								</div>
							</div>
					</section>
					<hr/>
					<div class="row">
						<div class="col-md-12">
							<h3>Delivered Orders</h3>
						</div>
						
					</div>
					<section class="call-to-action call-to-action-default mb-xl">
						</br>
							<div class="row" style="text-align:left;">
								<div class="col-md-12">	
									 <div class="box">
										<div class="box-body">
										  <table id="example3" class="table table-bordered table-striped">
											<thead>
											  <tr>
												<th>Serial</th>
												<th>Token Number</th>
												<th>Created Date</th>
												<th>Deliver Date</th>
												<th>Status</th>
												
											  </tr>
											</thead>
											<tbody>
											  <?php 
											  while($row=mysql_fetch_array($resultDeliv)){?>
												<tr class="odd gradeX"> 
													<td><?php echo $ii; ?></td>
													<td><?php echo $row["token_number"];?></td>
													<td><?php echo $row["created_date"];?></td>
													<td><?php echo $row["deliver_date"];?></td>
													<td><?php echo $row["delivered"];?></td>
													
												</tr>
												
											  <?php $i++; 
											  }?> 
											</tbody>
										  </table>
										</div><!-- /.box-body -->
									</div><!-- /.box -->
								</div>
							</div>
					</section>
					<hr/>
					<div class="row">
						<div class="col-md-12">
							<h3>Wishlist Items</h3>
						</div>
					</div>
					<section class="call-to-action call-to-action-default mb-xl">
						</br>
							<div class="row">
								<div class="col-md-8">
									<section class="call-to-action with-borders button-centered mb-xl">
										</br>
										<div class="row" style="text-align:left;">
												<div class="col-md-12">	
													 <div class="box">
														<div class="box-body">
														  <table id="example2" class="table table-bordered table-striped">
																<thead>
																  <tr>
																	<th>Created Date</th>
																	<th>Token Number</th>
																	<th>show</th>
																  </tr>
																</thead>
																<tbody>
																  <?php while($row=mysql_fetch_array($resultWish)) { ?>
																	<tr class="odd gradeX"> 
																	
																		<td><?php echo $row["created_date"];?></td>
																		<td><?php echo $row["token_number"];?></td>
																		<td style="text-align:center;">
                                                                        <button class="btn btn-primary mr-xs mb-sm" 
                                                                        		onClick="getImgPic('<?php echo $row["fabric"]; ?>');">
                                                                        View
                                                                        </button>
                                                                        </td>
																	</tr>
																  <?php } ?> 
																</tbody>
															  </table>
														</div><!-- /.box-body -->
													</div><!-- /.box -->
												</div>
											</div>													
									</section>
								</div>
								<div class="col-md-4">
									<section class="call-to-action with-borders button-centered mb-xl">
										<div class="call-to-action-content">
											<div id="replaceView">
											<img src="img/buildSuit/WishList-image.jpg" width="81%">
											</div>
										</div>
									</section>
								</div>
							</div>
					</section>
					<hr/>

	
	<div class="container">
    				<div class="row">
                              <div class="col-md-8">
                                  <h3>My Measurements</h3>
                              </div>
                              <div class="col-md-4">
                                      <div class="call-to-action-btn" style="margin-left:62%;">
                                              <a href="measurementPage.php" class="btn btn-3d btn-primary mr-xs mb-sm">Edit Measurements</a>
                                       </div>
                               </div>
                      </div>
						<div class="col-md-5">
                        
							<section class="call-to-action call-to-action-default mb-xl">
							  <br/>
							  <?php $row=mysql_fetch_array($res); ?>
								<div class="row">
									<div class="col-md-4">
										<div> <h4 style="text-align:center;">Arm</h4></div>
										<div class="alert alert-default" style="background-color:#FFFFFF;">
											<p style="text-align:center;"><?php echo $row["arm"];?></p>
										</div>
									</div>
									<div class="col-md-4">
										<div><h4 style="text-align:center;">Chest</h4></div>
										<div class="alert alert-default" style="background-color:#FFFFFF;">
											<p style="text-align:center;"><?php echo $row["chest"];?></p>
										</div>
									</div>
									<div class="col-md-4">
										<div><h4 style="text-align:center;">Front</h4></div>
										<div class="alert alert-default" style="background-color:#FFFFFF;">
											<p style="text-align:center;"><?php echo $row["overarm"];?></p>
										</div>
									</div>
								</div>
							  <br/>	
								<div class="row">
									<div class="col-md-4">
										<h4 style="text-align:center;">Waist-P</h4>
										<div class="alert alert-default" style="background-color:#FFFFFF;">
											<p style="text-align:center;"><?php echo $row["waist"];?></p>
										</div>
									</div>
									<div class="col-md-4">
										<h4 style="text-align:center;">Inseam</h4>
										<div class="alert alert-default" style="background-color:#FFFFFF;">
											<p style="text-align:center;"><?php echo $row["pant"];?></p>
										</div>
									</div>
									<div class="col-md-4">
										<h4 style="text-align:center;">Rise</h4>
										<div class="alert alert-default" style="background-color:#FFFFFF;">
											<p style="text-align:center;"><?php echo $row["seat"];?></p>
										</div>
									</div>
								</div>
							  <br/>	
								<div class="row">
									<div class="col-md-4">
										<h4 style="text-align:center;">Pant</h4>
										<div class="alert alert-default" style="background-color:#FFFFFF;">
											<p style="text-align:center;"><?php echo $row["thigh"];?></p>
										</div>
									</div>
									<div class="col-md-4">
										<h4 style="text-align:center;">Shoulders</h4>
										<div class="alert alert-default" style="background-color:#FFFFFF;">
											<p style="text-align:center;"><?php echo $row["outseam"];?></p>
										</div>
									</div>
									<div class="col-md-4">
										<h4 style="text-align:center;">Suit-waist</h4>
										<div class="alert alert-default" style="background-color:#FFFFFF;">
											<p style="text-align:center;"><?php echo $row["suitWaist"];?></p>
										</div>
									</div>
								</div>
							  <br/>	
							</section>
						</div>

                        <div class="col-md-3">
							<section class="call-to-action with-borders button-centered mb-xl">
								<div class="col-xl-12" style="margin-right:22%; text-align:center; margin-top:20%; margin-bottom:20%;">
								<img src="img/Measurement/1.jpg" width="130%"  >
								</div>
							</section>
						</div>
						<div class="col-md-3">
							<section class="call-to-action with-borders button-centered mb-xl">
								<div class="col-xl-12" style="margin-right:22%; text-align:center;  margin-top:20%; margin-bottom:20%;">
									<img src="img/Measurement/2.jpg" width="130%"	>
								</div>	
							</section>
						</div>

					
					</div>
					<hr/>
					<div class="row">
						<div class="col-md-8">
							<h3>Appointment</h3>
						</div>
						<div class="col-md-4">
								<div class="call-to-action-btn" style="margin-left:70%;">
										<a href="Appointment.php"  class="btn btn-3d btn-primary mr-xs mb-sm">Schedule New</a>
									</div>
							</div>
					</div>			
					<div class="row">
						<div class="col-md-8">
							<section class="call-to-action call-to-action-default mb-xl">
								<div class="row">
									<div class="col-md-6" >
										<img src="img/apntmentSection.jpg"  width="100%" />
									</div>
									<div class="col-md-6" style="overflow: scroll; height:250px; overflow-x:hidden;">
										<br/>
										<h3>NEXT APPOINTMENT</h3>
										<br/>
										<div class="col-md-12" >
										<?php while($row=mysql_fetch_array($resNext)){?>
										<ul style="text-align:left;">
										<hr/>
										<li>Appointment Type : <strong> <?php echo $row["type"]; ?></strong></li>
										<li>Location : <strong> <?php echo $row["location"]; ?></strong></li>
										<li>Date : <strong> <?php echo $row["appointment_date"]; ?></strong></li>
										<li>Time : <strong> <?php echo $row["appointment_time"]; ?></strong></li>
										</ul>
										<?php }?>
										</div>
										<br/>
								</div>
								</div>
							</section>
						</div>
						<div class="col-md-4" style="overflow: scroll; height:250px; overflow-x:hidden;">
							<section class="call-to-action call-to-action-default mb-xl">
									<br/>
									<h3>PREVIOUS APPOINTMENT</h3>
										<div class="col-md-12" >
									<?php while($row=mysql_fetch_array($resPrev)){?>
										<ul style="text-align:left;">
										<hr/>
										<li>Appointment Type : <strong> <?php echo $row["type"]; ?></strong></li>
										<li>Location : <strong> <?php echo $row["location"]; ?></strong></li>
										<li>Date : <strong> <?php echo $row["appointment_date"]; ?></strong></li>
										<li>Time : <strong> <?php echo $row["appointment_time"]; ?></strong></li>
										</ul>
									<?php }?>
									</div>
										
							</section>
						</div>			
					</div>
				</section>
				</div>

			</div>

			<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="footer-ribbon">
							<span>Get in Touch</span>						</div>
						<div class="col-md-3">
							<div class="newsletter">
								<a href="index.html" class="logo">
									<img alt="Porto Website Template"  class="img-responsive" src="img/logo-footer.png">
								</a>
								
								<p style="margin-left:10px;">&copy; Copyright 2016. All Rights Reserved.</p>
								<nav id="sub-menu">
									<ul>
										<li><a href="my-closet.php">My Closet</a></li>
										<li><a href="contact-us.php">Contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
						<div class="col-md-3">
							
						</div>
						<div class="col-md-4">
							<div class="contact-details">
								<h4>Contact Us</h4>
								<ul class="contact">
									<li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</p>
									</li>
									<li><p><i class="fa fa-phone"></i> <strong>Phone:</strong> (123) 456-789</p>
									</li>
									<li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></p>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<h4>Follow Us</h4>
							<ul class="social-icons">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				
			</footer>
		</div>

		<!-- Vendor -->
		<script src="vendor/jquery/jquery.js"></script>
		<script src="vendor/jquery.appear/jquery.appear.js"></script>
		<script src="vendor/jquery.easing/jquery.easing.js"></script>
		<script src="vendor/jquery-cookie/jquery-cookie.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.js"></script>
		<script src="vendor/common/common.js"></script>
		<script src="vendor/jquery.validation/jquery.validation.js"></script>
		<script src="vendor/jquery.stellar/jquery.stellar.js"></script>
		<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js"></script>
		<script src="vendor/jquery.gmap/jquery.gmap.js"></script>
		<script src="vendor/jquery.lazyload/jquery.lazyload.js"></script>
		<script src="vendor/isotope/jquery.isotope.js"></script>
		<script src="vendor/owl.carousel/owl.carousel.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="vendor/vide/vide.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>
		<script src="js/base.js"></script>
		
		<!-- Theme Custom -->
		<script src="js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>
		<!-- DataTables -->
		<script src="vendor/datatables/jquery.dataTables.min.js"></script>
		<script src="vendor/datatables/dataTables.bootstrap.min.js"></script>				
	  <script>
		  $(function () {
			$("#example1").DataTable();
			$("#example2").DataTable();
			$("#example3").DataTable();
		  });
		</script>
		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->

	</body>
</html>
