<?php require_once('../inc/railway.config.php');

if(isset($_GET['Stn'])){
	$url .= "suggest_station/name/".$_GET['Stn']."/$apiKey";

	$content = file_get_contents($url);
	
	$all = (json_decode($content, true));

	foreach ($all['station'] as $key => $value) { ?>

	<div class="Stn" data-code="<?=$value['code'];?>" data-name="<?=$value['fullname'];?>"> <?=$value['fullname'];?> - <?=$value['code'];?></div>
		
	<?php }

	

	
}


