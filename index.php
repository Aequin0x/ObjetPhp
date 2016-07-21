<?php 

// Je declare une class ( ou l'objet)s
class Voiture {
	// Je declare un attr de couelur
	private $couleur = 'bleu';
	// Je déclare le constructeur qui va s'éxecuter lors de l'instanciation de l'objet
	public function __construct($param1){
	// J'associe le 1er param du constructeur à l'attribut couleur
		$this->couleur = $param1;
	}
	// Je déclare une fonction statique utilisable sans instance
	public static function klaxonne(){
		echo "POUIN PUOIN";
	}
	// Je declate une fonction non statique
	public function klaxon(){
		echo "La voiture ".$this->couleur." klaxonne";
	}
}
// J'instancie la classe en objet
$renault = new Voiture('vert');
$bmw = new Voiture('rouge');


var_dump($renault);
var_dump($bmw);

// Manière en statique
var_dump(Voiture::klaxonne());
// Manière en objet instacié
var_dump($bmw->klaxon());


?>