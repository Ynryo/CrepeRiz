<?php
require_once __DIR__ . '/vendor/autoload.php';


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// faire le switch après
switch (trim($path, '/')) {
    case 'accueil':
        require_once __DIR__ . '/controllers/homeController.php';
        break;
    case 'carte':
        require_once __DIR__ . '/controllers/carteController.php';
        break;
    case 'phototheque':
        require_once __DIR__.'/controllers/photothequController.php';
        break;
    case 'about':
        require_once __DIR__ . '/controllers/aboutController.php';
        break;
    case 'contact':
        require_once __DIR__ . '/controllers/contactController.php';
        break;
    default:
        require_once __DIR__ . '/controllers/homeController.php';
        break;
}

