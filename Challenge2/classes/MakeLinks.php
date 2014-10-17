<?php
	namespace classes;

	class MakeLinks
	{
		public static function linkMaker(Array $records, $getVar, $universityName) {
			$i = -1;
				foreach($records as $record) {
					$i++;
					echo '<a href="?' . $getVar . '=' . $i . '">' . $record[$universityName] . '</a>' . '<br>';
				} //end foreach
		} //end static function
	}
?>
