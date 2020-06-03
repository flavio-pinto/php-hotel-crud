<?php
//Ottieni dettagli stanza
include_once __DIR__ . '/partials/show/server.php';

//Include doctype top from partials
include_once __DIR__ . '/partials/doctype-top.php';
//Include nav from partials
include_once __DIR__ . '/partials/nav.php';
?>
    <header>
        <h1 class="text-center text-primary mb-4">Dettagli stanza: <?php echo $room['room_number'] ?></h1>
    </header>

    <div class="card">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">ID: <?php echo $room['id']; ?></li>
            <li class="list-group-item">Numero Stanza: <?php echo $room['room_number']; ?></li>
            <li class="list-group-item">Posti letto: <?php echo $room['beds']; ?></li>
            <li class="list-group-item">Piano: <?php echo $room['floor']; ?></li>
            <li class="list-group-item">Created at: <?php echo $room['created_at']; ?></li>
            <li class="list-group-item">Updated at: <?php echo $room['updated_at']; ?></li>
        </ul>
    </div>
    <a class="btn btn-primary" href="<?php echo $base_path; ?>/edit.php?id=<?php echo $room['id']; ?>">Aggiorna dati stanza</a> 
    <?php
        if($room['id'] > 1) { ?>
            <a class="pulsante__navigazione__stanze" href="./show.php?id=<?php echo $room['id'] - 1 ?>">&lt; Stanza precedente</a>
    <?php } ?>

    <?php if ($room['id'] < 15) { ?>
            <a class="pulsante__navigazione__stanze" href="./show.php?id=<?php echo $room['id'] + 1 ?>">Stanza successiva &gt;</a>
    <?php } ?>
<?php 
//Include doctype bottom from partials
include __DIR__ . '/partials/doctype-bottom.php';
?>