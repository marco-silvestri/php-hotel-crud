<?php

function getAll($connection, $table){
    //  Query composer
    $sql = "SELECT * FROM `$table`";
    $result = $connection->query($sql);

    //  Output
    if ($result && $result->num_rows > 0){
    $records =[];
        while ($row = $result->fetch_assoc()) {
            $records[] = $row;
        }
    } elseif($result){
        echo 'No records';
    } else {
        $records = false;
        echo 'Query error';
    };
    $connection->close();
    return $records;
}