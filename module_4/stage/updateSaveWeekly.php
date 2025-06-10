<?php
require_once 'db.php';

if (isset($_GET['state'])) {
    $state = $_GET['state']; // Converteer de state naar een integer
    updateWeeklyStatus($state);
    header('location: index.php');
}