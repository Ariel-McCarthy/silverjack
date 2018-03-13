<?php
    include 'inc/functions.php';
    session_start(); // Start a session
                     // You will need this line on every page you'll need your session on
                     // Basically, it creates the session the first time it is called,
                     // and passes it to each page where this line is present.
    
    // This condition exists to 'destroy' the current session.
    // Basically, I created a button to reload the session; when clicked, it
    // destroys the current session and refreshes the page.
    if (isset($_POST['destroy']))
    {
        session_unset();
        session_destroy();
        header("Location: index.php");
        exit();
    }
    
    // We want an array to store our 10 running times,
    // so we check if our session already has a variable created for us.
    // If not, we create it and set it to an empty array.
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
            // Here, we store the time marker before our function call.
            $time_start = microtime(true);
            
            play();
            
            $time_end = microtime(true);
            // And here, we store the time marker after our function call.
            $time = $time_end - $time_start;
            // Then we substract them to get our running time.
            
            // We want to store our variable now.
            // We have to check our array first: since we only want the 10 last
            // running times, we have to check if our array contains 10 elements.
            // If it does, then we remove the first element and shift every
            // other element by one.
            if (count($_SESSION['lastLoads']) == 10)
            {
                array_splice($_SESSION['lastLoads'], 0, 1);
            }
            
            // Then we push our new running time in the array.
            array_push($_SESSION['lastLoads'], $time);
        ?>
        <form>
            <input type='submit' value='Play again'/>
        </form><br/>
        <div style="position: absolute; top: 1%; left: 1%; text-align: left;">
            <h3>Session</h3>
            <?php
                // Finally, we create a variable to store our average.
                $average = 0.0;
                
                for ($i = 0; $i < 10; $i++)
                {
                    // We loop through our array and sum each item to our average,
                    // before printing them.
                    $average += $_SESSION['lastLoads'][$i];
                    echo $i.") ".$_SESSION['lastLoads'][$i]."<br/>";
                }
                
                // We divide our sum by 10 because that's the number of element
                // we added.
                $average /= 10;
                
                // We print our average.
                echo "Avg = ".$average;
            ?>
            <form method="POST">
                <br/>
                <!-- This is the button of the condition I described earlier -->
                <input type='submit' name="destroy" value='Reload' />
            </form>
        </div>
    </body>
</html>