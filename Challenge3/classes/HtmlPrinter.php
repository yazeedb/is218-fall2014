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

		public static function printFollowers(array $record) {

			$fArray = $record['users'];
			$followersVar = '';

			foreach($fArray as $records) {
				$followersVar .= '<div class="row">';
				$followersVar .= '@' . $records['screen_name'] . '<br><em>' . $records['name'] . '</em>';
				$followersVar .= '</div>';
			}
			return $followersVar;	
		}
	}
?>
