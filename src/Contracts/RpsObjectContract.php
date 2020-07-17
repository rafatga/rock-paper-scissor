<?php

namespace RPS\Contracts;

abstract class RpsObjectContract {

    protected $_name;
    protected $_rules;

    public function getName()
    {
        return $this->_name;
    }

    public function getRules()
    {
        return $this->_rules;
    }
}
