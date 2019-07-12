<?php

/* 

	Imagine a Role-Playing Game.
	There are several types of characters: Humans, Orcs and Elves.

	Each character has:
		> A name
		> Health points (default 100)
		> Points of attack (default 10)
		> Defense points (default 5)
		> A war-cry (eg "Attaaaaaack!")

	Each type of character has particular characteristics:
		> Humans have a +1 bonus on all types of weapons (see weapon below).
		> The Orcs have +2 attack and defense but -10 life.
		They start with 90 HP, 12 Atk and 7 dfs.
		> The Elves have -3 in defense. So they start with 2 defenses.
		Elves can flee any fight by sacrificing 20 life.
		When an Elf wins a fight, he wins 2 defense and 2 life.


	-- Step 1 :

	Create a Character class.
	This class will implement all attributes and methods common to the characters.
*/

class Character
{
    private $name;
    private $health;
    private $attack;
    private $defence;
    private $warcry;
    private $equipment=array();

    public function __construct($name)
    {
        $this->name = $name;
        $this->health = 100;
        $this->attack = 10;
        $this->defence = 5;
        $this->warcry = "Banzai!";
    }
    public function setHealth($newHealth)
    {
        $this->health = $newHealth;
    }

    public function getHealth()
    {
        return $this->health;
    }
    public function setAttack($newAttack)
    {
        $this->attack = $newAttack;
    }

    public function getAttack()
    {
        return $this->attack;
    }
    public function setDefence($newDefence)
    {
        $this->defence = $newDefence;
    }

    public function getDefence()
    {
        return $this->defence;
    }
    public function setWarcry($newWarcry)
    {
        $this->warcry = $newWarcry;
    }

    public function getWarcry()
    {
        return $this->warcry;
    }
    public function addEquipment()
    {
        return "add equipment";
    }
    public function removeEquipment()
    {
        return "remove equipment";
    }
    public function getEquipment()
    {
        return "get equipment";
    }
}

/*
	Set up different type of character. You must be able to create Elves, Orcs or Humans.
	Example : 
	$elf = new Character('Elf');
	$orc = new Character('Orc');
*/

$human = new Character('Human');
var_dump($human);

$elf = new Character('Elf');
    $defence = $elf->setDefence(2);
    $warcry = $elf->setWarcry("By Elrond!");

var_dump($elf);

$orc = new Character('Orc');
{
    $defence = $orc->setHealth(90);
    $defence = $orc->setAttack(12);
    $defence = $orc->setDefence(2);
    $warcry = $orc->setWarcry("wwouogrouroulou mlll !!");
}
var_dump($orc);

/*
	-- Step 2 :

	Orcs are not understood by anyone.
	Their war cry is now: "wwouogrouroulou mlll !!"

	-- Step 3 :

	There are several types of equipment: armor, sword, others (you can add as many as you want).

	Each equipment is designated by a name and a description of the item.
	Equipment also gives a special bonus.

	For example: an armor can give +5 in defense, a +3 sword in attack.
	There is even some object that gives +10 in attack but decreases defense.

	Create an Equipment class.
	This class will implement all the attributes and methods common to the devices.

	Set up the different types of equipment. You must be able to create multiple equipment.
	(I leave you free to your imagination for the creation of weapon and specific power ....)
	For example :
	$sword = new equipment("Death Sword", 10, 0, 0); // 10 atk bonus, 0 def bonus, 0 life bonus;
	$jewel = new equipment("Grace Necklace", 0, 0, 5); // 0 atk bonus, 0 def bonus, 5 life bonus;
*/

class Equipment
{
    private $name;
    private $description;
    private $healthBonus;
    private $attackBonus;
    private $defenceBonus;

    public function __construct($name, $description) {
        $this->name = $name;
        $this->description = $description;
        $this->healthBonus = 0;
        $this->attackBonus = 0;
        $this->defenceBonus = 0;
    }

    public function setHealthBonus($newHealthBonus)
    {
        $this->healthBonus = $newHealthBonus;
    }

    public function getHealthBonus()
    {
        return $this->healthBonus;
    }
    public function setAttackBonus($newAttackBonus)
    {
        $this->attackBonus = $newAttackBonus;
    }

    public function getAttackBonus()
    {
        return $this->attackBonus;
    }
    public function setDefenceBonus($newDefenceBonus)
    {
        $this->defenceBonus = $newDefenceBonus;
    }

    public function getDefenceBonus()
    {
        return $this->defenceBonus;
    }
}

$sword = new Equipment('Sword', 'An ordinary sword');
    $attackBonus = $sword->setAttackBonus(3);
var_dump($sword);

$armour = new Equipment('Armour', 'Ordinary armour');
    $attackBonus = $armour->setDefenceBonus(5);
var_dump($armour);

$deathSword = new Equipment('Death Sword', 'Mess with this weapon at your peril!');
    $attackBonus = $deathSword->setAttackBonus(10);
var_dump($deathSword);

$graceNecklace = new Equipment('Grace Necklace', 'May the essence of life be strong in you!');
    $healthBonus = $graceNecklace->setHealthBonus(5);
var_dump($graceNecklace);

/*

	-- Step 4 :
	
	A character can now hold an equipment.
	You have to change the Character class and add a new property : $equipment;
	You can add/remove/display the equipment for a character (create a method for each action)

	Implement the fact that a character has (or not) an inventory.
	
	-- Step 5 :

	A character can now hold many equipments.
	It's actually an 'inventory' of equipments.
	Change the type of $equipment => It's now an array.

	A character may have several equipments but:
	- It can only be equipped with 4 objects in total.
	- It can only be equipped with 2 swords at a time.
	- He can only wear one armor.

	Change your function to 'add'/'remove'/'display' an equipement.
    Now it will add/remove/display to the inventory.
*/

?>








