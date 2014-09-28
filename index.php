<?php
	class fileReader {
		function readFile($filename) {
			$header_column = true;
			ini_set('auto_detect_line_endings', true);
			if(($handle = fopen($filename, "r")) !== FALSE) {
				while($row = fgetcsv($handle, 1000, ",")) {
					if($header_column) {
						$first_column = $row;
						$header_column = false;
					}
					else {
						$rows[] = array_combine($first_column, $row);
					}
				} //end while loop
				fclose($handle);
			} //end if

			foreach($rows as $row) {
				foreach($row as $key => $value) {
					echo $key . ": " . $value . "<br>";
				}
				echo "<hr>";
			} //end foreach

		} //end function
	} //end class

	$file1 = new fileReader();
	$file1->readFile("schoolData.csv");
?>
