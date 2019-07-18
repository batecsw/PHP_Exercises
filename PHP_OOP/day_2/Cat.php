<?php
// call parent class
require_once 'Animal.php';

class Cat extends Animal
{
  public function noise()
  {
    return 'Meoooooooowwwww (give some food human slave)';
  }
// the __tostring function defines the output text when the object is called
    public function __toString()
    {
      return $this->_name . " is a " . $this->_sex . " " . $this->_color . " cat with " . $this->_legs . " legs";
    }
}
