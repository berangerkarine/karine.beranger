<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
    
</head>
<body>
<style>
     body {
      font-family: Arial, sans-serif;
      max-width: 400px;
      margin: 20px auto;
    }
    form {
      margin-bottom: 20px;
    }
    #sub {
        background-color: red ;
        border-radius: 25%;
    }
</style>
<?php
   
    if(isset($_COOKIE['prenom'])) {
        echo '<p>Bonjour ' . $_COOKIE['prenom'] . ' !</p><br/>';
        echo '<form action="logout.php" method="post">';
        echo '<input type="submit" value="Déconnexion" name="deco">';
        echo '</form>';
    } else {
        echo '<form action="traitement.php" method="post">';
        echo '<label for="prenom">Prénom:<br/></label>';
        echo '<br/><input type="text" id="prenom" name="prenom" required><br/>';
        echo '<br/><input id="sub" type="submit" value="Connexion" name="connexion">';
        echo '</form>';
    }
?>

</body>
</html>


