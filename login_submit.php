<?php
//include common.php file 
require "includes/common.php";

// Getting input from user by POST method

if(isset($_POST['submit'])) {
$email = input_valid($_POST['Email']); 
$password = input_valid($_POST['Password']); 

if($email == "" || $password == "")
{
	if($email == "")
	{ 
		$email_error = "<span style= 'color:red;'>*Required</span>";
	}
	if($password == "")
	{
		$password_error = "<span style= 'color:red;'>*Required</span>";
	}
	//showing error alerts in login page
	header("location: login.php?email_error=".$email_error."&password_error=".$password_error);
}
else
{
$password = MD5($password);

$query = "SELECT * FROM users WHERE email='$email' AND password = '$password'"; // Check if user is registered or not

$result = mysqli_query($connection,$query) or die(mysqli_error($connection));

   if(mysqli_num_rows($result))
   	{
   		$row = mysqli_fetch_assoc($result);
   		// session variable initialize
   		$_SESSION['name'] = $row['name'];
 		$_SESSION['email'] = $row['email'];
 		$_SESSION['user_id'] = $row['id'];
   		header("location: products.php");
   	}
   	else
    {
    //showing error alerts in login page
    $error_login = "<span style= 'color:red;'>*Invalid Email or Password</span>";
    header("location: login.php?error_login=".$error_login);
    }
}	
}

// function for prevent form injection

function input_valid($string) {
	$connection = mysqli_connect("localhost","root","","store");
	$input = mysqli_real_escape_string($connection,$string);
	$input = strip_tags($input);
	return $input;
}

?>