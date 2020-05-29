<?php
//  Include the dbHandler
include __DIR__ . '/partials/home_page/server.php';
//  Include the head
include __DIR__ . '/partials/template/crud-head.php';

if (!empty($_GET['delete'])){ ?>
    <div class="alert alert-secondary" role="alert">
        <span>The room ID <?php echo $_GET['delete']; ?> has been deleted succesfully!</span>
    </div>
<?php };

?>


<div class="container d-flex flex-column">
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
                                    <a href="show.php?id=<?php echo $room['id']; ?>">
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
                                    <form action="<?php echo $base_path; ?>partials/delete/delete.php" >
                                        <input type="hidden" name="id" value=<?php echo $room['id']; ?>>
                                        <input type="submit" class="btn btn-danger" value="Delete">
                                    </form>
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