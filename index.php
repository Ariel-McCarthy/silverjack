<!DOCTYPE HTML>
<html>
    <head>
        <title>Silverjack</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Spectral+SC" rel="stylesheet">
    </head>
    <body>
        <?php
            include 'inc/functions.php';
            
            printGameState($allPlayers);
            //generateDeck();
            getHand($allPlayers);
        ?>
    </body>
</html>