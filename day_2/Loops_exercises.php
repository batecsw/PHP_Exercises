<?php

/*
	- Exercise 1 :
		
		Based on the character exercise, display all his caracteristics using a loop.

	*/

/*
	- Exercise 2 : 
		Michel went to the supermarket and bought some food.
		He used an array to save his spending.

	    $array = array("Salad"=>"1.03","Tomato"=>"2.3","Oignon"=>"1.85","Red cabbage"=>"0.85")
	    Write a script that will : 
	    1. Sort by value
	    2. Sort by key in descending order
	    3. Use a loop to calculate the total of his spendings.

	*/
$array = array("Salad" => "1.03", "Tomato" => "2.3", "Oignon" => "1.85", "Red cabbage" => "0.85");
// original output
var_dump($array);
ksort($array);
// after sorting
var_dump($array);
$total = 0;
foreach($array as $cost) {
	$total += $cost;
}
echo 'Michel spent '. $total . ' €';

	/*
	- Exercise 3 : 

		Using a loop, fill in a array with every number from 0 to 20.
		The element 0 will therefore contain 0, the element 1 will contain 2 etc.

		Do it by using a for AND a while loop
    */
$numbers = array();
for ($i = 0; $i <= 20; $i++) {
    $numbers[] = $i;
}
var_dump($numbers);
	/*
	-Exercise 4 :
		Use a loop to create a array.
		This array will contain the multiplication table of 2.
		From 1 to 10.
    */
$multTable2 = array();
for ($i = 1; $i <= 10; $i++) {
    $multTable2[] = $i*2;
}
var_dump($multTable2);

	/*
	-Exercise 5 :
		Create a random numerical array.
		Find the smallest value.
		Find the greatest value.
	*/
$randNumber = array();
for ($i = 0; $i <= 19; $i++) {
    $randNumber[] = rand(-100, 100);
}
var_dump($randNumber);
$min = min($randNumber);
$max = max($randNumber);
echo 'calculated using min and max functions'."<br>";
echo("the lowest value is $min")."<br>";
echo("the highest value is $max")."<br>";
// Find the maximum and minimum without using a function

$minPos = 0;
$maxPos = 0;
foreach ($randNumber as $key => $val) {
    if ($val > $randNumber[$maxPos]) {
		$maxPos = $key;
	}
	if ($val < $randNumber[$minPos]) {
		$minPos = $key;
	}
}
echo '<br>'.'calculated using only loops and conditionals'."<br>";
echo 'minimum value is ' . $randNumber[$minPos] . ' in position ' . $minPos."<br>";
echo 'maximum value is ' . $randNumber[$maxPos] . ' in position ' . $maxPos;