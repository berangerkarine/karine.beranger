<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ave caesar</title>
</head>
<body>

<?php
//pour info explode veut dire function explode(string $separator, string $string, int $limit = PHP_INT_MAX): string[] { }
//ma function pour mettre en gras
function gras($str) {
//unction explode(string $separator, string $string, int $limit = PHP_INT_MAX): string[] { }
    $mots = explode(' ', $str);
    foreach ($mots as &$mot) {

  // pour info      
   //function ctype_upper(string $text): bool { }     
 //function substr(string $string, int $offset, ?int $length): string { }
//la premiere lettre

        if (ctype_upper(substr($mot, 0, 1))) {
            $mot = '<b>' . $mot . '</b>';
        }
    }
//function implode(array|string $separator = "", ?array $array): string { }
    return implode(' ', $mots);
}

// ma function pour cesar
function cesar($str, $decalage = 2) {
    $resultat = '';
//function strlen(string $string): int { }

    for ($i = 0; $i < strlen($str); $i++) {
        $caractere = $str[$i];
     
        if (ctype_alpha($caractere)) {
            $minuscule = (ord($caractere) >= 97);
            $caractere = chr((ord($caractere) + $decalage - ($minuscule ? 97 : 65)) % 26 + ($minuscule ? 97 : 65));
        }
        $resultat .= $caractere;
    }
    return $resultat;
}


function plateforme($str) {
    $mots = explode(' ', $str);
    foreach ($mots as &$mot) {
        if (substr($mot, -2) === 'me') {
            $mot = $mot . '_';
        }
    }
    return implode(' ', $mots);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    $inputStr = isset($_POST['str']) ? $_POST['str'] : '';
    $selectedFunction = isset($_POST['fonction']) ? $_POST['fonction'] : '';

    
    switch ($selectedFunction) {
        case 'gras':
            $resultat = gras($inputStr);
            break;
        case 'cesar':
            $resultat = cesar($inputStr, 2); 
            break;
        case 'plateforme':
            $resultat = plateforme($inputStr);
            break;
        default:
            $resultat = $inputStr; 
            break;
    }
}
?> 


<form method="post" action="">
    <label for="str">Texte :</label>
    <input type="text" name="str" id="str" value="<?php echo isset($inputStr) ? htmlspecialchars($inputStr) : ''; ?>" required>
    
    <label for="fonction">Choisissez une transformation :</label>

    <select name="fonction" id="fonction">
        <option value="gras"> Mots en gras</option>
        <option value="cesar">César</option>
        <option value="plateforme">Ajouter "_" aux mots finissant par "me"</option>
    </select>
    
    <button type="submit">Appliquer</button>
</form> 
<?php

if (isset($resultat)) {
    echo '<p>Résultat : <span class="resultat">' . htmlspecialchars($resultat) . '</span></p>';
}
?>


</body>
</html>