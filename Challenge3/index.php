<?php
	ini_set('display_errors', 1);
	require_once('twitter_api_php/TwitterAPIExchange.php');
	require('classes/MakeTable.php');

	$settings = array(
			'oauth_access_token' => '2846540043-oYkK23FRlRntEGt6zyx7Ez3bMpdswS1PMNhyBW4',

			'oauth_access_token_secret' => '0mXvuH3o5DmZoYBGrwh7kDUtZny5EW3tLmBrWzgZyfoMp',

			'consumer_key' => 'KrY9GGoCeiKDONDjSeqTcn2f3',

			'consumer_secret' => 'xgHnhi4Aw8TE6GBAbgyKZezaYe4fXZBZWuE8DrP4AOBbfA41rs'
		);

	$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';

	$requestMethod = 'GET';

	$getField = '?screen_name=kdtrey5';

	$twitter = new TwitterAPIExchange($settings);

	$string = json_decode($twitter->setGetField($getField)
						->buildOauth($url, $requestMethod)->performRequest(), $assoc = TRUE);

	echo '<pre>';
	print_r($string);
	echo '</pre>';

	$userProfile = MakeTable::tableMaker($string[0]['user']);

	echo $userProfile;
?>
