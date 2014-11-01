<?php
	//ini_set('display_errors', 1);
	require 'Autoloader.php';

	$header = classes\includes\header::displayHeader();

	$menuOptions = classes\options::menuOptions();
	foreach($menuOptions as $key => $value) {
		echo classes\HtmlPrinter::printOptions($key, $value);
	}
?>
	</div>
</div>

<div class="container">
<?php
	$url = $_GET['url'];
	$url2 = 'https://api.twitter.com/1.1/statuses/update.json';

	$requestMethod = $_GET['view'];
	$requestMethod2 = 'POST';

	$getField = '?screen_name=yazeedbz1';
	$postFields = $_POST;

	$settings = classes\twitter_api_php\config\config::settings();

	if(!empty($_GET)) {
		$userInfo = classes\TwitterHandler::get($settings, $getField, $url, $requestMethod);
		
		switch ($_GET['url']) {
			case 'https://api.twitter.com/1.1/followers/list.json': 
				echo classes\HtmlPrinter::printFollowers($userInfo);
				break;

			case 'https://api.twitter.com/1.1/friends/list.json':
				echo classes\HtmlPrinter::printFollowers($userInfo);
				break;

			case 'https://api.twitter.com/1.1/statuses/home_timeline.json':
				echo classes\HtmlPrinter::printTimeline($userInfo);
				break;

			case 'https://api.twitter.com/1.1/statuses/user_timeline.json':
				echo classes\HtmlPrinter::printTimeline($userInfo);
				break;
		} //end switch
	}

	if(!empty($_POST)) {
		$userTweet = classes\TwitterHandler::post($settings, $postFields, $url2, $requestMethod2);
		echo '<h1>Tweet successfully sent!</h1>';
	}

	$footer = classes\includes\footer::displayFooter();
?>
