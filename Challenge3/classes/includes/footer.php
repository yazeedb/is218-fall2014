<?php 
	namespace classes\includes; 

	class footer {
		public static function displayFooter() {
			$footer = '</div>
			<br> <br>
			<form action="index.php" method="POST">
				<textarea id="status" name="status" rows="4" cols="50"></textarea> 
				<br>
					<input type="submit" name="submit" id="submit" value="Tweet this">
			</form>

			<script type="text/javascript" src="app.js"></script>';

			echo $footer;
		}
	}
?>
