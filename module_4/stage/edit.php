<?php
require_once "db.php";

$task = getTaskById($_GET['task']);

?>
<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name="viewport" content='width=device-width, initial-scale=1.0'>
        <title>Task</title>
    </head>
    <body>
        <h2> Wijzig taak</h2>
        <form action="editSave.php "method="get">
            <p>id: <?php echo $task['id']; ?></p>
            <p>description: <input name="des" value="<?php echo $task['des'];?>"></p>
            <p>remarks: <textarea name="remarks" ><?php echo $task['remarks'];?></textarea></p>
            <p>state: <input type="text" name="state" value="<?php echo $task['state'];?>"></p>
            <input type="hidden" name="id" value = "<?php echo $task['id'];?>">
            <input type="submit" name="submit" value="opslaan">
</form>
</body>
</html>