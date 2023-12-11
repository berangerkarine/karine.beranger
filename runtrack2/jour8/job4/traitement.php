<?php
if (isset($_POST['connexion'])) {
    $prenom = $_POST['prenom'];

  
    setcookie('prenom', $prenom); 
    header('Location: index.php');
    exit();
}
?>

