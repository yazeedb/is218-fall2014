<?php
	ini_set('display_errors', 1);
	ini_set('display_errors', TRUE);

	class FileUpload
	{
		public static function fileOpen($fileName, $parameter) {
			$handle = fopen($filename, $parameter);
		}

		public static function fileClose($handle) {
			fclose($handle);
		}	
	}
?>
