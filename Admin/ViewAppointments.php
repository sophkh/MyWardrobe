<?php require_once('header.php');

//$query = "select * FROM user_login ul JOIN user_role ur ON ur.role_id=ul.role_id";
$sqlUser = "select * from appointments";
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
                        <h1 class="page-header">View All Appointments</h1>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            
         
            
            <!--Inner Content -->
            
            
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                                <?php if($_GET['msg'] == '1'){ echo "<font color='green'>
            <span id='success_message'> New Appointment has been created successfully </span></font>";
             }else if($_GET['msg'] == '2'){ echo "<font color='green'> 
            <span id='delete_message'>Appointment accomplished successfully</span></font>";
			 }else if($_GET['msg'] == '3'){ echo "<font color='red'> 
            <span id='delete_message'>Appointment has been deleted successfully</span></font>";
			 }else if($_GET['msg'] == '4'){ echo "<font color='red'> 
            <span id='delete_message'>Appointment has not been Accomplished</span></font>";
			 }else{ echo "View Appointment's";
             }?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                             <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
											<th>Appointment Date</th>
                                            <th>Appointment Time</th>
											<th>Type</th>
											<th>Phone</th>
                                            <th>Status</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php while($row=mysql_fetch_array($result)){?>
 									 <tr class="odd gradeX"> 
                                            <td><?php echo $row["name"];?></td>
                                            <td><?php echo $row["appointment_date"];?></td>
											<td><?php echo $row["appointment_time"];?></td>
											<td><?php echo $row["type"];?></td>
											<td><?php echo $row["phone"];?></td>
                                            <td> 
											<?php if($row["status"]=='active'){?><input type="checkbox" id="userStatus<?php echo $row["serial"];?>" checked data-toggle="toggle" data-on="Active" onChange="changeAppointmentStatus(<?php echo $row["serial"];?>);" data-off="Inactive"><?php 
											}else{?><input type="checkbox" id="userStatus<?php echo $row["serial"];?>" data-toggle="toggle" onChange="changeAppointmentStatus(<?php echo $row["serial"];?>);" data-on="Active" data-off="Inactive"><?php } ?>
											</td>
											<td>
                                           <a href="javascript:void(0)" onClick="viewAppointment(<?php echo $row['serial']; ?>)"><i class="fa fa-eye" aria-hidden="true"></i> </a>
															/				
                                            <a onClick="deleteAppointment(<?php echo $row['serial'];?>);" href="javascript:void(0)"> <i class="fa fa-trash" aria-hidden="true"></i></a>
                                            
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