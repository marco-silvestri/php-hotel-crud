<?php
//  Include the dbHandler
include __DIR__ . '/partials/bookings/server.php';
//  Include the head
include __DIR__ . '/partials/template/crud-head.php';
?>

<div class="container d-flex flex-row flex-wrap justify-content-center">
<?php
if (!empty($bookings)){
    foreach ($bookings as $booking){ ?>
    <div class="card m-1">
        <h5 class="card-header">Booking ID: <?php echo $booking['id']; ?></h5>
        <div class="card-body">
            <h5 class="card-text">Room ID: <?php echo $booking['stanza_id']; ?></h5>
            <h5 class="card-text">Type: <?php echo $booking['configurazione_id']; ?></h5>
            <p>Booking created: <?php echo $booking['created_at']; ?></p>
            <p>Last updated: <?php echo $booking['updated_at']; ?></p>
            <a href="show.php?id=<?php echo $booking['stanza_id']; ?>">
            <div class="button-area d-flex flex-row">
                <button type="button" class="btn btn-success m-1">View Room</button>
            </a>
            </div>
        </div>
    </div>
    <?php }
} 
elseif (empty($bookings)){?>
    <h1>Weird, no bookings yet.</h1>
<?php } ?> 
</div>

<?php
//  Include the footer
include __DIR__ . '/partials/template/crud-footer.php';
?>