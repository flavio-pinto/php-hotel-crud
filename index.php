<?php
include_once __DIR__ . '/partials/server.php';
//Include doctype top from partials
include_once __DIR__ . '/partials/doctype-top.php';
//Include nav from partials
include_once __DIR__ . '/partials/nav.php';
?>
<?php //Alert
if (!empty($_GET['del'])) {?>
    <div class="alert alert-success">
        Stanza eliminata con successo!
    </div>
<?php } ?>

    <header>
        <h1 class="text-center text-primary mb-4">Stanze Hotel</h1>
    </header>

    <main class="main">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NUMERO</th>
                    <th>PIANO</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php //Ciclo per creare lista stanza tramite il database
                if(!empty($rooms)) {
                    foreach($rooms as $room) {?>
                        <tr>
                            <td><?php echo $room['id'] ?></td>
                            <td><?php echo $room['room_number'] ?></td>
                            <td><?php echo $room['floor'] ?></td>
                            <td><a class="text-info font-weight-bold" href="./show.php?id=<?php echo $room['id'] ?>">Visualizza stanza</a></td>
                            <td><a class="text-primary font-weight-bold" href="./edit.php?id=<?php echo $room['id'] ?>">Aggiorna info</a></td>
                            <td class="font-weight-bold">
                                <form action="./partials/delete/server.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $room['id']; ?>">
                                    <input class="btn btn-danger" type="submit" value="Delete">
                                </form>
                            </td>
                        </tr>
                    <?php }
                } ?>
            </tbody>
        </table>
    </main>
<?php 
//Include doctype bottom from partials
include __DIR__ . '/partials/doctype-bottom.php';
?>