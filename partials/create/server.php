<?php //CREATE A ROOM

//  DB handler
include_once __DIR__ . '/../database.php';

$room_number = $_POST['room_number'];
$room_floor = $_POST['room_floor'];
$room_beds = $_POST['room_beds'];

$sql = "INSERT INTO `stanze`(`room_number`,`floor`,`beds`,`created_at`,`updated_at`) 
        VALUES($room_number, $room_floor, $room_beds, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)";
$result = $conn->query($sql);

    //  Print the output
if ($result && $conn->affected_rows > 0){
    header("Location:" . $base_path . "?create=1");
} elseif ($result) {
    die("There was an error with the DB, please try again later");
} else {
    die("I could not connect to the DB.");
}

$conn->close();