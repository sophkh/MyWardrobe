<?php require_once('header.php');

//$query = "select * FROM user_login ul JOIN user_role ur ON ur.role_id=ul.role_id";
$sqlUser = "select * from users";
$result = mysql_query($sqlUser) or die(mysql_error());

?>

    <div id="wrapper" >

        <!-- Navigation -->
        
        <?php require_once('navigation.php')?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
           
                <div class="row">
                    <div class="col-lg-10" >
                        <h1 class="page-header">View All Users</h1>
                    </div>
					 <div class="col-lg-2" >
					<a  class="btn btn-primary page-header" href="javascript:void(0)" onClick="newUser()"> Register New User </a>
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
            <span id='success_message'> New User has been created successfully </span></font>";
             }else if($_GET['msg'] == '2'){ echo "<font color='red'> 
            <span id='delete_message'>User has been deleted successfully</span></font>";
			 }else if($_GET['msg'] == '3'){ echo "<font color='green'> 
            <span id='delete_message'>User has been Updated successfully</span></font>";
			 }else if($_GET['msg'] == '4'){ echo "<font color='green'> 
            <span id='delete_message'>User has been Activated successfully</span></font>";
			 }else if($_GET['msg'] == '5'){ echo "<font color='red'> 
            <span id='delete_message'>User has been Deactivated successfully</span></font>";
			 }			 else{ echo "View User's";
             }?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                             <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
											<th>Email</th>
											<!--<th>Password</th>-->
                                            <th>Address</th>
											<th>Contact</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php while($row=mysql_fetch_array($result)){?>
 									 <tr class="odd gradeX"> 
                                            <td><?php echo $row["username"];?></td>
											<td><?php echo $row["email"];?></td>
                                            <!--<td><?php //echo $row["password"];?></td>-->
											<td><?php echo $row["address"];?></td>
											<td><?php echo $row["contact"];?></td>
											<td><?php echo $row["date"];?></td>
                                            <td><?php if($row['role'] != '1'){ 
											if($row["status"]=='active'){?><input type="checkbox" id="userStatus<?php echo $row["serial"];?>" checked data-toggle="toggle" data-on="active" onChange="changeStatus(<?php echo $row["serial"];?>);" data-off="inactive"><?php 
											}else{?><input type="checkbox" id="userStatus<?php echo $row["serial"];?>" data-toggle="toggle" onChange="changeStatus(<?php echo $row["serial"];?>);" data-on="active" data-off="inactive"><?php } 
											} else { ?><b><p style="text-align:center;"> Admin</p> </b><?php }?>
											
											</td>
                                            <td>
                                            <a href="javascript:void(0)" onClick="editUser(<?php echo $row['serial']; ?>)"><i class="fa fa-eye" aria-hidden="true"></i></a>
											<?php if($row['role'] != '1'){//echo "HERE";?>/
                                            <a  onClick="deleteUser(<?php echo $row['serial'];?>);" href="javascript:void(0)" > <i class="fa fa-trash" aria-hidden="true"></i></a>
                                            <?php } ?>
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
	
	
<?php require_once('footer.php')?>