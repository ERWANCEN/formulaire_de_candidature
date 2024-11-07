<?php
// UTILISATIONS DE GPT POUR "`^[A-Z][a-z]*( [A-Z][a-z]*)*$`" CAR JE N'ARRIVAIS PAS A GERER L'ESPACE comme dans "Da silva" par exemple
// ---------------------------------------------------------------------------------------------

function verificationPrenomNom($input) { // On crée une fonction verificationPrenomNom() qui prend en paramètre une chaîne de caractères
    if (preg_match("`^[A-Za-z ]*$`", $input)) { // On vérifie si la chaîne de caractères contient uniquement des lettres et des espaces
        return true; // Si la chaîne de caractères contient uniquement des lettres et des espaces, on retourne true
    } else {
        return false; // Sinon, on retourne false
    }
}
?>