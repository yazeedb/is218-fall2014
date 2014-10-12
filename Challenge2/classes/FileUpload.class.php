<?php
	class FileUpload
	{
		protected $handle;

		public static function uploadFile($fileName, $mode) {
			$handle = fopen($fileName, $mode);
			return $handle;
		}

		public static function fileClose($handle) {
			fclose($handle);
		}
	}
?>
