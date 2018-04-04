<?php require_once('header.php');

$query = "select * FROM user_role";
$result = mysql_query($query);
?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row" id="content">
                    <div class="col-lg-12">
                        <h1 class="page-header">Create New User</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            
            
            <!--Inner Content -->
            <div class="panel panel-default" id="content">
                        <div class="panel-heading">
                            Create New User
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form  id=""  action="addUserContent.php" method="post" >
									    <div class="form-group">
                                            <label  for="cell">User Name*</label>
                                            <input id="username" name="username" class="form-control" placeholder="Your Full Name" onBlur="checkAvailability()" required>												<div id="user-availability-status"></div>
                                        </div>
										<div class="form-group">
                                            <label  for="cell">Email*</label>
                                            <input type="email" id="email" name="email" class="form-control" placeholder="email@example.com"  required>	
                                        </div>										
                                        <div class="form-group" id="frmCheckUsername">
                                            <label  for="cell">Password*</label>
                                            <input type="text" id="password" name="password" class="form-control" placeholder="Your password" required> 
                                        </div>
										 <div class="form-group" id="frmCheckUsername">
                                            <label  for="cell">Contact*</label>
                                            <input type="tel" id="contact" name="contact" class="form-control" placeholder="(XXX)-XXX-XXXX" pattern="^\d{3}\d{3}\d{4}$" required> 
                                        </div>
                                        <div class="form-group">
                                            <label>Address*</label>
                                            <input type="text" id="address" name="address" class="form-control" placeholder="Your Address"  required>
											
                                        </div>                                       
                                        <div class="form-group">
                                            <label>Role*</label>
                                            <select class="form-control" id="role" name="role" required>
										        <option value="">Please Select Role</option>
                                            <?php while($row=mysql_fetch_array($result)){?>
                                                <option value="<?php echo $row["role_id"];?>"><?php echo $row["role_name"];?></option>
                                            <?php }?>     
                                            </select>
                                        </div> 
										    
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
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
<script>

function checkAvailability() {
//var username=$("#username").val();
jQuery.ajax({
url: "check_availability.php",
data:'username='+$("#username").val(),
type: "POST",
success:function(data){
	if(data==0)
	{
		$("#username").val('');
		$("#username").focus();
		$("#user-availability-status").html("Username Not Available");
	}
	else
	{
		$("#user-availability-status").html("Username Available");
	}
},
error:function (){}
});
}
</script>