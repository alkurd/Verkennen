<?php
require_once "db.php";
$tasks = getAllTasks();
?>
<head>
  <link rel="stylesheet" href="styleSheet.css">
</head>

<h1> Taakjes voor mij </h1>

<table>
<?php
foreach ($tasks as $task) {
?>
<tr>
  <td><?php echo $task['des'];?></td>
  <td><?php echo $task['remarks'];?></td>
  <td><a href="view.php?task=<?= $task['id'];?>">View</a></td>
  <td><a href='delete.php?task=<?= $task['id'];?>'>verwijder</a></td>
  <td><a href='edit.php?task=<?= $task['id'];?>'>Edit</a></td>

  
</tr>
<?php
}
?>

</table>

<h2>wekelijke taken<h2>
  <a href='generetor.php?'> genereren</a>
  <a href='claen.php?'> verwijderen</a>
  <a href='weekly_update.php?'> weekly_update</a>

<h2>Nieuw taak</h2>
<form action='add2.php' method='get'>
  <div>
    <label>description</label><input name='des' value='opruimen van'/>
</div>
<div>
  <label>remarks</lebel><textarea name='remarks'></textarea>
</div>
<input type="submit" name="submit" value="toevogen">
</form>





