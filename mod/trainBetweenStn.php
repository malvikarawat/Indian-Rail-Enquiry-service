<?php require_once('../inc/railway.config.php');

if(isset($_GET['srcCode']) && isset($_GET['destCode']) && isset($_GET['date'])){

	$d = $_GET['date'];

	$d2 = explode("-", $d);

    $date_ = $d2[2]."-".$d2[1];


	$url .="between/source/".$_GET['srcCode']."/dest/".$_GET['destCode']."/date/".$date_."/$apiKey";


	$content = file_get_contents($url);
	
	$all = (json_decode($content, true));


	foreach ($all['train'] as $key => $value) { ?>
		<div class="trainList"><?=$value['number']?> - <?=$value['name'];?></div>
	<?php }
}