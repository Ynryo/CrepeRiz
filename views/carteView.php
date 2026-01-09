<?php require_once __DIR__ . '/partials/header.php'; ?>

<style>
    .carte-container {
        max-width: 700px;
        margin: 40px auto;
        padding: 30px;
        font-family: Arial, sans-serif;
    }

    .menu-box {
        border: 2px solid #c59d5f;
        border-radius: 12px;
        padding: 25px;
        background-color: #fffaf3;
        box-shadow: 0 8px 20px rgba(0,0,0,0.08);
        margin-bottom: 30px;
    }

    .menu-box h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #3b2f2f;
        letter-spacing: 1px;
    }

    .menu-item {
        margin: 15px 0;
        font-size: 1.1rem;
    }

    .menu-item span {
        font-weight: bold;
        color: #8b5e3c;
    }

    .pdf-button {
        display: block;
        width: fit-content;
        margin: 0 auto;
        padding: 14px 28px;
        background-color: #c59d5f;
        color: white;
        text-decoration: none;
        border-radius: 30px;
        font-size: 1rem;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .pdf-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(0,0,0,0.2);
    }
</style>

<div class="carte-container">

    <div class="menu-box">
        <h2>Menu du jour</h2>

        <div class="menu-item">
            <span>Entrée :</span> <?= htmlspecialchars($menuDuJour['entree']) ?>
        </div>

        <div class="menu-item">
            <span>Plat :</span> <?= htmlspecialchars($menuDuJour['plat']) ?>
        </div>

        <div class="menu-item">
            <span>Dessert :</span> <?= htmlspecialchars($menuDuJour['dessert']) ?>
        </div>
    </div>

    <a href="/carte-pdf.php" target="_blank" class="pdf-button">
        Voir la carte complète (PDF)
    </a>

</div>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
