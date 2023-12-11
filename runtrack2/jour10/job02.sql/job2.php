<?php
// Paramètres de connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$motDePasse = "";
$baseDeDonnees = "jour9";

// Connexion à la base de données
$connexion = new mysqli($serveur, $utilisateur, $motDePasse, $baseDeDonnees);

// Vérifier la connexion
if ($connexion->connect_error) {
    die("Échec de la connexion à la base de données : " . $connexion->connect_error);
}

// Requête SQL pour récupérer toutes les informations de la table 'etudiants'
$sql = "SELECT nom, capacite FROM salles";

// Exécution de la requête
$resultat = $connexion->query($sql);

// Vérifier si la requête a réussi
if ($resultat) {
    // Affichage du tableau HTML
    echo "<table border='1'>";
    
    // Affichage de la première ligne avec les noms des champs (thead)
    echo "<thead><tr>";
    while ($champ = $resultat->fetch_field()) {
        echo "<th>{$champ->name}</th>";
    }
    echo "</tr></thead>";
    
    // Affichage des données (tbody)
    echo "<tbody>";
    while ($ligne = $resultat->fetch_assoc()) {
        echo "<tr>";
        foreach ($ligne as $valeur) {
            echo "<td>$valeur</td>";
        }
        echo "</tr>";
    }
    echo "</tbody>";
    
    // Fermeture du tableau
    echo "</table>";

    // Libérer le résultat de la mémoire
    $resultat->free();
} else {
    // En cas d'erreur dans la requête
    echo "Erreur dans la requête : " . $connexion->error;
}

// Fermeture de la connexion à la base de données
$connexion->close();
?>
