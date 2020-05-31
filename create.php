<?php

//  Include the head
include __DIR__ . '/partials/template/crud-head.php';
include __DIR__ . '/partials/database.php';


//  Update form
?>
<div class="container d-flex flex-column m-4">
    <h2 class="dispaly-2">Create a new Room</h2>
    <div class="form-group">
        <form action="<?php echo $base_path; ?>partials/create/server.php" method="POST">
            <input type="hidden" name="room_id" value="<?php echo $room_id; ?>">
                <div class="form-group">
                <label class="col-2" for="room_number">Room Number</label>
                <input type="number" name="room_number" id="room_number" value="" required>
            </div>
                <div class="form-group">
                <label class="col-2" for="room_floor">Floor</label>
                <input type="number" name="room_floor" id="room_floor" value="" required>
            </div>
            <div class="form-group">
                <label class="col-2" for="room_beds">Number of beds</label>
                <input type="number" name="room_beds" id="room_beds" value="" required>
            </div>
            <input type="submit" class="btn btn-warning" value="Update">
        </form>
    </div>
</div>

<?php
//  Include the footer
include __DIR__ . '/partials/template/crud-footer.php';
?>