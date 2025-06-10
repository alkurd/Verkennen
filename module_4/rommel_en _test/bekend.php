<?php
    // echo $_POST;
    foreach($_POST as $key => $value){
        if (empty($value)){
            echo "Je hebt het veld $key niet ingevuld";
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usergegevens verwerken</title>
</head>
<body>
    <h1>Hello world!</h1>
    <form method="post" action="index.php">
        <label for="naam">Vul hier je naam in:</label>
        <input type="text" name="input_name" id="input_name">
        <br>
        <label for="leeftijd">Vul hier je leeftijd in:</label>
        <input id="leeftijd" name="leeftijd" type="number">
        <br>
        <label for="wachtwoord">Vul hier je wachtwoord in:</label>
        <input id="wachtwoord" name="wachtwoord" type="password">
        <br>
        <input type="submit" value="Verzend het formulier">
    </form>
</body>
</html>
