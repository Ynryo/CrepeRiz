<?php
require_once __DIR__ . '/vendor/autoload.php';

$url = $_SERVER['REQUEST_URI'];
if ($url === '/' || $url === '/index.php') {
    require_once "controllers/homeController.php";
} else {
    http_response_code(404);
    echo "Page non trouvée.";
}