<?php
    $departements = [
        '02' => 'Aisne',
        '59' => 'Nord',
        '60' => 'Oise',
        '62' => 'Pas-de-Calais',
        '80' => 'Somme',
    ];
    // var_dump($departements);
    foreach ($departements as $element){
        echo ($element. '<br />');
    }
    foreach ($departements as $number=>$name){
        echo ('Le département ' .$name. ' a le numéro : ' .$number. '<br />');
    }

?>