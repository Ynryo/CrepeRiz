    <?php

    class CarteController
    {
        
        /**
         * Sert le fichier DOCX au navigateur (ouverture / téléchargement selon navigateur)
         */
        public function ouvrir(): void
        {
            // Chemin ABSOLU vers le doc (à adapter à ton arbo)
            $filePath = __DIR__ . '/../../public/Carte_Crepe-riz.docx';
    
            if (!is_file($filePath)) {
                http_response_code(404);
                echo "Carte introuvable.";
                return;
            }
    
           
    
            header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
            header('Content-Disposition: inline; filename="Carte_Crepe-riz.docx"');
            header('Content-Length: ' . filesize($filePath));
            header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
            header('Pragma: no-cache');
    
            readfile($filePath);
            exit;
        }
    }
    
    ?>