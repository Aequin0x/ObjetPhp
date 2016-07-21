<?php

class Pokemon {
	
	private $name;
	public function getName(){
		return $this->name;
	}
	public function setName($name) {
		$this->name = $name;
	}
}

$pikachu = new Pokemon();
$pikachu->setName('Pikachu');
echo $pikachu->getName();

?>