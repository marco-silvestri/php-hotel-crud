<?php
include_once __DIR__ . '/../database.php';

var_dump($conn);

if (! empty($_GET['id'])){
    $room_id = $_GET['id'];
    $sql = "DELETE FROM `stanze` WHERE `id`=$room_id";
    $result = $conn->query($sql);
    if ($result && $conn->affected_rows > 0){
        header("Location:" . $base_path . "index.php?delete=$room_id");
    } elseif ($result){
        echo "Room not found!";
    } else {
        echo "Can't connect to the database";
    }
}
else {
    echo "Value missing";
}
