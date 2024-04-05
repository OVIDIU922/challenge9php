<?php
// Récupération des données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$sujet = $_POST['sujet'];
$message = $_POST['message'];

// Vérification des champs requis
if (empty($nom) || empty($prenom) || empty($email) || empty($telephone) || empty($sujet) || empty($message)) {
    // Affiche un message d'erreur
    echo "Tous les champs sont obligatoires.";
} else {
    // Vérification du format de l'e-mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "L'adresse e-mail n'est pas valide.";
    } else {
        // Toutes les données sont correctes, affiche le message de remerciement
        header('Location: thanks.php');
        exit;
    }
}
?>

