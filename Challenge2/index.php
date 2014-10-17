<?php
	require 'includes/header.php';
	require 'classes/Autoloader.php';
?>

<h1 id="schoolH1">School Records</h1> <br><br>
<div id="schoolRecords">
<?php
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
</div>
<div id="recordResult">
	<h1>Select a School</h1>
</div>
<?php
	require 'includes/footer.php';
?>
