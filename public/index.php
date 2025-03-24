<?php 
require_once __DIR__ . '/../vendor/autoload.php';

use dribes\Metar\Metar;

// DEBUG
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL); 

// Agafa AEROPORT
$oaci = strtoupper($_GET['path']);
$metar = new Metar($oaci);
$message = $metar->getMetar('LELL');

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

echo $message;
?>
</h1>
</body>
