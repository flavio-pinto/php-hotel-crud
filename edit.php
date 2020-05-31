<?php
//Include server-edit per ottenere dettagli stanza
include_once __DIR__ . '/partials/update/server-edit.php';
//Include doctype top from partials
include_once __DIR__ . '/partials/doctype-top.php';
//Include nav from partials
include_once __DIR__ . '/partials/nav.php';
?>
    <header>
        <h1 class="text-center text-primary mb-4">Aggiorna dati stanza</h1>
    </header>
    <form action="./partials/update/server-update.php" method="POST">
        <div class="form-group">
            <label for="room_number">Numero stanza</label>
            <input class="form-control" type="number" name="room_number" id="room_number" value="<?php echo $room['room_number'] ?>"> 
        </div>
        <div class="form-group">
            <label for="beds">Posti letto</label>
            <input class="form-control" type="number" name="beds" id="beds" value="<?php echo $room['beds'] ?>">
        </div>
        <div class="form-group">
            <label for="floor">Piano</label>
            <input class="form-control" type="number" name="floor" id="floor" value="<?php echo $room['floor'] ?>">
        </div>
        <div class="form-group text-right">
            <input type="hidden" name="id" value="<?php echo $room['id'] ?>">
            <input class="btn btn-primary" type="submit" value="Invia">
        </div>
    </form>
<?php 
//Include doctype bottom from partials
include __DIR__ . '/partials/doctype-bottom.php';
?>