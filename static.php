<?php 

class Statique {
	public static $msg = "Hello World";

	public static function speak(){
		echo self::$msg;
	}
}

// Appel d'une fonction statique
Statique::speak();

?>