<?php
// vérifie si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // vérifie si champ 'email' est rempli
    if (isset($_POST['email']) && !empty($_POST['email'])) {

        // configuration des informations de l'email
        $to = 'webmaster@example.com';  // adresse de réception pour le premier email
        $subject = 'Formulaire de candidature'; // sujet de l'email
        $message = "
            <h2>Voici la fiche du profil de la personne ayant postulé :</h2>
            <p><strong>Prénom :</strong> {$_POST['prenom']}</p>
            <p><strong>Nom :</strong> {$_POST['nom']}</p>
            <p><strong>Email :</strong> {$_POST['email']}</p>
            <p><strong>Téléphone :</strong> {$_POST['telephone']}</p>
            <p><strong>Service :</strong> {$_POST['service']}</p>
            <p><strong>Message de motivation :</strong> {$_POST['message']}</p>
            <p><strong>LinkedIn :</strong> {$_POST['linkedin']}</p>
            <p><strong>Portfolio :</strong> {$_POST['portfolio']}</p>
            <p><strong>Disponibilité :</strong> {$_POST['disponibilite']}</p>"; // message email

        // en-têtes pour envoyer l'email en HTML
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: webmaster@example.com' . "\r\n" .
                    'Reply-To: webmaster@example.com' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();

        // envoi de l'email et affichage du statut d'envoi
        if (mail($to, $subject, $message, $headers)) {
            echo "Email envoyé avec succès.";
        } else {
            echo "Erreur : l'email n'a pas pu être envoyé.";
        }
    } else {
        echo "Erreur : adresse email manquante.";
    }
}

// vérifie à nouveau si le formulaire a été soumis pour envoyer un second email à l'utilisateur
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Vérifie encore si le champ 'email' est rempli
    if (isset($_POST['email']) && !empty($_POST['email'])) {

        // Prépare un email de confirmation à envoyer à l'adresse de l'utilisateur
        $to = $_POST['email'];  // Utilise l'adresse email fournie par l'utilisateur
        $subject = 'Confirmation envoi candidature';
        $message = "Nous vous confirmons l'envoi de votre candidature à -webmaster-. <br>Nous reviendrons vers vous dès que possible. <br><br>Bien cordialement, <br><br>-webmaster";

        // En-têtes pour envoyer l'email en HTML
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: webmaster@example.com' . "\r\n" .
                    'Reply-To: webmaster@example.com' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();

        // Envoi de l'email et affichage du statut d'envoi
        if (mail($to, $subject, $message, $headers)) {
            echo "Email envoyé avec succès.";
        } else {
            echo "Erreur : l'email n'a pas pu être envoyé.";
        }
    } else {
        echo "Erreur : adresse email manquante.";
    }
}
?>