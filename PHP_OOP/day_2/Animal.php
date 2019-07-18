<?php
// call parent class
require_once 'Creature.php';

abstract class Animal extends Creature
{
  // only legs are deined at the animal level, the other attributes are defined in the parent
  // however all attributes have to be called in the constructor and derived attributes called from he parent
  protected $_legs;

  public function __construct(
    $name,
    $sex,
    $color,
    $legs = 4
  ) {
    parent::__construct($name, $sex, $color);
    $this->_legs = $legs;
  }

}
