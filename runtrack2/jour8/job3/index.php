<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: Arial, sans-serif;
      max-width: 400px;
      margin: 20px auto;
    }
    form {
      margin-bottom: 20px;
    }
    ul {
      
      padding: 0;
    }
    button{
        background-color: red ;
        border-radius: 25%;
    }
  </style>

  <title>prenom</title>
</head>

<body>

  <h2>Ajouter un prénom</h2>

  <form action="traitement.php" method="post">
    <label for="prenom">Prénom:</label>
    <input type="text" id="prenom" name="prenom" required>
    <button type="submit">Ajouter</button>
  </form>

  <h2>Liste des prénoms</h2>
  <ul>
    <?php
      session_start();
    
      if (isset($_SESSION['prenoms']) && is_array($_SESSION['prenoms'])) {
        foreach ($_SESSION['prenoms'] as $prenom) {
          echo "<li>$prenom</li>";
        }
      }
    ?>
  </ul>

  <form action="reset.php" method="post">
    <button type="submit">Réinitialiser</button>
  </form>

</body>
</html>
