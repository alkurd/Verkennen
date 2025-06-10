<?php
// var_dump($_GET);
require_once "db.php";
if (isset($_GET['submit'])){
    $id = $_GET['id'];
    $des = $_GET['des'];
    $remarks = $_GET['remarks'];
    updateTask($id,$des, $remarks);
    // echo 'toegevoegd';
    header('Location: index.php');
}

?>