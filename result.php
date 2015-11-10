<?php require_once('inc/railway.config.php');

$t = 'ddn'.'ndls'.'12-11-2015'.'json'.'ee1f6bf1a7e5572c1b5a19f135f17a9e';





$url .="trains_between_stations /fscode/DDN/tscode/NDLS/date/12-11-2015/format/json/pbapikey/$apiKey/pbapisign/".HMAC($t);

echo file_get_contents($url);


