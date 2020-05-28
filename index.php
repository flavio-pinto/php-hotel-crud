<?php
include __DIR__ . '/partials/server.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/assets/styles/styles.css">
    <title>PHP MYSQL CRUD</title>
</head>
<body class="p-5">
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
                            <td><a class="text-info font-weight-bold" href="">Visualizza stanza</a></td>
                            <td><a class="text-primary font-weight-bold" href="">Aggiorna</a></td>
                            <td><a class="text-danger font-weight-bold" href="">Cancella</a></td>
                        </tr>
                    <?php }
                } ?>
                
            </tbody>
        </table>
    </main>
    <!-- JAVASCRIPT -->
    <script src="dist/assets/scripts/main.js"></script>
</body>
</html>