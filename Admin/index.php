<!DOCTYPE html>
<?php
	error_reporting(0); 
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mywardrobe</title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            	<div class="login-panel" style="text-align:center;">
                    <img alt="celebex" src="image/logo.png">
                </div>
                <div class="panel panel-default">
                	
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php if($_GET['msg']=="") {echo ("Enter Username and Password");} else {?>
<font color='red'> <?php echo $_GET['msg'];?></font><?php } ?><!--END DESCRIPTION--></h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="login.php" method="post" name="login-form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="username"  id="username" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password"  id="password" name="password" type="password"  value="" >
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                
                                <button name="submit" type="submit" class="btn btn-lg btn-success btn-block">Login In</button>
                                <!--<a href="dashboard.php" class="btn btn-lg btn-success btn-block">Login</a>-->
                            </fieldset>
                        </form>
                        <div style="padding:10px; text-align:center;">
                        Powered by: <a href="/Mywardrobe/index.php" target="_blank" >Mywardrobe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

   <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>

</body>

</html>

    
    
    
    
    
    
    