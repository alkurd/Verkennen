<?php
require_once 'db.php';

$task = getTaskById($_GET['task']);
?>
<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Task</title>
    </head>
    <body>
        <!-- <tabel>
            <tr>
                <th>id</th>
                <th>description</th>
                <th>remarks</th>
                <th>state</th>
            </tr>
            <tr>
                <td><?php echo $task['id'];?></td>
                <td><?php echo $task['des'];?></td>
                <td><?php echo $task['remarks'];?></td>
                <td><?php echo $task['state'];?></td>
            </tr>
</tabel> -->
        <p>id: <?php echo $task['id'];?></p>
        <p>description: <?php echo $task['des'];?></p>
        <p>remarks: <?php echo $task['remarks'];?></p>
        <p>state: <?php echo $task['state'];?></p>
</body>
</html>