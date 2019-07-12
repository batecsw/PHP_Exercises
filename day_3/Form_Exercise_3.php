<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multiplier</title>
</head>

<body>
    <form action="" method="POST">
        Enter the number of the multiplication table you want:
        <input type="number" name="num" placeholder="Any integer" />
        <input type="submit" name="Send" value="Send" />
        <form>

</body>

</html>
<?php

/* -- Exercise 1 :
	
	1.1 : 
	Create a basic connection form with email and password input.

	1.2 :
	Check if a string contains the '@' symbol thanks to the 'strpos' function.
	If yes, display 'valid email';
	If no, display 'invalid email';

	1.3 :
	When the user validates the form: display a message in red if invalid, show in green if valid.

*/

/* -- Exercise 2 : 
	2.1 :
	Write a PHP script that gives the multiplication table of 2
    Multiplication table from 1 to 10 (Already done in previous exercise)
    

	2.2 :
	Modify this script to give the multiplication table of any number ($x for example) in a table

	2.3 :
	Create a form with one input.
	When you validate this form, it should display the multiplication table of the number you entered.
	You have to check if the value is correct (no float and no string, ONLY integer).

	2.4 :
	Display the multiplication table in a nice HTML format table style.
*/
if (isset($_POST['Send'])) {
    $val = $_POST['num'];
    $multTable = array();
    "<table>
  <tr>
    <th>Number</th>
    <th>Product x $val </th>
  </tr>";
    for ($i = 1; $i <= 10; $i++) {
        $multTable[] = $i * $val;
        "<tr>
          <td>$i</td>
          <td>$val*$i</td> 
        </tr>";
    }
"</table>";
var_dump($multTable);
}

?>