<?php
    // include common.php file
    require "includes/common.php"; 
    if(isset($_SESSION['name']))
    {
        header("location: products.php");
    }


?>
<!DOCTYPE html>
<html>
<head>
    <!--including css, bootstrap(css & js files), jquery files -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
		<!--include header.php file -->
        <?php require "includes/header.php"; ?> 
        
        <div id="banner_content">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-4 col-md-offset-4 col-xs-10 col-xs-offset-1">
                        <div style="text-align: center;color: blue; font-size: 25px;">
                        <?php
                            if(isset($_GET['password']))
                            {
                                echo $_GET['password'];
                            }
                        ?>
                        </div>
        				<div class="panel panel-primary">
        					<div class="panel-heading">
        						<p style="font-size: 30px; font-weight: bold;">LOGIN</p>
        					</div>
        					<div class="panel-body">
        						<?php if(isset($_GET['error_login'])) {
                                       echo $_GET['error_login'];
                                      }
                                      else { ?>
                                        <p class="text-warning"><em>Login to make a purchase</em></p>
                                <?php }?>
        						<form method="POST" action="login_submit.php">
        							<div class="form-group">
        								<input type="text" name="Email" class="form-control" placeholder="Email">
                                        <?php
                                            if(isset($_GET['email_error']))
                                                { echo $_GET['email_error'];}
                                        ?>
        							</div>
        							<div class="form-group">
        								<input type="password" name="Password" class="form-control" placeholder="Password">
                                        <?php
                                            if(isset($_GET['password_error']))
                                                { echo $_GET['password_error'];}
                                        ?>
        							</div>
        							<div class="form-group">
        								<button type="submit" class="btn btn-primary" name="submit">Login</button>
        							</div>
        						</form>
        					</div>
        					<div class="panel-footer">
        						<p>Don't have an account?<a href="signup.php">Register</a></p>
                                <p>Forget password?<a href="forget_password.php">Click here</a>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <!--include footer.php file -->  
        <?php require "includes/footer.php"; ?>       	
</body>
</html>