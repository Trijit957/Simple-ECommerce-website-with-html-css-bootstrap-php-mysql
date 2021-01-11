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
	<title>E-Store</title>
</head>
<body>
        <!--include header.php & check-if-added.php files -->
		<?php
         require "includes/header.php";
        ?>

        <!--Showing products-->

        <div class="container" id="banner_content">
        	<div class="row">
        		<div class="col-md-3 col-md-6">
        			<div class="thumbnail">
        				<img src="img/5.jpg">
        				<div id="row">
                        <h3>Cannon EOS</h3>
        				<p>Price: Rs.36000.00</p>
        				</div>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                     
                    </div>
        		</div>
        		<div class="col-md-3 col-md-6">
        			<div class="thumbnail">
        				<img src="img/2.jpg">
        				<div id="row">
                        <h3>Nikon DSLR</h3>
        				<p>Price: Rs.40000.00</p>
        				</div>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
        			</div>	
        		</div>
        		<div class="col-md-3 col-md-6">
        			<div class="thumbnail">
        				<img src="img/3.jpg">
        				<div id="row">
                        <h3>Sony DSLR</h3>        				
                        <p>Price: Rs.45000.00</p>
                        </div>
        				<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
        			</div>
        		</div>
        		<div class="col-md-3 col-md-6">
        			<div class="thumbnail">
        				<img src="img/4.jpg">
        				<div id="row">
                        <h3>Olympus DSLR</h3>        				
                        <p>Price: Rs.50000.00</p>
                        </div>   
        				<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
        			</div>
        		</div>			
        	</div>
        	<div class="row">
        		<div class="col-md-3 col-md-6">
        			<div class="thumbnail">
        				<img src="img/9.jpg">
        				<div id="row">
                        <h3>Titan Model #301</h3>
        				<p>Price: Rs.13000.00</p>
        				</div>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
        			</div>
        		</div>
        		<div class="col-md-3 col-md-6">
        			<div class="thumbnail">
        				<img src="img/10.jpg">
        				<div id="row">
                        <h3>Titan Model #201</h3>
                        <p>Price: Rs.3000.00</p>
        				</div>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
        			</div>
        		</div>
        		<div class="col-md-3 col-md-6">
        			<div class="thumbnail">
        				<img src="img/11.jpg">
        				<div id="row">
                        <h3>HMT Milan</h3>
        				<p>Price: Rs.8000.00</p>
        				</div>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
        			</div>
        		</div>
        		<div class="col-md-3 col-md-6">
        			<div class="thumbnail">
        				<img src="img/12.jpg">
        				<div id="row">
                        <h3>Faber Luba #111</h3>
        				<p>Price: Rs.18000.00</p>
        				</div>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
        			</div>
        		</div>				
        	</div>
        	<div class="row">
                <div class="col-md-3 col-md-6">
                    <div class="thumbnail">
                        <img src="img/8.jpg" style="height: 168.33px;">
                        <div id="row">
                        <h3>H&W</h3>                      
                        <p>Price: Rs.800.00</p>
                        </div>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    </div>
                </div>
                <div class="col-md-3 col-md-6">               
                    <div class="thumbnail">
                        <img src="img/6.jpg">
                        <div id="row">
                        <h3>Luis Phil</h3>                        
                        <p>Price: Rs.1000.00</p>
                        </div>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    </div>
                </div>
                <div class="col-md-3 col-md-6">
                    <div class="thumbnail">
                        <img src="img/13.jpg">
                        <div id="row">
                        <h3>John Zok</h3>
                        <p>Price: Rs.1500.00</p>
                        </div>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    </div>
                </div>
                <div class="col-md-3 col-md-6">
                    <div class="thumbnail">
                        <img src="img/14.jpg">
                        <div id="row">
                        <h3>Jhalsani</h3>
                        <p>Price: Rs.1300.00</p>
                        </div>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    </div>
                </div>

            </div>
        </div>
        <!--include footer.php file -->
        <?php require "includes/footer.php";?>
</body>
</html>