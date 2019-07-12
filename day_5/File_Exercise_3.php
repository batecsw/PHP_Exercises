<?php

if(isset($_POST['sub'])) {
	if ($_POST['email'] && $_POST['pass']) {
		$yourEmail = $_POST['email'];
		$yourPass =  $_POST['pass'];
		echo validate_user($yourEmail, $yourPass);
	} else {
		echo "E-mail and password are required!";
	}
}

function validate_user($yourEmail, $yourPass) {
	$array = array();
	$file_handle = fopen("users.txt" , "r");
	while(!feof($file_handle)) {
		$mystring = fgets($file_handle);
		$array[] = explode(';', $mystring);
	}
	foreach ($array as $user) {
		$userMail = $user[0];
		$userMail = str_replace('mail=' , '' , $userMail);
		$userPass = $user[1];
		$userPass = str_replace('password=' , '' , $userPass);		
		if (trim($userMail) == trim($yourEmail) && trim($userPass) == trim($yourPass)) {
			return "Hello, welcome to the site";
		} else if (trim($userMail) == trim($yourEmail) && trim($userPass) != trim($yourPass)) {
			return "Your password is not recognised, try again";
		}
	}
	return "Sorry, you are not recognised as a user";
}



	/*
		1. Create two files : 'signin.php' & 'home.php'

		2. In the 'signin.php' file, create a form with two input : email & password.
		This form will redirect to 'home.php'

		3. In 'home.php', you'll have to check :
			- If this user actually exists.
			- If he exists, check that both email/password are matching.
			- Display a message for both validations.

		For this part, you'll use the 'users.txt' file.
		TIPS : you can read the file and create an array of all the users...
	 */
?>