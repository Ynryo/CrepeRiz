<?php require_once __DIR__ . '/../views/header.php'; ?>

<section class="carte-section">
  <div class="carte-container">
    <h2>Notre Carte</h2>
    <p class="carte-description">Découvrez notre sélection de galettes et crêpes artisanales</p>

    <div class="carte-pdf-viewer">
      <iframe src="<?= $_ENV['BASE_URL'] ?>assets/documents/carte.pdf" title="Carte CrêpeRiz"></iframe>
    </div>

    <div class="carte-download">
      <a href="<?= $_ENV['BASE_URL'] ?>assets/documents/carte.pdf" download class="btn-download">
        Télécharger notre carte (PDF)
      </a>
    </div>
</section>

<section class="menu-du-jour">
  <div class="menu-du-jour-container">
    <h2>Menu du Jour</h2>
    <p class="menu-du-jour-subtitle">Notre suggestion gourmande du moment</p>

    <div class="menu-du-jour-content">
      <div class="menu-item">
        <span class="menu-item-label">Galette</span>
        <span class="menu-item-value">Complète (jambon, œuf, fromage)</span>
      </div>
      <div class="menu-item">
        <span class="menu-item-label">Crêpe</span>
        <span class="menu-item-value">Caramel beurre salé maison</span>
      </div>
      <div class="menu-item">
        <span class="menu-item-label">Boisson</span>
        <span class="menu-item-value">Cidre brut ou jus de pomme artisanal</span>
      </div>
      <div class="menu-price">
        <span>12,90 €</span>
      </div>
    </div>
  </div>
</section>