
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion Administrateur</title>
    
</head>
<body>
    <h1>Connexion Administrateur</h1>
    <form action="admin_process.php" method="post">
        <label for="login">Login:</label>
        <input type="text" name="login" required><br>

        <label for="password">Mot de passe:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Se connecter">
    </form>
</body>
</html>
