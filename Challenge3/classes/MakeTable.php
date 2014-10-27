<?php
	namespace classes;

	class MakeTable
	{
		public static function tableMaker(Array $record) {
			$tableVar = '<table>';
				foreach($record as $key => $value) {
					$tableVar .= '<tr><th>' . $key . '</th>';					
						$tableVar .= '<td>' . $value . '</td></tr>';
				}
			$tableVar .= '</table>';
			return $tableVar;
		} //end static function
	}
?>
