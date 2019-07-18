<?php

/*
- Part 1 : 
An animal is represented by a number of legs, a color, a sex and a name.
A dog is able to bark.
A cat is able to meow.

	-> Create the matching classes

- Part 2 :

A human being is a magical creature that does not belong to the animal kingdom but is
represented by a name, a hair color and a sex.

A robot is a mechanical creature that is defined by an identifier and a color.

	-> Create the matching classes

- Part 3 :

Human and robot can work, create a 'work()' method (just display some stuff).

- Part 4 : 

Human can talk.

	-> Change your code to match
*/

class Animal {
	protected $_legs;
	protected $_colour;
	protected $_sex;
    protected $_name;
    
     // Construct
 public function __construct($legs=4, $colour, $sex, $name) {
    $this->_legs = $legs;
    $this->_colour = $colour;
    $this->_sex = $sex;
    $this->_name = $name;
    }
}

class Cat extends Animal
{
  public function miaow() {
	  echo "Miaow!";
  }
}

class Dog extends Animal
{
    public function bark() {
	  echo "Woof!";
  }
}

$tiddles = new Cat(4, "black", "female", "Tiddles");
var_dump($tiddles);

$rover = new Dog(4, "brown", "male", "Rover");
var_dump($rover);

class Human {
	protected $_hairColour;
	protected $_sex;
    protected $_name;
    
     // Construct
    public function __construct($hairColour, $sex, $name) {
        $this->_hairColour = $hairColour;
        $this->_sex = $sex;
        $this->_name = $name;
    }

    public function work() {
        echo $this->_name . "is doing some work!";
    }
    public function talk() {
        echo "Yakkety yak!";
    }
}

class Robot {
	protected $_ID;
	protected $_colour;
    
     // Construct
    public function __construct($ID, $colour) {
        $this->_ID = $ID;
        $this->_colour = $colour;
    }

    public function work() {
        echo $this->_ID . "is doing some work!";
    }
}

$joe = new Human("blond", "male", "Joe");
var_dump($joe);

$marvin = new Robot("R2D2", "silver");
var_dump($marvin);