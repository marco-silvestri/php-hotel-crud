<?php
//  db Handler
include_once __DIR__ . '/../database.php';

//  Query composer
$sql = "SELECT * FROM `stanze`";
$result = $conn->query($sql);

//  Output
if ($result && $result->num_rows > 0){
    $rooms =[];
    while ($row = $result->fetch_assoc()) {
        $rooms[] = $row;
    }
} elseif($result){
    echo 'No records';
} else {
    echo 'Query error';
};

//  Close the connection with the DB
$conn->close();