<?php 

include '../phpStuff/config.php';

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);

    $errors = [];

    if (empty($username)) {
        $errors[] = "Username is required";
    }
    if (empty($password)) {
        $errors[] = "Password is required";
    }
    if (empty($email)) {
        $errors[] = "Emaiil is required";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
        exit;
    }

    $statement = $dbConnection->prepare("SELECT id FROM users WHERE username = ? OR email = ?");

    $statement->bind_param("ss", $username, $email);

    $statement->execute();

    $statement->store_result();

    if ($statement->num_rows > 0) {
        echo "Username or email is already taken";
        exit;
    }
    
    $statement->close();

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $statement = $dbConnection->prepare("INSERT INTO users (username, password, email) VALUES (?, ?, ?)");

    $statement->bind_param("sss", $username, $passwordHash, $email);

    $statement->execute();

    echo "Registration Successul";

    $statement->close();
    $dbConnection->close();

}