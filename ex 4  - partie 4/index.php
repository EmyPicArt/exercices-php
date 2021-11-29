<?php
    $name = 'Doe';
    $firstName = 'John';
    $age = 20;

function identity ($paramName, $paramFirstName, $paramAge){
    return $paramName; $paramFirstName; $paramAge;
}
    echo 'Bonjour '.$firstName. ' ' .$name. ' tu as ' .$age. ' ans';

?>