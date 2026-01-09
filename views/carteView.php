<?php require_once __DIR__ . '/../views/header.php'; ?>

<!-- Section Carte PDF -->
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
  </div>
</section>