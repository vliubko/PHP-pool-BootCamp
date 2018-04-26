<?php

require_once ("../ex00/Color.class.php");

Class Vertex {
	private		$_x;
	private 	$_y;
	private 	$_z;
	private 	$_w;
	private 	$_color;
	public static $verbose = FALSE;

	static function doc() {
		$content = file_get_contents("Vertex.doc.txt");
		return ($content);
	}

	function __toString()
	{
		if (self::$verbose)
			$string = sprintf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f, %s )", $this->_x, $this->_y, $this->_z, $this->_w, $this->_color);
		else
			$string = sprintf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f )", $this->_x, $this->_y, $this->_z, $this->_w);
		return ($string);
	}

	private function show($text) {
		if (self::$verbose == TRUE) {
			$show = $this->__toString();
			echo $show . $text . "\n";
		}
	}

	function 	__construct($array)
	{
		if (isset($array['x']) && isset($array['y']) && isset($array['z'])) {
			$this->_x = $array['x'];
			$this->_y = $array['y'];
			$this->_z = $array['z'];
		}
		if (isset($array['w'])) {
			$this->_w = $array['w'];
		}
		else
			$this->_w = 1.00;
		if (isset ($array['color'])) {
			$this->_color = $array['color'];
		}
		else {
			$this->_color = new Color(array ( 'red' => 255, 'green' => 255, 'blue' => 255));
		}
			$this->show(" constructed");
	}

	function 	__destruct()
	{
		$this->show(" destructed");
	}

	function 	getX() {
	return ($this->_x);
}
	function 	getY() {
		return ($this->_y);
	}
	function 	getZ() {
		return ($this->_z);
	}
	function 	getW() {
		return ($this->_w);
	}
	function 	getColor() {
		return ($this->_color);
	}
	function 	setX($x) {
		$this->_x = $x;
	}
	function 	setY($y) {
		$this->_y = $y;
	}
	function 	setZ($z) {
		$this->_z = $z;
	}
	function 	setW($w) {
		$this->_w = $w;
	}
	function 	setColor($color) {
		$this->_color = $color;
	}

}

?>