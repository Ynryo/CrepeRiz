<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Crêpe-riz — Carte</title>
</head>
<body>

<h1>Crêpe-riz</h1>

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

