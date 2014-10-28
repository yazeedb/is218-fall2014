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

	$settings = array(
			'oauth_access_token' => '2846540043-oYkK23FRlRntEGt6zyx7Ez3bMpdswS1PMNhyBW4',

			'oauth_access_token_secret' => '0mXvuH3o5DmZoYBGrwh7kDUtZny5EW3tLmBrWzgZyfoMp',

			'consumer_key' => 'KrY9GGoCeiKDONDjSeqTcn2f3',

			'consumer_secret' => 'xgHnhi4Aw8TE6GBAbgyKZezaYe4fXZBZWuE8DrP4AOBbfA41rs'
		);

	$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';

	$requestMethod = 'GET';

	$getField = '?screen_name=treehouse';

	$twitter = new classes\twitter_api_php\TwitterAPIExchange($settings);

	$string = json_decode($twitter->setGetField($getField)
						->buildOauth($url, $requestMethod)->performRequest(), $assoc = TRUE);

	$userTweets = classes\HtmlPrinter::printTweets($string);
?>

<div class="container-fluid">
	<?php echo $userTweets; ?>
</div>
