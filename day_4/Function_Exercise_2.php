<?php 

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 1 </p>';
echo  '<form method="get">Please enter a number between 1 and 49: <input type=number name=numint />
<input type=submit name=subRec1 value=submit /></form>';
if(isset($_GET['subRec1'])) {
    $val = $_GET['numint'];
	if ($val > 0 && $val < 50) {
        echo "your number is: $val<br><br>";
		echo displayRange($val);
	} else {
		echo "a number between 1 and 49 is required";
	}
}
function displayRange($val) {
        if($val <= 50) {
        echo $val.'<br>';
        displayRange($val+1);
        }
}

/*
-- Exercise 1 :

Write a recursive function that will:
- Take an integer (for xple $x) and display it.
- If $x is less than 50, display all numbers from $x to 50
*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 2 </p>';
echo  '<form method="get">Input two numbers to get the multiplication result: <input type=number name=num1 />
<input type=number name=num2 /><input type=submit name=subMult value=submit /></form>';
if(isset($_GET['subMult'])) {
    if ($_GET['num1'] && $_GET['num2']) {
        echo 'the answer is ' . multiplyNumber($_GET['num1'] , $_GET['num2']);
    } else {
        echo "two numbers are required";
    }
}

function multiplyNumber($num1, $num2) {
    if($num2 > 0) {
        return $num1 + multiplyNumber($num1, $num2-1);
    }
}
/*
-- Exercise 2 :

Write a recursive function that will calculate the multiplication of two numbers using only the addition.

*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 3 </p>';
echo  '<form method="get">Input a number to get the factorial: <input type=number name=numf />
<input type=submit name=subFact value=submit /></form>';
if(isset($_GET['subFact'])) {
    if ($_GET['numf']) {
        $dummy = ($_GET['numf']);
        echo 'the answer is ' . factorialNumber($_GET['numf']);
    } else {
        echo "a number is required";
    }
}

function factorialNumber($numf) {
    if($numf > 1) {
        return $numf * factorialNumber($numf-1);
    } else {
        return 1;
    }
}

/*
-- Exercise 3 : 

Write a recursive function that will calculate the factorial of a number.
The factorial of 5 is 5! and equals to    5! = 5 * 4 * 3 * 2 * 1.
The factorial of 5 is therefore equal to 120 (5! = 120).
Here is the equation of a factorial: n! = n * (n - 1) * ... * 3 * 2 * 1
*/
?>