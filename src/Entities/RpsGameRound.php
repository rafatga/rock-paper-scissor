<?php

namespace RPS\Entities;

use RPS\Contracts\RpsPlayerContract;
use RPS\Entities\Objects\Rock;

class RpsGameRound {

    private $_id;
    private $_playerOne;
    private $_playerOneObject;
    private $_playerTwo;
    private $_playerTwoObject;
    private $_winner;
    private $loser;
    private $_draw;
    private $_objects;

    public function __construct(int $id, RpsPlayerContract &$playerOne, RpsPlayerContract &$playerTwo, &$objects)
    {
        $this->_id = $id;
        $this->_playerOne = $playerOne;
        $this->_playerTwo = $playerTwo;
        $this->_objects = $objects;
    }

    public function start()
    {
        echo "Round ".$this->_id." \n";
        echo "Player number One picked:\n";
        $this->_playerOneObject = $this->getPlayerHand($this->_playerOne);
        echo $this->_playerOneObject->getName() . "\n";
        echo "Player number Two picked:\n";
        $this->_playerTwoObject = $this->getPlayerHand($this->_playerTwo);
        echo $this->_playerTwoObject->getName() . "\n";
        $this->checkResult();

    }

    public function getPlayerHand(RpsPlayerContract $player)
    {
        if( $player->hasDefaultObject() ) {
            return $player->getDefaultObject();
        } else {
            return $this->_objects[rand(0,(count($this->_objects)-1))];
        }
    }

    private function checkResult()
    {
        
    }

}
