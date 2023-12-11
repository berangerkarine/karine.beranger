<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

function lettSpeak($str) {
    $result = '';

    for ($i = 0; $i < strlen($str); $i++) {
        $char = strtolower($str[$i]);

        if ($char == 'a') {
            $result .= '4';
        } elseif ($char == 'b') {
            $result .= '8';
        } elseif ($char == 'g') {
            $result .= '3';
        } elseif ($char == 'c') {
            $result .= '6';
        } elseif ($char == 'l') {
            $result .= '1';
        } elseif ($char == 's') {
            $result .= '5';
        } elseif ($char == 't') {
            $result .= '7';
        } else {
            $result .= $char;
        }
    }

    return $result;
}

$texteOriginal = "ohngvayutfgysssssssaool;l,jgbyftcftghyhbu";
$textLeet = lettSpeak($texteOriginal);

echo "Texte original : $texteOriginal<br>";
echo "Texte Leet Spek : $textLeet";
?>

</body>







