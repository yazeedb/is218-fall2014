<?php
	ini_set('display_errors', 1);
	ini_set('display_errors', TRUE);
	class Html 
	{
		public static function makeLink($rows, $getVar, $universityName) {
			$i = -1;
			foreach($rows as $row) {
				$i++;
				echo '<a href="?' . $getVar . '=' . $i . '">' . $row[$universityName] . '</a>' . '<br>'; 
			}
		}

		public static function makeTable($row) {
			echo "<table>";
			foreach($row as $key => $value) {
				echo "<tr>";
				echo "<th>" . $key . "</th>";
				echo "<td>" . $value . "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
	}
?>
