<?php
// AIDE AVEC GPT POUR CETTE PARTIE CAR SA MA MIS UNE ERREUR DANS L'INDEX.PHP
// ALORS QUE Y'AVAIT PAS D'ERREUR 
function verification($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}
// -----------------------------------------------------------------------------------

function verificationSpam($email) { // On crée une fonction verificationSpam() qui prend en paramètre une adresse email
    $spam = ['@yopmail.fr', '@mail.ru', '@10minutemail.com', '@temp-mail.org', '@mailinator.com', '@guerrillamail.com', '@trashmail.com']; // Liste des domaines de spam
    foreach ($spam as $spammer) { // On parcourt la liste des domaines de spam
        if (strpos($email, $spammer) !== false) { // On vérifie si le domaine de spam est dans l'email fourni
            return true; // Si un domaine de spam est trouvé, on retourne true (indiquant que c'est un spam)
        }
    }
    return false;
}
?>