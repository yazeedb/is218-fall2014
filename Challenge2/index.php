<?php
	require 'classes/Autoloader.php';

	$fileName = 'schoolData.csv';
	$mode = 'r';

	$dictionary = new FileRead();
	$dictionaryNames = $dictionary->fileRead('hd2013/varlist.csv', $mode);

	$csvFile = new FileRead();
	$records = $csvFile->fileRead($fileName, $mode, TRUE);

	if(empty($_GET)) {
		echo MakeLinks::linkMaker($records, 'university', 'INSTNM');
	} else {
		echo MakeTable::tableMaker($records[$_GET['university']]);
	}
?>
