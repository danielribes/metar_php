<?php 
require_once __DIR__ . '/../vendor/autoload.php';

use dribes\MetarParser\Service\MetarFetcher;
use dribes\MetarParser\Service\MetarParser;

// DEBUG
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL); 

// Validate and sanitize input
$oaci = isset($_GET['path']) ? strtoupper(trim($_GET['path'])) : null;
if (!$oaci || !preg_match('/^[A-Z]{4}$/', $oaci)) {
    die('Invalid or missing OACI code.');
}

try {
    // Fetch and parse METAR data
    $fetcher = new MetarFetcher();
    $rawmetar = $fetcher->fetch($oaci);

    $parser = new MetarParser();
    $metar = $parser->parse($oaci, $rawmetar);

    $message = $metar->getMetar();
} catch (Exception $e) {
    $message = "Error: " . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>METAR <?php echo htmlspecialchars($oaci); ?></title>
</head>
<body>
<h1>
<?php echo htmlspecialchars($message); ?>
</h1>
</body>
</html>