<?php require_once __DIR__ . '/../views/header.php'; ?>

<p>
  <a href="/carte/ouvrir" target="_blank" rel="noopener">
    Afficher la carte complète
  </a>
</p>

<hr>

<h2><?= htmlspecialchars($menuDuJour['titre']) ?></h2>

<p>
  <strong>Galette :</strong><br>
  <?= htmlspecialchars($menuDuJour['galette']) ?>
</p>

<p>
  <strong>Crêpe :</strong><br>
  <?= htmlspecialchars($menuDuJour['crepe']) ?>
</p>

<p>
  <strong>Boisson :</strong><br>
  <?= htmlspecialchars($menuDuJour['boisson']) ?>
</p>

<p>
  <strong>Prix :</strong><br>
  <?= htmlspecialchars($menuDuJour['prix']) ?>
</p>

</body>

</html>