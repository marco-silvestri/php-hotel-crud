<?php
//  Include the dbHandler
include __DIR__ . '/partials/show/server.php';
//  Include the head
include __DIR__ . '/partials/template/crud-head.php';

?>

<div class="container d-flex flex-column m-4">
    <span>Details for Room <strong><?php echo $room['room_number']; ?></strong></span>
    <span>ID: <strong><?php echo $room['id']; ?></strong></span>
    <span>Floor: <strong><?php echo $room['floor']; ?></strong></span>
    <span>Number of beds: <strong><?php echo $room['beds']; ?></strong></span>
    <span>Created: <strong><?php echo $room['created_at']; ?></strong></span>
    <span>Last update: <strong><?php echo $room['updated_at']; ?></strong></span>
</div>

<?php
//  Include the footer
include __DIR__ . '/partials/template/crud-footer.php';
?>