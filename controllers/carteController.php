<?php

$action = $_GET['action'] ?? 'index';

/* =========================
   ACTION : afficher la carte
   ========================= */
if ($action === 'index') {

    // Jour de la semaine (1 = lundi, 7 = dimanche)
    $jour = (int) date('N');

    $menus = [
        1 => [
            'titre' => 'Menu du Lundi',
            'galette' => 'Galette Complète',
            'crepe' => 'Crêpe Beurre Sucre',
            'boisson' => 'Cidre doux',
            'prix' => '12,90 €'
        ],
        2 => [
            'titre' => 'Menu du Mardi',
            'galette' => 'Galette Forestière',
            'crepe' => 'Crêpe Chocolat Maison',
            'boisson' => 'Eau ou soda',
            'prix' => '13,50 €'
        ],
        3 => [
            'titre' => 'Menu du Mercredi',
            'galette' => 'Galette Paysanne',
            'crepe' => 'Crêpe Citron Sucre',
            'boisson' => 'Cidre doux',
            'prix' => '13,90 €'
        ],
        4 => [
            'titre' => 'Menu du Jeudi',
            'galette' => 'Galette Andouille',
            'crepe' => 'Crêpe Caramel Beurre Salé',
            'boisson' => 'Eau ou soda',
            'prix' => '14,50 €'
        ],
        5 => [
            'titre' => 'Menu du Vendredi',
            'galette' => 'Galette Saumon Fumé',
            'crepe' => 'Crêpe Banane Chocolat',
            'boisson' => 'Cidre brut',
            'prix' => '15,90 €'
        ],
        6 => [
            'titre' => 'Menu du Samedi',
            'galette' => 'Galette du Moment',
            'crepe' => 'Crêpe au choix',
            'boisson' => 'Cidre brut ou vin',
            'prix' => '16,90 €'
        ],
        7 => [
            'titre' => 'Menu du Dimanche',
            'galette' => 'Galette du Chef',
            'crepe' => 'Crêpe Gourmande',
            'boisson' => 'Boisson au choix',
            'prix' => '17,90 €'
        ],
    ];

    $menuDuJour = $menus[$jour];

    require_once __DIR__ . '/../views/carteView.php';
    exit;
}


/* =========================
   ACTION : ouvrir le document
   ========================= */
if ($action === 'ouvrir') {

    $filePath = __DIR__ . '/../assets/documents/Carte_Crepe-riz.docx';

    if (!is_file($filePath)) {
        http_response_code(404);
        echo 'Carte introuvable.';
        exit;
    }

    header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
    header('Content-Disposition: inline; filename="Carte_Crepe-riz.docx"');
    header('Content-Length: ' . filesize($filePath));

    readfile($filePath);
    exit;
}
