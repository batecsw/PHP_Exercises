<?php 

	/*
	 EXERCISE 1 :

		Write a PHP script that checks if an email address contains the @ symbol.
		If yes, display: "Valid email, symbol found at X". Otherwise display "Invalid email".

		To do your tests, you can create a "can" variable of the type $ mail = "simon@gmail.com";
	*/

	echo '<hr>';
	echo '<p style="font-weight: 900"> EXERCISE 1 </p>';
	echo '<hr><hr><p>Enter your email address</p>';
	echo '<form method="POST"><input type="text" name="yourMail" placeholder="your@email" /><input type="submit" name="sub" value="Submit" /></form>';
	if(isset($_POST['sub'])) {
		$email = $_POST['yourMail'];
		$pos = strpos($email, "@");
		if ($pos) {
			$pos = strpos($email, "@");
			echo "Valid email, symbol found at position $pos";
		} else echo "Invalid email";
	}

	/**
	 EXERCICE 2 :

		Write a PHP script that removes all slashes from this string:
		$movies = "/Star Wars/Fight Club/Intouchables/Night Call//";
	 **/

	echo '<hr>';
	echo '<p style="font-weight: 900"> EXERCISE 2 </p>';
	$movies = "/Star Wars/Fight Club/Intouchables/Night Call//";
	echo "<br> this is the initial string: $movies";
	$movies2 =  trim(str_replace('/' , ' ' , $movies));
	echo "<br> this is the new string: $movies2";

	/**
	 EXERCICE 3 :

		Write a PHP script that replaces the word "random" with the word "beautiful" in this sentence:

		$sentence = "This is a random sentence";
	 **/

	echo '<hr>';
	echo '<p style="font-weight: 900"> EXERCISE 3 </p>';
	$sentence = "This is a random sentence";
	echo "<br> this is the initial string: $sentence";
	$newSentence =  str_replace('random' , 'beautiful' , $sentence);
	echo "<br> this is the new string: $newSentence";

	/**
	 EXERCICE 4 :

		Write a PHP script that displays the last word of a sentence using 2 functions:
			explode () and count ()
		
		You can use the previous sentence to test : $sentence = "This is a random sentence";
	 **/
	echo '<hr>';
	echo '<p style="font-weight: 900"> EXERCISE 4 </p>';
	$array = explode(' ', $sentence);
	$len = count($array)-1;
	echo $array[$len];
?>