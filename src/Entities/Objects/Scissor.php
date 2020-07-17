<?php

namespace RPS\Entities\Objects;

use RPS\Contracts\RpsObjectContract;

class Scissor extends RpsObjectContract {
    protected $_name = 'Scissor';
    protected $_rules = [ Paper::class ];
}
