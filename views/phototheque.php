<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photothèque - La Crêpe Dorée</title>
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL']; ?>assets/css/globals.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL']; ?>assets/css/header.css">
    <style>
        .phototheque {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .phototheque h1 {
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 10px;
            color: #333;
        }

        .phototheque .subtitle {
            text-align: center;
            font-size: 1.1em;
            color: #666;
            margin-bottom: 40px;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            background-color: #f5f5f5;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            aspect-ratio: 1 / 1;
        }

        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .gallery-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .image-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, transparent 100%);
            color: white;
            padding: 30px 20px 20px;
        }

        .image-overlay h3 {
            margin: 0 0 10px 0;
            font-size: 1.3em;
        }

        .image-overlay p {
            margin: 0;
            font-size: 0.9em;
            opacity: 0.9;
        }

        .no-photos {
            grid-column: 1 / -1;
            text-align: center;
            padding: 40px;
            color: #999;
            font-size: 1.1em;
        }

        @media (max-width: 768px) {
            .phototheque h1 {
                font-size: 1.8em;
            }

            .gallery {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 15px;
            }
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>

    <section class="phototheque">
        <h1>Photothèque</h1>
        <p class="subtitle">Découvrez nos plus belles créations et notre cadre accueillant</p>

        <div class="gallery">
            <?php if (!empty($photos)): ?>
                <?php foreach ($photos as $photo): ?>
                    <div class="gallery-item">
                        <img src="<?php echo $_ENV['BASE_URL']; ?>/assets/images/<?php echo htmlspecialchars($photo['filename']); ?>" 
                             alt="<?php echo htmlspecialchars($photo['title']); ?>"
                             class="gallery-image">
                        <div class="image-overlay">
                            <h3><?php echo htmlspecialchars($photo['title']); ?></h3>
                            <p><?php echo htmlspecialchars($photo['description']); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="no-photos">Aucune photo disponible pour le moment.</p>
            <?php endif; ?>
        </div>
    </section>
</body>

</html>
