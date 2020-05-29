<?php
//  db Handler
include_once __DIR__ . '/../database.php';

//  Delete the room and update the view
if (! empty($_GET['id'])){
    $room_id = $_GET['id'];
    $sql = "DELETE FROM `stanze` WHERE `id`=$room_id";
    $result = $conn->query($sql);
    if ($result && $conn->affected_rows > 0){
        header("Location:" . $base_path . "index.php?delete=$room_id");
    } elseif ($result){
        echo die("Room not found!");
    } else {
        echo die("Can't connect to the database");
    }
}
else {
    die("Value missing");
}

$conn->close();


