<?php
function writeSecretSentence (string $phrase1, string $phrase2) 
{

    return ("$phrase1 s'incline face a $phrase2"); //retourne le résultat de la fontcion

}
$resultat = writeSecretSentence('la lune', 'au feu');
echo $resultat; // Affiche la lune s'incline face au feu
?>