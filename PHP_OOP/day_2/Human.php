<?php
// call parent class
require_once 'Creature.php';
// call "work" interface - for the common "work" function shared by humans and robots
require_once 'IWork.php';

class Human extends Creature implements IWork
{
  public function work()
  {
    return 'doing some work!';
  }

  public function noise()
  {
    return 'Hello, my name is ' . $this->_name
      . ', I am a ' . $this->_sex;
  }
// the __tostring function defines the output text when the object is called
  public function __toString()
    {
      return $this->_name . " is a " . $this->_sex . " human with " . $this->_color . " hair";
    }


}
