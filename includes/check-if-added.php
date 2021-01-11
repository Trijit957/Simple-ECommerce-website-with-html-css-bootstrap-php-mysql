<?php

// function to check if the item is added to cart or not

function check_if_added_to_cart($item_id) {
$connection = mysqli_connect("localhost","root","","store");
$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM users_items WHERE item_id = '$item_id' AND user_id = '$user_id' AND status = 'added to cart'";

$result = mysqli_query($connection,$query);

$var = mysqli_num_rows($result);

return $var;

}

?>