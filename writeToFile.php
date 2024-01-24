<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

$ip = $_POST['ip'];
$isp = $_POST['isp'];
$country = $_POST['country'];
$city = $_POST['city'];
$time = $_POST['time'];

$infoString = "IP: $ip\nISP: $isp\nCountry: $country\nCity: $city\nTime: $time\n";

$filePath = 'loginfo.txt';

file_put_contents($filePath, $infoString, FILE_APPEND | LOCK_EX);
?>