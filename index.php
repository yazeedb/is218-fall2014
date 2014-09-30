<?php
	class File
	{
		private $fileName;
		public $rows = array();

		public function __construct($fileName) {
			$this->fileName = $fileName;
		} //end __construct function

		public function read() {
			$first_column = TRUE;
			ini_set('auto_detect_line_endings', TRUE);

			if(($handle = fopen($this->fileName, "r")) !== FALSE) {
				while($row = fgetcsv($handle, ",")) {
					if($first_column) {
						$column_header = $row;
						$first_column = FALSE;
					} else {
						$rows[] = array_combine($column_header, $row);
					}
				}
				fclose($handle);
			} //end fopen if
			$this->rows = $rows;
		} //end read function

		public function printRows() {
			$rows = $this->rows;
			if(empty($_GET)) {
				foreach($rows as $row) {
					$i++;
					$universityNum = $i - 1;
					echo '<a href="' . $_SERVER['PHP_SELF'] . '/?university=' . $universityNum . '">' . $row["INSTNM"] . '</a>' . '<br>';
				}
			} //end $_GET if

			$row = $rows[$_GET['university']];
			foreach($row as $key => $value) {
				echo $key . ": " . $value . "<br>";
			}
		} //end printRows function
	} //end class File

	$file1 = new File('schoolData.csv'); //Instantiate new File object with file parameter
	$file1->read(); //Read the file
	$file1->printRows(); //Print its contents
?>
