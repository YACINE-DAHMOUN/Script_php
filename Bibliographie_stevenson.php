<?php
    $titles = [
        "l'ile au trésor" => "1883" , //1st title 
        "heather Ale" => "1890" , // 2nd title
        "Enlevé !" => "1886" , //3rd tlte 
    ] ;
    asort($titles); // Trie par prdre croissant 
    foreach($titles as $key => $value) // Boucle pour chaque valeurs
        echo ("$value -" . $key . "<br>"); // affiche année et tire dans un ordre croissant des année de publication
?>