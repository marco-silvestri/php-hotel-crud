<?php
//  Include the dbHandler
include __DIR__ . '/partials/show/server.php';
//  Include the head
include __DIR__ . '/partials/template/crud-head.php';

?>


<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Room Details</h2>
        </div>
        <div>
            <h3>La stanza <?php echo $room['id']; ?> &egrave; al piano <?php echo $room['floor']; ?> ed ha <?php echo $room['beds']; ?> letti</h3>
        </div>       
    </div>
</div>

<?php
//  Include the footer
include __DIR__ . '/partials/template/crud-footer.php';
?>