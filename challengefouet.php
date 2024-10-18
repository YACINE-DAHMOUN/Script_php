<?php
$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)]; // Cela permet de choisir une arme de manière aléatoire.
echo "the opponenetWeapon is : $opponentWeapon <br>";

switch($opponentWeapon) {
    case 'fists':
        $stevensonweapon = 'gun' ;
        break;
    case 'gun':
        $stevensonweapon = 'whip' ;
        break;
    case 'whip':
        $stevensonweapon = 'fists' ; 
        break;

}
echo "stevenson choisira : $stevensonweapon";
?>