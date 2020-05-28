<?php

include __DIR__ . '/../env.php';

//  Connection object
$conn = new mysqli($server_name, $username, $password, $db_name);

//  Connection checker
if ($conn && $conn->connect_error){
    die('Connection Error');
}