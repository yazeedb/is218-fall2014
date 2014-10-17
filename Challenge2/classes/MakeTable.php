<?php
	namespace classes;

	class MakeTable
	{
		public static function tableMaker(Array $record) {
			echo '<table>';
				foreach($record as $key => $value) {
					echo '<tr>';
						echo '<th>' . $key . '</th>';
						echo '<td>' . $value . '</td>';
					echo '</tr>';
				}
			echo '</table>';
		} //end static function
	}
?>
