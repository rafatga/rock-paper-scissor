<?php

namespace RPS\Entities\Objects;

use RPS\Contracts\RpsObjectContract;

class Rock extends RpsObjectContract {
    protected $_name = 'Rock';
    protected $_rules = [ Scissor::class ];
}
