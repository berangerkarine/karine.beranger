<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $login = $_POST["login"];
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Vérifier si les mots de passe correspondent
    if ($password != $confirm_password) {
        echo "Les mots de passe ne correspondent pas.";
        // Gérer cette erreur de manière appropriée (redirection vers le formulaire d'inscription, par exemple)
    } else {
        // Hasher le mot de passe (pour des raisons de sécurité)
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insérer les données dans la base de données
        // Note: Vous devriez utiliser des requêtes préparées pour éviter les attaques par injection SQL
        $db = new mysqli("localhost", "root", "", "moduleconnexion");

        if ($db->connect_error) {
            die("La connexion à la base de données a échoué: " . $db->connect_error);
        }

        $query = "INSERT INTO utilisateurs (login, prenom, nom, password) VALUES ('$login', '$prenom', '$nom', '$hashed_password')";

        if ($db->query($query) === TRUE) {
            echo "Inscription réussie. Vous pouvez vous connecter <a href='connexion.php'>ici</a>.";
        } else {
            echo "Erreur lors de l'inscription: " . $db->error;
        }

        $db->close();
    }
}
?>
