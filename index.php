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

if (!empty($_GET['create'])){ ?>
    <div class="alert alert-secondary" role="alert">
        <span>The new Room with ID: <?php echo $_GET['create']; ?> has been succesfully created!</span>
    </div>
<?php }; ?>

<div class="container d-flex flex-row flex-wrap justify-content-center">
<?php
if (!empty($rooms)){
    foreach ($rooms as $room){ ?>
    <div class="card m-1">
        <h5 class="card-header">Room number: <?php echo $room['room_number']; ?></h5>
        <div class="card-body">
            <h5 class="card-text">Floor: <?php echo $room['floor']; ?></h5>
            <h5 class="card-text">Number of Beds: <?php echo $room['beds']; ?></h5>
            <p class="card-text">ID: <?php echo $room['id']; ?></p>
            <a href="show.php?id=<?php echo $room['id']; ?>">
            <div class="button-area d-flex flex-row">
                <button type="button" class="btn btn-success m-1">View</button>
            </a>
            <form action="<?php echo $base_path; ?>update.php" >
                <input type="hidden" name="id" value=<?php echo $room['id']; ?>>
                <input type="submit" class="btn btn-info m-1" value="Update">
            </form>
            <form action="<?php echo $base_path; ?>partials/delete/delete.php" >
                <input type="hidden" name="id" value=<?php echo $room['id']; ?>>
                <input type="submit" class="btn btn-danger m-1" value="Delete">
            </form>
            </div>
        </div>
    </div>
    <?php }
} 
elseif (empty($rooms)){?>
    <h1>Weird, no rooms available.</h1>
<?php } ?> 
</div>

<?php
//  Include the footer
include __DIR__ . '/partials/template/crud-footer.php';
?>