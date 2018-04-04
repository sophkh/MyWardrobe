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

		<title>Build Suit</title>	

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
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<style>
        .popover{
					max-width: 100%;
				}
        </style>
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
													<?php } ?>
													<li class="dropdown active" >
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
													<?php } ?>		
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
									<li class="active">Build Suit</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Build Suit</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
				
					<div class="row">
						<div class="col-md-8">
							<div class="row" id="showResult">
								<div class="col-md-12">
									<section class="panel form-wizard" id="w2">
										<div class="tabs">
											<ul class="nav nav-tabs nav-justify">
												<li class="active">
													<a href="#w2-account" data-toggle="tab" class="text-center">
														
														Fabric
													</a>
												</li>
												<li>
													<a href="#w2-profile" data-toggle="tab" class="text-center">
														
														Jacket
													</a>
												</li>
												<li>
													<a href="#w2-confirm" data-toggle="tab" class="text-center" >
														
														Pant
													</a>
												</li>
												<li>
													<a href="#w2-Vest" data-toggle="tab" class="text-center" >
														
														Vest Coat
													</a>
												</li>
												<li>
													<a href="#w2-Label" data-toggle="tab" class="text-center">
														
														Label
													</a>
												</li>
											</ul>
											<!--<form class="form-horizontal" novalidate="novalidate" method="post" action="addBuilSuit.php" onsubmit="return confirm('Are you sure you want to submit this form?');">-->
											<div id="36View" style="display:none;">
									<!--	<button  class="btn btn-primary mr-xs mb-sm" style="margin-left:78%;" onClick="getRotataionImg();"  >View 360</button>-->
										</div>
										
										<form  class="form-horizontal" method="post" id="sendValues">
											<div class="tab-content">
												<div id="w2-account" class="tab-pane active">
													<div class="form-group">
															<div class="col-md-6">
																<div class="radio">
																		<div class="col-sm-7">
																			<label><input type="radio" name="fabric" value="CB11001"  checked="checked" onClick="getFabrics(1);" onChange="run(this);" data-toggle="popover" data-trigger="focus"  data-placement="bottom"   data-content="100% Wool"/>
																		Black Herringbone
																		</label>
																		</div>
																		<div class="col-sm-4">
																			<img src="img/buildSuit/fabrics/1.jpg" class="img-rounded" style="margin-left:40%;" />
																		</div>
																</div>
															</div>
														</div>
													<div class="form-group">
															<div class="col-md-6">
																<div class="radio">
																		<div class="col-sm-7">
																			<label><input type="radio" name="fabric" value="CB11002" onClick="getFabrics(2);" onChange="run(this);" data-toggle="popover" data-trigger="focus"  data-placement="bottom" data-content="100% Wool"/>
																		Grey Sharkskin
																		</label>
																		</div>
																		<div class="col-sm-4">
																			<img src="img/buildSuit/fabrics/2.jpg" class="img-rounded" style="margin-left:40%;" />
																		</div>
																</div>
															</div>
														</div>
													<div class="form-group">
															<div class="col-md-6">
																<div class="radio">
																		<div class="col-sm-7">
																			<label><input type="radio" name="fabric" value="CB11003"  onClick="getFabrics(3);" onChange="run(this);" data-toggle="popover" data-trigger="focus"  data-placement="bottom"  data-content="100% Wool, Tropical" />
																		Navy Blue Stripe
																		</label>
																		</div>
																		<div class="col-sm-4">
																			<img src="img/buildSuit/fabrics/3.jpg" class="img-rounded" style="margin-left:40%;" />
																		</div>
																</div>
															</div>
														</div>
                                                        <div class="form-group">
															<div class="col-md-6">
																<div class="radio">
																		<div class="col-sm-7">
																			<label><input type="radio" name="fabric" value="CB11004"  onClick="getFabrics(4);" onChange="run(this);" data-toggle="popover" data-trigger="focus"  data-placement="bottom" data-content=" 52% Cotton, 48% Linen"/>
																		Ivory Herringbone
																		</label>
																		</div>
																		<div class="col-sm-4">
																			<img src="img/buildSuit/fabrics/4.jpg" class="img-rounded" style="margin-left:40%;" />
																		</div>
																</div>
															</div>
														</div>
                                                         <div class="form-group">
															<div class="col-md-6">
																<div class="radio">
																		<div class="col-sm-7">
																			<label><input type="radio" name="fabric" value="CB11005"  onClick="getFabrics(5);" onChange="run(this);" data-toggle="popover" data-trigger="focus"  data-placement="bottom" data-content="51% Cotton, 49% Linen"/>
																		Navy Stripe On Ivory
																		</label>
																		</div>
																		<div class="col-sm-4">
																			<img src="img/buildSuit/fabrics/5.jpg" class="img-rounded" style="margin-left:40%;" />
																		</div>
																</div>
															</div>
														</div>
                                                        <div class="form-group">
															<div class="col-md-6">
																<div class="radio">
																		<div class="col-sm-7">
																			<label><input type="radio" name="fabric" value="CB11006"  onClick="getFabrics(6);" onChange="run(this);" data-toggle="popover" data-trigger="focus"  data-placement="bottom" data-content="100% WOOL"/>
																		Burgundy Solid
																		</label>
																		</div>
																		<div class="col-sm-4">
																			<img src="img/buildSuit/fabrics/6.jpg" class="img-rounded" style="margin-left:40%;" />
																		</div>
																</div>
															</div>
														</div>
												</div>
												<div id="w2-profile" class="tab-pane">
													<div class="row">
														<div class="col-md-12">
															<div class="tabs tabs-vertical tabs-left">
																<ul class="nav nav-tabs col-sm-3">
																	<li class="active">
																		<a href="#type" data-toggle="tab">Type</a>
																	</li>
																	<li>
																		<a href="#lapel" data-toggle="tab">Lapel</a>
																	</li>
																	<li>
																		<a href="#vent" data-toggle="tab">Vent</a>
																	</li>
																	<li>
																		<a href="#pockets" data-toggle="tab">Pockets</a>
																	</li>
																	<li>
																		<a href="#buttons" data-toggle="tab">Buttons</a>
																	</li>
																	<li>
																		<a href="#stitching" data-toggle="tab">Stitching</a>
																	</li>
																</ul>
																<div class="tab-content">
																	<div id="type" class="tab-pane active">
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="Elegant And Slightly More Formal">
                                                                                    <input type="radio" name="type_button" id="type_button" value="1-Button Single Breasted"  checked="checked" onClick="getJacketType(1);" onChange="run(this);" />
																						1-Button Single Breasted
																						</label>	
																				</div>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="Most Popular And Versatile Of Classic Styles"> 
                                                                                    <input type="radio" name="type_button" id="type_button" value="2-Button Single Breasted" onClick="getJacketType(2);" onChange="run(this);" />
																						2-Button Single Breasted
																						</label>	
																				</div>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label  data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="Offers The Wearer A Thinner, Longer Line">
                                                                                    <input type="radio" name="type_button" id="type_button" value="3-Button Single Breasted" onClick="getJacketType(3);" onChange="run(this);"/>
																						3-Button Single Breasted
																						</label>	
																				</div>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="Most Fashion-Forward Of Single-Breasted Jacket Types">
                                                                                    <input type="radio" name="type_button" id="type_button" value="4-Button Single Breasted" onClick="getJacketType(4);"  onChange="run(this);"/>
																						4-Button Single Breasted
																						</label>	
																				</div>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="Designed For Men Of Shorter Stature">
                                                                                    <input type="radio" name="type_button" id="type_button" value="x4 Button Double Breasted" onClick="getJacketType(5);" onChange="run(this);"/>
																						2x4 Button Double Breasted
																						</label>	
																				</div>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="Fashion-Forward With Traditional Elegance"> 
                                                                                    <input type="radio" name="type_button" id="type_button" value="2x6 Button Double Breasted" onClick="getJacketType(6);" onChange="run(this);" />
																						2x6 Button Double Breasted
																						</label>	
																				</div>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="Fashion-Forward Twist On A Classic Style">
                                                                                    <input type="radio" name="type_button" id="type_button" value="2x8 Button Double Breasted" onClick="getJacketType(7);" onChange="run(this);" />
																						2x8 Button Double Breasted
																						</label>	
																				</div>
																			</div>
																		</div>
																	</div>
																	<div id="lapel" class="tab-pane">
																		<h3>LAPEL TYPES</h3>
																			<div class="form-group">
																				<div class="col-md-6">
																					<div class="radio">
																						<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="The Most Traditional Treatment For Single-Breasted Suits" >
                                                                                        <input type="radio" name="lapel_type" id="lapel_type" value="Notch"  checked="checked" onClick="getJacketLapelType(1);"  onChange="run(this);"/>
																							Notch
																							</label>
																					</div>
																</div>
															</div>
																			<div class="form-group">
																				<div class="col-md-6">
																					<div class="radio">
																						<label  data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="A Formal Detail Creating A Flattering V-Shaped Silhouette" >
                                                                                        <input type="radio" name="lapel_type" id="lapel_type"  value="Peak" onClick="getJacketLapelType(2);"/>
																							Peak
																							</label>
																					</div>
																</div>
															</div>
																		<h3>LAPEL SIZE</h3>
																			<div class="form-group">
																				<div class="col-md-6">
																					<div class="radio">
																						<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="A More Classic Treatment" >
                                                                                        <input type="radio" name="lapel_size" id="lapel_size"  value="Standard"  checked="checked" onClick="getJacketLapelType(3);" />
																							Standard
																							</label>
																					</div>
																</div>
															</div>
																			<div class="form-group">
																				<div class="col-md-6">
																					<div class="radio">
																						<label  data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="Trendier, More Fashion-Forward" >
                                                                                        <input type="radio" name="lapel_size" id="lapel_size" value="Narrow" onClick="getJacketLapelType(4);" />
																							Narrow
																							</label>
																					</div>
																</div>
															</div>
																	</div>
																	<div id="vent" class="tab-pane">
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																							<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="A Traditional American Or Ivy League Look" >
                                                                                            <input type="radio" name="vent" id="vent" value="Center"  checked="checked" onClick="getJacketVent(1);" />
																						Center
																						</label>
																				</div>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																							<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="An English Detail That Signals Custom Tailoring" >
                                                                                            <input type="radio" name="vent" id="vent" value="Side"  onClick="getJacketVent(2);" />
																						Side
																						</label>
																				</div>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																							<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="Hugs The Hip; Offers A Simple And Trim Silhouette" >
                                                                                            <input type="radio" name="vent" id="vent" value="None" onClick="getJacketVent(3);" />
																						None
																						</label>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div id="pockets" class="tab-pane">
																		<h3>BREAST POCKET</h3>
																			<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="The Most Traditional And Versatile Breast Pocket Type" >
                                                                                    <input type="radio" name="brest_pockets" id="brest_pockets" value="Welt"  checked="checked" onClick="getJacketPockets(1);" />
																						Welt
																						</label>
																				</div>
																			</div>
																		</div>
																			<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="Usually Found On Summer Weight Jackets And Sportcoats" >
                                                                                    <input type="radio" name="brest_pockets" id="brest_pockets" value="Patch"  onClick="getJacketPockets(2);" />
																						Patch
																						</label>
																				</div>
																			</div>
																		</div>
																		
																		<h3>SIDE POCKETS</h3>
																			<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="A Besom Pocket With A Flap, Worn Inside Or Out" >
                                                                                    <input type="radio" name="side_pockets" id="side_pockets" value="Flap"  checked="checked" onClick="getJacketPockets(3);" />
																						Flap
																						</label>
																				</div>
																			</div>
																		</div>
																			<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="A Pocket With A Narrow Welt Above And Below Its Opening" >
                                                                                    <input type="radio" name="side_pockets" id="side_pockets" value="Double Besom"  onClick="getJacketPockets(4);" />
																						Double Besom
																						</label>
																				</div>
																			</div>
																		</div>
																			<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="The Most Casual And Sporty Of The Three Jacket Pocket Styles" >
                                                                                    <input type="radio" name="side_pockets" id="side_pockets" value="Patch"  onClick="getJacketPockets(5);" />
																						Patch
																						</label>
																				</div>
																			</div>
																		</div>
																		
																		<h3>ADDITIONAL OPTIONS</h3>
																		<h6>Do You Want Slanting 'Hacking' Pockets?</h6>
																			<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label><input type="radio" name="hacking_pockets" id="hacking_pockets" value="Yes"  checked="checked" onClick="getJacketPockets(6);" />
																						Yes
																						</label>
																				</div>
																			</div>
																		</div>
																			<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label><input type="radio" name="hacking_pockets" id="hacking_pockets" value="No"  onClick="getJacketPockets(7);" />
																						No
																						</label>
																				</div>
																			</div>
																		</div>
																		<h6>Do You Want 'Ticket' Pockets?</h6>
																			<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label><input type="radio" name="ticket_pockets" id="ticket_pockets" value="Yes,Single Beam"  checked="checked" onClick="getJacketPockets(8);" />
																						Yes, Single Besom
																						</label>
																				</div>
																			</div>
																		</div>
																			<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label><input type="radio" name="ticket_pockets" id="ticket_pockets" value="Yes,Double Beam"  onClick="getJacketPockets(9);" />
																						Yes, Double Besom
																						</label>
																				</div>
																			</div>
																		</div>
																			<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label><input type="radio" name="ticket_pockets" id="ticket_pockets" value="Yes,Flap"  onClick="getJacketPockets(10);" />
																						Yes, Flap
																						</label>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div id="buttons" class="tab-pane">
																		<h3>BUTTON TYPES</h3>
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="A Custom Detail With Four Functioning Buttons" >
                                                                                    <input type="radio" name="button_types" id="button_types" value="Regular"  checked="checked" onClick="getJacketButtons(1);" />
																						Regular
																						</label>
																				</div>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="Four Overlapping Buttons With Functioning Holes" >
                                                                                    <input type="radio" name="button_types" id="button_types" value="Regular Kissing"  onClick="getJacketButtons(2);" />
																						Regular Kissing
																						</label>
																				</div>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="Four Functional Buttons With Button Holes On A Diagonal" >
                                                                                    <input type="radio" name="button_types" id="button_types" value="Slant"  onClick="getJacketButtons(3);" />
																						Slant
																						</label>
																				</div>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="Four Overlapping, Functional Buttons With Button Holes On A Diagonal" >
                                                                                    <input type="radio" name="button_types" id="button_types" value="Slant Kissing"  onClick="getJacketButtons(4);" />
																						Slant Kissing
																						</label>
																				</div>
																			</div>
																		</div>
																		
																		<h3>BUTTON STYLES</h3>
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																						<div class="col-sm-6">
																							<label><input type="radio" name="button_styles" id="button_styles" value="MB-608"  checked="checked" onClick="getJacketButtons(5);" />MB-608</label>
																						</div>
																						<div class="col-sm-6">
																							<img src="img/buildSuit/CB11001/jacket/buttons/2.png"  style="margin-left:40%;" />
																						</div>
																				</div>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																						<div class="col-sm-6">
																							<label><input type="radio" name="button_styles" id="button_styles" value="MB-609"  onClick="getJacketButtons(6);" />MB-609</label>
																						</div>
																						<div class="col-sm-6">
																							<img src="img/buildSuit/CB11001/jacket/buttons/3.png"  style="margin-left:40%;" />
																						</div>
																				</div>
																			</div>
																		</div>
																		<div class="form-group">	
																			<div class="col-md-6">
																				<div class="radio">
																						<div class="col-sm-6">
																							<label><input type="radio" name="button_styles" id="button_styles" value="MB-610"  onClick="getJacketButtons(7);" />MB-610</label>
																						</div>
																						<div class="col-sm-6">
																							<img src="img/buildSuit/CB11001/jacket/buttons/1.png"  style="margin-left:40%;" />
																						</div>
																				</div>
																			</div>
																		</div>
																		<div class="form-group">	
																			<div class="col-md-6">
																				<div class="radio">
																						<div class="col-sm-6">
																							<label><input type="radio" name="button_styles" id="button_styles" value="MB-610"  onClick="getJacketButtons(8);" />MB-610</label>
																						</div>
																						<div class="col-sm-6">
																							<img src="img/buildSuit/CB11001/jacket/buttons/4.png"  style="margin-left:40%;" />
																						</div>
																				</div>
																			</div>
																		</div>	
																	</div>
																	<div id="stitching" class="tab-pane">
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="No Exterior Stitching Of Any Kind" >
                                                                                    <input type="radio" name="stitching" id="stitching" value="None"   checked="checked" onClick="getJacketStitching(1);" />
																						None
																						</label>
																				</div>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="Close To The Edge, The Thread Is Only Visible As Small Dimples" >
                                                                                    <input type="radio" name="stitching" id="stitching" value="Pic Stitch 1/16"   onClick="getJacketStitching(2);" />
																						Pic Stitch 1/16
																						</label>
																				</div>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="In From The Edge, The Thread Is Seen As Small Dimples" >
                                                                                    <input type="radio" name="stitching" id="stitching" value="Pic Stitch 5/16"   onClick="getJacketStitching(3);" />
																						Pic Stitch 5/16
																						</label>
																				</div>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="This Option Shows More Thread And Appears As A Dashed Line" >
                                                                                    <input type="radio" name="stitching" id="stitching" value="Top Stitch 5/16"   onClick="getJacketStitching(4);" />
																						Top Stitch 5/16
																						</label>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div id="w2-confirm" class="tab-pane">
													<div class="row">
														<div class="col-md-12">
															<div class="tabs tabs-vertical tabs-left">
																<ul class="nav nav-tabs col-sm-3">
																	<li class="active">
																		<a href="#Pleat" data-toggle="tab">Pleat</a>
																	</li>
																	<li>
																		<a href="#Pocketsss" data-toggle="tab">Pockets</a>
																	</li>
																	<li>
																		<a href="#Cuffss" data-toggle="tab">Cuff</a>
																	</li>
																	<li>
																		<a href="#Leg_break" data-toggle="tab">Leg Break</a>
																	</li>
																	<li>
																		<a href="#Waist_closure" data-toggle="tab">Waist Closure</a>
																	</li>
																	<li>
																		<a href="#belt_loops" data-toggle="tab">Belt Loops</a>
																	</li>
																</ul>
																<div class="tab-content">
																	<div id="Pleat" class="tab-pane active">
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="No Pleats For A Cleaner, Simpler Style" >
                                                                                    <input type="radio" name="pleat" id="pleat" value="Flat Front"  checked="checked" onClick="getPantsPleats(1);" />
																						Flat Front
																						</label>	
																				</div>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="Creates A Clean Line From Waist To Cuff" >
                                                                                    <input type="radio" name="pleat" id="pleat" value="Single Pleat" onClick="getPantsPleats(2);" />
																						Single Pleat																							</label>	
																				</div>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="This Option Shows More Thread And Appears As A Dashed Line" >
                                                                                    <input type="radio" name="pleat" id="pleat" value="Double Pleat" onClick="getPantsPleats(3);" />
																						Double Pleat
																						</label>	
																				</div>
																			</div>
																		</div>
																	</div>
																	<div id="Pocketsss" class="tab-pane">
																		<h3>SIDE POCKET</h3>
																			<div class="form-group">
																				<div class="col-md-6">
																					<div class="radio">
																						<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="These Very Traditional Pockets Disappear Into The Side Seam Of The Pant Leg">
                                                                                        <input type="radio" name="pant_side_pockets" id="pant_side_pockets" value="On-Seam"  checked="checked" onClick="getPantsPockets(1);" />
																							On-Seam
																							</label>
																					</div>
																</div>
																			</div>
																			<div class="form-group">
																				<div class="col-md-6">
																					<div class="radio">
																						<label  data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="These Traditional Pockets Are Somewhat Easier To Put Your Hands Into">
                                                                                        <input type="radio" name="pant_side_pockets" id="pant_side_pockets" value="1/8 Top" onClick="getPantsPockets(2);" />
																							1/8 Top
																							</label>
																					</div>
																</div>
															</div>
																			<div class="form-group">
																				<div class="col-md-6">
																					<div class="radio">
																						<label  data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="A Non-Traditional Choice, This Jean Type Pocket Creates A More Relaxed And Casual Look">
                                                                                        <input type="radio" name="pant_side_pockets" id="pant_side_pockets" value="Western" onClick="getPantsPockets(3);" />
																							Western
																							</label>
																					</div>
																</div>
															</div>
																			<div class="form-group">
																				<div class="col-md-6">
																					<div class="radio">
																						<label  data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="This European Style Pocket Adds An Elegant Twist To A Flat Front Pant">
                                                                                        <input type="radio" name="pant_side_pockets" id="pant_side_pockets" value="Double Besom" onClick="getPantsPockets(4);" />
																							Double Besom
																							</label>
																					</div>
																</div>
															</div>
															
																		<h3>BACK POCKET</h3>
																			<div class="form-group">
																				<div class="col-md-6">
																					<div class="radio">
																						<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="The Flap Adds Material, So These Pockets Are Viewed As More Casual; Originally A Military Uniform Detail.">
                                                                                        <input type="radio" name="pant_back_pockets" id="pant_back_pockets" value="Envelope"  checked="checked" onClick="getPantsPockets(5);" />
																							Envelope
																							</label>
																					</div>
																</div>
															</div>
																			<div class="form-group">
																				<div class="col-md-6">
																					<div class="radio">
																						<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="The Most Traditional Back Pocket, Offering A Clean And Simple Line">
                                                                                        <input type="radio" name="pant_back_pockets" id="pant_back_pockets" value="Button-Thru" onClick="getPantsPockets(6);" />
																							Button-Thru
																							</label>
																					</div>
																</div>
															</div>
																			<div class="form-group">
																				<div class="col-md-6">
																					<div class="radio">
																						<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="Like The Button-Thru, But Designed To Be Easier To Open And Close">
                                                                                        <input type="radio" name="pant_back_pockets" id="pant_back_pockets" value="Loop Tab" onClick="getPantsPockets(7);" />
																							Loop Tab
																							</label>
																					</div>
																</div>
															</div>
																	</div>
																	<div id="Cuffss" class="tab-pane">
																	<h3>CUFF</h3>
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																							<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="The Preference Of Many Men; A Matter Of Personal Taste">
                                                                                            <input type="radio" name="pant_cuff" id="pant_cuff" value="No-Cuff"  checked="checked" onClick="getPantsCuff(1);" />
																						No-Cuff
																						</label>
																				</div>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																							<label  data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="A Smart Choice For Shorter Men Seeking Balance And Proportion">
                                                                                            <input type="radio" name="pant_cuff" id="pant_cuff" value="1-1/2 Cuff"  onClick="getPantsCuff(2);" />
																						1-1/2 Cuff
																						</label>
																				</div>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																							<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="The Standard Or Traditional Cuff Size Offering Good Proportion And Weight For Pant Drape">
                                                                                            <input type="radio" name="pant_cuff" id="pant_cuff" value="1-3/4 Cuff" onClick="getPantsCuff(3);" />
																						1-3/4 Cuff
																						</label>
																				</div>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																							<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="The Way To Go For Taller Men; Extra Material Keeps Suit Elements In Proportion">
                                                                                            <input type="radio" name="pant_cuff" id="pant_cuff" value="2 Cuff" onClick="getPantsCuff(4);" />
																						2 Cuff
																						</label>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div id="Leg_break" class="tab-pane">
																		<h3>LEG BREAK</h3>
																			<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="An American Tradition; Offers A Smart Line To The Pant And Keeps Socks Covered When Walking">
                                                                                    <input type="radio" name="leg_break" id="leg_break" value="Slight"  checked="checked" onClick="getPantsLegBreak(1);" />
																						Slight
																						</label>
																				</div>
																			</div>
																		</div>
																			<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="The Back Cuff Sits Just Above The Heel Allowing Pants To Cover Socks When Walking Or Sitting">
                                                                                    <input type="radio" name="leg_break" id="leg_break" value="Medium"  onClick="getPantsLegBreak(2);" />
																						Medium
																						</label>
																				</div>
																			</div>
																		</div>
																			<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="The Back Cuff Sits Just Even Or Slightly Below The Top Of The Heel; Can Look Sloppy If Pants Don't Sit Properly On Waist">
                                                                                    <input type="radio" name="leg_break" id="leg_break" value="Full"  onClick="getPantsLegBreak(3);" />
																						Full
																						</label>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div id="Waist_closure" class="tab-pane">
																		<h3>WAIST CLOSURE</h3>
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="A Simple, Elegant Closure Especially When Combined With Side Tabs Or When Braces (Suspenders) Are Worn">
                                                                                    <input type="radio" name="waist_closure" id="waist_closure" value="Pointed Tab"  checked="checked" onClick="getPantsWaistClosure(1);" />
																						Pointed Tab
																						</label>
																				</div>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="A Straightforward Tab That Works Well With Side Tabs Or With Braces (Suspenders)">
                                                                                    <input type="radio" name="waist_closure" id="waist_closure" value="Square Tab"  onClick="getPantsWaistClosure(2);" />
																						Square Tab
																						</label>
																				</div>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="The Choice For Men Who Always Prefer To Wear A Belt">
                                                                                    <input type="radio" name="waist_closure" id="waist_closure" value="No Tab"  onClick="getPantsWaistClosure(3);" />
																						No Tab
																						</label>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div id="belt_loops" class="tab-pane">
																	<h3>BELT LOOPS</h3>
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="The Most Popular Choice For A Classic Style">
                                                                                    <input type="radio" name="belt_loops" id="belt_loops" value="Regular Belt Loops"  checked="checked" onClick="getPantsBeltLoops(1);" />
																						Regular Belt Loops
																						</label>
																				</div>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="An English Detail That Provides An Elegant Alternative To Belted Trousers">
                                                                                    <input type="radio" name="belt_loops" id="belt_loops" value="Elastic Side Tabs"   onClick="getPantsBeltLoops(2);" />
																						Elastic Side Tabs
																						</label>
																				</div>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="Regular Belt Loops And Elastic Side Tabs">
                                                                                    <input type="radio" name="belt_loops" id="belt_loops" value="Both"   onClick="getPantsBeltLoops(3);" />
																						Both
																						</label>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div id="w2-Vest" class="tab-pane">
													<div class="row">
														<div class="col-md-12">
															<div class="tabs tabs-vertical tabs-left">
																<ul class="nav nav-tabs col-sm-3">
																	<li class="active">
																		<a href="#Type" data-toggle="tab">Type</a>
																	</li>
																	<li>
																		<a href="#vestButtons" data-toggle="tab">Buttons</a>
																	</li>
																	<li>
																		<a href="#Pocketss" data-toggle="tab">Pockets</a>
																	</li>
																	<li>
																		<a href="#back_style" data-toggle="tab">Back Style</a>
																	</li>
																</ul>
																<div class="tab-content">
																	<div id="Type" class="tab-pane active">
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="The Clean, Crisp Lines Of This Vest Style Go With Any Suit">
                                                                                    <input type="radio" name="vest_coat_type" id="vest_coat_type" value="Standard"  checked="checked" onClick="getVestType(1);" />
																						Standard
																						</label>	
																				</div>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="The Lapels Signal A Casual, English Country Look">
                                                                                    <input type="radio" name="vest_coat_type" id="vest_coat_type" value="English" onClick="getVestType(2);" />
																						English																							</label>	
																				</div>
																			</div>
																		</div>
																		
																	</div>
																	<div id="vestButtons" class="tab-pane">
																		
																			<div class="form-group">
																				<div class="col-md-6">
																					<div class="radio">
																						<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="Traditional Treatment That Nicely Frames The Shirt And Tie">
                                                                                        <input type="radio" name="vest_coat_buttons" id="vest_coat_buttons" value="5-Button"  checked="checked" onClick="getVestButtons(1);" />
																							5-Button
																							</label>
																					</div>
																</div>
																			</div>
																			<div class="form-group">
																				<div class="col-md-6">
																					<div class="radio">
																						<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="Creates A Longer Line But A Smaller Frame For Shirt And Tie">
                                                                                        <input type="radio" name="vest_coat_buttons" id="vest_coat_buttons" value="6-Button" onClick="getVestButtons(2);" />
																							6-Button
																							</label>
																					</div>
																</div>
															</div>
															
																	</div>
																	<div id="Pocketss" class="tab-pane">
																	<h3>POCKET TYPE</h3>
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																							<label>
                                                                                            <input type="radio" name="vest_coat_pocket_type" id="vest_coat_pocket_type" value="Welt"  checked="checked" onClick="getVestPockets(1);" />
																						Welt
																						</label>
																				</div>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																							<label>
                                                                                            <input type="radio" name="vest_coat_pocket_type" id="vest_coat_pocket_type" value="Double Beosom"  onClick="getVestPockets(2);" />
																						Double Beosom
																						</label>
																				</div>
																			</div>
																		</div>
																	<h3>POCKET NUMBERS</h3>	
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																						<label>
                                                                                        <input type="radio" name="vest_coat_pocket_number" id="vest_coat_pocket_number" value="2 Pockets" checked="checked"  onClick="getVestPockets(3);" />
																						2-Pockets
																						</label>
																				</div>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																				<label>
                                                                                <input type="radio" name="vest_coat_pocket_number" id="vest_coat_pocket_number" value="4 Pockets"  onClick="getVestPockets(4);" />
																						4-Pockets
																						</label>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div id="back_style" class="tab-pane">
																		<h3>BACK STYLE</h3>
																			<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="The Fabric Used For The Back Of The Vest Is The Same As The Suit Lining">
                                                                                    <input type="radio" name="vest_coat_back_style" id="vest_coat_back_style" value="Lining"  checked="checked" onClick="getVestBackStyle(1);" />
																						Lining
																						</label>
																				</div>
																			</div>
																		</div>
																			<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="The Fabric Used For The Back Of The Vest Is The Same As The Front">
                                                                                    <input type="radio" name="vest_coat_back_style" id="vest_coat_back_style" value="Fabric"  onClick="getVestBackStyle(2);" />
																						Fabric
																						</label>
																				</div>
																			</div>
																		</div>
																			
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div id="w2-Label" class="tab-pane">
													<div class="row">
														<div class="col-md-12">
															<div class="tabs tabs-vertical tabs-left">
																<ul class="nav nav-tabs col-sm-3">
																	<li class="active">
																		<a href="#Label" data-toggle="tab">Label</a>
																	</li>
																	<li>
																		<a href="#Jacket" data-toggle="tab">Jacket</a>
																	</li>
																	<li>
																		<a href="#Lining" data-toggle="tab">Lining</a>
																	</li>
																	<li>
																		<a href="#Piping" data-toggle="tab">Piping</a>
																	</li>
																	<li>
																		<a href="#Pants" data-toggle="tab">Pants</a>
																	</li>
																</ul>
																<div class="tab-content">
																	<div id="Label" class="tab-pane active">
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label><input type="radio" name="label" id="label" value="Name"  checked="checked" onClick="getLabelabel(1);" />
																						Name
																						</label>	
																				</div>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																					<label><input type="radio" name="label" id="label" value="No Label" onClick="getLabelabel(2);" />
																						No Label																							</label>	
																				</div>
																			</div>
																		</div>
																		
																	</div>
																	<div id="Jacket" class="tab-pane">
																		<h3>UNDER COLLAR FABRIC</h3>
																			<div class="form-group">
																				<div class="col-md-6">
																					<div class="radio">
																						<label><input type="radio" name="under_collar_fabric" id="under_collar_fabric" value="Back"  checked="checked" onClick="getLabelJacket(1);" />
																							Black
																							</label>
																					</div>
																</div>
																			</div>
																			<div class="form-group">
																				<div class="col-md-6">
																					<div class="radio">
																						<label><input type="radio" name="under_collar_fabric" id="under_collar_fabric" value="Green" onClick="getLabelJacket(2);" />
																							Green
																							</label>
																					</div>
																</div>
															</div>
																			<div class="form-group">
																				<div class="col-md-6">
																					<div class="radio">
																						<label><input type="radio" name="under_collar_fabric" id="under_collar_fabric" value="DK.GREY" onClick="getLabelJacket(3);" />
																							Dark Grey
																							</label>
																					</div>
																</div>
															</div>
																			<div class="form-group">
																				<div class="col-md-6">
																					<div class="radio">
																						<label><input type="radio" name="under_collar_fabric" id="under_collar_fabric" value="WHITE" onClick="getLabelJacket(4);" />
																							White
																							</label>
																					</div>
																</div>
															</div>
															
																		<h3>LAPEL EYELET COLOR</h3>
																																																																<div class="form-group">
																				<div class="col-md-6">
																					<div class="radio">
																						<label><input type="radio" name="lapel_eyelet_color" id="lapel_eyelet_color" value="Back"  checked="checked" onClick="getLabelJacket(6);" />
																							Black
																							</label>
																					</div>
																</div>
																			</div>
																			<div class="form-group">
																				<div class="col-md-6">
																					<div class="radio">
																						<label><input type="radio" name="lapel_eyelet_color" id="lapel_eyelet_color" value="Green" onClick="getLabelJacket(7);" />
																							Green
																							</label>
																					</div>
																</div>
															</div>
																			<div class="form-group">
																				<div class="col-md-6">
																					<div class="radio">
																						<label><input type="radio" name="lapel_eyelet_color" id="lapel_eyelet_color" value="DK.GREY" onClick="getLabelJacket(8);" />
																							Dark Grey
																							</label>
																					</div>
																</div>
															</div>
																			<div class="form-group">
																				<div class="col-md-6">
																					<div class="radio">
																						<label><input type="radio" name="lapel_eyelet_color" id="lapel_eyelet_color" value="WHITE" onClick="getLabelJacket(9);" />
																							White
																							</label>
																					</div>
																</div>
															</div>
																		
																		<h3>CUFF TYPE</h3>
																			<div class="form-group">
																				<div class="col-md-6">
																					<div class="radio">
																						<label><input type="radio" name="cuff_type" id="cuff_type" value="Bottom 1"  checked="checked" onClick="getLabelJacket(10);" />
																							Bottom 1
																							</label>
																					</div>
																</div>
															</div>
																			<div class="form-group">
																				<div class="col-md-6">
																					<div class="radio">
																						<label><input type="radio" name="cuff_type" id="cuff_type" value="Bottom 2" onClick="getLabelJacket(11);" />
																							Bottom 2
																							</label>
																					</div>
																</div>
															</div>
																			<div class="form-group">
																				<div class="col-md-6">
																					<div class="radio">
																						<label><input type="radio" name="cuff_type" id="cuff_type" value="All Button" onClick="getLabelJacket(12);" />
																							All Button
																							</label>
																					</div>
																</div>
															</div>
																			<div class="form-group">
																				<div class="col-md-6">
																					<div class="radio">
																						<label><input type="radio" name="cuff_type" id="cuff_type" value="None" onClick="getLabelJacket(13);" />
																							None
																							</label>
																					</div>
																</div>
															</div>	
															
																	</div>
																	<div id="Lining" class="tab-pane">
																	<h3>LINING STYLE</h3>
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																							<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="The Complete Interior Of The Jacket Is Lined">
                                                                                            <input type="radio" name="linig_style" id="linig_style" value="Fully Lined"  checked="checked" onClick="getLabelLining(1);" />
																						Fully Lined
																						</label>
																				</div>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-md-6">
																				<div class="radio">
																							<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="A Warm Weather Option, The Jacket Is Lined Everywhere But The Mid To Lower Back">
                                                                                            <input type="radio" name="linig_style" id="linig_style" value="Half Lined"  onClick="getLabelLining(2);" />
																						Half Lined
																						</label>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div id="Piping" class="tab-pane">
																		<h3>PIPING & SADDLE STITCH</h3>
																			<div class="form-group">
																				<div class="col-md-6">
																					<div class="radio">
																						<label><input type="radio" name="piping_saddle_stitch" id="piping_saddle_stitch" value="Both"  checked="checked" onClick="getLabelPiping(1);" />
																							Both
																							</label>
																					</div>
																</div>
																			</div>
																			<div class="form-group">
																				<div class="col-md-6">
																					<div class="radio">
																						<label><input type="radio" name="piping_saddle_stitch" id="piping_saddle_stitch" value="None" onClick="getLabelPiping(2);" />
																							None
																							</label>
																					</div>
																</div>
															</div>
																	</div>
																	<div id="Pants" class="tab-pane">
																		<h3>WATCH POCKETS</h3>
																			<div class="form-group">
																				<div class="col-md-6">
																					<div class="radio">
																						<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="For Watch Or Coins; Is Found On The Bottom Of The Waistband On A Flat Front Pant (As Shown) And On The Inside Of A Pleated Pant">
                                                                                        <input type="radio" name="watch_pockets" id="watch_pockets" value="On Seam"  checked="checked" onClick="getLabelPants(1);" />
																							On Seam
																							</label>
																					</div>
																</div>
																			</div>
																			<div class="form-group">
																				<div class="col-md-6">
																					<div class="radio">
																						<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="Below Of The Waistband On A Flat Front Pant (As Shown) And On The Inside Of A Pleated Pant">
                                                                                        <input type="radio" name="watch_pockets" id="watch_pockets" value="1 Below" onClick="getLabelPants(2);" />
																							1 Below
																							</label>
																					</div>
																</div>
															</div>
																			<div class="form-group">
																				<div class="col-md-6">
																					<div class="radio">
																						<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="No Watch Pocket">
                                                                                        <input type="radio" name="watch_pockets" id="watch_pockets" value="None" onClick="getLabelPants(3);" />
																							None
																							</label>
																					</div>
																</div>
															</div>
															
																		<h3>SUSPENDER BUTTONS</h3>
																			<div class="form-group">
																				<div class="col-md-6">
																					<div class="radio">
																						<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="Located Inside The Waistband; Can Be Uncomfortable Unless You Wear Suspenders Frequently">
                                                                                        <input type="radio" name="suspender_buttons" id="suspender_buttons" value="Suspender Buttons"  checked="checked" onClick="getLabelPants(4);" />
																							Suspender Buttons
																							</label>
																					</div>
																</div>
																			</div>
																			<div class="form-group">
																				<div class="col-md-6">
																					<div class="radio">
																						<label data-toggle="popover" data-trigger="focus"  data-placement="right" data-content="No Suspender Buttons">
                                                                                        <input type="radio" name="suspender_buttons" id="suspender_buttons" value="None" onClick="getLabelPants(5);" />
																							None
																							</label>
																					</div>
																</div>
															</div>
															
																	</div>
																</div>
															</div>
														</div>
														<?php 
														if($_SESSION["uid"]==""){ ?>
															<a  class="btn btn-primary mr-xs mb-sm" style="margin-left:74%;" href="login-page.php" >Please Register Yourself</a> <?php }else{ ?>
                                                            <button  class="btn btn-primary mr-xs mb-sm" style="margin-left:78%;">Next</button>	<?php } ?>
														
													</div>
												</div>
											</div>
										  </form>
										</div>
									</section>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-12">
									<div id="buildSuit">
										<img src="img/buildSuit/main.jpg" class="img-responsive" width="100%" >
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
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover({container: 'body'});
});
</script>



	</body>
</html>