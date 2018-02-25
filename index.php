<!DOCTYPE HTML>
<html>
    <head>
        <title>Silverjack</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php
            include 'inc/functions.php';
            
            
            
            echo "<br>";
            
        
                
            printGameState($allPlayers);
            //generateDeck();
            getHand($allPlayers);
            
            
        ?>
    </body>
</html>