<?php

namespace RPS\Entities\Objects;

use RPS\Contracts\RpsObjectContract;

class Paper extends RpsObjectContract {
    protected $_name = 'Paper';
    protected $_rules = [ Rock::class ];
}
