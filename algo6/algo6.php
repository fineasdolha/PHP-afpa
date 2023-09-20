<?php
//conjecture de Syracuse, encore appelée conjecture de Collatz
//l'hypothèse mathématique selon laquelle la suite de Syracuse de n'importe quel entier strictement positif atteint 1
//si n est pair, on le divise par 2
//si n est impair, on le multiplie par 3 et l'on ajote 1
function syracuse($n)
{
    if ($n === 1) {
        return(1);  //le case de base
    } elseif ($n%2 === 0) { //verifier si n est divisble par 2 ou pas pour savoir s'il est pair ou impair
        return (syracuse($n/2));
    } elseif ($n%2 != 0) {
        return(syracuse($n*3 + 1));
    }
}
echo(syracuse(9875766367)); //on est arivé à 1
?>