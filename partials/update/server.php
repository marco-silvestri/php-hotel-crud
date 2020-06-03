<?php //UPDATE A ROOM

//  db Handler
include_once __DIR__ . '/../database.php';

// Check if the ID has been passed
if (empty($_POST)){
    die("No room ID specified");
}

//  Retrieve the values from POST
$id = $_POST['room_id'];
$room_number = $_POST['room_number'];
$floor = $_POST['room_floor'];
$beds = $_POST['room_beds'];

//  UPDATE with PREPARED STATEMENT
$sql = "UPDATE `stanze` 
        SET `room_number`= ?, `floor`= ?, `beds`= ?, `updated_at`= NOW()
        WHERE `id`= ?";
$statement = $conn->prepare($sql);
$statement->bind_param('iiii', $room_number, $floor, $beds, $id);
$statement->execute();

//  Print the output
if ($statement && $statement->affected_rows > 0){
    header("Location:" . $base_path . "show.php?id=$id");
} elseif ($statement) {
    die("There was an error with the DB, please try again later");
} else {
    die("I could not connect to the DB.");
}

//  Goodbye
$conn->close();