<?php
	$car_orders[0]['model'] = "taurus";
	$car_orders[0]['engine'] = 'V6';
	$car_orders[0]['color'] = 'blue';
	
	$car_orders[1]['model'] = "taurus";
	$car_orders[1]['engine'] = 'Mustang';
	$car_orders[1]['color'] = 'blue';

	$car_orders[2]['model'] = "taurus";
	$car_orders[2]['engine'] = 'Focus';
	$car_orders[2]['color'] = 'blue';

	foreach ($car_orders as $car_order) {
		foreach($car_order as $key => $value) {
			echo $key . ': ' . $value . "<br>";
		}	
		echo '<br>';
	}
	

	$car = new $car_order['model'];
	$car->setColor("blue");
	print_r($car);

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
