<?php

$host = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'pokemon_tcg';

$dbConnection = new mysqli($host, $dbUsername, $dbPassword, $dbName);

if ($dbConnection->connect_error) {
    die("Database connection failed:" . $dbConnection->connect_error);
}