<?php
    function getHand()
    {
        static $cards = array(
            array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13),
            array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13),
            array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13),
            array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13)
            );
        
        for ($i = 0; $i < 4; $i++)
        {
            shuffle($cards[$i]);
        }
        
        $hand = array();
        $sum = 0;
        
        while (true)
        {
            $folder = rand(0, 3);
            $card = rand(0, 12);
            $value = $cards[$folder][$card];
            
            if ($value == -1)
            {
                continue;
            }
            
            switch ($folder)
            {
                case 0:
                    $folderName = 'clubs';
                    break;
                
                case 1:
                    $folderName = 'diamonds';
                    break;
                
                case 2:
                    $folderName = 'hearts';
                    break;
                
                case 3:
                    $folderName = 'spades';
                    break;
            }
            
            if ($sum + $value <= 42)
            {
                $sum += $value;
                array_push($hand, "img/cards/".$folderName."/".$value.".png");
                $cards[$folder][$card] = -1;
            }
            
            else
            {
                break;
            }
        }
        
        getPoints($sum, 1);
        return $hand;
    }
    
    function displayHand($hand)
    {
        foreach ($hand as $card)
        {
            echo "<img src='".$card."' />&nbsp;";
        }
    }
    
    function getPoints($sum, $change)
    {
        static $points = 0;
        
        if ($change == 1)
        {
            $points = $sum;
        }
        
        return $points;
    }
    
    function displayWinners($players)
    {
        $total = 0;
        $max = 0;
        $winners = array();
        
        for ($i = 0; $i < 4; $i++)
        {
            $total += $players[$i]['points'];
            
            if ($players[$i]['points'] > $max)
            {
                $max = $players[$i]['points'];
            }
        }
        
        foreach ($players as $player)
        {
            if ($player['points'] == $max)
            {
                array_push($winners, $player['name']);
            }
        }
        
        $total -= $max;
        echo implode(", ", $winners)." wins ".$total." points!!<br/><br/>";
    }
    
    function play()
    {
        $player1 = array(
            'name' => 'Anakareli',
            'imgURL' => 'img/user_pics/anakareli.jpg',
            'hand' => getHand(),
            'points' => getPoints(0, 0)
            );
        
        $player2 = array(
            'name' => 'Andrea',
            'imgURL' => 'img/user_pics/AndreaL1.jpg',
            'hand' => getHand(),
            'points' => getPoints(0, 0)
            );
        
        $player3 = array(
            'name' => 'Ariel',
            'imgURL' => 'img/user_pics/baby_me.jpg',
            'hand' => getHand(),
            'points' => getPoints(0, 0)
            );
        
        $player4 = array(
            'name' => 'Céline',
            'imgURL' => 'img/user_pics/cwu.jpeg',
            'hand' => getHand(),
            'points' => getPoints(0, 0)
            );
        
        $players = array($player1, $player2, $player3, $player4);
        shuffle($players);
        echo "<table>";
        
        foreach ($players as $player)
        {
            echo "<tr>";
                echo "<td>";
                    echo "<img src='".$player['imgURL']."' /><br/>";
                    echo $player['name'];
                echo"</td>";
                echo "<td id='hand'>";
                    displayHand($player['hand']);
                echo"</td>";
                echo "<td>";
                    echo $player['points'];
                echo"</td>";
            echo "</tr>";
        }
        
        echo "</table><br/>";
        displayWinners($players);
    }
?>