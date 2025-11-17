<?php 

session_start();

$_SESSION = [];

session_destroy();

header("Location: /Pokemon-TCG-tournament-tracker/views/index.php");

exit;
