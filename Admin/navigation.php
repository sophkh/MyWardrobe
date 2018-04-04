<?php
  session_start();
 $pseudoName=$_SESSION["pseudoName"];
 $role=$_SESSION["role"];
 ?>
 
		<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand " href="dashboard.php"><img alt="celebex" height="50px;" width="150px;" src="image/logo.png"></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                	<span style="padding:15px; min-height:40px;">Welcome <strong><?php echo $pseudoName; ?></strong><?php if($_SESSION["role"]==1){?> to Mywardrobe Admin Panel<?php }?></span>
                </li>
                <!--<li class="dropdown">
                	<a href="../" target="_blank">View Site</a>
                </li>-->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="viewUser.php"><i class="fa fa-gear fa-fw"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
						<li id="user_management">
                            <a href="viewUser.php" id="viewUser" class="menuItem"><i class="fa fa-user-md"></i> Users</a>
                        </li>
                        <li>
                            <a href="ViewOrders.php"><i class="fa fa-headphones fa-fw"></i> Orders</a>
                        </li>
						<li>
                            <a href="ViewAppointments.php"><i class="fa fa-sitemap"></i> Appointments</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
