<?php
$characters = [
    "Dahmoun Yacine" => [
        "city" => "Paris",
        "weapon" => "char",
    ],
    "Negan" => [
        "city" => "The Sanctuary",
        "weapon" => "Lucille"
    ],
    "Daryl" => [
        "city" => "Alexandria",
        "weapon" => "crossbow"
    ],
    "Ezekiel" => [
        "city" => "The Kingdom",
        "weapon" => "Shiva"
    ]
];

echo $characters["Dahmoun Yacine"]["city"];
echo '</br>';
print $characters["Dahmoun Yacine"]["weapon"];
echo '<br>';


//teste var_dum avec xdebug

var_dump($characters);
?> 