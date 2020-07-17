<?php

namespace RPS\Entities;

use RPS\Contracts\RpsPlayerContract;
use RPS\Entities\Objects\Rock;

class RpsGame {

    private $_objects;
    private $_rounds;
    private $_playerOne;
    private $_playerTwo;
    private $_numRounds;

    public function __construct(array $objects, RpsPlayerContract $playerOne, RpsPlayerContract $playerTwo, $numRounds)
    {
        $this->_objects = $objects;
        $this->_playerOne = $playerOne;
        $this->_playerTwo = $playerTwo;
        $this->_numRounds = $numRounds;
    }

    public function start()
    {
        $this->check();

        echo "Welcome to RpsGame!\n";
        echo "The match will start in 5 seconds:\n";
        echo "1\n";
        echo "2\n";
        echo "3\n";
        echo "4\n";
        echo "5\n";

        for ($x = 0; $x <= $this->_numRounds; $x++) {
            $round = new RpsGameRound($x, $this->_playerOne, $this->_playerTwo, $this->_objects);
            $round->start();
            $this->_rounds[] = $round;
        }

    }

    private function check()
    {
        //TODO check if player defaultObject is in object list
    }
}
