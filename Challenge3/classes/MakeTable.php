<?php
	namespace classes;

	class MakeTable
	{
		public static function tableMaker(Array $record) {
			$tableVar = '<table>';
				foreach($record as $key => $value) {
					$tableVar .= '<tr><th>' . $key . '</th>';					
						$tableVar .= '<td>' . $value . '</td></tr>';
				}
			$tableVar .= '</table>';
			return $tableVar;
		} //end static function

		public static function printTweets(Array $record) {
			$i = -1;
			$tweetVar = '<table>';
			$tweetVar .= '<h1>Tweets by ' . $record[0]['user']['name'] . '</h1>';
			foreach($record as $records) {
				$tweetVar .= '<tr><th>' . $records['text'] . '</th></tr>';
			}
			$tweetVar .= '</table>';
			return $tweetVar;
		} //end static function
	}
?>
