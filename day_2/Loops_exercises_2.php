<?php

/*
	- Exercise 1 :
		
		Write a PHP script which displays this pattern : 
			* 
			* * 
			* * * 
			* * * * 
			* * * * * 

		You have to use a loop inside another loop to do this !

	*/
for ($i = 0; $i <= 4; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
echo "<br>";
echo "<br>";
/*
	- Exercise 2 : 
		Write a PHP script which displays this pattern : 
		* 
		* * 
		* * * 
		* * * * 
		* * * * * 
		* * * * * 
		* * * * 
		* * * 
		* * 
		* 

	*/
for ($i = 0; $i <= 4; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
for ($i = 0; $i <= 4; $i++) {
    for ($j = $i; $j <= 4; $j++) {
        echo "*";
    }
    echo "<br>";
}
	/*
	- Exercise 3 : 

		We already have two arrays :
	*/
	    $artists = array(
	        0 => array("Eminem", "IAM"), 
	        1 => array("Madonna", "Katy Perry"), 
	        2 => array("Pink Floyd", "AC/DC")
	    );
    
    
    
	    $style = array(
	        0 => "Rap",
	        1 => "Pop", 
	        2 => "Rock"
	    );   
	/*
 
 		Write a PHP script which merge the two arrays to have a single array looking like this :

		    $array3 =  array (      
		        "Rap" => Array (          
		            [0] => "Eminem",              
		            [1] => "IAM"    
		        ),  
		        "Pop" => Array (          
		            [0] => "Madonna",              
		            [1] => "Katy Perry"    
		        ),
		        "Rock" => Array (          
		            [0] => "Pink Floyd",              
		            [1] => "AC/DC"    
		        )            
		    )
	*/
$array3 = [];
foreach ($style as $key => $val) {
	$array3[$val] = $artists[$key];
	
}
var_dump($array3);
	/*
	-Exercise 4 :
	
		We have an array of bank transactions, which indicates the credit and debit amounts of each person.
		For each person, calculate the real amount of their account and it as a key/value in the array.
	*/

		$transactions = array(
		    "Marie" => array(
		        "debit"=>6,
		        "credit"=>9
		    ),
		    "Julien" => array(
		        "debit"=>21,
		        "credit"=>19
		    ),
		    "Sophie" => array(
		        "debit"=>15,
		        "credit"=>14
		    ),
		    "John" => array(
		        "debit"=>10,
		        "credit"=>14
		    )
		);

	foreach ($transactions as $cust => $custAttr) {
			$transactions[$cust]["amount"] = $custAttr["credit"] - $custAttr["debit"];
		}
	var_dump($transactions);
	/*
		// Expected results : 
		$transactions = array(
		    "Marie" => array(
		        "debit"=>6,
		        "credit"=>9,
		        "amount"=>3
		    ),
		    "Julien" => array(
		        "debit"=>21,
		        "credit"=>19,
		        "amount"=>-2
		    ),
		    "Sophie" => array(
		        "debit"=>15,
		        "credit"=>14,
		        "amount"=>-1
		    ),
		    "John" => array(
		        "debit"=>10,
		        "credit"=>14,
		        "amount"=>4
		    )
		);
	*/

	/*
	- Final exercise - ONLY FOR THE BEASTS

		We have an array of integers, unsorted, with all numbers from 1 to 50 BUT one element is missing (the array is therefore 49).
		
		The goal is to find the missing item (the missing number).
		However, you have 3 constraints:
		- You have the right to LOOP the array only once!
		- You have the right to use only one variable!
		- You can not use functions (sorting etc ...)

		An example with an array with 9 elements :

			$array = array(5, 1, 3, 2, 9, 6 ,8, 4, 10);
	        // Le nombre manquant est 7

	        $var = ...

	        for (int i = 0; i < count($array); ++i)
	        {
	            ...
	        }

	        echo "Missing number is: " . $var;

	*/
    $array = array(5, 1, 3, 2, 9, 6 ,8, 4, 10);
	$length = sizeof($array);
	$shadowArray = array(-1);
	for ($i = 1; $i <= $length+1; $i++) {
		$shadowArray[] = 0;
	}
    for ($i = 0; $i < $length; $i++) {
        $val = $array[$i];
        $shadowArray[$val] -=1;
	}
	var_dump($array);
	var_dump($shadowArray);
	// echo array_keys($shadowArray, max($shadowArray));
	$missing = array_search(max($shadowArray), $shadowArray);
	echo 'The missing number is: ' . $missing;

// method without creating another array
// utilises the sum of a sequence of integers
$missingNumber = (count($array)+1)*(count($array)+2)/2;
foreach ($array as $key => $value) {
	$missingNumber -= $value;
}
echo "<br>".'The missing number is: ' . $missingNumber;