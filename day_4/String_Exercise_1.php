<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>String Exercise 1</title>
</head>
<body>
	<form method="POST">
		Enter your text:
		<input type="text" name="string" />
		<br><br>
		<input type="submit" name="submitCaps" value="Upper Case" />
		<br><br>
		<input type="submit" name="submitLower" value="Lower Case" />
		<br><br>
		<input type="submit" name="submitWord" value="Capitalise" />
		<br><br>
		<input type="submit" name="submitInit" value="Initial Cap" />
		<br><br>
		<input type="submit" name="submitExp" value="Explode" />
		<br><br>
		<input type="submit" name="submitHyp" value="Two words!" />
	</form>
	<div>
		<p><?php $capsString ?></p>
		<p><?php $lowerString ?></p>
	</div>
</body>
</html>
<?php 
if(isset($_POST['submitCaps'])) {
	$string = $_POST['string'];
	$modString = strtoupper($string);
	echo $modString;
} else if(isset($_POST['submitLower'])) {
	$string = $_POST['string'];
	$modString = strtolower($string);
	echo $modString;
} else if(isset($_POST['submitWord'])) {
	$string = $_POST['string'];
	$modString = ucwords($string);
	echo $modString;
} else if(isset($_POST['submitInit'])) {
	$string = $_POST['string'];
	$modString = ucfirst($string);
	echo $modString;
} else if(isset($_POST['submitExp'])) {
	$string = $_POST['string'];
	$array = explode('.', $string);
	echo $array[0]."<br>";
	$pos = strpos($string, ".");
	echo substr($string, 0, $pos);
} else if(isset($_POST['submitHyp'])) {
	$string = $_POST['string'];
	$array = explode(' ', $string);
	if (count($array) >= 2) {
		echo $array[0]."-".$array[1];
	} else echo "Not enough words!";
}
/*

	1. Create an HTML form with a text field in a PHP script. The form will point to the same page.

	2. Create a `submit` button that sends the string input, and displays in a <div> this string in uppercase.

	3. Create a second `submit` button, which displays the string entered in lowercase

	4. Similarly, a submit to add a capital letter to each word
	
	5. And again a submit to add a capital letter, but only at the beginning of the chain.

	6. Now create a submit that will display the string only up to the '.' (point) not included
	  - Use the `explode` function for that.
	  - Now use the `strpos` and` substr` function to produce the same result.

	Bonus: Finally, create a submit that displays the first two words of the string entered, separated by a hyphen ("-")
  	If there are not enough words, display the message "Enter at least two words"
*/
?>