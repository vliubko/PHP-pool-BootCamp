<?php

Class Tyrion extends Lannister {
	function __construct(){
		parent::__construct();
		echo "My name is Tyrion" . PHP_EOL;
	}
	function	getSize(){
		return "Short";
	}

}

?>