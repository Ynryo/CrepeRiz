<?php

// Données des photos (à remplacer par une base de données plus tard)
$photos = [
    [
        'id' => 1,
        'filename' => 'enfants.jpeg',
        'title' => 'enfants heureux' ,
        'description' => 'On y ressort toujours content!'
    ],
    [
        'id' => 2,
        'filename' => 'bordMer.jpeg',
        'title' => 'Vue Restaurant',
        'description' => 'Vue imprenable sur le bord de mer'
    ],
    [
        'id' => 3,
        'filename' => 'produitFrais.jpg',
        'title' => 'Démarche écologique',
        'description' => 'Nos emballages recyclables et pratiques durables'
    ],
    [
        'id' => 4,
        'filename' => 'fait-maison.jpg',
        'title' => 'Préparation artisanale',
        'description' => 'Nos crêpes et galettes préparées sur place'
    ],
    [
        'id' => 5,
        'filename' => 'convivialite.jpg',
        'title' => 'Moments de convivialité',
        'description' => 'Notre terrasse accueillante pour partager un moment'
    ]
];

require_once __DIR__ . '/../views/phototheque.php';
