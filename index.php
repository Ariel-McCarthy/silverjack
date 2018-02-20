<!DOCTYPE HTML>
<html>
    <head>
    <body>
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
            //This line is to display clubs card
            //echo "<img src ='./img/cards/clubs/2.png' />";  
            //echo "<br>";
            
            
            $player3 = array(
                'name' => 'Andrea',
                'imgURL' => './img/userPics/AndreaL1.jpg',
                'hand' => array(),
                'points' => 0
                );
            $player2 = array(
                'name' => 'Celine',
                'imgURL' => 'img/userPics/cwu.jpeg',
                'hand' => array(),
                'points' => 0
                );
            $player1 = array(
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
            
            printGameState($allPlayers);
            
            }
        ?>
    </body>
    </head>
</html>



