<?php 
	namespace classes\includes;
	
	class header {
		public static function displayHeader() {
			$header = '<head>
			<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
			<link rel="stylesheet" href="style/style.css">
			<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
			<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
		</head>
		<h1>Twitter API</h1> <br><br>

		<div class="col-lg-3">
			<div class="list-group">';

			echo $header;
		}
	}
?>
