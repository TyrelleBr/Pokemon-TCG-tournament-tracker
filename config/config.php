<?php

$dbConnection = new mysqli('localhost', "root", "", "pokemon_tcg");

if ($dbConnection->connect_error) {
    die("Database connection failed:" . $dbConnection->connect_error);
}