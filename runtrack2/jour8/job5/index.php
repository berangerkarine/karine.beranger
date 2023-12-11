<!DOCTYPE html>
<html>
	<head>
		<title>Morpion</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<h1>jeu du Morpion </h1>

        <?php
session_start();
 

if(isset($_SESSION['nom1'], $_SESSION['nom2'], $_SESSION['grid'], $_SESSION['tour'])){
	$affichage = 'jeu';
 
	if(isset($_GET['ligne'], $_GET['colonne'])){
		$l = $_GET['ligne'];
		$c = $_GET['colonne'];
 
		if($_SESSION['grid'][$l][$c] != 0) exit('Petit farceur...'); 
		$_SESSION['grid'][$l][$c] = $_SESSION['tour'];
		$_SESSION['tour'] = ($_SESSION['tour'] == 1) ? 2 : 1; 
		header('location: ./index.php');
			exit;
	}
 
}else{
	if(isset($_POST['nom1'], $_POST['nom2'])){
		$_SESSION['nom1'] = $_POST['nom1'];
		$_SESSION['nom2'] = $_POST['nom2'];
		$_SESSION['tour'] = mt_rand(1, 2);
		$_SESSION['grid'] = [
			[0, 0, 0],
			[0, 0, 0],
			[0, 0, 0]
		];
		header('location: ./index.php');
			exit;
	}else{
		$affichage = 'accueil';
	}
}
switch($affichage){
    case 'jeu':
        // j affiche le jeu
        ?>
        <table></table>
        <?php
        break; //  break à la fin pour stopper la
    case 'accueil': 
        //le nom des joueurs
        ?>

        <form method="post">[]</form>
        <?php
        break;

}     ?>    
        
       
      <form method="post">
	<label>Joueur 1 : <input type="text" name="nom1"> </label>
	<label>Joueur 2 : <input type="text" name="nom2"> </label>
	<input type="submit" value="Commencer">
</form>
<table>
	<tr>
		<td><a href="?ligne=0&colonne=0">[]</a></td>
		<td><a href="?ligne=0&colonne=1">[]</a></td>
		<td><a href="?ligne=0&colonne=2">[]</a></td>
	</tr>
	<tr>
		<td><a href="?ligne=1&colonne=0">[]</a></td>
		<td><a href="?ligne=1&colonne=1">[]</a></td>
		<td><a href="?ligne=1&colonne=2">[]</a></td>
	</tr>
	<tr>
		<td><a href="?ligne=2&colonne=0">[]</a></td>
		<td><a href="?ligne=2&colonne=1">[]</a></td>
		<td><a href="?ligne=2&colonne=2">[]</a></td>
	</tr>
</table>
<table>
<?php
for($ligne = 0; $ligne < 3; $ligne++){
	echo '<tr>';
	for($colonne = 0; $colonne < 3; $colonne++){
	    echo '<td><a href="?ligne='.$ligne.'&colonne='.$colonne.'">[]</td>';
	}
	echo '</tr>';
}
?>
</table>  
<?php
function is_there_a_winner(){
	$grid = $_SESSION['grid'];
	// Vérifications sur les lignes et colonnes :
	for($i = 0;$i<3;$i++){
		if($grid[$i][0] == $grid[$i][1] && $grid[$i][1] == $grid[$i][2] && $grid[$i][0] != 0) return $grid[$i][0];
		if($grid[0][$i] == $grid[1][$i] && $grid[1][$i] == $grid[2][$i] && $grid[0][$i] != 0) return $grid[0][$i];
	}
 
	// vérifications sur les 2 diagonales : 
	if($grid[0][0] == $grid[1][1] && $grid[1][1] == $grid[2][2] && $grid[1][1] != 0) return $grid[1][1];
	if($grid[0][2] == $grid[1][1] && $grid[1][1] == $grid[2][0] && $grid[1][1] != 0) return $grid[1][1];
 
	// Vérification de match nul : est-ce que la grille est remplie N
	$nb0 = 0; // On compte les zéros restants
	for($i = 0;$i<3;$i++){
		for($j = 0;$j<3;$j++){
			if($grid[$i][$j]==0)
				$nb0++;
		}
	}
 
	if(!$nb0) return -1;
 
	return 0;
}
$winner = is_there_a_winner();
if($winner != 0){ // Il se passe quelque chose
	$affichage = 'resultats';
}else{
	// Vérifier si il y a un coup joué...
}

?> 
