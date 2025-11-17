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

if ($statementResult->num_rows === 1) {
        
    $currentUser = $statementResult->fetch_assoc();
    
    if (password_verify($password, $currentUser['password'])) {
        $_SESSION['user_id'] = $currentUser['id'];
        $_SESSION['username'] = $currentUser['username'];

        header("Location: /Pokemon-TCG-tournament-tracker/views/index.php");
        exit;
        
    } else{
        echo "Please enter the correct password";
    }

    } else {
        echo "Please enter the correct username";
}

}