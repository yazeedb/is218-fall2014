<?php
	ini_set('display_errors', 1);
	ini_set('display_errors', TRUE);

	require 'FileUpload.php';

	public function __construct() {
		ini_set('auto_detect_line_endings', TRUE);
	}

	public function readFile($fileName, $parameter) {
		$first_column = TRUE;

		if(($handle = FileUpload::fileOpen($fileName, $parameter)) !== FALSE) {

			while($row = fgetcsv($handle, ',')) {
				if($first_column) {
					$column_header = $row;
					$first_column = FALSE;
				} else {
					$record = array_combine($column_header, $row);
					$records[] = $record;
				}
			} //end while loop
			FileUpload::fileClose($handle);
			
		} //end fopen if

		return $records;
		
	} //end readFile function
?>
