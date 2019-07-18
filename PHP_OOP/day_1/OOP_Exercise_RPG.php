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

require_once 'character.php';
require_once 'equipment.php';

/*
	Set up different type of character. You must be able to create Elves, Orcs or Humans.
	Example : 
	$elf = new Character('Elf');
	$orc = new Character('Orc');
*/

$aragorn = new Character('Aragorn');
    $race = $aragorn->setRace('human');

$elrond = new Character('Elrond');
    $race = $elrond->setRace('elf');
    $defence = $elrond->setDefence(2);
    $warcry = $elrond->setWarcry("By Elrond!");

$uggly = new Character('Uggly');
{
    $race = $uggly->setRace('orc');
    $health = $uggly->setHealth(90);
    $attack = $uggly->setAttack(12);
    $defence = $uggly->setDefence(2);
    $warcry = $uggly->setWarcry("wwouogrouroulou mlll !!");
}

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

$sword = new Equipment('Sword', 'An ordinary sword');
    $type = $sword->setType("sword");
    $attackBonus = $sword->setAttackBonus(3);

$sharpSword = new Equipment('Sharp Sword', 'An extra sharp sword');
    $type = $sharpSword->setType("sword");
    $attackBonus = $sharpSword->setAttackBonus(5);

$armour = new Equipment('Armour', 'Ordinary armour');
    $type = $armour->setType("armour");
    $defenceBonus = $armour->setDefenceBonus(5);

$elrondArmour = new Equipment('Armour of Elrond', 'Armour blurs the character making him almost impossible to hit');
    $type = $elrondArmour->setType("armour");
    $defenceBonus = $elrondArmour->setDefenceBonus(10);

$deathSword = new Equipment('Death Sword', 'Mess with this weapon at your peril!');
    $type = $deathSword->setType("sword");
    $attackBonus = $deathSword->setAttackBonus(10);

$graceNecklace = new Equipment('Grace Necklace', 'May the essence of life be strong in you!');
    $type = $graceNecklace->setType("accessory");
    $healthBonus = $graceNecklace->setHealthBonus(5);

echo "1. ";
$aragorn->addEquipment($armour);
echo "2. ";
$aragorn->addEquipment($sword);
echo "3. ";
$aragorn->addEquipment($elrondArmour);
echo "4. ";
$aragorn->addEquipment($graceNecklace);
echo "5. ";
$aragorn->removeEquipment($armour);
echo "6. ";
$aragorn->addEquipment($deathSword);
echo "7. ";
$aragorn->addEquipment($elrondArmour);

echo "The Inventory of " . $aragorn->getName() . " is:";
$aragorn->getEquipment();

echo "The statistics of " . $aragorn->getName() . " is:<br>";
$aragorn->getStats();

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

    -- Step 6 :
    
    Create a method call 'getStats()'
    This method will display all the stats of my Character.
    It should take into account the bonus of equipments.

*/