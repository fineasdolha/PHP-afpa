<?php
//Écrire un algo qui retourne l'emplacement d'une lettre dans l'alphabet, sans utilisant le code ASCII. On tient pas compte de majuscule/minuscule

$lettre = "g";
$alphabet = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
$check = false;

for ($i=0; $i < count($alphabet); $i++) {     //chercher parmi les éléments du tableau si il y en a la lettre cherchée
    if ($lettre === $alphabet[$i]) {
        echo( "la lettre a l'indice : " . $i+1 );  //si la condition est verifiée afficher l'indice de i + 1 et changer la valeur de la variable check
        $check = true;
    }         
}

if ($check === false) {                 //verifier si on a pas introduie une non-lettre
    echo("introduir une lettre");
}



?>