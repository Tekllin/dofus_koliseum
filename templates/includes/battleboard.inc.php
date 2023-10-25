<?php
use tekllin\Controller\GameBoard;
$board = new GameBoard(10, 10);
$board->changeActivePosPlayer(5, 8);
$board->displayMap();
