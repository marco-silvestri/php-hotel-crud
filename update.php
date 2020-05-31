<?php

//  Include the head
include __DIR__ . '/partials/template/crud-head.php';
include __DIR__ . '/partials/database.php';

//  Check the ID and populate the assoc array
if (!empty($_GET['id'])){
    $room_id = $_GET['id'];
    $sql = "SELECT `room_number`, `floor`, `beds` FROM `stanze` WHERE `id`=$room_id";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()){
        $room_number = $row['room_number'];
        $floor = $row['floor'];
        $beds = $row['beds'];
        };
}; ?>

<!-- Update form -->
<div class="container d-flex flex-column m-4">
    <h2 class="dispaly-2">Update Room's details, ID: <?php echo $room_id; ?></h2>
    <div class="form-group">
        <form action="<?php echo $base_path; ?>partials/update/server.php" method="POST">
            <input type="hidden" name="room_id" value="<?php echo $room_id; ?>">
                <div class="form-group">
                <label class="col-2" for="room_number">Room Number</label>
                <input type="number" name="room_number" id="room_number" value="<?php echo $room_number; ?>">
            </div>
                <div class="form-group">
                <label class="col-2" for="room_floor">Floor</label>
                <input type="number" name="room_floor" id="room_floor" value="<?php echo $floor; ?>">
            </div>
            <div class="form-group">
                <label class="col-2" for="room_beds">Number of beds</label>
                <input type="number" name="room_beds" id="room_beds" value="<?php echo $beds; ?>">
            </div>
            <input type="submit" class="btn btn-warning" value="Update">
        </form>
    </div>
</div>

<?php
//  Include the footer
include __DIR__ . '/partials/template/crud-footer.php';
?>