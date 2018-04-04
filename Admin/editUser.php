<?php require_once('header.php');

 $userId = $_POST['id'];

$sqlUser = "select * from users as ul
									inner join user_role as ur
									on
									ul.role = ur.role_id
									and
									ul.serial = '".$userId."' ";

//$sqlUser = "select * from users Where serial = '".$userId."' ";
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
                                            <input type="password" id="password" name="password" class="form-control" placeholder="Your password" value="<?php echo $row['password']?>" required> 
                                        </div>
										 <div class="form-group" id="frmCheckUsername">
                                            <label  for="cell">Contact*</label>
                                            <input type="tel" id="contact" name="contact" class="form-control" placeholder="(xxx)xxx-xxxx" pattern="^(?:(?:\+?1\s*(?:[.-]\s*)?)?(?:\(\s*([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9])\s*\)|([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9]))\s*(?:[.-]\s*)?)?([2-9]1[02-9]|[2-9][02-9]1|[2-9][02-9]{2})\s*(?:[.-]\s*)?([0-9]{4})(?:\s*(?:#|x\.?|ext\.?|extension)\s*(\d+))?$" value="<?php echo $row['contact']?>" required> 
                                        </div>
                                        <div class="form-group">
                                            <label>Address*</label>
                                            <input type="text" id="address" name="address" class="form-control" placeholder="Your address" value="<?php echo $row['address']?>"  required>
											
                                        </div>
										
                                        <div class="form-group">
                                            <label>Role</label>
                                            <select class="form-control" id="role" name="role" required>
												<option value="">Please Select Role</option>
												 <?php $sqlRole = "select * from user_role";
													$resRole = mysql_query($sqlRole) or die(mysql_error());
													while($rowRole = mysql_fetch_assoc($resRole)){?>
                           							 <option value="<?php echo $rowRole['role_id'];?>" 
													<?php if($row['role'] == $rowRole['role_id']){echo " selected='selected' ";}?>>
													<?php echo $rowRole['role_name'];?></option>
                                            <?php }?>   
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