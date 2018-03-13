<?php
    include 'inc/functions.php';
    session_start();
    
    if (isset($_POST['destroy']))
    {
        session_unset();
        session_destroy();
    }
    
    if (!isset($_SESSION['lastLoads']))
    {
        $_SESSION['lastLoads'] = array();
    }
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
            $time_start = microtime(true);
            
            play();
            
            $time_end = microtime(true);
            $time = $time_end - $time_start;
            
            if (isset($_SESSION['lastLoads']))
            {
                if (count($_SESSION['lastLoads']) == 10)
                {
                    array_splice($_SESSION['lastLoads'], 0, 1);
                }
                
                array_push($_SESSION['lastLoads'], $time);
            }
        ?>
        <form>
            <input type='submit' value='Play again'/>
        </form><br/>
        <div style="position: absolute; top: 1%; left: 1%; text-align: left;">
            <h3>Session</h3>
            <?php
                $average = 0.0;
                
                for ($i = 0; $i < 10; $i++)
                {
                    $average += $_SESSION['lastLoads'][$i];
                    echo $i.") ".$_SESSION['lastLoads'][$i]."<br/>";
                }
                
                $average /= 10;
                
                echo "Avg = ".$average;
            ?>
            <form method="POST">
                <br/>
                <input type='submit' name="destroy" value='Reload' />
            </form>
        </div>
    </body>
</html>