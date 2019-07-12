<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Day 2 exercises folder</title>
</head>
<body>
<?php
    echo '<h1>Day 2 Exercises<h1><br>';

/*
- If Else Exercice : 

-- Part 1 :
	Based on the 'character' exercise, make sure that, if its characteristic "Attak" or "Defense" are greater than 9, an additional message is displayed:

	<div class="alert">
    	<strong>Congratulations !</strong> Your character is ready to fight.</strong>
	</div>

-- Part 2 : 

		Add a conddition, if it is below 5, display message :

        <div class="alert">
            <strong>Wait !</strong> Your charachter is too weeeakk!
        </div>
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

    <?php

    if ($spiderman["attr"]["strength"] > 9 && $spiderman["attr"]["dexterity"] >9)
    echo "<div class='alert'><strong>Congratulations !</strong> Your character is ready to fight.</strong></div>";
    if ($spiderman["attr"]["strength"] < 5 || $spiderman["attr"]["dexterity"] < 5) 
    echo "<div class='alert'><strong>Wait !</strong> Your charachter is too weeeakk!</div>"
    ?>

    <h4>Hero Attrbiutes<h4>
        <ul><?php
            foreach($spiderman["attr"] as $attrName => $attrValue) 
            echo "<li>$attrNamel: $attrValue; </li>"
            ?>
        </ul>
        
</body>
</html>