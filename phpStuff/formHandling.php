<?php 

include '../phpStuff/config.php';

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);
    $dateOfBirth = trim($_POST['dateOfBirth']); 

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
    if (empty($dateOfBirth)) {
        $errors[] = "Your date of birth is required";
    }
}