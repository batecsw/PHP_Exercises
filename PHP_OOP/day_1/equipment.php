<?php

class Equipment
{
    private $name;
    private $description;
    private $type;
    private $healthBonus;
    private $attackBonus;
    private $defenceBonus;

    public function __construct($name, $description) {
        $this->name = $name;
        $this->type = "";
        $this->description = $description;
        $this->healthBonus = 0;
        $this->attackBonus = 0;
        $this->defenceBonus = 0;
    }
    
// setters  
    public function setType($newType)
    {
        $this->type = $newType;
    }
    
    public function setHealthBonus($newHealthBonus)
    {
        $this->healthBonus = $newHealthBonus;
    }
    
    public function setAttackBonus($newAttackBonus)
    {
        $this->attackBonus = $newAttackBonus;
    }

    public function setDefenceBonus($newDefenceBonus)
    {
        $this->defenceBonus = $newDefenceBonus;
    }
    
// getters
    public function getName()
    {
        return $this->name;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getHealthBonus()
    {
        return $this->healthBonus;
    }

    public function getAttackBonus()
    {
        return $this->attackBonus;
    }

    public function getDefenceBonus()
    {
        return $this->defenceBonus;
    }
}

?>