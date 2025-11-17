<?php 

include '../phpStuff/config.php';

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);
    $dateOfBirth = trim($_POST['dateOfBirth']); 
}