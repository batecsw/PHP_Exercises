<?php
// call parent class
require_once 'Animal.php';

class Dog extends Animal
{
  public function noise()
  {
    return 'Woof woof';
  }
// the __tostring function defines the output text when the object is called
  public function __toString()
    {
      return $this->_name . " is a " . $this->_sex . " " . $this->_color . " dog with " . $this->_legs . " legs";
    }
}
