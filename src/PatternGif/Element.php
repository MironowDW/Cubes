<?php

namespace PatternGif;

class Element
{

    private $pointX1;
    private $pointX2;
    private $pointY1;
    private $pointY2;

    private $key;

    function __construct($key, $pointX1, $pointY1, $pointX2, $pointY2)
    {
        $this->key = $key;
        $this->pointX1 = $pointX1;
        $this->pointX2 = $pointX2;
        $this->pointY1 = $pointY1;
        $this->pointY2 = $pointY2;
    }

    public function getKey()
    {
        return $this->key;
    }

    public function getPointX1()
    {
        return $this->pointX1;
    }

    public function getPointX2()
    {
        return $this->pointX2;
    }

    public function getPointY1()
    {
        return $this->pointY1;
    }

    public function getPointY2()
    {
        return $this->pointY2;
    }
}
