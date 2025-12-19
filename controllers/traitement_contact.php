<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Sécurisation des données
    $nom     = htmlspecialchars(trim($_POST['nom']));
    $email   = htmlspecialchars(trim($_POST['email']));
    $sujet   = htmlspecialchars(trim($_POST['sujet']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Vérification basique
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Adresse email invalide.");
    }

    // Construction de l'email
    $to = "creperiz@gmail.com"; 
    $subject = "Nouveau message depuis le formulaire : $sujet";

    $body = "
        Nouveau message envoyé depuis votre site web :

        Nom : $nom
        Email : $email
        Sujet : $sujet

        Message :
        $message
    ";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Retour de l'envoie du mail
    if (mail($to, $subject, $body, $headers)) {
        echo "Message envoyé avec succès !";
    } else {
        echo "Erreur lors de l'envoi du message.";
    }

} else {
    echo "Méthode non autorisée.";
}

require_once __DIR__.'/../views/contact.php';
?>