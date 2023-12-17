<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $login = $_POST["login"];
    $password = $_POST["password"];

    // Vérifier l'authentification
    // Note: Vous devriez utiliser des requêtes préparées et stocker les mots de passe de manière sécurisée
    $db = new mysqli("localhost", "root", "", "moduleconnexion");

    if ($db->connect_error) {
        die("La connexion à la base de données a échoué: " . $db->connect_error);
    }

    $query = "SELECT * FROM utilisateurs WHERE login = '$login'";
    $result = $db->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if ($login === "admin" && $password === "admin") {
            // Authentification réussie pour l'administrateur
            $_SESSION["login"] = $login;
            header("Location: admin_process.php");
        } elseif (password_verify($password, $row["password"])) {
            // Authentification réussie pour les autres utilisateurs
            $_SESSION["login"] = $login;
            header("Location: profil.php");
        } else {
            if ($login === "admin") {
                // Affichage du message de fraude
                echo "<!DOCTYPE html>
                    <html lang='fr'>
                    <head>
                        <meta charset='UTF-8'>
                        <title>Tentative de Fraude</title>
                        <style>
                            body {
                                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                                background: #e74c3c;
                                color: #fff;
                                margin: 0;
                                padding: 0;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                height: 100vh;
                                flex-direction: column;
                                text-align: center;
                            }

                            h1 {
                                margin-bottom: 20px;
                            }

                            p {
                                margin-bottom: 30px;
                            }

                            .button {
                                padding: 15px 30px;
                                text-decoration: none;
                                font-size: 16px;
                                background-color: #c0392b;
                                color: #fff;
                                border-radius: 5px;
                                transition: background-color 0.3s;
                            }

                            .button:hover {
                                background-color: #a93226;
                            }
                        </style>
                    </head>
                    <body>
                        <h1>Tentative de Fraude Détectée</h1>
                        <p>Vous êtes suspecté de tentative de fraude. Vous serez banni.</p>
                        <a href='index.php' class='button'>Retour à la page d'accueil</a>
                    </body>
                    </html>";

                // Enregistrez cette tentative de fraude dans un journal ou une base de données si nécessaire
                exit();
            } else {
                // Mot de passe incorrect
                echo "Mot de passe incorrect.";
            }
        }
    }
}
?>
