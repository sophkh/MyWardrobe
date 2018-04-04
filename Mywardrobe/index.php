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

		<title>Mywardrobe</title>	

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

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css" media="screen">
		<link rel="stylesheet" href="vendor/rs-plugin/css/layers.css" media="screen">
		<link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css" media="screen">
		<link rel="stylesheet" href="vendor/circle-flip-slideshow/css/component.css" media="screen">

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
										<form id="searchForm" action="page-search-results.html" method="get">
											
										</form>
									</div>
									
								</div>
								<div class="header-row">
									<div class="header-nav">
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
											<i class="fa fa-bars"></i>										</button>
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
											<nav>
												<ul class="nav nav-pills" id="mainNav">
												
													<li class="dropdown active">
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
				<div class="slider-container rev_slider_wrapper" style="height: 700px;">
					<div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options='{"gridwidth": 800, "gridheight": 700}'>
						<ul>
							<li data-transition="fade">
								<img src="img/slides/landing-page.jpg"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">

								<div class="tp-caption"
									data-x="center" data-hoffset="-150"
									data-y="center" data-voffset="-95"
									data-start="1000"
									style="z-index: 5"
									data-transform_in="x:[-300%];opacity:0;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption top-label"
									data-x="center" data-hoffset="0"
									data-y="center" data-voffset="-95"
									data-start="500"
									style="z-index: 5"
									data-transform_in="y:[-300%];opacity:0;s:500;">DO YOU NEED A NEW</div>

								<div class="tp-caption"
									data-x="center" data-hoffset="150"
									data-y="center" data-voffset="-95"
									data-start="1000"
									style="z-index: 5"
									data-transform_in="x:[300%];opacity:0;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption main-label"
									data-x="center" data-hoffset="0"
									data-y="center" data-voffset="-45"
									data-start="1500"
									data-whitespace="nowrap"						 
									data-transform_in="y:[100%];s:500;"
									data-transform_out="opacity:0;s:500;"
									style="z-index: 5"
									data-mask_in="x:0px;y:0px;">DRESS SUIT?</div>

								<div class="tp-caption bottom-label"
									data-x="center" data-hoffset="0"
									data-y="center" data-voffset="5"
									data-start="2000"
									style="z-index: 5"
									data-transform_in="y:[100%];opacity:0;s:500;">Check out our options and features.</div>

								<a href="build-suit.php"
                                	class="tp-caption btn btn-lg btn-primary btn-slider-action"
									data-x="center" 
                                    data-hoffset="0"
									data-y="center" 
                                    data-voffset="80"
									data-start="2200"
									data-whitespace="nowrap"						
									data-transform_in="y:[100%];s:500;"
									data-transform_out="opacity:0;s:500;"
									style="z-index: 5"
									data-mask_in="x:0px;y:0px;">Order your Custom Suit Now!</a>
								
							</li>
							<li data-transition="fade">
								<img src="img/slides/third-slide.jpg"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">

								<div class="tp-caption"
									data-x="center" data-hoffset="-150"
									data-y="center" data-voffset="-95"
									data-start="1000"
									style="z-index: 5"
									data-transform_in="x:[-300%];opacity:0;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption top-label"
									data-x="center" data-hoffset="0"
									data-y="center" data-voffset="-95"
									data-start="500"
									style="z-index: 5"
									data-transform_in="y:[-300%];opacity:0;s:500;">DO YOU NEED A NEW</div>

								<div class="tp-caption"
									data-x="center" data-hoffset="150"
									data-y="center" data-voffset="-95"
									data-start="1000"
									style="z-index: 5"
									data-transform_in="x:[300%];opacity:0;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption main-label"
									data-x="center" data-hoffset="0"
									data-y="center" data-voffset="-45"
									data-start="1500"
									data-whitespace="nowrap"						 
									data-transform_in="y:[100%];s:500;"
									data-transform_out="opacity:0;s:500;"
									style="z-index: 5"
									data-mask_in="x:0px;y:0px;">DRESS SUIT?</div>

								<div class="tp-caption bottom-label"
									data-x="center" data-hoffset="0"
									data-y="center" data-voffset="5"
									data-start="2000"
									style="z-index: 5"
									data-transform_in="y:[100%];opacity:0;s:500;">Check out our options and features.</div>

								<a class="tp-caption btn btn-lg btn-primary btn-slider-action"
									data-hash-offset="85"
									href="build-suit.php"
									data-x="center" data-hoffset="0"
									data-y="center" data-voffset="80"
									data-start="2200"
									data-whitespace="nowrap"						 
									data-transform_in="y:[100%];s:500;"
									data-transform_out="opacity:0;s:500;"
									style="z-index: 5"
									data-mask_in="x:0px;y:0px;">Order your Custom Suit Now!</a>
							</li>
							<li data-transition="fade">
								<img src="img/slides/slide-2.png"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">

								<div class="tp-caption"
									data-x="center" data-hoffset="-150"
									data-y="center" data-voffset="-95"
									data-start="1000"
									style="z-index: 5"
									data-transform_in="x:[-300%];opacity:0;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption top-label"
									data-x="center" data-hoffset="0"
									data-y="center" data-voffset="-95"
									data-start="500"
									style="z-index: 5"
									data-transform_in="y:[-300%];opacity:0;s:500;">DO YOU NEED A NEW</div>

								<div class="tp-caption"
									data-x="center" data-hoffset="150"
									data-y="center" data-voffset="-95"
									data-start="1000"
									style="z-index: 5"
									data-transform_in="x:[300%];opacity:0;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption main-label"
									data-x="center" data-hoffset="0"
									data-y="center" data-voffset="-45"
									data-start="1500"
									data-whitespace="nowrap"						 
									data-transform_in="y:[100%];s:500;"
									data-transform_out="opacity:0;s:500;"
									style="z-index: 5"
									data-mask_in="x:0px;y:0px;">DRESS SUIT?</div>

								<div class="tp-caption bottom-label"
									data-x="center" data-hoffset="0"
									data-y="center" data-voffset="5"
									data-start="2000"
									style="z-index: 5"
									data-transform_in="y:[100%];opacity:0;s:500;">Check out our options and features.</div>

								<a class="tp-caption btn btn-lg btn-primary btn-slider-action"
									data-hash-offset="85"
									href="build-suit.php"
									data-x="center" data-hoffset="0"
									data-y="center" data-voffset="80"
									data-start="2200"
									data-whitespace="nowrap"						 
									data-transform_in="y:[100%];s:500;"
									data-transform_out="opacity:0;s:500;"
									style="z-index: 5"
									data-mask_in="x:0px;y:0px;">Order your Custom Suit Now!</a>
								
							</li>
						</ul>
					</div>
				</div>
				<div class="home-intro" id="home-intro">
					<div class="container">
						<div class="row">
							<div class="col-md-12"></div>
						</div>

					</div>
				</div>
				
				<div class="container">
					<div class="row">
						<div class="col-md-12 center">
							<h2 class="word-rotator-title mb-sm"><strong>Mywardrobe</strong> is the <strong>most <span class="word-rotate" data-plugin-options='{"delay": 2000, "animDelay": 300}'>
								<span class="word-rotate-items">
									<span>popular </span>
									<span>awesome</span>
									<span>incredible</span>
								</span>
							</span></strong> Site to Design Your Suit.</h2>
							<p class="mt-lg mb-xl">Our Collection of Fabrics includes hundreds of different patterns, weight and colors. They areall carefully curated and regularly updated to satisfy seasonality and the personal needs of our customers.</p>
						</div>
					</div>

				</div>
				<section class="call-to-action call-to-action-primary call-to-action-front mb-none">
					<div class="container">
						<div class="row">
							<div class="col-md-12" style="text-align:center">
									<h2 class="text-color-light mb-none mt-xl">Create yourself, Create your Suit using <strong>Mywardrobe.</strong></h2>
									<p class="mt-lg mb-xl">You define your suit, not the other way around. Our suit creation process gives you hundreds of customization options allowing you to design every aspect right down to the bottom.</p>
							</div>
						</div>
					</div>
				</section>
				<section class="section section-default mt-none mb-xl">
					<div class="home-concept">
						<div class="container">

							<div class="row center">
								<span class="sun"></span>
								<span class="cloud"></span>
								<div class="col-md-2 col-md-offset-1">
									<div class="process-image" data-appear-animation="bounceIn">
										<img src="img/fabric.png" alt="" />
										<a class="text-color-primary mb-xl" href="build-suit.php"><strong class="text-color-dark mb-xs">Fabric</strong></a>
									</div>
								</div>
								<div class="col-md-2">
									<div class="process-image" data-appear-animation="bounceIn" data-appear-animation-delay="200">
										<img src="img/buildSuit/style.jpg" alt="" />
										<a class="text-color-primary mb-xl" href="build-suit.php" ><strong class="text-color-dark mb-xs">Style</strong></a>
									</div>
								</div>
								<div class="col-md-2">
									<div class="process-image" data-appear-animation="bounceIn" data-appear-animation-delay="400">
										<img src="img/buildSuit/design.jpg" alt="" />
										<a class="text-color-primary mb-xl" href="build-suit.php"><strong class="text-color-dark mb-xs">Design</strong>
										</a>
									</div>
								</div>
								<div class="col-md-4 col-md-offset-1">
									<div class="project-image">
										<div id="fcSlideshow" class="fc-slideshow">
											<ul class="fc-slides">
                                            	<li><img class="img-responsive" src="img/buildSuit/2.jpg" alt="" width="70%" style="margin-left:15%;"/></li>
												<li><img class="img-responsive" src="img/buildSuit/3.jpg" alt="" width="70%" style="margin-left:15%;"/></li>
                                                <li><img class="img-responsive" src="img/buildSuit/4.jpg" alt="" width="70%" style="margin-left:15%;"/></li>
                                                <li><img class="img-responsive" src="img/buildSuit/5.jpg" alt="" width="70%" style="margin-left:15%;"/></li>
                                                <li><img class="img-responsive" src="img/buildSuit/6.jpg" alt="" width="70%" style="margin-left:15%;"/></li>
												<li><img class="img-responsive" src="img/buildSuit/1.jpg" alt="" width="70%" style="margin-left:15%;"/></li>
											</ul>
										</div>
										<a href="build-suit.php"><strong class="text-color-dark pt-xl" >and so much more...</strong></a>
									</div>
								</div>
							</div>

						</div>
					</div>
				</section>
				<section class="call-to-action call-to-action-primary mb-none">
					<div class="container">
						<div class="row">
							<div class="col-md-12" style="text-align:center;">
									<h2 class="text-color-light mb-none mt-xl">Mywardrobe is ready for <strong>any design style...</strong></h2>
									<p class="lead mb-xl">Here are previews of some of the suits created by us:</p>
							</div>
						</div>
					</div>
				</section>
				<section class="section section-primary section-primary-scale-2 section-center section-no-border mt-none p-sm" id="demos">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="nav nav-pills sort-source sort-source-style-2" data-sort-id="portfolio" data-option-key="filter">
									<li data-option-value="*" class="active"><a href="#">SHOW ALL</a></li>
									<li data-option-value=".classic"><a href="#">WINTER</a></li>
									<li data-option-value=".corporate"><a href="#">SUMMER</a></li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				<ul class="portfolio-list sort-destination full-width-spaced mb-xl" data-sort-id="portfolio" id="homeOverview">
					<li class="col-md-3 col-sm-6 col-xs-12 isotope-item classic">
						<div class="portfolio-item center">
							
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/previews/1.jpg" data-plugin-lazyload></span>
									</span>
								</span>
								
						</div>
					</li>
					<li class="col-md-3 col-sm-6 col-xs-12 isotope-item classic">
						<div class="portfolio-item center">
							
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/previews/2.jpg" data-plugin-lazyload></span>
									</span>
								</span>
								
						</div>
					</li>
					<li class="col-md-3 col-sm-6 col-xs-12 isotope-item classic">
						<div class="portfolio-item center">
							
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/previews/3.jpg" data-plugin-lazyload></span>
									</span>
								</span>
						</div>
					</li>
					<li class="col-md-3 col-sm-6 col-xs-12 isotope-item classic">
						<div class="portfolio-item center">
							
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/previews/4.jpg" data-plugin-lazyload></span>
									</span>
								</span>
						</div>
					</li>
					<li class="col-md-3 col-sm-6 col-xs-12 isotope-item classic">
						<div class="portfolio-item center">
							
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/previews/5.jpg" data-plugin-lazyload></span>
									</span>
								</span>
						</div>
					</li>
					<li class="col-md-3 col-sm-6 col-xs-12 isotope-item corporate">
						<div class="portfolio-item center">
							
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/previews/6.jpg" data-plugin-lazyload></span>
									</span>
								</span>
						</div>
					</li>
					<li class="col-md-3 col-sm-6 col-xs-12 isotope-item corporate">
						<div class="portfolio-item center">
							
								<span class="thumb-info thumb-info-preview mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/previews/7.jpg" data-plugin-lazyload></span>
									</span>
								</span>
							
						</div>
					</li>
					<li class="col-md-3 col-sm-6 col-xs-12 isotope-item corporate">
						<div class="portfolio-item center">
							
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/previews/8.jpg" data-plugin-lazyload></span>
									</span>
								</span>
							
						</div>
					</li>
					<li class="col-md-3 col-sm-6 col-xs-12 isotope-item corporate">
						<div class="portfolio-item center">
							
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/previews/9.jpg" data-plugin-lazyload></span>
									</span>
								</span>
							
						</div>
					</li>
					<li class="col-md-3 col-sm-6 col-xs-12 isotope-item corporate">
						<div class="portfolio-item center">
							
								<div class="thumb-info-ribbon">
									<span>New</span>
								</div>
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/previews/10.jpg" data-plugin-lazyload></span>
									</span>
								</span>
							
						</div>
					</li>
					<li class="col-md-3 col-sm-6 col-xs-12 isotope-item corporate">
						<div class="portfolio-item center">
							
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/previews/11.jpg" data-plugin-lazyload></span>
									</span>
								</span>
							
						</div>
					</li>
				</ul>
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
		
		<!-- Current Page Vendor and Views -->
		<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<script src="vendor/circle-flip-slideshow/js/jquery.flipshow.js"></script>
		<script src="js/views/view.home.js"></script>
		
		<!-- Theme Custom -->
		<script src="js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>


	</body>
</html>