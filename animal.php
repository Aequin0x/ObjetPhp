<?php 

// Version moins propre, on preferera definir des function comme dans le fichier pokémon.php
class Animal {

	public $name;
	public $espece;
	private $_nbDePattes;
	public function __construct(){
		echo "On construit l'animal";
	}

	public function getPattes(){
		return $this->_nbDePattes;
	}
	public function setPattes($pattes) {
		$this->_nbDePattes = $pattes;
	}

}
$a = new Animal();
$a->name = "Serge";
$a->espece = "Chat";
$a->setPattes(4);
echo "<br/>";
echo "Mon animal de compagnie est un ".$a->espece.", il s'appelle ".$a->name." et il a ".$a->getPattes()." pattes.";

var_dump($a);


?>