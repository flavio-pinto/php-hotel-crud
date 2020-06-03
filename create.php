<?php
//Include doctype top from partials
include_once __DIR__ . '/partials/doctype-top.php';
//Include nav from partials
include_once __DIR__ . '/partials/nav.php';
?>
    <header>
        <h1 class="text-center text-primary mb-4">Aggiungi nuova stanza</h1>
    </header>
    <form action="./partials/create/server.php" method="POST">
        <div class="form-group">
            <label for="room_number">Numero stanza</label>
            <input class="form-control" type="number" name="room_number" id="room_number" placeholder="Inserisci numero stanza"> 
        </div>
        <div class="form-group">
            <label for="beds">Posti letto</label>
            <input class="form-control" type="number" name="beds" id="beds" placeholder="Inserisci numero letti">
        </div>
        <div class="form-group">
            <label for="floor">Piano</label>
            <input class="form-control" type="number" name="floor" id="floor" placeholder="Inserisci piano in cui la stanza è ubicata">
        </div>
        <div class="form-group text-right">
            <input class="btn btn-primary" type="submit" value="Aggiungi">
        </div>
    </form>
<?php 
//Include doctype bottom from partials
include __DIR__ . '/partials/doctype-bottom.php';
?>