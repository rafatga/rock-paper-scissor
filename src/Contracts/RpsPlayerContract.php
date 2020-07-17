<?php

namespace RPS\Contracts;

abstract class RpsPlayerContract {

    protected $_name;
    protected $_defaultObject;
    protected $_victories = 0;
    protected $_ties = 0;
    protected $_losses = 0;

    public function __construct($name)
    {
        $this->_name = $name;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function getDefaultObject()
    {
        return $this->_defaultObject;
    }

    public function setDefaultObject(RpsObjectContract $object)
    {
        return $this->_defaultObject = $object;
    }

    public function hasDefaultObject() : bool
    {
        return !empty($this->_defaultObject);
    }
}
