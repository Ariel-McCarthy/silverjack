<?php
    include 'inc/functions.php'
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Silverjack</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Spectral+SC" rel="stylesheet">
    </head>
    <body>
        <h1>Silverjack</h1>
        <?php
            play();
        ?>
        <form>
            <input type='submit' value='Play again' />
        </form><br/>
    </body>
</html>