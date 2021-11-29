<?php
  $name = 'Doe';
  $firstName = 'John';
  $age = 20;  

function identity ($paramName, $paramFirstName, $paramAge){
    return 'Bonjour '  .$paramFirstName. ' ' .$paramName. ' tu as ' .$paramAge. ' ans';
}

// appeler dans un écho la fonction par son nom et selectionner les variables
    echo identity ($name, $firstName, $age);

?>