<?php
//  db Handler
include_once __DIR__ . '/../database.php';
include_once __DIR__ . '/../functions.php';

$rooms = getAll($conn, 'stanze');