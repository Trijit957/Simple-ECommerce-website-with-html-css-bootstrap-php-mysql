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
	<title>Contact Us</title>
</head>
<body>
		<!--include header.php file -->
        <?php require "includes/header.php"; ?> 
        
        <!-- contact information-->
        <div id="banner_content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xs-12">
                        <h2>LIVE SUPPORT</h2>
                        <h4>24 hours | 7 days a week | 365 days a year Live Technical Support</h4>
                        <div id="text_content">
                            If any kind of problem occured during purchasing any items , then send us an email at support.e-store@gmail.com or contact us at +91 9000000001
                        </div>
                    </div>
                    <div class="col-md-4 hidden-xs">
                        <center><img src="img/contact.png" alt="contact"></center>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-xs-12">
                        <h2>Contact Information</h2>
                        <div id="text_content">
                            <p>Email: support.e-store@gmail.com</p>
                            <p>Phone: +91 9000000001</p>
                            <p>Fax: (000) 000 00 00 0</p>
                            <p>Follow on: Facebook , Twitter</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--include footer.php file -->  
        <?php require "includes/footer.php"; ?>       	
</body>
</html>