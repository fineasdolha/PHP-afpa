<?php
//écrire un algo pour le code fibonacci en maniére récursive
//code fibonacci = une suite d'entiers dans laquelle chaque terme est la somme des deux termes qui le précèden
function fibo($n)
{
    if ($n === 1) {     //le premier case de base qui nous va donner le premier terme de la suite
        return(0);
    }elseif ($n === 2) {    //le deuxieme case de base qui nous va donner le deuxieme terme de la suite
        return(1);
    }else {
        return(fibo($n-1) + fibo($n-2));    //le calcul de la suite fibonacci
    }
}

echo(fibo(8)); //le 8-tieme terme est 13


?>