<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Profil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        form {
            width: 300px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Modifier le profil</h1>
    <?php
        session_start();
        if(isset($_SESSION["login"])) {
            // Récupérer les informations actuelles de l'utilisateur depuis la base de données
            $login = $_SESSION["login"];
            $db = new mysqli("localhost", "root", "", "moduleconnexion");

            if ($db->connect_error) {
                die("La connexion à la base de données a échoué: " . $db->connect_error);
            }

            $query = "SELECT * FROM utilisateurs WHERE login = '$login'";
            $result = $db->query($query);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $prenom = $row["prenom"];
                $nom = $row["nom"];
            } else {
                echo "Utilisateur non trouvé.";
            }

            $db->close();
    ?>
    <form action="profil_process.php" method="post">
        <label for="login">Login:</label>
        <input type="text" name="login" value="<?php echo $login; ?>" readonly><br>

        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom" value="<?php echo $prenom; ?>"><br>

        <label for="nom">Nom:</label>
        <input type="text" name="nom" value="<?php echo $nom; ?>"><br>

        <input type="submit" value="Enregistrer les modifications">
    </form>
    <?php
       
          // Bouton de déconnexion
          echo '<a href="index.php" class="button button-logout">Déconnexion</a>';
        } else {
            echo "Vous n'êtes pas connecté.";
        } 
           
    ?>
</body>
</html>
