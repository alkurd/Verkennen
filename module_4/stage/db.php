<?php

$servername = "db:3306";
$username = "root";
$password = "mysql";

function connect($servername,$username,$password){
    try {
        $connection = new PDO("mysql:host=$servername;dbname=work", $username, $password);
        // set the PDO error mode to exception
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully<br>";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    
    }
    return $connection;
}
function getAllTasks() {
    $sql = 'SELECT * FROM tasks';
    $connection = $GLOBALS['connection'];
    $statement = $connection->prepare($sql);
    $statement->execute();
    $tasks = $statement->fetchAll();
    return $tasks;
}
function getTaskById($id){
    
    $sql = 'SELECT * FROM `tasks` WHERE `id` = :id';
    $connection = $GLOBALS['connection'];
    $statement = $connection->prepare($sql);
    $statement ->bindParam(':id', $id);
    $statement->execute();
    $tasks = $statement->fetch();
    
    return $tasks;
    
    
}
function deleteweeklyTask(){
    $sql = "DELETE FROM `tasks` WHERE `remarks` = 'weekly'";
    $connection = $GLOBALS['connection'];
    $statement = $connection->prepare($sql);
    // $statement ->bindParam(':id', $id);
    $statement->execute();
}
function addTask($des, $remarks){
    $sql = 'INSERT INTO `tasks` (`des`, `remarks`) VALUES (:des, :remarks)';
    $connection = $GLOBALS['connection'];
    $statement = $connection->prepare($sql);
    $statement ->bindParam(':des', $des);
    $statement ->bindParam(':remarks', $remarks);
    $statement->execute();
}
function deleteTaskById($id){
    $sql = 'DELETE FROM `tasks` WHERE `id` = :id';
    $connection = $GLOBALS['connection'];
    $statement = $connection->prepare($sql);
    $statement ->bindParam(':id', $id);
    $statement->execute();
}
function updateTask($id,$des, $remarks){
    $sql = "UPDATE  `tasks` SET `des` = :des, `remarks` = :remarks WHERE `id` = :id;";
    
    $connection = $GLOBALS['connection'];
    $statement = $connection->prepare($sql);
    $statement ->bindParam(':des', $des);
    $statement ->bindParam(':remarks', $remarks);
    $statement->bindparam(':id', $id);
    $statement->execute();
}
function updateWeeklyStatus($state){
    $sql = "UPDATE  `tasks` SET `state` = :state WHERE `remarks` = 'weekly'";
    $connection = $GLOBALS['connection'];
    $statement = $connection->prepare($sql);
    $statement ->bindParam(':state', $state);
    $statement->execute();
}

$connection = connect($servername,$username,$password);

