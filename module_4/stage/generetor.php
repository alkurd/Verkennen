<?php
require_once "db.php";
// echo("ik zit in de genertor");

$weekly_tasks = ['kamer opruimen','afwas','fitssen','gamen'];

for ($index = 0; $index < count($weekly_tasks); $index++)
addTask($weekly_tasks[$index],'weekly');
header('location: index.php');
// echo($index);