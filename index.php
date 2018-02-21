<!DOCTYPE HTML>
<html>
    <head>
    <body>
        <?php
            include 'inc/functions.php';
            
            generateDeck();
            echo "<br>";
            
            $player1 = array(
                'name' => 'andrea',
                'imgURL' => './img/userPics/A.L.jpg',
                'hand' => array(),
                'points' => 0
                );
            $player2 = array(
                'name' => 'celine',
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
            $player4 = array(
                'name' => 'anakareli',
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
            
            function printGameState($allPlayers){
                foreach($allPlayers as $player){
                    echo "<img src='" . $player['imgURL']. "'/><br>";
                    echo $player['name'] . "<br/>";
                }
            }
            
            printGameState($allPlayers);
            
          
        ?>
    </body>
    </head>
</html>



