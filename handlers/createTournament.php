<?php 

include '../handlers/config.php';


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $tournamentName = trim($_POST['tournamentName']);
    $description = trim($_POST['description']);
    $rules = trim($_POST['rules']);
    $startDate = trim($_POST['startDate']);
    $location = trim($_POST['location']);
    $contactEmail = trim($_POST['contactEmail']);


    $statement = $dbConnection->prepare("INSERT INTO tournaments (tournamentName, description, rules, startDate, location, contactEmail) VALUES (?, ?, ?, ?, ?, ?");

    
}