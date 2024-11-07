<?php
phpinfo(); 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assurez-vous que le champ email est bien rempli
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $to = $_POST['email'];
        $subject = 'Formulaire de candidature';
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
            <p><strong>Disponibilité :</strong> {$_POST['disponibilite']}</p>";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: erwancenac@gmail.com' . "\r\n" .
                    'Reply-To: erwancenac@gmail.com' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();

        if (mail($to, $subject, $message, $headers)) {
            echo "Email envoyé avec succès.";
        } else {
            echo "Erreur : l'email n'a pas pu être envoyé.";
        }
    } else {
        echo "Erreur : adresse email manquante.";
    }
}

    // $to      = '$_POST[\'email\']';
    // $subject = 'Confirmation d\'envoi de votre formulaire de candidature';
    // $message = 'Nous vous confirmons que votre candidature a bien été transmise à Florent L\'Hélias. <br>Nous vous remercions pour l\'intérêt que vous portez à notre entreprise, votre candidature sera analysée au plus vite. <br>Bien cordialement, <br>Flo Leplusbeau.';
    // $headers = 'From: webmaster@example.com' . "\r\n" .
    // 'Reply-To: webmaster@example.com' . "\r\n" .
    // 'X-Mailer: PHP/' . phpversion();

    // mail($to, $subject, $message, $headers);
 ?>