<?php
require_once 'db.php';
deleteTaskById($_GET['task']);
header('location: index.php');