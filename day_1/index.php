<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Day 1 exercises folder</title>
</head>

<body>
<?php
echo '<h1>This is my parent exercises folder<h1><br>';

/*
- Exercise 1 :

-- Create your first fruit array containing: "Apple, Strawberry, Pineapple, Lemon".
-- Display the value of the 2nd position.
*/
$fruits = ["apple", "strawberry", "pineapple", "lemon"];
echo $fruits[1] . "<br>";

/*
- Exercise 2
-- Create an associative array that contains the number in stock for each item: 20 T-Shirts, 10 Caps and 5 Shoes.
-- Display the stock of caps.
*/

$stock = array(
    "T-shirts" => 20,
    "caps" => 10,
    "shoes" => 5
);
echo $stock["caps"] . "<br>";

/*
- Exercise 3

The clothing store has just received a new stock of shoes and caps.
-- Add 5 caps.
-- Add 20 shoes.
-- Display the shoe stock.
*/
$stock["caps"] += 5;
$stock["shoes"] += 20;
echo $stock["shoes"] . "<br>";

/*
- Exercise 4
You have a list of contacts.
Each contact has a name, an email and a phone number.
Here is the list of these contacts:
> Name: Ricardo, Tel: 0677777777, Email: ricardo@gmail.com
> Name: Michael, Tel: 0606060606, Email: mj@gmail.com
> Name: Emmanuel, Tel: 0610101010, Email: manu@gmail.com

-- The goal of the exercise is to create an array that will contain all the information for ALL my contacts. I need to be able to access a contact's information easily and quickly.
*/

$contacts = array(
    "Ricardo" => array("tel" => "06777 77777", "email" => "ricardo@gmail.com"),
    "Michael" => array("tel" => "06060 60606", "email" => "mj@gmail.com"),
    "Emmanuel" => array("tel" => "06161 61616", "email" => "manu@gmail.com")
);
var_dump($contacts);

/*
- Exercise 5
You need to create a web page with basics HTML tags.
In this page, you'll display all the characteristics of an imaginary character,
from a role-play game.

The character information will be saved in variables.
There is four (4) informations : 
    -- An avatar image
    -- The last name
    -- The first name
    -- An array of characteristics (like attak point, defense point... put everything you want)
    Use an associative array.
    */
    
    $spiderman = array(
        "image" => "https://mir-s3-cdn-cf.behance.net/project_modules/disp/6ba40822433737.5632180017216.png",
        "heroName" => "Spiderman",
        "realName" => "Peter Parker",
        "attr" => array("strength" => 14, "dexterity" => 18, "endurance" => 12, "intellegence" => 17)
        )
        
        
        ?>
        <br>
        <br>
        <h2>Name: <?php echo $spiderman["heroName"] ?><h2>
        <h3>Real Name: <?php echo $spiderman["realName"] ?><h3>
        <br>
        <img src="<?php echo $spiderman["image"] ?>" />
        <p>Strength: <?php echo $spiderman["attr"]["strength"] ?><p>
        <p>Dexterity: <?php echo $spiderman["attr"]["dexterity"] ?><p>
        <p>Endurance: <?php echo $spiderman["attr"]["endurance"] ?><p>
        <p>Intelligence: <?php echo $spiderman["attr"]["intellegence"] ?><p>
        </body>
        
        </html>