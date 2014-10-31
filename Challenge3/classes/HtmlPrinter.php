<?php
	namespace classes;

	class HtmlPrinter
	{
		public static function printTimeline(Array $record) {

			$timelineVar = '';
			foreach($record as $records) {
				$timelineVar .= '<div class="row">';
				$timelineVar .= 'By ' . $records['user']['name'] . '<br>';
				$timelineVar .= $records['text'] . '<br>';
				$timelineVar .= $records['created_at'];
				$timelineVar .= '</div>';
			}
			
			return $timelineVar;
		} //end static function

		public static function printTweets(Array $record) {
			$tweetVar = '<img src="' . $record[0]['user']['profile_image_url'] . '">';
			$tweetVar .= '<h1>Tweets by ' . $record[0]['user']['name'] . '</h1>';

			foreach($record as $records) {
				$tweetVar .= '<div class="row">' . $records['text'] . '</div>';
			}

			return $tweetVar;
		} //end static function
	}
?>
