<?php require_once('header.php');
 $query = "select count(*) AS total from users";
    $result = mysql_query($query);
	$row=mysql_fetch_array($result);
	$total=$row['total'];
	
 $query = "select count(*) AS appointment from appointments";
    $result1 = mysql_query($query);
	$row=mysql_fetch_array($result1);
	$appointment=$row['appointment'];	
	
 $query = "select count(*) AS orders from build_suit WHERE delivered='Pending' AND status='active'";
    $result2 = mysql_query($query);
	$row=mysql_fetch_array($result2);
	$orders=$row['orders'];		

?>


    <div id="wrapper">

        <!-- Navigation -->
        
        <?php require_once('navigation.php')?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row" id="content">
                    <div class="col-lg-12" >
                        <h1 class="page-header">DashBoard</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
				<div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $total ?></div>
                                    <div>Users!</div>
                                </div>
                            </div>
                        </div>
                        <a href="viewUser.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $appointment ?></div>
                                    <div>New Appointments!</div>
                                </div>
                            </div>
                        </div>
                        <a href="ViewAppointments.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $orders ?></div>
                                    <div>New Orders!</div>
                                </div>
                            </div>
                        </div>
                        <a href="ViewOrders.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                
            </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php require_once('footer.php')?>