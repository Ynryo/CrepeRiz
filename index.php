<?php
require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


$page = $_GET['page'] ?? 'acceuil';
// faire le switch après

switch($page){
    case 'acceuil':
        require_once __DIR__.'/controllers/homeController.php';


}


