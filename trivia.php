<?php
Class Game{
    private $playerturn = 0;//p1 first turn
    //private $timer = 30;//30 seconds
    private $p1correct = 0;
    private $p2correct = 0;

    public function checkWinner(){
        $player;
        if($this->p1correct > $this->p2correct){
            $player = "Player 1";
        }elseif($this->p1correct < $this->p2correct){
            $player = "Player 2";
        }else{
            echo "That's a Draw!\n";
            return;
        }
        echo $player . " is the winner!!\n";
    }

    public function setPlayer($num){
        $this->playerturn = $num;
    }

    public function getPlayer(){
        return $this->playerturn;
    }

    public function resetScore(){
        $this->p1correct = 0;
        $this->p2correct = 0;
    }

    // public function incrementPlayer($playerturn){
    //     if($this->playerturn == 1){
    //         $this->p1correct++;
    //     }else{
    //         $this->p2correct++;
    //     }
    // }

    public function answerQ($playerturn, $goodOrBad){
       if($goodOrBad){
            if($this->playerturn == 0){
                $this->p1correct++;
                echo "Good job Player 1!";
            }else{
                $this->p2correct++;
                 echo "Good job Player 2!";
            } 
       }else{
        if($this->playerturn == 0){
                echo "That's incorrect, Player 1";
            }else{
                 echo "That's incorrect, Player 2";
            } 
       }
        echo"\n";
        echo "Player 1 points: " .  $this->p1correct . "\n";
        echo "Player 2 points: " .  $this->p2correct . "\n";
        echo "\n";
    }

    public function soloAnswerQ($playerturn, $goodOrBad){
       if($goodOrBad){
            if($this->playerturn == 0){
                $this->p1correct++;
                echo "Good job Player 1!";
            }
       }else{
        if($this->playerturn == 0){
                echo "That's incorrect, Player 1";
            } 
       }
        echo"\n";
        echo "Player 1 points: " .  $this->p1correct . "\n";
        // echo "Player 2 points: " .  $this->p2correct . "\n";
        echo "\n";
    }

    public function switchPlayer(){
        $this->playerturn = !$this->playerturn;
    }
}

function playsologame($game){
echo "\n";
echo "Starting new CPU game..\n";
echo "\n";
$game->setPlayer(0);
$game->resetScore();

echo "First Question: Is Liquid Snake the genetically superior clone of Big Boss\n";
echo "True or False? : ";
switch(readline()){
    case"True":
    case "T":
    case "TRUE":
    case "true":
        $game->soloAnswerQ($game->getPlayer(), true);
        break;
    case"False":
    case "F":
    case "FALSE":
    case "false":
        $game->soloAnswerQ($game->getPlayer(), false);
        break;
    default:
        echo "Not a valid answer, sorry!\n";
}

echo"\n";
echo "Next question: Does Solidus Snake defeat the Patriots?\n";
echo "True or False? : ";
switch(readline()){
    case"True":
    case "T":
    case "TRUE":
    case "true":
        $game->soloAnswerQ($game->getPlayer(), false);
        break;
    case"False":
    case "F":
    case "FALSE":
    case "false":
        $game->soloAnswerQ($game->getPlayer(), true);
        break;
    default:
        echo "Not a valid answer, sorry!\n";
}

echo"\n";
echo "Last question: Was the Japanese Raiden plane known as the Jack to America?\n";
echo "True or False? : ";
switch(readline()){
    case"True":
    case "T":
    case "TRUE":
    case "true":
        $game->soloAnswerQ($game->getPlayer(), true);
        break;
    case"False":
    case "F":
    case "FALSE":
    case "false":
         $game->soloAnswerQ($game->getPlayer(), false);
        break;
    default:
        echo "Not a valid answer, sorry!\n";
}
$game->checkWinner();
}

function playgame($game){
echo "\n";
echo "Starting new Duo game..\n";
echo "\n";
$game->setPlayer(0);
$game->resetScore();
$counter = 0;

while($counter < 2){
    if($counter == 0){
         $game->setPlayer(0);
    }else{
        $game->setPlayer(1);
    }
echo "First Question: Is Doctor Doom the smartest man on Earth?\n";
echo "True or False? : ";


switch(readline()){
    case"True":
    case "T":
    case "TRUE":
    case "true":
        $game->answerQ($game->getPlayer(), true);
        break;
    case"False":
    case "F":
    case "FALSE":
    case "false":
        $game->answerQ($game->getPlayer(), false);
        break;
    default:
        echo "Not a valid answer, sorry!\n";
}
$counter++;
}
$counter = 0;

while($counter < 2){
    if($counter == 0){
         $game->setPlayer(0);
    }else{
        $game->setPlayer(1);
    }
echo "Next Question: Is Reed Richards a worthy rival of Doctor Doom?\n";
echo "True or False? : ";
switch(readline()){
    case"True":
    case "T":
    case "TRUE":
    case "true":
        $game->answerQ($game->getPlayer(), false);
        break;
    case"False":
    case "F":
    case "FALSE":
    case "false":
        $game->answerQ($game->getPlayer(), true);
        break;
    default:
        echo "Not a valid answer, sorry!\n";
}
$counter++;
}
$counter = 0;

while($counter < 2){
    if($counter == 0){
         $game->setPlayer(0);
    }else{
        $game->setPlayer(1);
    }
echo "Next Question: Is Johnny Storm an upstanding citizen?\n";
echo "True or False? : ";
switch(readline()){
    case"True":
    case "T":
    case "TRUE":
    case "true":
        $game->answerQ($game->getPlayer(), false);
        break;
    case"False":
    case "F":
    case "FALSE":
    case "false":
        $game->answerQ($game->getPlayer(), true);
        break;
    default:
        echo "Not a valid answer, sorry!\n";
}
$counter++;
}
$counter = 0;

$game->checkWinner();
}


function main(){
        echo "_________________________________________________________________\n";
        echo "    _______   ____   _______              _______               \n";
        echo "       |      |   \     |      \      /      |         /\       \n";
        echo "       |      |___/     |       \    /       |        /__\      \n";
        echo "       |      |  \      |        \  /        |       /    \     \n";
        echo "       |      |   \  ___|___      \/      ___|___   /      \    \n";
        echo "_________________________________________________________________\n";
        echo "\n";

        $game = new Game();
    $playing = true;
    while($playing == true){
        echo "Choose an option: \n";
        echo "1. Play a solo game\n";
        echo "2. Play a duo game\n";
        echo "3. Exit\n";
        switch(readline()){
            case 1:
                playsologame($game);
                break;//plays solo game
            case 2:
                playgame($game);
                break;//plays duo game
            case 3:
                echo "Bye bye\n";
                $playing = false;
                break;//ends program
        }
    }
}

main();
?>