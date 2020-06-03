<?php //CREATE A ROOM

//  DB handler
include_once __DIR__ . '/../database.php';

if ( empty($_POST['room_number']) || empty($_POST['room_floor']) || empty($_POST['room_beds'])){
    die('No valid args received');
}

$room_number = $_POST['room_number'];
$room_floor = $_POST['room_floor'];
$room_beds = $_POST['room_beds'];

$sql = "INSERT INTO `stanze`(`room_number`,`floor`,`beds`,`created_at`,`updated_at`) 
        VALUES(?, ?, ?, NOW(), NOW())";

$statement = $conn->prepare($sql);
$statement->bind_param('iii', $room_number, $room_floor, $room_beds);
$statement->execute();

    //  Print the output
if ($statement && $statement->insert_id > 0){
    $id_room = $statement->insert_id;
    header("Location:" . $base_path . "?create=$id_room");
} elseif ($statement) {
    die("There was an error with the DB, please try again later");
} else {
    die("I could not connect to the DB.");
}

$conn->close();