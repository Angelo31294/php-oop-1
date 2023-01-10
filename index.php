<?php
require_once __DIR__ ."/classes/Movie.php";

$movies = [
    new Movie("Il Signore degli Anelli: La compagnia dell'anello", ["fantasy", "action",  "epopea"], 180),
    new Movie("Il Signore degli Anelli: Le Due Torri", ["fantasy", "action",  "epopea"], 197),
];

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OOP</title>
    </head>
    <body>
        <h1>Lista film </h1>
        <ul>
            <?php foreach( $movies as $movie ) { ?>
            <li>
                <h3><?php echo $movie->title ?></h3>
                <h4>Durata:<?php echo $movie->duration ?>min</h4>
                <ul>
                    <?php foreach( $movie->genres as $genre ) { ?>
                    <li><?php echo ucfirst($genre); ?></li>
                    <?php } ?>
                </ul>
            </li>
            <?php } ?>
        </ul>
    </body>
</html>