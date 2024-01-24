<?php
// Get the IP information from the client-side
$ip = $_POST['ip'];
$isp = $_POST['isp'];
$country = $_POST['country'];
$city = $_POST['city'];
$time = $_POST['time'];

// Create a string with the information
$infoString = "IP: $ip\nISP: $isp\nCountry: $country\nCity: $city\nTime: $time\n";

// Specify the file path on the server
$filePath = 'loginfo.txt';

// Write the information to the file
file_put_contents($filePath, $infoString, FILE_APPEND | LOCK_EX);
?>