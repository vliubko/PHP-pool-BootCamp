<?php

Class Color {
	public $red = 0;
	public $green = 0;
	public $blue = 0;
	public static $verbose = FALSE;

	static function doc() {
		$content = file_get_contents("Color.doc.txt");
		return ($content);
	}

	function __toString()
	{
		$string = sprintf("Color( red: %3d, green: %3d, blue: %3d )", $this->red, $this->green, $this->blue);
		return ($string);
	}

	private function show($text) {
		if (self::$verbose == TRUE) {
			$show = $this->__toString();
			echo $show . $text . "\n";
		}
	}

	function __construct($arr_rgb)
	{
		if (isset($arr_rgb['rgb'])) {
			$this->red = (($arr_rgb['rgb']) >> 16) & 255;
			$this->green = (($arr_rgb['rgb']) >> 8) & 255;
			$this->blue = ($arr_rgb['rgb']) & 255;
		}
		else if (isset($arr_rgb['red']) && isset($arr_rgb['green']) && isset($arr_rgb['blue'])){
			$this->red = $arr_rgb['red'];
			$this->green = $arr_rgb['green'];
			$this->blue = $arr_rgb['blue'];
		}
		else {
			echo "undefined behaviour, sorry!\n"."<br>";
		}
			$this->show(" constructed.");
	}

	function __destruct() {
		$this->show(" destructed.");
	}

	function 	add(Color $rhs ) {
		$red = $this->red + $rhs->red;
		$green = $this->green + $rhs->green;
		$blue = $this->blue + $rhs->blue;
		$new = new Color(array( 'red' => $red, 'green' => $green, 'blue' => $blue ));
		return ($new);
	}

	function 	sub(Color $rhs ) {
		$red = $this->red - $rhs->red;
		$green = $this->green - $rhs->green;
		$blue = $this->blue - $rhs->blue;
		$new = new Color(array( 'red' => $red, 'green' => $green, 'blue' => $blue ));
		return ($new);
	}

	function 	mult ($f ) {
		$red = $this->red * $f;
		$green = $this->green * $f;
		$blue = $this->blue * $f;
		$new = new Color(array( 'red' => $red, 'green' => $green, 'blue' => $blue ));
		return ($new);
	}

}

?>