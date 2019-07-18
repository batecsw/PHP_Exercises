<?php

abstract class Creature
{
  protected $_name;
  protected $_color;
  protected $_sex;

  public function __construct($name, $sex, $color)
  {
    $this->_name = $name;
    $this->_color = $color;
    $this->_sex = $sex;
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

  abstract public function noise();

}
