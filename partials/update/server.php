<?php
//  db Handler
include_once __DIR__ . '/../database.php';

if (!empty($_POST)){
    die("No room ID specified");
}

$id = $_POST['room_id'];
$room_number = $_POST['room_number'];
$floor = $_POST['room_floor'];
$beds = $_POST['room_beds'];


//  Connection OK
$sql = "UPDATE `stanze` SET `room_number`=$room_number, `floor`=$floor, `beds`=$beds WHERE `id`=$id";
$result = $conn->query($sql);

if ($result && $conn->affected_rows > 0){
    header("Location:" . $base_path . "show.php?id=$id");
} elseif ($result) {
    die("There was an error with the DB, please try again later");
} else {
    die("I could not connect to the DB.")
}

$conn->close();