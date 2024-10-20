<?php
// Vérifier que les données sont envoyées via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $fname = htmlspecialchars($_POST['user_fname']); // Nom
    $lname = htmlspecialchars($_POST['user_lname']); // Nom
    $email = htmlspecialchars($_POST['user_email']); // Courriel
    $phone = htmlspecialchars($_POST['user_phone_number']); // Numéro de téléphone
    $message = htmlspecialchars($_POST['user_message']); // Message
    $subject = htmlspecialchars($_POST['Sujet']); // Sujet sélectionné

    // Afficher les informations récupérées
    echo "<p>Merci : $fname , $lname  de nous avoir contacté a propos  de \"$subject\" !</p><br>";
    echo "<p>Un de nos conseillé vous contactera soit a l'adresse :" . $email . " ou par téléphone au " . $phone . " dans les plus bref délais pour traiter votr demande : <br> $message  </p>";
    
} else {
    echo "Aucune donnée soumise.";
}
if (empty($_POST["user_fname"]) || empty($_POST["user_email"]) || empty("user_lname") || empty("user_phone number")) {
    echo "Tous les champs sont requis.";
} elseif (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    echo "Format d'e-mail invalide.";
}