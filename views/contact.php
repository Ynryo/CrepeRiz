
<body>

    <h1>Contactez-nous</h1>

    <form action="../controllers/traitement_contact.php" method="post">
        
        <label for="nom">Nom :</label><br>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="email">Email :</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="sujet">Sujet :</label><br>
        <input type="text" id="sujet" name="sujet" required><br><br>

        <label for="message">Message :</label><br>
        <textarea id="message" name="message" rows="5" required></textarea><br><br>

        <button type="submit">Envoyer</button>

    </form>


    <img src="assets/images/Capture d'écran 2025-12-12 094549.png" alt="localisation">

</body>

