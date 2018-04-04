<?php require_once('header.php');

//$query = "select * FROM user_login ul JOIN user_role ur ON ur.role_id=ul.role_id";
$sqlUser = "select * from build_suit WHERE status='active'";
$result = mysql_query($sqlUser) or die(mysql_error());

?>

    <div id="wrapper" >

        <!-- Navigation -->
        
        <?php require_once('navigation.php')?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
           
                <div class="row">
                    <div class="col-lg-12" >
                        <h1 class="page-header">View All Orders</h1>
                    </div>
					 <!--<div class="col-lg-2" >
					<a  class="btn btn-primary page-header" href="javascript:void(0)" onClick=""> Add New Design </a>
                    </div>-->
                </div>
                <!-- /.row -->
            </div>
            
         
            
            <!--Inner Content -->
            
            
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                                <?php if($_GET['msg'] == '1'){ echo "<font color='green'>
            <span id='success_message'> New Order has been created successfully </span></font>";
             }else if($_GET['msg'] == '2'){ echo "<font color='red'> 
            <span id='delete_message'>Order has been deleted successfully</span></font>";
			 }else if($_GET['msg'] == '3'){ echo "<font color='green'> 
            <span id='delete_message'>Order has been Updated successfully</span></font>";
			 }else if($_GET['msg'] == '4'){ echo "<font color='green'> 
            <span id='delete_message'>Order has been Accomplished successfully</span></font>";
			 }else{ echo "View Order's";
             }?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                             <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Order Number</th>
											<th>Scheduled Deliver Date</th>
											<th>User ID</th>
											 <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php while($row=mysql_fetch_array($result)){?>
 									 <tr class="odd gradeX"> 
                                            <td><?php echo $row["token_number"];?></td>
											<td><?php echo $row["deliver_date"];?></td>
                                            <td><?php echo $row["user_id"];?></td>
											
                                            <td> <?php if($row["delivered"]=='Pending'){?><input type="checkbox" id="userStatus<?php echo $row["serial"];?>" checked data-toggle="toggle" data-on="Pending" onChange="changeOrderStatus(<?php echo $row["serial"];?>);" data-off="Done"><?php 
											}else{?><input type="checkbox" id="userStatus<?php echo $row["serial"];?>" data-toggle="toggle" onChange="changeOrderStatus(<?php echo $row["serial"];?>);" data-on="Pending" data-off="Done"><?php } ?>
											</td>
                                            <td>
                                           <a href="javascript:void(0)" onClick="viewOrder(<?php echo $row['serial']; ?>)"><i class="fa fa-eye" aria-hidden="true"></i> </a>
															/
											<a href="javascript:void(0)" onClick="editOrder(<?php echo $row['serial']; ?>)"><i class="fa fa-edit fa-fw"></i> </a>
															/				
                                            <a onClick="deleteOrder(<?php echo $row['serial'];?>);" href="javascript:void(0)"> <i class="fa fa-trash" aria-hidden="true"></i></a>
                                            
                                            </td>
                                        </tr><?php }?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

	
<?php require_once('footer.php')?>