<?php
//Écrire un algo qui retire un espace vide en fin de chaîne de caractère si il y en a un

$text = "   a ";
$numberOfLetters = strlen($text);
$counter = 0;
//echo("{$numberOfLetters}\r\n");
$testEmpty = " ";
for($i = $numberOfLetters-1; $i >= 0; $i-- ) {  //tester si le derneries caracteres sont vide
     if ($text[$i] == $testEmpty) {
        $counter++;    //comper combien espaces vide on a trouvé
    } elseif ($text[$i] != $testEmpty) { //si on tombe sur une lettre on sort la boucle
        $i=0;
    }
}

//echo("{$counter}\r\n");

if ($numberOfLetters != $counter) {  //verifier si on pas une chaine des espaces vides
    for ($i=0; $i <= $numberOfLetters-$counter ; $i++) {   //afficher tout sauf les dernieres espaces vides  
        echo($text[$i]);   
    }
} else {
    echo("empty");

}
?>