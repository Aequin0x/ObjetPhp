<?php 

class Site {
	private $html;
	private $css;
	private $content;
	private $js;
	private $name;
	private $url;

// *************//
// private $html //
// *************//
	public function __construct(){
		var_dump($_SERVER);

		$this->url = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	}

	public function getHtml(){
		echo '<!DOCTYPE html>
		<html lang="fr">
			<head>
				<meta charset="UTF-8">
				<title>'.$this->getName().'</title>
				'.$this->getCss().'
			</head>
		<body>';
			include($this->getContent());
			echo $this->getJs().'
		</body>
		</html>';
		
		
		return $this->html;
	} 
	public function setHtml($html){
		$this->html = $html; 
	}
// *************//
// private $css //
// *************//

	public function getCss() {
		$output = "";
		if(count($this->css)>0) { // On verifie que le tableau n'est pas vide / qu'il n'y a pas de css
			foreach ($this->css as $css) {
				$output .= "<link href='".$css."'>\n";
			}
		}
		return $output;
	}
	public function setCss($css) {
		$this->css[] = $css;
		return $this;

	}
// ******************//
// private $content //
// ****************//

	public function setContent($content){
		$this->content = $content;
	}

	public function getContent(){
		return $this->content;
	}

// *************//
// private $js //
// *************//

	public function getJs() {
		$output1 = "";
		if(count($this->js)>0) {
			foreach ($this->js as $js) {
					$output1 .= "<script src='".$js."'></script>\n";
				}
		}
		return $output1;
	}
	public function setJs($js) {
		$this->js[] = $js;
		return $this;
	}
// *************//
// private $name //
// *************//

	public function getName(){
		return $this->name;
	} 
	public function setName($name){
		$this->name = $name; 
	}
// *************//
// Private $url //
// *************//
	public function getUrl(){
		return $this->url;
	} 


}



$site = new Site();
$site->setName('Les Objets PHP');
$site->setCss("css/style.css")
	 ->setCss("css/bootstrap.min.css");
$site->setJs("script/main.js")
	 ->setJs("script/jquery.min.css");
$site->setContent("content.php");
echo $site->getHtml();

?>