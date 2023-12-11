<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php   
 

function occurence($str, $char){
    return substr_count($str, $char);
   
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $str = isset($_POST['texte']) ? $_POST['texte'] : '';
    $char = isset($_POST['caractere']) ? $_POST['caractere'] : '';

    
    $nombreOccurences = occurence($str, $char);

    
    echo "<p>Le nbr d'occurences de '$char' dans '$str' est : $nombreOccurences</p>";
}
?>

<form method="post" action="">

    <label for="texte">Texte :</label>
    <input type="text" name="texte" id="texte" value="<?php echo isset($str) ? : ''; ?>" required>

    <label for="caractere">Caractère :</label>
    <input type="text" name="caractere" id="caractere" value="<?php echo isset($chars) ?  : ''; ?>" required>

    <button type="submit">Compter les occurences</button>
</form>
</body>
</html>

<!--ou sans function systeme
$str="";
$char="";
$nombreOccurences= occurences($str, $char);
function occurences($str, $chr){
    $count = 0;
    for($i=0; $i<strlen($str); $i++){
        if ($str[$i]==$char){
            $count++;
    }
}
    return $count;
}
echo " le nbr d occurences de '$char' est de '$nombreOccurences'.";-->