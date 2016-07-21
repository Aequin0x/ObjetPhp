<?php 

class Vehicule {
	protected $prix;

	public function getPrix($devise = false){
		if($devise){
			$this->prix = $this->prix.' €';
		}
		return $this->prix;
	}
	// Prix avec tva
	public function setPrix($prix){
		$this->prix = $prix * 1.20;
	}

	// Applique une promotion en %
	public function promo($reduc){
		$this->prix *= (100 - $reduc) / 100;
	}

	// Vitesse max 
	public function getMaxSpeed(){
		return 50;

	}
}


class Voiture extends Vehicule {
 	// Ca serait trop long de tout réécrire etc donc on va creer une classe vehicule qui englobera moto + voiture
 	// Prix avec tva + 0.20
	private $gps;

	public function setPrix($prix){
		$this->prix = $prix * 1.40;
	}
	public function getMaxSpeed(){
		return parent::getMaxSpeed()+100;

	}
	// Pour le gps de la voiture true or false si elle en a ou pas
	public function getGps() {
		return $this->gps;
	}
	public function setGps($gps) {
		$this->gps = $gps;
	}
	
	public function hasgps() {
		if($this->gps)
			return true;
	}
}


class Moto extends Vehicule {
	public function getMaxSpeed(){
		return parent::getMaxSpeed()+200;

	}
}


// FONCTION PHP A PART POUR APPLIQUER UNE SOLE D SUR NIMPORTE VEHICULES

function solde(Vehicule $vehicule){
	return $vehicule->getPrix() / 4;
}

 // MOTO //
//
$m = new Moto();
$m->setPrix(100);
// En %
$m->promo(10);
echo "Prix moto :".$m->getPrix(true);
echo "<br>";
echo "Prix en solde est :".solde($m);
echo "<br>";
echo "La vitesse est de :".$m->getMaxSpeed();

echo "<br>";
echo "<br>";

 // VOITURE //
//

$v = new Voiture();
$v->setPrix(100);
$v->promo(10);
$v->setGps(true);
echo "Prix voiture :".$v->getPrix(true);
echo "<br>";
echo "La vitesse est de :".$v->getMaxSpeed().'<br>';

if($v->hasGps()){
	echo "La voiture à un GPS.";
}

 ?>