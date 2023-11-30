<?php
// Création d'une image de fond
/*$fond = imagecreatetruecolor(400, 400);

// Alloue les couleurs ici rose
$pink = imagecolorallocate($fond, 255, 105, 180);
//$white = imagecolorallocate($canvas, 255, 255, 255);
$green = imagecolorallocate($fond, 132, 135, 28);

// Dessine  rectangles, chacun avec sa couleur
imagerectangle($fond, 50, 50, 70, 60, $pink);
imagerectangle($fond, 100, 120, 75, 160, $green);

// Affichage et libération de la mémoire
header('Content-Type: image/jpeg');

imagejpeg($fond);
imagedestroy($fond);
?>*/
$largeur=20;
$hauteur=10;
?>
<div style="width: <?php echo $largeur?>px; height:<?php echo $hauteur ?>px; display: block; background-color: red;"></div>



