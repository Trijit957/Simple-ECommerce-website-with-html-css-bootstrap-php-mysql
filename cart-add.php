<?php

require "includes/common.php";

$item_id = $_GET['id'];
$user_id = $_SESSION['user_id'];

// inserting values into 'users_items' table 

$query = "INSERT INTO users_items(user_id,item_id,status) VALUES ('$user_id','$item_id','added to cart')";

$result = mysqli_query($connection,$query);


header("location: products.php");


?>