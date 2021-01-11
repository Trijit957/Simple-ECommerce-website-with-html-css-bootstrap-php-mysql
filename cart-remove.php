<?php

require "includes/common.php";

$user_id = $_SESSION['user_id'];
$item_id = $_GET['id'];

// query for removing items which are added to cart 

$query = "DELETE FROM users_items WHERE user_id = '$user_id' AND item_id = '$item_id'";

$result = mysqli_query($connection,$query);

header("location: cart.php");


?>