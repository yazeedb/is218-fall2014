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
	}
?>
