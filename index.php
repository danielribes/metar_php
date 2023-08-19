<?php 

// DEBUG
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL); 

// Agafa AEROPORT
$oaci = strtoupper($_GET['path']);
$urlmetar = 'https://tgftp.nws.noaa.gov/data/observations/metar/stations/'.$oaci.'.TXT';
$rawmetar = file($urlmetar);

$date = explode(' ', $rawmetar[0]);
$metar = explode(' ', $rawmetar[1]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>METAR LELL</title>
</head>
<body>
<h1>
<?php

echo implode(' ', $metar);

?>
</h1>
</body>
