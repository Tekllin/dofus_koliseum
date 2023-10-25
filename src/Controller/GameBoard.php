<?php 
namespace tekllin\Controller;
include_once './templates/includes/hud.inc.php';


// require './templates/includes/Player.php';

// $length = 10;
// $row = array();
// $row = array_fill(0, $length, 0);
// $height = array();
// $height = array_fill(0, $length, $row);



?><?php



class GameBoard {
    private $height;
    private $length;
    private $gameBoard;
    public function __construct($height, $length){
        $this->height = $height;
        $this->length = $length;
        $this->buildBoard();
    }

    public function buildBoard(){
        $row = array();
        $row = array_fill(0, $this->length, 0);
        $col = array();
        $col = array_fill(0, $this->height, $row);
        $this->gameBoard = $col;
    }

    public function changeActivePosPlayer($x, $y){
        $this->gameBoard[$y][$x] = 'player';
    }
    
    public function displayMap(){
        echo '<div class="map">';
        for($y = 0; $y < count($this->gameBoard); $y++){
            $offset = $y % 2;
            for($x = 0; $x < count($this->gameBoard[$y]); $x++){
                $pos = 'x:'.$x.',y:'.$y;
                if($this->gameBoard[$y][$x] == 'player'){
                    echo '<div class="carre-player">'.$pos.'</div>';
                }
                else if($this->gameBoard[$y][$x] == 'active'){
                    echo '<div class="carre-active">'.$pos.'</div>';
                }
                else if(($offset + $x )% 2 == 0){
                    echo '<div class="carre-gris">'.$pos.'</div>';
                }else{
                    echo '<div class="carre-blanc">'.$pos.'</div>';
                }
            }
        }
        echo '</div>';
    }
    public function addPlayer(Player $player){
        $pos = $player->getPos();
        $this->changeActivePosPlayer($pos[0], $pos[1]);
    }
}


// $board = new GameBoard(10, 10);
// // $plyr = new Player();
// // $board->addPlayer($plyr);
// $board->displayMap();

            ?></div>
