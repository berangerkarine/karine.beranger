<?php
if (isset($_POST['deco'])) {
    
    setcookie('prenom');
    header('Location: index.php');
    exit();
}
?>
