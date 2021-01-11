<?php

//include common.php
require "includes/common.php"; 

// Getting input from user by POST method
if(isset($_POST['submit']))
{

$oldpassword = input_valid($_POST['oldPassword']);
$newpassword = input_valid($_POST['newPassword']);
$conpassword = input_valid($_POST['conPassword']);
$email = $_SESSION['email'];

if($oldpassword == "" || $newpassword == "" || $conpassword == "")
{
	if($oldpassword == "")
	{
		$error_password = "<span style='color : red;'>*Required</span>";
	}
	if($newpassword == "")
	{
		$error_new = "<span style='color : red;'>*Required</span>";
	}
	if($conpassword == "")
	{
		$error_con = "<span style='color : red;'>*Required</span>";
	}
   header("location:setting.php?error_password=".$error_password."&error_new=".$error_new."&error_con=".$error_con); // show error messages
}

else if($newpassword != $conpassword)
    {
    	$error_con = "<span style='color : red;'>*Both passwords should be same</span>";
      
        header("location:setting.php?error_con=".$error_con); // show error messages
    }
else if(strlen($newpassword) < 6) {

	$error_con = "<span style='color: red;'>*Password should have at-least 6 characters</span>";
	
	header("location:setting.php?error_con=".$error_con); // show error messages
    
    }
else 
{
	$oldpassword = MD5($oldpassword); //password encryption

    $query = "SELECT * FROM users WHERE email='$email' AND password='$oldpassword'";  // check if password is valid

    $result = mysqli_query($connection,$query);


	if(mysqli_num_rows($result) == 0)
   {
	$error_password = "<span style='color : red;'>*Invalid Password</span>";

	header("location:setting.php?error_password=".$error_password); // show error messages
   }
    
    else
   {   
	$newpassword = MD5($newpassword); //password encryption
	
	$update = "UPDATE users SET password = '$newpassword' where email='$email'"; // update password
    
    $update_result = mysqli_query($connection,$update);
    
    $msg = "<p class = 'alert alert-success'>Password Update Successfully</p>";
    
    header("location: setting.php?msg=".$msg); //show success message
   
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