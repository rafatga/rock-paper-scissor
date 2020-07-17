<?php

require __DIR__ . "/vendor/autoload.php";

use RPS\Entities\RpsGame;
use RPS\Entities\Player;
use RPS\Entities\Objects\Rock;
use RPS\Entities\Objects\Paper;
use RPS\Entities\Objects\Scissor;

try {
    $objects = [
        new Rock(),
        new Paper(),
        new Scissor(),
    ];

    $playerOne = new Player('Alex');
    $playerTwo = new Player('Machine');
    $playerTwo->setDefaultObject($objects[0]);

    $newGame = new RpsGame($objects, $playerOne, $playerTwo, 5);
    $newGame->start();

} catch (Exception $e) {
    echo $e->getMessage();
}


