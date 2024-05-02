<?php
    // echo $_POST;
    foreach($_POST as $key => $value){
        echo $value;
        if ($value == ''){
            echo 'je hebt het $key veld niet ingevuld';
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>user Dateverwerken</title>
    </head>
    <body>
        <h1>hello world!</h1>
        <from method="post" action='index.php'>
            <label for="naam"> vul heir je naam </label>
            <input type="text" name="input_name" id="input_name" >
            <br>
            <label for="leeftijd"> vul heir je leeftijd </label>
            <input id='leeftijd' name='leeftijd' type='number'>
            <br>
            <lebel for="wachtwoord">vul hier je wachtwoord in </lebel>
            <input id='wachtwoord' name='wachtwoord' type='password'>
            <br>
            <input type="submit" value="verzend het formulier">
        </from>
    </body>
</html>
