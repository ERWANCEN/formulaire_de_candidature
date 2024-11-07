<?php
function verificationDate($date) { // On crée une fonction verificationDate() qui prend en paramètre une date
    $dateActuelle = date("Y-m-d"); // On récupère la date actuelle
    return $date >= $dateActuelle; // On retourne true si la date fournie est supérieure ou égale à la date actuelle, sinon on retourne false
}
?>