<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    // Note: Vous devriez utiliser des requêtes préparées et effectuer une validation appropriée
    $login = $_SESSION["login"];
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];

    // Mettre à jour les informations dans la base de données
    $db = new mysqli("localhost", "root", "", "moduleconnexion");

    if ($db->connect_error) {
        die("La connexion à la base de données a échoué: " . $db->connect_error);
    }

    $query = "UPDATE utilisateurs SET prenom = '$prenom', nom = '$nom' WHERE login = '$login'";

    if ($db->query($query) === TRUE) {
        echo "Modification du profil réussie.";
    } else {
        echo "Erreur lors de la modification du profil: " . $db->error;
    }

    $db->close();
}
?>
