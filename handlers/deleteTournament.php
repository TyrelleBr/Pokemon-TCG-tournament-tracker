<?php

include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $id = (int)$_POST['id'];

