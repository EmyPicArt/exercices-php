<?php
    $chaine = 'Bonjour à tous';
    $chaine2 = 'Comment ça va ?';

    function bonjour ($paramchaine, $paramchaine2){
// Concaténation avec . . 
        return $paramchaine. ' ' .$paramchaine2;
    }
    // je peux echo de 'bonjour comment ça va ?'  autant de fois que nécessaire en appelant cette fonction
   echo  bonjour($chaine,$chaine2);
    

?>