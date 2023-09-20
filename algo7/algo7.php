<?php
// VARIABLES
//
$argentClient = 70;

$prixDeVente = 50;

$tableauArgent = array(50,20,10,5);
$tableauPieces = array(2,1,0.5,0.2,0.1,0.05,0.01);
$tableauCaisseBillets = array(1,4,6,5);
$tableauCaissePieces = array(10,20,9,5,9,9,7);
$tableauResultat = array();
$tableauResultatPieces = array();
if($prixDeVente > $argentClient){
    echo("pas assez");
} elseif ($prixDeVente == $argentClient) {
    echo("pas de monnaie");
}
$monnaie =  $argentClient - $prixDeVente;
$whole = floor($monnaie);
$fraction = ($monnaie - $whole);
$longArgent = count($tableauArgent);
$longPieces = count($tableauPieces);
if($monnaie > 0) {
    
    for ($i=0; $i < $longArgent; $i++) { 
        $billet = $tableauArgent[$i];
        $tableauResultat[$i] = floor($whole / $billet);
        if ($tableauCaisseBillets[$i] >= $tableauResultat[$i] && $whole >= $tableauArgent[$i]) {
            $tableauCaisseBillets[$i] = $tableauCaisseBillets[$i] - $tableauResultat[$i];
            $whole = $whole - $tableauArgent[$i] * $tableauResultat[$i];
            echo("{$tableauResultat[$i]} billets de {$tableauArgent[$i]} \r\n");
        }elseif ($tableauCaisseBillets[$i] < $tableauResultat[$i])  {
            $whole = $whole - $tableauArgent[$i] * $tableauCaisseBillets[$i];
            echo("{$tableauCaisseBillets[$i]} billets de {$tableauArgent[$i]} \r\n");
            $tableauCaisseBillets[$i] = 0;
        }
        }
} 
$fraction = $fraction + $whole;
if ($fraction != 0) { 
    for ($i=0; $i < $longPieces; $i++) { 
        $pieces = $tableauPieces[$i];
        $tableauResultatPieces[$i] = floor($fraction / $pieces); 
        if ($tableauCaissePieces[$i] >= $tableauResultatPieces[$i] && $fraction >= $tableauPieces[$i])   {
            $tableauCaissePieces[$i] = $tableauCaissePieces[$i] - $tableauResultatPieces[$i];
            $fraction = $fraction - $tableauPieces[$i] * $tableauResultatPieces[$i];
            echo("{$tableauResultatPieces[$i]} pieces de {$tableauPieces[$i]} \r\n");
        }elseif ($tableauCaissePieces[$i] < $tableauResultatPieces[$i])  {
            $fraction = $fraction - $tableauPieces[$i] * $tableauCaissePieces[$i];
            echo("{$tableauCaissePieces[$i]} pieces de {$tableauPieces[$i]} \r\n");
            $tableauCaissePieces[$i] = 0;
    }
    }
}

?>