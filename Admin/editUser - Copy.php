<?php require_once('header.php');

 $userId = $_POST['id'];

$sqlUser = "select * from users Where
									 serial = '".$userId."' ";
$result = mysql_query($sqlUser) or die(mysql_error());
?>


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row" id="content">
                    <div class="col-lg-12" >
                        <h1 class="page-header">Update User</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            
            
            <!--Inner Content -->
            <?php $row = mysql_fetch_assoc($result);?>
            
            <div class="panel panel-default" id="content">
                        <div class="panel-heading">
                            Requested User Detail
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form id="" action="updateUser.php"  method="post">
									
									<input type="hidden" value="<?php echo $userId?>" name="uid" id="uid" />
									
                                       <div class="form-group">
                                            <label  for="cell">User Name*</label>
                                            <input id="username" name="username" class="form-control" placeholder="Your Full Name" onBlur="checkAvailability()" value="<?php echo $row['username']?>" required>												<div id="user-availability-status"></div>
                                        </div>
										<div class="form-group">
                                            <label  for="cell">Email*</label>
                                            <input type="email" id="email" name="email" class="form-control" placeholder="email@example.com" value="<?php echo $row['email']?>"  required>	
                                        </div>										
                                        <div class="form-group" id="frmCheckUsername">
                                            <label  for="cell">Password*</label>
                                            <input type="text" id="password" name="password" class="form-control" placeholder="Your password" value="<?php echo $row['password']?>" required> 
                                        </div>
										 <div class="form-group" id="frmCheckUsername">
                                            <label  for="cell">Contact*</label>
                                            <input type="tel" id="contact" name="contact" class="form-control" placeholder="92xxxxxxxx" pattern="^\d{2}\d{3}\d{7}$" value="<?php echo $row['contact']?>" required> 
                                        </div>
                                        <div class="form-group">
                                            <label>Address*</label>
                                            <input type="text" id="address" name="address" class="form-control" placeholder="Your address" value="<?php echo $row['address']?>"  required>
											
                                        </div>
										
                                        <div class="form-group">
                                            <label>Role</label>
                                            <select class="form-control" id="role" name="role" required>
												<option value="">Please Select Role</option>
												 <option value="<?php echo $row['role'];?>" 
												<?php echo " selected='selected' ";?>>
												<?php echo $row['role'];?></option>
                                            </select>
                                        </div>   
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <button onClick="cancelUpdate();" type="button" class="btn btn-default">Cancel</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->