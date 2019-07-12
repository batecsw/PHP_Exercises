<?php

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

if (isset($_POST['submitButton'])) {
	// Validations
	if (empty($_POST['firstName']) or empty($_POST['lastName']))
		echo 'Firstname and lastname are mandatory';
	elseif (!(strlen($_POST['email']) > 8 and strlen($_POST['email']) < 50))
		echo 'Your email should be between 8 and 50 characters';
	elseif (!(strpos($_POST['email'], '@')))
		echo 'Your email doesn\'t contain @ symbol';
	elseif (strlen($_POST['password']) != 8)
		echo 'Your password must be 8 character long';
	elseif (!($_POST['password'] == $_POST['checkPassword']))
		echo 'Your password are not indentical';
	else {
		echo "Your name : " . $_POST['firstName'] . ' ' . $_POST['lastName'] . '<br>';
		echo "Your email : " . $_POST['email'] . '<br>';

		if (isset($_POST['checkcheck']))
			echo "You clicked the checkbox";
		else
			echo "You didn't clicked the checkbox";
	}
	/*The fields "Password" and "Confirmation" must be identical and have at least 8 characters*/
}

?>

<form action="" method="post">
	<input type="text" name="firstName" placeholder="First name"><br>
	<input type="text" name="lastName" placeholder="Last name"><br>
	<input type="text" name="email" placeholder="Email Adress"><br>
	<input type="password" name="password" placeholder="Password"><br>
	<input type="password" name="checkPassword" placeholder="Check password"><br>
	<label>
		<input type="checkbox" name="checkcheck">
		Subscribe to the newsletter
	</label>
	<br>
	<input type="submit" name="submitButton" value="send">
</form>