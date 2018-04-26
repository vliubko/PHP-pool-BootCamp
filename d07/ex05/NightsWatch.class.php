<?php

class NightsWatch implements Ifighter {

	public $army;

	public function recruit($person) {
		$this->army[] = $person;
	}

	public function fight() {
		foreach ($this->army as $person) {
			if ($person instanceof Ifighter) {
				$person->fight();
			}
		}
	}
}

?>