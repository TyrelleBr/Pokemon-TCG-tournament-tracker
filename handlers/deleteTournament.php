<?php

include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $id = (int)$_POST['id'];

    $statement = $dbConnection->prepare("SELECT userId FROM tournaments WHERE id = ?");
    $statement->bind_param("i", $id);
    $statement->execute();
    $result = $statement->get_result();
    $tournament = $result->fetch_assoc();
    $statement->close();
