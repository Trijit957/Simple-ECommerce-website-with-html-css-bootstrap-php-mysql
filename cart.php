<?php

// include common.php file
require "includes/common.php";

if(!isset($_SESSION['name']))
    {
        header("location: index.php");
    }

// Store user_id from session variable

$user_id = $_SESSION['user_id'];

// query for selecting items which are 'added to cart' only

$query = "SELECT * FROM items INNER JOIN users_items ON items.id = users_items.item_id AND users_items.user_id='$user_id' AND users_items.status='added to cart'";

$result = mysqli_query($connection,$query) or die(mysqli_error($connection));

$num = 1;
$price = 0;
$id = 0;

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cart</title>
</head>
<body>
		<?php require "includes/header.php"; ?>
            
         	<div class="container">
         		<div class="row">
         			<div class="col-md-6 col-md-offset-3 col-xs-12">
                        <div id="icon">
                            <a href="products.php" id="icon"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
                        </div>
                        <table class="table table-striped table-hover table-condensed">
         					<thead>
         						<tr>
         							<td>Item Number</td>
         							<td>Item Name</td>
         							<td>Price</td>
         							<td></td>
         						</tr>
         					</thead>
                            <!--Showing table if atleast one item is 'added to cart' -->
         					<tbody>
                                <?php if(mysqli_num_rows($result) == 0){
                                    echo "<tr><td colspan='4' style='text-align: center;'>Add items to the cart first!</td></tr>";
                                }
                                else { while ($row = mysqli_fetch_assoc($result)) {
                                        $price = $price + $row['price'];
                                        if($id == 0)
                                          {
                                            $id = $row['item_id'];
                                          }
                                        else
                                          { 
                                            $id = $id.",".$row['item_id'];
                                          }
                                ?>
         						<tr>
         							<td><?php echo $num++; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['price'];?></td>	
         						    <td><?php echo"<a href='cart-remove.php?id={$row['item_id']}' class='remove_item_link'>Remove</a>" ?></td>
                                </tr>
                                <?php } }?>
                                
                                <?php if($price != 0) { ?>
                                <tr>
                                    <td></td>
                                    <td>Total</td>
                                    <td> <?php echo "Rs: ".$price."/-"; ?></td>
                                    <td> <?php echo "<a href='success.php?id={$id}' class='btn btn-primary'>Confirm Order</a>"; ?> </td>
                                </tr>
                                <?php } ?> 
         					</tbody>
         				</table>
         			</div>
         		</div>
         	</div>
</body>
</html>