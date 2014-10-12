<?php
	ini_set('display_errors', 1);
	ini_set('display_errors', TRUE);

	class FileUpload
	{
		public function fileOpen($fileName, $parameter) {
			$handle = fopen($filename, $parameter);
		}

		public function fileClose($handle) {
			fclose($handle);
		}	
	}
?>
