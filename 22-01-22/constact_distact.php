<?php
class car {
	private $name;
	public function __construct($name ){
		echo $this->name = $name ;
	}
	public function __distruct(){
		echo "<br> distroy";
	}
}
new car("asraful islam");
?>