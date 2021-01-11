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
	<title>About Us</title>
</head>
<body>
		<!--include header.php file -->
        <?php require "includes/header.php"; ?> 
        
        <div id="banner_content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <h3>WHO WE ARE</h3>
                        <img src="img/about-img.jpg" alt="about">
                        <div id="text_contain">
                            E-Store is an Indian electronic commerce website. Currently E-Store is selling products like watches,shirts and cameras. 
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <h3>OUR HISTORY</h3>
                        <div id="text_contain">
                            <p style="color: blue;">2021-</p>
                            We launched in jan,2021.
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <h3>OPPORTUNITIES</h3>
                        <div id="text_contain">
                            Currently no Roles are available.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--include footer.php file -->  
        <?php require "includes/footer.php"; ?>       	
</body>
</html>