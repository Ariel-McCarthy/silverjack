<?php
/*        
    function imageResize($width, $height, $andreasPic) 
    {    
        // takes the larger size of the width and height and applies the
        // formula accordingly... this is so this script will work
        // dynamically with any size image
        
        if ($width > $height)
        {
            $percentage = ($andreasPic / $width);
        }
        
        else
        {
            $percentage = ($andreasPic / $height);
        }
        
        // gets the new value and applies the percentage, then rounds the value
        $width = round($width * $percentage);
        $height = round($height * $percentage);
        
        // returns the new sizes in html image tag format... this is so you
        // can plug this function inside an image tag and just get the
        
        return "width='$width' height='$height'";
    }
    
    $andreasPic = getimagesize("img/userPics/AndreaL1.jpg");
    imageResize($andreasPic[0], $andreasPic[1], 150);
*/
            $player1 = array(
                'name' => 'Andrea',
                'imgURL' => 'img/userPics/AndreaL1.jpg',
                'hand' => array(),
                'points' => 0
                );
                
            $player2 = array(
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
                
            $player4 = array(
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
    $suits = array("clubs","diamonds","hearts","spades");
    $playerInfo = array($player1, $player2,$player3,$player4);
    
    function printGameState($allPlayers)
    {
        shuffle($allPlayers); // prints the players in random order
        
        foreach ($allPlayers as $player)
        {
            echo "<img width='75' src='".$player['imgURL']."'/><br/>";
            echo $player['name']."<br/>";
        }
    }
    
    function generateDeck()
    {
        // This function generates an array containing all the cards we want to
        // use.
        
        $deck = array();
        
        for ($i=1; $i<=52; $i++)
        {
            $deck[] = $i;
        }
        shuffle($deck);
    }
    
    function getHand($deck)
    {

        $cur_deck = generateDeck(); // This is to ensure the deck does not reset
        shuffle($cur_deck); // If the deck is already shuffled in generateDeck(),
                            // this statement is useless.
        $hand = array();
        $sum = 0; // This will be the value that contains the points each player gains.
                  // We pass this as an argument to getPoints()
        
        while(true)
        {
            $card = array_pop($deck);
            //[floor($card/13)];
            card%13;
            
            
        }
        
        // Here, you will retrieve a card that you are going to pop off cur_deck
        // so that it does not get retrieved again in the game.
        // The way you will do it depends on what the deck array is composed of.
        // If it is already an array of paths to the images:
               - retrieve the element of the array
        // Else:
               - retrieve the element of the array
               - convert it into a path to the image of the card
         
            if($sum + $value <= 42){ // Value is the value of the card.
                $sum = $sum + $value;
            }
                array_push($hand, $card) // Card is the card you retrieved earlier.
            else{
                
                break; // Because we don't want the sum of all the values in the
                            // player's hand to exceed 42.
            }
        getPoints($sum, 1); // We need to store the points of the player.
    
        return $hand;
    }
    
    function getPoints($value, $change)
    {
        static $points = 0;
        
        if ($change == 1)
        {
            $points = $value; 
        }
        
        return $points;
    }
    
    function displayHand($hand)
    {
        foreach ($hand as $card)
        {
          echo "<img src='".$card."' />&nbsp;";
        }
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
?>