<?php
	ini_set('display_errors', 1);
	ini_set('display_errors', TRUE);

	require 'init.php';

	$fileName = 'schoolData.csv';
	$mode = 'r';

	$file = new FileRead();
	$records = $file->fileRead($fileName, $mode);

	if(empty($_GET)) {
		echo MakeLinks::linkMaker($records, 'university', 'INSTNM');
	} else {
		echo MakeTable::tableMaker($records[$_GET['university']]);
	}
?>
