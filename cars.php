<?php
	$car = new taurus;
	$car->setColor("blue");
	print_r($car);
	//echo $car->make;

	abstract class car {
		protected $engine;
		protected $wheels = 4;
		protected $doors;
		protected $length;
		protected $weight;
		protected $color;
	
		public function setColor($color) {
			$this->color = $color;
		}

		public function setEngine(engine $engine) {
			$this->engine = $engine;
		}
	}

	abstract class ford extends car {
		
	}

	class taurus extends ford {
		public function __construct() {
			$this->doors = "4";
			$this->length = "2000cm";
			$this->weight = "1700kg";
			$engine = new engine;
			$this->setEngine($engine);
		}
	
		
	}

	class engine {
		
	}
?>
