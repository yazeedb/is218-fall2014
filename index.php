<?php
	$obj = new example;
	$obj->name = "steve";

	print_r($obj);

	$obj2 = new example("Yazeed");

	class example {
	
	public $name;
	
		function __construct($name) {
			$this->name = $name;
			echo "Hello World" . $name . "<br>";
		}
	}
	echo "hello world!";
?>
