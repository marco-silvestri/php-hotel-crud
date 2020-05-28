<?php

@include __DIR__ . '/../env.php';

//  Connection object
$conn = new mysqli($server_name, $username, $password, $db_name);

//  Connection checker
if ($conn && $conn->connect_error){
    die('Connection Error');
}

//  Connection OK
$sql = "SELECT * FROM `stanze`";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0){
    while ($row = $result->fetch_assoc()) {
        echo "ID: {$row['id']} - FLOOR: {$row['floor']} <br>";
    }
} elseif($result){
    echo 'No records';
} else {
    echo 'Query error';
}