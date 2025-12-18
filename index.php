<?php
require_once __DIR__ . '/vendor/autoload.php';


$page = $_GET['page'];
// faire le switch après

$url = $_SERVER['REQUEST_URI'];
if ($url === '/' || $url === '/index.php') {
    require_once "controllers/homeController.php";
} else if ($url === '/carte') {
    require_once "controllers/carteController.php";
} else {
    http_response_code(404);
    echo "Page non trouvée.";
}