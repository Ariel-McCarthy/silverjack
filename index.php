<!DOCTYPE HTML>
<html>
    <head>
    <body>
        <?php
            //This line is to display clubs card
            //echo "<img src ='./img/cards/clubs/2.png' />";  
            //echo "<br>";
            
            $player1 = array(
                'name' => 'andrea',
                'imgURL' => './img/userPics/AndreaL1.jpg',
                'hand' => array(),
                'points' => 0);
            /*$player2 = array();
            $player3 = array();
            $player4 = array();*/
            
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



