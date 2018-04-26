<?php

class Lannister {

	public $no = "Not even if I'm drunk !";
	public $yeah = "Let's do this.";

	function getDecision($person) {
	}

	function 	sleepWith($person) {
		print ($this->getDecision($person) . PHP_EOL);
	}
}

?>