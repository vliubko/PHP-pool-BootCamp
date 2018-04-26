<?php

class Jaime extends Lannister {

	private $only = "With pleasure, but only in a tower in Winterfell, then.";

	function getDecision ($person) {
		if ($person instanceof Tyrion) {
			return ($this->no);
		}
		else if ($person instanceof Cersei) {
			return ($this->only);
		}
		else if ($person instanceof Sansa) {
			return ($this->yeah);
		}
	}
}

?>