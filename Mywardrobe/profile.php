<?php include("includes/db_connect.php");
error_reporting(0);
 session_start();
 $name=$_SESSION["name"];
 $uid=$_SESSION["uid"];
 $email=$_SESSION["email"];
 $role=$_SESSION["role"];

 $sqlUser = "select * from users WHERE serial='".$uid."'"; 
 $result1 = mysql_query($sqlUser) or die(mysql_error());
 
 ?>
<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Profile</title>	

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
		    <link rel="stylesheet" href="vendor/datatables/dataTables.bootstrap.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">
		<link rel="stylesheet" href="css/theme-animate.css">

		<!-- Admin Extension Specific Page Vendor CSS -->
		<link rel="stylesheet" href="admin/assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css" />

		<!-- Admin Extension CSS -->
		<link rel="stylesheet" href="admin/assets/stylesheets/theme-admin-extension.css">

		<!-- Admin Extension Skin CSS -->
		<link rel="stylesheet" href="admin/assets/stylesheets/skins/extension.css">

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
														<li class="dropdown active">
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
													<li >
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

			<div role="main" class="main" id="profile">

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
								<h1>Profile</h1>
							</div>
						</div>
					</div>
				</section>
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">					
							<div class="navbar-default sidebar" role="navigation">
								<div class="sidebar-nav navbar-collapse">
									<ul class="nav" id="side-menu">
										<li class="active">
											<a  href="dashboardPage.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
										</li>
										<li>
											<a  href="myOrdersPage.php" ><i class="fa fa-shopping-cart"></i> My Orders</a>
										</li>
										<li>
											<a  href="measurementPage.php"><i class="fa fa-list"></i> My Measurements</a>
										</li>
										<li>
											<a  href="myWhishListPage.php"><i class="fa fa-cart-arrow-down"></i> My Wish List</a>
										</li>
										<li>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#smallModal"><i class="fa fa-circle-o-notch"></i> Deactivate Account</a>
										</li>
									</ul>
								</div>
								<!-- /.sidebar-collapse -->
							</div>
							<!-- /.navbar-static-side -->
       					 </nav>
						</div>
						<div class="col-lg-8">
							<div id="content">	
							<?php while($row=mysql_fetch_array($result1)){?>				
								<div class="row">
									<div class="col-xs-9" >
										<h2 class="mb-none"><strong><i class="fa fa-user"></i> <?php echo $row["username"]; ?></strong></h2>
										<h4 class="heading-primary"><?php echo $row["email"]; ?></h4>
									</div>
									 <div class="col-xs-3" style="text-align:right;" >
										<button type="button" class="btn btn-primary mr-xs mb-sm" onClick="getPersonalIfo();">Edit Information</button>
									</div>
								</div>
							
								<hr class="solid">
								<div class="row">
									<div class="col-xs-12" >
									<ul class="list list-icons">
									
										<li><i class="fa fa-check"></i>Name : <?php echo $row["username"];?></li>
										<li><i class="fa fa-envelope"></i>Email : <?php echo $row["email"];?></li>
										<li><i class="fa fa-map-marker"></i>Address : <?php echo $row["address"];?></li>
										<li><i class="fa fa-phone"></i>Phone No : <?php echo $row["contact"];?></li>						
										
									</ul>
									</div>
								</div>	
							<?php }?>
							</div>
						</div>
					</div>
				</div>

			</div>

			
			
			
			<div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-sm">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
													<h4 class="modal-title" id="smallModalLabel">Warning</h4>
												</div>
												<div class="modal-body">
													<p>Are You Sure You Want to Deactivate Your Account?</p>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
													<button type="button" class="btn btn-primary" onClick="deleteUser(<?php echo $uid; ?>);">Yes</button>
												</div>
											</div>
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
									<li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:sophia.sag27@gmail.com">sophia.sag27@gmail.com</a></p>
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

		<!-- Admin Extension Specific Page Vendor -->
		<script src="admin/assets/vendor/autosize/autosize.js"></script>
		<script src="admin/assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>

		<!-- Admin Extension -->
		<script src="admin/assets/javascripts/theme.admin.extension.js"></script>
		
		<!-- Theme Custom -->
		<script src="js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>


	</body>
</html>
