<?php
	spl_autoload_register(function($class) {
		$fileName = 'classes/' . $class . '.class.php';
		if(is_readable($fileName)) {
			require $fileName;
		}
	});
?>
