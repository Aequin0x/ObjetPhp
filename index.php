<?php 

require 'Site-generator/Site.php';

$site = new Site();
$site->setName('Les Objets PHP');
$site->setCss("css/style.css")
	 ->setCss("css/bootstrap.min.css");
$site->setJs("script/main.js")
	 ->setJs("script/jquery.min.css");
$site->setContent("content.php");
echo $site->getHtml();

?>
