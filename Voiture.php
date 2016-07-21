<?php 

// Je declare une class ( ou l'objet)
class Voiture {
	// Je declare un attr de couleur
	private $couleur = 'bleu';
	// Je declare le message 
	public static $message = "La voiture klaxonne";

	private $marque;

	// Je déclare le constructeur qui va s'éxecuter lors de l'instanciation de l'objet
	public function __construct($param1){
	// J'associe le 1er param du constructeur à l'attribut couleur
		$this->couleur = $param1;
	}
	// Je déclare une fonction statique utilisable sans instance
	public static function klaxonne(){
		echo self::$message;
	}
	// Je declate une fonction non statique
	public function klaxon(){
		echo "La voiture ".$this->couleur." klaxonne";
	}
	public function setMarque($param){
    $this->marque = $param;
  }
}

$renault = new Voiture('vert');
$renault->setMarque('Renault');
$bmw = new Voiture('rouge');


var_dump($renault);
var_dump($bmw);

// Manière en statique
var_dump(Voiture::klaxonne());
// Manière en objet instacié
var_dump($bmw->klaxon());

/*******************************************************************************/


?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	
</body>
</html>