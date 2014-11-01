<?php
	namespace classes;

	class HtmlPrinter
	{
		public static function printOptions($name, $url) {
			$printVar = '<a href="?view=GET&url=' . $url . '" class="list-group-item" id="view"' . $name . '>View ' . $name . '</a>';

			return $printVar; 
		} //end static function

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
			$followers = $record['users'];
			$followersVar = '';

			foreach($followers as $records) {
				$followersVar .= '<div class="row">';
				$followersVar .= '<img src="' . $records['profile_image_url'] . '"><br>';
				$followersVar .= $records['name'] . '<br><em>@' . $records['screen_name'] . '</em>';
				$followersVar .= '</div>';
			}

			return $followersVar;	
		} //end static function
	}
?>
