<head>
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="style/style.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<h1>Twitter API</h1> <br><br>

<div class="col-lg-3">
	<div class="list-group">
		<a href="?view=GET&url=https://api.twitter.com/1.1/statuses/home_timeline.json" class="list-group-item" id="viewTimeline">
			View Timeline
		</a>
		<a href="?view=GET&url=https://api.twitter.com/1.1/statuses/user_timeline.json" class="list-group-item" id="viewTweets">
			View Tweets
		</a>
		<a href="?view=GET&url=https://api.twitter.com/1.1/followers/list.json" class="list-group-item" id="viewFollowers">
			View Followers
		</a>
	</div>
</div>

<div class="container">
<?php
	require 'Autoloader.php';
	ini_set('display_errors', 1);
	$url = $_GET['url'];
	$url2 = 'https://api.twitter.com/1.1/statuses/update.json';

	$requestMethod = $_GET['view'];
	$requestMethod2 = 'POST';

	$getField = '?screen_name=yazeedbz1';
	$postFields = $_POST;

	if(!empty($_GET)) {
		$settings = \classes\twitter_api_php\config\config::settings();
		$userInfo = classes\TwitterHandler::get($settings, $getField, $url, $requestMethod);

		switch ($_GET['url']) {
			case 'https://api.twitter.com/1.1/followers/list.json':
				echo classes\HtmlPrinter::printFollowers($userInfo);
				break;

			default:
				echo classes\HtmlPrinter::printTimeline($userInfo);
				break;
		}
	}

	if(!empty($_POST)) {
		$userTweet = classes\TwitterHandler::post($settings, $postFields, $url2, $requestMethod2);
		echo '<h1>Tweet successfully sent!</h1>';
	}
?>
</div>
<br> <br>
<form action="index.php" method="POST">
	<textarea id="status" name="status" rows="4" cols="50"></textarea> 
	<br>
		<input type="submit" name="submit" id="submit" value="Tweet this">
</form>

<script type="text/javascript" src="app.js"></script>
