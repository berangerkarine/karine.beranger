<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $prenom = $_POST["prenom"];

  
  if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = array();
  }

  array_push($_SESSION['prenoms'], $prenom);
}

header("Location: index.php");
?>
