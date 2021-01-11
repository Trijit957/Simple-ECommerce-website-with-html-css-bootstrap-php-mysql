<?php

// include common.php file
require "includes/common.php";

// Getting input from user by POST method

if(isset($_POST['submit'])) {
$name = input_valid($_POST['Name']); 
$email = input_valid($_POST['Email']); 
$password = input_valid($_POST['Password']); 
$contact = input_valid($_POST['Contact']); 
$city = input_valid($_POST['City']); 
$address = input_valid($_POST['Address']); 

if($name == "" || $email == "" || $password == "" || $contact == "" || $city == "" || $address == "" ) //check if inputs are empty or not
{
	if($name == "")
	  {
	  	$error_name = "<span style='color: red;'>*Required</span>";
	  }
	if($email == "")
	  {
	  	$error_email = "<span style='color: red;'>*Required</span>";
	  }
	if($password == "")
	  {
	  	$error_password = "<span style='color: red;'>*Required</span>";
	  }
	if($contact == "")
	  {
	  	$error_contact = "<span style='color: red;'>*Required</span>";
	  }
	if($city == "")
	  {
	  	$error_city = "<span style='color: red;'>*Required</span>";
	  }
	if($address == "")
	  {
	  	$error_address = "<span style='color: red;'>*Required</span>";
	  }
	  // showing error alerts in signup page
	header("location: signup.php?error_name=".$error_name."&error_email=".$error_email."&error_password=".$error_password."&error_contact=".$error_contact."&error_city=".$error_city."&error_address=".$error_address);
}
else
{   
	$regex_email = "/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/"; // email regular expression

	$regex_contact = "/^[6789][0-9]{9}$/"; // contact regular expression

	if(!preg_match($regex_email, $email)) {
	$error_email = "<span style='color: red;'>*Invalid Email</span>";
    }

    else
    {
    	$check_email = "SELECT * FROM users WHERE email = '$email'"; // check if email id already registered or not

		$result_check_email = mysqli_query($connection,$check_email);

		if(mysqli_num_rows($result_check_email)) {
			$error_email = "<div style='color: red;'>*Email id already registers</div>";
		}
		
    }

    if(strlen($password) < 6) {
	$error_password = "<span style='color: red;'>*Password should have at-least 6 characters</span>";
    }
    
    if(!preg_match($regex_contact, $contact)) {
	$error_contact = "<span style='color: red;'>*Please enter valid 10-digit contact number</span>";
    }

    // showing error alerts in signup page
    if(isset($error_email) || isset($error_password) || isset($error_contact)) {
    	header("location: signup.php?error_email=".$error_email."&error_password=".$error_password."&error_contact=".$error_contact);
    }
     else {
        
        $password = MD5($password); // password encryption
		
        // inserting values in the database

		$query = "INSERT INTO users(name,email,password,contact,city,address) VALUES('$name','$email','$password','$contact','$city','$address')"; 

		$result = mysqli_query($connection,$query) or die(mysqli_error($connection));

		    //session variable initialize
          
		    $_SESSION['name'] = $name;
		 	$_SESSION['email'] = $email;
		 	$_SESSION['user_id'] = mysqli_insert_id($connection);
		    header("location: products.php");
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