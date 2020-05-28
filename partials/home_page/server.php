<?php

include __DIR__ . '/../database.php';


//  Connection OK
$sql = "SELECT * FROM `stanze`";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0){
    $rooms =[];
    while ($row = $result->fetch_assoc()) {
    //    echo "ID: {$row['id']} - FLOOR: {$row['floor']} <br>";
        $rooms[] = $row;
    }
} elseif($result){
    echo 'No records';
} else {
    echo 'Query error';
}

//  Close the connection with the DB
$conn->close();