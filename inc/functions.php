<?php
/*        
    function imageResize($width, $height, $andreasPic) 
    {    
        //takes the larger size of the width and height and applies the    
        //formula accordingly...this is so this script will work
        //dynamically with any size image
            
        if ($width > $height) 
        {
            $percentage = ($andreasPic / $width);
        } 
        else 
        {
            $percentage = ($andreasPic / $height);
        }
            
        //gets the new value and applies the percentage, then rounds the value
        $width = round($width * $percentage);
        $height = round($height * $percentage);
            
        //returns the new sizes in html image tag format...this is so you
        //can plug this function inside an image tag and just get the
            
        return "width="$width" height="$height"";
            
    }
    $andreasPic = getimagesize("img/userPics/AndreaL1.jpg");
    imageResize($andreasPic[0], $andreasPic[1], 150);
        
*/
    function printGameState($allPlayers)
    {
        foreach($allPlayers as $player)
        {
            echo "<img src='" . $player['imgURL']. "'/><br>";
            echo $player['name'] . "<br/>";                
        }        
    }        
            
    function generateDeck()
    {
        // This function generates an array containing all the cards we want to
        // use.
    }
    
    function getHand($deck)
    {
        // This function takes an array containing each card of the deck and
        // returns an array containing one hand.
        // A hand is a set of a random number of cards whose value does not
        // exceed 42.
    }
    
    function getPoints($points, $change)
    {
        // This function takes an integer that represents the points won and
        // another integer whose value determine if we change the static variable
        // returned.
    }
    
    function displayHand()
    {
        // This function prints the hand.
    }
    
    function displayWinners()
    {
        // This function prints the winners and the points they won.
    }
?>