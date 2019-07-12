<form method="get">
	Input two numbers
	<input type=number name=num1 />
	<input type=number name=num2 />
	<input type=submit name=sub value=submit />
</form>

<?php 

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 1 </p>';
echo '4 x 2 = ' . multiply() . '<br>';
echo '12 x 6 = ' . multiply(12, 6) . '<br>';
if(isset($_GET['sub'])) {
	if ($_GET['num1'] && $_GET['num2']) {
		echo multiply($_GET['num1'] , $_GET['num2']);
	} else {
		echo "two numbers are required";
	}
}

function multiply($x = 4, $y = 2) {
	return ($x * $y);
}

/*
-- Exercise 1 :
	
	1.1
	Write a PHP script which multiply two numbers
	Example : 2*4 = 8
	

	1.2
	Write a function which :
	    - Take 2 numbers in parameters
	    - Returns the result of the multiplication of the two numbers
	    
	1.3
	Create a form that:
	- Allows to enter 2 numbers
	- Get the result of the multiplication of these 2 numbers
		(use the function created in 1.2)
	- Warning, it is necessary to manage the case where the user does not enter the two numbers.
*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 2 </p>';
if(isset($_GET['sub'])) {
	if ($_GET['num1'] && $_GET['num2']) {
		echo compare($_GET['num1'] , $_GET['num2']);
	} else {
		echo "two numbers are required";
	}
}

function compare($x, $y) {
	if ($x>$y) {
		return "the first number is bigger";
	} else if ($x<$y) {
		return "the second number is bigger";
	} else return "the two numbers are equal";
}
/*
- Exercise 2

Write a function that:
    - Takes into parameter two numbers.
    - Check which is the largest number.

The expected result is this:
    The first number is larger (if the first number is larger than the second number)
    The first number is smaller (if the first number is smaller than the second number)
    The two numbers are identical (if the two numbers are equal)

*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 3 </p>';
$expenses = [12.50 , 14.75, 123.12, 85.00, 3.66];
echo 'the total expenses during the year are' . totaliser($expenses);

function totaliser($array) {
	$sum = 0;
	foreach ($array as $value) {
	$sum += $value;
	}
	return $sum;
}

/*
-- Exercise 3

	3.1
	Write a PHP script that:
	    - Create an array of John's expenses.
	    - Calculates the sum of John's expenses over the year

	3.2
	Write a function that will:
	- Take an expense array as input
	- Calculate the sum of the expenses of the table
	- return this sum

*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 4 </p>';
echo  '<form method="get">Input a word or phrase to check if it is a palindrome: <input type=text name=pal />
<input type=submit name=subPal value=submit /></form>';
if(isset($_GET['subPal'])) {
	if ($_GET['pal']) {
		palindrome($_GET['pal']);
	} else {
		echo "text is required";
	}
}

function palindrome($str){ 
    // Base codition to end the recursive process 
    if ((strlen($str) == 1) || (strlen($str) == 0)){ 
        echo "Palindrome"; 
    } else {         
        // First character is compared with the last one 
        if (substr($str, 0, 1) == substr($str,(strlen($str)-1), 1)) { 
            // Checked letters are discarded and passed for next call 
            return Palindrome(substr($str, 1, strlen($str)-2)); 
        } 
        else{  
            echo " Not a Palindrome"; } 
    } 
} 
  

/*
-- Exercice 4

Write a PHP script that checks if a string is a palindrome.
A palindrome is a chain of letters whose order of letters remains the same whether read from left to right or from right to left.

Example : 
"kayak"
"xanax"
"poop"

*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 5 </p>';
echo  '<form method="get">Input a number to check if it is prime: <input type=number name=nump />
<input type=submit name=subPrime value=submit /></form>';
if(isset($_GET['subPrime'])) {
	if ($_GET['nump']) {
		echo primeCheck($_GET['nump']);
	} else {
		echo "a number is required";
	}
}

function primeCheck($number){ 
    if ($number == 1) 
    return "not a prime number"; 
      
    for ($i = 2; $i <= sqrt($number); $i++){ 
        if ($number % $i == 0) 
            return "not a prime number"; 
    } 
    return "a prime number"; 
} 

/*
-- Exercice 5

Write a function that checks if a number is a prime number.
A prime number is an integer greater than 1 that can only be divided by itself and 1.

*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 6 </p>';

/*

-- Exercice 6
Write a htmlImages($src) function that:
    - takes a string as argument ($src)
    - display an html <img> tag with $src source
Example :
    htmlImages('skate.jpg') 
    	> Displays <img src='skate.jpg'>

*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 7 </p>';

/*
-- Exercice 7

Write a function that:
    - Takes two numbers as parameter.
    - That returns the result of the multiplication of the two numbers
    - All parameters must have a default value.
    - Call your function with the numbers 10 and 2.
    - Call your function with a single number: 4
*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 8 </p>';

/*
-- Exercice 8 :
	Write a PHP function that return the reverse(mirror) of an array.
*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 9</p>';

/*	
-- Exercise 9
Ecrire une fonction countWords($text) qui :
    - prend une chaine de caractère en argument ($text)
    - calcule le nombre de mots dans la chaine de caractère $text
    - retourne le résultat
Indice : il faut utiliser une fonction qui permet de découper une phrase en mots (déjà vu en cours)

Write a function 'countWords($text)' that:
    - takes a string of characters in argument ($text)
    - calculate the number of words in the $text string
    - return the result
Hint: use a function that allows you to split a sentence into words (already seen in class)

*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 10 </p>';

/*
-- Exercice 10 :
Repeat the previous exercise and write a countEachWords($test) function that:
    - takes a string of characters in argument ($text)
    - for each word present in $text, calculate how many times this word appears
    - return the result as an associative array

For example : "this is a random sentence, it is totally random".
Expected result :
    array( "this" -> 1, 
            "is" -> 2,
            "a" -> 1,
            "random" -> 2
            ....... );
*/
 ?>