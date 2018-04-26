<?php

abstract Class House {

	abstract function getHouseName();
	abstract function getHouseSeat();
	abstract function getHouseMotto();

	function introduce() {
		echo "House " . $this->getHouseName();
		echo " of " . $this->getHouseSeat();
		echo " : " . '"' . $this->getHouseMotto() . '"' . PHP_EOL;
	}
}

?>