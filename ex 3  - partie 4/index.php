<?php
    $entier1 = 10;
    $entier2 = 10;

// Je nomme ma fonction "compare" et je lui attribue 2 paramètres ("$paramEntier1 et $paramEntier2")
    function compare ($paramEntier1, $paramEntier2){
        // Si $entier1 est plus grand que $entier2 alors je retourne '+grand'
        if($paramEntier1 > $paramEntier2) {
            return 'Le premier nombre est le plus grand';
        }elseif ($paramEntier1 < $paramEntier2){
            return 'Le premier nombre est le plus petit';
        }else {
            return 'Les deux nombres sont identiques';
        };
    }
    // je crée une variable résultat et je récupére ma fonction et mes nombres
    $result =  compare ($entier1, $entier2);
    // j'affiche le résultat
    echo $result;



// function calcul($paramEntier1, $paramEntier2){
//     return ($paramEntier1 + $paramEntier2);
// }
// $result = calcul ($entier1, $entier2);
// echo $result;
?>