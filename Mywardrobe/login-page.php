<?php
  session_start();
  error_reporting(0);
 $name=$_SESSION["name"];
 $serial=$_SESSION["serial"];
 $role=$_SESSION["role"];
 ?>

<!DOCTYPE html>
<html>
	<head>
    	<script>
			function passwordMatch() {
			  var pass1 = document.getElementById('pass1');
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

		<!-- Basic -->
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Login</title>	

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
									<div class="header-search hidden-xs">
										
									</div>
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
														<li class="dropdown active">
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

			<div role="main" class="main">

				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">Login</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Login</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-12">

							<div class="featured-boxes">
								<div class="row">
									<div class="col-sm-6">
										<div class="featured-box featured-box-primary align-left mt-xlg">
											<div class="box-content">
												<h4 class="heading-primary text-uppercase mb-md">Log In</h4>
												<h5 class="word-rotator-title"><?php if($_GET['msg']=="") {echo ("Please enter your E-mail and Password");} else {?>
													<font color='red'> <?php echo $_GET['msg'];?></font><?php } ?><!--END DESCRIPTION--></h5>
                                                <form action="login.php"  method="post" data-toggle="validator">
													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label>E-mail Address</label>
																<input id="email" name="email" type="email" value="" class="form-control input-lg" placeholder="Your Email"  data-error="Email address is invalid" required>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label>Password</label>
																<input id="password" name="password" type="password" value="" class="form-control input-lg" required>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<span class="remember-box checkbox">
																<label for="rememberme">
																	<input type="checkbox" id="rememberme" name="rememberme">Remember Me
																</label>
															</span>
														</div>
														<div class="col-md-6">
															<input type="submit" value="Login" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="featured-box featured-box-primary align-left mt-xlg">
											<div class="box-content">
												<h4 class="heading-primary text-uppercase mb-md">Register An Account</h4>
												<form action="addUserContent.php" method="post" data-toggle="validator">
													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label>User Name</label>
																<input type="text" id="username" name="username" class="form-control input-lg" placeholder="Your Username"  required>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label>E-mail Address</label>
																<input type="email" id="email" name="email" class="form-control input-lg" placeholder="Your Email"  required>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label>Password</label>
																<input type="password" id="pass1" name="password" class="form-control input-lg" required>
															</div>
														</div>
													</div>
                                                    <div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label>Confirm Password</label>
																<input type="password" id="pass2" name="password2"  class="form-control input-lg" onkeyup="passwordMatch();" required><div id="divCheckPassword"><span id="confirmMessage" class="confirmMessage"></span></div> 
															</div>
														</div>
													</div>
													
													<div class="row">
														<div class="col-md-12">
															<input type="submit" value="Register" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>

							</div>
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
		<div>&nbsp;</div>

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
		
		<!-- Theme Custom -->
		<script src="js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>



	</body>
</html>
