<?php
	class Html 
	{
		public static function makeLink($records) {
			$i = -1;
			foreach($records as $record) {
				$i++;
				echo '<a href="?university=' . $i . '">' . $record["INSTNM"] . '</a>' . '<br>'; 
			}
		}

		public static function makeTable($record) {
			echo "<table>";
			foreach($record as $key => $value) {
				echo "<tr>";
				echo "<th>" . $key . "</th>";
				echo "<td>" . $value . "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
	}
?>
