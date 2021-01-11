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
	<title>Forget Password</title>
</head>
<body>
        <!--include header.php file -->
		<?php require "includes/header.php"; ?>

        <div id="banner_content">
          <div class="container">
        	<div class="row">
        	 <div class="col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1" style="margin-top: 50px;">
              <?php
                    if(isset($_GET['msg'])) {
                        echo $_GET['msg'];
                    }
              ?>	
         	  <form action="sendmail.php" method="POST" autocomplete="off" class="jumbotron">
         		<p style="font-size: 40px; font-weight: bold;">Forget Password</p>
         		<div class="form-group">	
         		<input type="text" class="form-control" name="email" placeholder="Email">
                <?php
                    if(isset($_GET['error_email']))
                    {
                        echo $_GET['error_email'];
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