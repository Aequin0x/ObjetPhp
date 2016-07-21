<?php

class Pokemon {
	
	private $name;
	public function getName(){
		return $this->name;
	}
	public function setName($name) {
		$this->name = $name;
	}

	private $type;
	public function getType(){
		return $this->type;
	}
	public function setType($type) {
		$this->type = $type;
	}
}


$pk = new Pokemon();
$pk->setName('Pikachu');
$pk->setType('Electrique');

echo $pk->getName();
echo $pk->getType();

echo "Votre pokémon est ".$pk->getName().", il est de type".$pk->getType();
?>