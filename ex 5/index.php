<?php
// déclarer une variable
    $answer = 'yes';

    // === vérifie légalité de la valeur et du type (string, int, bool...)
    if($answer === 'yes') {
    echo 'Vous avez répondu oui.';
    }
    else {
    echo 'Vous avez répondu non.';
    }

    if($answer === 'yes'){
        $message = 'Vous avez répondu oui.';
    } else {
        $message = 'Vous avez répondu non.';
    }
    echo $message;

    // ternaire l'équivalent de if else en une ligne : le "?" = if, ":" == sion voilà ce que tu fais
    $answer === 'yes' ? $message  = 'Vous avez répondu oui.' :  $message = 'Vous avez répondu non.';
?>