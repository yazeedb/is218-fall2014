<?php
	namespace classes;

	class TwitterHandler
	{
		public static function get($settings, $getField, $url, $requestMethod) {
			$twitter = new twitter_api_php\TwitterAPIExchange($settings);
			$twitter->setGetField($getField);
			$twitter->buildOauth($url, $requestMethod);
			$response = $twitter->performRequest();
			return json_decode($response, $assoc = TRUE);
		}

		public static function post($settings, $postFields, $url, $requestMethod) {
			$twitter = new twitter_api_php\TwitterAPIExchange($settings);
			$twitter->buildOauth($url, $requestMethod);
			$twitter->setPostfields($postFields);
			$response = $twitter->performRequest();
			return json_decode($response, $assoc = TRUE);
		}
	}
?>
