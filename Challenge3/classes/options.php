<?php
	namespace classes;

	class options {
		public static function menuOptions() {
			$options = array(
					'Timeline' => 'https://api.twitter.com/1.1/statuses/home_timeline.json',

					'Tweets' => 'https://api.twitter.com/1.1/statuses/user_timeline.json',

					'Followers' => 'https://api.twitter.com/1.1/followers/list.json',

					'Friends' => 'https://api.twitter.com/1.1/friends/list.json'
				);

			return $options; 
		} //end static function
	}
	
?>
