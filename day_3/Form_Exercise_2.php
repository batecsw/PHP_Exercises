<?php
$firstName = "";
$lastName = "";
$email = "";
$pass = "";
$confirm = "";
$subscribe = "";
$tac = "";
$success = true;
if (isset($_POST['submitButton'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $confirm = $_POST['confirm'];
    if (isset($_POST['subscribe'])) {
        $subscribe = $_POST['subscribe'];
    }
    if (isset($_POST['tac'])) {
        $tac = $_POST['tac'];
    }
    if (strlen($firstName) < 1 || strlen($lastName) <1 ) {
        echo "It is mandatory to enter a value for the first name and the last name!<br>";
        $success = false;
    }
    if (strlen($email) < 8 || strlen($email) > 50 ) {
        echo "Your e-mail address must be between 8 and 50 characters long!<br>";
        $success = false;
    }
    if (strpos($email, '@') == false) {
        echo "Your email address must contain the character @<br>";
        $success = false;
    }
    if (strlen($pass) < 8) {
        echo "Your password must contain at least 8 characters!<br>";
        $success = false;
    }
    if ($pass !== $confirm) {
        echo "Your password and your password confirmation do not match<br>";
        $success = false;
    }
    if ($tac !="yes") {
        echo "You must accept the terms and conditions<br>";
        $success = false;
    }
    if ($success == true) {
        echo "<br>You have signed up with the name $firstName $lastName and the e-mail address $email<br>";
        if ($subscribe == "yes") {
            echo "You have opted to subscribe to our newsletter";
            } else { echo "You have opted out of receiving our newsletter";
            }
    }
}
/*
    - Exercise : 
	
		-- Part 1 :
	   		Create two pages:
	        - signin.php: User registration page, with the following fields:
	            - Name
	            - First name
	            - E-mail
	            - Password
	            - Confirmation of password
	            - Checkbox "Subscribe to the newsletter"

	        - recap-signin.php: Page showing the summary of the information entered.

		-- Part 2 :
			1. Using the first part, merge both the signin.php and recap-signin.php files into one.
			If we arrive on the page without the form being submitted, we will post the form, otherwise we will display the summary.

			2. Add validators on the different fields of the form:
				- The name and the first name are mandatory.
				- The e-mail must be between 8 and 50 characters long and should contains @
				- The fields "Password" and "Confirmation" must be identical and have at least 8 characters

			3. Add a box "I accept the conditions of use of the product", which must be checked.

			Bonus: Make the form values ​​reappear with each submission, in case of error.
    */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>

<body>
    <h2>Sign In form</h2>
    <form action="" method="POST">
        First Name:
        <input type="text" name="firstName" value ="<?php echo $firstName ?>" placeholder="Your first name" required />
        Last Name:
        <input type="text" name="lastName" value="<?php echo $lastName ?>" placeholder="Your last name" required />
        <br>
        E-Mail Address:
        <input type="email" name="email" value="<?php echo $email ?>" placeholder="Your email address" />
        <br><br>
        Enter Password (minimum 8 characters):
        <input type="password" name="password" value="" placeholder="password" />
        <br>
        Confirm Password:
        <input type="password" name="confirm" value="" placeholder="confirm password" />
        <br><br>
        Subscribe to the newsletter:
        <input type="checkbox" name = "subscribe" value = "yes" />
        <br>
        I accept the terms and conditions of use of the product:
        <input type="checkbox" name = "tac" value = "yes" />
        <br><br>
        <input type="submit" name = "submitButton" value="Send" />
        <form>

</body>

</html>