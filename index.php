<?php
	class fileReader {
		function readFile($filename) { //file name parameter, allows any file to be entered
			$header_column = true;
			ini_set('auto_detect_line_endings', true);
			if(($handle = fopen($filename, "r")) !== FALSE) { //open the file for reading
				while($row = fgetcsv($handle, 1000, ",")) { //set $row = to a separated value in file
					if($header_column) {
						$first_column = $row; //make our first row = $first_column, this will be header
						$header_column = false; //$header_column no longer needed, set to false
					}
					else { //after $header_column is no longer needed
						$rows[] = array_combine($first_column, $row); //combine headers with respective data and append to $rows
					}
				} //end while loop
				fclose($handle); //close the file
			} //end if

			if(empty($_GET)) {	
				foreach($rows as $row) {
					$i++;
					$universityNum = $i - 1;
					echo '<a href="' . $_SERVER['PHP_SELF'] . '/?university=' . $universityNum . '">' . $row['INSTNM'] . '</a>' . "<br>";
				}
			}

			$row = $rows[$_GET["university"]];
			foreach($row as $key => $value) {
				echo $key . ": " . $value . "<br>";
			}

		} //end function
	} //end class

	$file1 = new fileReader(); //instantiate an instance of fileReader class
	$file1->readFile("schoolData.csv"); //call the readFile function with file name parameter
?>
