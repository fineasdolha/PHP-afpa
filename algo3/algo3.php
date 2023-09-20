<?php
//Écrire un algorithme de tri à bulle

$tableau = array('z','b','c','e','d');
$tableausecundaire = array();
$check = false;
$size = 0;



while ($check != true) {
    $check = true;
    $size = count($tableau);
    for ($i=0; $i < $size - 1; $i++) { 
        $currentLetter = $tableau[$i];
        $nextLetter = $tableau[$i+1];
        if ($currentLetter > $nextLetter) {
            $tableau[$i] = $nextLetter;
            $tableau[$i+1] = $currentLetter;
            $check = false;
        }
    }
}


 foreach ($tableau as $letter) { 
     echo($letter);
 
 }




?>