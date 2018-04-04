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

		<!-- Basic -->
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Appointment</title>	

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


<!-- Admin Extension Specific Page Vendor CSS -->

		<link rel="stylesheet" href="admin/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />
		<link rel="stylesheet" href="admin/assets/vendor/jquery-ui/jquery-ui.css" />
		<link rel="stylesheet" href="admin/assets/vendor/jquery-ui/jquery-ui.theme.css" />
		<link rel="stylesheet" href="admin/assets/vendor/select2/css/select2.css" />
		<link rel="stylesheet" href="admin/assets/vendor/select2-bootstrap-theme/select2-bootstrap.css" />
		<link rel="stylesheet" href="admin/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="admin/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css" />
		<link rel="stylesheet" href="admin/assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css" />
		<link rel="stylesheet" href="admin/assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="admin/assets/vendor/dropzone/basic.css" />
		<link rel="stylesheet" href="admin/assets/vendor/dropzone/dropzone.css" />
		<link rel="stylesheet" href="admin/assets/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css" />
		<link rel="stylesheet" href="admin/assets/vendor/summernote/summernote.css" />
		<link rel="stylesheet" href="admin/assets/vendor/summernote/summernote-bs3.css" />
		<link rel="stylesheet" href="admin/assets/vendor/codemirror/lib/codemirror.css" />
		<link rel="stylesheet" href="admin/assets/vendor/codemirror/theme/monokai.css" />

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

		<div>
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
													<li class="dropdown active">
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

			<div role="main" class="main">

				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">Appointment</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Appointment</h1>
							</div>
						</div>
					</div>
				</section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<section class="panel">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
										<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
									</div>
					
									<h2>Make Appointment</h2>
								</header>
								<div class="panel-body">
								
									<form class="form-horizontal form-bordered" action="addAppointment.php" method="post">
											<div class="form-group">
											<label class="col-md-3 control-label">Select Appointment Type</label>
											<div class="col-md-6">
												<select data-plugin-selectTwo class="form-control populate" id="type" name="type" required>
														<option value="AK">Please Select Option</option>
														<option value="First Measurement">First Measurement</option>
														<option value="Picking up my First Suit">Picking up my First Suit</option>
														<option value="Existing Customer">Existing Customer</option>
												</select>
											</div>
											</div>
											<div class="form-group">
											<label class="col-md-3 control-label">Select location for your Appointment</label>
											<div class="col-md-6">
												<select data-plugin-selectTwo class="form-control populate" id="location" name="location" required>
														<option value="">Please Select Option</option>
														<option value="Herald Square - NYC">Herald Square - NYC</option>
														<option value="Westchester Mall - NY">Westchester Mall - NY</option>
														<option value="Madison Avenue - NYC">Madison Avenue - NYC</option>
														<option value="Wall Street - NYC">Wall Street - NYC</option>
														<option value="Walnut Street - Philadelphiya">Walnut Street - Philadelphiya</option>
												</select>
											</div>
											</div>
											<div class="form-group">
											<label class="col-md-3 control-label">Full Name</label>
											<div class="col-md-6">
											<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
											</div>
											</div>
											<div class="form-group">
											<label class="col-md-3 control-label">Email</label>
											<div class="col-md-6">
											<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
											</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label">Date</label>
												<div class="col-md-6">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</span>
														<input id="date" name="date"  type="date" data-plugin-masked-input data-input-mask="9999/99/99" placeholder="____/__/__" class="form-control">
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label">Time</label>
												<div class="col-md-6 control-label">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-clock-o"></i>
														</span>
														<input id="time" name="time" type="time" placeholder="Please Select time" class="form-control">
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label">Phone</label>
												<div class="col-md-6 control-label">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-phone"></i>
														</span>
														<input id="phone" name="phone" data-plugin-masked-input data-input-mask="(999) 999-9999" placeholder="(123) 123-1234" class="form-control">
													</div>
												</div>
											</div>
											<div class="form-group">
											<label class="col-md-3 control-label">Comment</label>
											<div class="col-md-6">
											<textarea id="comment" name="comment" class="form-control" required></textarea>
											</div>
											</div>
											<div class="col-md-6">
												<button type="submit" class="btn btn-primary" style="margin-left:52%;">Submit</button>
												<button type="reset" class="btn btn-default">Reset</button>
											</div>
									</form>
								</div>
							</section>
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

		<!-- Admin Extension Specific Page Vendor -->
		<script src="admin/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="admin/assets/vendor/jquery-placeholder/jquery-placeholder.js"></script>
		<script src="admin/assets/vendor/jquery-ui/jquery-ui.js"></script>
		<script src="admin/assets/vendor/jqueryui-touch-punch/jqueryui-touch-punch.js"></script>
		<script src="admin/assets/vendor/select2/js/select2.js"></script>
		<script src="admin/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="admin/assets/vendor/jquery-maskedinput/jquery.maskedinput.js"></script>
		<script src="admin/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
		<script src="admin/assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
		<script src="admin/assets/vendor/bootstrap-timepicker/bootstrap-timepicker.js"></script>
		<script src="admin/assets/vendor/fuelux/js/spinner.js"></script>
		<script src="admin/assets/vendor/dropzone/dropzone.js"></script>
		<script src="admin/assets/vendor/bootstrap-markdown/js/markdown.js"></script>
		<script src="admin/assets/vendor/bootstrap-markdown/js/to-markdown.js"></script>
		<script src="admin/assets/vendor/bootstrap-markdown/js/bootstrap-markdown.js"></script>
		<script src="admin/assets/vendor/codemirror/lib/codemirror.js"></script>
		<script src="admin/assets/vendor/codemirror/addon/selection/active-line.js"></script>
		<script src="admin/assets/vendor/codemirror/addon/edit/matchbrackets.js"></script>
		<script src="admin/assets/vendor/codemirror/mode/javascript/javascript.js"></script>
		<script src="admin/assets/vendor/codemirror/mode/xml/xml.js"></script>
		<script src="admin/assets/vendor/codemirror/mode/htmlmixed/htmlmixed.js"></script>
		<script src="admin/assets/vendor/codemirror/mode/css/css.js"></script>
		<script src="admin/assets/vendor/summernote/summernote.js"></script>
		<script src="admin/assets/vendor/bootstrap-maxlength/bootstrap-maxlength.js"></script>
		<script src="admin/assets/vendor/ios7-switch/ios7-switch.js"></script>
		<script src="admin/assets/vendor/bootstrap-confirmation/bootstrap-confirmation.js"></script>

		<!-- Admin Extension -->
		<script src="admin/assets/javascripts/theme.admin.extension.js"></script>

		<!-- Admin Extension Examples -->
		<script src="admin/assets/javascripts/forms/examples.advanced.form.js"></script>
		
		<!-- Theme Custom -->
		<script src="js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

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