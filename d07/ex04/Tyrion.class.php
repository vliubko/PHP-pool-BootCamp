<?php

class Tyrion extends Lannister {
	function getDecision ($person) {
		if ($person instanceof Lannister) {
			return ($this->no);
		}
		else {
			return ($this->yeah);
		}
	}
}

?>