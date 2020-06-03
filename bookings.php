<?php
include_once __DIR__ . '/partials/bookings/server.php';
//Include doctype top from partials
include_once __DIR__ . '/partials/doctype-top.php';
//Include nav from partials
include_once __DIR__ . '/partials/nav.php';
?>
    <header>
        <h1 class="text-center text-primary mb-4">Prenotazioni</h1>
    </header>
    <main class="main">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ID STANZA</th>
                    <th>CREATA IL</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($bookings as $booking) { ?>
                <tr>
                    <td><?php echo $booking['id'] ?></td>
                    <td><?php echo $booking['stanza_id'] ?></td>
                    <td><?php echo $booking['created_at'] ?></td>
                    <td><a class="text-success" href="#">Visualizza</a></td>
                    <td><a class="text-primary" href="#">Aggiorna</a></td>
                    <td><a class="text-danger" href="#">Cancella</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
<?php 
//Include doctype bottom from partials
include __DIR__ . '/partials/doctype-bottom.php';
?>