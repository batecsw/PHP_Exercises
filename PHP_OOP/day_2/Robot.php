<?php
// call "work" interface - for the common "work" function shared by humans and robots
require_once 'IWork.php';

class Robot implements IWork
{
  //an identifier and a color.
  private $_ID;
  private $_color;

  public function __construct($ID, $color)
  {
    $this->_ID = $ID;
    $this->_color = $color;
  }
// the __tostring function defines the output text when the object is called
  public function __toString()
  {
    return $this->_ID . " is a robot who is " . $this->_color . " coloured";
  }

  public function getName()
  {
    return $this->_name;
  }

  public function getColor()
  {
    return $this->_color;
  }

  public function getSex()
  {
    return $this->_sex;
  }

  public function work()
  {
    return ' doing some robot stuff!';
  }
}
