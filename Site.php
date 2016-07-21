<?php 

class Site {
	private $html;
	private $css;
	private $js;
	private $name;
	private $url;

// private $html //
	public function __construct(){
		$this->html = '<!DOCTYPE html>
		<html lang="fr">
			<head>
				<meta charset="UTF-8">
				<title>Dz</title>
			</head>
		<body>
			<h1>KIKOOOOOOO !!!</h1>
		</body>
		</html>
		';
	}

	public function getHtml(){
		return $this->html;
	} 
	public function setHtml($html){
		$this->html = $html; 
	}
// private $css //

// private $js //

// private $name //

	public function getName(){
		return $this->name;
	} 
	public function setName($name){
		$this->name = $name; 
	}
// Private $url //
}

$site = new Site();

$site->setName('Les Objets PHP');

echo $site->getHtml();
 ?>