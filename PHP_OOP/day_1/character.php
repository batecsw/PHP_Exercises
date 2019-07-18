<?php

class Character
{
    private $name;
    private $race;
    private $health;
    private $attack;
    private $defence;
    private $warcry;
    private $equipment=array();

    public function __construct($name)
    {
        $this->name = $name;
        $this->race = "human";
        $this->health = 100;
        $this->attack = 10;
        $this->defence = 5;
        $this->warcry = "Banzai!";
    }

    // setters
    public function setRace($newRace)
    {
        $this->race = $newRace;
    }

    public function setHealth($newHealth)
    {
        $this->health = $newHealth;
    }

    public function setAttack($newAttack)
    {
        $this->attack = $newAttack;
    }

    public function setDefence($newDefence)
    {
        $this->defence = $newDefence;
    }

    public function setWarcry($newWarcry)
    {
        $this->warcry = $newWarcry;
    }

    // getters
    public function getName()
    {
        return $this->name;
    }

    public function getRace()
    {
        return $this->race;
    }

    public function getHealth()
    {
        return $this->health;
    }

    public function getAttack()
    {
        return $this->attack;
    }

    public function getDefence()
    {
        return $this->defence;
    }

    public function getWarcry()
    {
        return $this->warcry;
    }
    
    public function addEquipment($newEquipment)
    {
        $totalNum = 0;
        $armourNum = 0;
        $swordNum = 0;
        foreach ($this->equipment as $key => $equip) {
            $totalNum ++;
            if ($equip->getType() === "sword") {
                $swordNum ++;
            } elseif ($equip->getType() === "armour") {
                $armourNum ++;
            }
        }
        echo "Tot: " . $totalNum . " Sword: " . $swordNum . " Armour: " . $armourNum . "<br>";
        if ($totalNum >= 4 ) {
            echo "Your character already has the maximum number of equipment items. Remove an item before trying to add.<br>";
            return;
        } elseif ($swordNum >= 2 && $newEquipment->getType() === "sword") {
            echo "Your character already has the maximum number of swords. Remove a sword before trying to add.<br>";
            return;
        } elseif ($armourNum >= 1 && $newEquipment->getType() === "armour") {
            echo "Your character already has armour. Remove the existing armour before trying to add.<br>";
            return;
        } else {
        echo $newEquipment->getName() . " has been added to your character's equipment<br>";
        $this->equipment[] = $newEquipment;
        return;
        }
    }
    public function removeEquipment($delEquipment)
    {
        foreach ($this->equipment as $key=>$equip) {
            if ($equip == $delEquipment) {
            unset($this->equipment[$key]); 
            echo $equip->getName() . " has been removed from your character's equipment<br>";
            return;
            }
        }
        echo $delEquipment->getName() . " was not found on your character<br>";
        return;
    }
    public function getEquipment()
    {
        foreach ($this->equipment as $key=>$equip) {
            var_dump($equip);
        }
        return;
    }
    public function getStats()
    {
        $totHealth = $this->getHealth();
        $totAttack = $this->getAttack();
        $totDefence = $this->getDefence();
        foreach ($this->equipment as $key=>$equip) {
            $totHealth += $equip->getHealthBonus();
            $totAttack += $equip->getAttackBonus();
            $totDefence += $equip->getDefenceBonus();
        }
        echo "Base Health: " . $this->getHealth() . " Total Health: " . $totHealth . "<br>";
        echo "Base Attack: " . $this->getAttack() . " Total Attack: " . $totAttack . "<br>";
        echo "Base Defence: " . $this->getDefence() . " Total Defence: " . $totDefence . "<br>";
        return;
    }
}


?>