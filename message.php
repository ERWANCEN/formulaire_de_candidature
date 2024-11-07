<?php
function verificationMessage($message) { // On crée une fonction verificationMessage() qui prend en paramètre un message
    $longueur = strlen($message); // On récupère la longueur du message
    if ($longueur >= 20 && $longueur <= 200) { // On vérifie si la longueur du message est comprise entre 20 et 200 caractères
        return true; // Le message est valide
    } else {
        return false; // Le message est invalide
    }
}
?>