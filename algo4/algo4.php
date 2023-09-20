<?php
//écrire un algo pour trouver le n factoriel en maniére récursive

function fact($n)
{
    if ($n === 1) {     //le case de base
        return(1);      //la function s'arrete ici
    }
    else return($n * fact($n-1));    //le calcul du factoriel
}

echo(fact(6));



?>