<?php
// include common.php file
require "includes/common.php"; 

if(!isset($_SESSION['name']))
    {
        header("location: index.php");
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
	<title>Setting</title>
</head>
<body>
        <!--include header.php file -->
		<?php require "includes/header.php";?> 

          <div class="container">
        	<div class="row">
        		<div class="col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1">
                    <div id="icon">
                            <a href="products.php" id="icon"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
                    </div>
                    <?php
                    if(isset($_GET['msg'])) {
                        echo $_GET['msg'];
                    }
                    ?>    
        		<form method="POST" action="settings_script.php" class="jumbotron">
        			<div style="font-weight: bold; font-size: 22px; padding-bottom: 10px;">
        				<p>Change Password</p>
        			</div>
        			<div class="form-group">
        				<input type="password" name="oldPassword" class="form-control" placeholder="Old Password">
                    <?php
                    if(isset($_GET['error_password']))
                    {
                        echo $_GET['error_password'];
                    }
                    ?>  
                    </div>
        			<div class="form-group">
        				<input type="password" name="newPassword" class="form-control" placeholder="New Password">
                    <?php
                    if(isset($_GET['error_new']))
                    {
                        echo $_GET['error_new'];
                    }
                    ?>
                    </div>
        			<div class="form-group">
        				<input type="password" name="conPassword" class="form-control" placeholder="Re-type New Password">
                    <?php
                    if(isset($_GET['error_con']))
                    {
                        echo $_GET['error_con'];
                    }
                    ?>
                    </div>
        			<div class="form-group">
        				<button type="submit" class="btn btn-primary" name="submit">Change</button>
        			</div>
        		</form>
        	    </div>
        	</div>
          </div> 
</body>
</html>