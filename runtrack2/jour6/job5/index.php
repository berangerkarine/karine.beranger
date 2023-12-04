<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire avec Styles</title>
</head>
<body>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $style = $_POST['style'];
        
        if ($style == "style1") {
            echo "<link rel = 'stylesheet' type ='text/css' href='style1.css' id='style'>";
        } elseif ($style == "style2") {
            echo "<link rel = 'stylesheet' type ='text/css' href='style2.css' id='style'>";
        }elseif($style == "style3") {
            echo "<link rel = 'stylesheet' type ='text/css' href='style3.css' id='style'>";
        }
    }
    ?>

    <form method="post"action="">

        <label for="style">Choisissez un style :
        <select name="style" id="style">
            <option value="style1">Style 1</option>
            <option value="style2">Style 2</option>
            <option value="style3">Style 3</option>
        </select>
        </label>
        <button type="submit"> Appliquer le style</button>
    </form>

</body>
</html>
