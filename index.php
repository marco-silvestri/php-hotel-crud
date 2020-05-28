<?php
//  Include the dbHandler
include __DIR__ . '/partials/home_page/server.php';
//  Include the head
include __DIR__ . '/partials/template/crud-head.php';

?>


<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Rooms</h2>
            <table class="table">
            <thead>
                <tr>
                    <th>Room ID:</th>
                    <th>Number</th>
                    <th>Floor</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if (!empty($rooms)){
                        foreach ($rooms as $room) { ?>
                            <tr>
                                <td><?php echo $room['id']; ?></td>
                                <td><?php echo $room['room_number']; ?></td>
                                <td><?php echo $room['floor']; ?></td>
                                <td>
                                    <a href="show.php">
                                        <button type="button" class="btn btn-success">
                                            View
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <a href="">
                                        <button type="button" class="btn btn-info">
                                            Update
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <a href="">
                                        <button type="button" class="btn btn-danger">
                                            Delete
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        <?php }
                    } ?>
            </tbody>
            </table>
        </div>
    </div>
</div>

<?php
//  Include the footer
include __DIR__ . '/partials/template/crud-footer.php';
?>