<?php

function afficherCarte(){

    $file = "/assets/documents/Carte_Crepe-riz.docx";

    if (!file_exists($file)) {
            http_response_code(404);
            echo "Carte indisponible.";
            return;
        }

        header("Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document");
        header("Content-Disposition: inline; filename=\"Carte_Crepe-riz.docx\"");
        header("Content-Length: " . filesize($file));

        readfile($file);
        exit;
    }

