<?php
	ini_set('display_errors', 1);
	ini_set('display_errors', TRUE);

	require 'classes/FileUpload.class.php';
	require 'classes/FileRead.class.php';
	require 'classes/FilePrint.class.php';

	$fileName = 'schoolData.csv';
	$mode = 'r';

	$file = new FileRead();
	$records = $file->fileRead($fileName, $mode);

	FilePrint::printFile($records);
?>
