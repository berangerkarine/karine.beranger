<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Administration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Page d'administration</h1>
    
</body>
</html>
<style>
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: lightblue;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

table {
    width: 80%;
    margin: 20px auto;
    border-collapse: collapse;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
}

th, td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: left;
}

th {
    background-color: #3498db;
    color: #fff;
}

td {
    background-color: #fff;
    transition: background-color 0.3s;
}

tr:hover td {
    background-color: #f4f4f4;
}

.button-logout {
    display: block;
    margin-top: 20px;
    padding: 10px 20px;
    text-decoration: none;
    background-color: #000;
    color: #fff;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.button-logout:hover {
    background-color: #333;
}
</style>

<?php
session_start();

// Vérifier si l'utilisateur est connecté et s'il a le rôle d'administrateur
if (isset($_SESSION["login"]) && $_SESSION["login"] === "admin") {
    // Connexion à la base de données
    $db = new mysqli("localhost", "root", "", "moduleconnexion");

    if ($db->connect_error) {
        die("La connexion à la base de données a échoué: " . $db->connect_error);
    }

    // Récupérer les informations des utilisateurs
    $query = "SELECT * FROM utilisateurs";
    $result = $db->query($query);

    if ($result->num_rows > 0) {
        // Afficher les informations des utilisateurs
        echo "<h2>Liste des utilisateurs</h2>";
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Login</th><th>Prénom</th><th>Nom</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["login"] . "</td>";
            echo "<td>" . $row["prenom"] . "</td>";
            echo "<td>" . $row["nom"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";

        // Bouton de déconnexion
        echo '<a href="index.php" class="button-logout">Déconnexion</a>';
    } else {
        echo "Aucun utilisateur trouvé.";
    }
    
// Détruire la session et rediriger vers la page d'accueil
session_start();
session_destroy();
header("Location: index.php");
exit();


    $db->close();
} else {
    // Rediriger l'utilisateur non autorisé vers la page de connexion
    header("Location: connexion.php");
    exit();
}
?>
