<?php

//include common.php file 

require "includes/common.php";

// Getting input from user by POST method

if(isset($_POST['submit'])) 
{

	$email = input_valid($_POST['email']); 

    if($email == "")
	  {
	  	$error_email = "<span style='color: red;'>*Required</span>";
	  	header("location: forget_password.php?error_email=".$error_email);// showing error alert in forget_password page
	  }
	else
	 {
	 	$query = "SELECT * FROM users WHERE email = '$email'"; // check if email is registered or not

	 	$result = mysqli_query($connection, $query);

	 	if(mysqli_num_rows($result)) 
	 		{   $row = mysqli_fetch_assoc($result);
	 			$password = generateRandomString(10); // generate random string
	 			$to_email = $email;
				$subject = "E-Store: Password Recovery";
				$body = "Hii , ".$row['name'].", Your password has been set to ".$password." ";
                $headers = "From: E-Store";

                // Sending mail to user

	 		   if(mail($to_email, $subject, $body, $headers)) {
	 		   	$password = MD5($password); // password encryption
	 		   	$update_password = " UPDATE users SET password = '$password' where email='$email'";
	 			$result_update_password = mysqli_query($connection, $update_password);
                $msg = "<p class = 'alert alert-success'>Email successfully sent</p>";
                header("location: forget_password.php?msg=".$msg); // showing succes message
               } 
               else {
                $msg = "<p class = 'alert alert-danger'>Something error ocurred</p>";
                header("location: forget_password.php?msg=".$msg); // showing error message
               }
	 		}
	 	else {
	 		$error_email = "<span style='color: red;'>*Enter valid Email Id</span>";
	  	    header("location: forget_password.php?error_email=".$error_email); // showing error message
	 	}	
	 }

}


// function to generate a random string

function generateRandomString($length) {
	$char = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$charlength = strlen($char);
	$randomstring = "";
	for($i=0 ; $i< $length ; $i++) {
		$randomstring .= $char[rand(0,$charlength - 1)];
	}
	return $randomstring;
}

// function for prevent form injection

function input_valid($string) {
	$connection = mysqli_connect("localhost","root","","store");
	$input = mysqli_real_escape_string($connection,$string);
	$input = strip_tags($input);
	return $input;
}

?>