<?php
	$obj1 = new example();
	$obj->name = "Steve";
	$obj->printHelloWorld();
	
	class example {
		public $name;
		public function __construct() {
			echo "Hello World..." . $this->name;
		}

		public function printHelloWorld() {
			echo "Hello World..." . $this->name . "\n";
		}
	}
?>
