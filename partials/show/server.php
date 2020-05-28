<?php

include __DIR__ . '/../database.php';


$id_room = 1;

//  Connection OK
$sql = "SELECT * FROM `stanze` WHERE `id` = $id_room";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0){
    $room = $result->fetch_assoc();
} elseif($result){
    echo 'No records';
} else {
    echo 'Query error';
}

//  Close the connection with the DB
$conn->close();