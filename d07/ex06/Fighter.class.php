<?php

abstract class Fighter {

	public $type;

	abstract function fight($target);

	public function	unitSpawn($type) {
		if ($type == "foot soldier" ||
			$type == "archer" || $type == "assassin")
			$this->type = $type;

	}

	public function __construct($type){
		$this->unitSpawn($type);
	}
}

?>