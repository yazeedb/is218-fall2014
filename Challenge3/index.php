<head>
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="style/style.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php
	ini_set('display_errors', 1);
	require 'Autoloader.php';
	require 'classes/twitter_api_php/config/config.php';

	$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
	$url2 = 'https://api.twitter.com/1.1/statuses/update.json';

	$requestMethod = 'GET';
	$requestMethod2 = 'POST';

	$getField = '?screen_name=treehouse';
	$postField = $_POST;

	$twitter = new classes\twitter_api_php\TwitterAPIExchange($settings);

	$getString = json_decode($twitter->setGetField($getField)
						->buildOauth($url, $requestMethod)->performRequest(), $assoc = TRUE);
	//$postString = json_decode($twitter->setPostfields($postField)
						//->buildOauth($url2, $requestMethod2)->performRequest(), $assoc = TRUE);

	$getUserTweets = classes\HtmlPrinter::printTweets($getString);
	$getUserProfile = classes\HtmlPrinter::printProfile($getString);

	if(!empty($_POST)) {
		print_r($_POST);
	} else {
		echo 'Nothing in post';
	}
?>

<div class="container-fluid">
	<?php 
		echo $getUserProfile;
		/*echo '<pre>';
		print_r($twitter);
		echo '</pre>';*/
	?>
</div>
<div class="container-fluid">
	<?php 
		echo $getUserTweets; 
	?>
</div>
<form action="index.php" method="POST">
	<textarea id="tweetText" name="tweetText" rows="4" cols="50"></textarea> 
	<br>
	<input type="submit" name="submit" id="submit" value="Tweet this">
</form>
