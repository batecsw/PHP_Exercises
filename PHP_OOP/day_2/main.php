<?php
// load all the child classes
require_once 'Dog.php';
require_once 'Cat.php';
require_once 'Human.php';
require_once 'Robot.php';

// initialise data array of objects
$creatures = array();

$creatures[] = new Dog('Snoopy', 'Male', 'White/Black');
$creatures[] = new Cat('Garfield', 'Male', 'Orange');
$creatures[] = new Human('Liliana', 'Female', 'Pink');
$creatures[] = new Dog('Rover', 'Male', 'Brown');
$creatures[] = new Cat('Tiddles', 'Female', 'Black');
$creatures[] = new Human('Homer Simpson', 'Male', 'Bald');
$creatures[] = new Dog('Rhubarb', 'Male', 'Blue');
$creatures[] = new Cat('Custard', 'Female', 'Yellow');
$creatures[] = new Human('Marge Simpson', 'Female', 'Blue');
$creatures[] = new Dog('Mutley', 'Male', 'Brown');
$creatures[] = new Cat('Top Cat', 'Male', 'Yellow');
$creatures[] = new Human('Dick Dastardly', 'Male', 'Black');

var_dump ($creatures);

// loop array an output the required text. n.b. all the classes have __tostring functions
// defined which specifies the output text when the object is called.
for ($i=0; $i<10; $i++) {
    $key = rand(0,11);
    echo $creatures[$key] . ' and is saying "' . $creatures[$key]->noise() . '."' . "<br>";
}

$workers = array();

$workers[] = new Robot('K9', 'Silver');
$workers[] = new Human('Liliana', 'Female', 'Pink');
$workers[] = new Robot('R2D2', 'Silver');
$workers[] = new Human('Homer Simpson', 'Male', 'Bald');
$workers[] = new Robot('C3P0', 'Gold');
$workers[] = new Human('Marge Simpson', 'Female', 'Blue');
$workers[] = new Robot('Marvin', 'Rusty');
$workers[] = new Human('Dick Dastardly', 'Male', 'Black');

var_dump ($workers);

for ($i=0; $i<10; $i++) {
    $key = rand(0,7);
    echo $workers[$key] . ' and is ' . $workers[$key]->work() . "<br>";
}