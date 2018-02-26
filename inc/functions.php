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
       
       for($i=1; $i<=52; $i++){
           $deck[] = $i;
       }
      shuffle($deck);
       
       
        
    }
   
    function getHand($deck)
    {
        // This function takes an array containing each card of the deck and
        // returns an array containing one hand.
        // A hand is a set of a random number of cards whose value does not
        // exceed 42.
        
        
    }
    
    function displayHand($hand)
    {
         //This function prints the hand.
        
        foreach ($hand as $card)
        {
          echo "<img src='".$card."' />&nbsp;";
        }
    }
    
    function displayWinners()
    {
        // This function prints the winners and the points they won.
    }
    function getPoints($value, $change)
    {
        static $points = 0;
        
        if($change == 1){
            $points = $value; 
        }
        return $points;
    }
?>