<?php

// include common.php file

require "includes/common.php";

if(!isset($_SESSION['name']))
    {
        header("location: index.php");
    }

// get user_id & item_id from session variable and GET method
 $user_id = $_SESSION['user_id'];
 $item_id = $_GET['id'];

    //Change the status of the items purchased by the user to 'confirmed'
 
    $query = "UPDATE users_items SET status='confirmed' WHERE item_id IN ($item_id)"; 
  
    $result = mysqli_query($connection,$query);

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
	<title>Success</title>
</head>
<body>
        <!--include header.php file -->
		<?php require "includes/header.php"; ?>
        <div id="banner_content">
        	<div class="container">
        		<div class="row">
        		   <div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3">
                        <div class="jumbotron">
                            <?php
                                echo '<p class="alert alert-success" id="column">Your order is confirmed. Thank you for ordering from E-Store. The order shall be delivered to you shortly.</p><hr><p id="column"><a href="products.php">Click here</a> to purchase any other item.</p>';
                            ?>
                        </div>
        	       </div>
        	    </div>
        	</div>
        </div>        
</body>
</html>