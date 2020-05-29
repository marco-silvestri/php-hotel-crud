<?php

//  Include the head
include __DIR__ . '/partials/template/crud-head.php';
include __DIR__ . '/partials/database.php';

if (!empty($_GET['id'])){
    $room_id = $_GET['id'];
    $sql = "SELECT `room_number`, `floor`, `beds` FROM `stanze` WHERE `id`=$room_id";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()){
        $room_number = $row['room_number'];
        $floor = $row['floor'];
        $beds = $row['beds'];
        };
};
?>


<div class="container d-flex flex-column">
    <div class="row">
        <div class="col-12">
            <h2>Update Room Details</h2>
            <div class="details-wrapper">
                <form action="<?php echo $base_path; ?>partials/update/server.php">
                    <label for="room_number">Room Number</label>
                    <input type="number" name="room_number" id="room_number" value="<?php echo $room_number; ?>">
                    <label for="room_floor">Floor</label>
                    <input type="number" name="room_floor" id="room_floor" value="<?php echo $floor; ?>">
                    <label for="room_beds">Number of beds</label>
                    <input type="number" name="room_beds" id="room_beds" value="<?php echo $beds; ?>">
                    <input type="button" class="btn btn-warning" value="Update">
                </form>
            </div>
        </div>       
    </div>
</div>

<?php
//  Include the footer
include __DIR__ . '/partials/template/crud-footer.php';
?>