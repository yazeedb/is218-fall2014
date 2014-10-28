<?php
	namespace classes;

	class HtmlPrinter
	{
		public static function printProfile(Array $record) {
			$profileVar = '<table class="table table-hover">';
			$index = -1;
			foreach($record as $records) {
				$index++;
				if($index === 0) {
					foreach($records['user'] as $key => $value) {
						$profileVar .= '<tr><th>' . ucfirst($key) . '</th><td>' . $value . '</td></tr>'; 
					}
				}
			}

			$profileVar .= '</table>';

			return $profileVar;
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
