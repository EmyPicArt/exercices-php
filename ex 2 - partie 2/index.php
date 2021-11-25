<?php

   $age = 19;
   $gender = 'Femme';
   if($gender == 'Homme' && $age>=18){
      echo 'Vous êtes un homme et vous êtes majeur';
   }elseif($gender == 'Homme' && $age<=18){
      echo 'Vous êtes un homme et vous êtes mineur';
   }
   elseif($gender == 'Femme' && $age>=18){
      echo 'Vous êtes une femme et vous êtes majeure';
   }
   elseif($gender == 'Femme' && $age<=18){
      echo 'Vous êtes une femme et vous êtes mineure';
   }
   ?>
   



