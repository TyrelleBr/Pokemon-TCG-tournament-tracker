<?php 

    include "../handlers/config.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (!isset($_SESSION['user_id'])) {
        header("location: ../views/login.php");
        exit;
    }

    $tournamentName = trim($_POST['tournamentName']);
    $description = trim($_POST['description']);
    $rules = trim($_POST['rules']);
    $startDate = trim($_POST['startDate']);
    $location = trim($_POST['location']);
    $contactEmail = trim($_POST['contactEmail']);
    $userId = $_SESSION['user_id'];


    $statement = $dbConnection->prepare("INSERT INTO tournaments (tournamentName, description, rules, startDate, location, contactEmail, userId) VALUES (?, ?, ?, ?, ?, ?, ?)");

    $statement->bind_param("ssssssi",  $tournamentName,  $description, $rules, $startDate, $location,  $contactEmail, $userId);

    if($statement->execute()) {
        
        header("Location: ../views/index.php?success=1");
        exit();

    } else {
        echo $statement->error;
    }

    $statement->close();
}