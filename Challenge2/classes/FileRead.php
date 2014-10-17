<?php
	namespace classes;
	
	class FileRead
	{
		public function __construct() {
			ini_set('auto_detect_line_endings', TRUE);
		}

		public function fileRead($fileName, $mode, $first_column = NULL) {

			if($handle = FileUpload::uploadFile($fileName, $mode)) {

				while($row = fgetcsv($handle, ',')) {
					if($first_column) {
						$column_header = $row;
						$first_column = FALSE;
					}

					if($first_column === FALSE) {
						$record = array_combine($column_header, $row);
						$records[] = $record;
					} 

					if($first_column === NULL) {
						$records[] = $row;
					}

				} //end while loop

				FileUpload::fileClose($handle);
			} //end fileUpload if

			return $records;
		} //end function
	}
?>
