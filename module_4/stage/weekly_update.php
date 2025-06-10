<?php
require_once 'db.php';
?>
<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name="viewport" content='width=device-width, initial-scale=1.0'>
        <title>Task</title>
    </head>
    <body>
    <h2> Wijzig sate</h2>
    <form action="updateSaveWeekly.php "method="get">
        <p>state: <input type="number" name="state" value="<?php echo $task['state'];?>"></p>
        <input type="submit" name="submit" value="opslaan">
</form>