<?php
    // include common.php file
    require "includes/common.php"; 

    // check if session start or not
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
	<title>Signup</title>
</head>
<body>
		<!--include header.php file -->
        <?php require "includes/header.php"; ?> 

        <div id="banner_content">
          <div class="container-fluid">
        	<div class="row">
             <div class="col-md-6 hidden-xs" id="image">
                 <img src="img/yess.jpg">
             </div>
        	 <div class="col-md-6 col-xs-10 col-xs-offset-1 col-md-offset-0">	
         	  <form action="signup_script.php" method="POST" autocomplete="off" class="jumbotron">
         		<p style="font-size: 40px; font-weight: bold;">SIGN UP</p>
         		<div class="form-group">
         		<input type="text" class="form-control" name="Name" placeholder="Name">
                <?php
                  if(isset($_GET['error_name']))
                    {
                     echo $_GET['error_name'];
                    }
                ?>
                </div>
         		<div class="form-group">	
         		<input type="text" class="form-control" name="Email" placeholder="Email">
                <?php
                    if(isset($_GET['error_email']))
                    {
                        echo $_GET['error_email'];
                    }
                ?>
                </div>
         		<div class="form-group">
         		<input type="password" class="form-control" name="Password" placeholder="Password">
                <?php
                 if(isset($_GET['error_password'])) {
                     echo $_GET['error_password'];
                 }
                ?>
                </div>
                <div class="form-group">
         		<input type="number" class="form-control" name="Contact" placeholder="Contact">
                <?php
                 if(isset($_GET['error_contact'])) {
                     echo $_GET['error_contact'];
                 }
                ?>
                </div>
                <div class="form-group">
         		<input type="text" class="form-control" name="City" placeholder="City">
                <?php
                 if(isset($_GET['error_city'])) {
                     echo $_GET['error_city'];
                 }
                ?>
                </div>   
                <div class="form-group">
         		<input type="text" class="form-control" name="Address" placeholder="Address">
                <?php
                 if(isset($_GET['error_address'])) {
                     echo $_GET['error_address'];
                 }
                ?>
                </div>
                <div class="form-group">
         		<button class="btn btn-primary btn-lg" name="submit" type="submit">Submit</button>
         	    </div>
         	  </form>
             </div>
            </div>
        </div>
        </div>
        <!--include footer.php file -->
        <?php require "includes/footer.php";?>  	
</body>
</html>