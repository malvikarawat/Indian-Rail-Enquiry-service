<?php session_start();

if(isset($_GET['key'])){
	$url = "http://api.railwayapi.com/code_to_name/code/gkp/apikey/".$_GET['key'];

	$content = file_get_contents($url);

	$all = (json_decode($content, true));

	if($all['response_code'] == 403){
		echo 0;
	}else {

		$_SESSION['apiKey'] = $_GET['key'];
		echo 1;
	}
}