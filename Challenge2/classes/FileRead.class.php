<?php
	class FileRead
	{
		public function __construct() {
			ini_set('auto_detect_line_endings', TRUE);
		}

		public function fileRead($fileName, $mode) {
			$first_column = TRUE;

			if(($handle = FileUpload::uploadFile($fileName, $mode)) !== FALSE) {

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
			} //end fileUpload if

			return $records;
		} //end function
	}
?>
