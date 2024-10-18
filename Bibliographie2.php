<?php
$movie = [
    'Le Récupérateur' => [
        'Boris KArlof,', 'Henri Daniel,', 'Bela Lugosi.'
    ],
    'Le Club Du Suicide' => [
        "acteurs" =>'Oley Dahl,', 'Donatas Banionis,', 'Igor Dmitriev.' ,
    ] ,

    "Kidnapped" => [
        
       "acteur" => 'Michael Caine,', 'Laurence Douglas,', 'Donald Pleasure.'
    ] 
    ];
 //Movies & Actors
foreach ($movie as $key => $value) {
    echo  " Dans le film : $key, Les acteurs : <br> ";
    foreach($movie[$key] as $acteurs) {
        echo "$acteurs <br>";
    }
    echo "<br>";
    
  
}

?>