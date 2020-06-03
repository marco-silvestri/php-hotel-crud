<?php
include_once __DIR__ . '/../../env.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Rooms</title>
    <link rel="stylesheet" href="<?php echo $base_path; ?>dist/css/app.css">
</head>
<body>
<?php
$uri = $_SERVER['REQUEST_URI'];

//  Print a jumbotron only on the index.php
if ($uri == "/" . $folder){ ?>
    <div class="jumbotron bg-dark my-0 text-info text-center">
        <h1 class="display-4">Hotel Manager</h1>
    </div>
<?php } ?>

<nav class="navbar navbar-expand sticky-top navbar-dark bg-dark">
    <span class="navbar-brand">Navigation</span>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo $base_path;?>">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo $base_path;?>create.php">Create</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo $base_path;?>bookings.php">Bookings</a>
            </li>
        </ul>
    </div>
</nav>