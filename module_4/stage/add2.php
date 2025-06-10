<?php
require_once "db.php";
if (isset($_GET['submit'])){
    $des = $_GET['des'];
    $remarks = $_GET['remarks'];
    addTask($des, $remarks);
    // echo 'toegevoegd';
    header('Location: index.php');
}

?>
// var_dump($_GET);