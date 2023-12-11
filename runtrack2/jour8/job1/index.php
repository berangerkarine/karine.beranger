<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookies</title>
</head>
<body>
<style>
form {
    max-width: 400px;
    margin: 0 auto;
}
label {
    display: block;
    margin-bottom: 8px;
}
input,
textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
}
button {
    background-color: #4caf50;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
table{
    background-color: pink;
}
</style>

<body>
<?php

   

    if (isset($_COOKIE)){
        setcookie('nbvisite', $_COOKIE['nbvisite'] + 1);
    
        echo 'Vous avez visité' , $_COOKIE['nbvisite'] +1;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        
        setcookie('nbvisite', $_COOKIE['nbvisite'] = -1);
        header("Location:" .$_SERVER['index.php']);
        exit();
        
    }
    if (isset($_COOKIE['cookie'])) {
        foreach ($_COOKIE['cookie'] as $name => $value) {
            $name = htmlspecialchars($name);
            $value = htmlspecialchars($value);
            echo "$name : $value <br />\n";
        }
    }
    ?>
       
<div class="formulaire">

<form method="POST">

    <label for="reset">reset :</label>
    <button type="submit">RESET</button>

</form>
</div>
</body>
</html> 
