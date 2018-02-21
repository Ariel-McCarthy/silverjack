<!DOCTYPE HTML>
<html>
    <head>
        <title>Silverjack</title>
        <link href = "css/styles.css" rel = "stylesheet" type = "text/css" />
    </head>
    <body>
        <?php
            include 'inc/functions.php';
<<<<<<< HEAD
            
            generateDeck();
            echo "<br>";
            
            $player1 = array(
                'name' => 'andrea',
                'imgURL' => './img/userPics/A.L.jpg',
=======
            //This line is to display clubs card
            //echo "<img src ='./img/cards/clubs/2.png' />";  
            //echo "<br>";
            
            
            $player2 = array(
                'name' => 'Andrea',
                'imgURL' => './img/userPics/AndreaL1.jpg',
>>>>>>> d78bbc6684a583183559bcdd7448d69f02cad1bb
                'hand' => array(),
                'points' => 0
                );
            $player4 = array(
                'name' => 'Celine',
                'imgURL' => 'img/userPics/cwu.jpeg',
                'hand' => array(),
                'points' => 0
                );
            $player3 = array(
                'name' => 'Ariel', 
                'imgURL' => 'img/userPics/baby_me.jpg',
                'hand' => array(),
                'points' => 0
                );
            $player1 = array(
                'name' => 'Anakareli',
                'imgURL' => 'img/userPics/anakareli.jpg',
                'hand' => array(),
                'points' => 0
                );
            
            $allPlayers = array(
                
                $player1,
                $player2,
                $player3,
                $player4
                );
            
            printGameState($allPlayers);
<<<<<<< HEAD
            
          
=======
>>>>>>> d78bbc6684a583183559bcdd7448d69f02cad1bb
        ?>
    </body>
</html>