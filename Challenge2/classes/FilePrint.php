<?php
	class FilePrint
	{
		public static function printFile(Array $records) {
			echo '<table>';
			foreach($records as $record) {
				foreach($record as $key => $value) {
					echo '<tr>';
						echo '<th>' . $key . '</th>';
						echo '<td>' . $value . '</td>';
					echo '</tr>';
				}
			}
			echo '</table>';
		}
	}
?>
