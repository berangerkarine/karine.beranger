<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
 
</head>
<style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            color: #333;
            margin-bottom: 30px;
        }

        .button {
            display: inline-block;
            padding: 15px 30px;
            margin: 10px;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .button-login {
            background-color: #3498db;
            color: #fff;
        }

        .button-signup {
            background-color: #2ecc71;
            color: #fff;
        }

        .button-admin {
            background-color: #e74c3c;
            color: #fff;
        }

        .button:hover {
            background-color: #555;
        }
    </style>
<body>
    <h1>Bienvenue sur le site</h1>

    <!-- Bouton de Connexion -->
    <a href="connexion.php" class="button button-login">Connexion</a>

    <!-- Bouton d'Inscription -->
    <a href="inscription.php" class="button button-signup">Inscription</a>

    <!-- Bouton d'Accès Administrateur -->
    <a href="connexion_admin.php" class="button button-admin">Accès Administrateur</a>
</body>
</html>

