<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
$cats = ['pukis', 'murkis', 'pilkis', 'rainius'];


$out = json_encode($cats);
echo $out;