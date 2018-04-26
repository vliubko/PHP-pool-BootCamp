<?php

class UnholyFactory {

	public $enemies;


	public function check_already_absorbed($type) {
		foreach ($this->enemies as $enemy) {
			if ($type == $enemy) {
				return (TRUE);
			}
		}
		return (FALSE);
	}

	public function absorb($object) {
		if ($object instanceof Fighter) {
			if (isset($this->enemies) && $this->check_already_absorbed($object->type) == TRUE) {
				echo "(Factory already absorbed a fighter of type " . $object->type . ")" . PHP_EOL;
			}
			else {
				echo "(Factory absorbed a fighter of type " . $object->type . ")" . PHP_EOL;
				$this->enemies[] = $object->type;
			}
		}
		else {
			echo "(Factory can't absorb this, it's not a fighter)". PHP_EOL;
		}
	}

	public function fabricate ($fighter) {
			if (in_array($fighter, $this->enemies) == TRUE) {
				echo "(Factory fabricates a fighter of type " . $fighter . ")" . PHP_EOL;
				$return = ucfirst(str_replace(' ', '', $fighter));
				return (new $return());
			}
			echo "(Factory hasn't absorbed any fighter of type " . $fighter . ")" . PHP_EOL;
			return (NULL);
		}
}

?>