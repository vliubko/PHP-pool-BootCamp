<?php

Class Targaryen {

	public function resistsFire() {
		return False;
	}
	function getBurned (){
		if ($this->resistsFire() === FALSE)
			return ("burns alive");
		else
			return ("emerges naked but unharmed");
	}
}

?>