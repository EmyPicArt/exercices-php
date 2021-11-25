<?php
    $name = 'Noémie';
    echo 'Bonjour ' .$name. ' , comment vas-tu ?';
?>
<!-- Si on met du html il ne faut pas fermer la balise php -->
<p>Bonjour <?! $name ?> comment vas-tu ?</p>