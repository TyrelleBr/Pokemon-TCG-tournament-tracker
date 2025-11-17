<?php 

include '../handlers/config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($password)) {
        echo "Please and username AND password";
        exit;
    }

    $statement = $dbConnection->prepare("SELECT id, username, password FROM users WHERE username = ?");
    
    $statement->bind_param("s", $username);

    $statement->execute();

    $statementResult = $statement->get_result();
}