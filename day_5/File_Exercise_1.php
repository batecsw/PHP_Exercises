<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>PHP Day 5 Ex 1</title>
	<style>
	td {
  	border: 1px solid black;
	width: 150px;
	text-align: center;
	}
	</style>
</head>
<body>
	
</body>
</html>
<?php

//		1. Create a PHP script that will display the contents of a message.txt file, located in the same folder as this script.
$file_content = file_get_contents("message.txt");
echo $file_content . '<br><br>';

//		2. View the contents of the transform_to_table.txt file in an HTML table.
$file_handle = fopen("transform_to_table.txt" , "r");
// loop using while until end of file (eof) is reached 
while(!feof($file_handle)) {
    $line = fgets($file_handle);
	$pos = strpos($line, ":");
	$left = substr($line, 0, $pos);
	$right = substr($line, $pos+2);
	echo "<table><tr><td>$left</td><td>$right</td></tr></table>";
}